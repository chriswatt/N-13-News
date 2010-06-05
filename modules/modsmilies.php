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

echo "<span class=header>".$langmsg['smilies'][0]."</span></div><br />";
echo "<table width=\"685px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td align=center valign=top style=\"width: 17%\"><img src=\"images/smilies.png\"  /></td>";
echo "<td valign=top>";
$_GET['create'] = (empty($_GET['create'])) ? '' : $_GET['create'];
if($_GET['create'] == "replace"){
	echo "<form method=\"post\" action=\"?action=options&mod=smilies&create=replace\">";
	echo "<div align=right><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n";
	echo "<tr><td>";
	function smiliereplaceform(){
		global $langmsg;
		echo "<div class=panel>".$langmsg['smilies'][1]."</div> <br />";
		echo $langmsg['smilies'][2];
		echo "<div style=\"width: 100px; float: left\">".$langmsg['smilies'][3]."</div><input type=\"text\" name=\"replace\" />";
		echo "<br />";
		echo "<div style=\"padding-top: 3px; width: 100px; float: left\">".$langmsg['smilies'][4]."</div><input style=\"margin-top: 3px;\" type=\"text\" name=\"replacewith\" />";
		echo "<br />";
		echo "<div style=\"width: 100px; float: left\">&nbsp;</div><input style=\"margin-top: 3px; margin-bottom: 3px\" type=\"submit\" value=\"".$langmsg['submitfield'][6]."\" name=\"S1\" />";	
	}
	$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];	
 	if(!$_POST['S1']){
 		smiliereplaceform();
	}else{
		$replace		= $_POST['replace'];
		$replacewith	= $_POST['replacewith'];
		$allsmilies		= DataAccess::fetch("SELECT * FROM " . NEWS_SMILIES);
		foreach($allsmilies AS $row){
			$newpath = $row['path'];
			$newpath = str_replace($replace,$replacewith,$newpath);
			DataAccess::put("UPDATE " . NEWS_SMILIES . " SET path = ? WHERE id = ?", $newpath, $row['id']); 	 	 	
		}
		echo "<div class=\"success\">".$langmsg['smilies'][5]."</div>";
	}
	echo "</td></tr></table></div>";
	echo "</form>"; 	
}
$_GET['show'] = (empty($_GET['show'])) ? '' : $_GET['show'];
if($_GET['show'] == "true"){
	if($_GET['id']){
		$id = $_GET['id'];
		if($_GET['value'] == "1"){ $value = '1'; }else{ $value = '0';}
		DataAccess::put("UPDATE " . NEWS_SMILIES . " SET showhide = ? WHERE id = ?", $value, $id);
	}
}
if($_GET['create'] == "new"){
	function smileyform(){
		global $langmsg;
		echo "<div class=\"panel\">".$langmsg['smilies'][6]."</div><br />";
		echo "<form method=\"POST\" action=\"?action=options&mod=smilies&create=new\">\n";
		echo "<div align=\"right\">\n";
		echo "<table border=\"0\" cellspacing=\"1\" width=\"100%\">\n";
		echo "    <tr>\n";
		echo "      <td width=\"19%\">\n";
		echo "      ".$langmsg['smilies'][7]."</td>\n";
		echo "      <td width=\"81%\">\n";
		echo "      <input type=\"text\" name=\"T1\" size=\"20\" value=\"".displayhtml($_POST['T1'])."\"></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"19%\">\n";
		echo "      ".$langmsg['smilies'][8]."</td>\n";
		echo "      <td width=\"81%\">\n";
		echo "      <input type=\"text\" name=\"T2\" size=\"20\" value=\"".displayhtml($_POST['T2'])."\"></td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"19%\">\n";
		echo "      &nbsp;</td>\n";
		echo "      <td width=\"81%\">\n";
		echo "      <input type=\"submit\" value=\"".$langmsg['submitfield'][7]."\" name=\"B1\"></td>\n";
		echo "    </tr>\n";
		echo "  </table>\n";
		echo "</div>\n";
		echo "</form>\n";
	}
	$_POST['T2'] = (empty($_POST['T2'])) ? '' : $_POST['T2'];
	$_POST['B1'] = (empty($_POST['B1'])) ? '' : $_POST['B1'];
	$_POST['T1'] = (empty($_POST['T1'])) ? '' : $_POST['T1'];
	$exists = DataAccess::fetch("SELECT * FROM " . NEWS_SMILIES . " WHERE keycode = ?", $_POST['T2']);
	$exists = count($exists);
	if($_POST['B1'] == ""){
		smileyform();
	}elseif($_POST['T1'] == ""){
		echo "<div class=error>".$langmsg['smilies'][9]."</div>";
		smileyform();
	}elseif($_POST['T2'] == ""){
		echo "<div class=error>".$langmsg['smilies'][10]."</div>";
		smileyform();
	}elseif($exists >= 1){
		echo "<div class=error>".$langmsg['smilies'][11]."</div>";
		smileyform();
	}else{
		DataAccess::put("INSERT INTO " . NEWS_SMILIES . " (path, keycode, type) VALUES (?, ?, ?)", $_POST['T1'], $_POST['T2'], "news");
		echo "<div align=\"right\"><table width=\"84%\"><tr><td><div class=success>".$langmsg['smilies'][12]."</div></td></tr></table></div>";
	}
}
$_GET['delete'] = (empty($_GET['delete'])) ? '' : $_GET['delete'];
if($_GET['delete'] == "true"){
	$path = DataAccess::fetch("SELECT path FROM " . NEWS_SMILIES . " WHERE id = ?", $_GET['id']);
	$path = $path['0']['path'];
	if($_POST['B2'] == ""){
		echo "<form method=\"POST\" action=\"?action=options&mod=smilies&delete=true&id=$_GET[id]\">\n";
		echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\">\n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\">\n";
		echo "      <div class=error>".$langmsg['smilies'][13];
		echo "<br><br><img src=\"$path\" alt=\"$_GET[id]\">";
		echo "      </div>\n";
		echo "          <br>\n";
		echo "</td>\n";
		echo "    </tr>\n";
		echo "    <tr>\n";
		echo "      <td width=\"100%\"><input type=\"submit\" value=\"".$langmsg['selectfield'][1]."\" name=\"B2\">&nbsp;<input type=\"submit\" value=\"".$langmsg['selectfield'][2]."\" name=\"B2\"></td>\n";
		echo "    </tr>\n";
		echo "</table>\n";
		echo "</form>\n";
	}else{
		if($_POST['B2'] == "Yes"){
			DataAccess::put("DELETE FROM " . NEWS_SMILIES . " WHERE id = ?", $_GET['id']);
			echo "<div class=success>".$langmsg['smilies'][14]."</div>";
		}
	}
}
$_GET['edit'] = (empty($_GET['edit'])) ? '' : $_GET['edit'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
if($_GET['edit'] == "true"){
	if($_POST['S1'] == ""){
		$id = $_GET['id'];
		$smileydata = DataAccess::fetch("SELECT path, keycode FROM " . NEWS_SMILIES . " WHERE id = ?", $_GET['id']);
		$path = $smileydata['0']['path'];
		$keycode = $smileydata['0']['keycode'];
		echo "<div class=panel style=\"text-align: left\">".$langmsg['smilies'][15]."</div><br />";
		echo "<form method=\"POST\" action=\"?action=options&mod=smilies&edit=true&id=$id\">\n";
		echo "<div align=\"right\">\n";
		echo "<table border=\"0\" cellspacing=\"1\" width=\"100%px\">\n";
		echo "<tr>\n";
		echo "<td width=\"23%\">".$langmsg['smilies'][16]."</td>\n";
		echo "<td width=\"77%\"><img src=\"$path\"></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td width=\"23%\">".$langmsg['smilies'][7]."</td>\n";
		echo "<td width=\"77%\"><input type=\"text\" name=\"T3\" size=\"20\" value=\"$path\"></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td width=\"23%\">".$langmsg['smilies'][8]."</td>\n";
		echo "<td width=\"77%\"><input type=\"text\" name=\"T2\" size=\"20\" value=\"$keycode\"></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td width=\"23%\">&nbsp;</td>\n";
		echo "<td width=\"77%\"><input type=\"submit\" value=\"".$langmsg['submitfield'][3]."\" name=\"S1\"></td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div>\n";
		echo "</form>\n";
	}else{
		$id = $_GET['id'];
		DataAccess::put("UPDATE " . NEWS_SMILIES . " SET path = ?, keycode = ? WHERE id = ?", $_POST['T3'], $_POST['T2'], $id);
		echo "<div class=success>".$langmsg['smilies'][17]."</div><br>";
	}
}
$_POST['smilieaction'] = (empty($_POST['smilieaction'])) ? '' : $_POST['smilieaction'];
if($_POST['smilieaction'] == "delete"){
	if(count($_POST['selectedsmilies']) !== 0){
		$selected = $_POST['selectedsmilies'];
		$i = 0;
		foreach($selected as $uid){
			DataAccess::put("DELETE FROM " . NEWS_SMILIES . " WHERE id = ?", $uid);
			$i++;
		}
		echo "<span class=\"success\">$i ".$langmsg['smilies'][18]."</span>";
	}
}
echo "<div class=panel style=\"text-align: left; width: 100%\">".$langmsg['smilies'][19]."</div><br />";
echo "<form method=\"POST\" action=\"?action=options&mod=smilies\" id=\"smilieform\">";
echo "<table id=\"rows\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" width=\"100%\">";
echo "<tr><td width=\"10%\" align=\"center\">".$langmsg['smilies'][20]."</td><td width=\"13%\">".$langmsg['smilies'][8]."</td><td>Comments</td><td width=\"60%\">".$langmsg['smilies'][7]."</td><td><input onclick=\"selectall()\" id=\"allcheck\" type=\"checkbox\" /></td></tr>";
$tmpcolor = "1";
$d = 1;
$allsmilies = DataAccess::fetch("SELECT * FROM " . NEWS_SMILIES . " WHERE type = ? ORDER BY keycode ASC", "news");
foreach($allsmilies AS $row){
	if($tmpcolor == "1"){
		$class = "row1";
		$tmpcolor = "2";
	}else{
		$class = "row2";
		$tmpcolor = "1";
	}                               
	if($row['showhide'] == "0"){
		$showhide = "<a href=\"?action=options&mod=smilies&show=true&value=1&id=$row[id]\">Show</a>";
	}else{
		$showhide = "<a href=\"?action=options&mod=smilies&show=true&value=0&id=$row[id]\">Hide</a>";
	}
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td align=\"center\"><img src=\"" . htmlspecialchars($row['path']) . "\"></td><td><a href=\"?action=options&mod=smilies&edit=true&id=$row[id]\">$row[keycode]</a></td><td>$showhide</td><td>". htmlspecialchars($row['path']) . "</td><td><input type=\"checkbox\" value=\"$row[id]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" name=\"selectedsmilies[]\" /></td></tr>";
	$d++;
}
echo "</table>";
echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\"><tr><td align=right>";
echo "<select name=\"smilieaction\" id=\"smilieaction\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select> <input type=\"button\" value=\"".$langmsg['submitfield'][0]."\" onclick=\"editsmilies()\" />";
echo "</td></tr></table>";
echo "</form>";
echo "<u><a href=\"?action=options&mod=smilies&create=new\">".$langmsg['smilies'][21]."</u></a> | <a href=\"?action=options&mod=smilies&create=replace\"><u>".$langmsg['smilies'][22]."</u></a></div>";
echo "</td></tr></table>";
?>