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
echo '<div class="headertitle">';
echo '<span class="header">' . $langmsg['privmsgs'][0] . '</span>';
if($_GET['todo'] == "new"){ echo "<span class=\"header\">".$langmsg['privmsgs'][3]."</span>"; }
if($_GET['type'] == "" && $_GET['todo'] == ""){ echo "<span class=\"header\">".$langmsg['privmsgs'][1]."</span>"; }
if($_GET['type'] == "out"){ echo "<span class=\"header\">".$langmsg['privmsgs'][2]."</span>"; }
echo '</div>';

$_GET['todo'] = (empty($_GET['todo'])) ? '' : $_GET['todo'];
$_GET['type'] = (empty($_GET['type'])) ? '' : $_GET['type'];
$_GET['page'] = (empty($_GET['page'])) ? '' : $_GET['page'];
$_POST['todo'] = (empty($_POST['todo'])) ? '' : $_POST['todo'];
$_POST['ajax'] = (empty($_POST['ajax'])) ? '' : $_POST['ajax'];

$type = $_GET['type'];
if($type != "out"){
	$type = "";
}

echo "\n\n\n<script language=\"javascript\">";
echo "function toggle(id){\n";
echo "if(document.getElementById(id).style.display == 'none'){\n
	  document.getElementById(id).style.display = '';\n
	  }else{\n
	  document.getElementById(id).style.display = 'none';\n
	  }\n
	  }\n";
echo "</script>";
$_POST['selected'] = (empty($_POST['selected'])) ? array() : $_POST['selected'];
if($_POST['todo'] == "mark"){
	if(count($_POST['selected']) !== 0){
		foreach($_POST['selected'] as $uid){
			if($type == "out"){
				DataAccess::put("UPDATE " . NEWS_PRIVATEOUT . " SET viewed = '0' WHERE uid = ? AND sentfrom = ?", $uid, $_SESSION['uid']);
			}else{
				DataAccess::put("UPDATE " . NEWS_PRIVATE . " SET viewed = '0' WHERE uid = ? AND sentto = ?", $uid, $_SESSION['uid']);		 	
			}
		}
	}
}elseif($_POST['todo'] == "unmark"){
	if(count($_POST['selected']) !== 0){
		foreach($_POST['selected'] as $uid){
			if($type == "out"){   
				DataAccess::put("UPDATE " . NEWS_PRIVATEOUT . " SET viewed = '1' WHERE uid = ? AND sentfrom = ?", $uid, $_SESSION['uid']);
			}else{
				DataAccess::put("UPDATE " . NEWS_PRIVATE . " SET viewed = '1' WHERE uid = ? AND sentto = ?", $uid, $_SESSION['uid']);
			}
		}
	}
}elseif($_POST['todo'] == "delete"){
	if(count($_POST['selected']) !== 0){
		foreach($_POST['selected'] as $uid){
			if($type == "out"){
				$msgexists = DataAccess::fetch("SELECT uid FROM " . NEWS_PRIVATEOUT . " WHERE uid = ? AND sentfrom = ?", $uid, $_SESSION['uid']);
			}else{
				$msgexists = DataAccess::fetch("SELECT uid FROM " . NEWS_PRIVATE . " WHERE uid = ? AND sentto = ?", $uid, $_SESSION['uid']);
			}
			if(count($msgexists) == 1){
				if($type == "out"){
					DataAccess::put("DELETE FROM " . NEWS_PRIVATEOUT . " WHERE uid = ? AND sentfrom = ?", $uid, $_SESSION['uid']);
				}else{
					DataAccess::put("DELETE FROM " . NEWS_PRIVATE . " WHERE uid = ? AND sentto = ?", $uid, $_SESSION['uid']);
				}
			}
		}
		echo "<div class=\"success\">".$langmsg['privmsgs'][20]."</div>";
	}

}
if($_GET['todo'] == "new"){
	echo "<form method=\"post\" action=\"?action=private&todo=new\">";
	function newmsgform(){
		global $langmsg;
		echo "<div class=\"subheaders\">".$langmsg['privmsgs'][10]."</div>";
		echo "<div class=\"subheaders_body displaytable\" style=\"height: 40px; padding-bottom: 5px\">";
				$_GET['user'] = (empty($_GET['user'])) ? '' : $_GET['user'];
		$_GET['title'] = (empty($_GET['title'])) ? '' : $_GET['title'];
		$_POST['message'] = (empty($_POST['message'])) ? '' : $_POST['message'];
		if(!$_POST['S2']){
			$sendto	= displayhtml($_GET['user']);
			$title	= displayhtml($_GET['title']);
			$title	= $_GET['title']; 
		}else{
			$sendto	= displayhtml($_POST['sendto']);
			$title	= displayhtml($_POST['title']);
		}
	 
		echo "<div style=\"width: 80px; float: left\">".$langmsg['privmsgs'][11]."</div> <input type=\"text\" name=\"sendto\" style=\"width: 250px\" value=\"$sendto\"> ". $langmsg['privmsgs'][14]; 
		echo "<div style=\"padding-top: 2px; margin-bottom: 3px\"><div style=\"width: 80px; float: left\">".$langmsg['privmsgs'][12]."</div> <input type=\"text\" name=\"title\" style=\"width: 250px\" value=\"$title\" /></div>";
		echo "<div id=\"smileybox\" style=\"width: 150px; background-color: #EEEEEE; border: 1px solid #AAAAAA; padding: 5px; display: none; position: absolute; z-index: 10001; \">";
		echo "<a style=\"float: right; text-decoration: underline; cursor: pointer\" onclick=\"document.getElementById('smileybox').style.display = 'none'; document.getElementById('fade').style.display = 'none';\">[close]</a>Smilies<hr />";
		$smilies = DataAccess::fetch("SELECT * FROM " . NEWS_SMILIES);
		foreach($smilies AS $row){
			echo "<img style=\"cursor: pointer\" onclick=\"insertsmiley('$row[keycode]', '$row[path]', 'message') \" src=\"$row[path]\" /> ";
		}
		echo "</div>";

		
		

		echo "</div>";
		echo "<div class=\"subheaders\">asd</div>";
		echo "<textarea styleid=\"message\" style=\"width: 420px; height: 140px\" class=\"ckeditor\" name=\"message\">" . displayhtml($_POST['message']) . "</textarea>"; 		
		echo "<div style=\"margin: 5px 0 10px 0\"><input style=\"width: 49%\" type=\"submit\" name=\"S2\" value=\"".$langmsg['submitfield'][1]."\" />&nbsp;<input style=\"width: 50%\" type=\"submit\" name=\"S2\" class=\"nostyle\" value=\"".$langmsg['submitfield'][4]."\" /></div>";
	}

	$_POST['S2'] = (empty($_POST['S2'])) ? '' : $_POST['S2'];
	if(!$_POST['S2']){
		newmsgform();
	}elseif($_POST['S2'] == "Preview"){
		echo "<div class=\"subheaders\">".$langmsg['privmsgs'][15]."</div>";
		echo "<div class=\"subheaders_body displaytable\">";
		$message = bbcode($_POST['message'],'1','1');
		echo $message;
		echo "</div>";
		echo "<br />";
		newmsgform();
	}elseif(!$_POST['sendto']){
		echo "<div style=\"text-align: left\" class=error>".$langmsg['privmsgs'][17]."</div>";
		newmsgform();
	}elseif(!$_POST['title']){
		echo "<div style=\"text-align: left\" class=error>".$langmsg['privmsgs'][18]."</div>";
		newmsgform();
	}elseif(!$_POST['message']){
		echo "<div style=\"text-align: left\" class=error>".$langmsg['privmsgs'][19]."</div>";
		newmsgform();
	}else{
		$sendtox = $_POST['sendto'];
		$sendtox = explode(",",$sendtox);
		$sendto = array();
		$i = 0;
		foreach($sendtox as $d){
			$sendto[$i] = strtolower(trim($d));
			$i++;
		}
		$sendto = array_keys(array_flip($sendto));
		# tidies up names and removes dupes
		$uid = $_SESSION['uid'];
		$users = '';
		foreach($sendto as $user){
			$user2 = trim($user);
			$userexists = DataAccess::fetch("SELECT uid FROM " . NEWS_USERS . " WHERE user = ?", $user2);
			if(count($userexists) == 1){
				$c = $userexists['0'];
				$sentto = $c['uid'];
				$users .= $user . ", ";
				$title = $_POST['title'];
				$message = $_POST['message'];
				$sentfrom = $uid;
				$date = time(); 
				$sentfrom = $_SESSION['uid'];
				DataAccess::put("INSERT INTO " . NEWS_PRIVATE . " (title, message, sentfrom, sentto, viewed, posted) VALUES (?,?,?,?,?,?)", $title, $message, $sentfrom, $sentto, "1", $date);               
				DataAccess::put("INSERT INTO " . NEWS_PRIVATEOUT . " (title, message, sentfrom, sentto, viewed, posted) VALUES (?,?,?,?,?,?)", $title, $message, $sentfrom, $sentto, "0", $date);                
			}
		}
		$users = substr($users,0,(strlen($users) - 2));
		$f = $langmsg['privmsgs'][16];
		$f = $f . " " . $users;
		echo "<div class=\"success\">$f</div>"; 	
		
	}
	echo "</form>";  
}
echo "<form method=\"post\" id=\"privatemsgform\" action=\"?action=private&type=$type\">";
$uid = $_SESSION['uid'];
if($type == "out"){
	$unread = DataAccess::fetch("SELECT COUNT(uid) AS unread FROM " . NEWS_PRIVATEOUT . " WHERE sentfrom = ? AND viewed = ?", $uid, "1");
	$unread = $unread['0']['unread'];
}else{
	$unread = DataAccess::fetch("SELECT COUNT(uid) AS unread FROM " . NEWS_PRIVATE . " WHERE sentto = ? AND viewed = ?", $uid, "1");                    
	$unread = $unread['0']['unread'];
}
if($type == "out"){
	$total = DataAccess::fetch("SELECT COUNT(uid) AS total FROM " . NEWS_PRIVATEOUT . " WHERE sentfrom = ?", $uid);
	$total = $total['0']['total'];				
}else{
	$total = DataAccess::fetch("SELECT COUNT(uid) AS total FROM " . NEWS_PRIVATE . " WHERE sentto = ?", $uid);
	$total = $total['0']['total'];				    
}                                                                                                       
?>
    <script language="javascript">
function createXMLHttpRequest(){
	if (window.ActiveXObject){
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}else if (window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}
}


function senddata(id,type){
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = handleStateChange;
    xmlHttp.open("POST", "?action=private&type=", true);
    xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlHttp.send("ajax=true&id="+id+"&type="+type);
	document.getElementById('img'+id).innerHTML = '<img src="images/email2.png" />';
}




function handleStateChange() {
	    if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
	     var data;
		 data = xmlHttp.responseText;
   		 
		}
}
    </script>

<?php
	if($_POST['ajax'] == "true"){
		if($_POST['type'] == ""){
			$id = $_POST['id'];
			DataAccess::put("UPDATE " . NEWS_PRIVATE . " SET viewed = ? WHERE uid = ?", "0", $id);            
		}else{
			$id = $_POST['id'];
			DataAccess::put("UPDATE " . NEWS_PRIVATEOUT . " SET viewed = ? WHERE uid = ?", "0", $id);		
		}		
		
	}			
	#$langmsg['privmsgs'][4] = x("You have <b>{totalunread}</b> unread messages. <b>{totalmsgs}</b> messages in total.");
	$f = $langmsg['privmsgs'][4];
	$f = $f . " <b>$unread</b> " . $langmsg['privmsgs'][21] . " <b>$total</b> " . $langmsg['privmsgs'][22];
	echo "<div><div class=panel style=\"text-align: left\">$f</div></div><br />";
	echo "<div>\n";
	echo "<table id=\"rows\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr><td>";
	$uid = $_SESSION['uid'];
	echo "<tr><td width=\"20\" class=\"tableshead tablerightborder\" align=\"center\"></td><td class=\"tableshead tablerightborder\" width=\"40%\">".$langmsg['privmsgs'][5]."</td><td class=\"tableshead tablerightborder\" width=\"30%\">";
	if($type == "out"){ echo $langmsg['privmsgs'][8]; }else{ echo $langmsg['privmsgs'][6]; }
	echo "</td><td class=\"tableshead tablerightborder\">".$langmsg['privmsgs'][7]."</td><td class=\"tableshead tablerightborder\" width=\"12\" align=right><input name=\"allcheck\" id=\"allcheck\" onclick=\"selectall2()\" type=\"checkbox\" /></td></tr>";
	$tmpcolor = 1;
	
	$page = $_GET['page'];
	if($type == "out"){
		$totalnews = DataAccess::fetch("SELECT COUNT(uid) AS total FROM " . NEWS_PRIVATEOUT . " WHERE sentfrom = ?", $uid);
		$totalnews = $totalnews['0']['total'];
	}else{	
		$totalnews = DataAccess::fetch("SELECT COUNT(uid) AS total FROM " . NEWS_PRIVATE . " WHERE sentto = ?", $uid);
		$totalnews = $totalnews['0']['total'];
	}				
	$amounttoshow = 15;
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

	$d = 1;
	$pages = '';
	while($d <= $amountofpages){
		if($amountofpages !== 1){
			if($d == $page){
				$pages .= "$d ";	
			}else{
				$pages .= "<a href=\"?action=private&type=$type&page=$d\">$d</a> ";	
			}
		}
		$d++;						
	}
	if($amountofpages == 1 || $page == 1){
		$plink = "";
	}else{
		$g = $page - 1;
		$plink = "<a href=\"?action=private&type=$type&page=$g\"><</a> ";	
	}
	if($amountofpages == $page || $amountofpages == "0"){
		$nlink = ""; 
	}else{
		$g = $page + 1;
		$nlink = "<a href=\"?action=private&type=$type&page=$g\">></a>";                                                          
	}

	if($type == "out"){
		$allmsgs = DataAccess::fetch("SELECT * FROM " . NEWS_PRIVATEOUT . " WHERE sentfrom = ? ORDER BY posted DESC LIMIT $start, $amounttoshow", $uid);
	}else{
		$allmsgs = DataAccess::fetch("SELECT * FROM " . NEWS_PRIVATE . " WHERE sentto = ? ORDER BY posted DESC LIMIT $start, $amounttoshow", $uid);
	}

	$i = 1;
	foreach($allmsgs AS $row){
		if($tmpcolor == 1){
			$class		= "row1";
			$tmpcolor	= 2;
		}elseif($tmpcolor = 2){
			$class		= "row2";
			$tmpcolor	= 1;
		}					
		$date = date("d-m-y",$row['posted']  + TIMEZONE);
		if($type == "out"){
			$g = $row['sentto'];
		}else{
			$g = $row['sentfrom'];
		}
		$from = DataAccess::fetch("SELECT user FROM " . NEWS_USERS . " WHERE uid = ?", $g);
		$from = $from['0']['user'];
		echo "\n\n<tr class=\"$class\"><td class=\"tablebody tablerightborder\" align=\"center\" id=\"img$row[uid]\">";
		if($row['viewed'] == "0"){
			echo "<img src=\"images/email2.png\" />";
		}else{
			echo "<img src=\"images/email1.png\" />";
		}
		$title = displayhtml($row['title']);
		echo "</td><td class=\"tablebody tablerightborder\"><div style=\"height: 17px; width: 230px; overflow: hidden\"><a href=\"#\" onclick=\"senddata('$row[uid]','$type'); toggle('$row[uid]')\">$title</a></div></td><td class=\"tablebody tablerightborder\">$from</td><td class=\"tablebody tablerightborder\">$date</td><td  class=\"tablebody tablerightborder\" align=\"center\"><input type=\"checkbox\" value=\"$row[uid]\" id=\"selected[]\" name=\"selected[]\" /></tr>";
		$message = bbcode($row['message'],'1','1');
		echo "<tr id=\"$row[uid]\" class=\"$class\" style=\"display: none\" bgcolor=\"\"><td></td><td class=\"tablebody tablerightborder\" colspan=4>$message<br /><br /><a href=\"?action=private&todo=new&user=$from&title=$title\">Reply to this message</a></td></tr>";
		$i++;					
	}

	echo "</table>";

	echo "<table style=\"float: right\"><tr><td align=right><select id=\"todo\" name=\"todo\"><option>".$langmsg['selectfield'][0]."</option>";
	echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
	echo "<option value=\"mark\">".$langmsg['selectfield'][16]."</option>";
	echo "<option value=\"unmark\">".$langmsg['selectfield'][17]."</option>";				
	echo "</select> <input type=\"button\" onclick=\"privatemsgsedit()\" name=\"S1\" class=\"nostyle\" value=\"".$langmsg['submitfield'][0]."\" /></td></tr>";

	echo "</table>";				
	echo "</div>";if($amountofpages > 1){
	echo "<div style=\"float: left\">$plink [ $pages] $nlink</div>";
}

echo "<div id=\"whichbox\" style=\"display: none\">message</div>";
echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>