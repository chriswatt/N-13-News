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


$totalnews		= DataAccess::fetch("SELECT COUNT(id) AS totalnews FROM " . NEWS_ARTICLES);
$totalnews		= $totalnews['0']['totalnews'];
$totalcomments	= DataAccess::fetch("SELECT COUNT(id) AS totalcomments FROM " . NEWS_COMMENTS);
$totalcomments	= $totalcomments['0']['totalcomments'];
$totalusers		= DataAccess::fetch("SELECT COUNT(uid) AS totalusers FROM " . NEWS_USERS);
$totalusers		= $totalusers['0']['totalusers'];
$totalsmilies	= DataAccess::fetch("SELECT COUNT(id) AS totalsmilies FROM " . NEWS_SMILIES);
$totalsmilies	= $totalsmilies['0']['totalsmilies'];
$totalfilters	= DataAccess::fetch("SELECT COUNT(id) AS totalfilters FROM " . NEWS_FILTER);
$totalfilters	= $totalfilters['0']['totalfilters'];
$totalcats		= DataAccess::fetch("SELECT COUNT(id) AS totalcats FROM " . NEWS_CATS);
$totalcats		= $totalcats['0']['totalcats'];
$totaltemplates	= DataAccess::fetch("SELECT COUNT(id) AS totaltemplates FROM " . NEWS_TEMPLATES);
$totaltemplates	= $totaltemplates['0']['totaltemplates'];
$numaccess		= DataAccess::fetch("SELECT COUNT(uid) AS numaccess FROM " . NEWS_ACCESS);
$numaccess		= $numaccess['0']['numaccess'];
$totalimages	= DataAccess::fetch("SELECT COUNT(uid) AS numimages FROM " . NEWS_IMAGES);
$totalimages	= $totalimages['0']['numimages'];
$totalfiles		= DataAccess::fetch("SELECT COUNT(uid) AS numfiles FROM " . NEWS_FILES);
$totalfiles		= $totalfiles['0']['numfiles'];
$totalrss		= DataAccess::fetch("SELECT COUNT(feedid) AS numrss FROM " . NEWS_FEEDS);
$totalrss		= $totalrss['0']['numrss'];
$sentto			= $_SESSION['uid'];
$unreadmessages	= DataAccess::fetch("SELECT COUNT(uid) AS unread FROM " . NEWS_PRIVATE . " WHERE sentto = '$sentto' AND viewed = '1'");
$unreadmessages	= $unreadmessages['0']['unread'];
$f = '';
$f = $f . " (" . $unreadmessages . ")";
echo "<span class=header>" . $langmsg['home'][1] . " $_SESSION[name]</span></div><table width=\"685px\"><tr><td align=\"center\" valign=top width=\"17%\"><img src=\"images/n13newslogo.png\" alt=\"N-13 News 3.1\" /><br />N-13 News<br />$version</td><br />";        
echo "<td valign=top align=top>";
if(ini_get("register_globals")){
	echo "<div style=\"padding: 5px; background-color: #fff97b; border: 1px solid #c8c11f\">";
	echo $langmsg['home'][3];
	echo "</div><br />";
}            
//try delete install dir
if(file_exists(ABSPATH . "install/index.php")){
	function deleteinstall(){
		global $langmsg;
		echo "<form method=\"post\" action=\"?\">";
		echo "<div style=\"padding: 5px; background-color: #fff97b; border: 1px solid #c8c11f\">";
		echo $langmsg['home'][4] . "<br /><br />" . $langmsg['home'][21];
		echo " <input type=\"submit\" value=\"".$langmsg['submitfield'][8]."\" name=\"Delete\" />
		</div></form><br />";
	}
	$_POST['Delete'] = (empty($_POST['Delete'])) ? '' : $_POST['Delete'];
	if(!$_POST['Delete']){
		deleteinstall();
	}else{
		if(!@unlink("install/index.php")){
			echo "<span class=error>";
			echo $langmsg['home'][5];
			echo "</span><br /><br />";			   		
		}
	}
}

echo "<div class=panel><span style=\"float: right; margin-right: 0px\">" . $langmsg['home'][20] . $f ."</span>".$langmsg['home'][0] . "</div>";
echo "<br><div align=\"right\">";
echo "<table border=\"0\" cellpadding=\"0\" style=\"text-align: left; border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\">\n";
echo "  <tr>\n";
echo "    <td width=\"24%\">\n";
echo "    " . $langmsg['home'][6] . "</td>\n";
echo "    <td width=\"24%\">\n";
echo "    <div class=success>$totalnews</div></td>\n";
echo "    <td width=\"27%\">\n";
echo "    " . $langmsg['home'][23] . "</td>\n";
echo "    <td width=\"25%\">\n";
echo "    <div class=success>$totalimages</div></td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td width=\"24%\">\n";
echo "    " . $langmsg['home'][7] . "</td>\n";
echo "    <td width=\"24%\">\n";
echo "    <div class=success>$totalcomments</div></td>\n";
echo "    <td width=\"27%\">\n";
echo "    " . $langmsg['home'][24] . "</td>\n";
echo "    <td width=\"25%\">\n";



echo "<div class=success>$totalfiles</div></td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td width=\"20%\">" . $langmsg['home'][8] . "</td>\n";
echo "    <td width=\"24%\"><div class=success>$totalusers</div></td>\n";
echo "    <td width=\"27%\">" . $langmsg['home'][25] . "</td>\n";
echo "    <td width=\"25%\"><div class=success>$totalrss</div></td>\n";
echo "  </tr>\n";
echo "<tr>\n";
echo "<td width=\"24%\">" . $langmsg['home'][9] . "</td>\n";
echo "<td width=\"24%\"><div class=success>$totalsmilies</div></td>\n";
echo "<td>". $langmsg['home'][16] . "</td><td><span class=success>$version</span></td>";
echo "</tr>";
echo "<tr>";
echo "<td width=\"24%\">" . $langmsg['home'][10] . "</td>\n";
echo "<td width=\"24%\"><div class=success>$totalfilters</div></td>\n";
echo "<td>". $langmsg['home'][17] . "</td><td id=\"latestversion\">Checking for updates</td>";
echo "</tr>";
echo "<tr>";
echo "<td width=\"24%\">" . $langmsg['home'][11] . "</td>\n";
echo "<td width=\"24%\"><div class=success>$totalcats</div></td>\n";
echo "<td colspan=\"2\" id=\"messagebox\"></td>";
echo "</tr>";
echo "<tr>";
echo "<td width=\"24%\">" . $langmsg['home'][12] . "</td>\n";
echo "<td width=\"24%\"><div class=success>$totaltemplates</div></td>\n";
echo "</tr>";
echo "<tr>";
echo "<td width=\"24%\">" . $langmsg['home'][13] . "</td>\n";
echo "<td width=\"24%\"><div class=success>$numaccess</div></td>\n";
echo "<td><a href=\"?action=accesslogs\">" . $langmsg['home'][18] . "</a></td><td></td>";
echo "</tr>";            
echo "</table>\n</td></tr></table>";
$_SESSION['beenalerted'] = (empty($_SESSION['beenalerted'])) ? '' : $_SESSION['beenalerted'];
if($_SESSION['beenalerted'] == false){
	$_SESSION['beenalerted'] = true;
	$alertmsg = DataAccess::fetch("SELECT alertmsg FROM " . NEWS_USERS . " WHERE user = ?", $_SESSION['name']);
	$alertmsg = $alertmsg['0']['alertmsg'];
	if($alertmsg == "1"){
		$uid = $_SESSION['uid']; 
		$m = count(DataAccess::fetch("SELECT * FROM " . NEWS_PRIVATE . " WHERE sentto = ? AND viewed = ?", $uid, "1"));
		if($m > 0){
			echo "<script language=\"javascript\">";
			echo "if(confirm('You have $m unread message(s). Would you like to view them now?')){
			window.location = '?action=private&type=';
			}";
			echo "</script>";
		}
	} 
}  
?>