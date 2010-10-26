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
echo '<span class="header">' . $langmsg['personal'][0] . '</span>';
echo '</div>';



function showpersonal(){
	global $langmsg;

	$userdata		= DataAccess::fetch("SELECT * FROM " . NEWS_USERS . " WHERE user = ?", $_SESSION['name']);
	$all			= $userdata['0'];
	$email			= $all['email'];
	$name			= $_SESSION['name'];
	$alertmsg		= $all['alertmsg'];
	$enablewysiwyg	= $all['enablewysiwyg'];
	$defaultmodule	= $all['defaultmodule'];
	
	echo "<table width=\"100%\"><tr>";
	echo "<td><div class=subheaders>".$langmsg['personal'][1]."</div>";
	echo "<div class=\"subheaders_body displaytable\">";
	echo "<style>table { text-align: left; } </style>";
	echo "<form method=\"POST\" action=\"?action=options&mod=personaloptions\">\n";
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
	echo "<tr><td>" . $langmsg['personal'][14] . "</td><td>";
	echo "<select name=\"defaultmodule\">";
		$accesslevels_selected		= ($defaultmodule == "accesslevels") ? 'selected="selected"' : '';
		$accounts_selected			= ($defaultmodule == "accounts") ? 'selected="selected"' : '';
		$bannedips_selected			= ($defaultmodule == "bannedips") ? 'selected="selected"' : '';
		$newscats_selected			= ($defaultmodule == "newscats") ? 'selected="selected"' : '';
		$fileuploads_selected		= ($defaultmodule == "fileuploads") ? 'selected="selected"' : '';
		$imageuploads_selected		= ($defaultmodule == "imageuploads") ? 'selected="selected"' : '';
		$personaloptions_selected	= ($defaultmodule == "personaloptions") ? 'selected="selected"' : '';
		$profile_selected			= ($defaultmodule == "profile") ? 'selected="selected"' : '';
		$rss_selected				= ($defaultmodule == "rss") ? 'selected="selected"' : '';
		$smilies_selected			= ($defaultmodule == "smilies") ? 'selected="selected"' : '';
		$sysconfig_selected			= ($defaultmodule == "sysconfig") ? 'selected="selected"' : '';
		$templates_selected			= ($defaultmodule == "templates") ? 'selected="selected"' : '';
		$wordfilters_selected		= ($defaultmodule == "wordfilters") ? 'selected="selected"' : '';
		
		echo getaccess('accesslevels')		? '<option ' . $accesslevels_selected . ' value="accesslevels">' . $langmsg['menu'][7] . '</option>' : '';
		echo getaccess('accounts')			? '<option ' . $accounts_selected . ' value="accounts">' . $langmsg['menu'][6] . '</option>' : '';
		echo getaccess('bannedips') 		? '<option ' . $bannedips_selected . ' value="bannedips">' . $langmsg['menu'][8] . '</option>' : '';
		echo getaccess('newscats')			? '<option ' . $newscats_selected . ' value="newscats">' . $langmsg['menu'][9] . '</option>' : '';
		echo getaccess('fileuploads') 		? '<option ' . $fileuploads_selected . ' value="fileuploads">' . $langmsg['menu'][24] . '</option>' : '';
		echo getaccess('imageuploads') 		? '<option ' . $imageuploads_selected . ' value="imageuploads">' . $langmsg['menu'][10] . '</option>' : '';
		echo getaccess('personaloptions') 	? '<option ' . $personaloptions_selected . ' value="personaloptions">' . $langmsg['menu'][11] . '</option>' : '';
		echo getaccess('profile') 			? '<option ' . $profile_selected . ' value="profile">' . $langmsg['menu'][12] . '</option>' : '';
		echo getaccess('rss') 				? '<option ' . $rss_selected . ' value="rss">' . $langmsg['menu'][13] . '</option>' : '';
		echo getaccess('smilies')			? '<option ' . $smilies_selected . ' value="smilies">' . $langmsg['menu'][14] . '</option>' : '';
		echo getaccess('sysconfig')			? '<option ' . $sysconfig_selected . ' value="sysconfig">' . $langmsg['menu'][15] . '</option>' : '';
		echo getaccess('templates')			? '<option ' . $templates_selected . ' value="templates">' . $langmsg['menu'][16] . '</option>' : '';
		echo getaccess('wordfilters') 		? '<option ' . $wordfilters_selected . ' value="wordfilters">' . $langmsg['menu'][17] . '</option>' : '';
		
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
	showpersonal();
}elseif(!$_POST['T2']){
	echo "<div class=error>".$langmsg['personal'][10]."</div>";
	showpersonal();
}elseif($_POST['T3'] == $_POST['T4']){
	if($_POST['T3'] == ""){
		DataAccess::put("UPDATE " . NEWS_USERS . " SET defaultmodule = ?, alertmsg = ?, email = ?, enablewysiwyg = ? WHERE user = ?", $_POST['defaultmodule'], $_POST['alertmsg'], $_POST['T2'], $_POST['enablewysiwyg'], $_SESSION['name']);
	}else{
		$pass = md5(SALT . $_POST['T3']);
		DataAccess::put("UPDATE " . NEWS_USERS . " SET defaultmodule = ?, alertmsg = ?, newpass = ?, email = ?, enablewysiwyg = ? WHERE user = ?", $_POST['defaultmodule'], $_POST['alertmsg'], $pass, $_POST['T2'], $_POST['enablewysiwyg'], $_SESSION['name']);
	}
	echo "<div class=success>".$langmsg['personal'][11]."</div>";
	showpersonal();
}else{
	echo "<div class=error>".$langmsg['personal'][12]."</div>";
	showpersonal();
}
echo "</td></tr></table>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>