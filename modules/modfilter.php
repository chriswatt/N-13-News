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

echo "<span class=header>".$langmsg['filters'][0]."</span></div><table width=\"685px\"><tr><td width=\"17%\" align=center valign=top><br><img src=\"images/news_5.png\" alt=\"".$langmsg['filters'][0]."\"></td><td><br />";
$_POST['filter'] = (empty($_POST['filter'])) ? '' : $_POST['filter'];
$_GET['delete'] = (empty($_GET['delete'])) ? '' : $_GET['delete'];
if($_POST['filter']){
	DataAccess::put("INSERT INTO " . NEWS_FILTER . " (filter, alt) VALUES (?, ?)", $_POST['filter'], $_POST['alt']);
	echo "<div class=success>".$langmsg['filters'][1]."</div>";
}
if($_GET['delete'] == "true"){
	DataAccess::put("DELETE FROM " . NEWS_FILTER . " WHERE id = ?", $_GET['id']);
	echo "<div class=success>".$langmsg['filters'][2]."</div>";
}
echo "<div class=panel>".$langmsg['filters'][3]."</div><br>";
echo "<table width=\"100%\" border=\"0\" cellpadding=\"1\"><tr><td width=\"40%\">".$langmsg['filters'][4]."</td><td width=\"40%\">".$langmsg['filters'][5]."</td><td width=\"20%\"><div align=\"right\">".$langmsg['filters'][6]."</div></td></tr>";
$tmpcolor = "1";
$allfilters = DataAccess::fetch("SELECT * FROM " . NEWS_FILTER);
foreach($allfilters AS $row){
	if($tmpcolor == "1"){
		$class = "row1";
		$tmpcolor = "2";
	} else {
		$class = "row2";
		$tmpcolor = "1";
	}
	echo "<tr class=\"$class\"><td>" . displayhtml($row['filter']) . "</td><td>" . displayhtml($row['alt']) . "</td><td><a href=\"?action=options&mod=filter&delete=true&id=$row[id]\"><div class=error align=\"right\">".$langmsg['filters'][6]."</div></a></td></tr>";
}
echo "</table></div>";
echo "<br>";
echo "<table width=\"100%\"><tr><td>";
echo "<form method=\"post\" action=\"?action=options&mod=filter&new=true\">";
echo $langmsg['filters'][4]." <input type=\"text\" name=\"filter\">  ".$langmsg['filters'][5]." <input type=\"text\" name=\"alt\">";
echo "&nbsp;&nbsp;<input type=\"submit\" class=\"nostyle\" value=\"".$langmsg['submitfield'][7]."\">";
echo "</form>";
echo "</td></tr></table></td></tr></table>";
/* end of filter mod */

?>