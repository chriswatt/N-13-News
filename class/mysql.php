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
	function establish_db_conn(){
		$connection	= mysql_connect(HOSTNAME.":".PORT,USER,PASS);
		$db			= mysql_select_db(DATABASE);
		return $connection; 
	}

	function put() {
		$args	= func_get_args();
		$sql	= array_shift($args);
		$link	= DataAccess::establish_db_conn();

		if(count($args) > 0){
			$sqlparts = explode("?", $sql);
			$newsql = '';
			$x = 0;
			foreach($sqlparts AS $part){
				if(isset($args[$x])){
					$argpart	= $args[$x];
				}else{
					$argpart = '';
				}
				$argpart	= mysql_escape_string($argpart);
				$newsql		.= $part;
				if($x < count($args)){
					$newsql	.= sprintf("'%s'", $argpart);
				}
				$x++;
			}
		}else{
			$newsql = $sql;
		}
		$query = mysql_query($newsql);
		if($query){
			$_SESSION['insert_id'] = mysql_insert_id();
			return true;
		}else{
			$error = mysql_error($link);
			
			if($_SESSION['showerrors'] == true){
				$_SESSION['errorcount']++;
				$_SESSION['errors'][] = '<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>";
			}else{	
				die('<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>");
			}
			return false;
		}
		
	}
	function fetch() {
		$args	= func_get_args();
		$sql	= array_shift($args);
		$link	= DataAccess::establish_db_conn();		
		if(count($args) > 0){
			$sqlparts	= explode("?", $sql);
			$newsql		= '';
			$x = 0;
			foreach($sqlparts AS $part){
				if(isset($args[$x])){
					$argpart	= $args[$x];
				}else{
					$argpart = '';
				}
				$argpart	= mysql_escape_string($argpart);
				$newsql		.= $part;
				if($x < count($args)){
					$newsql	.= sprintf("'%s'", $argpart);
				}
				$x++;
			}
		}else{
			$newsql = $sql;
		}
		
		$query = mysql_query($newsql);

		if($query){
			$results = array();
			$x = 0;
			while($row = mysql_fetch_assoc($query)){
				foreach($row AS $key => $val){ $results[$x][$key] = $val; }
				$x++;
			}
			return $results;
		}else{
			$error = mysql_error($link);
			if($_SESSION['showerrors'] == true){
				$_SESSION['errorcount']++;
				$_SESSION['errors'][] = '<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>";
			}else{	
				die('<strong style="color: #AA0000">Error</strong>: ' . $error . ' <br /><strong style="color: #AA0000">Statement</strong>: ' . $sql . ' <br /><strong style="color: #AA0000">Arguments</strong>: <pre>' . print_r($args, true) . "</pre>");
			}
			return false;
		}
	}
}
?>