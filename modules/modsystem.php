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

echo "<span class=header>".$langmsg['system'][0]."</span></div><br />";
echo "<table width=\"685px\"><td width=\"17%\" align=center valign=top><img src=\"images/news_10.png\" alt=\"System Configuration\"></td><td>";
echo "<div class=panel>".$langmsg['system'][1]."</div><br />";

echo "<style>table { text-align: left; } </style>";

function systemsettingsform(){
	global $langmsg;
	$all = DataAccess::fetch("SELECT * FROM " . NEWS_OPTIONS . " WHERE 1");
	$all = $all['0'];
	$commentspop		= displayhtml($all['commentspop']);
	$nppage				= displayhtml($all['nppage']);
	$newsorder			= displayhtml($all['newsorder']);
	$newstime			= displayhtml($all['newstime']);
	$showavatars		= displayhtml($all['showavatars']);
	$commentsorder		= displayhtml($all['commentsorder']);
	$commentstime		= displayhtml($all['commentstime']);
	$commentslength		= displayhtml($all['commentslength']);
	$cppage				= displayhtml($all['cppage']);
	$spamtime			= displayhtml($all['spamtime']);
	$imagefiletypes		= displayhtml($all['imagefiletypes']);
	$timezone			= displayhtml($all['timezone']);
	$uploadpath			= displayhtml($all['uploadpath']);
	$catdelimiter		= displayhtml($all['catdelimiter']);
	$noaccessmsg		= displayhtml($all['noaccessmsg']);
	$spammsg			= displayhtml($all['spammsg']);
	$commentmsg			= displayhtml($all['commentmsg']);
	$commentapprovemsg	= displayhtml($all['commentapprovemsg']);
	$useimgverification	= displayhtml($all['useimgverification']);
	$regcomment			= displayhtml($all['regcomment']);
	$unapprovednotify	= displayhtml($all['unapprovednotify']);
	$uploadedfiletypes	= displayhtml($all['uploadedfiletypes']);
	$commentsnotify		= displayhtml($all['commentsnotify']);
	$registernotify		= displayhtml($all['registernotify']);
	$emailnotify		= displayhtml($all['emailnotify']);
	$registrationallow	= displayhtml($all['registrationallow']);
	$registrationaccess	= displayhtml($all['registrationaccess']);
	$furlextension		= displayhtml($all['furlextension']);	
	$furlprefix			= displayhtml($all['furlprefix']);
	$furldirname		= displayhtml($all['furldirname']);
	$furlenabled		= displayhtml($all['furlenabled']);
	$publickey			= displayhtml($all['publickey']);
	$privatekey			= displayhtml($all['privatekey']);
	$scriptpath			= displayhtml($all['scriptpath']);
	$deleteowncomments	= displayhtml($all['deleteowncomments']);
	$loginverification	= displayhtml($all['loginverification']);
	$filetime			= displayhtml($all['filetime']);
	$enabletail			= displayhtml($all['enabletail']);
	$registrationverification = displayhtml($all['registrationverification']);
	
	
	echo "<form method=\"POST\" action=\"\">\n";
	echo "<div align=\"right\">\n";
	echo "<table border=\"0\" cellpadding=\"1\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\">\n";

	// comments

	echo "<tr><td><span class=\"header\">".$langmsg['system'][11]."</span></td></tr>";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][41]."</td>\n";
	echo "    <td>";
	echo "<select name=\"regcomment\">";
	echo "<option value=\"1\" "; if($regcomment == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
	echo "<option value=\"0\" "; if($regcomment == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
	echo "</select>";
	echo "</td>\n";
	echo "  </tr>\n";
	
	echo "<tr>";
		echo "<td>" . $langmsg['system'][48] . "</td>";
		echo "<td>";
			echo "<select name=\"deleteowncomments\">";
				echo "<option value=\"1\" "; if($deleteowncomments == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
				echo" <option value=\"0\" "; if($deleteowncomments == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
			echo "</select>";
		echo"</td>";
	echo "</tr>";
	
	echo "  <tr class=\"row1\">\n";       
	echo "    <td>".$langmsg['system'][12]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T5\" style=\"width: 140px\" value=\"$cppage\"></td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][13]."</td>\n";
	echo "    <td><select size=\"1\" name=\"D3\">\n";
	if($commentsorder == "DESC"){
		echo "    <option value=\"DESC\">".$langmsg['system'][5]."</option>\n";
		echo "    <option value=\"ASC\">".$langmsg['system'][6]."</option>\n";
	}else{
		echo "    <option value=\"ASC\">".$langmsg['system'][5]."</option>\n";
		echo "    <option value=\"ASC\">".$langmsg['system'][6]."</option>\n";
	}
	echo "    </select></td>\n";
	echo "  </tr>\n";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][14]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T3\" size=\"12\" value=\"$commentstime\"> <a href=\"http://uk3.php.net/strftime\" target=\"_NEW\">Date()</a></td>\n";
	echo "  </tr>\n";	   
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][15]."</td>\n";
	echo "    <td><input type=\"text\" style=\"width: 140px\" name=\"T4\" value=\"$commentslength\"></td>\n";
	echo "  </tr>\n";

	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][16]."</td>\n";
	echo "    <td>";
	echo "<select name=\"D4\">";
	echo "<option value=\"1\" "; if($commentspop == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
	echo "<option value=\"0\" "; if($commentspop == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
	echo "</select>";
	echo "</td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][17]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T6\" style=\"width: 140px\" value=\"$spamtime\"> ".$langmsg['system'][18]."</td>\n";
	echo "  </tr>\n";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][19]."</td>\n";
	echo "    <td><input type=\"text\" name=\"spammsg\" style=\"width: 140px\" value=\"$spammsg\"></td>\n";
	echo "  </tr>\n";

	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][20]."</td>\n";
	echo "    <td><input type=\"text\" name=\"commentmsg\" style=\"width: 140px\" value=\"$commentmsg\"></td>\n";
	echo "  </tr>\n";  	   

	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][21]."</td>\n";
	echo "    <td><input type=\"text\" name=\"commentapprovemsg\" style=\"width: 140px\" value=\"$commentapprovemsg\"></td>\n";
	echo "  </tr>\n";  	   
	echo "<tr><td>".$langmsg['system'][22]."</td><td>";
	echo "<select name=\"useimgverification\">";
		echo "<option "; if($useimgverification == "0"){ echo "selected=\"selected\""; } echo "value=\"0\">" . $langmsg['selectfield'][2] . "</option>";
		echo "<option "; if($useimgverification == "1"){ echo "selected=\"selected\""; } echo "value=\"1\">" . $langmsg['selectfield'][1] . "</option>";
		echo "<option "; if($useimgverification == "2"){ echo "selected=\"selected\""; } echo "value=\"2\">reCAPTCHA</option>";
	echo "</select>";
	echo " <a href=\"http://network-13.com/thread/17b52a97b5d713df\">(?)</a>";
	echo "</td></tr>";	


	// friendly urls
	echo "<tr><td><span class=\"header\">".$langmsg['system'][23]."</td><td></td></tR>";
	echo "<tr class=\"row1\"><td>".$langmsg['system'][24]."</td><td><select name=\"furlenabled\"><option ";
	if($furlenabled == "1"){ echo " selected=\"selected\" "; }
	echo "value=\"1\">".$langmsg['selectfield'][1]."</option><option ";
	if($furlenabled == "0"){ echo " selected=\"selected\" "; }
	echo "value=\"0\">".$langmsg['selectfield'][2]."</option></select></td></tr>";
	echo "<tr><td>".$langmsg['system'][25]."</td><td><input type=\"text\" style=\"width: 140px\" name=\"furlextension\" value=\"$furlextension\" size=\"12\" /></td></tr>";
	echo "<tr class=\"row1\"><td>".$langmsg['system'][26]."</td><td><input type=\"text\" style=\"width: 140px\" name=\"furlprefix\" value=\"$furlprefix\" size=\"12\" /></td></tr>";
	echo "<tr><td>".$langmsg['system'][27]."</td><td><input type=\"text\" style=\"width: 140px\" name=\"furldirname\" value=\"$furldirname\" size=\"12\" /></td></tr>";		

	echo "<tr><td><span class=\"header\">".$langmsg['system'][2]."</span></td></tr>";
	echo "  <tr class=\"row1\">\n";
	echo "    <td width=\"60%\">".$langmsg['system'][3]."</td>\n";
	echo "    <td width=\"40%\"><input type=\"text\" name=\"T1\" style=\"width: 140px\"  value=\"$nppage\"></td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][4]."</td>\n";
	echo "    <td><select size=\"1\" name=\"D1\">\n";
	if($newsorder == "DESC"){
		echo "    <option value=\"DESC\">".$langmsg['system'][5]."</option>\n";
		echo "    <option value=\"ASC\">".$langmsg['system'][6]."</option>\n";
	}else{
		echo "    <option value=\"ASC\">".$langmsg['system'][6]."</option>\n";
		echo "    <option value=\"DESC\">".$langmsg['system'][5]."</option>\n";
	}
	echo "    </select></td>\n";
	echo "  </tr>\n";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][7]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T2\" style=\"width: 140px\" value=\"$newstime\"> <a href=\"http://uk3.php.net/strftime\" target=\"_NEW\">Date()</a></td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][9]."</td>\n";
	echo "    <td><select size=\"1\" name=\"D2\">\n";
		echo "<option "; if($showavatars == "0"){ echo "selected=\"selected\""; } echo "value=\"0\">" . $langmsg['selectfield']['2'] . "</option>";
		echo "<option "; if($showavatars == "1"){ echo "selected=\"selected\""; } echo "value=\"1\">" . $langmsg['selectfield']['1'] . "</option>";
	echo "    </select></td>\n";
	echo "  </tr>\n";
	echo "<tr class=\"row1\"><td>".$langmsg['system'][10]."</td><td>";
	echo "<input type=\"text\" name=\"catdelimiter\" style=\"width: 140px\"  value=\"$catdelimiter\" />";
	echo "</td></tr>";

	// notifications
	echo "<tr><td><span class=\"header\">".$langmsg['system'][38]."</span></td></tr>";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][39]."</td>\n";
	echo "    <td>";
	echo "<select name=\"commentsnotify\">";
	echo "<option value=\"1\" "; if($commentsnotify == "1"){ echo "selected=\"selected\""; } echo ">Yes</option>";
	echo "<option value=\"0\" "; if($commentsnotify == "0"){ echo "selected=\"selected\""; } echo ">No</option>";
	echo "</select>";
	echo "</td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][40]."</td>\n";
	echo "    <td>";
	echo "<select name=\"registernotify\">";
	echo "<option value=\"1\" "; if($registernotify == "1"){ echo "selected=\"selected\""; } echo ">Yes</option>";
	echo "<option value=\"0\" "; if($registernotify == "0"){ echo "selected=\"selected\""; } echo ">No</option>";
	echo "</select>";
	echo "</td>\n";
	echo "  </tr>\n";	
		echo "  <tr class=\"row1\">\n";
	echo "    <td>".$langmsg['system'][44]."</td>\n";
	echo "    <td>";
	echo "<select name=\"unapprovednotify\">";
	echo "<option value=\"1\" "; if($unapprovednotify == "1"){ echo "selected=\"selected\""; } echo ">Yes</option>";
	echo "<option value=\"0\" "; if($unapprovednotify == "0"){ echo "selected=\"selected\""; } echo ">No</option>";
	echo "</select>";
	echo "</td>\n";
	echo "  </tr>\n";	
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][42]."</td>\n";
	echo "    <td>";
	echo "<input type=\"text\" name=\"emailnotify\" style=\"width: 140px\" value=\"$emailnotify\" />";
	echo "</td>\n";
	
	// recaptcha
	echo "<tr><td><span class=\"header\">reCAPTCHA</span></td></tr>";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>" . $langmsg['system'][45] . "</td>\n";
	echo "    <td>";
	echo "<input type=\"text\" name=\"publickey\" style=\"width: 140px\" value=\"$publickey\" />";
	echo "</td>\n";
	echo "  </tr>\n";	
	echo "  <tr>\n";
	echo "    <td>" . $langmsg['system'][46] . "</td>\n";
	echo "    <td>";
	echo "<input type=\"text\" name=\"privatekey\" style=\"width: 140px\" value=\"$privatekey\" />";
	echo "</td>\n";
	echo "  </tr>\n";			

	// registration
	echo "<tr><td><span class=\"header\">".$langmsg['system'][28]."</span></td></tr>";

	echo "<tr><td class=\"row1\">".$langmsg['system'][29]."</td><td class=\"row1\">";
	echo "<select name=\"registrationallow\">";
	if($registrationallow == "0"){
		echo "<option value=\"0\">".$langmsg['selectfield'][2]."</option>";
		echo "<option value=\"1\">".$langmsg['selectfield'][1]."</option>";    	
	}else{
		echo "<option value=\"1\">".$langmsg['selectfield'][1]."</option>";
		echo "<option value=\"0\">".$langmsg['selectfield'][2]."</option>";   		
	}
	echo "</select>";
	echo "</td></tr>";
	echo "<tr><td>".$langmsg['system'][30]."</td><td>";
	echo "<select name=\"registrationaccess\">";
	$allaccess = DataAccess::fetch("SELECT * FROM " . NEWS_ACCESS);
	foreach($allaccess AS $row){
		echo "<option value=\"" . $row['uid'] . "\"";
		if($registrationaccess == $row['uid']){
			echo "selected=\"selected\"";
		}
		echo ">" . $row['name'] . "</option>";
	}
	echo "</select>";
	echo "</td></tr>";
  
	echo "<tr class=\"row1\"><td>" . $langmsg['system'][50] . "</td><td>";
	echo "<select name=\"registrationverification\">";
		echo "<option "; if($registrationverification == "0"){ echo "selected=\"selected\""; } echo "value=\"0\">" . $langmsg['selectfield'][2] . "</option>";
		echo "<option "; if($registrationverification == "1"){ echo "selected=\"selected\""; } echo "value=\"1\">" . $langmsg['selectfield'][1] . "</option>";
		echo "<option "; if($registrationverification == "2"){ echo "selected=\"selected\""; } echo "value=\"2\">reCAPTCHA</option>";
	echo "</select>";
	echo " <a href=\"http://network-13.com/thread/17b52a97b5d713df\">(?)</a>";
	echo "</td></tr>";		
	
	

	// login
	echo "<tr><td><span class=\"header\">Login</span></td></tr>";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>" . $langmsg['system'][49] . "</td>\n";
	echo "    <td>";
	echo "<select name=\"loginverification\">";
	echo "<option "; if($loginverification == "0"){ echo "selected=\"selected\""; } echo "value=\"0\">" . $langmsg['selectfield'][2] . "</option>";
	echo "<option "; if($loginverification == "1"){ echo "selected=\"selected\""; } echo "value=\"1\">" . $langmsg['selectfield'][1] . "</option>";
	echo "<option "; if($loginverification == "2"){ echo "selected=\"selected\""; } echo "value=\"2\">reCAPTCHA</option>";
	echo "</select>";	
	echo "</td>\n";
	echo "  </tr>\n";	
	

	
	
	// other
	echo "<tr><td><span class=\"header\">".$langmsg['system'][31]."</span></td></tr>";
	echo "  <tr>\n";
	echo "    <td class=\"row1\">".$langmsg['system'][32]."</td>\n";
	echo "    <td class=\"row1\"><input type=\"text\" name=\"T8\" style=\"width: 140px\"  value=\"$timezone\"> <a href=\"http://php.net/time\" target=\"_NEW\">Time()</a></td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][33]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T7\" style=\"width: 140px\" value=\"$imagefiletypes\"></td>\n";
	echo "  </tr>\n";
    echo "  <tr class=\"row1\">\n";
    echo "    <td>".$langmsg['system'][43]."</td>\n";
    echo "    <td><input type=\"text\" name=\"uploadedfiletypes\" style=\"width: 140px\" value=\"$uploadedfiletypes\"></td>\n";
    echo "  </tr>\n";	
	echo "  <tr>\n";
    echo "  <tr>\n";
    echo "    <td>".$langmsg['system'][51]."</td>\n";
    echo "    <td><input type=\"text\" name=\"filetime\" style=\"width: 140px\" value=\"$filetime\"></td>\n";
    echo "  </tr>\n";	
	echo "  <tr class=\"row1\">\n";	
	echo "    <td>".$langmsg['system'][34]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T9\" style=\"width: 140px\" value=\"$uploadpath\"></td>\n";
	echo "  </tr>\n";
	echo "  </tr>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "    <td>".$langmsg['system'][35]."</td>\n";
	echo "    <td><input type=\"text\" name=\"T10\" style=\"width: 140px\" value=\"$noaccessmsg\"></td>\n";
	echo "  </tr>\n";
	echo "  <tr>\n";
	echo "  <tr class=\"row1\">\n";
	echo "    <td>" . $langmsg['system'][47] . "</td>\n";
	echo "    <td><input type=\"text\" name=\"scriptpath\" style=\"width: 140px\" value=\"$scriptpath\"></td>\n";
	echo "  </tr>\n";       
	echo "  <tr>\n";	
	echo "  <tr>\n";
	echo "    <td>" . $langmsg['system'][52] . "</td>\n";
	echo "    <td>";
	echo "<select name=\"enabletail\">";
		echo "<option "; if($enabletail == "1"){ echo "selected=\"selected\""; } echo "value=\"1\">" . $langmsg['selectfield'][1] . "</option>";	
		echo "<option "; if($enabletail == "0"){ echo "selected=\"selected\""; } echo "value=\"0\">" . $langmsg['selectfield'][2] . "</option>";
	echo "</select>";	
	echo "</td>\n";
	echo "  </tr>\n";       
	echo "  <tr>\n";		
	echo "    <td>&nbsp;</td>\n";
	echo "    <td><input type=\"submit\" value=\"".$langmsg['submitfield'][3]."\" class=\"nostyle\" name=\"B1\"></td>\n";
	echo "  </tr>\n";
	echo "</table>\n";
	echo "</div>\n";
	echo "</form>\n";
	echo "</td></tr></table>";
}

$_POST['B1'] = (empty($_POST['B1'])) ? '' : $_POST['B1'];
if(!$_POST['B1']){
	systemsettingsform();
}else{
	$nppage				= (empty($_POST['T1'])) ? '' : $_POST['T1'];
	$newsorder			= (empty($_POST['D1'])) ? '' : $_POST['D1'];
	$newstime			= (empty($_POST['T2'])) ? '' : $_POST['T2'];
	$showavatars		= (empty($_POST['D2'])) ? '0' : $_POST['D2'];
	$commentsorder		= (empty($_POST['D3'])) ? '' : $_POST['D3'];
	$commentstime		= (empty($_POST['T3'])) ? '' : $_POST['T3'];
	$commentspop		= (empty($_POST['D4'])) ? '0' : $_POST['D4'];
	$cppage				= (empty($_POST['T5'])) ? '1' : $_POST['T5'];
	$spamtime			= (empty($_POST['T6'])) ? '' : $_POST['T6'];
	$imagefiletypes		= (empty($_POST['T7'])) ? '' : $_POST['T7'];
	$timezone			= (empty($_POST['T8'])) ? '' : $_POST['T8'];
	$uploadpath			= (empty($_POST['T9'])) ? '' : $_POST['T9'];
	$noaccessmsg		= (empty($_POST['T10'])) ? '' : $_POST['T10'];
	$spammsg			= (empty($_POST['spammsg'])) ? '' : $_POST['spammsg'];
	$commentmsg			= (empty($_POST['commentmsg'])) ? '' : $_POST['commentmsg'];
	$commentapprovemsg	= (empty($_POST['commentapprovemsg'])) ? '' : $_POST['commentapprovemsg'];
	$furlextension		= (empty($_POST['furlextension'])) ? '' : $_POST['furlextension'];
	$furlenabled		= (empty($_POST['furlenabled'])) ? '0' : $_POST['furlenabled'];
	$furldirname		= (empty($_POST['furldirname'])) ? '' : $_POST['furldirname'];
	$furlprefix			= (empty($_POST['furlprefix'])) ? '' : $_POST['furlprefix'];
	$catdelimiter		= (empty($_POST['catdelimiter'])) ? '' : $_POST['catdelimiter'];
	$useimgverification	= (empty($_POST['useimgverification'])) ? '0' : $_POST['useimgverification'];
	$registrationallow	= (empty($_POST['registrationallow'])) ? '0' : $_POST['registrationallow'];
	$registrationaccess	= (empty($_POST['registrationaccess'])) ? '' : $_POST['registrationaccess'];
	$regcomment			= (empty($_POST['regcomment'])) ? '0' : $_POST['regcomment'];
	$commentsnotify		= (empty($_POST['commentsnotify'])) ? '0' : $_POST['commentsnotify'];
	$registernotify		= (empty($_POST['registernotify'])) ? '0' : $_POST['registernotify'];
	$emailnotify		= (empty($_POST['emailnotify'])) ? '' : $_POST['emailnotify'];
	$unapprovednotify	= (empty($_POST['unapprovednotify'])) ? '0' : $_POST['unapprovednotify'];
	$uploadedfiletypes	= (empty($_POST['uploadedfiletypes'])) ? '' : $_POST['uploadedfiletypes'];
	$scriptpath			= (empty($_POST['scriptpath'])) ? '' : $_POST['scriptpath'];
	$publickey			= (empty($_POST['publickey'])) ? '' : $_POST['publickey'];
	$privatekey			= (empty($_POST['privatekey'])) ? '' : $_POST['privatekey'];
	$deleteowncomments	= (empty($_POST['deleteowncomments'])) ? '0' : $_POST['deleteowncomments'];
	$loginverification	= (empty($_POST['loginverification'])) ? '' : $_POST['loginverification'];
	$filetime			= (empty($_POST['filetime'])) ? '' : $_POST['filetime'];
	$commentslength		= (empty($_POST['T4'])) ? '0' : $_POST['T4'];
	$enabletail			= (empty($_POST['enabletail'])) ? '0' : $_POST['enabletail'];
	$registrationverification = (empty($_POST['registrationverification'])) ? '' : $_POST['registrationverification'];

	if($nppage == "0"){ $nppage = "1";}
	
	$oldoptions = DataAccess::fetch("SELECT * FROM " . NEWS_OPTIONS . " WHERE 1");
	$oldoptions = $oldoptions['0'];	
	
	// values that need to be integars
	if(is_numeric($furlenabled)){		}else{ $furlenabled = $oldoptions['furlenabled']; }
	if(is_numeric($deleteowncomments)){	}else{ $deleteowncomments = $oldoptions['deleteowncomments']; }
	if(is_numeric($showavatars)){		}else{ $showavatars = $oldoptions['showavatars']; }
	if(is_numeric($commentspop)){		}else{ $commentspop = $oldoptions['commentspop']; }
	if(is_numeric($spamtime)){			}else{ $spamtime = $oldoptions['spamtime']; }
	if(is_numeric($commentslength)){	}else{ $commentslength = $oldoptions['commentslength']; }
	if(is_numeric($cppage)){			}else{ $cppage = $oldoptions['cppage']; }
	if(is_numeric($nppage)){			}else{ $nppage = $oldoptions['nppage']; }
	if(is_numeric($regcomment)){		}else{ $regcomment = $oldoptions['regcomment']; }
	if(is_numeric($commentsnotify)){	}else{ $commentsnotify = $oldoptions['commentsnotify']; }
	if(is_numeric($registernotify)){	}else{ $registernotify = $oldoptions['registernotify']; }
	if(is_numeric($unapprovednotify)){	}else{ $unapprovednotify = $oldoptions['unapprovednotify']; }
	if(is_numeric($enabletail)){		}else{ $enabletail = $oldoptions['enabletail']; }
	
	if($cppage == "0"){ $cppage = "1";}
	$sql = "UPDATE " . NEWS_OPTIONS . " SET 
	nppage = ?,
	newsorder = ?,
	newstime = ?,
	showavatars = ?,
	commentsorder = ?,
	commentstime = ?,
	commentslength = ?,
	cppage = ?,
	commentspop = ?,
	spamtime = ?,
	imagefiletypes = ?,
	timezone = ?,
	uploadpath = ?,
	noaccessmsg = ?,
	spammsg = ?,
	commentmsg = ?,
	commentapprovemsg = ?,
	furlenabled = ?,
	furlprefix = ?,
	furldirname = ?,
	furlextension = ?,
	catdelimiter = ?,
	useimgverification = ?,
	registrationaccess = ?,
	registrationallow = ?,
	regcomment = ?,
	commentsnotify = ?,
	registernotify = ?,
	emailnotify = ?,
	unapprovednotify = ?,
	uploadedfiletypes = ?,
	publickey = ?,
	privatekey = ?,
	scriptpath = ?,
	deleteowncomments = ?,
	loginverification = ?,
	registrationverification = ?,
	filetime = ?,
	enabletail = ?
	WHERE 1";
	
	DataAccess::put($sql, $nppage, $newsorder, $newstime, $showavatars, $commentsorder, $commentstime, $commentslength, $cppage, $commentspop, $spamtime, $imagefiletypes, $timezone, $uploadpath, $noaccessmsg, $spammsg, $commentmsg, $commentapprovemsg, $furlenabled, $furlprefix, $furldirname, $furlextension, $catdelimiter, $useimgverification, $registrationaccess, $registrationallow, $regcomment, $commentsnotify, $registernotify, $emailnotify, $unapprovednotify, $uploadedfiletypes, $publickey, $privatekey, $scriptpath, $deleteowncomments, $loginverification, $registrationverification, $filetime, $enabletail);
	echo "</tr><tr><td></td><td><div class=success>".$langmsg['system'][36]."</div><br />";
	systemsettingsform();	
	echo "</td></tr></table>";
}
?>