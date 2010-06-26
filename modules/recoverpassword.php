<?php
/***********************************************************************
  N-13 News is a free news publishing system
  Copyright (C) 2009 Chris Watt
  
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

$_GET['vcode']	= (empty($_GET['vcode'])) ? '' : $_GET['vcode'];
$_POST['S1']	= (empty($_POST['S1'])) ? '' : $_POST['S1'];
$_POST['email']	= (empty($_POST['email'])) ? '' : $_POST['email'];

if(!$_GET['vcode']){
	echo "<span class=header>".$langmsg['recover'][0]."</span></div><br />";
	echo "<div align=right>";
	echo "<div style=\"width: 560px; text-align: left\" class=panel>".$langmsg['recover'][1]."</div><br />";
	if(!$_POST['S1']){
		echo "<form method=post action=\"?action=recoverpass\">";
		echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"565\">\n";
		echo "<tr><td style=\"text-align: left\">".$langmsg['recover'][2]." <input type=text name=email>&nbsp;<input type=submit name=\"S1\" value=\"".$langmsg['submitfield'][9]."\"></td></tr>";
		echo "</table>";
		echo "</form>";
	}else{
		echo "<table width=\"685\"><tr><td style=\"text-align: left\">";
		$email		= $_POST['email'];
		$userexists	= DataAccess::fetch("SELECT uid, vcode FROM " . NEWS_USERS . " WHERE email = ?", $email);
		if(count($userexists) >= 1){
			$vcode = $userexists['0']['vcode'];
				if(!$vcode){
					$vcode	= rand(1,10000000);
					$vcode	= md5($hash . uniqid($vcode));
					DataAccess::put("UPDATE " . NEWS_USERS . " SET vcode = ? WHERE email = ?", $vcode, $email);
				}
				$domain = $_SERVER['HTTP_HOST'];
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: Account Recovery <noreply@$domain>\r\n";
				$headers .= "To: $email <$email>\r\n";
				$headers .= "Date: ".date("r")."\r\n";
				$headers .= "Subject: Account info\r\n";
				$message = $langmsg['recover'][3];
				$message .= "<br><br>";
				$message .= "<a href=\"http://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]?action=recoverpass&vcode=$vcode&email=$email\">".$langmsg['recover'][4]."</a>";
				if(@mail($email,"Account info",$message,$headers)){
					echo "<div align=right>";
					echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"565\"><tr><td>\n";
					$g = $langmsg['recover'][5];
					$g .= " <b>$email</b> " . $langmsg['recover'][13];
					echo $g;
					echo "</td></tr></table>";
					echo "</div>";	
				}else{
					echo "<div align=right>";
					echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"565\"><tr><td>\n";
					echo "<span class=\"error\">".$langmsg['recover'][9]."</span>";
					echo "</td></tr></table>";
					echo "</div>";	
				}
		}else{
			echo "<div align=right>";
			echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"565\"><tr><td style=\"text-align: left\">\n";
			echo "<div class=error>".$langmsg['recover'][6]."</div>";
			echo "</td></tr></table>";
			echo "</div>";
		}
		echo "</td></tr></table>";
	}
	echo "</div>";
}else{
	$userexists = DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE vcode = ? AND email = ?", $_GET['vcode'], $_GET['email']);
	if(count($userexists) >= 1){
		$email	= $_GET['email'];
		$vcode	= $_GET['vcode'];
		$name	= $userexists['0']['user'];
		echo "<span class=header>".$langmsg['recover'][7]."</span></div>";
		echo "<br>";           
		echo "<div align=right><div class=panel style=\"width: 81%; text-align: left\">".$langmsg['recover'][8]."</div></div><br />";
		function resetpassform($name){
			$email	= $_GET['email'];
			$vcode	= $_GET['vcode'];
			$_POST['T1'] = (empty($_POST['T1'])) ? '' : $_POST['T1'];
			$_POST['T2'] = (empty($_POST['T2'])) ? '' : $_POST['T2'];
			global $langmsg;
			echo "<form method=post action=\"?action=recoverpass&vcode=$vcode&email=$email\">";
			echo "<div align=\"right\"><table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"81%\">\n";
			echo "<tr><td width=\"150\"><div class=success>$name</div></td></tr>";
			echo "<tr><td width=\"150\">".$langmsg['recover'][7].":</td><td><input type=\"password\" name=\"T1\" value=\"$_POST[T1]\"></td></tr>";
			echo "<tr><td width=\"150\">".$langmsg['recover'][10]."</td><td><input type=\"password\" name=\"T2\" value=\"$_POST[T2]\"></td></tr>";
			echo "<tr><td width=\"150\"></td><td><input type=submit name=S1 value=\"".$langmsg['submitfield'][6]."\"></td></tr>";
			echo "</table>";
			echo "</div>";
			echo "</form>";
		}
		if(!$_POST['S1']){
			resetpassform($name);
		}else{
			if(!$_POST['T1'] OR !$_POST['T2']){
				echo "<div align=right><table width=\"81%\"><tr><td><div class=error>".$langmsg['recover'][11]."</div></td></tr></table></div>";
				resetpassform($name);
			}elseif($_POST['T1'] == $_POST['T2']){
				$pass = $_POST['T1'];
				$pass = md5(SALT . $pass);
				DataAccess::put(sprintf("UPDATE %s SET pass = ?, newpass = ?, vcode = ? WHERE email = ? AND vcode = ?", NEWS_USERS), "", $pass, "", $email, $vcode);
				echo "<div align=right><table width=\"81%\"><tr><td><div class=success>".$langmsg['recover'][12]."</div><br><a href=\"?\">Login here!</a></td></tr></table></div>";
			}else{
				echo "<div align=right><table width=\"81%\"><tr><td><div class=error>".$langmsg['recover'][11]."</div></td></tr></table></div>";
				resetpassform($name);
			}
		}
	}else{
		echo "Go away! :o";
	}
}
?>