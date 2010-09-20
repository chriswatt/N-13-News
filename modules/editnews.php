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


echo '<div id="pageRight" style="width: 705px">';
echo '<div class="headertitle">';
echo "<span class=\"header\">".$langmsg['editnews'][0]."</span>";
$_GET['archives'] = (empty($_GET['archives'])) ? '' : $_GET['archives'];
if($_GET['archives']){
	echo "<span class=\"header\">" . $langmsg['menu'][2] . "</span>";
}
echo "</div>";

$_GET['id'] = (empty($_GET['id'])) ? '' : $_GET['id'];
if(!$_GET['id']){
	
}
$_GET['added'] = (empty($_GET['added'])) ? '' : $_GET['added'];
if($_GET['added'] == "true"){
	echo "<div class=success>".$langmsg['editnews'][16]."</div>";
}elseif($_GET['added'] == "edit"){
	echo "<div class=success>".$langmsg['editnews'][19]."</div>";
}
#selected files being posted from edit news table
$_POST['action'] = (empty($_POST['action'])) ? '' : $_POST['action'];
if($_POST['action']){
	if($_POST['action'] == "delete"){
		$selected = $_POST['selectedposts'];
		if(count($_POST['selectedposts']) !== 0){    		 		
			foreach($selected as $uid){
				DataAccess::put("DELETE FROM " . NEWS_ARTICLES . " WHERE id = ?", $uid);
				DataAccess::put("DELETE FROM " . NEWS_COMMENTS . " WHERE pid = ?", $uid);
				DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $uid, "news");
			}
			echo "<div class=\"success\">".$langmsg['editnews'][17]."</div>";
		}
	}elseif($_POST['action'] == "changeapproval"){
		$selected	= $_POST['selectedposts'];
		$approve	= $_POST['approveaction'];
		$accessdata	= unserialize($_SESSION['accessdata']);
		$canapprove	= $accessdata['0']['canapprove'];
		
		if($canapprove == "1"){
			if(count($_POST['selectedposts']) !== 0){
				$allowcomments = $_POST['allowcomments'];
				foreach($selected as $uid){
					DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET approved = ? WHERE id = ?", $approve, $uid);
				}
				echo "<div class=\"success\">".$langmsg['editnews'][18]."</div>";
			}
		}
	}elseif($_POST['action'] == "resetview"){
		$selected = $_POST['selectedposts'];
		if(count($_POST['selectedposts']) !== 0){
			foreach($selected as $uid){
				DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET viewcount = ? WHERE id = ?", '0', $uid);
			}
			echo "<div class=\"success\">" . $langmsg['editnews'][23] . "</div>";
		}
	}elseif($_POST['action'] == "resetratings"){
		$selected = $_POST['selectedposts'];
		if(count($_POST['selectedposts']) !== 0){
			foreach($selected AS $uid){
				DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET rating = ? WHERE id = ?", '0', $uid);
				DataAccess::put("DELETE FROM " . NEWS_RATING . " WHERE storyid = ?", $uid);
			}
			echo "<div class=\"success\">". $langmsg['editnews'][24] . "</div>";
		}
	}elseif($_POST['action'] == "allowcomments"){
		$selected = $_POST['selectedposts'];
		if(count($_POST['selectedposts']) !== 0){
			$allowcomments = $_POST['allowcomments'];
			foreach($selected as $uid){
				DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET allowcomments = ? WHERE id = ?", $allowcomments, $uid);
			}
			echo "<div class=\"success\">".$langmsg['editnews'][18]."</div>";
		}
	}elseif($_POST['action'] == "addtoarchive"){
		$selected = $_POST['selectedposts'];
		if(count($_POST['selectedposts']) !== 0){    		 		
			foreach($selected as $uid){
				DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET archived = ? WHERE id = ?", "1", $uid);
			}
			echo "<div class=\"success\">".$langmsg['editnews'][18]."</div>";
		}    		 	
	}elseif($_POST['action'] == "removefromarchive"){
		$selected = $_POST['selectedposts'];
		if(count($_POST['selectedposts']) !== 0){    		 		
			foreach($selected as $uid){
				DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET archived = ?, neverarchive = ? WHERE id = ?", "0", "1", $uid);
			}
			echo "<div class=\"success\">".$langmsg['editnews'][18]."</div>";
		}    		 	
	}
}

$_GET['id'] = (empty($_GET['id'])) ? '' : $_GET['id'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
$shownews = false;
if($_GET['id']){
	if(!$_POST['S1']){
		newsform("editnews");
	}elseif($_POST['S1'] == "Preview"){
		echo "<br /><div class=\"panel\">News Preview</div><br />";
		$style = '0';
		$usehtml = DataAccess::fetch("SELECT " . NEWS_ACCESS . ".usehtml FROM " . NEWS_USERS . " LEFT JOIN " . NEWS_ACCESS . " ON " . NEWS_USERS . ".access = " . NEWS_ACCESS . ".uid WHERE " . NEWS_USERS . ".user = ?", $_SESSION['name']);
		$usehtml = $usehtml['0']['usehtml'];
		$story = bbcode($_POST['story'],$usehtml,$style);
		$shortstory = displayhtml($_POST['shortstory']);
		$_POST['toggleshortstory'] = (empty($_POST['toggleshortstory'])) ? '' : $_POST['toggleshortstory'];
		if($_POST['toggleshortstory']){
			echo $shortstory;
			echo "<br />";
		}
		echo $story;	
		echo "<br />";
		newsform("editnews");
	}elseif(!$_POST['title']){
		echo "<div class=\"error\">". $langmsg['addnews'][1]. "</div>";
		newsform("editnews");
	}elseif($_POST['allowcomments'] == ""){
		echo "<div class=\"error\">" . $langmsg['addnews'][2] . "</div>";
		newsform("editnews");
	}else{
		$id				= $_GET['id'];
		$story			= $_POST['story'];
		$shortstory		= $_POST['shortstory'];
		$title			= $_POST['title'];
		$allowcomments	= $_POST['allowcomments']; 
		$_POST['toggleshortstory'] = (empty($_POST['toggleshortstory'])) ? '' : $_POST['toggleshortstory'];
		if($_POST['toggleshortstory']){
			$short = "1";
		}else{
			$short = "0";
		}
		$timestamp = strtotime("$_POST[day] $_POST[month] $_POST[year] $_POST[hour]:$_POST[minute]:$_POST[second]");
		$archivedate = strtotime("$_POST[archive_day] $_POST[archive_month] $_POST[archive_year] $_POST[archive_hour]:$_POST[archive_minute]:$_POST[archive_second]");
		if($_POST['neverarchive']){
			$neverarchive = "1";
		}else{
			$neverarchive = "0";
		}

		DataAccess::put("UPDATE " . NEWS_ARTICLES . " SET old = ?, short = ?, title = ?, story = ?, shortstory = ?, allowcomments = ?, timestamp = ?, archivedate = ?, neverarchive = ? WHERE id = ?", '0', $short, $title, $story, $shortstory, $allowcomments, $timestamp, $archivedate, $neverarchive, $id);
		#####files
		$o = $_GET['id'];
		DataAccess::put("DELETE FROM " . NEWS_LINKEDFILES . " WHERE storyid = ?", $o);
		$_POST['selectedfiles'] = (empty($_POST['selectedfiles'])) ? '' : $_POST['selectedfiles'];
		$selectedfiles = $_POST['selectedfiles'];
		$selectedfiles = @array_keys(array_flip($selectedfiles));
		if(count($selectedfiles) > 0){
			foreach($selectedfiles as $file){
				DataAccess::put("INSERT INTO " . NEWS_LINKEDFILES . " (storyid, fileid) VALUES (?, ?)", $o, $file);
			}	
		}

		DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "news", $_GET['id']);
		$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
		if(count($_POST['cats']) > 0 ){							
			foreach($_POST['cats'] as $cat){
				$id = $_GET['id'];
				DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $id, $cat, "news");
			}
		}
		#echo "<div class=success>".$langmsg['editnews'][19]."</div>";
		$shownews = true;
		echo "<script language=\"javascript\">window.location = '?action=editnews&added=edit';</script>";
	}					
}

if(!$_GET['id'] || $shownews){
	allnews();
}


echo "<script language=\"javascript\">";
echo "function showalleditnewscats(){ ";
echo "var posts = '";
$postids = (empty($postids)) ? array() : $postids;
$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
if(is_array($_POST['cats'])){
	if(count($postids) > 0){ echo implode(",", $postids); }
}
echo "'; ";
echo "newposts = posts.split(\",\"); ";
echo "for(var num=0; num < newposts.length; num++){ ";
echo "document.getElementById('showcatlink_' + newposts[num]).style.display = 'none'; ";
echo "document.getElementById('showcats_' + newposts[num]).style.display = ''; ";
echo "} ";
echo "}";
echo "</script>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>