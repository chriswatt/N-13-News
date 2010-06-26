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

session_name('n13news');
session_start();

$path = str_replace("install", "", dirname(__FILE__));
define('ABSPATH', $path . '/' );

$querycount = 0;
function sqldump($url, $ignoreerrors = false){
	global $querycount;
	$file_content = file($url);			
	$query = "";
	foreach($file_content as $sql_line) {
		$tsl = trim($sql_line);
		if (($sql_line != "") && (substr($tsl, 0, 2) != "--") && (substr($tsl, 0, 1) != "#")) {
			$query .= $sql_line;
			if(preg_match("/;\s*$/", $sql_line)) {
				DataAccess::put($query);
				#if (!$result && !$ignoreerrors) die(mysql_error());
				$querycount++;
				$query = "";
			}
		}
	}
}
$_POST['install'] = (empty($_POST['install'])) ? '' : $_POST['install'];
if($_POST['install'] == "true"){
	require_once(ABSPATH . 'db.php');
	require_once(ABSPATH . 'functions.php');
	if($_POST['next'] == "sql.txt"){
		// drop all existing tables
		DataAccess::put("DROP TABLE IF EXISTS news30_access, news30_accesslogs, news30_banned, news30_cats, news30_comments, news30_files, news30_filter, news30_groupcats, news30_images, news30_linkedfiles, news30_options, news30_private, news30_privateout, news30_rating, news30_rssfeeds, news30_smilies, news30_story, news30_templates, news30_users");
		$querycount++;

		sqldump(ABSPATH . "update/sql.txt");
		DataAccess::put("UPDATE " . NEWS_USERS . " SET user = '". $_SESSION['cfgusername'] . "', pass = '" . md5($_SESSION['cfgpass']) . "', email = '" . $_SESSION['cfgemail']. "' WHERE uid = '1'");
		$querycount++;
		DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET timestamp = '". time() . "', IP = '" . $_SERVER['REMOTE_ADDR'] . "', origauthor = '" . $_SESSION['cfgusername'] ."' WHERE id = '1'");
		$querycount++;
		DataAccess::put("UPDATE " . NEWS_PRIVATE . " SET posted = '" . time() . "' WHERE uid = '1'");
		$querycount++;
		$allsmilies = DataAccess::fetch("SELECT * FROM " . NEWS_SMILIES);
		$querycount++;
		foreach($allsmilies AS $row){
			$path = $row['path'];
			$filename = basename($path);
			$newpath = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$newpath = str_replace(basename($_SERVER['REQUEST_URI']),"smilies/",$newpath);
			$newpath = str_replace("install/", "", $newpath);
			$newpath = "http://" . $newpath . $filename;
			DataAccess::put("UPDATE " . NEWS_SMILIES . " SET path = '$newpath' WHERE id = '$row[id]'");
			$querycount++;
		}	
		echo "sql.txt~~" . $querycount . "~~OK~~sqlchanges.txt";
	}elseif($_POST['next'] == "sqlchanges.txt"){
		sqldump(ABSPATH . 'update/sqlchanges.txt');
		echo "sqlchanges.txt~~" . $querycount . "~~OK~~sqlchanges32.txt";
	}elseif($_POST['next'] == "sqlchanges32.txt"){
		sqldump(ABSPATH . 'update/sqlchanges32.txt');
		echo "sqlchanges32.txt~~" . $querycount . "~~OK~~sqlchanges33.txt";
	}elseif($_POST['next'] == "sqlchanges33.txt"){
		sqldump(ABSPATH . 'update/sqlchanges33.txt');

		#update the God access level so that it can access Files Uploads
		DataAccess::put("UPDATE " . NEWS_ACCESS . " SET fileuploads = '1' WHERE name = 'Gods'");
		$querycount++;
		// set 'Commenter Access' as the default access level for new registrations
		$commenteruid = DataAccess::fetch("SELECT uid FROM " . NEWS_ACCESS . " WHERE name = ?", 'Commenter Access');
		$querycount++;
		$commenteruid = $commenteruid['0']['uid'];
		DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET registrationaccess = ? WHERE 1", $commenteruid);			
		$querycount++;
		#update Upload Path
		$uploadpath = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$uploadpath = str_replace("install/", "", $uploadpath);
		$uploadpath = str_replace(basename($_SERVER['REQUEST_URI']),"uploads/",$uploadpath);
		$uploadpath = "http://" . $uploadpath;
		DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET uploadpath = '$uploadpath' WHERE 1");	
		$querycount++;
		echo "sqlchanges33.txt~~" . $querycount . "~~OK~~sqlchanges34.txt";
	}elseif($_POST['next'] == "sqlchanges34.txt"){
		sqldump(ABSPATH . 'update/sqlchanges34.txt');
		echo "sqlchanges34.txt~~" . $querycount . "~~OK~~sqlchanges35.txt";
	}elseif($_POST['next'] == "sqlchanges35.txt"){
		sqldump(ABSPATH . 'update/sqlchanges35.txt');
		echo "sqlchanges35.txt~~" . $querycount . "~~OK~~sqlchanges36.txt";
	}elseif($_POST['next'] == "sqlchanges36.txt"){
		sqldump(ABSPATH . 'update/sqlchanges36.txt');

		
		// delete the old catid column
		DataAccess::put("ALTER TABLE " . NEWS_ARTICLES . " DROP catid");
		
		echo "sqlchanges36.txt~~" . $querycount . "~~OK~~sqlchanges37.txt";
	}elseif($_POST['next'] == "sqlchanges37.txt"){
		sqldump(ABSPATH . 'update/sqlchanges37.txt');
		

		#make 3.7 Ajax Template the default.
		$templateid = DataAccess::fetch("SELECT id FROM " . NEWS_TEMPLATES . " WHERE name = '3.7 Ajax Template'");
		$templateid = $templateid['0']['id'];
		$querycount++;
		
		// delete all other templates
		DataAccess::put("DELETE FROM " . NEWS_TEMPLATES . " WHERE name != '3.7 Ajax Template'");
		$querycount++;
		
		// set recaptcha as the default
		DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET useimgverification = '2' WHERE 1");
		$querycount++;
		
		// hide some smilies
		DataAccess::put("UPDATE " . NEWS_SMILIES . " SET showhide = '0' WHERE id IN (1,4,6,8,11,13,18,22,24,26,27)");
		$querycount++;

		// set 3.7
		DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET template = '$templateid' WHERE 1");	
		$querycount++;



		require_once(ABSPATH . '/langmsg.php');
		$finishmessage = $langmsg['install'][24] . " <a href=\"../admin.php\">" . $langmsg['install'][25] . "</a><hr />";
		echo "sqlchanges37.txt~~" . $querycount . "~~OK~~finished~~" . $finishmessage;		
	}
	die();
}


$phpversion = array();
$phpversion = explode(".", phpversion());
$majorversion = $phpversion['0'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../style.css" rel="stylesheet" type="text/css" />
<title>N-13 News 3.7</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<script language="javascript">
	function createXMLHttpRequest(){
		if (window.ActiveXObject){
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}else if (window.XMLHttpRequest){
			xmlHttp = new XMLHttpRequest();
		}
	}
	function senddata(next){
		createXMLHttpRequest();
		xmlHttp.onreadystatechange = handleStateChange;
		xmlHttp.open("POST", "?", true);
		xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlHttp.send("install=true&next=" + next);
		var result = 'Loading ' + next;
		
		document.getElementById('install_results').innerHTML = document.getElementById('install_results').innerHTML + result + '';
	}
	function handleStateChange() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			var data = xmlHttp.responseText.split('~~');
			var current	= data[0];
			var queries	= data[1];
			var status	= data[2];
			var next	= data[3];
			var finish	= data[4];
			var result = current + ' ' + queries + ' ' + status + ' ' + next;
			result = '<span style=\"float: right\">' + queries + ' Queries -  <span class=\"success\">' + status + '</span></span><br style=\"clear: both\" />';
			document.getElementById('install_results').innerHTML = document.getElementById('install_results').innerHTML + result + '';
			if(next == 'finished'){
				document.getElementById('status_icon').src = '../images/green_tick.gif';
				document.getElementById('finish_message').innerHTML = finish;
				//alert('done');
			}else{
				senddata(next);
			}
			
		}
	}
</script>

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
<span class="header">N-13 News Installer</span>
</div>
</td></tr>
  <tr>
    <td width="100%">
		<?php 
		$_GET['step'] = (empty($_GET['step'])) ? '' : $_GET['step'];
		$_POST['install_language'] = (empty($_POST['install_language'])) ? '' : $_POST['install_language'];
		if($_GET['step'] == "3"){
			require_once(ABSPATH . 'db.php');
		}
		if($_GET['step']){
			if($_POST['install_language']){
				$_POST['install_language'] = strtolower($_POST['install_language']);
				if(@file_exists(ABSPATH . 'language/' . $_POST['install_language'] . '.php')){
					$_SESSION['language'] = $_POST['install_language'];
				}else{
					$_SESSION['language'] = "english";	
				}
				require_once(ABSPATH . 'functions.php');
				require_once(ABSPATH . 'language/' . $_SESSION['language'] . '.php');
			}else{
				require_once(ABSPATH . 'functions.php');
				require_once(ABSPATH . 'language/' . $_SESSION['language'] . '.php');
			}
		}	
		if(!$_GET['step']){
			echo "<span class=\"header\">Step 0 <span style=\"color: #EEEEEE\">> Step 1 > Step 2 > Step 3 </span><br /><br />&nbsp;Language</span><br /><br />";
		}elseif($_GET['step'] == "1"){
			echo "<span class=\"header\"><span style=\"color: #EEEEEE\">Step 0 ></span> Step 1 <span style=\"color: #EEEEEE\">> Step 2 > Step 3 </span><br /><br />". $langmsg['install'][0] . "</span><br /><br />";
		}elseif($_GET['step'] == "2"){
			echo "<span class=\"header\"><span style=\"color: #EEEEEE\">Step 0 > Step 1 ></span> Step 2 <span style=\"color: #EEEEEE\">> Step 3</span><br /><br />" . $langmsg['install'][11] . "</span><br /><br />";		 
		}elseif($_GET['step'] == "3"){
			echo "<span class=\"header\"><span style=\"color: #EEEEEE\">Step 0 > Step 1 > Step 2 ></span> Step 3<br /><br />" . $langmsg['install'][22] . "</span><br /><br />";
		}
		?>    
    <?php
		if($_GET['step'] == "3"){
			echo "<div style=\"padding-left: 150px; padding-right: 50px\">";
			#echo "Installing <div style=\"float: right\">OK</div>";			
			echo "<br style=\"clear: both\" />";
			echo "<div id=\"finish_message\"></div>";
			echo "<div id=\"install_results\" style=\"\"></div>";
			echo "<div style=\"float: right\"><img src=\"../images/loadingspiral.gif\" id=\"status_icon\" /></div></div>";
			echo "<script language=\"javascript\">senddata('sql.txt');</script>";
		}
     if($_GET['step'] == "2"){
		$_POST['S1']				= (empty($_POST['S1'])) ? '' : $_POST['S1'];
		$_POST['loginusername']		= (empty($_POST['loginusername'])) ? '' : $_POST['loginusername'];
		$_POST['loginemail']		= (empty($_POST['loginemail'])) ? '' : $_POST['loginemail'];
		$_POST['loginpassword1']	= (empty($_POST['loginpassword1'])) ? '' : $_POST['loginpassword1'];
		$_POST['loginpassword2']	= (empty($_POST['loginpassword2'])) ? '' : $_POST['loginpassword2'];
		
	 	function installacdetails($install,$error){
	 		global $langmsg;
			echo '<form method="post" action="?step=2" />';
			echo '<div style="margin-left: 200px; background-color: #FFFFFF">';
			echo '<div>' . $langmsg['install'][12] . '</div>';
			echo $error . "<br />";
			echo '<table width="100%" cellpadding="0" cellspacing="2">';
			
			echo '		<tr><td style="width: 100px">' . $langmsg['install'][4] . '</td><td><input type="text" value="'.$_POST['loginusername'].'" name="loginusername" /></td></tr>';
			echo '		<tr><td style="width: 100px">' . $langmsg['install'][13] . '</td><td><input value="'.$_POST['loginemail'].'" type="text" name="loginemail" /></td></tr>';
			echo '		<tr><td style="width: 100px">' . $langmsg['install'][5] . '</td><td><input value="'.$_POST['loginpassword1'].'" type="password" name="loginpassword1" /></td></tr>';
			echo '		<tr><td style="width: 100px">' . $langmsg['install'][14] . '</td><td><input value="'.$_POST['loginpassword2'].'" type="password" name="loginpassword2" /></td></tr>';					
			echo '		<tr><td style="width: 100px">&nbsp;</td><td>';
			echo '<div id="installmsg" style="display: none; position: absolute; width: 250px; height: 50px; background-color: #FFFFFF; padding-left: 3px;">' . $langmsg['install'][30] . '</div>';
			echo '<button type="submit" name="S1" value="Continue">' . $langmsg['install'][15] . '</button>&nbsp;';
			if($install == false){
				echo "<button type=\"submit\" name=\"install\" value=\"Install\" disabled=\"disabled\">" . $langmsg['install'][21] . "</button>";
			}else{
				$_SESSION['cfgusername'] = $_POST['loginusername'];
				$_SESSION['cfgemail'] = $_POST['loginemail'];
				$_SESSION['cfgpass'] = $_POST['loginpassword1'];
		     	echo "<button type=\"button\" name=\"install\" onclick=\"document.getElementById('installmsg').style.display = ''; window.location='?step=3'\" value=\"Install\">" . $langmsg['install'][21] . "</button>";
		    }     
			echo '</td></tr>'; 
			echo '</table>';
		    echo '</div>';
	    }
		
	    if(!$_POST['S1']){
	     	installacdetails(false,"");
	    }elseif(!$_POST['loginusername']){
	     	installacdetails(false,"<span style=\"color: #FF0000\">" . $langmsg['install'][16] . "</span><br />");
	    }elseif(!$_POST['loginemail']){
	     	installacdetails(false,"<span style=\"color: #FF0000\">" . $langmsg['install'][17] . "</span><br />");
	    }elseif($_POST['loginpassword1'] == $_POST['loginpassword2']){
	     	if($_POST['loginpassword1'] == "" || $_POST['loginpassword2'] == ""){
	     	 	installacdetails(false,"<span style=\"color: #FF0000\">" . $langmsg['install'][18] . "</span><br />");	
	     	}else{
	     		installacdetails(true,"<span style=\"color: #00AA00\">" . $langmsg['install'][19] . "</span><br />");
	     	}
	    }else{
	    		installacdetails(false,"<span style=\"color: #FF0000\">" . $langmsg['install'][20] . "</span><br />");
	    }
	}												               
    ?>
     <?php
	 if($_GET['step'] == "1"){ ?>
		<form method="post" action="?step=1" />

		<div style="margin-left: 200px; background-color: #FFFFFF">
			<div><?php echo $langmsg['install'][1]; ?></div><br />
		   <?php 
		   			
			if($_POST['S1'] == "Test Connection"){ 
				$continue	= false;
				$dbserver	= $_POST['server'];
				$dbusername	= $_POST['username'];
				$dbpassword	= $_POST['password'];
				$dbdatabase	= $_POST['database'];
				$dbport		= $_POST['port'];
				$dbsocket	= $_POST['socket'];
				$dbextension= $_POST['extension'];

				if($dbextension == "mysql"){
					$connection		= @mysql_connect($dbserver,$dbusername,$dbpassword);
					$db				= @mysql_select_db($dbdatabase);
					$servererror	= mysql_error();
					$dberror		= mysql_error();
				}elseif($dbextension == "pdo"){
					if(in_array('PDO', @get_loaded_extensions()) && in_array('pdo_mysql', @get_loaded_extensions())){
						$c = true;
						try{
							$connection = new PDO("mysql:host=$dbserver;dbname=$dbdatabase",$dbusername,$dbpassword);
						}catch(PDOException $pe){
							$servererror = $pe->getMessage();
							$c = false;
						}
						if($c){
							$connection = true;
							$db = true;
						}			
					}else{
						echo "<span class=\"error\">" . $langmsg['install'][32] . "</span>";
					}				
		
				}elseif($dbextension == "mysqli"){
					if(function_exists('mysqli_connect')){
						$connection		= @mysqli_connect($dbserver,$dbusername,$dbpassword,$dbdatabase,(int)$dbport,$dbsocket);
						$db				= @mysqli_select_db($connection, $dbdatabase);
						$servererror	= mysqli_connect_error();
						$dberror		= mysqli_connect_error();
					}else{
						echo "<span class=\"error\">" . $langmsg['install'][31] . "</span>";
					}
				}

				if($connection){
					echo "<div style=\"float: left; width: 150px\">" . $langmsg['install'][8] . "</div><span class=success>OK</span><br />";
					if($db){
						echo "<div style=\"float: left; width: 150px\">" . $langmsg['install'][8] . "</div><span class=success>OK</span><br />";
						$_SESSION['step2']			= "ok";
						$_SESSION['dbserver']		= $dbserver;
						$_SESSION['dbusername']		= $dbusername;
						$_SESSION['dbpassword']		= $dbpassword;
						$_SESSION['dbdatabase']		= $dbdatabase;	
						$_SESSION['dbextension']	= $dbextension;
						$_SESSION['dbport']			= $dbport;
						$_SESSION['dbsocket']		= $dbsocket;
						$dbfile = "../db.php";
						if(is_writable($dbfile)){					
							$f = fopen($dbfile, 'w');
							$data = "<?php"; 
							$data .= "\n/*------- Database connection info & settings ------*/\n";
							$data .= sprintf("define('HOSTNAME',	'%s');\n",	$_SESSION['dbserver']);
							$data .= sprintf("define('USER',		'%s');\n",	$_SESSION['dbusername']);
							$data .= sprintf("define('PASS',		'%s');\n",	$_SESSION['dbpassword']);
							$data .= sprintf("define('DATABASE',	'%s');\n",	$_SESSION['dbdatabase']);
							$data .= sprintf("define('PORT',		'%s');\n",	$_SESSION['dbport']);
							$data .= sprintf("define('SOCKET',	'%s');\n",		$_SESSION['dbsocket']);
							$data .= sprintf("define('EXTENSION',	'%s');\n",	$_SESSION['dbextension']);
							$data .= "?>";
			
							fwrite($f, $data);
							echo "<script language=\"javascript\">window.location='?step=2';</script>";	
						}else{
							echo "<br />";
							echo "<div class=error>" . $langmsg['install'][10] . "</div>";
						}
						echo "<br />";
					}else{
						echo "<div style=\"float: left; width: 150px\">" . $langmsg['install'][9] . "</div><span class=error>" . $dberror . "</span><br /><br />";
					}
				}else{
					echo "<div style=\"float: left; width: 150px\">" . $langmsg['install'][8] . "</div><span class=error>" . $servererror . "</span><br /><br />";
				}
			}
			?>
			
			
			<table width="100%" cellpadding="0" cellspacing="2">
				<tr>
				<?php
					$_POST['server']	= (empty($_POST['server'])) ? '' : $_POST['server'];
					$_POST['port']		= (empty($_POST['port'])) ? '' : $_POST['port'];
					$_POST['socket']	= (empty($_POST['socket'])) ? '' : $_POST['socket'];
					$_POST['extension']	= (empty($_POST['extension'])) ? '' : $_POST['extension'];
					$_POST['database']	= (empty($_POST['database'])) ? '' : $_POST['database'];
					$_POST['username']	= (empty($_POST['username'])) ? '' : $_POST['username'];
					$_POST['password']	= (empty($_POST['password'])) ? '' : $_POST['password'];
				?>
					<td><?php echo $langmsg['install'][2]; ?></td><td><input type="text" value="<?php echo $_POST['server']; ?>" name="server" /> <?php echo $langmsg['install'][3]; ?></td>
				</tr>
				<tr>
					<td><?php echo $langmsg['install'][26]; ?></td><td><input type="text" value="<?php echo $_POST['port']; ?>" name="port" /> <?php echo $langmsg['install'][29]; ?></td>
				</tr>
				<tr>
					<td><?php echo $langmsg['install'][27]; ?></td><td><input type="text" value="<?php echo $_POST['socket']; ?>" name="socket" /> <?php echo $langmsg['install'][29]; ?></td>
				</tr>				
				<tr>
					<td><?php echo $langmsg['install'][28]; ?></td>
					<td>
						<select name="extension">
							<option value="mysql" <?php if($_POST['extension'] == "mysql"){ echo "selected=\"selected\""; } ?>>mysql</option>						
							<option value="mysqli" <?php if($_POST['extension'] == "mysqli"){ echo "selected=\"selected\""; } ?>>mysqli</option>
							<option value="pdo" <?php if($_POST['extension'] == "pdo"){ echo "selected=\"selected\""; } ?>>pdo</option>
						</select>
					</td>
				<tr><td colspan=2><hr /></td></tr>
				<tr>
					<td><?php echo $langmsg['install'][6]; ?></td><td><input value="<?php echo $_POST['database']; ?>" name="database" type="text" value="" /></td>
				</tr>											
				</tr>						
					<td style="width: 100px"><?php echo $langmsg['install'][4]; ?></td><td><input value="<?php echo $_POST['username']; ?>" name="username" type="text" value="" /></td>
				</tr>
				<tr>
					<td><?php echo $langmsg['install'][5]; ?></td><td><input value="<?php echo $_POST['password']; ?>" name="password" type="password" value="" /></td>
				</tr>
				<tr>
				<td>&nbsp;</td><td><br /><button type="submit" name="S1" value="Test Connection"><?php echo $langmsg['install'][7]; ?></button></td>
				</tr>
			</table>

		</div>
		</form>
	<?php 
	 } 
	 if(!$_GET['step']){ ?>
		<form method="post" action="?step=1" />

		<div style="margin-left: 200px; background-color: #FFFFFF">				
			
			<div style="width: 100px; padding-top: 3px; float: left;">Language:</div>
			<select name="install_language">
			<?php
			$_SESSION['langtype'] = "dropdown";
			require_once(ABSPATH . 'functions.php');
			require_once(ABSPATH . 'language/config.php');
			foreach($language_names AS $name=>$native){
				$languages .= "<option value=\"$name\"";
				if($name == "English"){
					$languages .= " selected=\"selected\"";	
				}
				$languages .= ">" . $name . " - " .$native . "</option>\n";
			}
			unset($langmsg); 
			unset($_SESSION['langtype']);
			echo $languages;
			?>
			</select>
			<br /><br />
					
			<div style="margin-top: 3px"><div style="width: 100px; float: left">&nbsp;</div><input type="submit" name="S1" value="Continue" />

			</div>
		</div>
		</form>
	<?php } ?>
    </td>       
  </tr>
</table>








			</div>
		<div style="margin-top: -3px; background-position: 0px 50%; background-image: url('../images/content_bottom.png'); background-repeat: no-repeat; height: 12px;"/></div>
	</div>
</div>


<br />

<span style="color: #FFFFFF">Powered by <a style="color: rgb(255, 255, 255);" href="http://network-13.com">N-13 News 3.7</a> &copy; 2010</span>
</div>