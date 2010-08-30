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


$_POST['filter'] = (empty($_POST['filter'])) ? '' : $_POST['filter'];
$_GET['delete'] = (empty($_GET['delete'])) ? '' : $_GET['delete'];

function filterform(){
	global $langmsg;
	if($_GET['edit']){
		$filterdata = DataAccess::fetch(sprintf("SELECT filter, alt FROM %s WHERE id = ?", NEWS_FILTER), $_GET['id']);
		$filter		= $filterdata['0']['filter'];
		$replace	= $filterdata['0']['alt'];
	}
	echo "<div class=\"subheaders\">" . $langmsg['filters'][7] . "</div>";
	echo "<div class=\"subheaders_body displaytable\">";
	echo "<form method=\"post\" action=\"?action=options&mod=filter&new=true\">";
	echo $langmsg['filters'][4]." <input type=\"text\" vale=\"$filter\" name=\"filter\">  ".$langmsg['filters'][5]." <input type=\"text\" value=\"$replace\" name=\"alt\">";
	echo "&nbsp;&nbsp;<input type=\"submit\" class=\"nostyle\" value=\"".$langmsg['submitfield'][7]."\">";
	echo "</form>";
	echo "</div>";
}


if(count($_POST['selectedfilters']) !== 0){
	$selected = $_POST['selectedfilters'];
	$i = 0;
	$deleted = '';
	foreach($selected as $uid){
		DataAccess::put(sprintf("DELETE FROM %s WHERE id = ?", NEWS_FILTER), $uid);
		$i++;
	}

	if($i > 0){
		echo "<span class=\"success\">$i ".$langmsg['filters'][2]." <br />$deleted</span>";
	}


}


if($_GET['new']){
	if($_POST['filter']){
		DataAccess::put("INSERT INTO " . NEWS_FILTER . " (filter, alt) VALUES (?, ?)", $_POST['filter'], $_POST['alt']);
		echo "<div class=success>".$langmsg['filters'][1]."</div>";
	}else{
		filterform();
	}
}
echo "<div class=panel>".$langmsg['filters'][3]."</div><br>";
echo "<form method=\"post\" id=\"filterform\" name=\"filterform\" action=\"\">";
echo "<table id=\"rows\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['filters'][4]."</td><td class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['filters'][5]."</td><td class=\"tableshead\" width=\"50%\"><input type=\"checkbox\" id=\"allcheck\" name=\"allcheck\" onclick=\"selectall()\" id=\"allcheck\" /></td></tr>";
$tmpcolor = "1";
$allfilters = DataAccess::fetch("SELECT * FROM " . NEWS_FILTER);
$d = 1;
foreach($allfilters AS $row){
	if($tmpcolor == "1"){
		$class = "row1";
		$tmpcolor = "2";
	} else {
		$class = "row2";
		$tmpcolor = "1";
	}
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\">" . displayhtml($row['filter']) . "</td><td class=\"tablebody tablerightborder\">" . displayhtml($row['alt']) . "</td><td class=\"tablebody\"><input type=\"checkbox\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" value=\"" . $row['id'] . "\" name=\"selectedfilters[]\" /></td></tr>";
	$d++;
}
echo "<tr><td colspan=\"4\" style=\"text-align: right\">";
echo "<select name=\"filteraction\" id=\"filteraction\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select>&nbsp;<input type=\"button\" value=\"".$langmsg['submitfield'][0]."\" onclick=\"deletefilters()\" />";
echo "</td></tr>";
echo "</table>";
echo "</form>";

echo "<a href=\"?action=options&mod=filter&new=true\">Add a new filter.</a>";

/* end of filter mod */

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>