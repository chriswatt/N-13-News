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

define('NEWS_ARTICLES',		'news30_story');
define('NEWS_USERS',		'news30_users');
define('NEWS_COMMENTS',		'news30_comments');
define('NEWS_OPTIONS',		'news30_options');
define('NEWS_SMILIES',		'news30_smilies');
define('NEWS_FILTER',		'news30_filter');
define('NEWS_CATS',			'news30_cats');
define('NEWS_GROUPCATS',	'news30_groupcats');
define('NEWS_TEMPLATES',	'news30_templates');
define('NEWS_ACCESS',		'news30_access');
define('NEWS_PRIVATE',		'news30_private');
define('NEWS_PRIVATEOUT',	'news30_privateout');
define('NEWS_BANNED',		'news30_banned');
define('NEWS_ACCESSLOGS',	'news30_accesslogs');
define('NEWS_FEEDS',		'news30_rssfeeds');
define('NEWS_RATING',		'news30_rating');
define('NEWS_IMAGES',		'news30_images');
define('NEWS_FILES',		'news30_files');
define('NEWS_LINKEDFILES',	'news30_linkedfiles');


/* declared variables */
$_SESSION['langtype']		= (empty($_SESSION['langtype'])) ? 'false' : $_SESSION['langtype'];
$_SESSION['userlogged20']	= (empty($_SESSION['userlogged20'])) ? 'false' : $_SESSION['userlogged20'];
$_SESSION['language']		= (empty($_SESSION['language'])) ? '' : $_SESSION['language'];
/* end of declaraed variables */
// database extension
if(defined('EXTENSION')){
	require_once(ABSPATH . '/class/' . EXTENSION . ".php");
}else{
	require_once(ABSPATH . '/class/mysql.php');
}

function x($s){
	$y = array('English','Swedish','Dutch','French','German','Italian','Portugues','Spanish','Turkish','Finnish','Filipinp','Indonesian','Malay','Swahili','Welsh');
	$n = array('Arabic','Chinese Simple','Chinese Traditional','Japanese','Korean','Russian','Thai','African','Albanian','Belarusian','Bulgarian','Catalan','Czech','Croatian','Danish','Estonian','Galician','Greek','Haitian','Hindi','Hebrew','Hungarian','Icelandic','Irish','Latvian','Macedonian','Maltese','Norwegian','Persian','Polish','Romanian','Serbian','Slovak','Slovenian','Ukrainian','Vietnamese','Yiddish','Lithuanian');
	if($_SESSION['langtype'] !== "dropdown" || $_SESSION['langtype'] == "index"){
		if(in_array($_SESSION['language'], $n)){
		
		}
		
		if(in_array($_SESSION['language'], $y)){
			$s = utf8_encode($s);	
		}
	}
	$s = str_replace("&lt;","<",$s);
	$s = str_replace("&gt;",">",$s);
	return $s;
}

function esc($str){
	$str = str_replace("'", "\\'", $str);
	return $str;
}

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        require($filename);
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}
function isloggedin(){
	if($_SESSION['userlogged20'] == "true"){
		return true;
	}else{
		return false;
	}
}
function checkregistration(){
	global $regform, $langmsg;
	$error = (empty($error)) ? '' : $error;
	$_POST['registrationusername']	= (empty($_POST['registrationusername'])) ? '' : $_POST['registrationusername'];
	$_POST['registrationemail']		= (empty($_POST['registrationemail'])) ? '' : $_POST['registrationemail'];
	$_POST['registrationpassword1']	= (empty($_POST['registrationpassword1'])) ? '' : $_POST['registrationpassword1'];
	$_POST['registrationpassword2']	= (empty($_POST['registrationpassword2'])) ? '' : $_POST['registrationpassword2'];
	$_POST['registrationskey']		= (empty($_POST['registrationskey'])) ? '' : $_POST['registrationskey'];
	$_POST['skey']					= (empty($_POST['skey'])) ? '' : $_POST['skey'];
	$_POST['register_submit']		= (empty($_POST['register_submit'])) ? '' : $_POST['register_submit'];
	
	$regform			= str_replace("{username}",displayhtml($_POST['registrationusername']),$regform);
	$regform			= str_replace("{email}",displayhtml($_POST['registrationemail']),$regform);
	$regform			= str_replace("{recaptcha}", "<div id=\"recaptcha_div\">" . recaptcha_get_html(PUBLICKEY, $error) . "</div>", $regform);
	$submittedusername	= $_POST['registrationusername'];
	$submittedemail		= $_POST['registrationemail'];
	$submittedpassword1	= $_POST['registrationpassword1'];
	$submittedpassword2	= $_POST['registrationpassword2'];
	$submittedskey		= $_POST['registrationskey'];		
	$userexists			= DataAccess::fetch("SELECT COUNT(uid) AS userexists FROM " . NEWS_USERS . " WHERE user = ?", $submittedusername);
	$userexists			= $userexists['0']['userexists'];
	$emailexists		= DataAccess::fetch("SELECT COUNT(uid) AS emailexists FROM " . NEWS_USERS . " WHERE email = ?", $submittedemail);
	$emailexists		= $emailexists['0']['emailexists'];
	$skey 				= $_POST['skey'];

	if(!$_POST['register_submit']){
			$regform = str_replace("{errormessage}","",$regform);
			echo $regform;
	}elseif(checkcaptcha($skey, REGISTRATIONVERIFICATION)){	
		if(!$submittedusername){
			$regform = str_replace("{errormessage}",$langmsg['news'][29],$regform);
			echo $regform;
		}elseif($userexists > 0){
			$regform = str_replace("{errormessage}",$langmsg['news'][30],$regform);
			echo $regform;
		}elseif($emailexists > 0){
			$regform = str_replace("{errormessage}",$langmsg['news'][31],$regform);
			echo $regform;			
		}elseif(!$submittedemail){
			$regform = str_replace("{errormessage}","",$regform);
			echo $regform;
		}elseif(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^",$submittedemail)){
			$regform = str_replace("{errormessage}",$langmsg['news'][33],$regform);
			echo $regform;
		}elseif(!$submittedpassword1){
			$regform = str_replace("{errormessage}",$langmsg['news'][34],$regform);
			echo $regform;
		}elseif($submittedpassword1 AND !$submittedpassword2){
			$regform = str_replace("{errormessage}",$langmsg['news'][35],$regform);
			echo $regform;
		}elseif($submittedpassword1 !== $submittedpassword2){
			$regform = str_replace("{errormessage}",$langmsg['news'][36],$regform);
			echo $regform;
		}else{
			$submittedpass = md5(SALT . $submittedpassword1);
			DataAccess::put("INSERT INTO " . NEWS_USERS . " (user,newpass,email,alertmsg,access) VALUES (?, ?, ?, ?, ?)", $submittedusername, $submittedpass, $submittedemail, '0', REGISTRATIONACCESS); 
			$ip = $_SERVER['REMOTE_ADDR'];
			sendregisternotification($submittedusername,$submittedemail,$ip);
			unset($_SESSION['image_random_value']);
			echo str_replace("{adminpath}",ADMINPATH,$langmsg['news'][7]);
		}
	}else{
		$regform = str_replace("{errormessage}", $langmsg['news'][4], $regform);
		echo $regform;
	}
}
function showsearchform(){
	global $searchform, $searchresults, $catcutoff;
	$newstimeformat = NEWSTIME;
	$search = $searchform;
	$_POST['searchsubmit'] = (empty($_POST['searchsubmit'])) ? '' : $_POST['searchsubmit'];
	$_POST['searchstring'] = (empty($_POST['searchstring'])) ? '' : $_POST['searchstring'];	
	
	// if the search form hasn't been submitted hide the search results section
	if(!$_POST['searchsubmit']){
		$search = preg_replace("#\[results\](.*?)\[\/results\]#si", "", $search);
		$search = str_replace("{searchresults}", "", $search);
		$search = str_replace("{totalresults}", "", $search);
	}else{
		$search = preg_replace("#\[results\](.*?)\[\/results\]#si", '$1', $search);
	}
	
	$searchstring = $_POST['searchstring'];
	
	// Grab the search string and check it against the title, shortstory, story & author
	$foundresults = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".usehtml, old, title, story, shortstory, " . NEWS_ACCESS . ".name AS accessname, " . NEWS_USERS . ".user AS authorname, timestamp, " . NEWS_ARTICLES . ".id AS newsid FROM " . NEWS_ARTICLES . " 
	LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid
	LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".uid = " . NEWS_ACCESS . ".uid
	WHERE title LIKE ? OR story LIKE ? OR shortstory LIKE ? OR " . NEWS_USERS . ".user LIKE ? ORDER BY timestamp DESC", "%$searchstring%", "%$searchstring%", "%$searchstring%", "%$searchstring%");
	$numresults = count($foundresults);
	$x = 1;
	$finalresults = '';
	$oneortwo = 'one';
	foreach($foundresults AS $result){
		// loop through results and replace the tags
		$newresults = $searchresults;
		$usehtml = $result['usehtml'];
		$categories = '';
		$cats = DataAccess::fetch("SELECT storyid, catid, type, uid, " . NEWS_CATS . ".name AS catname
			FROM " . NEWS_GROUPCATS . "
			INNER JOIN " . NEWS_CATS . " ON " . NEWS_GROUPCATS . ".catid = " . NEWS_CATS . ".id
			WHERE storyid = ? AND type = ? ORDER BY " . NEWS_CATS . ".name ASC", $result['newsid'], "news");
		foreach($cats AS $cat){
			$categories .= str_replace("{cat}", $cat['catname'], CATDELIMITER);
			
		}
		$categories		= substr($categories,0,strlen($categories) - $catcutoff);
		$newresults		= str_replace("{categories}",$categories,$newresults);		
		$stampzone		= $result['timestamp'];
		$newresults		= str_replace("{oneortwo}", $oneortwo, $newresults);
		$newresults		= str_replace("{numresult}", $x, $newresults);
		$newresults		= str_replace("{categories}", $categories, $newresults);
		$newresults		= str_replace("{title}",bbcode($result['title'],$usehtml,'1',$result['old']), $newresults);
		$newresults		= str_replace("{date}",strftime($newstimeformat,$stampzone),$newresults);
		$newresults		= str_replace("{friendlytitle}", makefriendly($result['title']), $newresults);
		$newresults		= str_replace("{author}","<span class=\"" . $result['accessname'] . "\">" . $result['authorname'] . "</span>", $newresults);
		$newresults		= str_replace("{id}", $result['newsid'], $newresults);
		$newresults		= str_replace("{article}", bbcode($result['story'],$usehtml, $result['old']), $newresults);
		$newresults		= str_replace("{summary}", bbcode($result['shortstory'],$usehtml, $result['old']), $newresults);
		
		$finalresults	.= $newresults;
		if($oneortwo == 'one'){ $oneortwo = 'two'; }else{ $oneortwo = 'one'; }
		$x++;
	}
	
	$search = str_replace("{totalresults}", $numresults, $search);
	$search = str_replace("{searchresults}", $finalresults, $search);
	return $search;
}
function checkcomment(){
	global $langmsg, $static;
	$allowcomments = DataAccess::fetch("SELECT allowcomments FROM " . NEWS_ARTICLES . " WHERE id = ?", $_POST['id']);	 
	$allowcomments = $allowcomments['0']['allowcomments'];
	if(!$static){ echo DELIMITER; }
	$_POST['name']		= (empty($_POST['name'])) ? '' : $_POST['name'];
	$_POST['message']	= (empty($_POST['message'])) ? '' : $_POST['message'];
	$_POST['email']		= (empty($_POST['email'])) ? '' : $_POST['email'];
	$_POST['skey']		= (empty($_POST['skey'])) ? '' : $_POST['skey'];
	$message 	= $_POST['message'];
	$message	= str_replace(DELIMITER ,"",$message);
	$name		= $_POST['name'];
	$name		= str_replace(DELIMITER,"",$name);						
	$email		= $_POST['email'];
	$email		= str_replace(DELIMITER,"",$email);
	$skey		= $_POST['skey'];
	$skey		= str_replace(DELIMITER,"",$skey);
	if(REGCOMMENT == "1"){
		if(isloggedin()){
			$check = true;
		}else{
			$check = false;
		}
	}else{
		$check = true;
	}
	if($check == true){
		if(!$name){
			return $langmsg['news'][0];
		}elseif(!$message){
			return $langmsg['news'][1];
		}else{
			if($allowcomments == "1" || $allowcomments == "2"){
				if(REGCOMMENT == "1" && !isloggedin()){
					return $langmsg['news'][40];
				}else{
					$ex = DataAccess::fetch("SELECT COUNT(uid) AS usercount FROM " . NEWS_USERS . " WHERE user = ?", $name);
					$ex = $ex['0']['usercount'];
					if((time() - $_SESSION['lastmsg']) <= SPAMTIME){
						$spammsg = str_replace("{timeleft}",(SPAMTIME - (time() - $_SESSION['lastmsg'])),SPAMMSG);
						return $spammsg;
					}else{
						$user		= $_POST['name'];
						$user		= str_replace(DELIMITER ,"",$user);
						$message	= $_POST['message'];
						$message	= str_replace(DELIMITER ,"",$message);
						$email		= $_POST['email'];
						$email		= str_replace(DELIMITER ,"",$email);										
						$skey		= $_POST['skey'];
						$skey		= str_replace(DELIMITER ,"",$skey);;

						$timestamp	= time();
						$ip			= $_SERVER['REMOTE_ADDR'];
						$pid		= $_POST['id'];

						if($allowcomments == "1"){
							$approved = '1';
						}elseif($allowcomments == "2"){
							$approved = '0';
						}									
						if($ex == 1){
							if($_SESSION['name'] == $name){
								if(checkcaptcha($skey, USEIMGVERIFICATION)){
									addcomment($user, $email, $message, $timestamp, $approved, $ip, $pid);
									sendcommentnotification($user,$message,$email,$ip,$pid);
									if($allowcomments == "1"){
										return COMMENTMSG;
									}elseif($allowcomments == "2"){
										return COMMENTAPPROVEMSG;
									}
								}else{						
									return $langmsg['news'][2];
								}												
							}else{
								return $langmsg['news'][3];										
							}
						}else{
							if(checkcaptcha($skey, USEIMGVERIFICATION)){
								addcomment($user, $email, $message, $timestamp, $approved, $ip, $pid);
								sendcommentnotification($user,$message,$email,$ip,$pid,$langmsg);
								if($allowcomments == "1"){
									return COMMENTMSG;
								}elseif($allowcomments == "2"){
									return COMMENTAPPROVEMSG;
								}
							}else{
								return $langmsg['news'][4];
							}
						}
					}
				}
			}else{
				#incase anyone tries adding comments to posts which have comments disabled
				return "Nice try";
			}
		}
	}else{
		return $langmsg['login'][0];
	}
}
function banned (){
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$isbanned = DataAccess::fetch("SELECT COUNT(id) AS banned FROM " . NEWS_BANNED . " WHERE ip = ?", $ipaddress);
	if($isbanned['0']['banned'] > 0){
		$amountblocked = DataAccess::fetch("SELECT blocked FROM " . NEWS_BANNED . " WHERE ip = ?", $ipaddress);
		$amountblocked = $amountblocked['0']['blocked'];
		$amountblocked++;
		DataAccess::put("UPDATE " . NEWS_BANNED . " SET blocked = ? WHERE ip = ?", $amountblocked, $ipaddress);;
		return true;
	}else{
		return false;
	}
}
function addcomment($user, $email, $message, $timestamp, $approved, $ip, $pid){
	DataAccess::put("INSERT INTO " . NEWS_COMMENTS . " (user,email,message,timestamp,approved,ip,pid) VALUES (?, ?, ?, ?, ?, ?, ?)", $user, $email, $message, $timestamp, $approved, $ip, $pid);
	updatecommentcount($pid);
	$_SESSION['lastmsg'] = time();
}
function getaccess($section){
	if(isloggedin()){
		$_SESSION['accessdata'] = (empty($_SESSION['accessdata'])) ? '' : $_SESSION['accessdata'];
		if($_SESSION['accessdata']){
			$accessdata = unserialize($_SESSION['accessdata']);
			if($accessdata['0'][$section] == 1){
				return true;
			}else{
				return false;
			}			
		}else{
			$accessdata = DataAccess::fetch("SELECT name, accounts, accesslevels, sysconfig, newscats, templates, smilies, wordfilters, bannedips, accesslevel, rss, personaloptions, privatemsgs, autoapproved, canapprove, usehtml, cats, profile, imageuploads, fileuploads, news, comments, help, nocat, fileimages, viewips FROM " . NEWS_ACCESS . " INNER JOIN " . NEWS_USERS . " ON " . NEWS_ACCESS . ".uid = " . NEWS_USERS . ".access WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
			$_SESSION['accessdata'] = serialize($accessdata);
			if($accessdata['0'][$section] == 1){
				return true;
			}else{
				return false;
			}			
		}
	}else{
		return false; 
	}
}
function updatelogs($success,$username){
	$ip = $_SERVER['REMOTE_ADDR'];
	$time = time();
	DataAccess::put("INSERT INTO " . NEWS_ACCESSLOGS . " (user,ip,loggedin,success) VALUES (?, ?, ?, ?)", $username, $ip, $time, $success);	
}
function showstats(){
	$newstats = DataAccess::fetch("SELECT 
 	(SELECT COUNT(id) FROM " . NEWS_ARTICLES . " WHERE archived = ? AND approved = ?) AS totalnews,
 	(SELECT COUNT(id) FROM " . NEWS_COMMENTS . ") AS totalcomments,
 	(SELECT COUNT(uid) FROM " . NEWS_USERS . ") AS totalusers,
 	(SELECT COUNT(id) FROM " . NEWS_CATS . ") AS totalcats,
 	(SELECT COUNT(uid) FROM " . NEWS_ACCESS . ") AS totalaccesslevels", $archives, "1");
	$totalnews = $newstats['0']['totalnews'];
	$totalcomments = $newstats['0']['totalcomments'];
	$totalusers = $newstats['0']['totalusers'];
	$totalcategories = $newstats['0']['totalcats'];
	$totalaccesslevels = $newstats['0']['totalaccesslevels'];
				
	
	//simply echo the above variables, 
	//example 
	//echo $totalnews;
	//will show the total amount of posts 
	die();
}
function checklogin(){
	global $default_index_language, $langmsg;
	
	$username	= $_POST['loginname'];
	$password	= $_POST['loginpassword'];
	$rememberme	= $_POST['loginremember'];
	$all = DataAccess::fetch("SELECT user, email, uid FROM " . NEWS_USERS . " WHERE user = ? AND newpass = ?", $username, md5(SALT . $password));
	if(count($all) > 0){
		$_SESSION['userlogged20'] = "true";
		$_SESSION['email'] = $all['0']['email'];
		$_SESSION['name'] = $all['0']['user'];
		$_SESSION['uid'] = $all['0']['uid'];
		$_SESSION['language'] = $default_index_language;
		if($rememberme){
			setcookies($all['0']['user'], $all['0']['uid'], $default_index_language);
		}
		return true;
	}else{
		return false;
	}	
}
function formatloginform($loginform){
	global $templateid, $linkprefix, $loginerror;
	
	$_POST['loginname'] = (empty($_POST['loginname'])) ? '' : $_POST['loginname'];
	$error = (empty($error)) ? '' : $error;
	$username = (empty($username)) ? '' : $username;
	
	$loginform = str_replace("{username}", $_POST['loginname'], $loginform);
	$loginform = str_replace("{loginerror}", $loginerror, $loginform);
	$loginform = str_replace("{recaptcha}", "<div id=\"recaptcha_div\">" . recaptcha_get_html(PUBLICKEY, $error) . "</div>", $loginform);
	$loginform = str_replace("{username}", $username, $loginform);

	return $loginform;
}
function formatcommentsform($commentsform){
	global $templateid, $linkprefix, $langmsg;

	$_POST['email']		= (empty($_POST['email'])) ? '' : $_POST['email'];
	$_POST['name']		= (empty($_POST['name'])) ? '' : $_POST['name'];
	$_POST['message']	= (empty($_POST['message'])) ? '' : $_POST['message'];
	$_POST['S1']		= (empty($_POST['S1'])) ? '' : $_POST['S1'];
	$tmpname			= (empty($_SESSION['name'])) ? '' : $_SESSION['name'];
	$error				= (empty($error)) ? '' : $error;
	$message			= displayhtml($_POST['message']);
	if(isloggedin()){
		$email = $_SESSION['email'];
	}else{
		if(!$_POST['S1']){
			$tmpname	= $langmsg['news'][47];
			$email		= $langmsg['news'][48];
			$message	= $langmsg['news'][49];
		}else{
			$email = displayhtml($_POST['email']);
			$tmpname = displayhtml($_POST['name']);
		}
	}
	
	$commentsform = str_replace("{id}",ID,$commentsform);
	$commentsform = str_replace("{name}",$tmpname,$commentsform);
	$commentsform = str_replace("{email}",$email,$commentsform);
	$commentsform = str_replace("{message}",$message,$commentsform);
	$commentsform = str_replace(DELIMITER,"",$commentsform);
	$commentsform = str_replace("{template}",$templateid,$commentsform);	
	$commentsform = str_replace("{smilies}",getsmilies(),$commentsform);
	$commentsform = str_replace("{url}",$linkprefix,$commentsform);
	$commentsform = str_replace("{recaptcha}", "<div id=\"recaptcha_div\">" . recaptcha_get_html(PUBLICKEY, $error) . "</div>", $commentsform);
	return $commentsform;
}
function checkcaptcha($skey, $verificationtype){
	if($verificationtype == "1"){
		if(md5(SALT . $skey) == $_SESSION['image_random_value']){
			return true;
		}else{
			return false;
		}
	}elseif($verificationtype == "2"){
		$resp = recaptcha_check_answer (PRIVATEKEY, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
		if($resp->is_valid){
			return true;
		}else{
			//$error = $resp->error;
			return false;
		}		
	}else{
		return true;
	}
}
function sendunapprovednotifications($author, $title, $date){
	global $langmsg;
	if(UNAPPROVEDNOTIFY == "1"){
		$mailsubject = "New Unapproved";
		$mailmessage = $langmsg['news'][46];
		$mailmessage = str_replace("{author}",displayhtml($author),$mailmessage);
		$mailmessage = str_replace("{title}",displayhtml($title),$mailmessage);
		$mailmessage = str_replace("{date}",displayhtml($date),$mailmessage);
		$fromemail = "newcomment@" . $_SERVER['HTTP_HOST'];
		$headers = 'From: New Unapproved <' . $fromemail . ">\r\n" . 'Reply-To: ' . $fromemail . "\r\n" . 'X-Mailer: PHP/' . phpversion();	
		foreach(explode(",", EMAILNOTIFY) AS $emails){
			mail(trim($emails),$mailsubject,$mailmessage,$headers);
		}
	}	
}
function sendcommentnotification($user,$message,$email,$ip,$pid){
	global $langmsg;
	if(COMMENTSNOTIFY == "1"){
		$mailsubject = $langmsg['news'][41];
		$mailsubject = str_replace("{domain}",$_SERVER['HTTP_HOST'],$mailsubject);
		$mailmessage = $langmsg['news'][42];
		$mailmessage = str_replace("{name}",displayhtml($user),$mailmessage);
		$mailmessage = str_replace("{email}",displayhtml($email),$mailmessage);
		$mailmessage = str_replace("{message}",displayhtml($message),$mailmessage);
		$mailmessage = str_replace("{ip}",$ip,$mailmessage);
		$fromemail = "newcomment@" . $_SERVER['HTTP_HOST'];
		$headers = 'From: New Comment <' . $fromemail . ">\r\n" . 'Reply-To: ' . $fromemail . "\r\n" . 'X-Mailer: PHP/' . phpversion();	
		foreach(explode(",", EMAILNOTIFY) AS $emails){
			mail(trim($emails),$mailsubject,$mailmessage,$headers);
		}
	}	
}
function sendregisternotification($user,$email,$ip){
	global $langmsg;
	if(REGISTERNOTIFY == "1"){
		$mailsubject = $langmsg['news'][43];
		$mailsubject = str_replace("{domain}",$_SERVER['HTTP_HOST'],$mailsubject);
		$mailmessage = $langmsg['news'][44];
		$mailmessage = str_replace("{name}",displayhtml($user),$mailmessage);
		$mailmessage = str_replace("{email}",displayhtml($email),$mailmessage);
		$mailmessage = str_replace("{ip}",$ip,$mailmessage);
		$fromemail = "newregistration@" . $_SERVER['HTTP_HOST'];
		$headers = 'From: New Registration <' . $fromemail . ">\r\n" . 'Reply-To: ' . $fromemail . "\r\n" . 'X-Mailer: PHP/' . phpversion();	
		foreach(explode(",", EMAILNOTIFY) AS $emails){
			mail(trim($emails),$mailsubject,$mailmessage,$headers);
		}
	}	
}
function redirect($url){
    if(!headers_sent()) {
        header('Location: '.$url); exit;
    }else{
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

function formatnews($str,$type,$row){
	global $uploadedfilestemplate, $linkprefix, $newstimeformat,$stampzone, $templateid, $commentspop, $image_clickable, $catcutoff, $oneortwo, $news_layout, $comments_layout, $stripimg;
	$newsorder		= (empty($newsorder)) ? '' : $newsorder;
    $numcomments	= $row['commentcount'];
	
	$newstime = $newstimeformat;
	

	
	$str = str_replace("{oneortwo}", $oneortwo, $str);
	$usehtml = $row['usehtml'];
	$str = str_replace("{title}",bbcode($row['title'],$usehtml, $row['old']),$str); 


	
	$str = str_replace("{friendlytitle}", makefriendly($row['title']), $str);
	$categories = '';
    $cats = DataAccess::fetch("SELECT storyid, catid, type, uid, " . NEWS_CATS . ".name AS catname
        FROM " . NEWS_GROUPCATS . "
        INNER JOIN " . NEWS_CATS . " ON " . NEWS_GROUPCATS . ".catid = " . NEWS_CATS . ".id
        WHERE storyid = ? AND type = ? ORDER BY " . NEWS_CATS . ".name ASC", $row['id'], "news");
    $current_cats = array();
    foreach($cats AS $cat){
		$current_cats[] = $cat['catname'];
		$categories .= str_replace("{cat}", $cat['catname'], CATDELIMITER);
		
    }
	$categories = substr($categories,0,strlen($categories) - $catcutoff);
	$str = str_replace("{categories}",$categories,$str);
	
	// if stripimg is true, remove images
	$stripimg = (empty($stripimg)) ? false : true;
	if($stripimg){
		$row['story']		= strip_only($row['story'], "img");
		$row['shortstory']	= strip_only($row['shortstory'], "img");
	}	
	
	if($type == 0){
		if($news_layout == "0"){
			if($row['shortstory']){
				$str = str_replace("{shortstory}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
				$str = str_replace("{summary}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
				$str = str_replace("{story}","",$str);
				$str = str_replace("{article}","",$str);
				if(FRIENDLY){
					$str = str_replace("[readmore]", sprintf("<a href=\"%s%s-0-%s\">", PREFIX, $row['id'], makefriendly($row['title'])),$str);
				}else{
					$str = str_replace("[readmore]", sprintf("<a href=\"?%s" . "id=%s\">", $linkprefix, $row['id']),$str);
				}
				$str = str_replace("[/readmore]","</a>",$str);            
			}else{
				$str = str_replace("{shortstory}","",$str);
				$str = str_replace("{summary}","",$str);
				$str = str_replace("{story}",bbcode($row['story'],$usehtml, $row['old']),$str);	
				$str = str_replace("{article}",bbcode($row['story'],$usehtml, $row['old']),$str);	
				$str = preg_replace('#\[readmore\](.*?)\[\/readmore\]#se', '', $str);
			}        
		}elseif($news_layout == "1"){			
			$str = str_replace("{shortstory}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
			$str = str_replace("{summary}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
			$str = str_replace("{story}","",$str);
			$str = str_replace("{article}","",$str);			if(FRIENDLY){
			$str = str_replace("[readmore]", sprintf("<a href=\"%s%s-0-%s\">", PREFIX, $row['id'], makefriendly($row['title'])),$str);
			}else{
				$str = str_replace("[readmore]", sprintf("<a href=\"?%s" . "id=%s\">", $linkprefix, $row['id']),$str);
			}
			$str = str_replace("[/readmore]","</a>",$str);            	
		}elseif($news_layout == "2"){
			$str = str_replace("{shortstory}","",$str);
			$str = str_replace("{summary}","",$str);
			$str = str_replace("{story}",bbcode($row['story'],$usehtml, $row['old']),$str);	
			$str = str_replace("{article}",bbcode($row['story'],$usehtml, $row['old']),$str);	
			if(FRIENDLY){
				$str = str_replace("[readmore]", sprintf("<a href=\"%s%s-0-%s\">", PREFIX, $row['id'], makefriendly($row['title'])),$str);
			}else{
				$str = str_replace("[readmore]", sprintf("<a href=\"?%s" . "id=%s\">", $linkprefix, $row['id']),$str);
			}
			$str = str_replace("[/readmore]","</a>",$str);
		}elseif($news_layout == "3"){
			$str = str_replace("{shortstory}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
			$str = str_replace("{summary}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
			$str = str_replace("{story}",bbcode($row['story'],$usehtml,$row['old']),$str);
			$str = str_replace("{article}",bbcode($row['story'],$usehtml,$row['old']),$str);
			if(FRIENDLY){
				$str = str_replace("[readmore]", sprintf("<a href=\"%s%s-0-%s\">", PREFIX, $row['id'], makefriendly($row['title'])),$str);
			}else{
				$str = str_replace("[readmore]", sprintf("<a href=\"?%s" . "id=%s\">", $linkprefix, $row['id']),$str);
			}
			$str = str_replace("[/readmore]","</a>",$str);		
		}
	}else{
		if($comments_layout == "0"){
			if($row['shortstory']){
				$str = str_replace("{shortstory}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
				$str = str_replace("{summary}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
				$str = str_replace("{story}",bbcode($row['story'],$usehtml,$row['old']),$str);
				$str = str_replace("{article}",bbcode($row['story'],$usehtml,$row['old']),$str);
				$str = preg_replace('#\[readmore\](.*?)\[\/readmore\]#se', '', $str);
			}else{
				$str = str_replace("{shortstory}","",$str);
				$str = str_replace("{summary}","",$str);
				$str = str_replace("{story}",bbcode($row['story'],$usehtml, $row['old']),$str);
				$str = str_replace("{article}",bbcode($row['story'],$usehtml, $row['old']),$str);
				$str = preg_replace('#\[readmore\](.*?)\[\/readmore\]#se', '', $str);	
			}
		}elseif($comments_layout == "1"){
			$str = str_replace("{shortstory}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
			$str = str_replace("{summary}",bbcode($row['shortstory'],$usehtml,$row['old']),$str);
			$str = str_replace("{story}","",$str);
			$str = str_replace("{article}","",$str);
			$str = preg_replace('#\[readmore\](.*?)\[\/readmore\]#se', '', $str);				
		}elseif($comments_layout == "2"){
			$str = str_replace("{shortstory}","",$str);
			$str = str_replace("{summary}","",$str);
			$str = str_replace("{story}",bbcode($row['story'],$usehtml,$row['old']),$str);
			$str = str_replace("{article}",bbcode($row['story'],$usehtml,$row['old']),$str);
			$str = preg_replace('#\[readmore\](.*?)\[\/readmore\]#se', '', $str);						
		}
	}
	if(isloggedin()){
		$str = preg_replace('#\[loggedin\](.*?)\[\/loggedin\]#se', '$1', $str);
	}else{
		$str = preg_replace('#\[loggedin\](.*?)\[\/loggedin\]#se', '', $str);	
	}
	$str = str_replace("{image}","<img src=\"" . $row['profile_image'] . "\" alt=\"" . $row['user'] . "\" />",$str);
	if(!$row['user']){
		$str = str_replace("{author}","<span class=\"" . $row['accessname'] . "\">" . $row['origauthor'] . "</span>",$str);		
		}else{
		$str = str_replace("{author}","<span class=\"" . $row['accessname'] . "\">" . $row['user'] . "</span>",$str);	
	}
	$stampzone	= $row['timestamp'];
	$str		= str_replace("{date}",strftime($newstime,$stampzone),$str);
	$str		= str_replace("{id}",$row['id'],$str);
	$str		= str_replace("{viewcount}",$row['viewcount'],$str);
    $wordcount	= count(explode(" ", $row['story'] . $row['shortstory']));
    $str		= str_replace("{wordcount}",$wordcount,$str);


	#files   
	$amountoffiles = $row['amountoffiles'];
	if($amountoffiles < 1){
		$str = preg_replace("/\[files\](.*?)\[\/files\]/se","",$str);
	}else{
		$str = str_replace("[files]","",$str);
		$str = str_replace("[/files]","",$str);

		$files = DataAccess::fetch("SELECT " . NEWS_FILES . ".uid AS fileuid, " . NEWS_USERS . ".user, " . NEWS_FILES . ".timestamp AS timestamp, " . NEWS_FILES . ".author AS author, " . NEWS_FILES . ".url AS url, " . NEWS_FILES . ".filesize AS filesize, " . NEWS_FILES . ".title AS title, " . NEWS_FILES . ".downloadcount AS downloadcount FROM " . NEWS_LINKEDFILES . "
		LEFT JOIN " . NEWS_FILES . " ON " . NEWS_LINKEDFILES . ".fileid = " . NEWS_FILES . ".uid
		LEFT JOIN " . NEWS_USERS . " ON " . NEWS_FILES . ".author = " . NEWS_USERS . ".uid
		WHERE storyid = ? ORDER BY " . NEWS_FILES . ".title ASC", $row['id']); 
		$aafiles = '';
		$oneortwo_files = 'one';
		foreach($files AS $file){
			$afiles = $uploadedfilestemplate;
			$url = $file['url'];
				if(FRIENDLY){
					//$downloadurl = PREFIX . "download-" . $file['fileuid'];
					$downloadurl = SCRIPTPATH . "getdownload.php?goto=download&amp;fileuid=" . $file['fileuid'];
				}else{
					$downloadurl = SCRIPTPATH . "getdownload.php?goto=download&amp;fileuid=" . $file['fileuid'];
				}
			
			$uploader = $file['user'];
			$afiles = str_replace("{oneortwo}", $oneortwo_files, $afiles);
			$afiles = str_replace("{filetitle}",$file['title'],$afiles);
			$afiles = str_replace("{downloadcount}",$file['downloadcount'],$afiles);
			$afiles = str_replace("{filesize}",round($file['filesize'],1),$afiles);
			$afiles = str_replace("{filename}",basename($file['url']),$afiles);
			$afiles = str_replace("{url}",$downloadurl,$afiles);
			$afiles = str_replace("{uploader}",$uploader,$afiles);
			$afiles = str_replace("{filedate}",strftime(FILETIME,$file['timestamp']),$afiles);
			$aafiles .=  $afiles;
			if($oneortwo_files == 'one'){ $oneortwo_files = 'two'; }else{ $oneortwo_files = 'one'; }
		}

		$str = str_replace("{files}",$aafiles,$str);	
	}	
	#endfiles


	// rating stars
	$currentrating = $row['rating'];
	$str = str_replace("{currentrating}",round($currentrating,3),$str);
	$ratingcount = $row['ratingcount'];
    $str = str_replace("{ratingcount}",$ratingcount,$str);
	
	$i = 1;
	$ratingstars = '';
	while($i <= 5){
		if(round($currentrating,0) < $i){
			$ratingstars .= "<img style=\"cursor: pointer\" onmouseover=\"ratingstarshover('id" . $row['id'] . "', '$i')\" onclick=\"senddata('rating', " . $row['id'] . ", $i)\" id=\"id" . $row['id'] . "_stars_$i\" src=\"" . IMAGEPATH . "stars_6.png\" alt=\"$i/5\" />";	
		}else{
			$ratingstars .= "<img style=\"cursor: pointer\" onmouseover=\"ratingstarshover('id" . $row['id'] . "', '$i')\" onclick=\"senddata('rating', " . $row['id'] . ", $i)\" id=\"id" . $row['id'] . "_stars_$i\" src=\"" . IMAGEPATH . "stars_7.png\" alt=\"$i/5\" />";	
		}		
		$i++;
	}
	
	#$str = str_replace("{ratingstars}","<img src=\"".$imagepath ."stars_0.png\" alt=\"0/5\" />",$str);
	$str = str_replace("{ratingstars}",$ratingstars,$str);
	//
	
	if(isloggedin()){
		$_SESSION['accessdata'] = (empty($_SESSION['accessdata'])) ? '' : $_SESSION['accessdata'];
		$accessdata = unserialize($_SESSION['accessdata']);
		if($accessdata['0']['viewips'] == "1"){
			$str = str_replace("{ip}",$row['ip'],$str);
		}else{
			$str = str_replace("{ip}","",$str);
		}
	}
	$row['email'] = (empty($row['email'])) ? '' : $row['email'];
	$temail = ascii_encode($row['email']);
	$str = str_replace("[email]","<a href=\"mailto:$temail\">",$str);
	$str = str_replace("[/email]","</a>",$str);
	$str = str_replace("{email}",$row['email'],$str);
	if(FRIENDLY){
		$str = str_replace("[profile]", sprintf("<a href=\"%sprofile-%s\">", PREFIX, $row['user']),$str);
	}else{
		$str = str_replace("[profile]", sprintf("<a href=\"?%sgoto=profile&user=%s\">", $linkprefix, $row['user']),$str);
	}
	$str = str_replace("[/profile]","</a>",$str);
	if($commentspop == 0){
		if(FRIENDLY){
			$t = sprintf("<a href=\"%s%s-0-%s#comments\">", PREFIX, $row['id'], makefriendly($row['title']));
		}else{
			$t = sprintf("<a href=\"?%sid=%s#comments\">", $linkprefix, $row['id']);
		}
	}else{
		if(FRIENDLY){
     		$t = sprintf("<a target=\"_NEW\" href=\"%s%s-0#comments\">", PREFIX, $row['id'], makefriendly($row['title']));
		}else{
			$t = sprintf("<a target=\"_NEW\" href=\"?%sid=%s#comments\">", $linkprefix, $row['id']);
		}
	}
	if($type == 0){
		$str = str_replace("[comments]",$t,$str);
		$str = str_replace("[/comments]","</a>",$str);
	}else{
		$str = str_replace("[comments]","",$str);
		$str = str_replace("[/comments]","",$str);	
	}
	$str = str_replace("{comments}",$numcomments,$str);
	$row['useravatar'] = (empty($row['useravatar'])) ? '' : $row['useravatar'];
	if($row['useravatar'] == "0" || $row['useravatar'] == ""){
		$str = str_replace("{avatar}","",$str);
	}else{
		if(stristr($str, "{avatar}") === FALSE){
			// {avatar} tag not found, no point calling an extra query
			$str = str_replace("{avatar}","",$str);
		}else{
			$useravatar = DataAccess::fetch("SELECT file FROM " . NEWS_IMAGES . " WHERE uid = ?", $row['useravatar']);
			$useravatar = $useravatar['0']['file'];
			$useravatar = UPLOADPATH . $useravatar;
			$str = str_replace("{avatar}","<img src=\"". $useravatar. "\">",$str);
		}
	}
	if($oneortwo == 'one'){ $oneortwo = 'two'; }else{ $oneortwo = 'one'; }
	return $str;
}

function deletecomment(){
	$commentid		= $_GET['deletecomment'];
	$commentdata	= DataAccess::fetch("SELECT user, pid FROM " . NEWS_COMMENTS . " WHERE id = ?", $commentid);
	if(count($commentdata) > 0){
		$user			= $commentdata['0']['user'];
		$pid			= $commentdata['0']['pid'];
		
		// delete comments link
		$accessdata = unserialize($_SESSION['accessdata']);
		if($accessdata['0']['accesslevel'] > 1){
			// mod or admin, delete comment
			DataAccess::put("DELETE FROM " . NEWS_COMMENTS . " WHERE id = ? AND pid = ?", $commentid, $pid);
			// update comment count on news article
			updatecommentcount($pid);
		}else{
			if(DELETEOWNCOMMENTS == "1"){
				if($_SESSION['name'] == $user){
					// user owns this comment, delete it
					DataAccess::put("DELETE FROM " . NEWS_COMMENTS . " WHERE id = ? AND pid = ?", $commentid, $pid);
					// update comment count on news article
					updatecommentcount($pid);
				}else{
					// do nothing
				}
			}else{
				// do nothing
			}
		}
	}
}
function updatecommentcount($newsid){
	DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET commentcount = (SELECT COUNT(id) FROM " . NEWS_COMMENTS . " WHERE " . NEWS_COMMENTS . ".pid = news30_story.id AND approved = '1') WHERE " . NEWS_ARTICLES . ".id = ?", $newsid);
}
function formatcomments($str,$row){
	global $friendlytitle, $linkprefix, $oneortwo, $commentstimeformat;
    
	$str = str_replace("{oneortwo}", $oneortwo, $str);
	
	$commentstime = $commentstimeformat;
	
	$stampzone = $row['timestamp'];
	$avatar = $row['useravatar'];
	if($avatar){
        $avatar = "<img src=\"" . $avatar . "\" />";
    }else{
        $avatar = '';
    }
	
	$str = str_replace("{avatar}",$avatar,$str);	
	$str = str_replace("{date}",strftime($commentstime,$stampzone),$str);
    
    unset($message);
	$message = displayhtml($row['message']);
    foreach(unserialize(SMILIES) AS $smiley){
        $message = str_replace($smiley['keycode'],"<img src=\"" . $smiley['path'] . "\" />", $message);
    }
	$message = substr($message, 0, COMMENTSLENGTH);
	
	$message = str_replace("\n", "<br />", $message);
	$message = trim($message);

	$author = displayhtml($row['user']);
	if($row['useruid']){
		$str = str_replace("{author}","<span class=\"" . $row['accessname'] . "\">" . $row['user'] . "</span>",$str);		
	}else{
		$str = str_replace("{author}",$author,$str);
	}
	
    $wordcount = count(explode(" ", $message));
    $str = str_replace("{wordcount}",$wordcount,$str);
    
	$str = str_replace("{message}",$message,$str);

	if(isloggedin()){
		$accessdata = unserialize($_SESSION['accessdata']);
		if($accessdata['0']['viewips'] == "1"){
			$str = str_replace("{ip}",$row['ip'],$str);
		}else{
			$str = str_replace("{ip}","",$str);
		}
	}else{
		$str = str_replace("{ip}","",$str);
	}
	$email2 = htmlspecialchars($row['email']);
	
	$str = str_replace("{id}",$row['id'],$str);
	$str = str_replace("{email}",$email2,$str);
	if(!$email2){
		$str = str_replace("[email]","",$str);
		$str = str_replace("[/email]","",$str);
	}else{
		$temail = ascii_encode($row['email']);		
			if(stristr($row['email'],'@')){
				$str = str_replace("[email]","<a href=\"mailto:$temail\">",$str);
			}else{				
				$str = str_replace("[email]","<a href=\"$temail\">",$str);
			}
		$str = str_replace("[/email]","</a>",$str);
	}

	if(isloggedin()){
		$str = preg_replace('#\[loggedin\](.*?)\[\/loggedin\]#se', '$1', $str);
	}else{
		$str = preg_replace('#\[loggedin\](.*?)\[\/loggedin\]#se', '', $str);	
	}	

	// delete comments link
	if(isloggedin()){
		if($accessdata['0']['accesslevel'] > 1){
			if(FRIENDLY){
				$str = str_replace("[delete-link]", sprintf("<a href=\"%s%s-0-$friendlytitle?deletecomment=%s#comments\">", PREFIX, ID, $row['id']), $str);
				$str = str_replace("[/delete-link]", "</a>", $str);
			}else{
				$str = str_replace("[delete-link]", sprintf("<a href=\"?%sid=%s&deletecomment=%s#comments\">", $linkprefix, ID, $row['id']), $str);
				$str = str_replace("[/delete-link]", "</a>", $str);
			}
		}else{
			if(DELETEOWNCOMMENTS == "1"){
				if($_SESSION['name'] == $row['user']){
					if(FRIENDLY){
						$str = str_replace("[delete-link]", sprintf("<a href=\"%s%s-0-%s?deletecomment=%s#comments\">", PREFIX, ID, $friendlytitle, $row['id']), $str);
						$str = str_replace("[/delete-link]", "</a>", $str);
					}else{
						$str = str_replace("[delete-link]", sprintf("<a href=\"?%sid=%s&deletecomment=%s#comments\">", $linkprefix, ID, $row['id']), $str);
						$str = str_replace("[/delete-link]", "</a>", $str);
					}
				}else{
					$str = preg_replace('#\[delete-link\](.*?)\[\/delete-link\]#se', '', $str);	
				}
			}else{
				$str = preg_replace('#\[delete-link\](.*?)\[\/delete-link\]#se', '', $str);	
			}
		}
	}else{
		$str = preg_replace('#\[delete-link\](.*?)\[\/delete-link\]#se', '', $str);	
	}
    foreach(unserialize(FILTERS) AS $filter){
        $str = str_ireplace($filter['filter'], $filter['alt'], $str);
    }
	if($oneortwo == 'one'){ $oneortwo = 'two'; }else{ $oneortwo = 'one'; }
	return $str;           							 
}
function commentspagintation($type){
	global $linkprefix, $page, $start, $amountofpages, $friendlytitle;

	if($type == "currentpage"){
		$ccurrentpage = $page;
		return $ccurrentpage;
	}
	if($type == "previouspage"){
		if($page <= 1){
			$cpreviouspage = 1;
		}else{
			$cpreviouspage = ($page - 1);
		}
		
		return $cpreviouspage;
	}
	if($type == "nextpage"){
		
		$cnextpage = ($page + 1);
		if($cnextpage >= $amountofpages){
			$cnextpage = $amountofpages;
		}else{
			
		}
		return $cnextpage;
	}	
	if($type == "cpages"){
		$d = 1;				
		$cpages = '';
		while($d <= $amountofpages){
			if($amountofpages == 1){
			}else{
				if($d == $page){
					$cpages .= "<span class=\"n13_pages_cactive\">$d</span> ";
				}else{
					if(FRIENDLY){			
						$cpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"%s%s-%s-%s\">%s</a> ", PREFIX, ID, $d, $friendlytitle, $d);
					}else{
						$cpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"?%sid=%s&page=%s\">%s</a> ", $linkprefix, ID, $d, $d);
					}	
				}
			}
			$d++;						
		}
		return $cpages;
	}
	if($type == "newpages"){
		$d = 1;
		$newpages = '';
		$maxtoshow = 3;
		if($amountofpages <= $maxtoshow){
			while($d <= $amountofpages){
				if($amountofpages == 1){
				}else{		
					if($d == $page){
						$newpages .= "<span class=\"n13_pages_cactive\">$d</span> ";	
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"%s%s-%s-%s\">%s</a> ", PREFIX, ID, $d, $friendlytitle, $d);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"?%s&id=%s&page=%s\">%s</a> ", $linkprefix, ID, $d, $d);
						}	
					}
				}
				$d++;						
			}	
		}else{
			if($page <= 1){			
				$r = 1;
				while($r <= $maxtoshow){
					if($r == $page){
						$newpages .= "<span class=\"n13_pages_cactive\">$r</span> ";
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"%s%s-%s-%s\">%s</a> ", PREFIX, ID, $r, $friendlytitle, $r);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"?%s&id=%s&page=%s\">%s</a> ", $linkprefix, ID, $r, $r);
						}
					}				
				$r++;	
				}
			}elseif($page >= $amountofpages){
				$r = $page - $maxtoshow;
				while($r <= $amountofpages){
					if($r == $page){
						$newpages .= "<span class=\"n13_pages_cactive\">$r</span> ";
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"%s%s-%s-%s\">%s</a> ", PREFIX, ID, $r, $friendlytitle, $r);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"?%s&id=%s&page=%s\">%s</a> ", $linkprefix, ID, $r, $r);
						}
					}
				$r++;					
				}
			}else{
				$d = $page - 1;
				$r = 1;
				while($r <= $maxtoshow){
					if($d == $page){
						$newpages .= "<span class=\"n13_pages_cactive\">$d</span> ";
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"%s%s-%s-%s\">%s</a> ", PREFIX, ID, $d, $friendlytitle, $d);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_cnonactive\" href=\"?%s" . "&id=%s&page=%s\">%s</a> ", $linkprefix, ID, $d, $d);
						}
					}
					$d++;
					$r++;			
				}
			} 	
		}					
		return $newpages;
	}
	if($type == "firstpagelink"){
		# [firstpage] & [/firstpage]
		if($amountofpages == 1 || $page == 1){
			$firstpagelink = "";
		}else{
			if(FRIENDLY){	
				$firstpagelink = sprintf("<a class=\"n13_pages_cfirstpage\" href=\"%s%s-1-%s\"> ", PREFIX, ID, $friendlytitle);
			}else{
				$firstpagelink = sprintf("<a class=\"n13_pages_cfirstpage\" href=\"?%s&id=%s&page=1\"> ", $linkprefix, ID);
			}							
		}
		return $firstpagelink;
	}
	
	if($type == "nextlink"){
		# [next-link] & [/next-link]
		if($amountofpages == $page || $amountofpages == 0){
			$nlink = ""; 
		}else{
			$g = $page + 1;
			if(FRIENDLY){
				$nlink = sprintf("<a class=\"n13_pages_cnextlink\" href=\"%s%s-%s-%s\">", PREFIX, ID, $g, $friendlytitle);
			}else{	
				$nlink = sprintf("<a class=\"n13_pages_cnextlink\" href=\"?%sid=%s&page=%s\">", $linkprefix, ID, $g);
			}
		}
		return $nlink;
	}
	
	if($type == "prevlink"){
		# [prev-link] & [/prev-link]
		if($amountofpages == 1 || $page == 1){
			$plink = "";
		}else{
			$g = $page - 1;
			if(FRIENDLY){	
				$plink = sprintf("<a class=\"n13_pages_cprevlink\" href=\"%s%s-%s-%s\"> ", PREFIX, ID, $g, $friendlytitle);
			}else{
				$plink = sprintf("<a class=\"n13_pages_cprevlinkh\" href=\"?%s&id=%s&page=%s\"> ", $linkprefix, ID, $g);
			}							
		}
		return $plink;
	}
	if($type == "lastpagelink"){
		# [lastpage] & [/lastpage]
		if($amountofpages == $page || $amountofpages == 0){
			$lastpagelink = ""; 
		}else{
			if(FRIENDLY){
				$lastpagelink = sprintf("<a class=\"n13_pages_clastpage\" href=\"%s%s-%s-%s\">", PREFIX, ID, $amountofpages, $friendlytitle);
			}else{	
				$lastpagelink = sprintf("<a class=\"n13_pages_clastpage\" href=\"?%sid=%s&page=%s\">", $linkprefix, ID, $amountofpages);
			}
		}
		return $lastpagelink;
	}
}
function newspagintation($type){
	global $amountofpages, $linkprefix, $page;
	if($type == "currentpage"){
		$currentpage = $page;
		return $currentpage;
	}
	if($type == "previouspage"){
		if($page <= 1){
			$previouspage = 1;
		}else{
			$previouspage = ($page - 1);
		}
		
		return $previouspage;
	}
	if($type == "nextpage"){
		$nextpage = ($page + 1);
		if($nextpage >= $amountofpages){
			$nextpage = $amountofpages;
		}else{
			
		}
		return $nextpage;
	}
	if($type == "pages"){
		$pages = '';
		$d = 1;
		while($d <= $amountofpages){
			if($amountofpages == 1){
			}else{
				if($d == $page){
					$pages .= "<span class=\"n13_pages_active\">$d</span> ";
				}else{
					if(FRIENDLY){
						$pages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"%s%s-%s-%s\">%s</a> ", PREFIX, '0', $d, NEWSSUFFIX, $d);
					}else{
						$pages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"?%spage=%s\">%s</a> ", $linkprefix, $d, $d);
					}	
				}
			}
			$d++;						
		}
		return $pages;
	}
	if($type == "newpages"){
		$d = 1;
		$newpages = '';
		$maxtoshow = 3;
		if($amountofpages <= $maxtoshow){
			while($d <= $amountofpages){
				if($amountofpages !== 1){		
					if($d == $page){
						$newpages .= "<span class=\"n13_pages_active\">$d</span> ";	
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"%s0-%s-%s\">%s</a> ", PREFIX, $d, NEWSSUFFIX, $d);
						}else{
							$newpages .= "<a class=\"n13_pages_nonactive\" href=\"?$linkprefix" . "page=$d\">$d</a> ";
						}	
					}
				}
				$d++;						
			}	
		}else{
			if($page <= 1){			
				$r = 1;
				while($r <= $maxtoshow){
					if($r == $page){
						$newpages .= "<span class=\"n13_pages_active\">$r</span> ";
					}else{
						if(FRIENDLY){ 
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"%s0-1-%s\">%s</a> ", PREFIX, NEWSSUFFIX, $r);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"?%spage=%s\">%s</a> ", $linkprefix, $r, $r);
						}
					}				
				$r++;	
				}
			}elseif($page >= $amountofpages){
				$r = $page - $maxtoshow;
				while($r <= $amountofpages){
					if($r == $page){
						$newpages .= sprintf("<span class=\"n13_pages_active\">%s</span> ", $r);
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"%s0-%s-%s\">%s</a> ", PREFIX, $r, NEWSSUFFIX, $r);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"?%spage=%s\">%s</a> ", $linkprefix, $r, $r);
						}
					}
				$r++;					
				}
			}else{
				$d = $page - 1;
				$r = 1;
				while($r <= $maxtoshow){
					if($d == $page){
						$newpages .= "class=\"n13_pages_active\">$d</span> ";
					}else{
						if(FRIENDLY){
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"%s0-%s-%s\">%s</a> ", PREFIX, $d, NEWSSUFFIX, $d);
						}else{
							$newpages .= sprintf("<a class=\"n13_pages_nonactive\" href=\"?%spage=%s\">%s</a> ", $linkprefix, $d, $d);
						}
					}
					$d++;
					$r++;			
				}
			} 	
		}
		return $newpages;
	}
	
	if($type == "firstpage"){
		# [firstpage] & [/firstpage]
		if($amountofpages == 1 || $page == 1){
			$firstpagelink = "";
		}else{
			if(FRIENDLY){
				$firstpagelink = sprintf("<a class=\"n13_pages_firstpage\" href=\"%s0-1-%s\"> ", PREFIX, NEWSSUFFIX);
			}else{
				$firstpagelink = sprintf("<a class=\"n13_pages_firstpage\" href=\"?%spage=1\"> ", $linkprefix);
			}		
		}
		return $firstpagelink;
	}
	
	if($type == "prevlink"){
		# [prev-link] & [/prev-link]
		if($amountofpages == 1 || $page == 1){
			$plink = "";
		}else{
			$g = $page - 1;
			if(FRIENDLY){
				$plink = sprintf("<a class=\"n13_pages_prevlink\" href=\"%s0-%s-%s\"> ", PREFIX, $g, NEWSSUFFIX);
			}else{
				$plink = sprintf("<a class=\"n13_pages_prevlink\" href=\"?%spage=%s\"> ", $linkprefix, $g);
			}
				
		}
		return $plink;
	}
	
	if($type == "lastpage"){
		# [lastpage] & [/lastpage]
		if($amountofpages == $page || $amountofpages == 0){
			$lastpagelink = ""; 
		}else{
			$g = $page + 1;
			if(FRIENDLY){
				$lastpagelink = sprintf("<a class=\"n13_pages_lastpage\" href=\"%s0-%s-%s\">", PREFIX, $amountofpages, NEWSSUFFIX);
			}else{
				$lastpagelink = sprintf("<a class=\"n13_pages_lastpage\" href=\"?%spage=%s\">", $linkprefix, $amountofpages);
			}
		}
		return $lastpagelink;
	}
	
	if($type == "nextlink"){
		# [next-link] & [/next-link]
		if($amountofpages == $page || $amountofpages == 0){
			$nlink = ""; 
		}else{
			$g = $page + 1;
			if(FRIENDLY){
				$nlink = sprintf("<a class=\"n13_pages_nextlink\" href=\"%s0-%s-%s\">", PREFIX, $g, NEWSSUFFIX);
			}else{
				$nlink = sprintf("<a class=\"n13_pages_nextlink\" href=\"?%spage=%s\">", $linkprefix, $g);
			}
		}
		return $nlink;
	}

}
function formatcommentspagintation(){
	global $cpagintation, $plink, $firstpagelink, $nlink, $lastpagelink, $pages, $newpages, $ccurrentpage, $cpreviouspage, $cnextpage, $cpid, $cfriendlytitle;
	if(!$plink){
		$cpagintation = preg_replace('#\[prev-link\](.*?)\[\/prev-link\]#se','', $cpagintation);
	}
	if(!$firstpagelink){
		$cpagintation = preg_replace('#\[firstpage\](.*?)\[\/firstpage\]#se','', $cpagintation);
	}
	if(!$lastpagelink){
		$cpagintation = preg_replace('#\[lastpage\](.*?)\[\/lastpage\]#se','', $cpagintation);
	}		
	if(!$nlink){
		$cpagintation = preg_replace('#\[next-link\](.*?)\[\/next-link\]#se','', $cpagintation);
	}			
	$cpagintation = str_replace("[prev-link]", $plink,$cpagintation);
	$cpagintation = str_replace("[firstpage]", $firstpagelink,$cpagintation);
	
	if($plink == ""){
		$cpagintation = str_replace("[/prev-link]", "",$cpagintation);
		$cpagintation = str_replace("[/firstpage]", "",$cpagintation);
	}else{
		$cpagintation = str_replace("[/prev-link]", "</a>",$cpagintation);
		$cpagintation = str_replace("[/firstpage]", "</a>",$cpagintation);
	}
	$cpagintation = str_replace("[next-link]", $nlink,$cpagintation);
	$cpagintation = str_replace("[lastpage]", $lastpagelink,$cpagintation);
	if($nlink == ""){
		$cpagintation = str_replace("[/next-link]", "",$cpagintation);
		$cpagintation = str_replace("[/lastpage]", "",$cpagintation);
	}else{
		$cpagintation = str_replace("[/next-link]", "</a>",$cpagintation);
		$cpagintation = str_replace("[/lastpage]", "</a>",$cpagintation);
	}
	$cpagintation = str_replace("{pages}", $pages,$cpagintation);
	$cpagintation = str_replace("{newpages}", $newpages,$cpagintation);	
	
	$cpagintation = str_replace("{currentpage}", $ccurrentpage, $cpagintation);
	$cpagintation = str_replace("{previouspage}", $cpreviouspage, $cpagintation);
	$cpagintation = str_replace("{nextpage}", $cnextpage, $cpagintation);
	$cpagintation = str_replace("{pid}", ID, $cpagintation);
	$cpagintation = str_replace("{friendlytitle}", $cfriendlytitle, $cpagintation);
	return $cpagintation;
}
function formatnewspagintation(){
	global $npagintation, $pages,$newpages,$firstpagelink,$plink,$lastpagelink,$nlink, $currentpage, $nextpage, $previouspage;
	if(!$plink){
		$npagintation = preg_replace('#\[prev-link\](.*?)\[\/prev-link\]#se','', $npagintation);
	}
	if(!$firstpagelink){
		$npagintation = preg_replace('#\[firstpage\](.*?)\[\/firstpage\]#se','', $npagintation);
	}
	if(!$lastpagelink){
		$npagintation = preg_replace('#\[lastpage\](.*?)\[\/lastpage\]#se','', $npagintation);
	}		
	if(!$nlink){
		$npagintation = preg_replace('#\[next-link\](.*?)\[\/next-link\]#se','', $npagintation);
	}

	$npagintation = str_replace("[prev-link]", $plink,$npagintation);
	$npagintation = str_replace("[firstpage]", $firstpagelink,$npagintation);
	
	if($plink == ""){
		$npagintation = str_replace("[/prev-link]", "",$npagintation);
		$npagintation = str_replace("[/firstpage]", "",$npagintation);
	}else{
		$npagintation = str_replace("[/prev-link]", "</a>",$npagintation);
		$npagintation = str_replace("[/firstpage]", "</a>",$npagintation);
	}
	$npagintation = str_replace("[next-link]", $nlink,$npagintation);
	$npagintation = str_replace("[lastpage]", $lastpagelink,$npagintation);
	if($nlink == ""){
		$npagintation = str_replace("[/next-link]", "",$npagintation);
		$npagintation = str_replace("[/lastpage]", "",$npagintation);
	}else{
		$npagintation = str_replace("[/next-link]", "</a>",$npagintation);
		$npagintation = str_replace("[/lastpage]", "</a>",$npagintation);
	}
	$npagintation = str_replace("{pages}", $pages,$npagintation);
	$npagintation = str_replace("{newpages}", $newpages,$npagintation);
	
	$npagintation = str_replace("{currentpage}", $currentpage, $npagintation);
	$npagintation = str_replace("{previouspage}", $previouspage, $npagintation);
	$npagintation = str_replace("{nextpage}", $nextpage, $npagintation);
	return $npagintation;
}
function strip_only($str, $tags, $stripContent = false) {
	$content = '';
	if(!is_array($tags)) {
		$tags = (strpos($str, '>') !== false ? explode('>', str_replace('<', '', $tags)) : array($tags));
		if(end($tags) == '') array_pop($tags);
	}
	foreach($tags as $tag) {
		if ($stripContent)
			$content = '(.+</'.$tag.'[^>]*>|)';
		$str = preg_replace('#</?'.$tag.'[^>]*>'.$content.'#is', '', $str);
	}
	return $str;
}
function displayhtml($str){
	$str = str_replace("&","&amp;",$str);
	$str = str_replace("<","&lt;",$str);
	$str = str_replace(">","&gt;",$str);
	$str = str_replace("\"","&quot;",$str);
	return $str;
}
function addrating($parent, $value){
	###update rating system
	if($value){
		$ip = $_SERVER['REMOTE_ADDR'];
		$alreadyrated = DataAccess::fetch("SELECT COUNT(uid) AS alreadyrated FROM " . NEWS_RATING . " WHERE ip = ? AND storyid = ?", $ip, $parent);
		$alreadyrated = $alreadyrated['0']['alreadyrated'];
		if($alreadyrated == (int)"1"){
			return "Already rated";
		}else{
			#make sure the user enters onl 1-5
			if($value == (int)"1" || $value == (int)"2" || $value == (int)"3" || $value == (int)"4" || $value == (int)"5"){
				#add rating
				DataAccess::put("INSERT INTO " . NEWS_RATING . " (vote,ip,storyid) VALUES (?, ?, ?)", $value, $ip, $parent);
				$average = DataAccess::fetch("SELECT avg(vote) AS average FROM " . NEWS_RATING . " WHERE storyid = ?", $parent);
				$average = $average['0']['average'];
				DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET rating = ? WHERE id = ?", $average, $parent);
				return "Success";
			}else{
				#incase the user tries to post with a value other than 1-5
				#do nothing
				return false;
			}
		}
		#$ratingvalue = slash2($_POST['ratingvalue']);
		#echo $ratingvalue;
	}
}
function nothingtoseehere($str){
	//move along now
	return $str . base64_decode("PGRpdiBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyBmb250LWZhbWlseTogVmVyZGFuYTsgZm9udC1zaXplOiA4cHQiPlBvd2VyZWQgYnkgPGEgaHJlZj0iaHR0cDovL25ldHdvcmstMTMuY29tIj5OLTEzIE5ld3M8L2E+PC9kaXY+");
}
function dologout(){
	DataAccess::put("UPDATE " . NEWS_USERS . " SET cookie = ? , language = ? WHERE uid = ?", "", "", $_SESSION['uid']);
	setcookie('data', false);
	setcookie('name', false);
	setcookie('language', false);
	session_destroy();
	header ("Location: ?");
}
function setcookies($name,$uid,$language){
	$hash	= rand(0,9999999);
	$hash	= md5(SALT . $hash);
	if(!file_exists(ABSPATH . '/language/' . basename($_SESSION['language']) . '.php')){
		$language = 'English';
	}	

	DataAccess::put("UPDATE " . NEWS_USERS . " SET cookie = ?, language = ? WHERE user = ?", $hash, $language, $name);
	setcookie("data", $hash, time()+60*60*24*90);
	setcookie("name", $name, time()+60*60*24*90);
	setcookie("language", $language, time()+60*60*24*90);
}

function checkcookie(){
	$_COOKIE['data']	= (empty($_COOKIE['data'])) ? '' : $_COOKIE['data'];

	$_COOKIE['name']	= (empty($_COOKIE['name'])) ? '' : $_COOKIE['name'];
	if($_COOKIE['data']){
		$data = $_COOKIE['data'];
		$user = $_COOKIE['name'];
		$cookie_exists = DataAccess::fetch("SELECT email, user, uid, language FROM " . NEWS_USERS . " WHERE user = ? AND cookie = ?", $user, $data);
		if(count($cookie_exists) > 0){ 
			$uid		= $cookie_exists['0']['uid'];
			$language	= $cookie_exists['0']['language'];
			$name		= $cookie_exists['0']['user'];
			$email		= $cookie_exists['0']['email'];
			$_SESSION['userlogged20']	= "true";
			$_SESSION['name']			= $name;
			$_SESSION['email']			= $email;
			$_SESSION['uid']			= $uid;
			$_SESSION['language']		= $language;
		}
	}
}


function uniqueid2(){
	$id = md5(uniqid(rand(), true));
	$id = md5($id);
	$id = substr($id,0,20);
	return $id;
}
function makefriendly($str){
	$str = str_replace("%20","-",$str);
	$str = preg_replace("/[^a-z\d]/i", "-", $str);
	$str = str_replace("--", "-", $str);
	$str = str_replace("--", "-", $str);
	$str = trim($str, "-");
	$str = $str . SUFFIX;
	return $str;
}
function ascii_encode($string) {
	$i = strlen($string);
	$s = 0;
	$encoded = '';
	while($s < $i){
	$encoded .= "&#" . ord(substr($string,$s)) . ";";
	$s++;
	}
	return $encoded;
}
function slash2($string) {
#	if(get_magic_quotes_gpc()) {
#		return $string;
#	}else{
#		return addslashes($string);
#	}
return $string;
}
function uniqueid(){
	$str = md5(uniqid(rand(), true));
	$str = substr($str,rand(0,16),16);
	return $str;
}
function bbcode($str,$usehtml,$style){
	global $image_clickable;
	$str = bb2html($str,$usehtml,$style);	 
	return $str; 	
}
function getsmilies(){
	$allsmilies = DataAccess::fetch("SELECT keycode,path FROM " . NEWS_SMILIES . " WHERE showhide = ? ORDER BY 0+ID", "1");
	$smilies = '';
	foreach($allsmilies AS $smiley){
		$smilies .= "<a href=\"javascript:insertsmiley('" . $smiley['keycode'] . "');\"><img border=\"0\" src=\"" . $smiley['path'] . "\" alt=\"" . $smiley['keycode'] . "\"></a>\n";
	}
	$jscript	= "\n<script type=\"text/javascript\">\n";
	$jscript	.= " //<![CDATA[\n";
	$jscript	.= " function insertsmiley(key){\n";
	$jscript	.= " document.commentsform.message.value=document.commentsform.message.value+' '+ key;\n";
	$jscript	.= " document.commentsform.message.focus();\n";
	$jscript	.= "}\n";
	$jscript	.= "//]]>";
	$jscript	.= "\n</script>\n";
	return $jscript . $smilies;
}

function allnews(){
	global $langmsg, $postids;
	$all = DataAccess::fetch("SELECT access, " . NEWS_USERS . ".uid, " . NEWS_ACCESS . ".accesslevel as accesslevel FROM " . NEWS_USERS . "
	LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid 
	WHERE user = ?", $_SESSION['name']);
	$all	= $all['0'];
	$access	= $all['accesslevel'];
	$id		= $all['uid'];
	if($_GET['archives'] == "true"){
		$showarchives = '1';
	}else{
		$showarchives = '0';			
	}
	$_GET['filtercat'] = (empty($_GET['filtercat'])) ? '' : $_GET['filtercat'];
	if($access == "3"){
		if($_GET['filtercat']){
			$sql = "SELECT DISTINCT " . NEWS_ARTICLES . ".id FROM " . NEWS_ARTICLES . " 
			LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
			WHERE archived = '$showarchives'";					
			$sql .= " AND " . NEWS_GROUPCATS . ".type = 'news' AND " . NEWS_GROUPCATS . ".catid = ?";
			$allnews = DataAccess::fetch($sql, $_GET['filtercat']);	
		}else{
			$sql = "SELECT DISTINCT " . NEWS_ARTICLES . ".id FROM " . NEWS_ARTICLES . " 
			LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
			WHERE archived = '$showarchives'";
			$allnews = DataAccess::fetch($sql);				    
		}
	}elseif($access == 2){
		if($_GET['filtercat']){
			$sql = "SELECT DISTINCT " . NEWS_ARTICLES . ".id FROM " . NEWS_ARTICLES . "
			LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid
			LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid
			LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid 
			WHERE (author = '$id' OR " . NEWS_ACCESS . ".accesslevel = '1') AND archived = '$showarchives'";					
			$sql .= " AND " . NEWS_GROUPCATS . ".type = 'news' AND " . NEWS_GROUPCATS . ".catid = ?";
			$allnews = DataAccess::fetch($sql, $_GET['filtercat']);	
		}else{
			$sql = "SELECT DISTINCT " . NEWS_ARTICLES . ".id FROM " . NEWS_ARTICLES . "
			LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid
			LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid
			LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid 
			WHERE (author = '$id' OR " . NEWS_ACCESS . ".accesslevel = '1') AND archived = '$showarchives'";
			$allnews = DataAccess::fetch($sql);				    
		}
	}elseif($access == 1){
		if($_GET['filtercat']){
			$sql = "SELECT DISTINCT " . NEWS_ARTICLES . ".id FROM " . NEWS_ARTICLES . " 
			LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
			WHERE author = '$id' AND archived = '$showarchives'";
			$sql .= " AND " . NEWS_GROUPCATS . ".type = 'news' AND " . NEWS_GROUPCATS . ".catid = ?";
			$allnews = DataAccess::fetch($sql, $_GET['filtercat']);
		}else{
			$sql = "SELECT DISTINCT " . NEWS_ARTICLES . ".id FROM " . NEWS_ARTICLES . " 
			LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
			WHERE author = '$id' AND archived = '$showarchives'";
			$allnews = DataAccess::fetch($sql);				    
		}
	}
				
	$totalnews = count($allnews);
	$_SESSION['newsoptions'] = (empty($_SESSION['newsoptions'])) ? '' : $_SESSION['newsoptions'];
	if($_SESSION['newsoptions'] == true){
		$_POST['changeoptions'] = (empty($_POST['changeoptions'])) ? '' : $_POST['changeoptions'];
		if($_POST['changeoptions']){						
			$_SESSION['amounttoshow']	= $_POST['newsoptions_amount'];
			$_SESSION['sortby']			= $_POST['newsoptions_sort'];
			$_SESSION['order']			= $_POST['newsoptions_order'];
			$_SESSION['newsoptions']	= true;	
			$amounttoshow				= $_SESSION['amounttoshow'];
			$sortby						= $_SESSION['sortby'];
			$order						= $_SESSION['order'];
		}else{
			$amounttoshow	= $_SESSION['amounttoshow'];
			$sortby			= $_SESSION['sortby'];
			$order			= $_SESSION['order'];
			if(!$order){ $order = 'DESC'; }					
		}
	}else{
		$_POST['changeoptions'] = (empty($_POST['changeoptions'])) ? '' : $_POST['changeoptions'];
		if($_POST['changeoptions']){
			$_SESSION['amounttoshow']	= $_POST['newsoptions_amount'];
			$_SESSION['sortby']			= $_POST['newsoptions_sort'];
			$_SESSION['order']			= $_POST['newsoptions_order'];
			$_SESSION['newsoptions']	= true;
			$amounttoshow				= $_SESSION['amounttoshow'];
			$sortby						= $_SESSION['sortby'];
			$order						= $_SESSION['order'];
		}else{
			$sortby						= NEWS_ARTICLES . '.timestamp';
			$amounttoshow				= 15;
			$order						= 'DESC';
			$_SESSION['order']			= $order;
			$_SESSION['newsoptions']	= true;
			$_SESSION['amounttoshow']	= $amounttoshow;								
			$_SESSION['sortby']			= $sortby;
			$_SESSION['newsoptions']	= true;			
		}
	}


	#$amounttoshow = 15;
	#$amounttoshow = $_POST['newsoptions_amount'];
	$_GET['page'] = (empty($_GET['page'])) ? '' : $_GET['page'];
	$page = $_GET['page'];
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

	if($access == "3"){						
		$sql	= "SELECT DISTINCT title, story, shortstory, author, origauthor, ip, timestamp, allowcomments, short, approved, id, (SELECT COUNT(id) FROM " . NEWS_COMMENTS . " WHERE " . NEWS_COMMENTS . ".pid = " . NEWS_ARTICLES . ".id) AS numcomments,
				" . NEWS_ARTICLES . ".id AS postid, " . NEWS_ARTICLES . ".approved AS postapproved, 
				(SELECT COUNT(uid) FROM " . NEWS_LINKEDFILES . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS totalfiles,
				(SELECT " . NEWS_USERS . ".user FROM " . NEWS_USERS . " WHERE " . NEWS_USERS . ".uid = " . NEWS_ARTICLES . ".author) AS authorname,  
				" . NEWS_USERS . ".user FROM " . NEWS_ARTICLES . "						
				LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid
				LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
				WHERE archived = '$showarchives' "; 						
		if($_GET['filtercat']){
			$sql .= "AND " . NEWS_GROUPCATS . ".type = 'news' AND " . NEWS_GROUPCATS . ".catid = ?";	
		}												
		$sql .= " ORDER BY $sortby $order LIMIT $start, $amounttoshow";
	}elseif($access == "2"){
		$sql	= "SELECT DISTINCT title, story, shortstory, author, origauthor, ip, timestamp, allowcomments, short, approved, id, " . NEWS_ARTICLES . ".approved AS postapproved, (SELECT COUNT(id) FROM " . NEWS_COMMENTS . " WHERE " . NEWS_COMMENTS . ".pid = " . NEWS_ARTICLES . ".id) AS numcomments,
				" . NEWS_ARTICLES . ".id AS postid, 
				(SELECT COUNT(uid) FROM " . NEWS_LINKEDFILES . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS totalfiles,
				(SELECT " . NEWS_USERS . ".user FROM " . NEWS_USERS . " WHERE " . NEWS_USERS . ".uid = " . NEWS_ARTICLES . ".author) AS authorname,  
				" . NEWS_USERS . ".user FROM " . NEWS_ARTICLES . "						 
				LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid	
				LEFT JOIN " . NEWS_ACCESS . " on " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid
				LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
				WHERE (author = '$id' OR " . NEWS_ACCESS . ".accesslevel = '1')
				AND archived = '$showarchives' ";
		if($_GET['filtercat']){
			$sql .= "AND " . NEWS_GROUPCATS . ".type = 'news' AND " . NEWS_GROUPCATS . ".catid = ?";	
		}						
		$sql .= " ORDER BY $sortby $order LIMIT $start, $amounttoshow";
	}elseif($access == "1"){
		$sql	= "SELECT DISTINCT title, story, shortstory, author, origauthor, ip, timestamp, allowcomments, short, approved, id, (SELECT COUNT(id) FROM " . NEWS_COMMENTS . " WHERE " . NEWS_COMMENTS . ".pid = " . NEWS_ARTICLES . ".id) AS numcomments,
				" . NEWS_ARTICLES . ".id AS postid, " . NEWS_ARTICLES . ".approved AS postapproved, 
				(SELECT COUNT(uid) FROM " . NEWS_LINKEDFILES . " WHERE storyid = " . NEWS_ARTICLES . ".id) AS totalfiles,
				(SELECT " . NEWS_USERS . ".user FROM " . NEWS_USERS . " WHERE " . NEWS_USERS . ".uid = " . NEWS_ARTICLES . ".author) AS authorname,  
				" . NEWS_USERS . ".user FROM " . NEWS_ARTICLES . "						 
				LEFT JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid
				LEFT JOIN " . NEWS_GROUPCATS . " ON " . NEWS_ARTICLES . ".id = " . NEWS_GROUPCATS . ".storyid
				WHERE author = '$id'
				AND archived = '$showarchives' ";
		if($_GET['filtercat']){
			$sql .= "AND " . NEWS_GROUPCATS . ".type = 'news' AND " . NEWS_GROUPCATS . ".catid = ?";	
		}						
		$sql .= " ORDER BY $sortby $order LIMIT $start, $amounttoshow";                    	
	}
	$d = 1;
	$pages = '';
	while($d <= $amountofpages){
		if($amountofpages !== 1){        
			if($d == $page){
				$pages .= "<span class=\"page2\">$d</span> ";	
			}else{
				$pages .= "<a class=\"page1\" href=\"admin.php?action=editnews&filtercat=$_GET[filtercat]&archives=$_GET[archives]&page=$d\">$d</a> ";	
			}
		}
		$d++;						
	}
	if($amountofpages == 1 || $page == 1){
		$plink = "";
	}else{
		$g = $page - 1;
		$plink = "<a class=\"page1\" href=\"admin.php?action=editnews&filtercat=$_GET[filtercat]&archives=$_GET[archives]&page=$g\"><</a> ";	
	}

	if($amountofpages == $page || $amountofpages == 0){
		$nlink = ""; 
	}else{
		$g = $page + 1;
		$nlink = "<a class=\"page1\" href=\"admin.php?action=editnews&filtercat=$_GET[filtercat]&archives=$_GET[archives]&page=$g\">></a>";                                                          
	}
	if($_GET['filtercat']){
		$allnews = DataAccess::fetch($sql, $_GET['filtercat']);
	}else{
		$allnews = DataAccess::fetch($sql);
	}
	$shownnews = count($allnews);
	$langmsg['editnews'][1] = $langmsg['editnews'][1] . " <b>$shownnews</b> " . $langmsg['editnews'][21] . " <b>$totalnews</b> " . $langmsg['editnews'][22]; 
	echo "<div onclick=\"toggle_section2('newsoptions')\" class=\"subheaders subheaders2 slink\" style=\"cursor: pointer\"><div style=\"float: right\">";

	echo "<span style=\"cursor: pointer; text-decoration: underline;\">".$langmsg['editnews'][2]."</span>&nbsp;</div>".$langmsg['editnews'][1]."</div><form style=\"margin: 0px\" method=\"POST\" name=\"editform\" id=\"editform\" action=\"?action=editnews&archives=" . $_GET['archives'] . "&filtercat=" . $_GET['filtercat'] . "\">\n";
	echo "<div class=\"subheaders_body displaytable\" style=\"";
	if($_POST['changeoptions']){
		echo "display: table";
	}else{
		echo "display: none;";
	} 
	echo "text-align: left; margin-bottom: 18px; width: 691px\" id=\"section_newsoptions\">";
	if($_GET['archives']){ $archives = "true"; }else{ $archives = ''; }
	echo $langmsg['editnews'][25] . " <select onchange=\"editnews_filtercat('$archives');\" id=\"filter_cat\" style=\"margin-right: 6px; margin-top: -2px\" name=\"filter_cat\">";


	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$allowedcats = $allowedcats['0']['cats'];

	$d = '';
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			$d .= "id LIKE '$c' OR ";
		}
	$d = substr($d,0,(strlen($d) - 3));
	$d = "WHERE " . $d;			            
	}

	$sql = "SELECT * FROM " . NEWS_CATS . " $d ORDER BY name";

	$selcats = DataAccess::fetch($sql);
	echo "<option value=\"\"></option>";
	foreach($selcats AS $row){
		echo "<option value=\"$row[id]\"";
		if($_GET['filtercat'] == $row['id']){
			echo " selected=\"selected\"";
		}
		echo ">" . $row['name'] . "</option>";
	}

	echo "</select>";	
	echo "<hr />";
	echo $langmsg['editnews'][3] . " <select name=\"newsoptions_amount\">";
	$amount = $_SESSION['amounttoshow'];
	for($i=1; $i<=50; $i++){
		echo "<option"; 
		if($amount == $i){
			echo " selected=\"selected\"";
		}
		echo " value=\"$i\">$i</option>";
	}
	$sort = $_SESSION['sortby'];
	echo "</select> ".$langmsg['editnews'][4]." <select name=\"newsoptions_sort\">";
	echo "<option value=\"" . NEWS_ARTICLES . ".timestamp\""; if($sort == NEWS_ARTICLES . ".timestamp"){ echo " selected=\"selected\""; } echo ">".$langmsg['selectfield'][11]."</option>";
	echo "<option value=\"" . NEWS_ARTICLES . ".title\""; if($sort == NEWS_ARTICLES . ".title"){ echo " selected=\"selected\""; } echo ">".$langmsg['selectfield'][12]."</option>";
	echo "<option value=\"" . NEWS_ARTICLES . ".author\""; if($sort == NEWS_ARTICLES . ".author"){ echo " selected=\"selected\""; } echo ">".$langmsg['selectfield'][13]."</option>";
	echo "<option value=\"numcomments\""; if($sort == "numcomments"){ echo " selected=\"selected\""; } echo ">".$langmsg['selectfield'][15]."</option>";
	echo "<option value=\"" . NEWS_ARTICLES . ".approved\""; if($sort == NEWS_ARTICLES . ".approved"){ echo " selected=\"selected\""; } echo ">Approval</option>";
	echo "</select>";
	echo " ".$langmsg['editnews'][5]." ";
	$order = $_SESSION['order'];
	echo "<select name=\"newsoptions_order\">";
	echo "<option value=\"ASC\""; if($order == "ASC"){ echo " selected=\"selected\""; } echo ">Ascending</option>";
	echo "<option value=\"DESC\""; if($order == "DESC"){ echo " selected=\"selected\""; } echo ">Descending</option>";
	echo "</select> <input type=\"submit\" name=\"changeoptions\" value=\"".$langmsg['submitfield'][0]."\" />"; 
	echo "<br><br></div>";
	

	$i = 0;
	$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . "");
	$cats = array();
	foreach($allcats AS $row2){                                         		
		$cats[$i] = array("name" => $row2['name'], "id" => $row2['id']);
		$i++;                                        		
	}
	echo "<br />";
	echo "<table id=\"rows\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
	echo "<tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"25%\">".$langmsg['editnews'][7]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['editnews'][8]."</td><td class=\"tableshead tablerightborder\" width=\"15%\"><a href=\"javascript:void(0); showalleditnewscats()\">".$langmsg['editnews'][9]."</a></td><td class=\"tableshead tablerightborder\" width=\"11%\">".$langmsg['editnews'][10]."&nbsp;</td><td width=\"15%\" class=\"tableshead tablerightborder\" >".$langmsg['editnews'][11]."</td><td width=\"15%\" class=\"tableshead tablerightborder\">".$langmsg['editnews'][12]."</td><td class=\"tableshead tablerightborder\"><input name=\"allcheck\" id=\"allcheck\" onclick=\"selectall()\" type=\"checkbox\" /></td></tr>\n";
											
	$tmpcolor = "1";
	$d = 1;
	$postids = array();
	foreach($allnews AS $row){                                        
		if($tmpcolor == 1){
			$class = "row1";
			$tmpcolor = 2;
		}elseif($tmpcolor = 2){
			$class = "row2";
			$tmpcolor = 1;
		}
		echo "  <tr onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" id=\"$d\" class=\"$class\">\n";
		$numcomments = $row['numcomments'];
		if($row['allowcomments'] == "0"){
			$numcomments = $langmsg['editnews'][20];
		}
		$title = $row['title'];
		$totalfiles = $row['totalfiles'];
		$title = "$title";
		if($row['totalfiles'] > 0){
			$hasfiles = "<img class=\"slink\" src=\"images/icons/page_white_office.png\" onclick=\"showhideeditnewsfiles('files_" . $d . "')\" style=\"\" />";
		}else{
			$hasfiles = '';
		}
		echo "    <td class=\"tablebody tablerightborder\"><a href=\"?action=editnews&id=$row[postid]\"><img src=\"images/icons/pencil.png\" alt=\"Edit\" Title=\"Edit\" /></a>$hasfiles</td><td class=\"tablebody tablerightborder\"><div style=\"height: 17px; width: 136px; overflow: hidden\">$title</div></td><td class=\"tablebody tablerightborder\">";
		unset($hasfiles);
		if(!$row['user']){
			echo $row['origauthor'];
		}else{
			echo $row['user'];
		}
		if($row['postapproved'] == "1"){
			$approved = "<span style=\"color: #00AA00\">" . $langmsg['editnews'][14] . "</span>";
		}else{
			$approved = "<span style=\"color: #AA0000\">" . $langmsg['editnews'][15] . "</span>";
		}
		$groupcats 		= DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "news", $row['postid']);
		$catsperstory	= count($groupcats);
		$dcats = '';
		foreach($groupcats AS $row2){
			$dcats .= ":".$row2['catid'].":";
		}
		if(count($cats) > 0){ 
			foreach($cats as $cat){
				$dcats = str_replace(":" . $cat['id'] . ":",$cat['name'] .", ",$dcats);
			}
		}
		$dcats = substr($dcats,0,strlen($dcats) - 2);
		if($catsperstory > 0){
			$g = "<a href=\"#\" id=\"showcatlink_$row[postid]\" onclick=\"this.style.display = 'none'; document.getElementById('showcats_$row[postid]').style.display = '';\">".$langmsg['editnews'][13]."</a>";
		}else{
			$g = "<a href=\"#\" id=\"showcatlink_$row[postid]\" onclick=\"this.style.display = 'none'; document.getElementById('showcats_$row[postid]').style.display = '';\"></a>";
		}
		echo "</td><td class=\"tablebody tablerightborder\">$g<span style=\"display: none\" id=\"showcats_$row[postid]\">$dcats</span>";
		echo "</td><td class=\"tablebody tablerightborder\">" . date("d-m-y" ,$row['timestamp']) . "</td><td class=\"tablebody tablerightborder\">$approved</td><td align=center class=\"tablebody tablerightborder\"><a href=\"?action=editcomments&pid=$row[postid]\">$numcomments</a></td><td class=\"tablebody\"><input type=\"checkbox\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" value=\"$row[postid]\" id=\"check_$d\" name=\"selectedposts[]\">";
		echo "</td></tr>\n";
		if($row['totalfiles'] > 0){
			echo "<tr style=\"display: none\" id=\"files_$d\"><td style=\"\" style=\"background-color: #FFFFFF\" colspan=\"8\">";
			echo "<table width=\"100%\" cellpadding=\"0\" style=\"background-color: #FFFFFF\" cellspacing=\"0\">";
			echo "<tr><td class=\"tableshead tablerightborder\" style=\"width: 136px;\">" . $langmsg['uploadedfiles'][23] . "</td><td class=\"tableshead tablerightborder\" >" . $langmsg['uploadedfiles'][12] . "</td><td class=\"tableshead tablerightborder\" >" . $langmsg['uploadedfiles'][33] . "</td><td class=\"tableshead tablerightborder\" >" . $langmsg['uploadedfiles'][24] . "</td><td class=\"tableshead tablerightborder\" >" . $langmsg['uploadedfiles'][34] . "</td><td class=\"tableshead\" >" . $langmsg['uploadedfiles'][25];	
			$files = DataAccess::fetch("SELECT title, url, filesize, downloadcount, author, timestamp FROM " . NEWS_FILES . " WHERE uid IN (SELECT fileid FROM " . NEWS_LINKEDFILES . " WHERE storyid = ?)", $row['postid']);
			foreach($files AS $file){
				echo "<tr>";
				echo "<td class=\"tablebody tablerightborder\">";		
				#echo "<img src=\"images/icons/page_white_office.png\" style=\"postition: absolute; float: left; margin-left: -20px;\" />";
				echo $file['title'] . "</td>";
				echo "<td class=\"tablebody tablerightborder\">" . basename($file['url']) . "</td>";
				echo "<td class=\"tablebody tablerightborder\">" . $file['downloadcount'] . "</td>";
				echo "<td class=\"tablebody tablerightborder\">" . round($file['filesize'],1) . " KB</td>";
				echo "<td class=\"tablebody tablerightborder\">" . date("j-m-y",$file['timestamp']) . "</td>";
				$uploader = DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $file['author']);
				$uploader = $uploader['0']['user'];
				echo "<td class=\"tablebody\">$uploader</td>";			
				echo "</tr>";
			}
			echo "</table>";
		}
		$d++;
		$postids[] = $row['postid'];
	}


	echo "</table>\n";
	echo "<div align=\"right\" style=\"float: right\">";
	echo "<select name=\"action\" id=\"action\" onclick=\"editnewsaction();\">";
	echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
	echo "<option value=\"addtoarchive\">Add to archive</option>";
	echo "<option value=\"removefromarchive\">Remove from archive</option>";
	echo "<option value=\"allowcomments\">".$langmsg['selectfield'][5]."</option>";
	$canapprove = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".canapprove FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$canapprove = $canapprove['0']['canapprove'];
	if($canapprove == "1"){
		echo "<option value=\"changeapproval\">".$langmsg['selectfield'][6]."</option>";
	}
	echo "<option value=\"resetview\">" . $langmsg['selectfield'][20] . "</option>";
	echo "<option value=\"resetratings\">" . $langmsg['selectfield'][21] . "</option>";
	echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
	echo "</select>&nbsp;";
	echo "<select style=\"margin-right: 2px; display: none\" id=\"allowcomments\" name=\"allowcomments\"><option value=\"1\">".$langmsg['selectfield'][1]."</option><option value=\"0\">".$langmsg['selectfield'][2]."</option><option value=\"2\">".$langmsg['selectfield'][4]."</option></select>";
	echo "<select id=\"approveaction\" style=\"margin-right: 2px; display: none\" name=\"approveaction\">";
	echo "<option value=\"1\">".$langmsg['selectfield'][9]."</option>";
	echo "<option value=\"0\">".$langmsg['selectfield'][10]."</option>";
	echo "</select>";
	echo "<input type=\"button\" value=\"".$langmsg['submitfield'][0]."\" class=\"nostyle\" onclick=\"doeditaction();\" name=\"S1\" /></div>";
	if($amountofpages > 1){
		echo "<br />";
		echo "<br />";
		echo "<div style=\"float: right\">$plink $pages $nlink</div>";
	}
	echo "</form>\n";
}
function selectimages(){
	global $langmsg, $imageuploaddir, $imageupload_thumbnails;
	echo "<div style=\"display: none\" id=\"whichbox\">x</div>";
	echo "<div style=\"position: absolute; width: 580px; left: 35%; display: none; z-index: 10001\" id=\"imagebox\">";
	echo "<div style=\"width:580px; height: 340px; background-color: #FFFFFF; padding: 10px; border: 1px solid #AAAAAA; position: absolute; left: -190px\">";
	echo "<a style=\"float: right; text-decoration: underline; cursor: pointer\" onclick=\"bbcode('image','story')\">[close]</a><span class=\"header\" style=\"padding-left: 0px; background-color: #FFFFFF\">" . $langmsg['newsform'][23] . "</span>";
	echo "<hr />";
	echo "<input id=\"imageurl\" type=\"text\" style=\"width: 300px\" value=\"http://\" /> <input type=\"button\" onclick=\"insertimage(document.getElementById('whichbox').innerHTML,''+ document.getElementById('imageurl').value + ''); bbcode('image','')\" value=\"" . $langmsg['newsform'][24] . "\" />";
	
	echo "<br />";
	echo "<br />";
	echo "<span style=\"float: right\">";
	echo "<select name=\"news_selectcat\" onchange=\"newschangecatgroup();\" id=\"news_selectcat\">";
	echo "<option value=\"1\"></option>";

	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']); 														
	if($allowedcats['0']['cats'] !== "all"){
		$e = $allowedcats['0']['cats'];
		if(!$e){ $e = ''; }else{ $e = "WHERE id IN ($e)"; }
		$allcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " $e ORDER BY name");	
	}else{
		$allcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " ORDER BY name");
	}
		
	$g = 2;
	foreach($allcats AS $row){			
		echo "<option value=\"$g\"";
		$_GET['catid'] = (empty($_GET['catid'])) ? '' : $_GET['catid'];
		if(in_array($_GET['catid'], $allcats)){
			echo " selected=\"selected\"";							
		}
		echo ">" . $row['name'] . "</option>";
		$g++;
	}
		
	echo "</select>";
	echo "</span>";
	echo "<span class=\"header\" style=\"background-color: #FFFFFF; padding-left: 0px\">" . $langmsg['newsform'][25] . "</span>";
	echo '<hr style="clear: both; background-color: #FFFFFF; color: #FFFFFF; border: 1px solid #FFFFFF" />
	<hr style="clear: both;" />';
	
	
	$b = 0;
	echo "<div style=\"height: 225px; width: 580px; overflow: auto\">";

	// container for loading thumbnails
	echo "<div id=\"thumbnails_container\">";		

	#get all images not assigned to cats
	echo "<div id=\"imagecat_1\">";
	#echo $xsql;
	$noncatimages = DataAccess::fetch("SELECT file,filesize,uploader,height,width,uid FROM " . NEWS_IMAGES . " WHERE uid NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'image') ORDER BY uid DESC");
	$totalfilesize = 0;
	foreach($noncatimages AS $row){ 
		$file = $row['file'];
		list($width, $height, $type, $attr) = getimagesize($imageuploaddir . $file);
		if($width > 80 || $height > 80){
			$new_width	= $width;
			$new_height	= $height;
			$percent = 0.9;					
			while($new_width > 80|| $new_height > 80){
				$new_width	= $width * $percent;
				$new_height	= $height * $percent;
				$percent	= $percent - 0.01;
			}
		}else{
			$new_width	= $width;
			$new_height	= $height;			
		} 		 
	 		 
		$filesize = round(filesize($imageuploaddir . $file) / 1024,0);
		$totalfilesize += $filesize;
		$filesize .= " KB";
		$x = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		$x = str_replace(basename($_SERVER['REQUEST_URI']),SCRIPTPATH . 'uploads/' . $file,$x); 		 
		
		echo '<div style="float: left; width: 112px; height: 130px"><div id="'.$b.'" class="thumbnail" style="cursor: pointer">';
		echo '<div style="text-align: left">';
		
		echo '</div>';
		if($imageupload_thumbnails == "1"){
			echo "<img onclick=\"insertimage(document.getElementById('whichbox').innerHTML,'";				
			echo UPLOADPATH . $file;				
			echo "'); bbcode('image','')\" width=\"$new_width\" height=\"$new_height\" style=\"background-color: #FFFFFF; border: 1px solid #DDDDDD\" src=\"?action=options&mod=imageuploads&thumb=" . UPLOADPATH . $file . "&height=$new_height&width=$new_width\" />";
		}else{
			echo '<img onclick="insertimage(document.getElementById(\'whichbox\').innerHTML,\''.UPLOADPATH . $file.'\'); bbcode(\'image\',\'\')" width="'.$new_width.'" height="'.$new_height.'" style="background-color: #FFFFFF; border: 1px solid #DDDDDD" src="'.$imageuploaddir.$file.'" />';
		}
		echo '</div></div>'; 		 	 		 	 		 
 		$b++;
	}									
	echo "</div>";
									

	
	echo "</div>";
	//
	
		
	

	echo '</div></div>'; 		   
				   



	echo "</div>";
	echo "</div>";
	echo "</div>";
	
}
function newsform($type){
	global $imageuploaddir,$newsform_options, $langmsg, $imageupload_thumbnails;
	$uploaddir = $imageuploaddir;

	if(!$_POST['S1']){
		$allowcomments	= 1;
		$day			= date('d',time());						
		$month			= date('F',time());
		$year			= date('Y',time());
		$hour			= date('H',time());
		$minute			= date('i',time());
		$second			= date('s',time());

		$archive_day		= date('d',time());
		$archive_month		= date('F',time());
		$archive_year		= date('Y',time());
		$archive_hour		= date('H',time());
		$archive_minute		= date('i',time());
		$archive_second		= date('s',time());						
		$neverarchive		= $newsform_options['never_archive'];
		$togglesummary		= $newsform_options['toggle_summary'];
		$allowcomments		= $newsform_options['allow_comments'];
		$togglearchive		= $newsform_options['toggle_archive'];
		$toggledate			= $newsform_options['toggle_date'];
		
		$title				= $langmsg['news'][50];
		$story				= '';
		$shortstory			= '';	
		
		$changecolor		= "onfocus=\"this.style.color='#000000'; if(this.value=='" . $langmsg['news'][50] . "'){ this.value=''; }\" style=\"width: 99%; color: #AAAAAA\" ";
		
		if($_GET['action'] == "editnews"){
			 if(!$_POST['S1']){		
				$id					= $_GET['id'];
				$all				= DataAccess::fetch("SELECT old,title,story,shortstory,author,origauthor,ip,timestamp,allowcomments,short,approved,viewcount,rating,archivedate,neverarchive,archived,id FROM " . NEWS_ARTICLES . " WHERE id = ?", $id);	
				$title				= displayhtml($all['0']['title']);
				if($all['0']['old'] == "1"){
					$story			= bbcode(displayhtml($all['0']['story']), '1', '1');
					$shortstory		= bbcode(displayhtml($all['0']['shortstory']), '1', '1');
				}else{
					$story			= displayhtml($all['0']['story']);
					$shortstory		= displayhtml($all['0']['shortstory']);
				}
				if($shortstory){
					$togglesummary = '1';
				}else{
					$togglesummary = '0';
				}
				$allowcomments		= htmlspecialchars($all['0']['allowcomments']);
				$day	= date('d',$all['0']['timestamp']);						
				$month	= date('F',$all['0']['timestamp']);
				$year	= date('Y',$all['0']['timestamp']);
				$hour	= date('H',$all['0']['timestamp']);
				$minute	= date('i',$all['0']['timestamp']);
				$second	= date('s',$all['0']['timestamp']);

				$archive_day	= date('d',$all['0']['archivedate']);						
				$archive_month	= date('F',$all['0']['archivedate']);
				$archive_year	= date('Y',$all['0']['archivedate']);
				$archive_hour	= date('H',$all['0']['archivedate']);
				$archive_minute	= date('i',$all['0']['archivedate']);
				$archive_second	= date('s',$all['0']['archivedate']);
				$neverarchive	= $all['0']['neverarchive'];				
 			}								
			$changecolor		= 'style="width: 99%" ';
			if($shortstory){
				$newsform_options['toggle_summary'] = "1";
			}	
		}
	}else{
		$day	= $_POST['day'];
		$month	= $_POST['month'];
		$year	= $_POST['year'];		
		$hour	= $_POST['hour'];
		$minute	= $_POST['minute'];
		$second	= $_POST['second'];
		
		
		$archive_day	= (empty($_POST['archive_day'])) ? '' : $_POST['archive_day'];
		$archive_month	= (empty($_POST['archive_month'])) ? '' : $_POST['archive_month'];
		$archive_year	= (empty($_POST['archive_year'])) ? '' : $_POST['archive_year'];
		$archive_hour	= (empty($_POST['archive_hour'])) ? '' : $_POST['archive_hour'];
		$archive_minute	= (empty($_POST['archive_minute'])) ? '' : $_POST['archive_minute'];
		$archive_second	= (empty($_POST['archive_second'])) ? '' : $_POST['archive_second'];
		$neverarchive	= (empty($_POST['neverarchive'])) ? '' : $_POST['neverarchive'];

				
		$allowcomments		= htmlspecialchars($_POST['allowcomments']);
		$title				= displayhtml($_POST['title']); 
		$shortstory			= displayhtml($_POST['shortstory']);
		$story				= displayhtml($_POST['story']);
		
	
		$changecolor		= 'style="width: 99%" ';
		if($_POST['shortstory']){
			$togglesummary = '1';
		}else{
			$togglesummary = '0';
		}
	}

	if($type == "addnews"){
		echo "<form method=\"POST\" name=\"post\" action=\"?action=addnews\">\n";
	}else{
		echo "<form method=\"POST\" name=\"post\" action=\"?action=editnews&id=".htmlspecialchars($_GET['id'])."\">\n";
	}
	echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"692px\">\n";
	echo "<tr>\n";
	echo "\n";
	echo "<td valign=\"top\"  width=\"100%\">\n";

	echo "<div class=\"subheaders\">" . $langmsg['editnews'][7] . "</div>";
	echo "<div class=\"subheaders_body\" style=\"display: block; width: 692px; height: 28px\">";
	
	
	echo "<input type=\"text\" name=\"title\" $changecolor class=\"newborder\" value=\"$title\" /></td>\n";
	echo "</div>";
	echo "</tr>\n";
	selectimages();
	#used to let javascript count how many cat sections are shown.

	
   


	
	echo "<tr>";
	echo "<td>";



	#echo "  <hr style=\"clear: both\" />";
	
			
	


	if($_GET['action'] == "addnews"){
		if($_POST['S1']){
			$_POST['selectedfiles'] = (empty($_POST['selectedfiles'])) ? '' : $_POST['selectedfiles'];
			$selectedfiles	= array();
			$selectedfiles	= $_POST['selectedfiles'];	
		}	
	}else{
		if(!$_POST['S1']){
			$id					= $_GET['id'];
			$allselectedfiles	= DataAccess::fetch("SELECT fileid FROM " . NEWS_LINKEDFILES . " WHERE storyid = ?", $id);
			$selectedfiles		= array();
			foreach($allselectedfiles AS $row){
				$selectedfiles[] = $row['fileid'];	
			}
		}else{
			$selectedfiles = array();
			$_POST['selectedfiles'] = (empty($_POST['selectedfiles'])) ? array() : $_POST['selectedfiles'];
			$selectedfiles = $_POST['selectedfiles'];
		}
	}




	echo "\n\n\n<div style=\"position: absolute; width: 580px; left: 35%; display: none; z-index: 10001\" id=\"filebox\">";
	echo "<div style=\"width:580px; height: 350px; background-color: #FFFFFF; padding: 10px; border: 1px solid #AAAAAA; position: absolute; left: -190px\">";
	echo "<a style=\"float: right; text-decoration: underline; cursor: pointer\" onclick=\"bbcode('files','story')\">[close]</a>";
				
	
	echo "<br />";
	echo "<br />";
	
	echo "<span style=\"float: right\">";
	echo "<select name=\"news_selectcat\" onchange=\"newsfilechangecatgroup();\" id=\"news_fileselectcat\">";
	echo "<option value=\"1\"></option>";

	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);	
	$allowedcats = $allowedcats['0']['cats'];   														
	if($allowedcats !== "all"){
		$e = $allowedcats;
		if(!$e){ $e = ''; }else{ $e = "WHERE id IN ($e)"; }
		$selectedcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " $e ORDER BY name");			            
	}else{
		$selectedcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " ORDER BY name");
	}
		
	$g = 2;
	foreach($selectedcats AS $row){		            	
			echo "<option value=\"$g\"";
			if($_GET['catid'] == $row['id']){
				echo " selected=\"selected\"";							
			}
			echo ">" . $row['name'] . "</option>";
			$g++;
	}

	
	echo "</select>";
	echo "</span>";
	echo "<span class=\"header\" style=\"background-color: #FFFFFF; padding-left: 0px\">".$langmsg['newsform'][19]."</span>";
	echo '<hr style="clear: both; background-color: #FFFFFF; color: #FFFFFF; border: 1px solid #FFFFFF" />
	<hr style="clear: both;" />';
	
	
	
	echo "<div style=\"height: 250px; width: 580px; overflow: auto\">";
	
	

	#get all files not assigned to cats
	echo "<div id=\"filecat_1\" class=\"show\" style=\"width: 100%\">";
	echo "<table id=\"rows\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">";
	echo "<tr><td width=\"20%\" class=\"tableshead tablerightborder\">".$langmsg['uploadedfiles'][23]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['uploadedfiles'][12]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['newsform'][20]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][24]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['newsform'][21]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][25]."</td><td class=\"tableshead\"></td></tr>";
	$currentpath	= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$currentpath	= "http://" . $currentpath;
	$g				= $currentpath;
	$x				= explode("admin.php",$g);
	$url			= $x[0] . $uploaddir;
	$tmpcolor		= 1;
	$d				= 1;													
	$nocatfiles		= DataAccess::fetch("SELECT title,url,filesize,downloadcount,author,timestamp," . NEWS_FILES . ".uid," . NEWS_USERS . ".user FROM " . NEWS_FILES . " 
					LEFT JOIN " . NEWS_USERS . " ON " . NEWS_FILES . ".author = " . NEWS_USERS . ".uid
					WHERE " . NEWS_FILES . ".uid NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'file') ORDER BY " . NEWS_FILES . ".uid DESC");
	foreach($nocatfiles AS $row){
		$file = $row['title'];
		if($tmpcolor == "1"){
			$class		= "row1";
			$tmpcolor	= "2";
		}else{
			$class		= "row2";
			$tmpcolor	= "1";
		}
		$uploader = $row['user'];
		$uploaded = date("j-m-y",$row['timestamp']);
		$filename = basename($row['url']);
		$filesize = round($row['filesize'],1) . " KB";
		echo "<tr id=\"x$d\" onmouseover=\"markfield('x$d')\" onmouseout=\"unmarkfield('x$d')\" class=\"$class";
		if(count($selectedfiles) > 0){
			if(in_array($row['uid'],$selectedfiles)){
				echo " rowhighlight";
			}
		}                   
		echo "\"><td class=\"tablebody tablerightborder\">$file</td><td class=\"tablebody tablerightborder\">$filename</td><td class=\"tablebody tablerightborder\" style=\"text-align: right\">$row[downloadcount]<td class=\"tablebody tablerightborder\">$filesize</td><td class=\"tablebody tablerightborder\">$uploaded</td><td class=\"tablebody tablerightborder\">$uploader</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row[uid]\" onclick=\"if(document.getElementById('check_x'+$d).checked == true){ markfield('x$d'); }else{ unmarkfield('x$d') }\" id=\"check_x$d\"";
		$selectedfiles = (empty($selectedfiles)) ? array() : $selectedfiles;
		if(count($selectedfiles) > 0){
			if(in_array($row['uid'],$selectedfiles)){
				echo "checked=\"checked\" ";	
			}
		}
		echo " name=\"selectedfiles[]\"></td></tr>";

	$d++;
	}
	echo "</table>";									
	echo "</div>";
							
	$f = 2;													
	##show files for all cats the user can access							
	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$allowedcats = $allowedcats['0']['cats'];
	if($allowedcats !== "all"){
		$a = explode(",",$allowedcats);
		foreach($a as $c){
			echo "<div id=\"filecat_$f\" class=\"noshow\" style=\"width: 100%\">";
			echo "<table id=\"rows\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">";
			echo "<tr><td width=\"20%\" class=\"tableshead tablerightborder\">".$langmsg['uploadedfiles'][23]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['uploadedfiles'][12]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['newsform'][20]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][24]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['newsform'][21]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][25]."</td><td class=\"tableshead\"></td></tr>";
			$filecats = DataAccess::fetch("SELECT storyid,catid,type,uid FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = 'file'", $c);					
			foreach($filecats AS $row){
				$x = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				$url = str_replace(basename($_SERVER['REQUEST_URI']),$uploaddir,$x);
				$tmpcolor = 1;
				#$selectedfiles = DataAccess::fetch("SELECT title,url,filesize,downloadcount,author,timestamp,uid FROM " . NEWS_FILES . " WHERE uid = ?", $row['storyid']);																			
				$catfiles = DataAccess::fetch("SELECT title,url,filesize,downloadcount,author,timestamp," . NEWS_USERS . ".user," . NEWS_FILES . ".uid FROM " . NEWS_FILES . " 
				LEFT JOIN " . NEWS_USERS . " ON " . NEWS_FILES . ".author = " . NEWS_USERS . ".uid
				WHERE " . NEWS_FILES . ".uid IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = 'file')", $row['storyid']);
				foreach($catfiles AS $row2){ 
					$file = $row2['title'];
					if($tmpcolor == "1"){
						$class		= "row1";
						$tmpcolor	= "2";
					} else {
						$class		= "row2";
						$tmpcolor	= "1";
					}
					$filesize = round($row2['filesize'],1) . " KB";
					$uploader = $row2['user'];
					$uploaded = date("j-m-y",$row2['timestamp']);  								
					$filename = basename($row2['url']);
					echo "<tr id=\"x$d\" onmouseover=\"markfield('x$d')\" onmouseout=\"unmarkfield('x$d')\" class=\"$class";
					if(count($selectedfiles) > 0){
						if(in_array($row2['uid'],$selectedfiles)){
							echo " rowhighlight";
						}
					}											
					echo "\"><td class=\"tablebody tablerightborder\">$file</td><td class=\"tablebody tablerightborder\">$filename</td><td class=\"tablebody tablerightborder\" style=\"text-align: right\">$row2[downloadcount]<td class=\"tablebody tablerightborder\">$filesize</td><td class=\"tablebody tablerightborder\">$uploaded</td><td class=\"tablebody tablerightborder\">$uploader</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row2[uid]\" onclick=\"if(document.getElementById('check_x'+$d).checked == true){ markfield('x$d'); }else{ unmarkfield('x$d') }\" id=\"check_x$d\"";
					if(count($selectedfiles) > 0){
						if(in_array($row2['uid'],$selectedfiles)){
							echo "checked=\"checked\" ";	
						}
					}											
					echo "name=\"selectedfiles[]\"></td></tr>";

				$d++;
				}
				
			}
			echo "</table>";
			echo "</div>";
			$f++;
		}

	}else{
		$allcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " ORDER BY name ASC");
		foreach($allcats AS $xrow){
			echo "<div id=\"filecat_$f\" class=\"noshow\" style=\"width: 100%\">";
			echo "<table id=\"rows\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">";
			echo "<tr><td width=\"20%\" class=\"tableshead tablerightborder\">".$langmsg['uploadedfiles'][23]."</td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['uploadedfiles'][12]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['newsform'][20]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][24]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['newsform'][21]."</td><td class=\"tableshead tablerightborder\" width=\"15%\">".$langmsg['uploadedfiles'][25]."</td><td class=\"tableshead\"></td></tr>";
			$filecats = DataAccess::fetch("SELECT storyid,catid,type,uid FROM " . NEWS_GROUPCATS . " WHERE catid = ? AND type = 'file'", $xrow['id']);
			foreach($filecats AS $row){
				$x = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
				$url = str_replace(basename($_SERVER['REQUEST_URI']),$uploaddir,$x);
				$tmpcolor = 1;
				$catfiles = DataAccess::fetch("SELECT title,url,filesize,downloadcount,author,timestamp," . NEWS_USERS . ".user," . NEWS_FILES . ".uid FROM " . NEWS_FILES . " 
				LEFT JOIN " . NEWS_USERS . " ON " . NEWS_FILES . ".author = " . NEWS_USERS . ".uid
				WHERE " . NEWS_FILES . ".uid IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = 'file')", $row['storyid']);
				foreach($catfiles AS $row2){                        													
					$file = $row2['title'];
					if($tmpcolor == "1"){
						$class		= "row1";
						$tmpcolor	= "2";
					} else {
						$class		= "row2";
						$tmpcolor	= "1";
					}
					$filesize = round($row2['filesize'],1) . " KB";                                                    
					$uploader = $row2['user'];
					$uploaded = date("j-m-y",$row2['timestamp']);  								
					$filename = basename($row2['url']);
					echo "<tr id=\"x$d\" onmouseover=\"markfield('x$d')\" onmouseout=\"unmarkfield('x$d')\" class=\"$class";
					$selectedfiles = (empty($selectedfiles)) ? array() : $selectedfiles;
					if(count($selectedfiles)){
						if(in_array($row2['uid'],$selectedfiles)){
							echo " rowhighlight";
						}
					}											
					echo "\"><td class=\"tablebody tablerightborder\">" .  $file . "</td><td class=\"tablebody tablerightborder\">$filename</td><td class=\"tablebody tablerightborder\" style=\"text-align: right\">$row2[downloadcount]<td class=\"tablebody tablerightborder\">$filesize</td><td class=\"tablebody tablerightborder\">$uploaded</td><td class=\"tablebody tablerightborder\">$uploader</td><td class=\"tablebody\"><input type=\"checkbox\" value=\"$row2[uid]\" onclick=\"if(document.getElementById('check_x'+$d).checked == true){ markfield('x$d'); }else{ unmarkfield('x$d') }\" id=\"check_x$d\"";
					if(count($selectedfiles) > 0){
						if(in_array($row2['uid'],$selectedfiles)){
							echo "checked=\"checked\" ";	
						}
					}									
					echo "name=\"selectedfiles[]\"></td></tr>";
					$d++;
				}
			}
			echo "</table>";
			echo "</div>";
			$f++;
		}
	}

	#used to let javascript count how many cat sections are shown.
	$f--;
	echo "<span style=\"display: none\" id=\"totalcatgroups\">$f</span>";
	

	echo '</div>';
	echo "<div style=\"float: right\"><input type=\"button\" value=\"Select\" style=\"margin-bottom: 30px\" onclick=\"bbcode('files','story')\" /></div>";
	echo '</div>'; 		   
			   





				
	echo "</td></tr>\n";
	echo "<div id=\"smileybox\" style=\"z-index: 10001; width: 150px; background-color: #FFFFFF; border: 1px solid #AAAAAA; padding: 5px; margin-left: 470px; margin-top: 40px; display: none; position: absolute\">";
	echo "<a style=\"float: right; text-decoration: underline; cursor: pointer\" onclick=\"document.getElementById('smileybox').style.display = 'none'; document.getElementById('fade').style.display = 'none';\">[close]</a><span class=\"header\" style=\"background-color: #FFFFFF; padding-left: 0px\">Smilies</span><hr />";
	echo "<div id=\"storysmilies\">";
	$smilies = DataAccess::fetch("SELECT path, keycode FROM " . NEWS_SMILIES . "");
	foreach($smilies AS $row){
		echo "<img style=\"cursor: pointer\" onclick=\"insertsmiley('$row[keycode]', '$row[path]', 'shortstory') \" src=\"$row[path]\" /> ";
	}
	echo "</div>";
	
	echo "</div>";
						

	$bbcode = '';																	            
	$f = str_replace('{1}','shortstorysmilies',$bbcode);
	$f = str_replace('{2}','storysmilies',$f);
	#echo $f;							            
	echo "<tr><td>$f</td></tr>";
	echo "</tr>\n";
						
	echo "  <tr>\n";
	echo "    <td valign=\"top\">\n";
	echo "<div class=\"subheaders slink\" style=\"\" onclick=\"toggle_section('article')\">" . $langmsg['newsform'][22] . "</div>";
	$enablewysiwyg = DataAccess::fetch("SELECT enablewysiwyg FROM " . NEWS_USERS . " WHERE user = ?", $_SESSION['name']);
	$enablewysiwyg =  $enablewysiwyg['0']['enablewysiwyg'];
	if($enablewysiwyg == "1"){
		$useck = "ckeditor";
	}else{
		$useck = '';
	}

	echo "<div id=\"section_article\"";
	if($newsform_options['toggle_article'] == "0"){
		echo " style=\"display: none\"";
	}
	echo ">";
	echo "  <textarea class=\"$useck\" id=\"story\" class=\"story\" name=\"story\" style=\"width: 100%; height: 250px;\">$story</textarea>\n";
	echo "</div>";
	echo "</td></tr><tr><td>";
	
	echo "<div class=\"subheaders subheaders2 slink\" style=\"\" onclick=\"toggle_section('summary')\">" . $langmsg['news'][51] . "</div>";
	echo "<div id=\"section_summary\" ";
		if($togglesummary == "0"){
			echo " style=\"display: none\" ";
		}else{
		
		}	
	echo ">";
	echo "<textarea name=\"shortstory\" class=\"$useck\" style=\"width: 100%; height: 250px\">$shortstory</textarea>";
	echo "</div>";
	echo "</td></tr>";
	echo "</table>";
	echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">";
	

		echo "<tr><td valign=\"top\" style=\"width: 40%; padding-right: 5px\">";
		
	echo "<div class=\"subheaders subheaders2 slink\" style=\"text-align: left;\" onclick=\"toggle_section('categories')\">" . $langmsg['menu'][9] . "<a href=\"#\" style=\"text-decoration: none\"><span></span></a></div>";
	echo "<div class=\"subheaders_body\" id=\"section_categories\" ";
	if($newsform_options['toggle_categories'] == "0"){
		echo "style=\"width: 334px; display: none; text-align: left;\">";
	}else{
		echo "style=\"width: 334px; text-align: left;\">";
	}
	$allowedcats = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".cats FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']); 														
	if($allowedcats['0']['cats'] !== "all"){
		$e = $allowedcats['0']['cats'];
		if(!$e){ $e = ''; }else{ $e = "WHERE id IN ($e)"; }		
		$allcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " $e ORDER BY name");
		$num = count($allcats);        	            
	}else{
		$allcats = DataAccess::fetch("SELECT name, id FROM " . NEWS_CATS . " ORDER BY name");
		$num = count($allcats);
	}	
	if($num < 1){
		echo "<i>" . $langmsg['news'][52] . "</i>";
	}
	foreach($allcats AS $row){
		#if($catid == $row['id']){ echo "selected=selected"; } 
		echo "<div style=\"float: left\"><input type=\"checkbox\" ";
		if($_GET['action'] == "addnews"){
			if($_POST){
				$_POST['cats'] = (empty($_POST['cats'])) ? '' : $_POST['cats'];
				if(is_array($_POST['cats'])){
					if(count($_POST['cats']) > 0){
						if(in_array($row['id'], $_POST['cats'])) {
							echo "checked=\"checked\" ";
						}
					}
				}
			}
		}elseif($_GET['action'] == "editnews"){
			if(!$_POST['S1']){		            
				$catids = DataAccess::fetch("SELECT catid FROM " . NEWS_GROUPCATS . " WHERE type = 'news' AND storyid = ?", $_GET['id']);
				$cats = array();
				foreach($catids AS $row2){
					$cats[] = $row2['catid'];
				}
				if(count($cats) > 0){
					if(in_array($row['id'], $cats)) {
						echo "checked=\"checked\" ";
					}
				}
			}else{
				$_POST['cats'] = (empty($_POST['cats'])) ? '' : $_POST['cats'];
				if(is_array($_POST['cats'])){			
					if(count($_POST['cats']) > 0){
						if(in_array($row['id'], $_POST['cats'])) {
							echo "checked=\"checked\" ";
						}
					}
				}
			}
		}
		
		echo "style=\"margin-right: 1px; width: 15px; padding-left: 0px; margin-left: 0px\" name=\"cats[]\" value=\"$row[id]\" id=\"cat_$row[id]\"><label for=\"cat_$row[id]\" style=\"vertical-align: text-top; margin-left: 1px; padding-right: 20px\">$row[name]</label></div>";
	}
	echo "<br style=\"clear: both\" />";
	echo "</div>";

		
	echo "</td>";
	echo "<td valign=\"top\" style=\"width: 50%\" align=\"right\">";
	
	echo "<div class=\"subheaders subheaders2 slink\" style=\"text-align: left;\" onclick=\"toggle_section('comments')\">" . $langmsg['newsform'][7] . "<a href=\"#\" style=\"text-decoration: none\"><span></span></a></div>";
	echo "<div class=\"subheaders_body\" ";
	if($newsform_options['toggle_comments'] == "0"){
		echo " style=\"width: 339px; display: none; text-align: left\" ";
	}else{
		echo " style=\"width: 339px; text-align: left\" ";
	}
	
	echo "id=\"section_comments\">";
	echo "<span>Allow comments for this article</span><br /><br />";
	echo "<select name=\"allowcomments\">";
	echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
	echo "<option";
	if($allowcomments == "1"){ echo " selected=selected"; }
	echo " value=\"1\">".$langmsg['selectfield'][1]."</option>";
	
	echo "<option";
	if($allowcomments == "0"){ echo " selected=selected"; }
	echo " value=\"0\">".$langmsg['selectfield'][2]."</option>";
	
	echo "<option";
	if($allowcomments == "2"){ echo " selected=selected"; }
	echo " value=\"2\">".$langmsg['selectfield'][4]."</option>";
	
	echo "</select>";

	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td valign=\"top\" style=\"padding-right: 5px; width: 50%\">";

	
	echo "<div class=\"subheaders subheaders2 slink\" style=\"\" onclick=\"toggle_section('date')\">" . $langmsg['news'][53] . "<a href=\"#\" style=\"text-decoration: none\"><span></span></a></div>";
	echo "<div class=\"subheaders_body\" id=\"section_date\" ";
	if($newsform_options['toggle_date'] == "0"){
		echo "style=\"width: 334px; display: none;\">";
	}else{
		echo "style=\"width: 334px; \">";
	}
	
	echo "<span>" . $langmsg['news'][54] . "</span><br /><br />";
	echo "<select class=\"datesdropdown\" name=\"day\">";
	$i = 01;
	while($i <= 31){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\" "; if($day == $i){ echo " selected=\"selected\"";} echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	
	echo " <select class=\"datesdropdown\" name=\"month\">";
	
	$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
	$months_short = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$i = 0;
	while($i < count($months)){
		echo "<option value=\"" . $months[$i] . "\""; if($month == $months[$i]){ echo "selected=\"selected\""; } echo ">" . $months_short[$i] . "</option>";
		$i++;
	}
	echo "</select>";
	
	$i = "1970";
	echo " <select class=\"datesdropdown\"  name=\"year\">";
	while($i <= 2037){
		echo "<option value=\"$i\""; if($year == $i){ echo "selected=\"selected\""; } echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	
	$i = 0;
	echo " <select class=\"datesdropdown\" name=\"hour\">";
	while($i <= 23){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\""; if($hour == $i){ echo "selected=\"selected\"";} echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	

	$i = 0;
	echo " <select class=\"datesdropdown\" name=\"minute\">";
	while($i <= 59){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\" "; if($minute == $i){ echo "selected=\"selected\""; } echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	
	$i = 0;
	echo " <select class=\"datesdropdown\" name=\"second\">";
	while($i <= 59){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\" "; if($second == $i){ echo "selected=\"selected\""; } echo ">$i</option>";
		$i++;					
	}
	echo "</select>";	

	
	echo "</td>";
	echo "<td valign=\"top\" align=\"right\" style=\"padding-right: 0px; width: 50%\">";



	echo "<div class=\"subheaders subheaders2 slink\" style=\"text-align: left;\" onclick=\"toggle_section('archive')\">" . $langmsg['news'][55] . "</div>";
	echo "<div class=\"subheaders_body\" id=\"section_archive\"";
	if($newsform_options['toggle_archive'] == "0"){
		echo " style=\"width: 339px; display: none; text-align: left;\" ";
	}else{
		echo " style=\width: 339px; text-align: left;\" ";
	}
	echo ">";

	echo "<span style=\"\"><input id=\"neverarchive\" ";
		if($neverarchive){
			echo "checked=\"checked\" ";
		}
	echo "name=\"neverarchive\" type=\"checkbox\"><label for=\"neverarchive\">".$langmsg['newsform'][18]."</label></span><br /><br />";
	echo "<select class=\"datesdropdown\" name=\"archive_day\">";
	$i = 01;
	while($i <= 31){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\" "; if($archive_day == $i){ echo " selected=\"selected\"";} echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	
	echo " <select class=\"datesdropdown\" name=\"archive_month\">";
	
	$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
	$months_short = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$i = 0;
	while($i < count($months)){
		echo "<option value=\"" . $months[$i] . "\""; if($archive_month == $months[$i]){ echo "selected=\"selected\""; } echo ">" . $months_short[$i] . "</option>";
		$i++;
	}
	echo "</select>";
	
	$i = "1970";
	echo " <select class=\"datesdropdown\" name=\"archive_year\">";
	while($i <= 2037){
		echo "<option value=\"$i\""; if($archive_year == $i){ echo "selected=\"selected\""; } echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	
	$i = 0;
	echo " <select class=\"datesdropdown\" name=\"archive_hour\">";
	while($i <= 23){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\""; if($archive_hour == $i){ echo "selected=\"selected\"";} echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	

	$i = 0;
	echo " <select class=\"datesdropdown\" name=\"archive_minute\">";
	while($i <= 59){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\" "; if($archive_minute == $i){ echo "selected=\"selected\""; } echo ">$i</option>";
		$i++;
	}
	echo "</select>";
	
	$i = 0;
	echo " <select class=\"datesdropdown\" name=\"archive_second\">";
	while($i <= 59){
		$i = sprintf("%02d",$i);
		echo "<option value=\"$i\" "; if($archive_second == $i){ echo "selected=\"selected\""; } echo ">$i</option>";
		$i++;					
	}
	echo "</select>";
		


	echo "</div>";
		
	echo "</td>";
	echo "</tr>";
	echo "<tr><td style=\"width: 50%; padding-top: 10px; padding-right: 5px;\">";
	echo "<button type=\"submit\" name=\"S1\" value=\"Preview\" style=\"width: 100%\">".$langmsg['submitfield'][1]."</button></td><td style=\"width: 50%; padding-top: 10px; padding-left: 0px\"><input style=\"width: 100%\" type=\"submit\" value=\"";
	if($_GET['action'] == "add"){
		echo $langmsg['submitfield'][2];
	}else{
		echo $langmsg['submitfield'][3];
	}
   
	echo "\" name=\"S1\">\n";
	echo "</td></tr>";

	echo " </td> </tr>\n";
	echo "</table>\n";
	echo "</form>\n";
}
?>