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


$_POST['S1'] = (empty($_POST['S1'])) ? '' : $_POST['S1'];

function templateform(){
	global $langmsg;
	if($_GET['edit'] == "new"){
		echo "<div class=panel>".$langmsg['templates'][1]."</div><br>";
 		if(!$_POST['S1']){
		 	$newstemplate = "{title} - Posted by [email]{author}[/email] - Posted on {date} {ip}\n<br>\n{article}\n<br>\n[comments]Comments {comments}[/comments] [profile]{author}'s profile[/profile]<br><br>";
		 	$commentstemplate = "{message} {ip}\n<br>\nPosted by [email]{author}[/email] on {date}<br><br>";				 	
			$commentsform = "<form method=\"POST\" id=\"commentsform\" name=\"commentsform\" action=\"\" onsubmit=\"return submitcomment(useajax='yes')\">\n";
			$commentsform .= "<span style=\"font-family: Verdana; font-size: 14pt; color: #309ceb\">Add a comment</span><br />\n";
			$commentsform .= "<div style=\"font-family: Verdana; font-size: 10pt\">\n";
			$commentsform .= "<div style=\"width: 100px; float: left\">Username:</div><input type=\"text\" name=\"name\" id=\"name\" size=\"23\" value=\"{name}\" /><br />\n";
			$commentsform .= "<div style=\"width: 100px; float: left\">Email:</div><input type=\"text\" name=\"email\" id=\"email\" size=\"23\" value=\"{email}\" /><br />\n";
			$commentsform .= "<div style=\"width: 100px; float: left\">Smilies:</div>{smilies}<br />\n";
			$commentsform .= "<div style=\"display: none\">\n";
			$commentsform .= "<div style=\"width: 100px; float: left\">Security key:</div><input type=\"text\" name=\"skey\" id=\"skey\" size=\"5\" /> <img id=\"skeyimage\" src=\"http://dev.network-13.com/news/image.php\" title=\"Security key\" /><br />\n";
			$commentsform .= "</div>\n";
			$commentsform .= "<div style=\"width: 100px; float: left\">Message:</div><textarea style=\"width: 400px; height: 120px\" id=\"message\" name=\"message\">{message}</textarea><br />\n";
			$commentsform .= "<div style=\"padding-left: 100px; \"><input type=\"submit\" value=\"Add comment\" name=\"S1\">\n";
			$commentsform .= "</div>\n";
			$commentsform .= "</div>\n";
			$commentsform .= "</form>";
			$commentsform = displayhtml($commentsform);
			$newspagintation = "[prev-link]Previous [/prev-link] {pages} [next-link]Next[/next-link]";
			$commentspagintation = "[prev-link]Previous [/prev-link] {pages} [next-link]Next[/next-link]";
            $profiletemplate = "&lt;table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\"&gt;\n";
            $profiletemplate .=  "  &lt;tr&gt;\n";
            $profiletemplate .=  "    &lt;td width=\"16%\"&gt;Profile for:&lt;/td&gt;\n";
            $profiletemplate .=  "    &lt;td width=\"84%\"&gt;{username}&lt;/td&gt;\n";
            $profiletemplate .=  "  &lt;/tr&gt;\n";
            $profiletemplate .=  "  &lt;tr&gt;\n";
            $profiletemplate .=  "    &lt;td width=\"16%\"&gt;Name:&lt;/td&gt;\n";
            $profiletemplate .=  "    &lt;td width=\"84%\"&gt;{name}&lt;/td&gt;\n";
            $profiletemplate .=  "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Age:&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{age}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Location:&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{location}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Sex:&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{sex}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Interests:&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{interests}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Hobbies&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{hobbies}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Occupation:&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{occupation}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Quote:&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;{quote}&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "  &lt;tr&gt;\n";
            $profiletemplate .= "    &lt;td width=\"16%\"&gt;Homepage&lt;/td&gt;\n";
            $profiletemplate .= "    &lt;td width=\"84%\"&gt;[homepage-link]Here[/homepage-link]&lt;/td&gt;\n";
            $profiletemplate .= "  &lt;/tr&gt;\n";
            $profiletemplate .= "&lt;/table&gt;\n";
            $profiletemplate .= "&lt;br&gt;Picture&lt;br&gt;\n";
            $profiletemplate .= "{image}\n";
			$newsstructure = "{news}\n{pagintation}";
			$commentsstructure = "{news}\n{comments}\n{commentspagintation}\n{commentsform}";
			$registrationform = "Fill out the form below to register an account.<br /><br />\n";
			$registrationform .= "{errormessage}\n";
			$registrationform .= '<form method="post" action="" id="registrationform" name="registrationform">';
			$registrationform .= '<div style="float: left; width: 150px">Username:</div><input type="text" name="registrationusername" id="registrationusername" value="{username}" /><br />';
			$registrationform .= '<div style="float: left; width: 150px">Email:</div><input type="text" name="registrationemail" id="registrationemail" value="{email}" /><br />';
			$registrationform .= '<div style="float: left; width: 150px">Password:</div><input type="password" name="registrationpassword1" id="registrationpassword1" /><br />';
			$registrationform .= '<div style="float: left; width: 150px">Confirm Password:</div><input type="password" name="registrationpassword2" id="registrationpassword2" /><br />';
			$registrationform .= '<div style="float: left; width: 150px">Security Key:</div><img src="news/image.php" /> <input type="text" name="registrationskey" id="registrationskey" style="width: 50px" /><br />';					
			$registrationform .= '<div style="float: left; padding-left: 150px"><input type="submit" name="register_submit" value="Create Account" /></div>';
			$registrationform .= '<br style="clear: both" />';
			$registrationform .= '</form>';
			$registrationform = displayhtml($registrationform);			
			$uploadedfiles = "";
			$templatename = "";	

			$loginform = '<form method="POST" id="loginform" name="loginform" action="">' . "\n\n"
						.'<span style="font-family: Verdana; font-size: 12pt">Please login to comment</span><br />' . "\n"
						.'<span style="font-family: Verdana; font-size: 10pt">Don\'t have an account? <a href="?goto=register">Register here</a></span>' . "\n"
						.'<br /><br />' . "\n\n"
						.'<div style="font-family: Verdana; font-size: 10pt">' . "\n"
						.'<div style="width: 100px; float: left">Username:</div><input type="text" name="loginname" id="loginname" size="23" value="{username}" /><br />' . "\n"
						.'<div style="width: 100px; float: left">Password:</div><input type="password" name="loginpassword" id="loginpassword" size="23" /><br />' . "\n"
						.'<div style="width: 100px; float: left">Remember me:</div><input type="checkbox" name="loginremember" id="loginremember" /><br />' . "\n"
						.'<br />' . "\n"
						.'<div style="padding-left: 100px; "><input type="submit" value="Login" name="login_s1"></div>' . "\n"
						.'</div>' . "\n"
						.'</form>' . "\n\n"
						.'[results]' . "\n"
						.'Total results: {totalresults}' . "\n"
						.'<table width="100%">' . "\n"
						.'<tr><td>Title</td><td>Date</td><td>Author</td><td>Categories</td></tr>'. "\n\n"
						.'{searchresults}' . "\n"
						.'</table>' . "\n"
						.'[/results]' . "\n";
			
			$searchform = 
						'<form method="post" action="" name="searchform" id="searchform">' . "\n".
						'<div style="font-family: Verdana; font-size: 10pt; width: 100px; float: left">Search:</div><input type="text" name="searchstring" />&nbsp;<input type="submit" name="searchsubmit" value="Search" />' . "\n".
						'</form>' . "\n\n" .
						'[results]' . "\n".
						'Total results: {totalresults}' . "\n" .
						'<table width="100%">' . "\n" .
						'<tr><td>Title</td><td>Date</td><td>Author</td><td>Categories</td></tr>' . "\n\n" .
						'{searchresults}' . "\n\n" .
						'</table>' . "\n" .
						'[/results]';
			$searchresults = '<tr><td><a href="?id={id}">{title}</a></td><td>{date}</td><td>{author}</td><td>{categories}</td></tr>';
		}else{
			$newstemplate			= displayhtml($_POST['newstemplate']);
			$commentstemplate		= displayhtml($_POST['commentstemplate']);
			$commentsform			= displayhtml($_POST['commentsform']);
			$newspagintation		= displayhtml($_POST['newspagintation']);
			$commentspagintation	= displayhtml($_POST['commentspagintation']);
			$profiletemplate		= displayhtml($_POST['profiletemplate']);
			$newsstructure			= displayhtml($_POST['newsstructure']);
			$commentsstructure		= displayhtml($_POST['commentsstructure']);
			$registrationform		= displayhtml($_POST['registrationform']);
			$uploadedfiles			= displayhtml($_POST['uploadedfiles']);
			$templatename			= displayhtml($_POST['templatename']);
			$loginform				= displayhtml($_POST['loginform']);
			$searchform				= displayhtml($_POST['searchform']);
			$searchresults			= displayhtml($_POST['searchresults']);
		}	
 	}elseif($_GET['edit'] == "true"){
 		echo "<div class=panel>".$langmsg['templates'][79]."</div><br>";
 		if(!$_POST['S1']){
		 	$templateid = $_GET['id'];
            $all = DataAccess::fetch("SELECT * FROM " . NEWS_TEMPLATES . " WHERE id = ?", $templateid);
            $all = $all['0'];
		 	if(count($all) < 1){
		 		echo "<script language=\"javascript\">window.location = 'admin.php?action=options&mod=templates';</script>";	
		 	}else{
		 		$newstemplate			= displayhtml($all['template']);
				$commentstemplate		= displayhtml($all['comments']);
				$commentsform			= displayhtml($all['commentsform']);
				$newspagintation		= displayhtml($all['npagintation']);
				$commentspagintation	= displayhtml($all['cpagintation']);
				$profiletemplate		= displayhtml($all['profile']);
				$newsstructure			= displayhtml($all['newsstructure']);
				$commentsstructure		= displayhtml($all['commentsstructure']);
				$registrationform		= displayhtml($all['registrationform']);
				$uploadedfiles			= displayhtml($all['uploadedfiles']);
				$templatename			= displayhtml($all['name']);
				$loginform				= displayhtml($all['loginform']);
				$searchform				= displayhtml($all['searchform']);
				$searchresults			= displayhtml($all['searchresults']);
				$_SESSION['origtempname'] = $templatename;
		 	}
		}else{
				$newstemplate			= displayhtml($_POST['newstemplate']);
				$commentstemplate		= displayhtml($_POST['commentstemplate']);
				$commentsform			= displayhtml($_POST['commentsform']);
				$newspagintation		= displayhtml($_POST['newspagintation']);
				$commentspagintation	= displayhtml($_POST['commentspagintation']);
				$profiletemplate		= displayhtml($_POST['profiletemplate']);
				$newsstructure			= displayhtml($_POST['newsstructure']);
				$commentsstructure		= displayhtml($_POST['commentsstructure']);
				$registrationform		= displayhtml($_POST['registrationform']);
				$uploadedfiles			= displayhtml($_POST['uploadedfiles']);
				$templatename			= displayhtml($_POST['templatename']);
				$loginform				= displayhtml($_POST['loginform']);
				$searchform				= displayhtml($_POST['searchform']);
				$searchresults			= displayhtml($_POST['searchresults']);				
		}	
 	}

	echo "<form method=post action=\"\">";
	echo "<table width=\"100%\">";
	echo "<tr><td width=\"40\">".$langmsg['templates'][2]."</td><td><input type=text size=\"40\" name=\"templatename\" value=\"$templatename\"></td></tr>";
	echo "<tr><td colspan=2><hr></td></tr>";
	echo "</table>";

	// comments
	echo "<div class=\"subheaders clickable clickable\" style=\"\" onclick=\"toggle_section2('comments')\">".$langmsg['templates'][21]."</div>";
	echo "<div id=\"section_comments\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";
	echo $langmsg['templates'][22] . "<br><br>";
	echo "<b>{author}</b> - " . $langmsg['templates'][23] . "<br>";
	echo "<b>{avatar}</b> - " . $langmsg['templates'][25] . "<br>";
	echo "<b>{date}</b> - " . $langmsg['templates'][30] . "<br>";
	echo "<b>[delete-link] & [/delete-link]</b> - " . $langmsg['templates'][117] . "<br />";
	echo "<b>{email}</b> - " . $langmsg['templates'][28] . "<br>";
	echo "<b>[email] & [/email]</b> - " . $langmsg['templates'][29] . "<br>";
	echo "<b>{id}</b> - " . $langmsg['templates'][27] . "<br>";
	echo "<b>{ip}</b> - " . $langmsg['templates'][26] . "<br>";
	echo "<b>[loggedin] & [/loggedin]</b> - " . $langmsg['templates'][31] . "<br>";
	echo "<b>{message}</b> - " . $langmsg['templates'][24] . "<br>";
	echo "<b>{wordcount}</b> - " . $langmsg['templates'][114] . "<br />";
	echo "<b>{oneortwo}</b> - " . $langmsg['templates'][129] . "<br />";
	echo "<br /><textarea style=\"width: 98%; height: 130px\" name=\"commentstemplate\">";
	echo $commentstemplate;
	echo "</textarea>\n";
	echo "<br style=\"clear: both\" />";
	echo "</div>";
	
	

	
	// comments form
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('commentsform')\">".$langmsg['templates'][32]."</div>";
	echo "<div id=\"section_commentsform\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][33] . "<br><br>";
	echo "<b>{email}</b> - " . $langmsg['templates'][37] . "<br />";
	echo "<b>{id}</b> - " . $langmsg['templates'][34] . "<br />";
	echo "<b>{message}</b> - " . $langmsg['templates'][38] . "<br />";
	echo "<b>{name}</b> - " . $langmsg['templates'][36] . "<br />";
	echo "<b>{recaptcha}</b> - " . $langmsg['templates'][116] . " <br />";
	echo "<b>{smilies}</b> - " . $langmsg['templates'][39] . "<br />";
	echo "<br><textarea style=\"width: 98%; height: 130px\" name=\"commentsform\">";
	echo $commentsform;
	echo "</textarea>";
	echo "</div>";
	
	// comments pagintation	
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('commentspagintation')\">".$langmsg['templates'][44]."</div>";
	echo "<div id=\"section_commentspagintation\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo "<b>[firstpage] & [/firstpage]</b> - " . $langmsg['templates'][112] ."<br />";
	echo "<b>[lastpage] & [/lastpage]</b> - " . $langmsg['templates'][113] . "<br />";		
	echo "<b>{pages}</b> - " . $langmsg['templates'][47] . "<br />";		
	echo "<b>{newpages}</b> - " . $langmsg['templates'][111] . "<br>";				
	echo "<b>[next-link] & [/next-link]</b> - " . $langmsg['templates'][46] . "<br />";
	echo "<b>[prev-link] & [/prev-link]</b> - " . $langmsg['templates'][45] . "<br />";
	echo "<b>{currentpage}</b> - " . $langmsg['templates'][130] . "<br />";
	echo "<b>{previouspage}</b> - " . $langmsg['templates'][131] . "<br />";
	echo "<b>{nextpage}</b> - " . $langmsg['templates'][132] . "<br />";
	echo "<b>{pid}</b> - " . $langmsg['templates'][133] . "<br />";
	echo "<b>{friendlytitle}</b> - " . $langmsg['templates'][133] . "<br />";
	echo "<br><textarea style=\"width: 98%; height: 130px\" name=\"commentspagintation\">";
	echo $commentspagintation;
	echo "</textarea>\n";
	echo "</div>";	
	

	
	// comments structure
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('commentsstructure')\">".$langmsg['templates'][65]."</div>";
	echo "<div id=\"section_commentsstructure\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][66];
	echo "<br /><br /><b>{news}</b> - " . $langmsg['templates'][67] . "<br />";
	echo "<b>{commentforms}</b> - " . $langmsg['templates'][70] . "<br />";
	echo "<b>{commentpagintation}</b> - " . $langmsg['templates'][69] . "<br />";
	echo "<b>{comments}</b> - " . $langmsg['templates'][68] . "<br />";
	echo "<b>{loginform}</b> - " . $langmsg['templates'][118] . "<br />";
	echo "<b>[loggedin] & [/loggedin]</b> - " . $langmsg['templates'][31] . "<br>";
	echo "<b>{username}</b> - " . $langmsg['templates'][125] . "<br />";
	echo "<br /><textarea style=\"width: 98%; height: 130px\" name=\"commentsstructure\">$commentsstructure</textarea>";  
	echo "</div>";		

	
	// login form
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('commentsloginform')\">".$langmsg['templates'][119]."</div>";
	echo "<div id=\"section_commentsloginform\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][120];
	echo "<br /><br />";
	echo "<b>{loginerror}</b> - " . $langmsg['templates'][122] . "<br />";
	echo "<b>{recaptcha}</b> - " . $langmsg['templates'][123] . "<br />";
	echo "<b>{username}</b> - " . $langmsg['templates'][124] . "<br />";
	echo "<br /><textarea style=\"width: 98%; height: 130px\" name=\"loginform\">$loginform</textarea>";
	echo "</div>";	
	

	// news
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('news')\">".$langmsg['templates'][80]."</div>";
	echo "<div id=\"section_news\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][3] . "<br><br>";
	echo "<b>{author}</b> - " . $langmsg['templates'][9] . "<br>";
	echo "<b>{avatar}</b> - " . $langmsg['templates'][10] . "<br>";
	echo "<b>{categories}</b> - " . $langmsg['templates'][8] . "<br>";
	echo "<b>{comments}</b> - " . $langmsg['templates'][17] . "<br>";
	echo "<b>[comments] & [/comments]</b> - " . $langmsg['templates'][18] . "<br>";
	echo "<b>{currentrating}</b> - " . $langmsg['templates'][94] . "<br>";
	echo "<b>{date}</b> - " . $langmsg['templates'][7] . "<br>";
	echo "<b>{email}</b> - " . $langmsg['templates'][14] . "<br>";
	echo "<b>[email] & [/email]</b> - " . $langmsg['templates'][15] . "<br>";
	echo "<b>[files] & [/files]</b> - " . $langmsg['templates'][109] . "<br />";
	echo "<b>{files}</b> - " . $langmsg['templates'][110] . "<br />";  
	echo "<b>{friendlytitle}</b> - " . $langmsg['templates'][115] . "<br>";
	echo "<b>{id}</b> - " . $langmsg['templates'][11] . "<br>";
	echo "<b>{ip}</b> - " . $langmsg['templates'][12] . "<br>";
	echo "<b>[loggedin] & [/loggedin]</b> - " . $langmsg['templates'][19] . "<br>";
	echo "<b>[profile] & [/profile]</b> - " . $langmsg['templates'][16] . "<br>";
	echo "<b>{ratingcount}</b> - " . $langmsg['templates'][95] . "<br>";
	echo "<b>{ratingstars}</b> - " . $langmsg['templates'][93] . "<br>";
	echo "<b>[readmore] & [/readmore]</b> - " . $langmsg['templates'][13] . "<br>";
	echo "<b>{summary}</b> - " . $langmsg['templates'][5] . "<br>";
	echo "<b>{smileypath}</b> - " . $langmsg['templates'][20] . "<br>";
	echo "<b>{article}</b> - " . $langmsg['templates'][6] . "<br>";
	echo "<b>{title}</b> - " . $langmsg['templates'][4] . "<br>";
	echo "<b>{viewcount}</b> - " . $langmsg['templates'][92] . "<br>";
	echo "<b>{wordcount}</b> - " . $langmsg['templates'][114] . "<br />";
	echo "<b>{oneortwo}</b> - " . $langmsg['templates'][129] . "<br />";
	echo "<br /><textarea style=\"width: 98%; height: 130px\" name=\"newstemplate\">";
	echo $newstemplate;
	echo "</textarea>\n";
	echo "</div>";		
	
	

	// news pagintation
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('newspagintation')\">".$langmsg['templates'][40]."</div>";
	echo "<div id=\"section_newspagintation\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo "<b>[firstpage] & [/firstpage]</b> - " . $langmsg['templates'][112] ."<br />";
	echo "<b>[lastpage] & [/lastpage]</b> - " . $langmsg['templates'][113] . "<br />";		
	echo "<b>[prev-link] & [/prev-link]</b> - " . $langmsg['templates'][45] . "<br />";
	echo "<b>[next-link] & [/next-link]</b> - " . $langmsg['templates'][46] . "<br />";
	echo "<b>{pages}</b> - " . $langmsg['templates'][47] . "<br />";		
	echo "<b>{newpages}</b> - " . $langmsg['templates'][111] . "<br>";							
	echo "<b>{currentpage}</b> - " . $langmsg['templates'][130] . "<br />";
	echo "<b>{previouspage}</b> - " . $langmsg['templates'][131] . "<br />";
	echo "<b>{nextpage}</b> - " . $langmsg['templates'][132] . "<br />";	
	echo "<br><textarea style=\"width: 98%; height: 130px\" name=\"newspagintation\">";
	echo $newspagintation;
	echo "</textarea>\n";
	echo "</div>";	


	// news structure
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('newsstructure')\">".$langmsg['templates'][61]."</div>";
	echo "<div id=\"section_newsstructure\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][62];
	echo "<br /><br /><b>{news}</b> - " . $langmsg['templates'][63] . "<br />";
	echo "<b>{pagintation}</b> - " . $langmsg['templates'][64] . "<br /><br />";
	echo "<textarea style=\"width: 98%; height: 130px\" name=\"newsstructure\">$newsstructure</textarea>";
	echo "</div>";	
	

	
	// profiles
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('profiles')\">".$langmsg['templates'][48]."</div>";
	echo "<div id=\"section_profiles\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][49] . "<br><br>";
	echo "<b>{age}</b> - " . $langmsg['templates'][52] . "<br>";
	echo "<b>{image}</b> - " . $langmsg['templates'][60] . "<br>";                				
	echo "<b>{hobbies}</b> - " . $langmsg['templates'][57] . "<br>";;
	echo "<b>[homepage-link] & [/homepage-link]</b> - " . $langmsg['templates'][55] . "<br>";
	echo "<b>{interests}</b> - " . $langmsg['templates'][56] . "<br>";
	echo "<b>{location}</b> - " . $langmsg['templates'][53] . "<br>";
	echo "<b>{name}</b> - " . $langmsg['templates'][51] . "<br>";
	echo "<b>{occupation}</b> - " . $langmsg['templates'][58] . "<br>";;
	echo "<b>{quote}</b> - " . $langmsg['templates'][59] . "<br>";
	echo "<b>{sex}</b> - " . $langmsg['templates'][54] . "<br>";
	echo "<b>{username}</b> - " . $langmsg['templates'][50] . "<br>";
	echo "<br><textarea style=\"width: 98%; height: 130px\" name=\"profiletemplate\">";
	echo $profiletemplate;
	echo "</textarea>\n";
	echo "</div>";	
	
	
	// registration form
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('registrationform')\">".$langmsg['templates'][71]."</div>";
	echo "<div id=\"section_registrationform\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][72];
	echo "<br /><br />";
	echo "<b>{errormessage}</b> - " . $langmsg['templates'][75] . "<br />";
	echo "<b>{password}</b> - " . $langmsg['templates'][74] . "<br />";
	echo "<b>{recaptcha}</b> - " . $langmsg['templates'][123] . " <br />";
	echo "<b>{username}</b> - " . $langmsg['templates'][73] . "<br />";
	echo "<br />";
	echo "<textarea style=\"width: 98%; height: 130px\" name=\"registrationform\">$registrationform</textarea>";
	echo "</div>";
	


	// search form
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('searchform')\">".$langmsg['templates'][134]."</div>";
	echo "<div id=\"section_searchform\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][126];
	echo "<br /><br />";
	echo "<b>[results] & [/results]</b> - " . "Anything placed between these tags only shows when there are search results" . "<br />";
	echo "<b>{searchresults}</b> - " . "Displays the search results" . "<br />";
	echo "<b>{totalresults}</b> - " . "Displays the number of search results" . "<br />";
	echo "<br />";
	echo "<textarea style=\"width: 98%; height: 130px\" name=\"searchform\">$searchform</textarea>";
	echo "</div>";	


	// search results
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('searchresults')\">".$langmsg['templates'][135]."</div>";
	echo "<div id=\"section_searchresults\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][128];
	echo "<br /><br />";
	echo "<b>{author}</b> - " . $langmsg['templates'][9] . "<br>";
	echo "<b>{categories}</b> - " . $langmsg['templates'][8] . "<br>";
	echo "<b>{date}</b> - " . $langmsg['templates'][7] . "<br>";
	echo "<b>{friendlytitle}</b> - " . $langmsg['templates'][115] . "<br>";
	echo "<b>{id}</b> - " . $langmsg['templates'][11] . "<br>";
	echo "<b>{numresult}</b> - " . $langmsg['templates'][127] . "<br />";
	echo "<b>{summary}</b> - " . $langmsg['templates'][5] . "<br>";
	echo "<b>{article}</b> - " . $langmsg['templates'][6] . "<br>";
	echo "<b>{title}</b> - " . $langmsg['templates'][4] . "<br>";
	echo "<b>{oneortwo}</b> - " . $langmsg['templates'][129] . "<br />";
	echo "<br />";
	echo "<textarea style=\"width: 98%; height: 130px\" name=\"searchresults\">$searchresults</textarea>";
	echo "</div>";		
	
	
	
	// uploaded files
	echo "<div class=\"subheaders clickable\" style=\"\" onclick=\"toggle_section2('uploadedfiles')\">".$langmsg['templates'][136]."</div>";
	echo "<div id=\"section_uploadedfiles\" class=\"subheaders_body\" style=\"width: 519px; display: none\">";	
	echo $langmsg['templates'][101];
	echo "<br /><br />";
	echo "<b>{downloadcount}</b> - " . $langmsg['templates'][108] . "<br />";
	echo "<b>{filedate}</b> - " . $langmsg['templates'][102] . "<br />";
	echo "<b>{filename}</b> - " . $langmsg['templates'][104] . "<br />";
	echo "<b>{filesize}</b> - " . $langmsg['templates'][105] . "<br />";
	echo "<b>{filetitle}</b> - " . $langmsg['templates'][103] . "<br />";
	echo "<b>{url}</b> - " . $langmsg['templates'][106] . "<br />";
	echo "<b>{uploader}</b> - " . $langmsg['templates'][107] . "<br />";
	echo "<b>{oneortwo}</b> - " . $langmsg['templates'][129] . "<br />";
	echo "<br /><textarea style=\"width: 98%; height: 130px\" name=\"uploadedfiles\">$uploadedfiles</textarea>";
	echo "</div>";		
	
	echo "    <input type=\"submit\" value=\"Save\" class=\"nostyle\" style=\"margin-top: 5px; width: 100%\" name=\"S1\"></td>\n";
	
	echo "<br /><br /><br />\n";
}

$_GET['edit'] = (empty($_GET['edit'])) ? '' : $_GET['edit'];
if($_GET['edit'] == "new"){
	if(!$_POST['S1']){
		templateform();
	}elseif(!$_POST['templatename']){
		echo "<div class=error>".$langmsg['templates'][76]."</div>";
		templateform();
	}else{
        $templateexists = DataAccess::fetch("SELECT id FROM " . NEWS_TEMPLATES . " WHERE name = ?", $_POST['templatename']);
 		if(count($templateexists) < 1){
			$newstemplate			= $_POST['newstemplate'];
			$commentstemplate		= $_POST['commentstemplate'];
			$commentsform			= $_POST['commentsform'];
			$newspagintation		= $_POST['newspagintation'];
			$commentspagintation	= $_POST['commentspagintation'];
			$profiletemplate		= $_POST['profiletemplate'];
			$newsstructure			= $_POST['newsstructure'];
			$commentsstructure		= $_POST['commentsstructure'];
			$registrationform		= $_POST['registrationform'];
			$uploadedfiles			= $_POST['uploadedfiles'];
			$templatename			= $_POST['templatename'];
			$searchform				= $_POST['searchform'];
			$searchresults			= $_POST['searchresults'];			
			$loginform 				= $_POST['loginform'];
            DataAccess::put("INSERT INTO " . NEWS_TEMPLATES . "
            (name,template,comments,commentsform,npagintation,cpagintation,profile,newsstructure,commentsstructure,registrationform,uploadedfiles,loginform,searchform,searchresults)
            VALUES
            (?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $templatename, $newstemplate, $commentstemplate, $commentsform, $newspagintation, $commentspagintation, $profiletemplate, $newsstructure, $commentsstructure, $registrationform, $uploadedfiles, $loginform, $searchform, $searchresults);
			echo "<div class=success>".$langmsg['templates'][77]."</div>";
 		}else{
			echo "<div class=error>".$langmsg['templates'][78]."</div>";
			templateform();
		}
	}
}elseif($_GET['edit'] == "true"){     	
	if($_POST['S1'] == ""){
		templateform();
	}elseif(!$_POST['templatename']){
		echo "<span class=\"error\">Please enter a name.</span>";
		templateform();
	}else{		
		if($_SESSION['origtempname'] == $_POST['templatename']){
			$newstemplate			= $_POST['newstemplate'];
			$commentstemplate		= $_POST['commentstemplate'];
			$commentsform			= $_POST['commentsform'];
			$newspagintation		= $_POST['newspagintation'];
			$commentspagintation	= $_POST['commentspagintation'];
			$profiletemplate		= $_POST['profiletemplate'];
			$newsstructure			= $_POST['newsstructure'];
			$commentsstructure		= $_POST['commentsstructure'];
			$registrationform		= $_POST['registrationform'];
			$uploadedfiles			= $_POST['uploadedfiles'];
			$templatename			= $_POST['templatename'];
			$searchform				= $_POST['searchform'];
			$searchresults			= $_POST['searchresults'];			
			$loginform				= $_POST['loginform'];
            DataAccess::put("UPDATE " . NEWS_TEMPLATES . " SET
            template = ?,
            comments = ?,
            commentsform = ?,
            npagintation = ?,
            cpagintation = ?,
            profile = ?,
            newsstructure = ?,
            commentsstructure = ?,
            registrationform = ?,
            uploadedfiles = ?,
			loginform = ?,
			searchform = ?,
			searchresults = ?,
            name = ? WHERE id = ?", $newstemplate, $commentstemplate, $commentsform, $newspagintation, $commentspagintation, $profiletemplate, $newsstructure, $commentsstructure, $registrationform, $uploadedfiles, $loginform, $searchform, $searchresults, $templatename, $_GET['id']);
            echo "<div class=success>".$langmsg['templates'][81]."</div>";
            unset($_SESSION['origtempname']);
        }else{
			$templateexists = DataAccess::fetch("SELECT id FROM " . NEWS_TEMPLATES . " WHERE name = ?", $_POST['templatename']);
            if(count($templateexists) > 0){
				echo "<div class=\"error\">".$langmsg['templates'][82]."</div>";
				templateform($newstemplates);				
			}else{
				$newstemplate			= $_POST['newstemplate'];
				$commentstemplate		= $_POST['commentstemplate'];
				$commentsform			= $_POST['commentsform'];
				$newspagintation		= $_POST['newspagintation'];
				$commentspagintation	= $_POST['commentspagintation'];
				$profiletemplate		= $_POST['profiletemplate'];
				$newsstructure			= $_POST['newsstructure'];
				$commentsstructure		= $_POST['commentsstructure'];
				$registrationform		= $_POST['registrationform'];
				$uploadedfiles			= $_POST['uploadedfiles'];
				$templatename			= $_POST['templatename'];				
				$loginform				= $_POST['loginform'];
				$searchform				= $_POST['searchform'];
				$searchresults			= $_POST['searchresults'];
                DataAccess::put("UPDATE " . NEWS_TEMPLATES . " SET
                template = ?,
                comments = ?,
                commentsform = ?,
                npagintation = ?,
                cpagintation = ?,
                profile = ?,
                newsstructure = ?,
                commentsstructure = ?,
                registrationform = ?,
                uploadedfiles = ?,
				loginform = ?,
				searchform = ?,
				searchresults = ?,
                name = ? WHERE id = ?", $newstemplate, $commentstemplate, $commentsform, $newspagintation, $commentspagintation, $profiletemplate, $newsstructure, $commentsstructure, $registrationform, $uploadedfiles, $loginform, $searchform, $searchresults, $templatename, $_GET['id']);
				echo "<div class=success>".$langmsg['templates'][81]."</div>";                 	
			}
		}
	}
}
$_POST['templateaction'] = (empty($_POST['templateaction'])) ? '' : $_POST['templateaction'];
if($_POST['templateaction'] == "delete"){
	if($_POST['selected']){
		$tempid = DataAccess::fetch("SELECT template FROM " . NEWS_OPTIONS . " WHERE 1");
		$tempid = $tempid['0']['template'];
		foreach($_POST['selected'] as $id){
			$i = 0;
			if($id !== $tempid){
				DataAccess::put("DELETE FROM " . NEWS_TEMPLATES . " WHERE id = ?", $id);
				$i++;
			}else{
				echo "<div class=error>".$langmsg['templates'][83]."</div>";
			}
		}
		if($i > 0){
			echo "<div class=success>".$langmsg['templates'][84]."</div>";
		}
	}        
}elseif($_POST['templateaction'] == "createcopy"){
	if($_POST['selected']){
		$i = 0;
		foreach($_POST['selected'] as $id){
			$row				= DataAccess::fetch("SELECT * FROM " . NEWS_TEMPLATES . " WHERE id = ?", $id);
			$row				= $row['0'];
			$newname			= "Copy of " . $row['name'];
			$comments			= $row['comments'];
			$commentsform		= $row['commentsform'];
			$npagintation		= $row['npagintation'];
			$cpagintation		= $row['cpagintation'];
			$profile			= $row['profile'];
			$template			= $row['template'];
			$newsstructure		= $row['newsstructure'];
			$commentsstructure	= $row['commentsstructure'];
			$registrationform	= $row['registrationform'];
			$uploadedfiles		= $row['uploadedfiles'];
			$searchform			= $row['searchform'];
			$searchresults		= $row['searchresults'];	
			$loginform			= $row['loginform'];
			DataAccess::put("INSERT INTO " . NEWS_TEMPLATES . "
			(name,template,comments,commentsform,npagintation,cpagintation,profile,newsstructure,commentsstructure,registrationform,uploadedfiles,loginform,searchform,searchresults)
			VALUES
			(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $newname, $template, $comments, $commentsform, $npagintation, $cpagintation, $profile, $newsstructure, $commentsstructure, $registrationform, $uploadedfiles, $loginform, $searchform, $searchresults);
			$i++;
		}
		if($i > 0){
			echo "<div class=\"success\">$i ".$langmsg['templates'][85]."</div>";
		}
	}
}                

		
 
          
echo "<div class=panel>".$langmsg['templates'][86]."</div><br>";
$_GET['select'] = (empty($_GET['select'])) ? '' : $_GET['select'];
if($_GET['select'] == "true"){
    DataAccess::put("UPDATE " . NEWS_OPTIONS . " SET template = ?", $_GET['id']);
	echo "<div class=success>".$langmsg['templates'][87]."</div><br>";
}
echo "<form method=\"post\" name=\"edittemplateform\" id=\"edittemplateform\" action=\"?action=options&mod=template\">";
echo "<table id=\"rows\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"tableshead tablerightborder\"></td><td class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['templates'][88]."</td><td class=\"tableshead tablerightborder\" width=\"50%\">".$langmsg['templates'][89]."</td><td class=\"tableshead\"><input type=\"checkbox\" id=\"allcheck\" name=\"allcheck\" onclick=\"selectall()\" id=\"allcheck\" /></td></tr>";
$tmpcolor = 1;
$templateid = DataAccess::fetch("SELECT template FROM " . NEWS_OPTIONS . " WHERE 1");
$templateid = $templateid['0']['template'];
$d = 1;
$alltemplates = DataAccess::fetch("SELECT * FROM " . NEWS_TEMPLATES . " ORDER BY name");
foreach($alltemplates AS $row){
	if($tmpcolor == 1){
		$class = "row1";
		$tmpcolor = 2;
	}else{
		$class = "row2";
		$tmpcolor = 1;
	}
	echo "<tr id=\"$d\" onmouseover=\"markfield('$d')\" onmouseout=\"unmarkfield('$d')\" class=\"$class\"><td class=\"tablebody tablerightborder\"><a href=\"?action=options&mod=template&edit=true&id=$row[id]\"><img src=\"images/icons/pencil.png\" alt=\"Edit\" title=\"Edit\" /></a><td class=\"tablebody tablerightborder\">$row[name]</td><td class=\"tablebody tablerightborder\">";
	if($row['id'] == $templateid){ echo "*"; }else{ echo "<a href=\"?action=options&mod=template&select=true&id=$row[id]\"><u>".$langmsg['templates'][91]."</u></a>"; }         
	echo "</td><td class=\"tablebody\"><input name=\"selected[]\" value=\"$row[id]\" onclick=\"if(document.getElementById('check_'+$d).checked == true){ markfield('$d'); }else{ unmarkfield('$d') }\" id=\"check_$d\" type=\"checkbox\" /></td></tr>";
	$d++;
}
echo "<tr><td align=right colspan=4>";
echo "<select id=\"templateaction\" name=\"templateaction\"><option>".$langmsg['selectfield'][0]."</option>";
echo "<option value=\"createcopy\">".$langmsg['selectfield'][19]."</option>";
echo "<option value=\"delete\">".$langmsg['selectfield'][3]."</option>";
echo "</select>&nbsp;<input type=\"button\" name=\"S1\" onclick=\"edittemplates()\" class=\"nostyle\" value=\"".$langmsg['submitfield'][0]."\">";
echo "</td></tr>";
echo "</table>";
echo "</form>";
echo "<a href=\"?action=options&mod=template&edit=new\"><u>".$langmsg['templates'][90]."</u></a>";


echo "		</div><!--rightside-->
	</div><!--pageCont-->";
?>