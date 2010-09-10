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


ob_start();
session_name('n13news');
session_start();
ob_end_clean();

require_once('db.php');
require_once('config.php');

// is logged in
if(isloggedin()){
	// has access to templates
	if(getaccess("templates")){
		// when selected templates are exported the IDs get sent to this file as a serialized string
		$templateids = unserialize($_GET['templateids']);

		$exist = array();
		if(is_array($templateids)){
			foreach($templateids AS $id){
				// check the unserialized IDs to make sure they exists
				if(count(DataAccess::fetch("SELECT id FROM " . NEWS_TEMPLATES . " WHERE id = ?", $id)) > 0){
					// IDs which exist get added to the $exists array
					$exist[] = $id;
				}
			}
		}
		
		// continue if the $exists array has at least one entry
		if(count($exist) > 0){
			// implode the $exists array into a string separated by commas to be used in a mysql "WHERE IN" query
			$existing = implode(",", $exist);
			$templatedata = DataAccess::fetch("SELECT * FROM " . NEWS_TEMPLATES . " WHERE id IN ($existing)");
			
			// if more than one template, change filename to show how many templates followed by a timestamp
			if(count($exist) > 1){
				$filename = "(" . count($exist) . ")_Templates_" . time() . ".txt";
			
			// if a single template change the filename to the name of that template followed by a timestamp
			}else{
				$name = DataAccess::fetch("SELECT name FROM " . NEWS_TEMPLATES . " WHERE id = ?", $existing);
				$name = $name['0']['name'];
				$name = str_replace(" ", "_", $name);
				$filename = $name . "_" . time() . ".txt";
			}
			
			// send headers to the browser to force a file download
			header('Content-type: text/plain');
			header('Content-Disposition: attachment; filename="' . $filename . '"');
			
			echo serialize($templatedata);
			// output serialized template data
		}else{
			// no templates selected error
			echo "No templates selected";
		}
	}else{
		// no access error
		echo "You don't have access to export templates";
	}
}else{
	// not logged in error
	echo "You must be logged in to download exported templates";
}
?>