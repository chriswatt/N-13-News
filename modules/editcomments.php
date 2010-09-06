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

echo '<span class="header">' . $langmsg['editcomments'][0] . '</span>';
$articletitle = DataAccess::fetch(sprintf("SELECT title FROM %s WHERE id = ?", NEWS_ARTICLES), $_GET['pid']);
$articletitle = $articletitle['0']['title'];
echo '<span class="header">' . $articletitle . '</span>';
if($_GET['do'] == "new"){
	echo '<span class="header">' . $langmsg['options'][1] . '</span>';
}
if($_GET['do'] == "edit"){
	echo '<span class="header">' . $langmsg['options'][2] . '</span>';
}

echo '</div>';

$_GET['edit'] = (empty($_GET['edit'])) ? '' : $_GET['edit'];
$_POST['B2'] = (empty($_POST['B2'])) ? '' : $_POST['B2'];
if($_GET['edit'] == "true"){
	if(!$_POST['B2']){
		$id			= $_GET['id'];
		$all		= DataAccess::fetch("SELECT * FROM " . NEWS_COMMENTS . " WHERE id = ?", $id);
		$all		= $all['0'];
		$message	= displayhtml($all['message']);
		$user		= displayhtml($all['user']);
		$email		= displayhtml($all['email']);
		echo "<div style=\"text-align: left\" class=\"subheaders\">".$langmsg['editcomments'][1]."</div>";
		echo "<div class=\"subheaders_body displaytable\">";
		echo "<form method=\"POST\" action=\"?action=editcomments&pid=$_GET[pid]&edit=true&id=$_GET[id]\">\n";
		echo "<table border=\"0\" style=\"width: 99%\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"101%\" cellpadding=\"2\">\n";
		echo "  <tr>\n";
		echo "    <td width=\"21%\">".$langmsg['editcomments'][2]."</td>\n";
		echo "    <td width=\"80%\" colspan=\"2\"><input type=\"text\" name=\"T1\" size=\"54\" value=\"$user\"></td>\n";
		echo "  </tr>\n";
		echo "  <tr>\n";
		echo "    <td width=\"21%\">".$langmsg['editcomments'][3]."</td>\n";
		echo "    <td width=\"80%\" colspan=\"2\"><input type=\"text\" name=\"T2\" size=\"54\" value=\"$email\"></td>\n";
		echo "  </tr>\n";
		echo "  <tr>\n";
		echo "    <td width=\"21%\" valign=\"top\">".$langmsg['editcomments'][4]."</td>\n";
		echo "    <td width=\"80%\"><textarea rows=\"13\" name=\"S1\" style=\"width: 98%\" id=\"S1\">$message</textarea></td>\n";

		echo "  </tr>\n";
		echo "  <tr>\n";
		echo "    <td width=\"21%\" valign=\"top\">&nbsp;</td>\n";
		echo "    <td width=\"80%\" colspan=\"2\">\n";
		echo "    <input type=\"submit\" style=\"width: 100%\" value=\"".$langmsg['submitfield'][3]."\" name=\"B2\"></td>\n";
		echo "  </tr>\n";
		echo "</table>\n";
		echo "</form>\n";
		echo "</div>";
	}else{
		$id = $_GET['id'];
		DataAccess::put("UPDATE " . NEWS_COMMENTS . " SET user = ?, email = ?, message = ? WHERE id = ?", $_POST['T1'], $_POST['T2'], $_POST['S1'], $id);
		echo "<div class=success>".$langmsg['editcomments'][5]."</div>";
	}
}
			
$_POST['selected'] = (empty($_POST['selected'])) ? '' : $_POST['selected'];
if($_POST['selected']){
	if($_POST['commentaction'] == "delete"){
		$i = 0;
		foreach($_POST['selected'] as $selected){
			DataAccess::put("DELETE FROM " . NEWS_COMMENTS . " WHERE id = ?", $selected);
			updatecommentcount($_GET['pid']);
			$i++;
		}
		$langmsg['editcomments'][6] = "<b>$i</b> " . $langmsg['editcomments'][6];
		echo "<div class=\"success\">".$langmsg['editcomments'][6]."</div>";
	}
	if($_POST['commentaction'] == "approve"){
		$i = 0;
		$approved = $_POST['approveaction'];
		foreach($_POST['selected'] as $selected){
			DataAccess::put("UPDATE " . NEWS_COMMENTS . " SET approved = ? WHERE id = ?", $approved, $selected);
			$i++;
		}
		
		//update comment count on parent article
		updatecommentcount($_GET['pid']);
		$langmsg['editcomments'][7] = "<b>$i</b> " . $langmsg['editcomments'][7];
		echo "<div class=\"success\">".$langmsg['editcomments'][7]."</div>";
	}
}

$_GET['page'] = (empty($_GET['page'])) ? '' : $_GET['page'];
$tmpcolor		= 1;
$totalcomments	= DataAccess::fetch("SELECT * FROM " . NEWS_COMMENTS . " WHERE pid = ? ORDER BY 0+id DESC", $_GET['pid']);
$totalcomments	= count($totalcomments);
$totalnews		= $totalcomments;
$page			= $_GET['page'];
$amounttoshow	= 15;
$amountofpages	= ceil($totalnews / $amounttoshow);					
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
			$pages .= "<span class=\"page2\">$d</span> ";	
		}else{
			$pages .= "<a class=\"page1\" href=\"?action=editcomments&pid=" . $_GET['pid'] . "&page=$d\">$d</a> ";	
		}
	}
	$d++;						
}
if($amountofpages == 1 || $page == 1){
	$plink = "";
}else{
	$g = $page - 1;
	$plink = "<a class=\"page1\" href=\"?action=editcomments&pid=" . $_GET['pid'] . "&page=$g\"><</a> ";	
}
	
if($amountofpages == $page || $amountofpages == 0){
	$nlink = ""; 
}else{
	$g = $page + 1;
	$nlink = "<a class=\"page1\" href=\"?action=editcomments&pid=" . $_GET['pid'] . "&page=$g\">></a>";                                                          
}
			
$allcomments =  DataAccess::fetch("SELECT * FROM " . NEWS_COMMENTS . " WHERE pid = ? ORDER BY 0+id DESC LIMIT $start, $amounttoshow", $_GET['pid']);
$numcomments = count($allcomments);
$langmsg['editcomments'][8] = "<b>$numcomments</b> " . $langmsg['editcomments'][8];
echo "<div class=panel style=\"text-align: left\">".$langmsg['editcomments'][8]."</div><br />";
echo "<form method=\"POST\" id=\"commentsform\" style=\"margin: 0px\" name=\"commentsform\" action=\"?action=editcomments&pid=$_GET[pid]\">";
echo "<table id=\"rows\" width=\"100%\" cellspacing=\"0\" border=\"0\" cellpadding=\"0\"><tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"30%\">".$langmsg['editcomments'][9]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['editcomments'][2]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['editcomments'][10]."</td><td class=\"tableshead tablerightborder\" width=\"15%\" align=center>".$langmsg['editnews'][11]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['editcomments'][12]."</td><td class=\"tableshead\" width=\"0\"><input type=\"checkbox\" name=\"allcheck\" onclick=\"selectall()\" id=\"allcheck\" /></td></tr><tr>\n";
              
$i = 1;
foreach($allcomments AS $row){			                			
	if($tmpcolor == 1){
		$class = "row1";
		$tmpcolor = 2;
	}else{
		$class = "row2";
		$tmpcolor = 1;
	}
	$pid = $_GET['pid'];
	echo "<tr onmouseover=\"markfield('$i')\" onmouseout=\"unmarkfield('$i')\" id=\"$i\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=editcomments&pid=$pid&edit=true&id=$row[id]\"><img src=\"images/icons/pencil.png\" alt=\"Edit\" title=\"Edit\" /></a></td><td class=\"tablebody tablerightborder\"><div style=\"width: 161px; height: 17px; overflow: hidden\">";
	echo displayhtml($row['message']);;
	if(strlen($row['user']) >= 10){
		$user = displayhtml($row['user']);
		$user = substr($user,0,10);
		$user = $user . "...";
	}else{
		$user = displayhtml($row['user']);
	}
	if($row['approved'] == "1"){
		$approved = $langmsg['editcomments'][13];
		$approved = "<span style=\"color: #00AA00\">" . $approved . "</span>";
	}else{
		$approved = $langmsg['editcomments'][14];
		$approved = "<span style=\"color: #AA0000\">" . $approved . "</span>";
	}			 
	echo "</td><td class=\"tablebody tablerightborder\">$user</td><td class=\"tablebody tablerightborder\">". date("d/m/y",$row['timestamp']) . "</td><td class=\"tablebody tablerightborder\" align=center>$approved</td><td class=\"tablebody tablerightborder\">$row[ip]</td><td class=\"tablebody\" align=right><input type=\"checkbox\" id=\"check_".$i."\"value=\"$row[id]\" onclick=\"if(document.getElementById('check_'+$i).checked == true){ markfield('$i'); }else{ unmarkfield('$i') }\" value=\"$row[id]\" id=\"check_$d\" name=\"selected[]\"></td></tr>\n";
	$i++;
}

echo "</table>";
echo "<div style=\"float: right\">";
echo "<select id=\"commentaction\" onchange=\"editcomments()\" name=\"commentaction\">";
echo "<option>".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"approve\">".$langmsg['selectfield'][6]."</option>";				
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select>&nbsp;";
echo "<select name=\"approveaction\" id=\"approveaction\" style=\"display: none; margin-right: 2px\">";
echo "<option value=\"1\">".$langmsg['selectfield'][9]."</option>";
echo "<option value=\"0\">".$langmsg['selectfield'][10]."</option>";
echo "</select>";
echo "<input type=\"button\" onclick=\"delcomments();\" class=\"nostyle\" value=\"".$langmsg['submitfield'][0]."\" id=\"S1\" name=\"S1\">\n";
echo "</div>";		
if($amountofpages > 1){
	echo "<br /><br /><div style=\"text-align: right\">$plink $pages $nlink</div>";
}


echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>