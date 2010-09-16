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

// Adds the security key image to the admin login form, 1 = on 0 = off
$image_verification = 0;	

// Specify here which language should be used on the login module
$default_login_language = 'English';

// Specify here which language should be used on the index.php file
$default_index_language = 'English';

// Default options for the add news form
$newsform_options['toggle_archive']		= 0; // 0 = Collapse archive options, 1 = Expand archive options
$newsform_options['toggle_date']		= 0; // 0 = Collapse date options, 1 = Expand date options
$newsform_options['toggle_summary']		= 0; // 0 = Collapse summary textbox, 1 = Expand summary textbox
$newsform_options['toggle_comments']	= 0; // 0 = Collapse comments options, 1 = Expand comments options
$newsform_options['toggle_categories']	= 0; // 0 = Collapse category options, 1 = Expand category options
$newsform_options['toggle_article']		= 1; // 0 = Collapse article textbox, 1 = Expand article textbox
$newsform_options['never_archive']		= 1; // 0 = Never archive is not selected, 1 = Never archive is selected
$newsform_options['allow_comments']		= 1; // Default comment options. 0 = No, 1 = Yes, 2 = Needs approval


// Enable or disable automatic creation of thumbnails when viewing uploaded images
// If you're having trouble viewing the thumbnails change this to 0
$imageupload_thumbnails = 1;

// Amount of characters to cut off the category delimiter when displaying categories
// Example 'Cat1, Cat2, Cat3, ' Notice the ending ', ' characters, specifying $catcutoff = 2 will get rid of that
$catcutoff = 2;

// Check if the default timezone has been set, if not set it to UTC
// For a list of supported timezones see here - http://www.php.net/manual/en/timezones.php
// To set your own timezone comment out this code and use this example
// date_default_timezone_set('Europe/London'); 
if(!date_default_timezone_get()){
	date_default_timezone_set('UTC');
}

// Set the language used for formatting dates
setlocale(LC_ALL, 'eng');


/*------ NO NEED TO EDIT BELOW ---------*/
if(!defined('ABSPATH')){
	define('ABSPATH', dirname(__FILE__) . '/' );
}

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


require_once(ABSPATH . '/functions.php');
require_once(ABSPATH . '/bbparser.php');
require_once(ABSPATH . '/recaptchalib.php');

$alloptions = DataAccess::fetch("SELECT * FROM " . NEWS_OPTIONS . " WHERE 1");
$registrationverification = $alloptions['0']['registrationverification'];

define('SPAMTIME',				$alloptions['0']['spamtime']);
define('SPAMMSG',				$alloptions['0']['spammsg']);
define('COMMENTMSG',			$alloptions['0']['commentmsg']);
define('REGCOMMENT',			$alloptions['0']['regcomment']);
define('COMMENTAPPROVEMSG',		$alloptions['0']['commentapprovemsg']);
define('TIMEZONE',				$alloptions['0']['timezone']);
define('BANNEDMSG',				$alloptions['0']['bannedmsg']);
define('COMMENTSORDER',			$alloptions['0']['commentsorder']);
define('CATDELIMITER',			$alloptions['0']['catdelimiter']);
define('COMMENTSNOTIFY',		$alloptions['0']['commentsnotify']);
define('REGISTERNOTIFY',		$alloptions['0']['registernotify']);
define('EMAILNOTIFY',			$alloptions['0']['emailnotify']);
define('UNAPPROVEDNOTIFY',		$alloptions['0']['unapprovednotify']);
define('USEIMGVERIFICATION',	$alloptions['0']['useimgverification']);
define('UPLOADPATH',			$alloptions['0']['uploadpath']);
define('SALT',					$alloptions['0']['salt']);
define('COMMENTSLENGTH',		$alloptions['0']['commentslength']);
define('REGISTRATIONALLOW',		$alloptions['0']['registrationallow']);
define('REGISTRATIONACCESS',	$alloptions['0']['registrationaccess']);
define('REGISTRATIONVERIFICATION',	$alloptions['0']['registrationverification']);
define('PUBLICKEY',				$alloptions['0']['publickey']);
define('PRIVATEKEY',			$alloptions['0']['privatekey']);
define('TAIL',					$alloptions['0']['tail']);
define('ENABLETAIL',			$alloptions['0']['enabletail']);
define('FRIENDLY',				$alloptions['0']['furlenabled']);
define('FILETIME',				$alloptions['0']['filetime']);
define('DELETEOWNCOMMENTS',		$alloptions['0']['deleteowncomments']);
define('LOGINVERIFICATION',		$alloptions['0']['loginverification']);
define('NOACCESSMSG',			$alloptions['0']['noaccessmsg']);
define('NEWSTIME',				$alloptions['0']['newstime']);
define('COMMENTSTIME',			$alloptions['0']['commentstime']);
define('TEMPLATE',				$alloptions['0']['template']);
define('NPPAGE',				$alloptions['0']['nppage']);
define('CPPAGE',				$alloptions['0']['cppage']);
define('NEWSORDER',				$alloptions['0']['newsorder']);
define('SUFFIX',		$alloptions['0']['furlextension']);
define('NEWSSUFFIX',	$alloptions['0']['furldirname']);
define('PREFIX',		$alloptions['0']['furlprefix']);
define('IMAGEPATH',		$alloptions['0']['scriptpath'] . "images/");
define('ADMINPATH',		$alloptions['0']['scriptpath'] . "admin.php");
define('SCRIPTPATH',	$alloptions['0']['scriptpath']);

$version		= $alloptions['0']['version'];

$url 			= explode("-",$_SERVER['REQUEST_URI']);
$g				= explode("/", $url['0']);
$g['2']			= (empty($g['2'])) ? '' : $g['2'];
$url['0']		= $g['2'];
$imageuploaddir = 'uploads/'; #slash at the end is important!
unset($alloptions);

define('SMILIES',	serialize(DataAccess::fetch("SELECT keycode, path FROM " . NEWS_SMILIES)));
define('FILTERS',	serialize(DataAccess::fetch("SELECT filter, alt FROM " . NEWS_FILTER)));


#archive any posts that need to be.
DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET archived = ? WHERE archivedate <= ? AND neverarchive = ?", "1", time(), "0");
?>