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
echo '<span class="header">' . $langmsg['bannedips'][0] . '</span>';
$_GET['new']	= (empty($_GET['new'])) ? '' : $_GET['new'];
if($_GET['new'] == "true"){
	echo '<span class="header">' . $langmsg['options'][1] . '</span>';
}


echo '</div>';


echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
$_GET['new'] = (empty($_GET['new'])) ? '' : $_GET['new'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
$_POST['ip'] = (empty($_POST['ip'])) ? '' : $_POST['ip'];

if($_POST['S1']){
	if(!$_GET['new']){
		$bannedmsg = $_POST['T2'];
		DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET bannedmsg = ? WHERE 1", $bannedmsg);
		echo "<div class=success>".$langmsg['bannedips'][11]."</div>";
	}
}

if($_GET['new'] == "true"){
	function newbannedipform(){
		global $langmsg;
		echo "<div class=subheaders>".$langmsg['bannedips'][4]."</div>";
		echo "<div class=\"subheaders_body displaytable\">";
		echo "<form method=\"post\" action=\"?action=options&mod=bannedips&new=true\">";
		$ip = htmlspecialchars($_POST['ip']);
		echo "<div style=\"width: 100px; float: left; font-family: Arial; font-size: 12px;\">".$langmsg['bannedips'][6]."</div><input type=\"text\" name=\"ip\" value=\"$ip\">";
		echo "<div style=\"padding-top: 2px\"><div style=\"width: 100px; float: left\">&nbsp;</div><div><input type=\"submit\" name=\"S1\" value=\"".$langmsg['submitfield'][7]."\"></div>";
		echo "</form>";
		echo "</div>";
		echo "</div>";
	}
	if(!$_POST['S1']){
		newbannedipform();
	}else{
		$ip = $_POST['ip'];
		$num = DataAccess::fetch("SELECT COUNT(*) AS total FROM " . NEWS_BANNED . " WHERE ip = ?", $ip);
		$num = $num['0']['total'];
		if($num > 0){
			echo "<span class=\"error\">".$langmsg['bannedips'][7]."</span>";
			newbannedipform();
		}else{
			DataAccess::put("INSERT INTO " . NEWS_BANNED . " (ip, blocked) VALUES (?, ?)", $ip, "0");
			echo "<span class=\"success\">".$langmsg['bannedips'][8]."</span>";
		}
	}	
}
$_POST['bannedipaction'] = (empty($_POST['bannedipaction'])) ? '' : $_POST['bannedipaction'];
if($_POST['bannedipaction'] == "delete"){
	$_POST['selectedips'] = (empty($_POST['selectedips'])) ? array() : $_POST['selectedips'];
	if(count($_POST['selectedips']) > 0){
		$selected = $_POST['selectedips'];
		$i = 0;
		foreach($selected as $uid){
            DataAccess::put("DELETE FROM " . NEWS_BANNED . " WHERE id = ?", $uid);
			$i++;
		}
		$f = $langmsg['bannedips'][9];
		$f = "<b>$i</b> " . $f;
		echo "<span class=\"success\">$f</span>";
	}
}elseif($_POST['bannedipaction'] == "reset"){
	if(count($_POST['selectedips']) !== 0){
		$selected = $_POST['selectedips'];
		$i = 0;
		foreach($selected as $uid){
            DataAccess::put("UPDATE " . NEWS_BANNED . " SET blocked = ? WHERE id = ?", "0", $uid);	
			$i++;
		}
		$f = $langmsg['bannedips'][10];
		$f = "<b>$i</b> " . $f;		
		echo "<br /><span class=\"success\">$f</span><br />";
	}
}

$total = DataAccess::fetch("SELECT COUNT(*) as total FROM " . NEWS_BANNED);
$total = $total['0']['total'];
$f = $langmsg['bannedips'][1];
$f = "<b>$total</b>" . " " . $f;
echo "<div class=panel>$f</div><br>";
echo "<form method=\"post\" id=\"bannedform\" action=\"?action=options&mod=bannedips\">";
echo "<table id=\"rows\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">";
echo "<tr><td class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['bannedips'][2]."</td><td align=\"center\" class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['bannedips'][3]."</td><td class=\"tableshead\"><input type=\"checkbox\" id=\"allcheck\" onclick=\"selectall()\" /></td></tr>";
$d = 1;
$allbanned = DataAccess::fetch("SELECT * FROM " . NEWS_BANNED);
$x = false;
foreach($allbanned AS $row){
	if($x == true){
		$class = "row2";
		$x = false;
	}else{
		$class = "row1";
		$x = true;   
	}				
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\">$row[ip]</td><td style=\"text-align: right\" class=\"tablebody tablerightborder\">$row[blocked]</td><td class=\"tablebody\"><input type=\"checkbox\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" value=\"$row[id]\" name=\"selectedips[]\" />";
	$d++;
}
echo "</table>";
echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\"><tr><td align=right>";
echo "<select name=\"bannedipaction\" id=\"bannedipaction\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "<option value=\"reset\">".$langmsg['selectfield'][18]."</option>";
echo "</select>&nbsp;<input type=\"button\" value=\"".$langmsg['submitfield'][0]."\" onclick=\"editbannedips()\" />";
echo "</td></tr></form></table>";
echo "<a href=\"?action=options&mod=bannedips&new=true\">".$langmsg['bannedips'][4]."</a>"; 

function bannedipform(){
	global $langmsg;
	echo "<form method=\"post\" action=\"?action=options&mod=bannedips\">"; 				
	echo "<br /><div class=panel>".$langmsg['bannedips'][5]."</div>";
	echo "<br><textarea name=\"T2\" style=\"width: 99%\" rows=5>" . BANNEDMSG . "</textarea>";
	echo "<div align=right><input type=\"submit\" value=\"".$langmsg['submitfield'][6]."\" class=\"nostyle\" name=\"S1\"></div>";
	echo "</form>";
	echo "</div>";
}
if(!$_POST['S1']){
	bannedipform();
}else{
	bannedipform();
}    
echo "</td></tr></table>";

echo "		<!--rightside-->
	</div><!--pageCont-->";
?>