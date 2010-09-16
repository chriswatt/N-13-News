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

echo '<span class="header">' . $langmsg['accesslogs'][0] . '</span>';
echo '</div>';
echo "<div class=\"panel\">".$langmsg['accesslogs'][5]." <b>" . $_SESSION['name'] . "</b></div><br />";
echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr><td  class=\"tableshead tablerightborder\" width=\"25%\">".$langmsg['accesslogs'][1]."</td><td  class=\"tableshead tablerightborder\" width=\"25%\">".$langmsg['accesslogs'][2]."</td><td  class=\"tableshead tablerightborder\" width=\"25%\">".$langmsg['accesslogs'][3]."</td><td  class=\"tableshead\" width=\"25%\">".$langmsg['accesslogs'][4]."</td>";

$totalnews = DataAccess::fetch("SELECT COUNT(*) AS totalaccess FROM " . NEWS_ACCESSLOGS . " WHERE user = ?", $_SESSION['name']);
$totalnews = $totalnews['0']['totalaccess'];
$amounttoshow = 15;
$_GET['page'] = (empty($_GET['page'])) ? '' : $_GET['page'];
$page = $_GET['page'];
$amountofpages = ceil($totalnews / $amounttoshow);					
if(!$page){ 		
	$start = 0;
	$page = 1;
}else{
	if(!is_numeric($page)){
		$page = 1;
	}
	if($page > $amountofpages){
		$start = 0;
		$page = 1;	
	}else{							  	
		$start = $page * $amounttoshow - $amounttoshow;
	}	
}

$d = 1;
$pages = '';
while($d <= $amountofpages){
	if($amountofpages !== 1){         
		if($d == $page){
			$pages .= "<span class=\"pages2\">$d</span> ";	
		}else{
			$pages .= "<span class=\"pages\"><a href=\"?action=accesslogs&page=$d\">$d</a></span> ";	
		}
	}
	$d++;						
}
if($amountofpages == 1 || $page == 1){
	$plink = "";
}else{
	$g = $page - 1;
	$plink = "<span class=\"pages\"><a href=\"?action=accesslogs&page=$g\"><</a></span> ";	
}
if($amountofpages == $page){
	$nlink = ""; 
}else{
	$g = $page + 1;
	$nlink = "<span class=\"pages\"><a href=\"?action=accesslogs&page=$g\">></a></span>";                                                          
}


$alllogs = DataAccess::fetch("SELECT * FROM " . NEWS_ACCESSLOGS . " WHERE user = ? ORDER BY id DESC LIMIT $start, $amounttoshow", $_SESSION['name']);
$x = 1;
foreach($alllogs AS $row){
	if($x == 1){
		$class = "row1";
		$x = 2;
	}else{
		$class = "row2";
		$x = 1;
	}
	if($row['success'] == "1"){
		$success = $langmsg['accesslogs'][6];
	}else{
		$success = $langmsg['accesslogs'][7];;
	}
	echo "<tr class=\"$class\"><td class=\"tablebody tablerightborder\">$row[user]</td><td class=\"tablebody tablerightborder\">$success</td><td class=\"tablebody tablerightborder\">$row[ip]</td><td class=\"tablebody\">" . date("d M Y",$row['loggedin'] + TIMEZONE) . "</td></tr>";
}
echo "<tr><td>";
if($amountofpages > 1){
	echo "$plink [ $pages ] $nlink";
}
echo "</td></tr>";
echo "</table>";
echo "</td>";
echo "</tr></table>";
echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>