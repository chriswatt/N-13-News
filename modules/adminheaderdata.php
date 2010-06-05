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

$tmp = $_GET['action'];
global $loginerror;
if($tmp == "logout"){
	dologout();
}
checkcookie();
function dologin(){
	global $image_verification, $tmpname, $num, $langmsg, $query, $pass, $loginerror, $default_login_language;
	if($num >= 1){
        $all = DataAccess::fetch("SELECT user, email, newpass, pass, uid FROM " . NEWS_USERS . " WHERE user = ?", $_POST['name']);        
		if(!$all['0']['newpass']){
			if($all['0']['pass'] == md5($pass)){ #is using old pass, login as normal then update with salt, #remove old pass
				$language = $_POST['n13language'];
				if(!$language){ $language = str_replace('.php','',$default_login_language); }
				$_SESSION['userlogged20']	= "true";
				$_SESSION['email']			= $all['0']['email'];
				$_SESSION['name']			= $all['0']['user'];
				$_SESSION['uid']			= $all['0']['uid'];
				$_SESSION['language']		= strtolower($language);
				$_SESSION['language_type']	= 'admin';
				$newpass = md5(SALT . $pass);
                DataAccess::put("UPDATE " . NEWS_USERS . " SET pass = ?, newpass = ? WHERE user = ?", "", $newpass, $_POST['name']);
				updatelogs('1', $_SESSION['name']);
				if($_POST['rememberme']){
					setcookies($_POST['name'], $_SESSION['uid'], $language); 
				}				 
			}else{ #invalid login
                updatelogs('0',$_POST['name']);
				$_SESSION['loginerror'] = $langmsg['login'][8];
			}	
		}else{ #using new password, login as normal
			if($all['0']['newpass'] == md5(SALT . $pass)){ 
				$language = $_POST['n13language'];
				if(!$language){ $language = str_replace('.php','',$default_login_language); }
				$_SESSION['userlogged20']	= "true";
				$_SESSION['email']			= $all['0']['email'];
				$_SESSION['name']			= $all['0']['user'];
				$_SESSION['uid']			= $all['0']['uid'];
				$_SESSION['language']		= strtolower($language);
				$_SESSION['language_type']	= 'admin';
				updatelogs('1', $_SESSION['name']);
				$_POST['rememberme'] = (empty($_POST['rememberme'])) ? '' : $_POST['rememberme'];
				if($_POST['rememberme']){
					setcookies($_POST['name'], $_SESSION['uid'], $language);
				}
			}else{ #invalid login
                updatelogs('0', $_POST['name']);
				$_SESSION['loginerror'] = $langmsg['login'][8];
			}			
		}
	}else{
        $username_exists = DataAccess::fetch("SELECT COUNT(uid) AS userexists FROM " . NEWS_USERS . " WHERE user = ?", $_POST['name']);
        $username_exists = $username_exists['0']['userexists'];
		if($username_exists > 0){
			updatelogs('0',$_POST['name']);
		}
		$_SESSION['loginerror'] = $langmsg['login'][8];
	}
}
$_POST['name'] = (empty($_POST['name'])) ? '' : $_POST['name'];
if(!isloggedin()){
	if(!$_POST['name']){
		$loggedin = "false";
	}else{
		$tmpname	= $_POST['name'];
		$pass		= $_POST['pass'];
		$userexists = DataAccess::fetch("SELECT COUNT(uid) AS userexists FROM " . NEWS_USERS . " WHERE user = ?", $_POST['name']);
		$userexists = $userexists['0']['userexists'];
		$num		= $userexists;
		if($image_verification == 1){
			$number = $_POST['key'];
			if(md5(SALT . $number) == $_SESSION['image_random_value']){	
				dologin();			
			}else{
				$_SESSION['loginerror'] = $langmsg['login'][7];
			}
		}else{		
			dologin();	
		}
	}
}
?>