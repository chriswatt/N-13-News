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

if (!defined('ABSPATH')){ die(); }

echo '		<div id="pageLeft">
			<div id="pageIconHome"></div><!--icon-->
			<div id="titleHome">N-13 News<br />4.0</div>
		</div><!--leftside-->';
echo '<div id="pageRight">';


$_GET['view'] = (empty($_GET['view'])) ? '' : $_GET['view'];
$_GET['file'] = (empty($_GET['file'])) ? '' : $_GET['file'];
$_GET['catid'] = (empty($_GET['catid'])) ? '' : $_GET['catid'];
$_POST['imageoptions'] = (empty($_POST['imageoptions'])) ? '' : $_POST['imageoptions'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
if($_GET['view'] == "thumbnails" || !$_GET['view']){
	$view = "thumbnails";
}else{
	$view = "details";
}
if($_GET['file'] && $_GET['catid']){
	$file = $_GET['file'];
	$cat = $_GET['catid'];
	DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ? AND catid = ?", "image", $file, $cat);
	echo "<span class=\"success\">".$langmsg['img'][10] . "</span>";		
}
$i = 0;
if($_POST['imageoptions']){
	$selected = $_POST['selectedimages'];
	if(count($selected) !== 0){    		 		
		foreach($selected as $file){
			if($_POST['imageoptions'] == "delete"){		 			
				$filename = DataAccess::fetch("SELECT file FROM " . NEWS_IMAGES . " WHERE uid = ?", $file);
				$filename = $filename['0']['file'];
				DataAccess::put("DELETE FROM " . NEWS_IMAGES . " WHERE uid = ?", $file);
				DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $file, "image");
				if(file_exists($imageuploaddir.$filename)){
					if(unlink($imageuploaddir.$filename)){
						$i++;
					}
				}	
			}elseif($_POST['imageoptions'] == "addtocat"){
				$addtocat = $_POST['addtocat'];
				if(count(DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND storyid = ? AND type = ?", $addtocat, $file, "image")) < 1){
					DataAccess::put("INSERT INTO " .NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $file, $addtocat, "image"); 
				}		 		
				$i++;
			}elseif($_POST['imageoptions'] == "removefromcat"){
				$removefromcat = $_POST['addtocat'];
				DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ? AND catid = ?", "image", $file, $removefromcat);
				$i++;
			}
		}
		if($i > 0){
			if($_POST['imageoptions'] == "delete"){
				 echo "<span class=\"success\">". $i . " ". $langmsg['img'][5]."</span>";
			}elseif($_POST['imageoptions'] == "addtocat"){
				 echo "<span class=\"success\">".$langmsg['img'][11]. "</span>";	 			
			}elseif($_POST['imageoptions'] == "removefromcat"){
				echo "<span class=\"success\">$i images removed from the selected category.</span>";
			}
		}
	}
}

if(!is_writable("uploads/")){
	echo "<span class=\"error\">" . $langmsg['img'][32] . "</span>";
	echo "<br /><br />";
}

$imagefiletypes = DataAccess::fetch("SELECT imagefiletypes FROM " . NEWS_OPTIONS . " WHERE 1");
$imagefiletypes = $imagefiletypes['0']['imagefiletypes']; 
function editimageform(){
	global $langmsg;
	$imageuid = $_GET['imageuid'];
    $imagedata = DataAccess::fetch("SELECT * FROM " . NEWS_IMAGES . " WHERE uid = ?", $imageuid);
	if(count($imagedata) >= 1){
		$all			= $imagedata['0'];
		$filename		= $all['file'];
		echo "<div class=\"subheaders\">".$langmsg['img'][14]. "</div>";
		echo "<div class=\"subheaders_body displaytable\"><table width=\"100%\">";
		echo "<tr><td>".$langmsg['img'][12] . "</td><td><span class=\"ok\">$filename</span></td></tr>";
		echo "<tr><td valign=top width=\"120\">";
		echo $langmsg['img'][13];
		echo "</td><td valign=top>";
		echo "<form action=\"\" method=\"POST\">\n";
		$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
		$allowedcats = $allowedcats['0']['cats'];
		$d = '';
		if($allowedcats !== "all"){
			$a = explode(",",$allowedcats);
			foreach($a as $c){
				$d .= "id LIKE '$c' OR ";
			}
			$d = substr($d,0,(strlen($d) - 3));
			$d = "WHERE " . $d;			            
		}
		$gg = 0;
		$zcats = "";
		$groupcats = DataAccess::fetch("SELECT catid FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "image", $imageuid);
		foreach($groupcats AS $row2){
			$zcats .= ":" . $row2['catid'] . ":";
		} 
		$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " $d ORDER BY name");
		foreach($allcats AS $row){
			if($gg < 1){
				$_SESSION['firstcat'] = $row['name'];
				$_SESSION['firstcatid'] = $row['id'];
				$gg++;
			}
			echo "<div style=\"float: left\"><input type=\"checkbox\" ";
				if(stristr($zcats, ":" . $row['id'] . ":")){
					echo "checked=\"checked\" ";
				}
			echo "style=\"margin-right: 1px; width: 15px; padding-left: 0px; margin-left: 0px\" name=\"cats[]\" value=\"$row[id]\" id=\"cat_$row[id]\"><label for=\"cat_$row[id]\" style=\"vertical-align: text-top; margin-left: 1px; padding-right: 20px\">$row[name]</label></div>";
		}

		echo "</td></tr>";		
		echo "<tr><td valign=top>";
		echo "<tr><td></td><td>";
		echo "<input type=\"submit\" name=\"S1\" value=\"".$langmsg['img'][17]. "\"><br />\n";
		echo "</form>";
		echo "</td></tr>";
		echo "</table>";
		echo "</div>";
	}else{
		echo $langmsg['img'][18];
	}
	
}

function imageuploadform(){
	global $langmsg;
	echo "<div class=\"subheaders\">".$langmsg['img'][1]."</div>";
	echo "<div class=\"subheaders_body displaytable\"><table width=\"100%\"><tr><td valign=top width=\"120\">";
	echo $langmsg['img'][13];
	echo "</td><td valign=top>";
	echo "<form enctype=\"multipart/form-data\" action=\"\" method=\"POST\">\n";
          
	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$allowedcats = $allowedcats['0']['cats'];
	$d = '';
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$d .= "id LIKE '$c' OR ";
		}
		$d = substr($d,0,(strlen($d) - 3));
		$d = "WHERE " . $d;			            
	}

	$gg = 0;
	$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " $d ORDER BY name");
	foreach($allcats AS $row){
		if($gg < 1){
			$_SESSION['firstcat'] = $row['name'];
			$_SESSION['firstcatid'] = $row['id'];
			$gg++;
		}
		echo "<div style=\"float: left\"><input type=\"checkbox\" ";
		echo "style=\"margin-right: 1px; width: 15px; padding-left: 0px; margin-left: 0px\" name=\"cats[]\" value=\"$row[id]\" id=\"cat_$row[id]\"><label for=\"cat_$row[id]\" style=\"vertical-align: text-top; margin-left: 1px; padding-right: 20px\">$row[name]</label></div>";
	}
	echo "</td></tr>";
	echo "<tr><td valign=top>";
	echo $langmsg['img'][4];
	echo "</td><td> <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000000\" />\n";
	echo "<div id=\"ufilecontainer\">";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "</div>";
	echo "<input type=\"submit\" name=\"S1\" value=\"".$langmsg['img'][2]."\"><br />\n";
	echo "</form>";
	echo "</td></tr>";
	echo "</table>";
	echo "</div>";
}

$uploaddir = $imageuploaddir;
$_GET['imageuid'] = (empty($_GET['imageuid'])) ? '' : $_GET['imageuid'];
$_GET['newimage'] = (empty($_GET['newimage'])) ? '' : $_GET['newimage'];
$_POST['image_title'] = (empty($_POST['image_title'])) ? '' : $_POST['image_title'];
$_POST['image_description'] = (empty($_POST['image_description'])) ? '' : $_POST['image_description'];
if(!$_GET['imageuid']){
	if($_GET['newimage']){
		if(!$_POST['S1']){
			imageuploadform();
		}else{
			$e = 0;
			$j = 1;
			while($e < count($_FILES['uploadedfile']['name'])){

				if($_FILES['uploadedfile']['name'][$e]){
					$filename			= basename($_FILES['uploadedfile']['name'][$e]);
					$filename			= str_replace(" ", "_", $filename);
					$filename_length	= strlen($filename);
					$filename_extension	= strrchr($filename, ".");
					$filename_extension	= strtolower($filename_extension);
					$filename_extension	= str_replace(".","",$filename_extension);
					$minetype			= $_FILES['uploadedfile']['type'][$e];
					$allowedminetypes	= array("0" => "image/jpeg", "1" => "image/png", "2" => "image/gif");
					$allowed			= "true";
					foreach($allowedminetypes as $eachminetype){
						if(!$_FILES['uploadedfile']['type'][$e] == $eachminetype){
							$allowed = false;
						}
					} 
					$allowedfiletypes = explode(" ",$imagefiletypes);
					#when changing extensions, be sure to do so about 20~ lines above aswell
					foreach($allowedfiletypes as $type){
						if(!$filename_extension == $type){
							$allowed = false;
						}
					}
					if($allowed == "true"){
						$target_path = $uploaddir;
						$target_path = $target_path . $filename;
						#check if a file already exists with that name
						if(file_exists($uploaddir . $filename)){
							echo "<span class=\"error\">"  . "$j. " . $filename . " - " . $langmsg['img'][30]."</span>";
						}elseif(move_uploaded_file($_FILES['uploadedfile']['tmp_name'][$e], $target_path)) {
							$filesize = filesize($uploaddir . $filename);
							$filesize = ($filesize / 1000);
							list($width, $height, $type, $attr) = getimagesize($uploaddir . $filename);
							if(!$height || !$width){
								unlink($uploaddir . $filename);
								echo "<span class=\"leftnavmain error\">" . "$j. " . $filename . " - " . $langmsg['img'][9]."</span>";
							}else{
								echo "<span class=\"success\">" . $j . " " . $filename . " - " . $langmsg['img'][6]."</span>";
								$file 		= basename($filename);
								$uploader	= $_SESSION['uid'];
								$title		= $_POST['image_title'];
								$description= $_POST['image_description'];
								if(!chmod($uploaddir.$file, 0655)){
									echo "<span class=\"error\">Unable to CHMOD file</span>";
								}                                                          
								DataAccess::put("INSERT INTO " . NEWS_IMAGES . " (file, filesize, uploader, height, width) VALUES (?, ?, ?, ?, ?)", $file, $filesize, $uploader, $height, $width);
								$fileuid = DataAccess::fetch("SELECT uid FROM " . NEWS_IMAGES . " WHERE file = ?", $file);
								$fileuid = $fileuid['0']['uid'];
								$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
								if(count($_POST['cats']) > 0){	 
									foreach($_POST['cats'] as $catid){					
										DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $fileuid, $catid, "image");
									}
								}
							}
						}else{
							echo "<span class=\"leftnavmain error\">" . $j . " " . $filename .  " - " .  $langmsg['img'][7]."</span>";
						}
					}else{
						echo "<span class=\"leftnavmain error\">" . $j . " " . $filename . " - " . $langmsg['img'][8]."</span>";
					}
					$j++;
				}
				$e++;
			}
			imageuploadform();
		}
	}
}else{
	if(!$_POST['S1']){
		editimageform();
	}else{
		$title			= $_POST['image_title'];
		$description	= $_POST['image_description'];	
		$imageuid		= $_GET['imageuid'];		
		DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "image", $imageuid);
		$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
		if(count($_POST['cats']) !== 0){		
			foreach($_POST['cats'] as $catuid){
				$type = 'image';
				$storyid = $imageuid;
				DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (type, storyid, catid) VALUES (?, ?, ?)", $type, $storyid, $catuid);
			}
		}
		echo "<span class=\"success\">".$langmsg['img'][19]."</span>";
	}
}

$accessdatax = unserialize($_SESSION['accessdata']);
if($accessdatax['0']['fileimages'] == "1"){
	$restrict = '';
}else{
	$restrict = "AND uploader = '" . $_SESSION['uid'] . "'";
}

$restrict2 =  str_replace("AND", "WHERE", $restrict);
$catid = $_GET['catid'];
$num = DataAccess::fetch("SELECT COUNT(uid) AS num FROM " . NEWS_IMAGES . " $restrict2");
$num = $num['0']['num'];             
$f = $langmsg['img'][3];
$f = "  <b>$num</b>&nbsp;" . $f;
$f = $f . "&nbsp;<b><span id=\"totalfilesize\"></span></b>&nbsp;";
echo "<div class=\"panel\">$f";
echo "</div><br style=\"clear: both\" />";

echo "<table width=\"100%\"><tr>";        
echo "<td valign=top align=top>";

echo "<div style=\"padding-bottom: 7px\">";
echo "<span style=\"float: right\">".$langmsg['img'][22]." <select id=\"catchange\" onchange=\"window.location='?action=options&mod=imageuploads&catid=' + document.getElementById('catchange').value + '&view=$view';\" style=\"margin-top: 0px\" name=\"category_show\">";
echo "<option value=\"-1\">".$langmsg['img'][31]."</option>";
echo "<optgroup label=\"------\">";
echo "</optgroup>";						
echo "<option value=\"\" ";
if(!$_GET['catid']){ 
	echo "selected=\"selected\""; 
}
echo "></option>";
$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
$allowedcats = $allowedcats['0']['cats'];
$d = '';
if($allowedcats !== "all"){
	$a = explode(",",$allowedcats);
	foreach($a as $c){
		$d .= "id LIKE '$c' OR ";
	}
	$d = substr($d,0,(strlen($d) - 3));
	$d = "WHERE " . $d;			            
}
$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " $d ORDER BY name");
foreach($allcats AS $row){		            	
	echo "<option value=\"$row[id]\"";
	if($_GET['catid'] == $row['id']){
		echo " selected=\"selected\"";							
	}
	echo ">$row[name]</option>";
}
echo "</select></span>";
if($view == "details"){
	echo "<a href=\"?action=options&mod=imageuploads&view=thumbnails&catid=$catid\">".$langmsg['img'][20]."</a>";				
	echo " | ";			
	echo $langmsg['img'][21];			
}else{
	echo $langmsg['img'][20];			
	echo " | ";			
	echo "<a href=\"?action=options&mod=imageuploads&view=details&catid=$catid\">".$langmsg['img'][21]."</a>";			
}
echo "</div>";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<form method=\"post\" id=\"imageform\" name=\"imageform\" action=\"?action=options&mod=imageuploads\">";
$catid = $_GET['catid'];

$b = 1;
$dir = $uploaddir;
$cc = 0;
$groupcats = DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = ?", $catid, "image");
$hh = '';
foreach($groupcats AS $row){
	if($cc < 1){
		$hh .= "WHERE";
	}
	$hh .= " uid = '" . $row['storyid'] . "' OR";
	$cc++; 
}
$hh = substr($hh,0,strlen($hh) - 3);


if(!$catid){	
	#if no cat is specified, show all images not assigned to cats
	$allimages = DataAccess::fetch("SELECT * FROM " . NEWS_IMAGES . " WHERE uid NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'image') $restrict ORDER BY uid DESC");
}elseif($catid == "-1"){
	#if "All Categories" is selected show both non assigned images and assigned.
	#if "All Categories" is selected so all images
	#first grab images not assigned to any cats
	$sql = "SELECT * FROM " . NEWS_IMAGES . " WHERE uid NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'image') $restrict ";		
	$sql .= " UNION ";		
	#now grab all iamges that are assigned to cats and join them
	$sql .= " SELECT * FROM " . NEWS_IMAGES . " " . $hh . " $restrict ORDER BY uid DESC";		
	$allimages = DataAccess::fetch($sql);		
}else{
	if($hh){
		$sql = "SELECT * FROM " . NEWS_IMAGES . " " . $hh . " $restrict ORDER BY uid DESC";
		$allimages = DataAccess::fetch($sql);
	}else{
		$sql = "";
		$allimages = array();
	}
}

if($view == "thumbnails"){
	$totalfilesize = 0;
	if(count($allimages) > 0){
		foreach($allimages AS $row){
			$uploader	= DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $row['uploader']);
			$uploader	= $uploader['0']['user'];
			$file		= $row['file'];
			$file		= str_replace(" ", "%20",$file);
			$f			= explode(" ",$imagefiletypes);
			$ext		= substr($file,strlen($file) - 3);
			$allowed	= false;
			foreach($f as $g){
				if($g == $ext){
					$allowed = true;
				}
			}				
			if(@getimagesize($uploaddir . $file)){
				$allowed = true;
			}else{
				$allowed = false;
			}				
			if($allowed == true){	
				list($width, $height, $type, $attr) = getimagesize($uploaddir . $file);		
				if($width > 80 || $height > 80){
					$new_width	= $width;
					$new_height	= $height;
					$percent	= 0.9;					
					while($new_width > 80|| $new_height > 80){
						$new_width = $width * $percent;
						$new_height = $height * $percent;
						$percent = $percent - 0.01;
					}
				}else{
					$new_width = $width;
					$new_height = $height;			
				} 		   
				$filesize		= round(filesize($uploaddir . $file) / 1024,0);
				$totalfilesize	+= $filesize;
				$filesize		.= " KB";
				$x = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				$x = str_replace(basename($_SERVER['REQUEST_URI']),$uploaddir . $file,$x);				 		   
				echo '<div style="float: left; width: 105px; height: 130px"><div id="'.$b.'" class="thumbnail">';
				echo '<div style="text-align: left">';
				if($catid){
					echo '<div style="float: right; margin-top: -3px" ><a href="#" class="delete" title="'.$langmsg['img'][28].'" onclick="removecat(\'' . $b . '\',\'' . $row['uid'] . '\',\'' . $catid . '\', \'' . $view . '\')">x</a></div>';
				}
				echo '<input style="margin: 0px; margin-bottom: 5px;" name="selectedimages[]"  id="check_'.$b.'" value="'.$row['uid'].'" onclick="colorfield(\''.$b.'\')" type="checkbox" />';
				echo ' <span class="delete"></span> </div>';
				if($imageupload_thumbnails == 1){
					echo '<a href="' . $uploaddir.$file.'" rel="lightbox" onmouseover="showeditimage(\'' . $b . '\');" onmouseout="hideeditimage(\'' . $b . '\');" title="'.$file.'<br /><b>'.$langmsg['img'][24].'</b>: '.$filesize.'<br /><b>'.$langmsg['img'][25].'</b>: ' . $uploader. '"><img width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="?action=options&mod=imageuploads&thumb='.$imageuploaddir.$file.'&height='.$new_height.'&width='.$new_width.'" /></a>';
				}else{
					echo '<a href="' . $uploaddir.$file.'" rel="lightbox" onmouseover="showeditimage(\'' . $b . '\');" onmouseout="hideeditimage(\'' . $b . '\');" title="'.$file.'<br /><b>'.$langmsg['img'][24].'</b>: '.$filesize.'<br /><b>'.$langmsg['img'][25].'</b>: ' . $uploader. '"><img width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="'.$imageuploaddir.$file.'" /></a>';
				}
				echo '<a title="Edit this image" onmouseover="showeditimage(\'' . $b . '\');" onmouseout="hideeditimage(\'' . $b . '\');" id="' . $b . '_editicon" style="display: none;" href="?action=options&mod=imageuploads&catid=' . $_GET['catid'] . '&view=' . $_GET['view'] . '&imageuid=' . $row['uid'] . '" class="imageeditbutton"><img src="images/icons/pencil.png" /></a>';
				echo '</div></div>'; 		   
				$b++;
			}		
		}
	}		
}else{
	echo "<table id=\"rows\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">";
	echo "<tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"55%\">".$langmsg['img'][23]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['img'][24]."</td><td class=\"tableshead tablerightborder\" width=\"25%\">".$langmsg['img'][25]."</td><td class=\"tableshead\"><input onclick=\"selectall()\" id=\"allcheck\" type=\"checkbox\"></td></tr>";
	$d = 1;
	$tmpcolor = 1;
	$totalfilesize = 0;
	if(count($allimages) > 0){
		foreach($allimages AS $row){
			if($tmpcolor == "1"){
				$class = "row1";
				$tmpcolor = "2";
			}else{
				$class = "row2";
				$tmpcolor = "1";
			}    
			$uploader = DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $row['uploader']);
			$uploader = $uploader['0']['user'];
			$file = $row['file'];
			$f = explode(" ",$imagefiletypes);
			$ext = substr($file,strlen($file) - 3);
			$allowed = false;
			foreach($f as $g){
				if($g == $ext){
					$allowed = true;
				}
			}
			if(@getimagesize($uploaddir . $file)){
				$allowed = true;
			}else{
				$allowed = false;
			}
			if($allowed == true){	
				list($width, $height, $type, $attr) = getimagesize($uploaddir . $file);
				if($width > 80 || $height > 80){
					$new_width = $width;
					$new_height = $height;
					$percent = 0.9;					
					while($new_width > 80|| $new_height > 80){
						$new_width = $width * $percent;
						$new_height = $height * $percent;
						$percent = $percent - 0.01;
					}
				}else{
					$new_width = $width;
					$new_height = $height;			
				} 		   
				$filesize = round(filesize($uploaddir . $file) / 1024,0);
				$totalfilesize += $filesize;
				$filesize .= " KB";
				$b++;
			}
			echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=imageuploads&catid=" . $_GET['catid'] . "&view=" . $_GET['view'] . "&imageuid=" . $row['uid'] . "\"><img src=\"images/icons/pencil.png\" alt=\"Edit\" title=\"Edit\" /></a></td><td class=\"tablebody tablerightborder\">$file</td><td style=\"text-align: right\" class=\"tablebody tablerightborder\">$filesize</td><td class=\"tablebody tablerightborder\">$uploader</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row[uid]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" name=\"selectedimages[]\"></td></tr>";
			$d++;
		}	
	}
	echo "</table>";
}

if($totalfilesize > 1024){
	$totalfilesize /= 1024;
	$totalfilesize = round($totalfilesize,0);  	
	echo "<script language=\"javascript\">document.getElementById('totalfilesize').innerHTML = '$totalfilesize MB';</script>";
}else{
	if(!$totalfilesize){
		$totalfilesize = 0;
	}
}        

echo "<br style=\"clear: both\" />";
echo "<a href=\"?action=options&mod=imageuploads&catid=" . $_GET['catid'] . "&view=" . $_GET['view'] . "&newimage=true\" />".$langmsg['img'][1]."</a><div style=\"float: right\"><select onchange=\"imagecatchange()\" id=\"imageoptions\" name=\"imageoptions\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"addtocat\">".$langmsg['img'][27]."</option>";
echo "<option value=\"removefromcat\">Remove from category</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select>";
echo "&nbsp;<select id=\"addtocat\" name=\"addtocat\" style=\"display: none\">";
$allowedcats = DataAccess::fetch("SELECT " .NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
$allowedcats = $allowedcats['0']['cats'];     
$d = '';
if($allowedcats !== "all"){
	$a = explode(",",$allowedcats);
	foreach($a as $c){
		$d .= "id LIKE '$c' OR ";
	}
	$d = substr($d,0,(strlen($d) - 3));
	$d = "WHERE " . $d;			            
}
$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " $d ORDER BY name");
foreach($allcats AS $row){		            	
	echo "<option value=\"$row[id]\"";
	if($_GET['catid'] == $row['id']){
		echo " selected=\"selected\"";							
	}
	echo ">$row[name]</option>";
}
echo "</select>";
echo "&nbsp;<input type=\"button\" name=\"imageforms1\" onclick=\"deleteimages()\" value=\"".$langmsg['submitfield'][0]."\" /></div></form>";
echo "</td></tr></table>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>