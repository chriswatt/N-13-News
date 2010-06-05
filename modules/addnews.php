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

echo "<span class=header>".$langmsg['addnews'][3]."</span></div>";
echo "<table width=\"685px\"><tr>";
echo "<td width=\"17%\" align=center valign=top><br />";	            
echo "<img src=\"images/news_1.png\" alt=\"".$langmsg['addnews'][3] . "\"></td><td>";    	

$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
if(!$_POST['S1']){
	newsform("addnews");
}elseif($_POST['S1'] == "Preview"){
	echo "<br /><div class=panel>" . $langmsg['addnews'][0] . "</div><br />";
	$usehtml	= DataAccess::fetch("SELECT " . NEWS_ACCESS . ".usehtml FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$usehtml	= $usehtml['0']['usehtml'];
	$shortstory	= bbcode($_POST['shortstory'],$usehtml);
	$story		= bbcode($_POST['story'],$usehtml);
	echo $shortstory;			
	echo "<br />";
	echo $story;
	echo "<br />";	
	newsform("addnews");
}elseif(!$_POST['title']){
	echo "<div class=\"error\">" . $langmsg['addnews'][1] . "</div>";
	newsform("addnews");
}elseif($_POST['allowcomments'] == ""){
	echo "<div class=\"error\">" . $langmsg['addnews'][2] . "</div>";
	print_r($_POST);
	newsform("addnews");
}else{
	$title = $_POST['title'];
	$catid = $_POST['D1'];
	$story = $_POST['story'];
	$shortstory = $_POST['shortstory'];
	if($_POST['toggleshortstory']){
		$short = "1";
	}else{
		$short = "0";
	}
	$allowcomments	= $_POST['allowcomments'];
	$timestamp		= strtotime("$_POST[day] $_POST[month] $_POST[year] $_POST[hour]:$_POST[minute]:$_POST[second]");;
	$archivedate	= strtotime("$_POST[archive_day] $_POST[archive_month] $_POST[archive_year] $_POST[archive_hour]:$_POST[archive_minute]:$_POST[archive_second]");
	if($_POST['neverarchive']){
		$neverarchive = "1";
	}else{
		$neverarchive = "0";
	}
	$archived	= "0";							
	$author		= $_SESSION['uid'];
	$approved	= DataAccess::fetch("SELECT " . NEWS_ACCESS . ".autoapproved FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
	$approved	= $approved['0']['autoapproved'];
	$ip			= $_SERVER['REMOTE_ADDR'];

	if(getaccess("nocat")){
		DataAccess::put("INSERT INTO " . NEWS_ARTICLES . " 
			(title,story,shortstory,short,author,ip,timestamp,origauthor,allowcomments,approved,archivedate,neverarchive,archived,commentcount)
			VALUES
			(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $title, $story, $shortstory, $short, $author, $ip, $timestamp, $_SESSION['name'], $allowcomments, $approved, $archivedate, $neverarchive, $archived, '0');
		$date		= date(NEWSTIME, $timestamp);
		sendunapprovednotifications($_SESSION['name'],$title,$date);
		#####files
		$o = DataAccess::fetch("SELECT id FROM " . NEWS_ARTICLES . " WHERE timestamp = ?", $timestamp);
		$o = $o['0']['id'];
		$selectedfiles = $_POST['selectedfiles'];
		$selectedfiles = @array_keys(array_flip($selectedfiles));
		if(count($selectedfiles) > 0){
			foreach($selectedfiles as $file){
				DataAccess::put("INSERT INTO " . NEWS_LINKEDFILES . " (storyid, fileid) VALUES (?, ?)", $o, $file);	
			}
		}

		
		$id = DataAccess::fetch("SELECT id FROM " . NEWS_ARTICLES . " WHERE timestamp = ?", $timestamp);
		$id = $id['0']['id'];
		 if(count($_POST['cats']) > 0 ){
			foreach($_POST['cats'] as $cat){
				DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $id, $cat, "news");
			}
		 }
		 echo "<script language=\"javascript\">window.location = '?action=editnews&added=true';</script>";
	}else{
		if(count($_POST['cats']) > 0 ){
			DataAccess::put("INSERT INTO " . NEWS_ARTICLES . " 
				(title,story,shortstory,short,author,ip,timestamp,origauthor,allowcomments,approved,archivedate,neverarchive,archived,commentcount)
				VALUES
				(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $title, $story, $shortstory, $short, $author, $ip, $timestamp, $_SESSION['name'], $allowcomments, $approved, $archivedate, $neverarchive, $archived, '0');
			$newstime	= DataAccess::fetch("SELECT newstime FROM " . NEWS_OPTIONS . " WHERE 1");
			$newstime	= $newstime['0']['newstime'];
			$date		= date($newstime, $timestamp);
			sendunapprovednotifications($_SESSION['name'],$title,$date);
			
			#####files
			$o = DataAccess::fetch("SELECT id FROM " . NEWS_ARTICLES . " WHERE timestamp = ?", $timestamp);
			$o = $o['0']['id'];
			$selectedfiles = $_POST['selectedfiles'];
			$selectedfiles = @array_keys(array_flip($selectedfiles));
			if(count($selectedfiles) > 0){
				foreach($selectedfiles as $file){
					DataAccess::put("INSERT INTO " . NEWS_LINKEDFILES . " (storyid, fileid) VALUES (?, ?)", $o, $file);	
				}
			}

			#print_r($_POST['cats']);
			$id = DataAccess::fetch("SELECT id FROM " . NEWS_ARTICLES . " WHERE timestamp = ?", $timestamp);
			$id = $id['0']['id'];
			if(count($_POST['cats']) > 0 ){
				foreach($_POST['cats'] as $cat){
					DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $id, $cat, "news");
				}
			}											
			echo "<script language=\"javascript\">window.location = '?action=editnews&added=true';</script>";
		}else{
			echo "<div class=\"error\">".$langmsg['addnews'][4] . "</div>";
			newsform("addnews");
		}
	}
}
echo " </td> </tr>\n";
echo "</table>\n";
echo "</form></td></tr></table>\n";	
?>