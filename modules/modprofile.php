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

echo "<style>optgroup { font-weight: none; font-style: normal; }</style>";
echo "<span class=header>".$langmsg['profile'][0]."</span></div><table width=\"685px\"><tr><td width=\"17%\" align=center valign=top><br><img src=\"images/news_4.png\"></td>";
echo "<td><br /><div class=panel>".$langmsg['profile'][1]."</div><br>\n";
echo "<style>table { text-align: left; } </style>";
$dd = str_replace("admin.php","uploads/", ADMINPATH);
$_POST['B1'] = (empty($_POST['B1'])) ? '' : $_POST['B1'];
if(!$_POST['B1']){
	$profiledata = DataAccess::fetch("SELECT * FROM " . NEWS_USERS . " WHERE user = ?", $_SESSION['name']);
	$row = $profiledata['0'];
	echo "<div align=right><form method=\"POST\" name=\"form\" action=\"?action=options&mod=profile\">\n";
	echo "<table border=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\">\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\">".$langmsg['profile'][2]."</td>\n";
	echo "      <td width=\"79%\"><input type=\"text\" value=\"" . displayhtml($row['profile_name']) . "\" name=\"T1\" size=\"40\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\">".$langmsg['profile'][3]."</td>\n";
	echo "      <td width=\"79%\"><input type=\"text\" value=\"" . displayhtml($row['profile_age']) . "\" name=\"T2\" size=\"40\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\">".$langmsg['profile'][4]."</td>\n";
	echo "      <td width=\"79%\"><input type=\"text\" value=\"" . displayhtml($row['profile_location']) . "\" name=\"T3\" size=\"40\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\">".$langmsg['profile'][5]."</td>\n";
	echo "      <td width=\"79%\"><select size=\"1\" name=\"D1\">";
	echo "<option value=\"Male\"";
	if($row['profile_sex'] == "Male"){
		echo "selected=\"selected\"";
	}
	echo ">".$langmsg['profile'][12]."</option>";
	echo "<option value=\"Female\"";
	if($row['profile_sex'] == "Female"){
		echo "selected=\"selected\"";
	}
	echo ">".$langmsg['profile'][13]."</option>";
	echo "</select></td>\n";
	echo "    </tr>\n";
	echo "<tr><td colspan=2><hr></td></tr>";
	echo "<tr><td>".$langmsg['profile'][6]."</td><td>";
	echo "<select name=\"profile_image\">";
	echo "<option value=\"0\">" . $langmsg['profile'][15] ."</option>";
	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$allowedcats = $allowedcats['0']['cats'];
	$d = '';	
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$d .= "catid LIKE '$c' OR ";
		}
		$d = substr($d,0,(strlen($d) - 3));
		$d = "WHERE type = 'image' AND (" . $d . ")";			            
	}else{
		$d = "WHERE type = 'image'";
	}
	$y = '';
	$newcats = DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " $d");
	foreach($newcats AS $row4){
		$y .= "uid != '$row4[storyid]' AND ";
	}	
	$y = substr($y,0,(strlen($y) - 5));	
	if($y){
		$y = "WHERE " . $y;
	}
	$sql3 = "SELECT * FROM " . NEWS_IMAGES . " $y ORDER BY uid DESC";
	$allcats = DataAccess::fetch($sql3);
	foreach($allcats AS $row3){
		echo "<option value=\"$row3[uid]\"";
		if($row['profile_image'] == $row3['uid']){
			echo " selected=\"selected\"";
		}
		echo ">$row3[file]</option>";
	}
	
	$e = '';
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$e .= "id LIKE '$c' OR ";
		}
		$e = substr($e,0,(strlen($e) - 3));
		$e = "WHERE " . $e;			            
	}
	$sql = "SELECT * FROM " . NEWS_CATS . " $e ORDER BY name";
	$allcats2 = DataAccess::fetch($sql);
	foreach($allcats2 AS $rowx){		            	
		$i = 0;
		$h = "";
		$gg = DataAccess::fetch("SELECT *, " . NEWS_IMAGES . ".uid AS imageuid, "  . NEWS_IMAGES . ".file AS filename FROM " . NEWS_GROUPCATS . " INNER JOIN " . NEWS_IMAGES . " ON " . NEWS_GROUPCATS . ".storyid = " . NEWS_IMAGES . ".uid WHERE type = ? AND catid = ?", "image", $rowx['id']);
		foreach($gg AS $row2){
			$h .= "<option value=\"$row2[uid]\" ";
			$hh = $row['profile_image'];
			if($row['profile_image'] == $row2['imageuid']){
				$h .= " selected=\"selected\"";
			}																			
			$h .= ">$row2[filename]</option>";
			$i++;	
		}
		if($i > 0){
			echo "<optgroup label=\"$rowx[name]\">";
			echo $h;
			echo "</optgroup>";
		}
	}
	echo "</select>";
	echo "</tr>";
	echo "<tr><td colspan=2><hr></td></tr>";
	
	

	echo "<tr><td>".$langmsg['personal'][3]."</td><td>";
	echo "<select name=\"avatar\">";
	echo "<option value=\"0\">" . $langmsg['profile'][15] ."</option>";
	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$allowedcats = $allowedcats['0']['cats'];
	$d = '';	
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$d .= "catid LIKE '$c' OR ";
		}
		$d = substr($d,0,(strlen($d) - 3));
		$d = "WHERE type = 'image' AND (" . $d . ")";			            
	}else{
		$d = "WHERE type = 'image'";
	}
	$y = '';
	$newcats = DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " $d");
	foreach($newcats AS $row4){
		$y .= "uid != '$row4[storyid]' AND ";
	}	
	$y = substr($y,0,(strlen($y) - 5));	
	if($y){
		$y = "WHERE " . $y;
	}
	$sql3 = "SELECT * FROM " . NEWS_IMAGES . " $y ORDER BY uid DESC";
	$allcats = DataAccess::fetch($sql3);
	foreach($allcats AS $row3){
		echo "<option value=\"$row3[uid]\"";
		$hh = $row['avatar'];
		if($hh == $row3['uid']){
			echo " selected=\"selected\"";
		}
		echo ">$row3[file]</option>";
	}
	
	$e = '';
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$e .= "id LIKE '$c' OR ";
		}
		$e = substr($e,0,(strlen($e) - 3));
		$e = "WHERE " . $e;			            
	}
	$sql = "SELECT * FROM " . NEWS_CATS . " $e ORDER BY name";
	$allcats2 = DataAccess::fetch($sql);
	foreach($allcats2 AS $rowx){		            	
		$i = 0;
		$h = "";
		$gg = DataAccess::fetch("SELECT *, " . NEWS_IMAGES . ".uid AS imageuid, " . NEWS_IMAGES . ".file AS filename FROM " . NEWS_GROUPCATS . " INNER JOIN " . NEWS_IMAGES . " ON " . NEWS_GROUPCATS . ".storyid = " . NEWS_IMAGES . ".uid WHERE type = ? AND catid = ?", "image", $rowx['id']);
		foreach($gg AS $row2){
			$h .= "<option value=\"$row2[uid]\" ";
			$hh = $row['avatar'];
			if($hh == $row2['imageuid']){
				$h .= " selected=\"selected\"";
			}																			
			$h .= ">$row2[filename]</option>";
			$i++;	
		}
		if($i > 0){
			echo "<optgroup label=\"$rowx[name]\">";
			echo $h;
			echo "</optgroup>";
		}
	}
	echo "</select>";
	echo "</tr>";
	echo "<tr><td colspan=2><hr></td></tr>";	
	
	
	
	echo "    <tr>\n";
	echo "      <td width=\"21%\" valign=top>".$langmsg['profile'][7]."</td>\n";
	echo "      <td width=\"79%\"><input type=\"text\" value=\"";
	if(!$row['profile_homepage']){ echo "http://"; }else{ echo "http://" . displayhtml($row['profile_homepage']); } echo "\" name=\"T4\" size=\"40\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\" valign=top>".$langmsg['profile'][8]."</td>\n";
	echo "      <td width=\"79%\"><textarea rows=\"2\" name=\"S1\" cols=\"40\">" . displayhtml($row['profile_interests']) . "</textarea></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\" valign=top>".$langmsg['profile'][9]."</td>\n";
	echo "      <td width=\"79%\"><textarea rows=\"2\" name=\"S2\" cols=\"40\">" . displayhtml($row['profile_hobbies']) . "</textarea></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\" valign=top>".$langmsg['profile'][10]."</td>\n";
	echo "      <td width=\"79%\"><textarea rows=\"2\" name=\"S3\" cols=\"40\">" . displayhtml($row['profile_occupation']) . "</textarea></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\" valign=top>".$langmsg['profile'][11]."</td>\n";
	echo "      <td width=\"79%\"><textarea rows=\"2\" name=\"S4\" cols=\"40\">" . displayhtml($row['profile_quote']) . "</textarea></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"21%\">&nbsp;</td>\n";
	echo "      <td width=\"79%\"><input type=\"submit\" class=\"nostyle\"  onclick=\"document.form.f1.disabled=false;\" value=\"".$langmsg['submitfield'][3]."\" name=\"B1\"></td>\n";
	echo "    </tr>\n";
	echo "  </table>\n";
	echo "</form></div></td></tr></table>\n";
}else{
	$avatar 			= $_POST['avatar'];
	$profile_name		= $_POST['T1'];
	$profile_age		= $_POST['T2'];
	$profile_age		= substr($profile_age,0,3);
	$profile_location	= $_POST['T3'];
	$profile_sex		= $_POST['D1'];
	$profile_homepage	= $_POST['T4'];
	$profile_homepage	= str_replace("http://","",$profile_homepage);
	$profile_homepage	= str_replace("www.","",$profile_homepage);
	$profile_interests	= $_POST['S1'];
	$profile_hobbies	= $_POST['S2'];
	$profile_occupation	= $_POST['S3'];
	$profile_quote		= $_POST['S4'];
	$profile_image		= $_POST['profile_image'];
	
	$sql = "UPDATE " . NEWS_USERS . " SET
	profile_name = ?,
	profile_age = ?,
	profile_location = ?,
	profile_sex = ?,
	profile_homepage = ?,
	profile_interests = ?,
	profile_hobbies = ?,
	profile_occupation = ?,
	profile_quote = ?,
	avatar = ?,
	profile_image = ? WHERE user = ?";
	DataAccess::put($sql, $profile_name, $profile_age, $profile_location, $profile_sex, $profile_homepage, $profile_interests, $profile_hobbies, $profile_occupation, $profile_quote, $avatar, $profile_image, $_SESSION['name']);
	echo "<td></tr><tr><td></td><td><div class=success>".$langmsg['profile'][14]."</div></td></tr></table>";
}
?>