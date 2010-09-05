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

echo '<span class="header">' . $langmsg['options'][0] . '</span>';
echo '<span class="header">' . $langmsg['access'][0] . '</span>';
if($_GET['do'] == "new"){
	echo '<span class="header">' . $langmsg['options'][1] . '</span>';
}
if($_GET['do'] == "edit"){
	echo '<span class="header">' . $langmsg['options'][2] . '</span>';
}

echo '</div>';


$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];
function accesslevelform(){
	global $langmsg;
	if($_GET['do'] == "new"){
		if(!$_POST['S1']){
			$cat = array();
			$accessname			= '';
			$accounts			= '';
			$accesslevels		= '';
			$bannedips			= '';
			$categories			= '';
			$comments			= '';
			$help				= '';
			$fileuploads		= '';
			$imageuploads		= '';
			$news				= '';
			$personaloptions	= '';
			$privatemsgs		= '';
			$profile			= '';
			$rss				= '';
			$smilies			= '';
			$sysconfig			= '';
			$templates			= '';
			$filters			= '';
			$catall				= '';
			$cat				= '';
			$access				= '';
			$autoapproved		= '';
			$canapprove			= '';
			$nocat				= '';
			$fileimages			= '';
			$viewips			= '';			
		}else{
			$accessname			= (empty($_POST['accessname'])) ? '' : $_POST['accessname'];
			$accounts			= (empty($_POST['accounts'])) ? '' : $_POST['accounts'];
			$accesslevels		= (empty($_POST['accesslevels'])) ? '' : $_POST['accesslevels'];
			$bannedips 			= (empty($_POST['bannedips'])) ? '' : $_POST['bannedips'];
			$categories			= (empty($_POST['categories'])) ? '' : $_POST['categories'];
			$comments			= (empty($_POST['comments'])) ? '' : $_POST['comments'];
			$help				= (empty($_POST['help'])) ? '' : $_POST['help'];
			$fileuploads		= (empty($_POST['fileuploads'])) ? '' : $_POST['fileuploads'];
			$imageuploads		= (empty($_POST['imageuploads'])) ? '' : $_POST['imageuploads'];
			$news				= (empty($_POST['news'])) ? '' : $_POST['news'];
			$personaloptions	= (empty($_POST['personaloptions'])) ? '' : $_POST['personaloptions'];
			$privatemsgs		= (empty($_POST['privatemsgs'])) ? '' : $_POST['privatemsgs'];
			$profile			= (empty($_POST['profile'])) ? '' : $_POST['profile'];
			$rss				= (empty($_POST['rss'])) ? '' : $_POST['rss'];
			$smilies			= (empty($_POST['smilies'])) ? '' : $_POST['smilies'];
			$sysconfig			= (empty($_POST['sysconfig'])) ? '' : $_POST['sysconfig'];
			$templates			= (empty($_POST['templates'])) ? '' : $_POST['templates'];
			$filters			= (empty($_POST['filters'])) ? '' : $_POST['filters'];
			$catall				= (empty($_POST['catall'])) ? '' : $_POST['catall'];
			$cat				= (empty($_POST['cat'])) ? '' : $_POST['cat'];
			$access				= (empty($_POST['access'])) ? '' : $_POST['access'];
			$autoapproved		= (empty($_POST['autoapproved'])) ? '' : $_POST['autoapproved'];
			$canapprove			= (empty($_POST['canapprove'])) ? '' : $_POST['canapprove'];
			$nocat				= (empty($_POST['nocat'])) ? '' : $_POST['nocat'];
			$fileimages			= (empty($_POST['fileimages'])) ? '' : $_POST['fileimages'];
			$viewips			= (empty($_POST['viewips'])) ? '' : $_POST['viewips'];
		}	
	}elseif($_GET['do'] == "edit"){
		if(!$_POST['S1']){
			$templateid		= $_GET['id'];
			$templatedata	= DataAccess::fetch("SELECT * FROM " . NEWS_ACCESS . " WHERE uid = ?", $templateid);
            $num			= count($templatedata);
			if($num < 1){
				echo "<script language=\"javascript\">window.location = '?admin.php?action=options&mod=access';</script>";
			}else{
				$all				= $templatedata['0'];
				$accessname			= $all['name'];
				$accounts			= $all['accounts'];
				$accesslevels		= $all['accesslevels'];
				$bannedips			= $all['bannedips'];
				$categories			= $all['newscats'];
				$comments			= $all['comments'];
				$help				= $all['help'];
				$fileuploads		= $all['fileuploads'];
				$imageuploads		= $all['imageuploads'];
				$news				= $all['news'];
				$personaloptions	= $all['personaloptions'];
				$privatemsgs		= $all['privatemsgs'];
				$profile			= $all['profile'];
				$rss				= $all['rss'];
				$smilies			= $all['smilies'];
				$sysconfig			= $all['sysconfig'];
				$templates			= $all['templates'];
				$filters			= $all['wordfilters'];
				$access				= $all['accesslevel'];
				$autoapproved		= $all['autoapproved'];
				$canapprove			= $all['canapprove'];
				$nocat				= $all['nocat'];
				$viewips			= $all['viewips'];
				$fileimages			= $all['fileimages'];
				$cat				= explode(",",$all['cats']);
				$_SESSION['origaccessname'] = $accessname;
				$catall = $all['cats']; if($catall == "all"){ $catall = '1'; }else{ $catall = '0'; }
			} 
		}else{
			$accessname			= (empty($_POST['accessname'])) ? '' : $_POST['accessname'];
			$accounts			= (empty($_POST['accounts'])) ? '' : $_POST['accounts'];
			$accesslevels		= (empty($_POST['accesslevels'])) ? '' : $_POST['accesslevels'];
			$bannedips 			= (empty($_POST['bannedips'])) ? '' : $_POST['bannedips'];
			$categories			= (empty($_POST['categories'])) ? '' : $_POST['categories'];
			$comments			= (empty($_POST['comments'])) ? '' : $_POST['comments'];
			$help				= (empty($_POST['help'])) ? '' : $_POST['help'];
			$fileuploads		= (empty($_POST['fileuploads'])) ? '' : $_POST['fileuploads'];
			$imageuploads		= (empty($_POST['imageuploads'])) ? '' : $_POST['imageuploads'];
			$news				= (empty($_POST['news'])) ? '' : $_POST['news'];
			$personaloptions	= (empty($_POST['personaloptions'])) ? '' : $_POST['personaloptions'];
			$privatemsgs		= (empty($_POST['privatemsgs'])) ? '' : $_POST['privatemsgs'];
			$profile			= (empty($_POST['profile'])) ? '' : $_POST['profile'];
			$rss				= (empty($_POST['rss'])) ? '' : $_POST['rss'];
			$smilies			= (empty($_POST['smilies'])) ? '' : $_POST['smilies'];
			$sysconfig			= (empty($_POST['sysconfig'])) ? '' : $_POST['sysconfig'];
			$templates			= (empty($_POST['templates'])) ? '' : $_POST['templates'];
			$filters			= (empty($_POST['filters'])) ? '' : $_POST['filters'];
			$catall				= (empty($_POST['catall'])) ? '' : $_POST['catall'];
			$cat				= (empty($_POST['cat'])) ? '' : $_POST['cat'];
			$access				= (empty($_POST['access'])) ? '' : $_POST['access'];
			$autoapproved		= (empty($_POST['autoapproved'])) ? '' : $_POST['autoapproved'];
			$canapprove			= (empty($_POST['canapprove'])) ? '' : $_POST['canapprove'];
			$nocat				= (empty($_POST['nocat'])) ? '' : $_POST['nocat'];
			$fileimages			= (empty($_POST['fileimages'])) ? '' : $_POST['fileimages'];
			$viewips			= (empty($_POST['viewips'])) ? '' : $_POST['viewips'];
		}	
    }
	echo "<form method=\"post\" action=\"\">";
	if(!$_GET['do'] == "edit"){
		echo "<div class=panel>".$langmsg['access'][1]."</div>";			 
	}else{
		echo "<div class=panel>".$langmsg['access'][32]."</div>";			 
	}
	echo "<br />";
	echo "<div class=\"subheaders\" style=\"\">" .$langmsg['access'][2] . "</div>";
	echo "<div class=\"subheaders_body displaytable\" style=\"height: 30px\">";
	echo "<input type=\"text\" value=\"$accessname\" style=\"\" name=\"accessname\" />";
	echo "</div>";
	echo "<div class=\"subheaders\" style=\"\">" .$langmsg['access'][44]	 . "</div>";
	

	echo "<div class=\"subheaders_body\" style=\"display: table; height: 30px\">";
		echo "<table style=\"width: 100%\" cellspacing=\"0\" cellpadding=\"1\">";
		echo "<tr class=\"\">";
		echo "<td style=\"width: 350px\">".$langmsg['access'][22]."</td>";
		echo "<td>";
		echo "<select name=\"access\">";
		echo "<option value=\"3\" "; if($access == "3"){ echo "selected=\"selected\""; } echo ">".$langmsg['access'][23]."</option>";
		echo "<option value=\"2\" "; if($access == "2"){ echo "selected=\"selected\""; } echo ">".$langmsg['access'][24]."</option>";
		echo "<option value=\"1\" "; if($access == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['access'][25]."</option>";
		echo "</select>";		
		echo "</td>";
		
		echo "<tr>";
		echo "<td style=\"\">" . $langmsg['access'][51] . "</td>";
		echo "<td>";
		echo "<select name=\"fileimages\">";
		echo "<option value=\"1\" "; if($fileimages == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['access'][53]."</option>";
		echo "<option value=\"0\" "; if($fileimages == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['access'][52]."</option>";
		echo "</select>";			
		echo "</td>";
		echo "</tr>";
		
		echo "</tr>";
		echo "<tr class=\"\">";
		echo "<td>".$langmsg['access'][26]."</td>";
		echo "<td>";
		echo "<select name=\"autoapproved\">";
		echo "<option value=\"1\" "; if($autoapproved == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
		echo "<option value=\"0\" "; if($autoapproved == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
		echo "</select>";			
		echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td style=\"\">".$langmsg['access'][27]."</td>";
		echo "<td>";
		echo "<select name=\"canapprove\">";
		echo "<option value=\"1\" "; if($canapprove == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
		echo "<option value=\"0\" "; if($canapprove == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
		echo "</select>";			
		echo "</td>";
		echo "</tr>";
		
		
		echo "<tr class=\"\">";
		echo "<td>".$langmsg['access'][29]."</td>";
		echo "<td>";
		echo "<select name=\"nocat\">";
		echo "<option value=\"1\" "; if($nocat == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
		echo "<option value=\"0\" "; if($nocat == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
		echo "</select>";			
		echo "</td>";
		echo "</tr>";

		echo "<tr class=\"\">";
		echo "<td style=\"\">" . $langmsg['access'][50] . "</td>";
		echo "<td>";
		echo "<select name=\"viewips\">";
		echo "<option value=\"1\" "; if($viewips == "1"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][1]."</option>";
		echo "<option value=\"0\" "; if($viewips == "0"){ echo "selected=\"selected\""; } echo ">".$langmsg['selectfield'][2]."</option>";
		echo "</select>";			
		echo "</td>";
		echo "</tr>";			
	echo "</table>";
	echo "</div>";

	
	
	echo "<table cellpadding=\"0\" cellspacing=\"0\" style=\"\">";
	echo "<tr>";
	echo "<td style=\"width: 45%\">";
	
	echo "<div class=\"subheaders\" style=\"width: 230px; margin-right: 6px;\">" .$langmsg['access'][3] . "</div>";
	echo "<div class=\"subheaders_body displaytable\" style=\"width: 230px; height: 30px\">";
	

	
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"accounts\">".$langmsg['access'][4]."</label></div><div><input value=\"1\" "; if($accounts){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"accounts\" name=\"accounts\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"accesslevels\">".$langmsg['access'][5]."</div><div><input value=\"1\" "; if($accesslevels){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"accesslevels\" name=\"accesslevels\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"bannedips\">".$langmsg['access'][6]."</div><div><input value=\"1\""; if($bannedips){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"bannedips\" name=\"bannedips\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"categories\">".$langmsg['access'][7]."</div><div><input value=\"1\""; if($categories){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"categories\" name=\"categories\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"comments\">".$langmsg['access'][8]."</div><div><input value=\"1\""; if($comments){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"comments\" name=\"comments\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"help\">".$langmsg['access'][9]."</div><div><input value=\"1\""; if($help){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"help\" name=\"help\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"fileuploads\">".$langmsg['access'][49]."</div><div><input value=\"1\""; if($fileuploads){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"fileuploads\" name=\"fileuploads\"></div>";			 			 
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"imageuploads\">".$langmsg['access'][10]."</div><div><input value=\"1\""; if($imageuploads){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"imageuploads\" name=\"imageuploads\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"news\">".$langmsg['access'][11]."</div><div><input value=\"1\""; if($news){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"news\" name=\"news\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"personaloptions\">".$langmsg['access'][12]."</div><div><input value=\"1\""; if($personaloptions){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"personaloptions\" name=\"personaloptions\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"privatemsgs\">".$langmsg['access'][13]."</div><div><input value=\"1\""; if($privatemsgs){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"privatemsgs\" name=\"privatemsgs\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"profile\">".$langmsg['access'][14]."</div><div><input value=\"1\""; if($profile){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"profile\" name=\"profile\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"rss\">".$langmsg['access'][15]."</div><div><input value=\"1\""; if($rss){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"rss\" name=\"rss\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"smilies\">".$langmsg['access'][16]."</div><div><input value=\"1\""; if($smilies){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"smilies\" name=\"smilies\"></div>";
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"sysconfig\">".$langmsg['access'][17]."</div><div><input value=\"1\""; if($sysconfig){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"sysconfig\" name=\"sysconfig\"></div>";             
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"templates\">".$langmsg['access'][18]."</div><div><input value=\"1\""; if($templates){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"templates\" name=\"templates\"></div>";             
	echo "<div style=\"width: 150px; float: left; padding-left: 15px;\"><label for=\"filters\">".$langmsg['access'][19]."</div><div><input value=\"1\""; if($filters){ echo "checked=checked"; } echo " type=\"checkbox\" id=\"filters\" name=\"filters\"></div>";             
    $allcats = DataAccess::fetch("SELECT * FROM " . NEWS_CATS . " ORDER BY name");		
	?>
	<script language="javascript">
	function uncheckcats(){
		if(document.getElementById('catall').checked == true){
			<?php
                foreach($allcats AS $row){	
					echo "document.getElementById('$row[id]').checked = false;\n";
				}
			?>
		}
	}
	function uncheckall(){
		document.getElementById('catall').checked = false;
	}
	</script>
	<?php
	echo "</div>";
	echo "</td><td valign=\"top\">";

	echo "<div class=\"subheaders\" style=\"width: 268px\">" .$langmsg['access'][20] . "</div>";
	echo "<div class=\"subheaders_body\" style=\"display: table; width: 268px; height: 30px\">";	
	
	echo "<div style=\"width: 200px; float: left; padding-left: 15px;\"><label for=\"catall\">".$langmsg['access'][21]."</a></div><div><input value=\"1\" id=\"catall\" name=\"catall\" "; 			 
	if($catall == "1"){
		echo "checked=\"checked\" ";
	} 
	echo "onchange=\"uncheckcats()\" type=\"checkbox\" /></div>";
	
	echo "<div style=\"padding-left: 0px; text-align: center; width: 168px\"><hr style=\"margin-left: 15px; width: 220px; \" /></div>";	
	$i = 0;
    foreach($allcats AS $row){
		echo "<div style=\"width: 200px; float: left; padding-left: 15px;\"><label for=\"$row[id]\">$row[name]:</label></div><div><input onchange=\"uncheckall()\" id=\"$row[id]\" value=\"$row[id]\" ";	
		if(count($cat) > 0){
			if(is_array($cat)){
				if(in_array($row['id'],$cat)){
					echo "checked=\"checked\" ";
				}
			}
		}
		echo "name=\"cat[]\" type=\"checkbox\" /></div>";
		$i++;
	}

	echo "";			  	
	echo "</div>";	
	echo "</div>";
	
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	

 	

	echo "<div style=\"text-align: center\">";
	echo "<input type=\"submit\" name=\"S1\" style=\"width: 100%\" value=\"";
	
		if($_GET['do'] == "new"){
			echo $langmsg['submitfield'][5];
		}else{
			echo $langmsg['submitfield'][3];
		}
	
	echo "\" />";
	echo "</div>";
	echo "<br />";
	echo "</form>";
}            
$_POST['accessoption'] = (empty($_POST['accessoption'])) ? '' : $_POST['accessoption'];
if($_POST['accessoption'] == "delete"){
	if(count($_POST['selectedaccess']) !== 0){
		$selected = $_POST['selectedaccess'];
		$i = 0;
		$g = 0;
		$notdeleted = '';
		$deleted = '';
		foreach($selected as $uid){	
			$c = DataAccess::fetch("SELECT COUNT(uid) AS c FROM " . NEWS_USERS . " WHERE access = ?", $uid);
			$c = $c['0']['c'];
			$d = '';
			if($c > 0){
				$d = DataAccess::fetch("SELECT name FROM " . NEWS_ACCESS . " WHERE uid = ?", $uid);
				$d = $d['0']['name'];
				$notdeleted .= "$d, ";
				$g++;
			}else{
				$d = DataAccess::fetch("SELECT name FROM " . NEWS_ACCESS . " WHERE uid = ?", $uid);
				$d = $d['0']['name'];
				DataAccess::put("DELETE FROM " . NEWS_ACCESS . " WHERE uid = ?", $uid);							
				$deleted .= "$d, ";
				#check if this access level is being used for new registrations, if so disable no registrations.
				$regaccess = DataAccess::fetch("SELECT registrationaccess FROM " . NEWS_OPTIONS . " WHERE 1");
				$regaccess = $regaccess['0']['registrationaccess'];
				if($uid == $regaccess){
					DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET registrationallow = ? WHERE 1", "0");	
				}
			}						 
		}
		$notdeleted = substr($notdeleted,0,strlen($notdeleted)-2);
		$deleted = substr($deleted,0,strlen($deleted)-2);
		echo "<span class=success>".$langmsg['access'][30]." $deleted</span>";
		if($g > 0){
			echo "<span class=error>".$langmsg['access'][31]."</span> $notdeleted";
		}
	}				
}
$_GET['do'] = (empty($_GET['do'])) ? '' : $_GET['do'];
if($_GET['do'] == "new"){
	if(!$_POST['S1']){
		accesslevelform();			 	
	}elseif(!$_POST['accessname']){
		echo "<span class=\"error\">".$langmsg['access'][33]."</span>";
		accesslevelform();
	}elseif($_POST['access'] == ""){
		echo "<span class=\"error\">".$langmsg['access'][36]."</span>";
		accesslevelform();
	}elseif($_POST['autoapproved'] == ""){
		echo "<span class=\"error\">".$langmsg['access'][37]."</span>";
		accesslevelform();
	}elseif($_POST['canapprove'] == ""){
		echo "<span class=\"error\">".$langmsg['access'][38]."</span>";
		accesslevelform();
	}elseif($_POST['nocat'] == ""){
		echo "<span class=\"error\">".$langmsg['access'][40]."</span>";
		accesslevelform();			
	}else{ 		
		$name				= $_POST['accessname'];
		$access				= $_POST['access'];
		$accounts			= (empty($_POST['accounts'])) ? '0' : $_POST['accounts'];
		$accesslevels		= (empty($_POST['accesslevels'])) ? '0' : $_POST['accesslevels'];
		$sysconfig			= (empty($_POST['sysconfig'])) ? '0' : $_POST['sysconfig'];
		$cats				= (empty($_POST['categories'])) ? '0' : $_POST['categories'];
		$templates			= (empty($_POST['templates'])) ? '0' : $_POST['templates'];
		$smilies			= (empty($_POST['smilies'])) ? '0' : $_POST['smilies'];
		$filters			= (empty($_POST['filters'])) ? '0' : $_POST['filters'];
		$bannedips			= (empty($_POST['bannedips'])) ? '0' : $_POST['bannedips'];
		$rss				= (empty($_POST['rss'])) ? '0' : $_POST['rss'];
		$personaloptions	= (empty($_POST['personaloptions'])) ? '0' : $_POST['personaloptions'];
		$privatemsgs		= (empty($_POST['privatemsgs'])) ? '0' : $_POST['privatemsgs'];
		$profile			= (empty($_POST['profile'])) ? '0' : $_POST['profile'];
		$autoapproved		= $_POST['autoapproved'];
		$canapprove			= $_POST['canapprove'];
		$imageuploads		= (empty($_POST['imageuploads'])) ? '0' : $_POST['imageuploads'];
		$fileuploads		= (empty($_POST['fileuploads'])) ? '0' : $_POST['fileuploads'];
		$news				= (empty($_POST['news'])) ? '0' : $_POST['news'];
		$comments			= (empty($_POST['comments'])) ? '0' : $_POST['comments'];
		$help				= (empty($_POST['help'])) ? '0' : $_POST['help'];
		$nocat				= (empty($_POST['nocat'])) ? '0' : $_POST['nocat'];
		$fileimages			= $_POST['fileimages'];
		$viewips			= $_POST['viewips'];
		
		$_POST['catall']	= (empty($_POST['catall'])) ? '' : $_POST['catall'];
		if($_POST['catall'] == "1"){
			$selectedcats = "all";
		}else{
			$_POST['cat']	= (empty($_POST['cat'])) ? '' : $_POST['cat'];
			if($_POST['cat']){
				$selectedcats = implode(",",$_POST['cat']);
			}else{
				$selectedcats = '0';
			}
		}			 			          
        $num = DataAccess::fetch("SELECT * FROM " . NEWS_ACCESS . " WHERE name = ?", $name);		
		$num = count($num);
		if($num > 0){
			echo "<span class=\"error\">".$langmsg['access'][35]."</span>";
			accesslevelform();
		}else{
			$sql = "INSERT INTO " . NEWS_ACCESS . "
					(name,accounts,accesslevels,sysconfig,newscats,templates,smilies,wordfilters,bannedips,accesslevel,rss,personaloptions,privatemsgs,profile,autoapproved,canapprove,cats,imageuploads,news,comments,help,nocat,fileuploads,viewips,fileimages)
					VALUES
					(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			DataAccess::put($sql, $name, $accounts, $accesslevels, $sysconfig, $cats, $templates, $smilies, $filters, $bannedips, $access, $rss, $personaloptions, $privatemsgs, $profile, $autoapproved, $canapprove, $selectedcats, $imageuploads, $news, $comments, $help, $nocat, $fileuploads, $viewips, $fileimages);
			echo "<span class=\"success\">".$langmsg['access'][41]."</span>"; 
		}	
	}
}elseif($_GET['do'] == "edit"){
	if(!$_POST['S1']){
		accesslevelform();
	}else{
		$uid				= $_GET['id'];
		$name				= $_POST['accessname'];
		$access				= $_POST['access'];
		$accounts			= (empty($_POST['accounts'])) ? '0' : $_POST['accounts'];
		$accesslevels		= (empty($_POST['accesslevels'])) ? '0' : $_POST['accesslevels'];
		$sysconfig			= (empty($_POST['sysconfig'])) ? '0' : $_POST['sysconfig'];
		$cats				= (empty($_POST['categories'])) ? '0' : $_POST['categories'];
		$templates			= (empty($_POST['templates'])) ? '0' : $_POST['templates'];
		$smilies			= (empty($_POST['smilies'])) ? '0' : $_POST['smilies'];
		$filters			= (empty($_POST['filters'])) ? '0' : $_POST['filters'];
		$bannedips			= (empty($_POST['bannedips'])) ? '0' : $_POST['bannedips'];
		$rss				= (empty($_POST['rss'])) ? '0' : $_POST['rss'];
		$personaloptions	= (empty($_POST['personaloptions'])) ? '0' : $_POST['personaloptions'];
		$privatemsgs		= (empty($_POST['privatemsgs'])) ? '0' : $_POST['privatemsgs'];
		$profile			= (empty($_POST['profile'])) ? '0' : $_POST['profile'];
		$autoapproved		= $_POST['autoapproved'];
		$canapprove			= $_POST['canapprove'];
		$imageuploads		= (empty($_POST['imageuploads'])) ? '0' : $_POST['imageuploads'];
		$fileuploads		= (empty($_POST['fileuploads'])) ? '0' : $_POST['fileuploads'];
		$news				= (empty($_POST['news'])) ? '0' : $_POST['news'];
		$comments			= (empty($_POST['comments'])) ? '0' : $_POST['comments'];
		$help				= (empty($_POST['help'])) ? '0' : $_POST['help'];
		$nocat				= (empty($_POST['nocat'])) ? '0' : $_POST['nocat'];
		$fileimages			= $_POST['fileimages'];
		$viewips			= $_POST['viewips'];
		$_POST['catall']	= (empty($_POST['catall'])) ? '' : $_POST['catall'];
		if($_POST['catall'] == "1"){
			$selectedcats = "all";
		}else{
			if($_POST['cat']){
				$selectedcats = implode(",",$_POST['cat']);
			}else{
				$selectedcats = '0';
			}
		}	

        $num = DataAccess::fetch("SELECT * FROM " . NEWS_ACCESS . " WHERE name = ?", $name);
        $num = count($num);
		$sql = "UPDATE " . NEWS_ACCESS . " SET
				name = ?,
				accounts = ?,
				accesslevels = ?,
				sysconfig = ?,
				newscats = ?,
				templates = ?,
				smilies = ?,
				wordfilters = ?,
				bannedips = ?,
				accesslevel = ?,
				personaloptions = ?,
				privatemsgs = ?,
				rss = ?,
				profile = ?,
				autoapproved = ?,
				canapprove = ?,
				imageuploads = ?,
				news = ?,
				cats = ?,
				comments = ?,
				help = ?,
				nocat = ?,
				fileuploads = ?,
				viewips = ?,
				fileimages = ?
				WHERE uid = ?";
		if(!$_POST['accessname']){
			echo "<span class=\"error\">".$langmsg['access'][33]."</span>";
			accesslevelform();
		}elseif($num > 0){
			$_SESSION['origaccessname']	= (empty($_SESSION['origaccessname'])) ? '' : $_SESSION['origaccessname'];
			if($_SESSION['origaccessname'] == $_POST['accessname']){
                DataAccess::put($sql, $name, $accounts, $accesslevels, $sysconfig, $cats, $templates, $smilies, $filters, $bannedips, $access, $personaloptions, $privatemsgs, $rss, $profile, $autoapproved, $canapprove, $imageuploads, $news, $selectedcats, $comments, $help, $nocat, $fileuploads, $viewips, $fileimages, $uid);
				echo "<div class=\"success\">".$langmsg['access'][34]."</div>";
				unset($_SESSION['origaccessname']);
			}else{
				echo "<span class=\"error\">".$langmsg['access'][35]."</span>";
				accesslevelform();				     
			}
		}else{
			DataAccess::put($sql, $name, $accounts, $accesslevels, $sysconfig, $cats, $templates, $smilies, $filters, $bannedips, $access, $personaloptions, $privatemsgs, $rss, $profile, $autoapproved, $canapprove, $imageuploads, $news, $selectedcats, $comments, $help, $nocat, $fileuploads, $viewips, $fileimages, $uid);
			echo "<div class=\"success\">".$langmsg['access'][34]."</div>";
			unset($_SESSION['origaccessname']);
		}	
	}            	
}


$alltemplates = DataAccess::fetch("SELECT * FROM " . NEWS_ACCESS);
$num = count($alltemplates);
$g = $langmsg['access'][42];
$g = "<b>$num</b> " . $g;
echo "<div class=panel>".$g."</div><br />";
echo "<form method=\"POST\" action=\"?action=options&mod=access\" id=\"accessform\">";
echo "<table id=\"rows\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"33%\">".$langmsg['access'][43]."</td><td class=\"tableshead tablerightborder\" width=\"33%\">".$langmsg['access'][44]."</td><td align=\"center\" class=\"tableshead tablerightborder\" width=\"33%\">".$langmsg['access'][45]."</td><td class=\"tableshead\"><input type=\"checkbox\" id=\"allcheck\" onclick=\"selectall()\" /></td></tr>";
$d = 1;
$x = false;
foreach($alltemplates AS $row){					
	if($x == true){
		$class = "row2";
		$x = false;
	}else{
		$class = "row1";
		$x = true;   
	}
	$access = $row['accesslevel'];
	if($access == 1){ $access = $langmsg['access'][46]; }
	if($access == 2){ $access = $langmsg['access'][47]; }
	if($access == 3){ $access = $langmsg['access'][48]; }
    $numaccounts = DataAccess::fetch("SELECT * FROM " . NEWS_USERS . " WHERE access = ?", $row['uid']);
    $numaccounts = count($numaccounts); 				
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=access&do=edit&id=$row[uid]\"><img alt=\"Edit\" title=\"Edit\" src=\"images/icons/pencil.png\" /></a></td><td class=\"tablebody tablerightborder\">$row[name]</td><td class=\"tablebody tablerightborder\">$access</td><td style=\"text-align: right\" class=\"tablebody tablerightborder\">$numaccounts</td><td class=\"tablebody\"><input type=\"checkbox\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" name=\"selectedaccess[]\" value=\"$row[uid]\" /></td></tr>";
	$d++;
}
echo "</table>";
echo "<table width=\"100%\"><tr><td align=right>";
echo "<select id=\"accessoption\" name=\"accessoption\">";
echo "<option value=\"\">".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select> <input type=\"button\" value=\"OK\" onclick=\"editaccess()\" />";
echo "</td></tr></table>";
echo "<a href=\"?action=options&mod=access&do=new\"><u>".$langmsg['access'][1]."</u></a>";
echo "</td>";
echo "</tr>";
echo "</table>";

echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>