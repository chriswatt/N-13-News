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

// is logged in
if(isloggedin()){
	// has access to news
	if(getaccess("news")){
		$catid = $_POST['catid'];
		$totalfilesize = 0;
		$catgroupimages = DataAccess::fetch("SELECT storyid, catid, type, uid FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = 'image'", $catid);
		echo "<div id=\"imagecat\" class=\"\">";

		if(!$catid){
			$catgroupimages = DataAccess::fetch("SELECT file,filesize,uploader,height,width,uid FROM " . NEWS_IMAGES . " WHERE uid NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'image') ORDER BY uid DESC");		
			foreach($catgroupimages AS $row2){
				$file = $row2['file'];
				list($width, $height, $type, $attr) = getimagesize($imageuploaddir . $file);
				if($width > 80 || $height > 80){
					$new_width = $width;
					$new_height = $height;
					$percent = 0.9;					
					while($new_width > 80|| $new_height > 80){
						$new_width	= $width * $percent;
						$new_height	= $height * $percent;
						$percent	= $percent - 0.01;
					}
				}else{
					$new_width	= $width;
					$new_height	= $height;			
				} 		 

				$filesize = round(filesize($imageuploaddir. $file) / 1024,0);
				$totalfilesize += $filesize;
				$filesize .= " KB";
				$x = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				$x = str_replace(basename($_SERVER['REQUEST_URI']),$uploaddir . $file,$x); 		 
					
				echo '<div style="float: left; width: 112px; height: 130px"><div id="'.$b.'" class="thumbnail" style="cursor: pointer">';
				echo '<div style="text-align: left">';
				echo '</div>';
				if($imageupload_thumbnails == "1"){
					echo '<img onclick="insertimage(document.getElementById(\'whichbox\').innerHTML,\''.UPLOADPATH . $file.'\'); bbcode(\'image\',\'\')" width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="?action=options&mod=imageuploads&thumb='.UPLOADPATH.$file.'&height='.$new_height.'&width='.$new_width.'" />';
				}else{
					echo '<img onclick="insertimage(document.getElementById(\'whichbox\').innerHTML,\''.UPLOADPATH . $file.'\'); bbcode(\'image\',\'\')" width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="'.UPLOADPATH.$file.'" />';
				}
				echo '</div></div>';
			}
		}else{
			foreach($catgroupimages AS $row){
				$catimages = DataAccess::fetch("SELECT file, filesize, uploader, height, width, uid FROM " . NEWS_IMAGES . " WHERE uid = ?", $row['storyid']);
				foreach($catimages AS $row2){
					$file = $row2['file'];
					list($width, $height, $type, $attr) = getimagesize($imageuploaddir . $file);
					if($width > 80 || $height > 80){
						$new_width = $width;
						$new_height = $height;
						$percent = 0.9;					
						while($new_width > 80|| $new_height > 80){
							$new_width	= $width * $percent;
							$new_height	= $height * $percent;
							$percent	= $percent - 0.01;
						}
					}else{
						$new_width	= $width;
						$new_height	= $height;			
					} 		 

					$filesize = round(filesize($imageuploaddir. $file) / 1024,0);
					$totalfilesize += $filesize;
					$filesize .= " KB";
					$x = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
					$x = str_replace(basename($_SERVER['REQUEST_URI']),$uploaddir . $file,$x); 		 
						
					echo '<div style="float: left; width: 112px; height: 130px"><div id="'.$b.'" class="thumbnail" style="cursor: pointer">';
					echo '<div style="text-align: left">';
					echo '</div>';
					if($imageupload_thumbnails == "1"){
						echo '<img onclick="insertimage(document.getElementById(\'whichbox\').innerHTML,\''.UPLOADPATH . $file.'\'); bbcode(\'image\',\'\')" width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="?action=options&mod=imageuploads&thumb='.$imageuploaddir.$file.'&height='.$new_height.'&width='.$new_width.'" />';
					}else{
						echo '<img onclick="insertimage(document.getElementById(\'whichbox\').innerHTML,\''.UPLOADPATH . $file.'\'); bbcode(\'image\',\'\')" width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="'.$imageuploaddir.$file.'" />';
					}
					echo '</div></div>'; 						
				}
			}
		}
		echo "</div>";
	}else{
		// no access error
		echo "You don't have access to this section";
	}
}else{
	// not logged in error
	echo "You must be logged in to download exported templates";
}
?>