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

echo '		<div id="pageLeft">
			<div id="pageIconHome"></div><!--icon-->
			<div id="titleHome">N-13 News<br />4.0</div>
		</div><!--leftside-->';
echo '<div id="pageRight">';

function rssform(){
	global $langmsg;
	if($_GET['edit'] == "true"){
		$id = $_GET['id'];
		if(!$_POST['S1']){
			$all			= DataAccess::fetch("SELECT * FROM " . NEWS_FEEDS . " WHERE feedid = ?", $id);
			$all			= $all['0'];
			$feedname		= displayhtml($all['name']);
			$location		= displayhtml($all['location']);
			$title			= displayhtml($all['title']);
			$description	= displayhtml($all['description']);
			$encoding		= displayhtml($all['encoding']);
			$language		= displayhtml($all['language']);
			$amount			= displayhtml($all['amounttodisplay']);
			$rsscode		= displayhtml($all['rsscode']);
			$nocats			= displayhtml($all['nocats']);
			$groupcats 		= DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $id, "rss");
			$_SESSION['originalfeedname'] = $feedname;
			if(count($groupcats) > 0){
				foreach($groupcats AS $row){
					$selectedcats[] = $row['catid'];
				}
			}
		}else{
			$feedname		= displayhtml($_POST['feedname']);
			$location		= displayhtml($_POST['location']);
			$title			= displayhtml($_POST['title']);
			$description	= displayhtml($_POST['description']);
			$encoding		= displayhtml($_POST['encoding']);
			$language		= displayhtml($_POST['language']);
			$amount			= displayhtml($_POST['amount']);
			$nocats			= displayhtml($_POST['nocats']);						
			$rsscode		= $_POST['rsscode'];
			if(count($_POST['cats']) > 0){
				foreach($_POST['cats'] as $cat){;
					$selectedcats[] = $cat;
				}
			}						
		}
	}
	$_GET['new'] = (empty($_GET['new'])) ? '' : $_GET['new'];
	if($_GET['new'] == "true"){
		if(!$_POST['S1']){
			$feedname		= (empty($_POST['feedname'])) ? '' : $_POST['feedname'];
			$location		= (empty($_POST['location'])) ? '' : $_POST['location'];
			$title			= (empty($_POST['title'])) ? '' : $_POST['title'];
			$description	= (empty($_POST['description'])) ? '' : $_POST['description'];
			$encoding		= (empty($_POST['encoding'])) ? '' : $_POST['encoding'];
			$language		= (empty($_POST['language'])) ? '' : $_POST['language'];
			$amount			= (empty($_POST['amount'])) ? '' : $_POST['amount'];
			$rsscode		= (empty($_POST['rsscode'])) ? '' : $_POST['rsscode'];
			$nocats			= (empty($_POST['nocats'])) ? '' : $_POST['nocats'];		
			$encoding = 'UTF-8';
			$language= 'en-us';
			$display = '3';
			$amount = '10';
			$nocats = '1';
			$rsscode = '   	<item>
		<title>{title}</title>
		<link>{url}</link>
		<description><![CDATA[{summary}]]></description>		
		<pubDate>{date} {timezone}</pubDate>
		<guid isPermaLink="false">{id}_{timestamp}</guid>
	</item>
';						
		}else{
			$feedname		= (empty($_POST['feedname'])) ? '' : $_POST['feedname'];
			$location		= (empty($_POST['location'])) ? '' : $_POST['location'];
			$title			= (empty($_POST['title'])) ? '' : $_POST['title'];
			$description	= (empty($_POST['description'])) ? '' : $_POST['description'];
			$encoding		= (empty($_POST['encoding'])) ? '' : $_POST['encoding'];
			$language		= (empty($_POST['language'])) ? '' : $_POST['language'];
			$amount			= (empty($_POST['amount'])) ? '' : $_POST['amount'];
			$rsscode		= (empty($_POST['rsscode'])) ? '' : $_POST['rsscode'];
			$nocats			= (empty($_POST['nocats'])) ? '' : $_POST['nocats'];
			$_POST['cats']	= (empty($_POST['cats'])) ? array() : $_POST['cats'];
			if(count($_POST['cats']) > 0){
				foreach($_POST['cats'] as $cat){;
					$selectedcats[] = $cat;
				}
			}						
		}
	}
	echo "<div class=subheaders>".$langmsg['rss'][1]."</div>";
	echo "<div class=\"subheaders_body displaytable\">";
	echo $langmsg['rss'][2]."<br /><br />";
	if($_GET['new'] == "true"){
		echo "<form method=\"post\" action=\"?action=options&mod=rss&new=true\">";
	}elseif($_GET['edit'] == "true"){
		$id = $_GET['id'];
		echo "<form method=\"post\" action=\"?action=options&mod=rss&edit=true&id=$id\">";
	}
	echo "<table width=\"100%\" cellpadding=\"1\" cellspacing=\"1\">";
	echo "<tr class=\"row1\"><td width=\"50%\">".$langmsg['rss'][3]."</td><td><input type=\"text\" name=\"feedname\" value=\"$feedname\" style=\"width: 200px\" /></td></tr>";		
	echo "<tr class=\"row2\"><td width=\"50%\">".$langmsg['rss'][4]."</td><td><input type=\"text\" name=\"location\" value=\"$location\" style=\"width: 200px\" /></td></tr>";
	echo "<tr class=\"row1\"><td width=\"50%\">".$langmsg['rss'][5]."</td><td><input type=\"text\" name=\"title\" value=\"$title\" style=\"width: 200px\" /></td></tr>";
	echo "<tr class=\"row2\"><td width=\"50%\">".$langmsg['rss'][6]."</td><td><input type=\"text\" name=\"description\" value=\"$description\" style=\"width: 200px\" /></td></tr>";
	echo "<tr class=\"row1\"><td width=\"50%\">".$langmsg['rss'][7]."</td><td><input type=\"text\" name=\"encoding\" value=\"$encoding\" style=\"width: 80px\" /></td></tr>";
	echo "<tr class=\"row2\"><td width=\"50%\">".$langmsg['rss'][8]."</td><td><input type=\"text\" name=\"language\" value=\"$language\" style=\"width: 80px\" /></td></tr>";
	echo "<tr class=\"row1\"><td width=\"50%\">".$langmsg['rss'][9]."</td><td><input type=\"text\" name=\"amount\" value=\"$amount\" style=\"width: 80px\" /> ".$langmsg['rss'][10]."</td></tr>";

	$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " ORDER BY name");
	$numcats = count($allcats);
	$cats = '';
	$selectedcats = (empty($selectedcats)) ? array() : $selectedcats;
	foreach($allcats AS $row){
		$cats .= "<div style=\"float: left\"><input name=\"cats[]\" id=\"$row[id]\" value=\"$row[id]\" ";
		if(count($selectedcats) > 0){	
			if(in_array($row['id'],$selectedcats)){
				$cats .= " checked=\"checked\" ";
			}
		}
		$cats .= "type=\"checkbox\"><label style=\"padding-right: 20px\" for=\"$row[id]\">$row[name]</label></div>";
	}
	echo "<tr ";
	if($numcats < 1){
		echo "style=\"display: none\" ";
	}
	echo "class=\"row2\"><td valign=\"top\" width=\"50%\">".$langmsg['rss'][11]."</td><td>$cats</td></tr>";
	echo "<tr class=\"row1\"><td valign=\"top\">".$langmsg['rss'][12]."</td><td>";
	echo "<div style=\"float: left; width: 50px\">".$langmsg['selectfield'][1].":</div><input type=\"radio\" name=\"nocats\" value=\"1\" ";
	if($nocats == "1"){
		echo "checked=\"checked\"";
	}
	echo "/><br />";
	echo "<div style=\"float: left; width: 50px\">".$langmsg['selectfield'][2].":</div><input type=\"radio\" name=\"nocats\" value=\"0\"";
	if($nocats == "0"){
		echo "checked=\"checked=\"";
	}
	echo " />";
	echo "</td></tr>";
	echo "<tr class=\"row2\"><td colspan=\"2\" style=\"height: 25px\">".$langmsg['rss'][13]."</td></tr>";
	echo "<tr><td colspan=\"2\">";
	echo $langmsg['rss'][14];
	echo "<br /><br />";
	echo "<b>{title}</b> - " . $langmsg['rss'][15] . "<br>";
	echo "<b>{friendlytitle}</b> - " . $langmsg['rss'][43] . "<br>";
	echo "<b>{summary}</b> - " . $langmsg['rss'][16] . "<br />";
	echo "<b>{article}</b> - " . $langmsg['rss'][17] . "<br />";
	echo "<b>{categories}</b> - " . $langmsg['rss'][18] . "<br />";
	echo "<b>{url}</b> - " . $langmsg['rss'][19] . "<br />";
	echo "<b>{date}</b> - " . $langmsg['rss'][20] . "<br />";
	echo "<b>{timezone}</b> - " . $langmsg['rss'][21] . "<br />";
	echo "<b>{timestamp}</b> - " . $langmsg['rss'][22] . "<br />";
	echo "<b>{author}</b> - " . $langmsg['rss'][23] . "<br />";
	echo "<b>{avatar}</b> - " . $langmsg['rss'][24] . "<br />";
	echo "<b>{id}</b> - " . $langmsg['rss'][25] . "<br />";
	echo "<b>{comments}</b> - " . $langmsg['rss'][26] . "<br /><br />";

	echo "<textarea name=\"rsscode\" style=\"width: 100%; height: 100px\">$rsscode</textarea></td></tr>";
	if($_GET['new'] == "true"){
		echo "<tr><td align=\"center\" colspan=\"2\"><input type=\"submit\" name=\"S1\" style=\"width: 100%\" value=\"".$langmsg['submitfield'][5]."\" /></td></tr>";
	}else{
		echo "<tr><td align=\"center\" colspan=\"2\"><input type=\"submit\" name=\"S1\" style=\"width: 100%\" value=\"".$langmsg['submitfield'][3]."\" /></td></tr>";
	}
	echo "</table>";
	echo "</form>";
	echo "</div>";
	
}
$_GET['edit'] = (empty($_GET['edit'])) ? '' : $_GET['edit'];
$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
if($_GET['edit'] == "true"){
	if(!$_POST['S1']){
		rssform();
	}else{
		if(!$_POST['feedname']){
			echo "<div class=\"error\">".$langmsg['rss'][27]."</div>";
			rssform();
		}elseif(!$_POST['location']){
			echo "<div class=\"error\">".$langmsg['rss'][28]."</div>";
			rssform();
		}elseif(!$_POST['title']){
			echo "<div class=\"error\">".$langmsg['rss'][29]."</div>";
			rssform();
		}elseif(!$_POST['description']){
			echo "<div class=\"error\">".$langmsg['rss'][30]."</div>";
			rssform();					
		}elseif(!$_POST['encoding']){
			echo "<div class=\"error\">".$langmsg['rss'][31]."</div>";
			rssform();					
		}elseif(!$_POST['language']){
			echo "<div class=\"error\">".$langmsg['rss'][32]."</div>";
			rssform();					
		}elseif($_POST['amount'] == ""){
			echo "<div class=\"error\">".$langmsg['rss'][33]."</div>";
			rssform();
		}else{
			if($_POST['feedname'] == $_SESSION['originalfeedname']){
				$feedname		= $_POST['feedname'];
				$location		= $_POST['location'];
				$title			= $_POST['title'];
				$description	= $_POST['description'];
				$encoding		= $_POST['encoding'];
				$language		= $_POST['language'];
				$amount			= $_POST['amount'];
				$rsscode		= $_POST['rsscode'];
				$nocats			= $_POST['nocats'];
				$id				= $_GET['id'];
				$sql = "UPDATE " . NEWS_FEEDS . " SET
						name = ?,
						location = ?,
						title = ?,
						description = ?,
						encoding = ?,
						language = ?,
						amounttodisplay = ?,
						rsscode = ?,
						nocats = ?
						WHERE feedid = ?";
				DataAccess::put($sql, $feedname, $location, $title, $description, $encoding, $language, $amount, $rsscode, $nocats, $id);
				DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $id, "rss");
				$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
				if(count($_POST['cats']) > 0){
					foreach($_POST['cats'] as $cat){
						DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $id, $cat, "rss");
					}	
				}
				echo "<div class=\"success\">".$langmsg['rss'][34]."</div>";														
			}else{
				$feedname = $_POST['feedname'];
				$d = DataAccess::fetch("SELECT * FROM " . NEWS_FEEDS . " WHERE name = ?", $feedname);
				if(count($d) > 0){
					echo "<div class=\"error\">".$langmsg['rss'][35]."</div>";
					rssform();
				}else{
					$feedname		= $_POST['feedname'];
					$location		= $_POST['location'];
					$title			= $_POST['title'];
					$description	= $_POST['description'];
					$encoding		= $_POST['encoding'];
					$language		= $_POST['language'];
					$amount			= $_POST['amount'];
					$rsscode		= $_POST['rsscode'];
					$nocats			= $_POST['nocats'];
					$id				= $_GET['id'];
					$sql = "UPDATE " . NEWS_FEEDS . " SET
							name = ?,
							location = ?,
							title = ?,
							description = ?,
							encoding = ?,
							language = ?,
							amounttodisplay = ?,
							rsscode = ?,
							nocats = ?
							WHERE feedid = ?";
					DataAccess::put($sql, $feedname, $location, $title, $description, $encoding, $language, $amount, $rsscode, $nocats, $id);
					DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $id, "rss");
					if(count($_POST['cats']) > 0){
						foreach($_POST['cats'] as $cat){
							DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $id, $cat, "rss");
						}	
					}
					echo "<div class=\"success\">".$langmsg['rss'][36]."</div>";							
				}						
			}
		}						
	}
}
$_GET['new'] = (empty($_GET['new'])) ? '' : $_GET['new'];
if($_GET['new'] == "true"){
	if(!$_POST['S1']){
		rssform();
	}else{
		if(!$_POST['feedname']){
			echo "<div class=\"error\">".$langmsg['rss'][27]."</div>";
			rssform();
		}elseif(!$_POST['location']){
			echo "<div class=\"error\">".$langmsg['rss'][28]."</div>";
			rssform();
		}elseif(!$_POST['title']){
			echo "<div class=\"error\">".$langmsg['rss'][29]."</div>";
			rssform();
		}elseif(!$_POST['description']){
			echo "<div class=\"error\">".$langmsg['rss'][30]."</div>";
			rssform();					
		}elseif(!$_POST['encoding']){
			echo "<div class=\"error\">".$langmsg['rss'][31]."</div>";
			rssform();					
		}elseif(!$_POST['language']){
			echo "<div class=\"error\">".$langmsg['rss'][32]."</div>";
			rssform();					
		}elseif($_POST['amount'] == ""){
			echo "<div class=\"error\">".$langmsg['rss'][33]."</div>";
			rssform();
		}else{
			$feedname		= $_POST['feedname'];
			$location		= $_POST['location'];
			$title			= $_POST['title'];
			$description	= $_POST['description'];
			$encoding		= $_POST['encoding'];
			$language		= $_POST['language'];
			$amount			= $_POST['amount'];
			$rsscode		= $_POST['rsscode'];
			$nocats			= $_POST['nocats'];
			$exists			= DataAccess::fetch("SELECT feedid FROM " . NEWS_FEEDS . " WHERE name = ?", $feedname);
			 
			if(count($exists) < 1){
				$sql = "INSERT INTO " . NEWS_FEEDS . " 
						(name, location, title, description, encoding, language, amounttodisplay, rsscode, nocats)
						VALUES
						(?, ?, ?, ?, ?, ?, ?, ?, ?)";
				DataAccess::put($sql, $feedname, $location, $title, $description, $encoding, $language, $amount, $rsscode, $nocats);
				$id = DataAccess::fetch("SELECT feedid FROM " . NEWS_FEEDS . " WHERE name = ?", $feedname);
				$id = $id['0']['feedid'];
				$_POST['cats'] = (empty($_POST['cats'])) ? array() : $_POST['cats'];
				if(count($_POST['cats']) > 0){
					foreach($_POST['cats'] as $cat){
						DataAccess::put("INSERT INTO " . NEWS_GROUPCATS . " (storyid, catid, type) VALUES (?, ?, ?)", $id, $cat, "rss");
					}	
				}
				echo "<div class=\"success\">".$langmsg['rss'][34]."</div>";
			}else{
				echo "<div class=\"error\">".$langmsg['rss'][35]."</div>";
				rssform();
			}	
		}
	}
}

$num = DataAccess::fetch("SELECT COUNT(feedid) AS total FROM " . NEWS_FEEDS);
$num = $num['0']['total'];
$i = 0;
$allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS);
$cats = array();
foreach($allcats AS $row2){
	$cats[$i] = array("name" => $row2['name'], "id" => $row2['id']);
	$i++;                                        		
}
$g = $langmsg['rss'][37];
$g = "<b>$num</b> " . $g;
echo "<div class=panel>$g</div>";
echo "<br />";

$_POST['cataction'] = (empty($_POST['cataction'])) ? '' : $_POST['cataction'];
if($_POST['cataction'] == "delete"){
	if(count($_POST['selectedfeeds']) !== 0){
		$selected = $_POST['selectedfeeds'];
		$i = 0;
		foreach($selected as $uid){
			DataAccess::put("DELETE FROM " . NEWS_FEEDS . " WHERE feedid = ?", $uid);
			DataAccess::put("DELETE FROM " . NEWS_GROUPCATS . " WHERE storyid = ? AND type = ?", $uid, "rss");
		}
	}
	echo "<span class=\"success\">".$langmsg['rss'][38]."</span>";			
}

echo "<form method=\"post\" id=\"catform\" action=\"?action=options&mod=rss\">";
echo "<table id=\"rows\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">";
echo "<tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"20%\">".$langmsg['rss'][39]."</td><td class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['rss'][40]."</td><td class=\"tableshead tablerightborder\" width=\"30%\">".$langmsg['rss'][41]."</td><td class=\"tableshead\"><input type=\"checkbox\" id=\"allcheck\" onclick=\"selectall()\" /></tr>";
$d = 1;
$allfeeds = DataAccess::fetch("SELECT * FROM " . NEWS_FEEDS . " ORDER BY name");
$x = false;
foreach($allfeeds AS $row){
	if($x == true){
		$class = "row2";
		$x = false;
	}else{
		$class = "row1";
		$x = true;   
	}
	$dcats = '';
	$groupcats = DataAccess::fetch("SELECT * FROM " . NEWS_GROUPCATS . " WHERE type = ? AND storyid = ?", "rss", $row['feedid']);
	$catsperstory = count($groupcats);
	foreach($groupcats AS $row2){
		$dcats .= ":".$row2[catid].":";
	}
	if(count($cats) > 0){ 
		foreach($cats as $cat){
			$dcats = str_replace(":" . $cat['id'] . ":",$cat['name'] .", ",$dcats);
		}
	}
	$dcats = substr($dcats,0,strlen($dcats) - 2);					
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=rss&edit=true&id=$row[feedid]\"><img alt=\"Edit\" title=\"Edit\" src=\"images/icons/pencil.png\" /></a></td><td class=\"tablebody tablerightborder\">$row[name]</td><td class=\"tablebody tablerightborder\">$dcats</td><td class=\"tablebody tablerightborder\"><a href=\"rss.php?feed=$row[name]\">rss.php?feed=$row[name]</a></td><td class=\"tablebody\"><input type=\"checkbox\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" value=\"$row[feedid]\" name=\"selectedfeeds[]\" /></td></tr>";
	$d++;
}		
echo "</table>";
echo "<table width=\"100%\"><tr><td align=\"right\"><select name=\"cataction\" id=\"cataction\"><option value=\"\">".$langmsg['selectfield'][0]."</option><option value=\"delete\">".$langmsg['selectfield'][3]."</option></select>&nbsp;<input type=\"button\" onclick=\"deletecat()\" value=\"".$langmsg['submitfield'][0]."\" /></td></tr></table>";
echo "<a href=\"?action=options&mod=rss&new=true\">".$langmsg['rss'][42]."</a>";
echo "</form>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>