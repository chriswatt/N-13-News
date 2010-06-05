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
if(!isset($_SESSION)){
	session_start();
}
ob_end_clean();

if(get_magic_quotes_gpc()){
	foreach($_POST AS $g=>$d){
		if(!is_array($_POST[$g])){
			$_POST[$g] = stripslashes($_POST[$g]);
		}
	}
}


// some variables 
$linkprefix = (empty($linkprefix)) ? '' : $linkprefix;
$_SESSION['lastmsg'] = (empty($_SESSION['lastmsg'])) ? '' : $_SESSION['lastmsg'];

// 1 = makes resized thumbnails thumbnails clickable, defaults 0
$image_clickable = (empty($image_clickable)) ? '0' : '1';

// delimiter used when splitting up the page so ajax comments can be used
if(!defined('DELIMITER')){ define('DELIMITER', '<!-- ####@@@**split**@@@### -->'); }

require_once(dirname(__FILE__) . '/db.php');
require_once(dirname(__FILE__) . '/config.php');
require_once(dirname(__FILE__) . '/language/' . $default_index_language . '.php');

// check if auth cookie has been set
checkcookie();

// default language to be used on index.php
$_SESSION['language'] = str_replace(".php", "", $default_index_language);

// 1 = show archived news articles, defaults 0
$archives = (empty($archives)) ? '0' : '1';

$url['1']		= (empty($url['1'])) ? '' : $url['1'];
$url['2']		= (empty($url['2'])) ? '' : $url['2'];
$url['3']		= (empty($url['3'])) ? '' : $url['3'];
$url['4']		= (empty($url['4'])) ? '' : $url['4'];

$friendlytitle			= (empty($url['4'])) ? '' : $url['4'];
$_GET['id']				= (empty($_GET['id'])) ? '' : $_GET['id'];
$_GET['goto']			= (empty($_GET['goto'])) ? '' : $_GET['goto'];
$_GET['deletecomment']	= (empty($_GET['deletecomment'])) ? '' : $_GET['deletecomment'];
$_GET['logout']			= (empty($_GET['logout'])) ? '' : $_GET['logout'];


$static = (empty($static)) ? '' : $static;
$_POST['ajax'] = (empty($_POST['ajax'])) ? '' : $_POST['ajax'];
$_POST['login_s1'] = (empty($_POST['login_s1'])) ? '' : $_POST['login_s1'];


if(FRIENDLY){
	if($_POST['ajax'] == "true"){
		if(!defined('ID')){ define('ID', $_POST['id']); }
	}else{
		if(!defined('ID')){ define('ID', $url['2']); }
	}
	$goto = $url['2'];
}else{
	if($_POST['ajax'] == "true"){
		if(!defined('ID')){ define('ID', $_POST['id']); }
	}else{
		if(!defined('ID')){ define('ID', $_GET['id']); }
	}
	$goto = $_GET['goto'];
}
if($goto == "download"){
	getdownload();
}


$showstats = (empty($showstats)) ? '' : $showstats;
// show news stats
if($showstats){
	showstats();
}

// delete user comments
if($_GET['deletecomment']){
	deletecomment();
}

// logout
if($_GET['logout']){
	dologout();
}

if($_POST['ajax'] == "true"){
	if(!$static){
		$_SESSION['langtype'] = "index";
		if(banned()){
			echo BANNEDMSG;
		}else{
			if(REGCOMMENT == "1"){
				if(isloggedin()){
					echo checkcomment();
				}else{
					
				}
			}else{
				echo checkcomment();
			}
		}
	}
}

// login form
if(!$static){
	if($_POST['login_s1']){
		$_POST['skey'] = (empty($_POST['skey'])) ? '' : $_POST['skey'];
		$skey = $_POST['skey'];
		$loginerror = '';
		if(checkcaptcha($skey, LOGINVERIFICATION)){
			if(checklogin()){
				$loginerror = '';
			}else{
				$loginerror = $langmsg['login'][8];
			}
		}else{
			$loginerror = $langmsg['login'][7];
		}
	}
}

$_POST['rating'] = (empty($_POST['rating'])) ? '' : $_POST['rating'];
if($_POST['rating'] == "true"){
	echo DELIMITER;
	echo $_POST['parent'];
	echo DELIMITER;
	$result = addrating($parent = $_POST['parent'], $value = $_POST['value']);
	if($result == "Success"){
		echo $langmsg['news'][13];
	}elseif($result == "Already rated"){
		echo $langmsg['news'][14];
	}else{
		echo "no dice";
	}
	die();
}
unset($_SESSION['langtype']);
if($_POST['ajax'] !== "true" || ID == ""){
	if(!$static){
?>		<script type="text/javascript">
		//<![cdata[
		function createXMLHttpRequest(){
			if (window.ActiveXObject){
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}else if (window.XMLHttpRequest){
				xmlHttp = new XMLHttpRequest();
			}
		}
		
		
		function senddata(type,parent,value){
			createXMLHttpRequest();
			if(type == ''){
				xmlHttp.onreadystatechange = handleStateChange;
				xmlHttp.open("POST", "?system=news", true);
				xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				var username = document.getElementById('name').value;
				username = username.replace('&', '%26');
				var email = document.getElementById('email').value;
				email = email.replace('&', '%26');
				var message = document.getElementById('message').value;
				message = message.replace('&', '%26');
				var skey = '';
				var recaptcha_response_field = '';
				var recaptcha_challenge_field = '';
				if(document.getElementById('skey')){
					skey = document.getElementById('skey').value;
				}else if(document.getElementById('recaptcha_response_field')){
					recaptcha_response_field = document.getElementById('recaptcha_response_field').value;
					recaptcha_challenge_field = document.getElementById('recaptcha_challenge_field').value;
				}
				var id = escape('<?php echo ID; ?>');
				xmlHttp.send("ajax=true&id="+id+"&name="+username+"&email="+email+"&message="+message+"&skey="+skey+"&recaptcha_response_field="+recaptcha_response_field+"&recaptcha_challenge_field="+recaptcha_challenge_field);
			}else{
				xmlHttp.onreadystatechange = handleStateChangeRating;
				xmlHttp.open("POST", "?system=news", true);
				xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xmlHttp.send('rating=true&parent='+parent+'&value='+value);
			}
		}
		
		function handleStateChangeRating() {
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				var data = xmlHttp.responseText.split('<?php echo DELIMITER; ?>');
				if(document.getElementById('ratingstars_text_'+data[1])){
					document.getElementById('ratingstars_text_'+data[1]).innerHTML = data[2];
				}else{
					alert(data[2]);
				}
			}
		}
		
		function handleStateChange() {
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				var data = xmlHttp.responseText;
				data = data.split('<?php echo DELIMITER; ?>');
				
				if(data[1].search("invalidkey") != -1){
					alert('<?php echo $langmsg['news'][2]; ?>');
				}else{
					alert(data[1]);
				}
				document.getElementById('allbody').innerHTML = data[2];
				if(document.getElementById('skey')){
					document.getElementById('skeyimage').src = document.getElementById('skeyimage').src + '#' + (new Date()).getTime();
				}else if(document.getElementById('recaptcha_div')){
					Recaptcha.create("<?php echo PUBLICKEY; ?>",
					"recaptcha_div", {
					   callback: Recaptcha.focus_response_field
					});
				}				
			}
		}

		function submitcomment(useajax){
			if(useajax == 'yes'){
				senddata('');
				return false;	
			}else{
				return true;
			}
		}

		function ratingstarshover(parent, value){
			var starslocation = '<?php echo IMAGEPATH; ?>';
			for(i=1; i<=5; i++){
				if(value < i){
					document.getElementById(parent+'_stars_'+i).src = starslocation + 'stars_6.png';
				}else{
					document.getElementById(parent+'_stars_'+i).src = starslocation + 'stars_7.png';
				}
			}
		}
		//]>
		</script>
		

<?php
		if(!$static){
			echo '<div id="allbody">';
		}
	}
}


$template = (empty($template)) ? '' : $template;
$templatecount = DataAccess::fetch("SELECT id FROM " . NEWS_TEMPLATES . " WHERE name = ?", $template);
if(count($templatecount) == 1){
	$templateid = $templatecount['0']['id'];
}else{
	$templateid = TEMPLATE;
}							

// Get the template data
$templatedata = DataAccess::fetch("SELECT searchform, searchresults, loginform, newsstructure, profile, template, uploadedfiles, npagintation, comments, commentsform, registrationform, cpagintation, commentsstructure FROM " . NEWS_TEMPLATES . " WHERE id = ?", $templateid);
$template				= $templatedata['0']['template'];
$uploadedfilestemplate	= $templatedata['0']['uploadedfiles'];
$npagintation			= $templatedata['0']['npagintation'];
$newsstructure			= $templatedata['0']['newsstructure']; 
$commentstemplate		= $templatedata['0']['comments'];
$regform				= $templatedata['0']['registrationform'];
$profiletemplate		= $templatedata['0']['profile'];
$commentsform			= $templatedata['0']['commentsform'];
$cpagintation			= $templatedata['0']['cpagintation'];
$loginform				= $templatedata['0']['loginform'];
$h						= $templatedata['0']['commentsstructure'];
$searchform				= $templatedata['0']['searchform'];
$searchresults			= $templatedata['0']['searchresults'];
unset($templatedata);

$search			= (empty($search)) ? '' : $search;
$register		= (empty($register)) ? '' : $register;
$_GET['page']	= (empty($_GET['page'])) ? '' : $_GET['page'];


if($goto == "search" || $search == true){
	echo showsearchform();
}elseif($goto == "register" || $register == "true"){
	if(REGISTRATIONALLOW == "0"){
		echo $langmsg['news'][6];
	}else{ 
		checkregistration();
	}
}elseif($goto == "profile"){
	if(FRIENDLY){
		$user = $url['3'];
	}else{
		$user = $_GET['user'];
	}
	$row = DataAccess::fetch("SELECT user,pass,email,vcode,avatar,profile_image,profile_quote,profile_occupation,profile_hobbies,profile_interests,profile_homepage,profile_sex,profile_location,profile_age,profile_name,alertmsg,access,uid FROM " . NEWS_USERS . " WHERE user = ?" , $user);
	if(count($row) == 1){
		$profiletemplate = str_replace("{username}",$row['0']['user'],$profiletemplate);
		if(!$row['0']['profile_image']){
			$profiletemplate = str_replace("{image}","",$profiletemplate);
		}else{
			$profiletemplate = str_replace("{image}","<img src=\"" . $row['0']['profile_image'] . "\" alt=\"Profile picture for " . $row['0']['user'] . "\">",$profiletemplate);
		}
		$profiletemplate = str_replace("{name}",$row['0']['profile_name'],$profiletemplate);
		$profiletemplate = str_replace("{age}",$row['0']['profile_age'],$profiletemplate);
		$profiletemplate = str_replace("{sex}",$row['0']['profile_sex'],$profiletemplate);
		$profiletemplate = str_replace("{interests}",$row['0']['profile_interests'],$profiletemplate);
		$profiletemplate = str_replace("{hobbies}",$row['0']['profile_hobbies'],$profiletemplate);
		$profiletemplate = str_replace("{location}",$row['0']['profile_location'],$profiletemplate);
		$profiletemplate = str_replace("{occupation}",$row['0']['profile_occupation'],$profiletemplate);
		$profiletemplate = str_replace("{quote}",$row['0']['profile_quote'],$profiletemplate);
		if(!$row['0']['profile_homepage']){
			$profiletemplate = str_replace("[homepage-link]","",$profiletemplate);
			$profiletemplate = str_replace("[/homepage-link]","",$profiletemplate);
		}else{
			$profiletemplate = str_replace("[homepage-link]","<a href=\"http://" . $row['0']['profile_homepage'] . "\" target=\"_NEW\">",$profiletemplate);
			$profiletemplate = str_replace("[/homepage-link]","</a>",$profiletemplate);
		}
		echo "<!-- Profile -->";
		echo $profiletemplate;

	}else{
		echo "User not found.";
	}
}else{
	#$cat[] = "Designs";
	#$cat[] = "Waffles";
	#$cat[] = "Test";
	
	#$cat[] = "fakecat";
	#$cat[] = "Waffles";
	
	#grab all category names/ids then check them against any cats the user has specified
	#create a dynamic sql to select the ids of all stories that match any of the user specified cats
	#if no cats have been specified skip this
	$cat = (empty($cat)) ? array() : $cat;
	$f = (empty($f)) ? '' : $f;
	$u = (empty($u)) ? '' : $u;
	if(count($cat) > 0){
		$allcats = DataAccess::fetch("SELECT id, name FROM " . NEWS_CATS);
		$j = 0;
		$catids = array();
		foreach($allcats AS $acat){ 
			if(in_array($acat['name'],$cat)){
				$catids[] = $acat['id'];
				$j++;
			}
		}
		$e = implode(",",$catids);
		if($j > 0){ #if all the cats the user has entered don't exist, skip this part and select all.		
			$allstories = DataAccess::fetch("SELECT DISTINCT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'news' AND catid IN ($e)");
			$storyids = array();
			foreach($allstories AS $row){
				$storyids[] = $row['storyid'];
			}
			$f = implode(",", $storyids);
			if($f){ $f = "AND id IN ($f)"; }
		}
	}
	#$author[] = "Chris";
	#$author[] = "fakeauthor";
	#$author[] = "test";
	#grab the ids of any authors the user specified
	#create a dynamic sql of the ids of the authors
	#if no authors have been specified skip this
	$author = (empty($author)) ? array() : $author;
	if(count($author) > 0){
		$allusers = DataAccess::fetch("SELECT uid, user FROM " . NEWS_USERS);
		$j = 0;
		$userids = array();
		foreach($allusers AS $user){
			if(@in_array($user['user'], $author)){
				$userids[] = $user['uid'];
				$j++;	
			}
		}	
		if($j > 0){ #if all the authors the user has entered don't exist, skip this part and select all
			$u = implode(",",$userids);
			if($u){
				$u = "AND author IN ($u)";
			}
		}	
	}


	#select the total amount of stories by using the already grabbed ids
	$totalnews = DataAccess::fetch("SELECT COUNT(id) AS total FROM " . NEWS_ARTICLES . " WHERE archived = ? AND approved = ? $f $u", $archives, "1");
	$totalnews = $totalnews['0']['total'];


	$nppage = (empty($nppage)) ? '' : $nppage;
	$cppage = (empty($cppage)) ? '' : $cppage;
	if(!$nppage){
		$nppage = NPPAGE;
	}
	if(!$cppage){
		$cppage = CPPAGE;
	}


	if(FRIENDLY){
		$page = $url['3'];
	}else{
		$page = $_GET['page'];
	}

	if(is_numeric($page)){ }else{ $page = 1; }
	if($page == ""){
		$page = 1;
	}

	$orderby = (empty($orderby)) ? '' : $orderby;
	if(!$orderby){
		$orderby = 'timestamp';
	}elseif($orderby == "rating"){
		$orderby = 'rating';
	}elseif($orderby == "views"){
		$orderby = 'viewcount';
	}elseif($orderby == "comments"){
		$orderby = 'commentcount';
	}elseif($orderby == "title"){
		$orderby = 'title';
	}else{
		$orderby = 'timestamp';
	}



	$newsorder = (empty($newsorder)) ? '' : $newsorder;
	if(!$newsorder){
		$newsorder = NEWSORDER;
	}else{
		if($newsorder == "DESC"){
		
		}else{
			$newsorder = "ASC";
		}
	}


	if(FRIENDLY){
		$page = $url['3'];
	}else{
		$page = $_GET['page'];
	}

	$amounttoshow = $nppage;
	$amountofpages = ceil($totalnews / $amounttoshow);					
	if(!$page){ 		
		$start = 0;
		$page = 1;
	}else{
		if(!is_numeric($page)){
			$page = 1;
		}
		if($page > $amountofpages){
			$start = 0;
			$page = 1;	
		}else{								
			$start = $page * $amounttoshow - $amounttoshow;
		}	
	}							


	// Grab all news posts
	$sql = "SELECT 
	(SELECT COUNT(uid) FROM " . NEWS_GROUPCATS . " WHERE storyid = " . NEWS_ARTICLES . ".id AND type = 'news') AS catcount,
	(SELECT COUNT(uid) FROM " . NEWS_LINKEDFILES . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS amountoffiles,
	(SELECT COUNT(uid) FROM " . NEWS_RATING . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS ratingcount,
	" . NEWS_ACCESS . ".usehtml AS usehtml,title,story,shortstory,author,commentcount,origauthor,ip,timestamp,allowcomments,short,approved,viewcount,rating,archivedate,neverarchive,archived,id, " . NEWS_USERS . ".user, " . NEWS_ACCESS . ".name AS accessname, " . NEWS_USERS . ".profile_image, " . NEWS_USERS . ".email
	FROM " . NEWS_ARTICLES . " 
	LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid 
	LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE approved = '1' $f $u AND archived = '" . $archives . "' ORDER BY $orderby $newsorder LIMIT $start, $amounttoshow";

	$newsdata = DataAccess::fetch($sql);
	if(ID == "" || ID == "0" || $static){
		$template5 = '';
		$allnews = '';
		$oneortwo = 'one';
		foreach($newsdata AS $news){
			$allnews .= formatnews($template,'0',$news);
		}

			
		// news pagintation
		$pages			= newspagintation('pages');
		$newpages		= newspagintation('newpages');
		$firstpagelink	= newspagintation('firstpage');
		$plink			= newspagintation('prevlink');
		$lastpagelink	= newspagintation('lastpage');
		$nlink			= newspagintation('nextlink');		
		$previouspage	= newspagintation('previouspage');
		$nextpage		= newspagintation('nextpage');
		$currentpage	= newspagintation('currentpage');
		
		$npagintation = formatnewspagintation();

		if(!$nlink AND !$plink){
			$allnewspagintation = "";
		}else{
			$allnewspagintation = $npagintation;
		}

		$newsstructure = str_replace("{news}",$allnews,$newsstructure);
		$newsstructure = str_replace("{pagintation}",$allnewspagintation,$newsstructure);
		if(ENABLETAIL == "1"){
			$newsstructure .= TAIL;
		}
		echo $newsstructure;

	}elseif(!$static){
		$row = DataAccess::fetch("SELECT 
		(SELECT COUNT(uid) FROM " . NEWS_LINKEDFILES . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS amountoffiles,
		(SELECT COUNT(uid) FROM " . NEWS_RATING . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS ratingcount,
		" . NEWS_ACCESS . ".usehtml AS usehtml,title,story,shortstory,author,origauthor,ip,timestamp,allowcomments,short,approved,viewcount,rating,archivedate,neverarchive,commentcount,archived,id, " . NEWS_USERS . ".user, " . NEWS_USERS . ".profile_image, " . NEWS_USERS . ".avatar AS useravatar, " . NEWS_ACCESS . ".name AS accessname, " . NEWS_USERS . ".email 
		FROM " . NEWS_ARTICLES . "
			LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid
			LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid
		WHERE id = ?", ID);
		if(count($row) < 1){
			// article doesn't exist, check if $invalid has been specified and include that file.
			// otherwise do nothing
			if(isset($invalid)){
				require_once($invalid);
			}
		}else{

			###update viewcount
			DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET viewcount = viewcount + 1 WHERE id = ?", ID);
			$allowcomments = $row['0']['allowcomments'];

			$commentsform = formatcommentsform($commentsform);
			$show = '';
			
			if(!$_POST['ajax']){
				if(banned()){
					$show .= BANNEDMSG;
				}else{
					if(isloggedin()){
						if($_POST['S1']){
							$show .= checkcomment();
						}
						$show .= $commentsform;					
					}else{
						if(REGCOMMENT == "1"){
							$show .= '';
						}else{
							if($_POST['S1']){
								$show .= checkcomment();
							}
							$show .= $commentsform;
						}
					}
				}
			}else{
				if(banned()){
					$show .= BANNEDMSG;
				}else{
					if(isloggedin()){
						$show .= $commentsform;					
					}else{
						if(REGCOMMENT == "1"){
							$show .= '';
						}else{
							$show .= $commentsform;
						}
					}					
				}
			}



			$loginform = formatloginform($loginform);
			if(REGCOMMENT == "1"){
				if(isloggedin()){
					$allloginform = '';
				}else{
					$allloginform = $loginform;
				}
			}else{
				$allloginform = '';
			}
			
			
			$numcomments = $row['0']['commentcount'];

			#$page = slash2($_GET['page']);
			if(FRIENDLY){
				$page = $url['3'];
			}else{
				$page = $_GET['page'];
			}
			$amounttoshow = $cppage;
			$amountofpages = ceil($numcomments / $cppage);					
			if(!$page){ 		
				$start = 0;
				$page = 1;
			}else{
				if(!is_numeric($page)){
					$page = 1;
				}
				if($page > $amountofpages){
					$start = 0;
					$page = 1;	
				}else{								
					$start = $page * $amounttoshow - $amounttoshow;
				}	
			}

			$oneortwo = 'one';
			$singlenews = formatnews($template,'1',$row['0']);
			$pid = $row['0']['id'];
			$allcomments = DataAccess::fetch("SELECT 
			" . NEWS_COMMENTS . ".user AS user, " . NEWS_COMMENTS . ".email,message,timestamp,approved,ip,pid,id," . NEWS_USERS . ".avatar AS useravatar," . NEWS_USERS . ".uid AS useruid," . NEWS_ACCESS . ".name AS accessname
			FROM " . NEWS_COMMENTS . "
			LEFT JOIN " . NEWS_USERS . " ON " . NEWS_COMMENTS . ".user = " . NEWS_USERS . ".user
			LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".uid = " . NEWS_ACCESS . ".uid
			WHERE pid = ? AND approved = ? ORDER BY timestamp " . COMMENTSORDER . " LIMIT $start, $amounttoshow", $pid, "1");
			
			$allformatedcomments = '';
			$oneortwo = 'one';
			foreach($allcomments AS $singlecomment){
				$allformatedcomments .= formatcomments($commentstemplate,$singlecomment);
			}
			
			$cfriendlytitle = $friendlytitle;
			$cpages			= commentspagintation('cpages');
			$newpages		= commentspagintation('newpages');
			$firstpagelink	= commentspagintation('firstpagelink');
			$nlink			= commentspagintation('nextlink');
			$plink			= commentspagintation('prevlink');
			$lastpagelink	= commentspagintation('lastpagelink');
			$cpreviouspage	= commentspagintation('previouspage');
			$cnextpage		= commentspagintation('nextpage');;
			$ccurrentpage	= commentspagintation('currentpage');
			$cpagintation	= formatcommentspagintation();

			
			if(!$nlink AND !$plink){
				$allcommentspagintation = "";
			}else{
				$allcommentspagintation = $cpagintation;
			}				
			if($allowcomments == "1" || $allowcomments == "2"){
				$allcommentsform = $show;
			}else{
				$allcommentsform = "";
			}


			if(!$static){ echo DELIMITER; }

			$h = str_replace("{news}",$singlenews,$h);
			$h = str_replace("{comments}",$allformatedcomments,$h);
			$h = str_replace("{commentspagintation}",$allcommentspagintation,$h);
			$h = str_replace("{loginform}", $allloginform, $h);
			$h = str_replace("{commentsform}",$allcommentsform,$h);
			if(isloggedin()){
				$h = str_replace("{username}", $_SESSION['name'], $h);
				$h = preg_replace('#\[loggedin\](.*?)\[\/loggedin\]#si', '$1', $h);
			}else{
				$h = str_replace("{username}", "", $h);
				$h = preg_replace('#\[loggedin\](.*?)\[\/loggedin\]#si', '', $h);
			}
			#sendto form
			$h = str_replace("{ratingsform}", "", $h);
			$h = str_replace("{sendtoform}", "", $h);
			if(ENABLETAIL == "1"){
				$h .= TAIL;
			}
			echo $h;
			if(!$static){ echo DELIMITER; }
		}
	}
}
if($_POST['ajax'] !== "true"){
	if(!$static){ 
		echo "</div>";
	}
}
unset($ratingsform,$sendtoform,$search,$allnews,$singlenews,$i,$cat,$author,$nppage,$orderby,$newsorder,$catids,$j,$e,$f,$u,$s,$v,$k,$w,$image_maxwidth,$image_maxheight,$width,$height,$static,$templateid,$template,$template2,$template5,$templateid,$commentstemplate,$commentstemplate2,$commentstemplate5,$commentsform,$allcommentsform,$h,$show,$pages,$cpages,$allcomments,$archives,$catids,$storyids,$userids,$image_clickable,$invalid,$register);
?>