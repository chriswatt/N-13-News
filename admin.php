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

ob_start();
session_name('n13news');
session_start();
ob_end_clean();

if(get_magic_quotes_gpc()){
	foreach($_POST AS $g=>$d){
		if(!is_array($_POST[$g])){
			$_POST[$g] = stripslashes($_POST[$g]);
		}
	}
}
$_GET['action']	= (empty($_GET['action'])) ? '' : $_GET['action'];
$_GET['mod']	= (empty($_GET['mod'])) ? '' : $_GET['mod'];
$_GET['thumb']	= (empty($_GET['thumb'])) ? '' : $_GET['thumb'];
$_POST['B3']	= (empty($_POST['B3'])) ? '' : $_POST['B3'];

if($_GET['action'] == "options" && $_GET['mod'] == "imageuploads" && $_GET['thumb']){
	#create thumbnails
	require_once 'modules/thumbnails.php';
}

require_once 'db.php';
require_once 'config.php';

if(!$_SESSION['language']){
	$_SESSION['language'] = $default_login_language;
}
if($_POST['B3']){
	$_SESSION['language'] = $_POST['n13language'];
}

require_once 'langmsg.php';
require_once 'modules/adminheaderdata.php';


#update scriptpath if it hasn't been set yet. added in 3.3
$scriptpath = DataAccess::fetch("SELECT scriptpath FROM " . NEWS_OPTIONS . " WHERE 1");
if(!$scriptpath['0']['scriptpath']){
	$scriptpath = str_replace(basename($_SERVER['REQUEST_URI']),"",$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	$scriptpath = "http://" . $scriptpath;
	DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET scriptpath = ? WHERE 1",$scriptpath);
}

#update commentcount on all news posts. added in 3.4
$commentsupdated = DataAccess::fetch("SELECT commentcount FROM " . NEWS_ARTICLES . " WHERE 1");
$commentsupdated = $commentsupdated['0']['commentcount'];
if(!$commentsupdated){
	DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET commentcount = (SELECT COUNT(id) FROM " . NEWS_COMMENTS . " WHERE " . NEWS_COMMENTS . ".pid = news30_story.id)");
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/main.php"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<title>N-13 News <?php echo $version; ?></title>
</head>
<body style="padding: 0px; margin: 0px; background-color: #15497c; background-image: url('images/bgrepeat.png'); background-repeat: repeat-x">

<div align="center" style="padding-top: 40px">


<div style="width: <?php if($_SESSION['userlogged20'] == "true"){ echo "855px"; }else{ echo "729px"; } ?>;">
	<div style="background-position: <?php if($_SESSION['userlogged20'] == "true"){echo "126px"; }else{ echo "0px"; } ?>; background-image: url('images/content_top.png'); background-repeat: no-repeat; height: 12px"></div>
	<div style="margin-top: -3px; text-align: left; background-position: <?php if($_SESSION['userlogged20'] == "true"){echo "126px"; }else{ echo "0px"; } ?>; background-image: url('images/content_repeat.png'); background-repeat: repeat-y;">
		<div style="width: 729px; float: right;">
			<div style="padding-top: 0px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px">
			<div style="background-image: url('images/headertest.png'); width: 682px; background-repeat: repeat-x; height: 30px">

<?php
	include ('modules/admindata.php');
?>
			</div>															
		</div>		
		<div style="<?php if(!isloggedin()){ echo "display: none;"; } ?> width: 126px; float: left">
			
		<?php
			echo '<a onfocus="this.blur()" class="navbase" href="?"';
			if($_GET['action'] == "home" OR $_GET['action'] == ""){
				echo 'style="background-image: url(\'images/navbaseover.png\');"';
			}
			echo '><span class="navbase2 homeicon">' . $langmsg['menu'][18] . '</span></a>';

			#news menu
			if(getaccess("news")){			
				echo '<a onfocus="this.blur()" class="navbase" href="javascript:expandcollapse(\'subnews\')"';
				if($_GET['action'] == "addnews" OR $_GET['action'] == "editnews"){
					echo ' style="background-image: url(\'images/navbaseover.png\');"';
				}
				echo '><span class="navbase2 newsicon">' . $langmsg['menu'][19] . '</span></a>';
				echo '<span class="subnav" id="subnews"';
				if($_GET['action'] == "addnews" OR $_GET['action'] == "editnews"){
					echo '>';
				}else{				
					echo ' style="display: none">';	
				}
				echo '<a onfocus="this.blur()" class="navlink addnews" href="?action=addnews">' . $langmsg['menu'][0] . '</a>';
				echo '<a onfocus="this.blur()" class="navlink editnews" href="?action=editnews">' . $langmsg['menu'][1] . '</a>';
				echo '<a onfocus="this.blur()" class="navlink archivednews" href="?action=editnews&archives=true">' . $langmsg['menu'][2] . '</a>';					
				echo '</span>';					
		 	}
		 	
		 	#private messages menu
			if(getaccess("privatemsgs")){
				$uid = $_SESSION['uid'];
				$unreadmessages = DataAccess::fetch("SELECT COUNT(*) AS total FROM " . NEWS_PRIVATE . " WHERE sentto = ? AND viewed = ?", $uid, "1");
                $unreadmessages = $unreadmessages['0']['total'];				
				if($unreadmessages > 0){
					$navbase = "navbaseyellow";
				}else{
					$navbase = "navbase";
				}
				echo '<a class="' . $navbase. '" onfocus="this.blur()" href="javascript:expandcollapse(\'submessages\')"';
				if($_GET['action'] == "private"){
					echo ' style="background-image: url(\'images/navbaseover.png\');"';
				}
				echo '><span class="navbase2 privateicon">' . $langmsg['menu'][20] . '</span></a>';
				echo '<span class="subnav" id="submessages"';
				if($_GET['action'] == "private"){
					echo '>';
				}else{
					echo ' style="display: none">';
				}	
				echo '<a onfocus="this.blur()" class="navlink newmessage" href="?action=private&todo=new">' . $langmsg['menu'][3] . '</a>';
				echo '<a onfocus="this.blur()" class="navlink messageinbox" href="?action=private&type=">';
                
                if($unreadmessages == "0"){
					$unreadmessages = '';
				}else{
					$unreadmessages = "(" . $unreadmessages . ")";
				}
				$g = $langmsg['menu'][4];
				$g = $g . " " . $unreadmessages;
				echo $g; 
				echo '</a>';
				echo '<a onfocus="this.blur()" class="navlink messageoutbox" href="?action=private&type=out">' . $langmsg['menu'][5] . '</a>';
				echo '</span>';
			}
			
			#options menu
			$x = 0;
			$showoptions = '';
			if(isloggedin()){
				if(getaccess("accounts")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink accounts" href="?action=options&mod=accounts">'.$langmsg['menu'][6].'</a>';
					$x++;
				}
				if(getaccess("accesslevels")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink accesslevel" href="?action=options&mod=access">'.$langmsg['menu'][7].'</a>';
					$x++;
				}
				if(getaccess("bannedips")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink bannedips" href="?action=options&mod=banned">'.$langmsg['menu'][8].'</a>';
					$x++;
				}
				if(getaccess("newscats")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink categories" href="?action=options&mod=categories">'.$langmsg['menu'][9].'</a>';
					$x++;
				}
				if(getaccess("fileuploads")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink fileuploads" href="?action=options&mod=fileuploads">'.$langmsg['menu'][24].'</a>';
					$x++;
				}								
				if(getaccess("imageuploads")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink imageuploads" href="?action=options&mod=imageuploads">'.$langmsg['menu'][10].'</a>';
					$x++;
				}
				if(getaccess("personaloptions")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink personal" href="?action=options&mod=personal">'.$langmsg['menu'][11].'</a>';
					$x++;
				}
				if(getaccess("profile")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink profile" href="?action=options&mod=profile">'.$langmsg['menu'][12].'</a>';
					$x++;
				}
				if(getaccess("rss")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink rssfeed" href="?action=options&mod=rss">'.$langmsg['menu'][13].'</a>';
					$x++;
				}
				if(getaccess("smilies")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink smilies" href="?action=options&mod=smilies">'.$langmsg['menu'][14].'</a>';
					$x++;
				}
				if(getaccess("sysconfig")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink system" href="?action=options&mod=system">'.$langmsg['menu'][15].'</a>';
					$x++;
				}
				if(getaccess("templates")){				
					$showoptions .= '<a onfocus="this.blur()" class="navlink templates" href="?action=options&mod=template">'.$langmsg['menu'][16].'</a>';
					$x++;
				}
				if(getaccess("wordfilters")){
					$showoptions .= '<a onfocus="this.blur()" class="navlink wordfilters" href="?action=options&mod=filter">'.$langmsg['menu'][17].'</a>';
					$x++;
				}		
			}
			
			
			#if the user can't access any of the sub option menus hide the main option menu
			if($x > 0){
				echo '<a onfocus="this.blur()" class="navbase" href="javascript:expandcollapse(\'suboptions\')" ';
				if($_GET['action'] == "options"){
					echo 'style="background-image: url(\'images/navbaseover.png\');"';
				}
				echo '><span class="navbase2 optionsicon">' . $langmsg['menu'][21] . '</span></a>';
				echo '<span class="subnav" id="suboptions"'; 
				if($_GET['action'] == "options" && $_GET['mod'] !== "private"){
					echo '>';
				}else{
					echo 'style="display: none">';
				}				
				echo $showoptions;							
				echo '</span>';							
			}
			
			
			#help menu
			if(getaccess("help")){
				echo '<a onfocus="this.blur()" class="navbase" target="_NEW" href="http://code.google.com/p/n-13news/wiki/Installation" ';
				if($_GET['action'] == "help"){
					echo 'style="background-image: url(\'images/navbaseover.png\');"';
				}			
				echo '><span class="navbase2 helpicon">' . $langmsg['menu'][22] . '</span></a>';
			}
			
			#logout
			echo '<a onfocus="this.blur()" class="navbase" href="?action=logout"><span class="navbase2 logouticon">' . $langmsg['menu'][23] . '</span></a>'; 
		?>			

			
		</div>
		<br style="clear: both" />
	</div>
	<div style="margin-top: -3px; background-position: <?php if($_SESSION['userlogged20'] == "true"){echo "126px"; }else{ echo "0px"; } ?>; background-image: url('images/content_bottom.png'); background-repeat: no-repeat; height: 12px"></div>
<br />

<div style="width: <?php if(isloggedin()){echo "855px"; }else{ echo "729px"; } ?>"><div style="float: right; width: 729px"><span style="color: #FFFFFF">Powered by <a style="color: rgb(255, 255, 255);" href="http://network-13.com">N-13 News <?php echo $version; ?></a> © 2010</span>	</div></div>
</div>
<?php
if(isloggedin()){
	if(!$_GET['action']){
		#I put this here instead of the home module incase something happens to Network-13, if the script can't reach the site at least the page will have already finished loading and won't pause half way through.
		echo "<script type=\"text/javascript\" src=\"http://network-13.com/versioncheck/?version=$version\"></script>";
	}
}
?>					
</div>
</div>
<div id="fade" class="black_overlay"></div>
</body>
</html>