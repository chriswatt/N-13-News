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

echo '<div class="headertitle">';

echo '<span class="header">' . $langmsg['options'][0] . '</span>';
echo '<span class="header">' . $langmsg['uploadedfiles'][0] . '</span>';
if($_GET['newfile'] == "true"){
	echo '<span class="header">' . $langmsg['options'][1] . '</span>';
}
if($_GET['fileuid']){
	echo '<span class="header">' . $langmsg['options'][2] . '</span>';
}

echo '</div>';


$uploaddir = $imageuploaddir;
$currentpath = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$currentpath = "http://" . $currentpath;
echo "<table width=\"100%\"><tr>";        
echo "<td valign=top align=top>";
	
$_GET['file']			= (empty($_GET['file'])) ? '' : $_GET['file'];
$_GET['catid']			= (empty($_GET['catid'])) ? '' : $_GET['catid'];
$_GET['view']			= (empty($_GET['view'])) ? '' : $_GET['view'];
$_POST['S1']			= (empty($_POST['S1'])) ? '' : $_POST['S1'];
$_POST['fileoptions']	= (empty($_POST['fileoptions'])) ? '' : $_POST['fileoptions'];
if($_GET['file'] && $_GET['catid']){
	$file = $_GET['file'];
	$cat = $_GET['catid'];
	DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ? AND catid = ?", "file", $file, $cat);
	echo "<span class=\"success\">".$langmsg['uploadedfiles'][10] . "</span>";		
}

$i = 0;
if($_POST['fileoptions']){
	$selected = $_POST['selectedfiles'];
	if(count($selected) !== 0){    		 		
		foreach($selected as $file){
			if($_POST['fileoptions'] == "delete"){		 			
				$filename = DataAccess::fetch("SELECT url FROM " . NEWS_FILES . " WHERE uid = ?", $file);
				$filename = $filename['0']['url'];
				$g = $currentpath;
				$x = explode("admin.php",$g);
				$url = $x[0] . $uploaddir;
				$filename = str_replace($url,"",$filename);					
				DataAccess::put("DELETE FROM " . NEWS_FILES . " WHERE uid = ?", $file);
				DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $file, "file");
				DataAccess::put("DELETE FROM " . NEWS_LINKEDFILES . " WHERE fileid = ?", $file);
				if(file_exists($uploaddir.$filename)){
					if(unlink($uploaddir.$filename)){
						$i++;
					}
				}	
			}elseif($_POST['fileoptions'] == "addtocat"){
				$addtocat = $_POST['addtocat'];
				if(count(DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND storyid = ? AND type = ?", $addtocat, $file, "file")) < 1){
					DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $file, $addtocat, "file"); 
				}		 		
				$i++;
			}elseif($_POST['fileoptions'] == "removefromcat"){
				$removefromcat = $_POST['addtocat'];
				DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ? AND catid = ?", "file", $file, $removefromcat);
				$i++;
			}
		}
		if($i > 0){
			if($_POST['fileoptions'] == "delete"){
				 echo "<span class=\"success\">". $i . " ". $langmsg['uploadedfiles'][5]."</span>";
			}elseif($_POST['fileoptions'] == "addtocat"){
				 echo "<span class=\"success\">".$langmsg['uploadedfiles'][11]. "</span>";	 			
			}elseif($_POST['fileoptions'] == "removefromcat"){
				echo "<span class=\"success\">$i files removed from the selected category.</span>";
			}
		}
		
	}
}

if(!is_writable("uploads/")){
	echo "<span class=\"error\">" . $langmsg['img'][32] . "</span>";
	echo "<br /><br />";
}

$uploadedfiletypes = DataAccess::fetch("SELECT uploadedfiletypes FROM " . NEWS_OPTIONS . " WHERE 1");
$uploadedfiletypes = $uploadedfiletypes['0']['uploadedfiletypes'];
function editfileform(){
global $uploaddir, $currentpath, $langmsg;
	$fileuid = $_GET['fileuid'];
	$filedata = DataAccess::fetch("SELECT * FROM " . NEWS_FILES . " WHERE uid = ?", $fileuid);
	if(count($filedata) >= 1){
		$all		= $filedata['0'];
		$g			= $currentpath;
		$x			= explode("admin.php",$g);
		$url		= $x[0] . $uploaddir;
		$filename	= str_replace($url,"",$all['url']);
		$title		= $all['title'];
		echo "<div class=\"subheaders\">".$langmsg['uploadedfiles'][14]. "</div>";
		echo "<div class=\"subheaders_body displaytable\"><table width=\"100%\">";
		echo "<form action=\"\" method=\"POST\">\n";
		echo "<tr><td>".$langmsg['uploadedfiles'][12] . "</td><td><span class=\"ok\">$filename</span></td></tr>";
		echo "<tr><td valign=top>";
		echo $langmsg['uploadedfiles'][23];
		echo "<td>";
		echo "<input type=\"text\" value=\"$title\" name=\"file_title\" style=\"width: 300px\" />";	
		echo "</td>";
		echo "<tr><td valign=top width=\"120\">";
		echo $langmsg['uploadedfiles'][13];
		echo "</td><td valign=top>";
		
		
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
		$gg = 0;
		
		$groupcats = DataAccess::fetch("SELECT catid FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "file", $fileuid);
		$zcats = "";
		foreach($groupcats AS $row2){
			$zcats .= ":" . $row2['catid'] . ":";
		} 
		foreach($allcats AS $row){			            	
			if($gg < 1){
				$_SESSION['firstcat'] = $row['name'];
				$_SESSION['firstcatid'] = $row['id'];
				$gg++;
			}
			#if($catid == $row['id']){ echo "selected=selected"; } 
			echo "<div style=\"float: left\"><input type=\"checkbox\" ";
			if(stristr($zcats, ":" . $row['id'] . ":")){
				echo "checked=\"checked\" ";
			}
			echo "style=\"margin-right: 1px; width: 15px; padding-left: 0px; margin-left: 0px\" name=\"cats[]\" value=\"$row[id]\" id=\"cat_$row[id]\"><label for=\"cat_$row[id]\" style=\"vertical-align: text-top; margin-left: 1px; padding-right: 20px\">$row[name]</label></div>";
		}
		
		echo "</td></tr>";
		#echo "<tr><td>".$langmsg['uploadedfiles'][15]."</td><td><input type=\"text\" name=\"image_title\" value=\"$title\" style=\"width: 300px\" /></td></tr>";
		#echo "<tr><td valign=top>".$langmsg['uploadedfiles'][16]."</td><td><textarea name=\"image_description\" style=\"height: 150px; width: 400px\">$description</textarea></td></tr>";	
		echo "<tr><td>".$langmsg['uploadedfiles'][31]."</td><td><input style=\"margin-left: 1px;\" type=\"checkbox\" name=\"resetdownloads\" /></td></tr>";

		
		echo "</tr>";
		echo "<td>";
		echo "<tr><td></td><td><input type=\"submit\" name=\"S1\" value=\"".$langmsg['uploadedfiles'][17]. "\"><br />\n";
		echo "</form>";
		echo "</td></tr>";
		echo "</table></div>";
	}else{
		echo $langmsg['uploadedfiles'][18];
	}
}

function fileuploadform(){
	global $langmsg;

	echo "<div class=\"subheaders\">".$langmsg['uploadedfiles'][1]."</div>";
	echo "<div class=\"subheaders_body displaytable\"><table width=\"100%\"><tr><td valign=top width=\"120\">";
	echo $langmsg['uploadedfiles'][13];
	echo "</td><td valign=top>";
	echo "<form enctype=\"multipart/form-data\" action=\"\" method=\"POST\">\n";

		            
	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " .NEWS_ACCESS . ".uid WHERE " . NEWS_USERS .".user = ?", $_SESSION['name']);
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
	$gg = 0;
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
	echo $langmsg['uploadedfiles'][4];
	echo "</td><td> <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"10000000\" />\n";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "\n<input name=\"uploadedfile[]\" type=\"file\" />";
	echo "<br /><input type=\"submit\" name=\"S1\" value=\"".$langmsg['uploadedfiles'][2]."\"><br />\n";
	echo "</form>";
	echo "</td></tr>";
	echo "</table>";
	echo "</div>";
}

$uploaddir = $imageuploaddir;
$_GET['fileuid'] = (empty($_GET['fileuid'])) ? '' : $_GET['fileuid'];
$_GET['newfile'] = (empty($_GET['newfile'])) ? '' : $_GET['newfile'];
$j = 0;
if(!$_GET['fileuid']){
	if($_GET['newfile']){
		if(!$_POST['S1']){
			fileuploadform();
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
					$allowed			= "true";
					$allowedfiletypes	= explode(" ",$uploadedfiletypes);
					if(!in_array($filename_extension,$allowedfiletypes)){
						$allowed = false;	
					}

					if($allowed == "true"){
						$target_path = $uploaddir;
						$target_path = $target_path . $filename;

						#check if a file already exists with that name
						if(file_exists($uploaddir . $filename)){
							echo " <span class=\"error\">" . $filename . " - " . $langmsg['uploadedfiles'][30]."</span>";
						}elseif(move_uploaded_file($_FILES['uploadedfile']['tmp_name'][$e], $target_path)) {
							$filesize		= filesize($uploaddir . $filename);
							$filesize		= ($filesize / 1000);
							echo " <span class=\"success\">" . $filename . " - " . $langmsg['uploadedfiles'][6]."</span>";
							$title			= $_POST['file_title'];
							$file			= basename($filename);
							$uploader		= $_SESSION['uid'];
							$g				= $currentpath;
							$x				= explode("admin.php",$g);
							$url			= $x[0] . $uploaddir . $filename;
							$timestamp		= time();
							DataAccess::put("INSERT INTO " . NEWS_FILES . " (title, url, filesize, downloadcount, author, timestamp) VALUES (?, ?, ?, ?, ?, ?)", $title, $url, $filesize, "0", $uploader, $timestamp);
							$fileuid = $_SESSION['insert_id'];
							$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
							if(count($_POST['cats']) > 0){	 
								foreach($_POST['cats'] as $catid){					
									DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $fileuid, $catid, "file");
								}
							}
						}else{
							echo " <span class=\"leftnavmain error\">" . $filename . " - ".  $langmsg['uploadedfiles'][7]."</span>";
						}
					}else{
						echo " <span class=\"leftnavmain error\">" . $filename ." - " . $langmsg['uploadedfiles'][8]."</span>";
					}
					$j++;
				}
				$e++;				
			}
		}
	}
}else{
	if(!$_POST['S1']){
		editfileform();
	}else{		
		$fileuid	= $_GET['fileuid'];
		$title		= $_POST['file_title'];
		DataAccess::put("UPDATE " . NEWS_FILES . " SET title = ? WHERE uid = ?", $title, $fileuid);
		$_POST['resetdownloads']	= (empty($_POST['resetdownloads'])) ? '' : $_POST['resetdownloads'];
		if($_POST['resetdownloads']){
			DataAccess::put("UPDATE " . NEWS_FILES . " SET downloadcount = ? WHERE uid = ?", "0", $fileuid);
		}
		DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "file", $fileuid);
		$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
		if(count($_POST['cats']) !== 0){		
			foreach($_POST['cats'] as $catuid){
				$type = 'file';
				$storyid = $fileuid;
				DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (type, storyid, catid) VALUES (?, ?, ?)", $type, $storyid, $catuid);
			}
		}
		echo "<span class=\"success\">".$langmsg['uploadedfiles'][19]."</span>";
	}
}

###
$catid = $_GET['catid'];
$f = $langmsg['uploadedfiles'][29];
echo "<div class=\"panel\">$f";
echo "</div><br style=\"clear: both\" />";	
echo "<div style=\"padding-bottom: 7px\">";
echo "<span style=\"float: right\">".$langmsg['uploadedfiles'][22]." <select id=\"catchange\" onchange=\"window.location='?action=options&mod=fileuploads&catid=' + document.getElementById('catchange').value;\" style=\"margin-top: 0px\" name=\"category_show\">";
echo "<option value=\"-1\">".$langmsg['uploadedfiles'][32]."</option>";
echo "<optgroup label=\"------\">";	
echo "</optgroup>";						
echo "<option value=\"\" ";
$_GET['catid'] = (empty($_GET['catid'])) ? '' : $_GET['catid'];
if(!$_GET['catid']){ 
	echo "selected=\"selected\""; 
}
echo "></option>";
$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS .".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
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

echo "</div>";
echo "<hr />";
echo "<form method=\"post\" id=\"fileform\" name=\"fileform\" action=\"?action=options&mod=fileuploads\">";
echo "<br />";
$catid = $_GET['catid'];
#check if the default cat exists
$b = 1;
$dir = $uploaddir;
$cc = 0;
$groupcats = DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = ?", $catid, "file");

$accessdatax = unserialize($_SESSION['accessdata']);
if($accessdatax['0']['fileimages'] == "1"){
	$restrict = '';
}else{
	$restrict = "AND author = '" . $_SESSION['uid'] . "'";
}

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
	$d = '';	
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$d .= "catid LIKE '$c' OR ";
		}
		$d = substr($d,0,(strlen($d) - 3));
		$d = "WHERE type = 'file' AND (" . $d . ")";			            
	}else{
		$d = "WHERE type = 'file'";
	}
	$y = '';
	$groupcats = DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " $d");        
	foreach($groupcats AS $row){
		$y .= "uid != '$row[storyid]' AND ";
	}	
	$y = substr($y,0,(strlen($y) - 5));		
	if($y){
		$y = "WHERE " . $y;
	}
	if(!$y){ $restrict = str_replace("AND", "WHERE", $restrict); }
	$sql = "SELECT * FROM " . NEWS_FILES . " $y $restrict ORDER BY uid DESC";
	$allfiles = DataAccess::fetch($sql);
}elseif($catid == "-1"){
	#if "All Categories" is selected show both non assigned images and assigned.
	#if "All Categories" is selected so all images
	#first grab images not assigned to any cats
	$sql	= "SELECT * FROM " . NEWS_FILES . " WHERE uid NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'file') $restrict ";		
	$sql	.= " UNION ";		
	#now grab all iamges that are assigned to cats and join them
	$restrict = str_replace("AND", "WHERE", $restrict);
	$sql	.= " SELECT * FROM " . NEWS_FILES . " " . $hh . " $restrict ORDER BY uid DESC";		
	#echo $sql;				
	$allfiles = DataAccess::fetch($sql);
}else{
	if($hh){
		$sql = "SELECT * FROM " . NEWS_FILES . " " . $hh . " $restrict ORDER BY uid DESC";
		$allfiles = DataAccess::fetch($sql);
	}else{
		$sql = "";
		$allfiles = array();
	}
}


echo "<table id=\"rows\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">";
echo "<tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['uploadedfiles'][23]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['uploadedfiles'][12]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][33]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][24]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">" . $langmsg['uploadedfiles'][34] . "</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][25]."</td><td class=\"tableshead\"><input onclick=\"selectall()\" id=\"allcheck\" type=\"checkbox\"></td></tr>";

$d = 1;
$tmpcolor = 1;
$g = $currentpath;
$x = explode("admin.php",$g);
$url = $x[0] . $uploaddir;
if(count($allfiles) > 0){
	foreach($allfiles AS $row){
		if($tmpcolor == "1"){
			$class = "row1";
			$tmpcolor = "2";
		}else{
			$class = "row2";
			$tmpcolor = "1";
		}    
		
		$uploader = DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $row['author']);
		$uploader = $uploader['0']['user'];
		$filename = "<a href=\"$row[url]\">" . str_replace($url,"",$row['url']) . "</a>";
			$file = $row['title'];
			if(!$file){ $file = "&nbsp;"; }
			$f = explode(" ",$uploadedfiletypes);
			$ext = substr($file,strlen($file) - 3);
			$allowed = false;
			foreach($f as $g){
				if($g == $ext){
					$allowed = true;
				}
			}
			$filesize = round($row['filesize'],1) . " KB";
			$uploaded = date("j-m-y",$row['timestamp']);
		echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=fileuploads&catid=" . $_GET['catid'] . "&view=" . $_GET['view'] . "&fileuid=" . $row['uid'] . "\"><img alt=\"Edit\" title=\"Edit\" src=\"images/icons/pencil.png\" /></a></a></td><td class=\"tablebody tablerightborder\">$file</td><td class=\"tablebody tablerightborder\">$filename</td><td style=\"text-align: right\" class=\"tablebody tablerightborder\">$row[downloadcount]<td style=\"text-align: right\" class=\"tablebody tablerightborder\">$filesize</td><td class=\"tablebody tablerightborder\">$uploaded</td><td class=\"tablebody tablerightborder\">$uploader</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row[uid]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" name=\"selectedfiles[]\"></td></tr>";
		$d++;
	}
}
echo "</table>";
echo "<br style=\"clear: both\" />";
echo "<a href=\"?action=options&mod=fileuploads&catid=" . $_GET['catid'] . "&view=" . $_GET['view'] . "&newfile=true\" />".$langmsg['uploadedfiles'][1]."</a><div style=\"float: right\"><select onchange=\"filecatchange()\" id=\"fileoptions\" name=\"fileoptions\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"addtocat\">".$langmsg['uploadedfiles'][27]."</option>";
echo "<option value=\"removefromcat\">" . $langmsg['uploadedfiles'][28] . "</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select>";
echo "&nbsp;<select id=\"addtocat\" name=\"addtocat\" style=\"display: none\">";
$d = '';
if($allowedcats !== "all"){
	$a = explode(",",$allowedcats);
	foreach($a as $c){
		$d .= "id LIKE '$c' OR ";
	}
	$d = substr($d,0,(strlen($d) - 3));
	$d = "WHERE " . $d;			            
}
$groupcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " $d ORDER BY name");
foreach($groupcats AS $row){		            	
	echo "<option value=\"$row[id]\"";
	if($_GET['catid'] == $row['id']){
		echo " selected=\"selected\"";							
	}
	echo ">$row[name]</option>";
}
echo "</select>";
echo "&nbsp;<input type=\"button\" name=\"fileforms1\" onclick=\"deletefiles()\" value=\"".$langmsg['submitfield'][0]."\" /></div></form>";
echo "</td></tr></table>";
echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>