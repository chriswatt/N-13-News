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


$userdata		= DataAccess::fetch("SELECT * FROM " . NEWS_USERS . " WHERE user = ?", $_SESSION['name']);
$all			= $userdata['0'];
$email			= $all['email'];
$name			= $_SESSION['name'];
$alertmsg		= $all['alertmsg'];
$enablewysiwyg	= $all['enablewysiwyg'];

function showpersonal($name,$email,$alertmsg,$enablewysiwyg){
	global $langmsg;

	echo "<table width=\"100%\"><tr>";
	echo "<td><div class=subheaders>".$langmsg['personal'][1]."</div>";
	echo "<div class=\"subheaders_body displaytable\">";
	echo "<style>table { text-align: left; } </style>";
	echo "<form method=\"POST\" action=\"?action=options&mod=personal\">\n";
	echo "<div align=\"right\"><table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\">\n";
	echo "    <tr>\n";
	echo "      <td width=\"24%\">".$langmsg['personal'][2]."</td>\n";
	echo "      <td width=\"76%\"><div class=ok>$name</div></td>\n";
	echo "    </tr>\n";
	echo "      <td width=\"24%\">".$langmsg['personal'][4]."</td>\n";
	echo "      <td width=\"76%\"><input type=\"text\" name=\"T2\" size=\"25\" value=\"$email\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"24%\">".$langmsg['personal'][7]."</td>\n";
	echo "      <td width=\"76%\"><input type=\"password\" name=\"T3\" size=\"25\"> ".$langmsg['personal'][8]."</td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"24%\">".$langmsg['personal'][9]."</td>\n";
	echo "      <td width=\"76%\"><input type=\"password\" name=\"T4\" size=\"25\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "<tr><td>".$langmsg['personal'][5]."</td>";
	echo "<td><select name=\"alertmsg\">";
	echo "<option value=\"1\""; if($alertmsg == '1'){ echo " selected=selected"; } echo">".$langmsg['selectfield'][1]."</option>";
	echo "<option value=\"0\""; if($alertmsg == '0'){ echo " selected=selected"; } echo ">".$langmsg['selectfield'][2]."</option>";		
	echo "</select> ".$langmsg['personal'][6]."</td></tr>";
	echo "<tr>";
	echo "<td>" . $langmsg['personal'][13] . "</td><td>";
	echo "<select name=\"enablewysiwyg\">";
		echo "<option value=\"1\""; if($enablewysiwyg == '1'){ echo " selected=selected"; } echo">" . $langmsg['selectfield'][1] . "</option>";
		echo "<option value=\"0\""; if($enablewysiwyg == '0'){ echo " selected=selected"; } echo">" . $langmsg['selectfield'][2] . "</option>";
	echo "</select>";
	echo "</td></tr>";
	echo "</tr>";
	echo "      <td width=\"24%\">&nbsp;</td>\n";
	echo "      <td width=\"76%\"><input type=\"submit\" class=\"nostyle\" value=\"".$langmsg['submitfield'][3]."\" name=\"B1\"></td>\n";
	echo "    </tr>\n";
	echo "  </table>\n";
	echo "</div>\n";
	echo "</div>\n";
	echo "</form></td></tr></table>\n";
}
$_POST['B1'] = (empty($_POST['B1'])) ? '' : $_POST['B1'];
if($_POST['B1'] == ""){
	showpersonal($name,$email,$alertmsg,$enablewysiwyg);
}elseif(!$_POST['T2']){
	echo "<div class=error>".$langmsg['personal'][10]."</div>";
	showpersonal($name,$email,$alertmsg,$enablewysiwyg);
}elseif($_POST['T3'] == $_POST['T4']){
	if($_POST['T3'] == ""){
		DataAccess::put("UPDATE " . NEWS_USERS . " SET alertmsg = ?, email = ?, enablewysiwyg = ? WHERE user = ?", $_POST['alertmsg'], $_POST['T2'], $_POST['enablewysiwyg'], $_SESSION['name']);
	}else{
		$pass = md5(SALT . $_POST['T3']);
		DataAccess::put("UPDATE " . NEWS_USERS . " SET alertmsg = ?, newpass = ?, email = ?, enablewysiwyg = ? WHERE user = ?", $_POST['alertmsg'], $pass, $_POST['T2'], $_POST['enablewysiwyg'], $_SESSION['name']);                
	}
	echo "<div class=success>".$langmsg['personal'][11]."</div>";
	showpersonal($name, $email, $alertmsg,$enablewysiwyg);
}else{
	echo "<div class=error>".$langmsg['personal'][12]."</div>";
	showpersonal($name,$email,$alertmsg,$enablewysiwyg);
}
echo "</td></tr></table>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>