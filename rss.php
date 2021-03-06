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

define('ABSPATH', dirname(__FILE__) . '/' );

require_once(ABSPATH . 'db.php');
require_once(ABSPATH . 'config.php');

$_GET['feed'] = (empty($_GET['feed'])) ? '' : $_GET['feed'];
$feed = $_GET['feed'];
$rssexists = DataAccess::fetch("SELECT name,location,title,description,encoding,language,amounttodisplay,rsscode,nocats,feedid FROM " . NEWS_FEEDS . " WHERE name = ?", $feed);
if(!$rssexists){
    die("RSS Feed doesn't exist.");    
}
$all			= $rssexists['0'];
$rsslanguage	= $all['language'];
$rssdescription	= $all['description'];
$rssencoding	= $all['encoding'];
$rsstitle		= $all['title'];
$rssamount		= slash2($all['amounttodisplay']);
$newslocation	= $all['location'];
$rsscode		= $all['rsscode'];
$feedid			= $all['feedid'];
$nocats			= $all['nocats'];
if($rssamount == "0"){
	$rssamount = '999999';   
}

if(!$newslocation){
	die("RSS Feed not configured. Please login to the admin area goto <b>Options</b> > <b>RSS Feeds</b>");
}
header("Content-type: text/xml");
$feedlocation = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?feed=" . $_GET['feed'];
echo '<?xml version="1.0" encoding="'.$rssencoding.'" ?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
 <channel>
 <atom:link href="<?php echo $feedlocation; ?>" rel="self" type="application/rss+xml" />
   <title><?php echo $rsstitle; ?></title>
   <link><?php echo $newslocation; ?></link>
   <language><?php echo $rsslanguage; ?></language>
   <description><?php echo $rssdescription; ?></description>
   <!-- RSS 2.0 file generated by N-13 News -->
   <generator>N-13 News 4.0</generator>
<?php
	$prefix = DataAccess::fetch("SELECT furlprefix FROM " . NEWS_OPTIONS . " WHERE 1");
	$prefix = $prefix['0']['furlprefix'];
    //select all categories this rss feed has been assigned
    //then select all news posts assigned to those same cats
    //if nocats = 1 also select all posts not assigned to cats
    $sql = "SELECT old,title,story,shortstory,author,origauthor,ip,timestamp,allowcomments,short,approved,viewcount,rating,archivedate,neverarchive,archived,id, 
	" . NEWS_USERS . ".user AS authorname, 
	" . NEWS_USERS . ".avatar AS authoravatar, 
	commentcount AS comments
	FROM " . NEWS_ARTICLES . " INNER JOIN " . NEWS_USERS . " ON " . NEWS_ARTICLES . ".author = " . NEWS_USERS . ".uid WHERE id IN (";
        if($nocats == "1"){
            $sql .= "SELECT id AS storyid FROM " . NEWS_ARTICLES . " WHERE id NOT IN (SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'news') UNION ";
        }                
    $sql .= "SELECT storyid FROM " . NEWS_GROUPCATS . " WHERE type = 'news' AND catid IN (SELECT catid FROM " . NEWS_GROUPCATS . " WHERE type = 'rss' AND storyid = ?) ) AND archived = '0' ORDER BY timestamp DESC LIMIT 0, $rssamount";
    $newsstories = DataAccess::fetch($sql, $feedid);
    foreach($newsstories AS $row){

		if(FRIENDLY){
			$fullurl = $newslocation . $prefix . $row['id'] . "-0-" . makefriendly($row[title]);
		}else{
			$fullurl = $newslocation . '?id=' . $row['id']; 
		}

		$sql3 = "SELECT " . NEWS_CATS . ".name AS catname FROM " . NEWS_GROUPCATS . " INNER JOIN " . NEWS_CATS . " ON " . NEWS_GROUPCATS . ".catid = " . NEWS_CATS . ".id WHERE storyid = ? AND type = 'news' ORDER BY " . NEWS_CATS . ".name ASC";
		$cats = DataAccess::fetch($sql3, $row['id']);
		$categories = '';
        foreach($cats AS $row3){
			$row3['catname'] = (empty($row3['catname'])) ? '' : $row3['catname'];
			$categories .= $row3['catname'] . CATDELIMITER;
		}
		$categories = substr($categories,0,strlen($categories) - strlen(CATDELIMITER));

		$avatar = DataAccess::fetch("SELECT file FROM " . NEWS_IMAGES . " WHERE uid = ?", $row['authoravatar']);
		$avatar = $avatar['0']['file'];
		$avatar = UPLOADPATH . $avatar;
		
		$rsstemplate = $rsscode;
		$rsstemplate = str_replace("{categories}",$categories,$rsstemplate);	
		$rsstemplate = str_replace("{title}",displayhtml($row['title']),$rsstemplate);
		$rsstemplate = str_replace("{friendlytitle}", makefriendly($row['title']), $rsstemplate);
		$rsstemplate = str_replace("{url}",$fullurl,$rsstemplate);
		$rsstemplate = str_replace("{shortstory}",bbcode($row['shortstory'],0, $row['old']),$rsstemplate);
		$rsstemplate = str_replace("{summary}",bbcode($row['shortstory'],0, $row['old']),$rsstemplate);
		$rsstemplate = str_replace("{story}",bbcode($row['story'],0, $row['old']),$rsstemplate);
		$rsstemplate = str_replace("{article}",bbcode($row['story'],0, $row['old']),$rsstemplate);
		$rsstemplate = str_replace("{date}",date("D, j M Y h:i:s",$row['timestamp']),$rsstemplate);
		$rsstemplate = str_replace("{timezone}",TIMEZONE,$rsstemplate);
		$rsstemplate = str_replace("{timestamp}",$row['timestamp'],$rsstemplate);
		$rsstemplate = str_replace("{author}",$row['authorname'],$rsstemplate);
		$rsstemplate = str_replace("{avatar}",sprintf("<img src=\"%s\" />", $avatar),$rsstemplate);
		$rsstemplate = str_replace("{id}",$row['id'],$rsstemplate);
		$rsstemplate = str_replace("{comments}",$row['comments'],$rsstemplate);
		echo $rsstemplate;
        unset($categories);    
    }
?>
</channel>
</rss>