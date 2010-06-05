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

echo "<span class=header>".$langmsg['cats'][0]."</span></div><table width=\"685px\"><tr><td width=\"17%\" align=center valign=top><br>";
echo "<img src=\"images/news_2.png\" alt=\"Edit Categories\"></td><td><br>";
$_POST['delete']	= (empty($_POST['delete'])) ? '' : $_POST['delete'];
$_POST['catoption'] = (empty($_POST['catoption'])) ? '' : $_POST['catoption'];
$_POST['S1'] 		= (empty($_POST['S1'])) ? '' : $_POST['S1'];
$_GET['edit'] 		= (empty($_GET['edit'])) ? '' : $_GET['edit'];
$_SESSION['origcatname'] = (empty($_SESSION['origcatname'])) ? '' : $_SESSION['origcatname'];
$names = '';
if($_POST['catoption'] == "delete"){
	if(count($_POST['selectedcats']) > 0){
		$selected = $_POST['selectedcats'];
		$i = 0;
		foreach($selected as $uid){
			$name = DataAccess::fetch("SELECT name FROM " . NEWS_CATS . " WHERE id = ?", $uid);
			$name = $name['0']['name'];
			DataAccess::put("DELETE FROM " . NEWS_CATS . " WHERE id = ?", $uid);
			DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE catid = ?", $uid); 
			$names .= $name . ", ";
		}
	}
	echo "<span class=\"success\">".$langmsg['cats'][6]."</span> " . substr($names,0,strlen($names) -2);
}

if($_GET['edit'] == "new"){
	echo "<div class=panel>".$langmsg['cats'][4]."</div><br>";
	function newcatform(){
	global $langmsg;
	echo "<div align=right><table width=\"100%\">";
	echo "<form method=post action=\"?action=options&mod=categories&edit=new\">";
	echo "<tr><td width=\"44\">".$langmsg['cats'][5]."</td><td><input type=text name=name value=\"" . displayhtml($_POST['name']) . "\"></td></tr>";
	echo "<tr><td></td><td><input type=submit name=\"S1\" class=\"nostyle\" value=\"".$langmsg['submitfield'][5]."\"></td></tr>";
	echo "</table></div><br />";
	}
	if(!$_POST['S1']){
		newcatform();
	}elseif(!$_POST['name']){
		echo "<span class=\"error\">" . $langmsg['cats'][7] . "</span>";
		newcatform();
	}else{
		$num = DataAccess::fetch("SELECT COUNT(*) AS num FROM " . NEWS_CATS . " WHERE name = ?", $_POST['name']);
		$num = $num['0']['num'];
		$tname = $_POST['name'];
		$tname = strtolower($tname);
		if($tname == "all"){ $invalid = true; }
		if($num > 0){
		   echo "<div align=right><table width=\"100%\">";
		   echo "<tr><td><div class=error>".$langmsg['cats'][7]."</div></td></tr>";
		   echo "</table></div>";
		   newcatform();
		}else{
		   $name = $_POST['name'];
		   DataAccess::put("INSERT INTO " . NEWS_CATS . " (name) VALUES (?)", $name);
		   echo "<div class=success>".$langmsg['cats'][8]."</div><br />";                               
		}
	}
}
if($_GET['edit'] == "true"){
	function editcatform(){
		global $langmsg;
		$catname = DataAccess::fetch("SELECT name FROM " . NEWS_CATS . " WHERE id = ?", $_GET['id']);
		$catname = $catname['0']['name'];
		$_SESSION['origcatname'] = $catname;
		echo "<div class=panel>".$langmsg['cats'][10]."</div><br>";
		echo "<table width=\"100%\">";
		echo "<form method=post action=\"?action=options&mod=categories&edit=true&id=$_GET[id]\">";
		echo "<tr><td width=\"44\">".$langmsg['cats'][2]."</td><td><input type=text name=name value=\"" . displayhtml($catname) . "\"></td></tr>";
		echo "<tr><td></td><td><input type=submit name=\"S1\" class=\"nostyle\"  value=\"Save\"></td></tr>";
		echo "</table><br />";
	}
	if(!$_POST['S1']){
		editcatform();
	}elseif(!$_POST['name']){
		echo "<span class=\"error\">" . $langmsg['cats'][7] . "</span>";
		editcatform();
	}else{
		if($_POST['name'] == $_SESSION['origcatname']){
			DataAccess::put("UPDATE " . NEWS_CATS . " SET name = ? WHERE id = ?", $_POST['name'], $_GET['id']);
			unset($_SESSION['origcatname']);
			echo "<div class=success>".$langmsg['cats'][9]."</div><br />";
		}else{
			if(count(DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " WHERE name = ?", $_POST['name'])) > 0){
				echo "<span class=\"error\">" . $langmsg['cats'][13] . "</span>";
			}else{
				DataAccess::put("UPDATE " . NEWS_CATS . " SET name = ? WHERE id = ?", $_POST['name'], $_GET['id']);
				unset($_SESSION['origcatname']);
				echo "<div class=success>".$langmsg['cats'][9]."</div><br />";
			}
		}
	 }
}

$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " ORDER BY name");
$numcategories = count($allcats);
$f = $langmsg['cats'][1];
$f = "<b>$numcategories</b> " . $f;
echo "<div class=panel>$f</div><br>";
echo "<form method=post id=\"catform\" action=\"?action=options&mod=categories\">";
echo "<table id=\"rows\" cellpadding=\"0\" cellspacing=\"1\" width=\"100%\"><tr><td width=\"25%\">".$langmsg['cats'][2]."</td><td width=\"25%\" align=\"center\">".$langmsg['cats'][3]."</td><td width=\"25%\" align=\"center\">".$langmsg['cats'][11]."</td><td width=\"25%\" align=\"center\">".$langmsg['cats'][12]."</td><td><input type=\"checkbox\" id=\"allcheck\" onclick=\"selectall()\" /></td></tr>";
$d = 1;
$tmpcolor = 1;
foreach($allcats AS $row){
	if($tmpcolor == "2"){ 
		$class = "row2"; 
		$tmpcolor = "1";
	}else{ 
		$class = "row1"; 
		$tmpcolor = "2";
	}
	$posts = DataAccess::fetch("SELECT DISTINCT COUNT(storyid) as total FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = ?", $row['id'], "news");
	$posts = $posts['0']['total'];
	$images = DataAccess::fetch("SELECT DISTINCT COUNT(storyid) as total FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = ?", $row['id'], 'image');
	$images = $images['0']['total'];
	$files = DataAccess::fetch("SELECT DISTINCT COUNT(storyid) as total FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = ?", $row['id'], "file");
	$files = $files['0']['total'];
	if($row['id'] !== 0){
		echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td><a href=\"?action=options&mod=categories&edit=true&id=$row[id]\">". displayhtml($row['name']) . "</a></td><td align=\"center\">$posts</td><td align=\"center\">$images</td><td align=\"center\">$files</td><td><input value=\"$row[id]\" name=\"selectedcats[]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" type=\"checkbox\" /></td></tr>\n";
	}
	$d++;
}
        
echo "</table>";
echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\"><tr><td align=right>";
echo "<select name=\"catoption\" id=\"catoption\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select> <input type=\"button\" value=\"".$langmsg['submitfield'][0]."\" onclick=\"editcataction()\" />";
echo "</td></tr></table>";
echo "<a href=\"?action=options&mod=categories&edit=new\">".$langmsg['cats'][4]."</a>";
echo "</div>";
echo "</td></tr></table>";
?>