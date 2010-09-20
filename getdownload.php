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

// Used for the add article form.
// When selecting an uploaded image to insert
// each time you change the category a request
// is sent to this file specifying the category.
// Images assigned to that category are made into thumbnails
// then returned.

ob_start();
session_name('n13news');
session_start();
ob_end_clean();

require_once('db.php');
require_once('config.php');



// if a download is requested grab the download count, increment by 1 then redirect to the file
$file = $_GET['fileuid'];
$fileinfo = DataAccess::fetch("SELECT downloadcount, url FROM " . NEWS_FILES . " WHERE uid = ?", $file);
if(count($fileinfo) > 0){
	$downloadcount = $fileinfo['0']['downloadcount'];
	$downloadcount++;
	$rurl = $fileinfo['0']['url'];
	DataAccess::put("UPDATE " . NEWS_FILES . " SET downloadcount = ? WHERE uid = ?", $downloadcount, $file);
	redirect($rurl);
}else{
	// file doesn't exist - do nothing
}
?>