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

function accountform(){
	global $langmsg;
	if($_GET['create'] == "new"){
		if($_POST['S1']){
			$accountname		= displayhtml($_POST['accountname']);
			$accountemail		= displayhtml($_POST['accountemail']);
			$accountpassword1	= $_POST['accountpassword1'];
			$accountpassword2	= $_POST['accountpassword2'];
			$accountaccesslevel	= $_POST['accountaccesslevel'];
		}else{
			$accountname	= '';
			$accountemail	= '';
			$accountaccesslevel = 1;
		}
	}elseif($_GET['create'] == "edit"){
		if(!$_POST['S1']){
			$accountuid		= $_GET['uid'];
            $accountdata	= DataAccess::fetch("SELECT user, access, email FROM " . NEWS_USERS . " WHERE uid = ?", $accountuid);
			if(count($accountdata) < 1){
				echo "<script language=\"javascript\">window.location='?action=options&mod=accounts';</script>";
			}else{
				$accountname			= displayhtml($accountdata['0']['user']);
				$accountaccesslevel		= $accountdata['0']['access'];
				$accountemail			= $accountdata['0']['email'];
				$_SESSION['origemail']	= $accountemail;	
			}
		}else{
			$accountuid			= $_GET['uid'];
            $accountname		= DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $accountuid);
            $accountname		= $accountname['0']['user'];
			$accountemail		= displayhtml($_POST['accountemail']);
			$accountpassword1	= $_POST['accountpassword1'];
			$accountpassword2	= $_POST['accountpassword2'];
			$accountaccesslevel	= $_POST['accountaccesslevel'];
		}
	}	
	
	echo "<div class=\"subheaders\">".$langmsg['accounts'][13]."</div>";
	echo "<div class=\"subheaders_body displaytable\">";
	echo "<form method=\"POST\" action=\"\">\n";
	echo "    <table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\">\n";
	echo "    <tr>\n";
	echo "      <td width=\"28%\">".$langmsg['accounts'][7]."</td>\n";	
	echo "      <td width=\"72%\">";
		if($_GET['create'] == "new"){
			echo "<input type=\"text\" name=\"accountname\" value=\"$accountname\" size=\"24\" />";
		}else{
			echo "<div class=\"\">$accountname</div>";
		}
	echo "</td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"28%\">".$langmsg['accounts'][8]."</td>\n";
	echo "      <td width=\"72%\"><input type=\"text\" name=\"accountemail\" size=\"24\" value=\"$accountemail\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"28%\">".$langmsg['accounts'][9]."</td>\n";
	echo "      <td width=\"74%\"><input type=\"password\" name=\"accountpassword1\" size=\"24\"> ".$langmsg['accounts'][23]."</td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"28%\">".$langmsg['accounts'][10]."</td>\n";
	echo "      <td width=\"72%\"><input type=\"password\" name=\"accountpassword2\" size=\"24\"></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"28%\">".$langmsg['accounts'][11]."</td>\n";
	echo "      <td width=\"72%\"><select size=\"1\" name=\"accountaccesslevel\">\n";
    $uidname = DataAccess::fetch("SELECT uid, name FROM " . NEWS_ACCESS);
    foreach($uidname AS $row){
		echo "<option ";
		if($accountaccesslevel == $row['uid']){
			echo "selected=\"selected\" ";
		}
		echo "value=\"" . $row['uid'] . "\">" . displayhtml($row['name']) . "</option>\n";
	}
	echo "      </select></td>\n";
	echo "    </tr>\n";
	echo "    <tr>\n";
	echo "      <td width=\"28%\">&nbsp;</td>\n";
	echo "      <td width=\"72%\"><input type=\"submit\" value=\"".$langmsg['submitfield'][3]."\" class=\"nostyle\" name=\"S1\"></td>\n";
	echo "    </tr>\n";
	echo "  </table>\n";
	echo "</div>";
	echo "</form>\n";
}
$_GET['create'] = (empty($_GET['create'])) ? '' : $_GET['create'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
if($_GET['create'] == "new"){
	if(!$_POST['S1']){
		accountform();
	}elseif($_POST['accountemail'] == ""){
		echo "<div class=error>".$langmsg['accounts'][14]."</div>";
		accountform();
	}elseif(!$_POST['accountname']){
		echo "<div class=error>".$langmsg['accounts'][25]."</div>";
		accountform();
	}elseif(!$_POST['accountpassword1'] || !$_POST['accountpassword2']){
		echo "<div class=error>".$langmsg['accounts'][19]."</div>";
		accountform();
	}elseif(count(DataAccess::fetch("SELECT uid FROM " . NEWS_USERS . " WHERE user = ?", $_POST['accountname'])) > 0){
		echo "<div class=error>".$langmsg['accounts'][18]."</div>";
		accountform();
	}elseif(count(DataAccess::fetch("SELECT uid FROM " . NEWS_USERS . " WHERE email = ?", $_POST['accountemail'])) > 0){
		echo "<div class=error>".$langmsg['accounts'][24]."</div>";
		accountform();
	}elseif($_POST['accountpassword1'] == $_POST['accountpassword2']){
		$accountname		= $_POST['accountname'];
		$accountemail		= $_POST['accountemail'];
		$accountpassword	= md5(SALT . $_POST['accountpassword1']);
		$accountaccesslevel	= $_POST['accountaccesslevel'];
		DataAccess::put("INSERT INTO " . NEWS_USERS . " (user, newpass, email, access) VALUES (?, ?, ?, ?)", $accountname, $accountpassword, $accountemail, $accountaccesslevel);
		echo "<div class=\"success\">".$langmsg['accounts'][20]."</div>";	
	}else{
		echo "<div class=error>".$langmsg['accounts'][16]."</div>";
		accountform();	
	}
}elseif($_GET['create'] == "edit"){
	if(!$_POST['S1']){
		accountform();
	}elseif($_POST['accountemail'] == ""){
		echo "<div class=error>".$langmsg['accounts'][14]."</div>";
		accountform();	
	}elseif(!$_POST['accountpassword1'] && !$_POST['accountpassword2']){
		if($_SESSION['origemail'] == $_POST['accountemail']){
			//pass email are the same update access
			$accountaccesslevel = $_POST['accountaccesslevel'];
			$accountuid = $_GET['uid'];
            DataAccess::put("UPDATE " . NEWS_USERS . " SET access = ? WHERE uid = ?", $accountaccesslevel, $accountuid);
			echo "<div class=\"success\">".$langmsg['accounts'][15]."</div>";
			unset($_SESSION['origemail']);
		}else{
            if(count(DataAccess::fetch("SELECT uid FROM " . NEWS_USERS . " WHERE email = ?", $_POST['accountemail'])) > 0){
				echo "<div class=error>".$langmsg['accounts'][24]."</div>";
				accountform();
			}else{
				$accountaccesslevel = $_POST['accountaccesslevel'];
				$accountuid = $_GET['uid'];
                DataAccess::put("UPDATE " . NEWS_USERS . " SET access = ? WHERE uid = ?", $accountaccesslevel, $accountuid);
				echo "<div class=\"success\">".$langmsg['accounts'][15]."</div>";
				unset($_SESSION['origemail']);
			}			
		}
	}else{
		if($_POST['accountpassword1'] == $_POST['accountpassword2']){
			if($_SESSION['origemail'] == $_POST['accountemail']){
				$accountpassword	= md5(SALT . $_POST['accountpassword1']);
				$accountemail		= $_POST['accountemail'];
				$accountuid			= $_GET['uid'];
                DataAccess::put("UPDATE " . NEWS_USERS . " SET newpass = ? WHERE uid = ?", $accountpassword, $accountuid);
				echo "<div class=\"success\">".$langmsg['accounts'][15]."</div>";
				unset($_SESSION['origemail']);
			}else{
                if(count(DataAccess::fetch("SELECT uid FROM " . NEWS_USERS . " WHERE email = ?", $_POST['accountemail'])) > 0){				    
					echo "<div class=error>".$langmsg['accounts'][24]."</div>";
					accountform();
				}else{
					$accountpassword = md5(SALT . $_POST['accountpassword1']);
					$accountaccesslevel = $_POST['accountaccesslevel'];
					$accountuid = $_GET['uid'];
                    DataAccess::put("UPDATE " . NEWS_USERS . " SET newpass = ?, access = ? WHERE uid = ?", $accountpassword, $accountaccesslevel, $accountuid);
					echo "<div class=\"success\">".$langmsg['accounts'][15]."</div>";
					unset($_SESSION['origemail']);
				}	
			}
		}else{
			echo "<div class=error>".$langmsg['accounts'][16]."</div>";
			accountform();
		}
	}						  	
}
					
$_POST['accountoption'] = (empty($_POST['accountoption'])) ? '' : $_POST['accountoption'];
if($_POST['accountoption'] == "delete"){
    $ownuid = DataAccess::fetch("SELECT uid FROM " . NEWS_USERS . " WHERE user = ?", $_SESSION['name']);
    $ownuid = $ownuid['0']['uid'];
	if(count($_POST['selectedaccounts']) !== 0){
		$selected = $_POST['selectedaccounts'];
		$i = 0;
		$deleted = '';
		foreach($selected as $uid){
			if($uid !== $ownuid){				
				$deletedaccountname = DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $uid);
                $deletedaccountname = $deletedaccountname['0']['user'];
                $deleted .= "Account name: $deletedaccountname <br /> ";
                DataAccess::put("DELETE FROM " . NEWS_USERS . " WHERE uid = ?", $uid);
				$ownaccount = 0;
				$i++;	
			}else{
				$ownaccount = 1;	
			}
		}

		if($i > 0){
			echo "<span class=\"success\">".$langmsg['accounts'][21]." <br />$deleted</span> <br />";
		}

		if($ownaccount == 1){
			echo "<br />";
			echo "<span class=\"error\">".$langmsg['accounts'][22]."</span><br />";
		}			    		 		
	}
}

$tmpcolor = "1";
$totalaccounts = DataAccess::fetch("SELECT * FROM " . NEWS_USERS);
$totalaccounts = count($totalaccounts);
$f = $langmsg['accounts'][1];
$f = "<b>$totalaccounts</b> " . $f;
echo "<div class=panel>$f</div><br>";
echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" ><tr><td>";
echo "<form id=\"accounteditform\" method=\"POST\" action=\"?action=options&mod=accounts\">";
echo "<table id=\"rows\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n";
echo "<tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"30%\">".$langmsg['accounts'][2]."</td><td class=\"tableshead tablerightborder\" width=\"25%\">".$langmsg['accounts'][3]."</td><td class=\"tableshead tablerightborder\" width=\"11%\" align=\"center\">".$langmsg['accounts'][4]."</td><td class=\"tableshead tablerightborder\" width=\"11%\" align=\"center\">".$langmsg['accounts'][5]."</td><td class=\"tableshead tablerightborder\" width=\"11%\" align=\"center\">".$langmsg['accounts'][26]."</td><td class=\"tableshead\" width=\"11%\" align=\"center\">".$langmsg['accounts']['27']."</td><td  class=\"tableshead tableleftborder\"><input type=\"checkbox\" id=\"allcheck\" onclick=\"selectall()\"></td></tr>";
$d = 1;
$sql = "SELECT user, " . NEWS_USERS . ".uid as useruid, name FROM " . NEWS_USERS . "
		LEFT JOIN " . NEWS_ACCESS . "
		ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid
		ORDER BY user ASC";
$g = DataAccess::fetch($sql);
foreach($g AS $row){
    $numposts = DataAccess::fetch("SELECT COUNT(id) AS total FROM " . NEWS_ARTICLES . " WHERE author = ?", $row['useruid']);
    $numposts = $numposts['0']['total'];
    $numcomments = DataAccess::fetch("SELECT COUNT(id) AS total FROM " . NEWS_COMMENTS . " WHERE user = ?", $row['user']);
    $numcomments = $numcomments['0']['total'];
	$numimages = DataAccess::fetch("SELECT COUNT(uid) AS total FROM " . NEWS_IMAGES . " WHERE uploader = ?", $row['useruid']);
	$numimages = $numimages['0']['total'];
	$numfiles = DataAccess::fetch("SELECT COUNT(uid) AS total FROM " . NEWS_FILES . " WHERE author = ?", $row['useruid']);
	$numfiles = $numfiles['0']['total'];
	if($tmpcolor == "1"){
		$class = "row1";
		$tmpcolor = "2";
	}else{
		$class = "row2";
		$tmpcolor = "1";
	}
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" class=\"$class\" onmouseout=\"unmarkfield('$d')\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=accounts&create=edit&uid=$row[useruid]\"><img alt=\"Edit\" title=\"Edit\" src=\"images/icons/pencil.png\" /></a></td><td class=\"tablebody tablerightborder\">$row[user]</td><td class=\"tablebody tablerightborder\">$row[name]</td><td class=\"tablebody tablerightborder\" style=\"text-align: right\" >$numposts</td><td style=\"text-align: right\" class=\"tablebody tablerightborder\">$numcomments</td><td style=\"text-align: right\" class=\"tablebody tablerightborder\" >$numfiles</td><td style=\"text-align: right\" class=\"tablebody\">$numimages</td><td class=\"tablebody tableleftborder\" class=\"tablebody\"><input name=\"selectedaccounts[]\" value=\"$row[useruid]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" type=\"checkbox\"></td></tr>\n";
	$d++;
}

#echo "<tr><td></td><td></td><td></td><td></td><td><div align=\"center\"></div></td><tr><td><u><a href=\"?action=options&mod=accounts&create=new\">Create new account.</u></td></tr></table></form></td></tr></table>";
echo "</table>";
echo "<div align=\"right\"><select id=\"accountoption\" name=\"accountoption\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";					
echo "</select>&nbsp;<input type=\"button\" class=\"nostyle\" onclick=\"accountaction()\" value=\"".$langmsg['submitfield'][0]."\" /></div>";
echo "<u><a href=\"?action=options&mod=accounts&create=new\">".$langmsg['accounts'][6]."</u>";
echo "</td></tr></table>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>