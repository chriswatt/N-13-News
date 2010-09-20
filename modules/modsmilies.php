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
echo '<span class="header">' . $langmsg['smilies'][0] . '</span>';

$_GET['edit']	= (empty($_GET['edit'])) ? '' : $_GET['edit'];
$_GET['create']	= (empty($_GET['create'])) ? '' : $_GET['create'];
$_GET['position']	= (empty($_GET['position'])) ? '' : $_GET['position'];
$_GET['id']	= (empty($_GET['id'])) ? '' : $_GET['id'];

if($_GET['create'] == "new"){
	echo '<span class="header">' . $langmsg['options'][1] . '</span>';
}
if($_GET['edit'] == "true"){
	echo '<span class="header">' . $langmsg['options'][2] . '</span>';
}
if($_GET['create'] == "replace"){
	echo '<span class="header">' . $langmsg['smilies'][3] . '</span>';
}

echo '</div>';



if($_GET['position'] && $_GET['id']){
	$smileyposition = DataAccess::fetch(sprintf("SELECT position FROM %s WHERE id = ?", NEWS_SMILIES), $_GET['id']);
	$smileyposition = $smileyposition['0']['position'];
	
	$totalsmilies = count(DataAccess::fetch(sprintf("SELECT id FROM %s", NEWS_SMILIES)));
	if($_GET['position'] == "down"){
		$curpos = $smileyposition;
		$curid = $_GET['id'];
		$olddata = DataAccess::fetch(sprintf("SELECT id, position FROM %s WHERE position = ?", NEWS_SMILIES), ($curpos + 1));
		$oldid = $olddata['0']['id'];
		$oldpos = $olddata['0']['position'];
		
		if($curpos < $totalsmilies){
			DataAccess::put(sprintf("UPDATE %s SET position = ? WHERE id = ?", NEWS_SMILIES), $oldpos, $curid);
			DataAccess::put(sprintf("UPDATE %s SET position = ? WHERE id = ?", NEWS_SMILIES), $curpos, $oldid);
		}
	}elseif($_GET['position'] == "up"){
		$curpos = $smileyposition;
		$curid = $_GET['id'];
		$olddata = DataAccess::fetch(sprintf("SELECT id, position FROM %s WHERE position = ?", NEWS_SMILIES), ($curpos - 1));
		$oldid = $olddata['0']['id'];
		$oldpos = $olddata['0']['position'];
		
		if($curpos > 0){
			DataAccess::put(sprintf("UPDATE %s SET position = ? WHERE id = ?", NEWS_SMILIES), $oldpos, $curid);
			DataAccess::put(sprintf("UPDATE %s SET position = ? WHERE id = ?", NEWS_SMILIES), $curpos, $oldid);		
		}
	}
}

$_GET['create'] = (empty($_GET['create'])) ? '' : $_GET['create'];
if($_GET['create'] == "replace"){
	echo "<form method=\"post\" action=\"?action=options&mod=smilies&create=replace\">";
	function smiliereplaceform(){
		global $langmsg;
		echo "<div class=subheaders>".$langmsg['smilies'][1]."</div>";
		echo "<div class=\"subheaders_body displaytable\">";
		echo $langmsg['smilies'][2];
		echo "<div style=\"width: 100px; float: left\">".$langmsg['smilies'][3]."</div><input type=\"text\" name=\"replace\" />";
		echo "<br />";
		echo "<div style=\"padding-top: 3px; width: 100px; float: left\">".$langmsg['smilies'][4]."</div><input style=\"margin-top: 3px;\" type=\"text\" name=\"replacewith\" />";
		echo "<br />";
		echo "<div style=\"width: 100px; float: left\">&nbsp;</div><input style=\"margin-top: 3px; margin-bottom: 3px\" type=\"submit\" value=\"".$langmsg['submitfield'][6]."\" name=\"S1\" />";	
		echo "</div>";
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
		echo "<div class=\"subheaders\">".$langmsg['smilies'][6]."</div>";
		echo "<div class=\"subheaders_body displaytable\">";
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
		echo "</div>";
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
		$position = DataAccess::fetch(sprintf("SELECT position FROM %s ORDER BY position DESC LIMIT 0, 1", NEWS_SMILIES));
		$position = $position['0']['position'];
		$position++;
		
		DataAccess::put("INSERT INTO " . NEWS_SMILIES . " (path, keycode, type, position) VALUES (?, ?, ?, ?)", $_POST['T1'], $_POST['T2'], "news", $position);
		echo "<div class=success>".$langmsg['smilies'][12]."</div>";
	}
}
$_GET['delete'] = (empty($_GET['delete'])) ? '' : $_GET['delete'];

$_GET['edit'] = (empty($_GET['edit'])) ? '' : $_GET['edit'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
if($_GET['edit'] == "true"){
	if($_POST['S1'] == ""){
		$id = $_GET['id'];
		$smileydata = DataAccess::fetch("SELECT path, keycode FROM " . NEWS_SMILIES . " WHERE id = ?", $_GET['id']);
		$path = $smileydata['0']['path'];
		$keycode = $smileydata['0']['keycode'];
		echo "<div class=\"subheaders\" style=\"text-align: left\">".$langmsg['smilies'][15]."</div>";
		echo "<div class=\"subheaders_body displaytable\">";
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
		echo "</div>";
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
		sort($selected);
		$selected = array_reverse($selected);
		$i = 0;
		foreach($selected as $uid){
			$curpos = DataAccess::fetch(sprintf("SELECT position FROM %s WHERE id = ?", NEWS_SMILIES), $uid);
			$curpos = $curpos['0']['position'];
			DataAccess::put("DELETE FROM " . NEWS_SMILIES . " WHERE id = ?", $uid);
			DataAccess::put(sprintf("UPDATE %s SET position = position - 1 WHERE position > ?", NEWS_SMILIES), $curpos);
			$i++;
		}
		echo "<span class=\"success\">$i ".$langmsg['smilies'][18]."</span>";
	}
}
echo "<div class=panel style=\"\">".$langmsg['smilies'][19]."</div><br />";
echo "<form method=\"POST\" action=\"?action=options&mod=smilies\" id=\"smilieform\">";
echo "<table id=\"rows\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">";
echo "<tr><td class=\"tableshead tablerightborder\"></td><td width=\"10%\" class=\"tableshead tablerightborder\" align=\"center\">".$langmsg['smilies'][20]."</td><td class=\"tableshead tablerightborder\" width=\"13%\">".$langmsg['smilies'][8]."</td><td class=\"tableshead tablerightborder\">Comments</td><td class=\"tableshead tablerightborder\">Position</td><td class=\"tableshead tablerightborder\" width=\"60%\">".$langmsg['smilies'][7]."</td><td class=\"tableshead\"><input onclick=\"selectall()\" id=\"allcheck\" type=\"checkbox\" /></td></tr>";
$tmpcolor = "1";
$d = 1;
$allsmilies = DataAccess::fetch("SELECT * FROM " . NEWS_SMILIES . " WHERE type = ? ORDER BY position ASC", "news");
foreach($allsmilies AS $row){
	if($tmpcolor == "1"){
		$class = "row1";
		$tmpcolor = "2";
	}else{
		$class = "row2";
		$tmpcolor = "1";
	}                               

	if($row['showhide'] == "0"){
		$showhide = "<img alt=\"Hide\" title=\"Hide\" src=\"images/icons/emoticon_unhappy.png\" />";
		$showhide .= "<a href=\"?action=options&mod=smilies&show=true&value=1&id=$row[id]\"><img alt=\"Show\" title=\"Show\" src=\"images/icons/emoticon_smile_fade.png\" /><a href=\"?action=options&mod=smilies&show=true&value=0&id=$row[id]\"></a>";
	}else{	
		$showhide = "<a href=\"?action=options&mod=smilies&show=true&value=0&id=$row[id]\"><img alt=\"Hide\" title=\"Hide\" src=\"images/icons/emoticon_unhappy_fade.png\" /></a>";
		$showhide .= "<img alt=\"Show\" title=\"Show\" src=\"images/icons/emoticon_smile.png\" /><a href=\"?action=options&mod=smilies&show=true&value=0&id=$row[id]\">";	
	}
	if($row['position'] == "0"){
		$position = "<a href=\"?action=options&mod=smilies&position=down&id=$row[id]\"><img alt=\"Move down\" title=\"Move down\" style=\"padding-left: 16px\" src=\"images/icons/arrow_down.png\" /></a>";
	}else{
		if($row['position'] == (count($allsmilies) - 1)){
			$position = "<a href=\"?action=options&mod=smilies&position=up&id=$row[id]\"><img alt=\"Move up\" title=\"Move up\" style=\"padding-right: 16px\" src=\"images/icons/arrow_up.png\" /></a>";
		}else{
			$position = "<a href=\"?action=options&mod=smilies&position=up&id=$row[id]\"><img alt=\"Move up\" title=\"Move up\" src=\"images/icons/arrow_up.png\" /></a><a href=\"?action=options&mod=smilies&position=down&id=$row[id]\"><img alt=\"Move down\" title=\"Move down\" src=\"images/icons/arrow_down.png\" /></a>";
		}
	}
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=smilies&edit=true&id=$row[id]\"><img alt=\"Edit\" title=\"Edit\" src=\"images/icons/pencil.png\" /></a></td><td class=\"tablebody tablerightborder\" align=\"center\"><img src=\"" . htmlspecialchars($row['path']) . "\"></td><td class=\"tablebody tablerightborder\">$row[keycode]</td><td class=\"tablebody tablerightborder\" style=\"text-align: center\">$showhide</td><td class=\"tablebody tablerightborder\" style=\"text-align: center\">$position</td><td class=\"tablebody tablerightborder\">". htmlspecialchars($row['path']) . "</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row[id]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" name=\"selectedsmilies[]\" /></td></tr>";
#	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\" align=\"center\"><img src=\"" . htmlspecialchars($row['path']) . "\"></td><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=smilies&edit=true&id=$row[id]\">$row[keycode]</a></td><td class=\"tablebody tablerightborder\">$showhide</td><td class=\"tablebody tablerightborder\">". htmlspecialchars($row['path']) . "</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row[id]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" name=\"selectedsmilies[]\" /></td></tr>";
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
echo "<u><a href=\"?action=options&mod=smilies&create=new\">".$langmsg['smilies'][21]."</u></a> | <a href=\"?action=options&mod=smilies&create=replace\"><u>".$langmsg['smilies'][22]."</u></a>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>