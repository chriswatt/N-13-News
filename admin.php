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



#options menu
$x = 0;
$showoptions = '';
if(isloggedin()){
	if($_GET['action'] == "" || $_GET['action'] == "home"){
		if(getaccess("news")){
			#echo "X";
		}
	}
	
	if($_GET['action'] == "options"){
		if(getaccess("accounts")){
			if($_GET['mod'] == "accounts"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="'.$active.'" href="?action=options&mod=accounts">'.$langmsg['menu'][6].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("accesslevels")){
			if($_GET['mod'] == "access"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=access">'.$langmsg['menu'][7].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("bannedips")){
			if($_GET['mod'] == "banned"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=banned">'.$langmsg['menu'][8].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("newscats")){
			if($_GET['mod'] == "categories"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=categories">'.$langmsg['menu'][9].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("fileuploads")){
			if($_GET['mod'] == "fileuploads"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=fileuploads">'.$langmsg['menu'][24].'</a>';
			$active = '';
			$x++;
		}								
		if(getaccess("imageuploads")){
			if($_GET['mod'] == "imageuploads"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=imageuploads">'.$langmsg['menu'][10].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("personaloptions")){
			if($_GET['mod'] == "personal"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=personal">'.$langmsg['menu'][11].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("profile")){
			if($_GET['mod'] == "profile"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=profile">'.$langmsg['menu'][12].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("rss")){
			if($_GET['mod'] == "rss"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=rss">'.$langmsg['menu'][13].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("smilies")){
			if($_GET['mod'] == "smilies"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=smilies">'.$langmsg['menu'][14].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("sysconfig")){
			if($_GET['mod'] == "system"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=system">'.$langmsg['menu'][15].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("templates")){	
			if($_GET['mod'] == "template"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=template">'.$langmsg['menu'][16].'</a>';
			$active = '';
			$x++;
		}
		if(getaccess("wordfilters")){
			if($_GET['mod'] == "filter"){ $active = 'subMenuActive'; }else{ $active = 'subMenu'; }
			$showoptions .= '<a class="' . $active . '" href="?action=options&mod=filter">'.$langmsg['menu'][17].'</a>';
			$active = '';
			$x++;
		}
	}
}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/main.php"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
    
	<link href="css/n13styles.css" rel="stylesheet" type="text/css" />
	
	<title>N-13 News <?php echo $version; ?></title>
</head>
<body>

<?php
	if(!isloggedin() || !$_GET['action'] || $_GET['action'] == "home" || $x < 1){
?><style>
#systemCont {
	width:749px;
}

#outterCont {
	
}
#menuCont {
	
}
#subMenuCont {
	display: none;
}
</style><?php
	}
?>

<!-- TOP MENU -->
<div id="outterCont">
<div id="menuCont">
	<?php

		

	
		if(isloggedin()){
			echo '<div id="menu" style="">';
			echo '<a class="menuButton menuButtonActive menuButtonHome" href="?">' . $langmsg['menu'][18] . '</a>  <img src="images/menu/menuDivider.jpg" width="2" height="27" />';
			if(getaccess('news')){
				echo '<a class="menuButton menuButtonArticles" href="?action=editnews">' . $langmsg['menu'][19] . '</a>  <img src="images/menu/menuDivider.jpg" width="2" height="27" />';
			}
			if(getaccess('privatemsgs')){
				echo '<a class="menuButton menuButtonMessages" href="#">' . $langmsg['menu'][20] . '</a>  <img src="images/menu/menuDivider.jpg" width="2" height="27" />';
			}
			echo '<a class="menuButton menuButtonOptions" href="?action=options&mod=system">' . $langmsg['menu'][21] . '</a>  <img src="images/menu/menuDivider.jpg" width="2" height="27" />';
			if(getaccess('help')){
				echo '<a class="menuButton menuButtonHelp" href="#">' . $langmsg['menu'][22] . '</a>  <img src="images/menu/menuDivider.jpg" width="2" height="27" />';
			}
			echo '<a class="menuButton menuButtonLogout" href="?action=logout">' . $langmsg['menu'][23] . '</a>';
			
		}else{
			echo '<div id="menu" style="visibility: hidden">';
		}
	?>

	</div><!--menu-->
</div><!--menuContainer-->
<div id="menuShadow"></div>
</div>	



<!-- SUB MENU -->
<div id="systemCont">
	
	
	<!-- MAIN SYSTEM CONTENT -->
	<div id="pageCont">

	<div id="subMenuCont" style="margin-left: -190px; margin-bottom: 20px">
		<?php
		#if the user can't access any of the sub option menus hide the main option menu
		if($x > 0){
			echo $showoptions;
		}
		?>
    	
	</div><!--subMenu-->

			
			<?php
				require_once('modules/admindata.php');			
			?>

			

	
	
	<!-- FOOTER or BOTTOM LINKS -->
	<div id="btmLinks">
	  <div id="eMonkeyz">DESIGNED BY:<div id="eMonkeyzIcon"><a href="http://emonkeyz.com" target="_blank"><img src="images/page/spacer.gif" width="27" height="30" border="0" /></a></div></div>
		<div id="network13"><a href="http://network-13.com">N-13 News Version 4.0</a></div>
	</div><!--btmLinks-->
</div><!--systemCont-->

<?php
if(isloggedin()){
	if(!$_GET['action']){
		#I put this here instead of the home module incase something happens to Network-13, if the script can't reach the site at least the page will have already finished loading and won't pause half way through.
		echo "<script type=\"text/javascript\" src=\"http://network-13.com/versioncheck/?version=$version\"></script>";
	}
}
?>					

<div id="fade" class="black_overlay"></div>
</body>
</html>