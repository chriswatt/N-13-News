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

$phpversion = array();
$phpversion = explode(".", phpversion());
$majorversion = $phpversion['0'];

$path = str_replace("update", "", dirname(__FILE__));
define('ABSPATH', $path . '/' );

require_once(ABSPATH . 'db.php');
require_once(ABSPATH . 'functions.php');

// if using the old db.php define constants here
if(isset($cfg)){
	if(is_array($cfg)){
		define('HOSTNAME',	$cfg['hostname']);
		define('USER',		$cfg['user']);
		define('PASS',		$cfg['pass']);
		define('DATABASE',	$cfg['database']);
		define('PORT',		$cfg['port']);
		define('SOCKET',	$cfg['socket']);
		if(empty($cfg['extension'])){ 
			define('EXTENSION',	'mysql');
		}
	}
}

$versioninfo = DataAccess::fetch("SHOW COLUMNS FROM " . NEWS_OPTIONS . " LIKE 'version'");
if(count($versioninfo) > 0){
	$installedversion = DataAccess::fetch("SELECT version FROM " . NEWS_OPTIONS . " WHERE 1");
	$installedversion = $installedversion['0']['version'];
}
function sqldump($url, $ignoreerrors = false) {
	$file_content = file($url);			
	$query = "";
	foreach($file_content as $sql_line) {
		$tsl = trim($sql_line);
		if (($sql_line != "") && (substr($tsl, 0, 2) != "--") && (substr($tsl, 0, 1) != "#")) {
			$query .= $sql_line;
			if(preg_match("/;\s*$/", $sql_line)) {
				#$result = mysql_query($query);
				DataAccess::put($query);
				#if (!$result && !$ignoreerrors) die(mysql_error());
				$query = "";
			}
		}
	}
}
function versionform(){
	global $installedversion;
	echo "<form method=\"post\" action=\"\">";
	echo "Enter the version number of the script you currently have installed. example, <b>3.3</b><br />";
	echo "<span style=\"color: #AA0000\">Important - Make sure this is correct otherwise you'll likely break your installation</span><br />";
	echo "<input type=\"text\" name=\"version\" value=\"$installedversion\"> <input type=\"submit\" onclick=\"this.style='none'\" name=\"S1\" value=\"Update\" />";
	echo "</form>";	
}

$_POST['version']	= (empty($_POST['version'])) ? '' : $_POST['version'];
$_POST['S1']		= (empty($_POST['S1'])) ? '' : $_POST['S1'];
$version			= $_POST['version'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../style.css" rel="stylesheet" type="text/css" />
<title>N-13 News 3.6</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body style="padding: 0px; margin: 0px; background-color: #15497c; background-image: url('../images/bgrepeat.png'); background-repeat: repeat-x"><strong></strong>
<div align="center">




<div align="center" style="padding-top: 40px;">
	<div style="width: 729px;">
		<div style="background-position: 0px 50%; background-image: url('../images/content_top.png'); background-repeat: no-repeat; height: 12px;"></div>
			<div style="margin-top: -3px; text-align: left; background-position: 0px 50%; background-image: url('../images/content_repeat.png'); background-repeat: repeat-y;">






<table border="0" style="" cellpadding="20" cellspacing="0" width="730" style="background-image:url(../images/index_03.png)">

<tr><td width="100%" style="padding-bottom: 0px; padding-top: 10px">
<div style='background-image: url("../images/headertest.png"); width: 682px; background-repeat: repeat-x; height: 30px;'>
<span class="header">N-13 News Updater</span>
</div>
</td></tr>
  <tr>
    <td width="100%">
		<span class="header">Version</span><br /><br />    
         		<form method="post" action="?step=1" />

		<div style="margin-left: 200px; background-color: #FFFFFF">				
			
<?php
if($version < "3.6" && $installedversion < "3.6"){
	if(!$_POST['S1'] || !$_POST['version']){
		versionform();
	}else{
		if($_POST['version'] == "3.0"){
			sqldump(ABSPATH . "update/sqlchanges.txt"); #3.1
			sqldump(ABSPATH . "update/sqlchanges32.txt");
			sqldump(ABSPATH . "update/sqlchanges33.txt");
            sqldump(ABSPATH . "update/sqlchanges34.txt");
			sqldump(ABSPATH . "update/sqlchanges35.txt");
			sqldump(ABSPATH . "update/sqlchanges36.txt");
		}elseif($_POST['version'] == "3.1"){
			sqldump(ABSPATH . "update/sqlchanges32.txt");
            sqldump(ABSPATH . "update/sqlchanges33.txt");
			sqldump(ABSPATH . "update/sqlchanges34.txt");
			sqldump(ABSPATH . "update/sqlchanges35.txt");
			sqldump(ABSPATH . "update/sqlchanges36.txt");
		}elseif($_POST['version'] == "3.2"){
			sqldump(ABSPATH . "update/sqlchanges33.txt");
			sqldump(ABSPATH . "update/sqlchanges34.txt");
            sqldump(ABSPATH . "update/sqlchanges35.txt");
			sqldump(ABSPATH . "update/sqlchanges36.txt");
		}elseif($_POST['version'] == "3.3"){
            sqldump(ABSPATH . "update/sqlchanges34.txt");
			sqldump(ABSPATH . "update/sqlchanges35.txt");
			sqldump(ABSPATH . "update/sqlchanges36.txt");
        }elseif($_POST['version'] == "3.4"){
			sqldump(ABSPATH . "update/sqlchanges35.txt");
			sqldump(ABSPATH . "update/sqlchanges36.txt");
		}elseif($_POST['version'] == "3.5"){
			sqldump(ABSPATH . "update/sqlchanges36.txt");
		}
		
		if($_POST['version'] < "3.3"){
        	// set new registration access level
			$commenteruid = DataAccess::fetch("SELECT uid FROM " . NEWS_ACCESS . " WHERE name = ?", 'Commenter Access');
			$commenteruid = $commenteruid['0']['uid'];
			DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET registrationaccess = ? WHERE 1", $commenteruid);
			
			// grab cateogry each news article is assigned to and add it to the new groupcats table
			$allposts = DataAccess::fetch("SELECT id, catid FROM " . NEWS_ARTICLES);
			foreach($allposts AS $post){
				$storyid	= $post['id'];
				$catid		= $post['catid'];
				$type		= 'news';
				if($catid !== "0"){
					if(!empty($catid)){
						DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid,catid,type) VALUES (?, ?, ?)", $storyid, $catid, $type);
					}
				}
			}
		}
		
		// delete catid column
		DataAccess::put("ALTER TABLE " . NEWS_ARTICLES . " DROP catid");
		
		echo "N-13 News updated to version 3.6. <span style=\"color: #FF0000\">Please delete this file immediately</span>";
	}
}else{
	echo "You already have the latest version installed.";
}
?>

			</div>
		</div>
		</form>
	    </td>       
  </tr>
</table>








			</div>
		<div style="margin-top: -3px; background-position: 0px 50%; background-image: url('../images/content_bottom.png'); background-repeat: no-repeat; height: 12px;"/></div>
	</div>
</div>


<br />

<span style="color: #FFFFFF">Powered by <a style="color: rgb(255, 255, 255);" href="http://network-13.com">N-13 News 3.6</a> &copy; 2010</span>
</div>