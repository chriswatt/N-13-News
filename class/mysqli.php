<?php
/***********************************************************************
  N-13 News is a free news publishing system
  Copyright (C) 2010 Chris Watt
  
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.
  
  You should have received a copy of the GNU General Public License
  along with this program.If not, see <http://www.gnu.org/licenses/>.
***********************************************************************/

class DataAccess {
	public function establish_db_conn(){
		global $cfg;
		$connection	= mysqli_connect(HOSTNAME,USER,PASS,DATABASE,(int)PORT,SOCKET);
		$db			= mysqli_select_db($connection,DATABASE);
		return $connection; 
	}
	public function close_db_conn(){

	}
	public function put() {
		//get args passed to fuction
		$args	= func_get_args();
		//get the first arg which should be the sql string
		$sql	= array_shift($args);
		$link	= DataAccess::establish_db_conn();
		if(!$stmt = mysqli_prepare($link, $sql)) {
			DataAccess::close_db_conn();
			$error = mysqli_error($link);
			if($_SESSION['showerrors'] == true){
				$_SESSION['errorcount']++;
				$_SESSION['errors'][] = '<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>";
			}else{
				die('<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>");			
			}
		}
		

		if(count($args) > 0){		
			//make all types a string
			$types = str_repeat('s', count($args));
			//add types and string to the beginning of args
			array_unshift($args, $types);
			array_unshift($args, $stmt);
			
			//hax for 5.3 needed to make array referenced properly
			$newargs = array();
			foreach($args as $k => &$arg){
				$newargs[$k] = &$arg;
			} 
			call_user_func_array('mysqli_stmt_bind_param', $newargs);
		}
 
		mysqli_stmt_execute($stmt);
		if(mysqli_affected_rows($link) > 0){
			$_SESSION['insert_id'] = @mysqli_insert_id($link);
			return true;
		}else{
			return false;
		}
	}
	public function fetch(){
		//get args passed to fuction
		$args	= func_get_args();
		//get the first arg which should be the sql string
		$sql	= array_shift($args);
		$link	= DataAccess::establish_db_conn();
		if (!$stmt = mysqli_prepare($link, $sql)) {
			DataAccess::close_db_conn();
			$error = mysqli_error($link);
			if($_SESSION['showerrors'] == true){
				$_SESSION['errorcount']++;
				$_SESSION['errors'][] = '<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>";
			}else{	
				die('<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>");
			}
		}

		if(count($args) > 0){
			//make all types a string
			$types = str_repeat('s', count($args));
			//add types and string to the beginning of args
			array_unshift($args, $types);
			array_unshift($args, $stmt);
			
			//hax for 5.3 needed to make array referenced properly
			$newargs = array();
			foreach($args as $k => &$arg){
				$newargs[$k] = &$arg;
			} 
			call_user_func_array('mysqli_stmt_bind_param', $newargs);
		}

		mysqli_stmt_execute($stmt);
		$result	= mysqli_stmt_result_metadata($stmt);
		$fields	= array();
		//append results new fields array
		while ($field = mysqli_fetch_field($result)) {
			$name = $field->name;
			$fields[$name] = &$$name;
		}

		//add query to fields array
		array_unshift($fields, $stmt);
		call_user_func_array('mysqli_stmt_bind_result', $fields);
		
		//remove query from fields array
		array_shift($fields);
		$results = array();
		while (mysqli_stmt_fetch($stmt)) {
			$temp = array();
			foreach($fields as $key => $val) { $temp[$key] = $val; }
				array_push($results, $temp);
		}

		mysqli_free_result($result);
		mysqli_stmt_close($stmt);
		DataAccess::close_db_conn();

		return $results;
	}
}
?>