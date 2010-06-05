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

$noaccessmsg = "<br />" . NOACCESSMSG . "</div>";
if(isloggedin()){
    if(!$_GET['action']){
        include 'modules/home.php';          
	}elseif($_GET['action'] == "addnews"){
    	if(getaccess("news")){
    		include 'modules/addnews.php';
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][1]."</span>";
    		echo $noaccessmsg;
    	}
    }elseif($_GET['action'] == "private"){
    	if(getaccess("privatemsgs")){			
    		include 'modules/private.php';
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][2]."</span>";
    		echo $noaccessmsg;
    	}	
    }elseif($_GET['action'] == "editnews"){
    	if(getaccess("news")){
    		include 'modules/editnews.php';		
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][3]."</span>";
    		echo $noaccessmsg;
    	}
    }elseif($_GET['action'] == "editcomments"){
    	if(getaccess("comments")){
    		include 'modules/editcomments.php';
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][4]."</span>";
    		echo $noaccessmsg;
    	}
    }elseif($_GET['action'] == "accesslogs"){
    	include 'modules/modaccesslog.php';        
    }elseif($_GET['action'] == "options"){
        echo "<span class=header>".$langmsg['options'][0]."</span>";
    		if($_GET['mod'] == "rss"){
    			if(getaccess("rss")){
    				include 'modules/modrss.php';	   	
    			}else{				 
    				echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "access"){
    			if(getaccess("accesslevels")){	
    				include 'modules/modaccess.php';
    			}else{
    			 	echo $noaccessmsg;
    			}            
    		}elseif($_GET['mod'] == "profile"){
    			if(getaccess("profile")){
    				include 'modules/modprofile.php';
    			}else{
    				echo $noaccessmsg;
    			}		
    		}elseif($_GET['mod'] == "template"){
    			if(getaccess("templates")){	
    				include 'modules/modtemplate.php';
    			}else{
    			 	echo $noaccessmsg;
    			}              
    		}elseif($_GET['mod'] == "system"){
    			if(getaccess("sysconfig")){	
    				include 'modules/modsystem.php';
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "banned"){
    			if(getaccess("bannedips")){
    				include 'modules/modbanned.php';
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "categories"){
    			if(getaccess("newscats")){
    				include 'modules/modcategories.php';
    			}else{
    			 	echo $noaccessmsg;
    			}	
    		}elseif($_GET['mod'] == "accounts"){
    			if(getaccess("accounts")){
    				include 'modules/modaccounts.php';
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "filter"){
    			if(getaccess("wordfilters")){
    				include 'modules/modfilter.php';
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "personal"){
    			if(getaccess("personaloptions")){
    				include 'modules/modpersonal.php';
    			}else{
    				echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "smilies"){
    			if(getaccess("smilies")){
    				include 'modules/modsmilies.php';
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "imageuploads"){
    			if(getaccess("imageuploads")){
    				include 'modules/modimageuploads.php';
    			}else{
    				echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "fileuploads"){
    			if(getaccess("fileuploads")){
    				include 'modules/modfileuploads.php';
    			}else{
    				echo $noaccessmsg;
    			}
    		}else{
    			echo '<br />yes?</div>';
    		}
    }else{
    	echo '<span class=header>yes?</span></div>';
    }#end session check
}else{ #session = false
	if($_GET['action'] == "logout"){
		echo "Logged out<br><br>";
	}elseif($_GET['action'] == "recoverpass"){
		include 'modules/recoverpassword.php';
	}else{
		include 'modules/login.php';
	}
}
?>