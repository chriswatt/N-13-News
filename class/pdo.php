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
		$db = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DATABASE, USER, PASS);   
		#$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db; 
	}
	public function close_db_conn(){

	}
	public function put() {
		//get args passed to fuction
		$args	= func_get_args();
		//get the first arg which should be the sql string
		$sql	= array_shift($args);
		$link	= DataAccess::establish_db_conn();
		$stmt = $link->prepare($sql);
		
		$stmt->execute($args);
		$errorinfo = $stmt->errorInfo();
		if($errorinfo[0] == "00000"){
			$results = $stmt->fetchAll();
		}else{
			if($_SESSION['showerrors'] == true){
				$_SESSION['errorcount']++;
				$_SESSION['errors'][] = '<strong style="color: #AA0000">Error</strong>: ' . $errorinfo[2] . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>";
			}else{	
				die('<strong style="color: #AA0000">Error</strong>: ' . $errorinfo[2] . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>");
			}
		}

		$_SESSION['insert_id'] = $link->lastInsertId();
		return true;
	}
	public function fetch(){
		//get args passed to fuction
		$args	= func_get_args();
		//get the first arg which should be the sql string
		$sql	= array_shift($args);
		$link	= DataAccess::establish_db_conn();
		$stmt = $link->prepare($sql);

		$stmt->execute($args);
		$errorinfo = $stmt->errorInfo();
		if($errorinfo[0] == "00000"){
			$results = $stmt->fetchAll();
		}else{
			if($_SESSION['showerrors'] == true){
				$_SESSION['errorcount']++;
				$_SESSION['errors'][] = '<strong style="color: #AA0000">Error</strong>: ' . $errorinfo[2] . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>";
			}else{	
				die('<strong style="color: #AA0000">Error</strong>: ' . $errorinfo[2] . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>");
			}
		}
		DataAccess::close_db_conn();

		return $results;
	}
}
?>