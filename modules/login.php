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

require_once(ABSPATH . '/language/' . $default_login_language . '.php');
$submitbuttonvalue = $langmsg['login'][6];
$loginerrormessage = $langmsg['login'][7];
$_SESSION['language'] = $default_login_language;
$la =  $langmsg['rss'][8];

echo "<span class=header>".$langmsg['login'][0]."</span></div>";
echo "<br><br>";
echo "            <form method=\"POST\" style=\"padding: 0px; margin: 0px\" action=\"\">\n";
echo "            <div style=\"margin-left: 160px\"><table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\">\n";
echo "              <tr>\n";
echo "                <td width=\"100\">".$langmsg['login'][1]." </td>\n";
echo "                <td width=\"\">\n";
echo "              <input type=\"text\" name=\"name\" value=\"Username\" tabindex=\"1\" style=\"color: #A6A6A6\" id=\"name\" ";
echo "onfocus=\"if(this.value=='Username'){this.style.color='#000000'; this.value='';}\" onblur=\"if(this.value==''){this.style.color='#A6A6A6'; this.value='Username';}\"";
echo "size=\"20\"> <a href=\"?action=recoverpass\">".$langmsg['login'][3]."</a><br>\n</td>\n";
echo "              </tr>\n";
echo "              <tr>\n";
echo "                <td width=\"100\" valign=\"top\">".$langmsg['login'][2]." </td>\n";
echo "                <td width=\"\">\n";
echo "              <input type=\"password\" style=\"color: #A6A6A6\" tabindex=\"2\" value=\"Password\" ";
echo "onfocus=\"if(this.value=='Password'){this.style.color='#000000'; this.value='';}\" onblur=\"if(this.value==''){this.style.color='#A6A6A6'; this.value='Password';}\""; 
echo "name=\"pass\" size=\"20\"> <input tabindex=\"3\" type=\"checkbox\" style=\"margin-left: 0px; margin-right: 0px; width: 15px\" name=\"rememberme\" id=\"rememberme\" /> <label for=\"rememberme\" style=\"vertical-align: text-top;\">".$langmsg['login'][4]."</label> ";
echo "              </td>";
if($image_verification == 1){
	echo "                <tr>";
	echo "                <td width=\"100\" valign=\"bottom\">".$langmsg['login'][5]." </td>\n";
	echo "                <td width=\"\" valign=\"bottom\">\n";
	echo "              <img src=\"image.php\" alt=\"If you can't see this image edit config.php change image_verification = 0;\">Type this code below</tr><tr><td></td><td><input type=\"text\" name=\"key\" size=\"20\"><br></td></tr>\n";
}

$i = 0;
$_SESSION['langtype'] = "dropdown";

$languages = '';
require_once(ABSPATH . '/language/config.php');
foreach($language_names AS $name=>$native){
	$languages .= "<option value=\"" . strtolower($name) . "\"";
	if(strtolower($name) == $default_login_language){
		$languages .= " selected=\"selected\"";	
	}
	$languages .= ">" . $name . " - " . $native . "</option>\n";
	$i++;
}

unset($_SESSION['langtype']);
#only show language dropdown if thre are more than 1 language files
if($i <= 1){
	echo "<tr style=\"display: none\">";	
}else{	
	echo "<tr>";	
}

echo "<td>$la</td><td>";
echo "\n<select tabindex=\"5\" name=\"n13language\" style=\"width: 150px\">";
echo $languages;
echo "</select>";
echo "</td></tr>";
echo "<tr><td></td><td>";
echo "<input type=\"submit\" name=\"B3\" style=\"width:150px;\" tabindex=\"5\" id=\"login\" value='" . $submitbuttonvalue . "'>";
$_POST['B3'] = (empty($_POST['B3'])) ? '' : $_POST['B3'];
if($_POST['B3']){
	echo "<br />";
	if($image_verification == "1"){
		if(md5(SALT . $_POST['key']) !== $_SESSION['image_random_value']){
			echo "<span class=\"error\">". $loginerrormessage . "</span>";			
		}
	}	
	echo "<span class=\"error\">".$_SESSION['loginerror']."</span>";
}
echo "</td>\n";
echo "</tr>\n";
echo "</table></div>\n";
echo "</form>\n";
?>