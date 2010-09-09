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



$hh .= '
			<div id="pageLeft">
			<div id="pageIconHome"></div><!--icon-->
			<div id="titleHome">N-13 News<br />4.0</div>
		</div><!--leftside-->
	<div id="pageRight">';



$noaccessmsg = $hh . "<br />" . NOACCESSMSG . "
	</div><!--rightside-->
	</div><!--pageCont-->";
	
if(isloggedin()){
    if(!$_GET['action']){
        require_once('modules/home.php');         
	}elseif($_GET['action'] == "addnews"){
    	if(getaccess("news")){
    		require_once( 'modules/addnews.php');
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][1]."</span>";
    		echo $noaccessmsg;
    	}
    }elseif($_GET['action'] == "private"){
    	if(getaccess("privatemsgs")){			
    		require_once('modules/private.php');
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][2]."</span>";
    		echo $noaccessmsg;
    	}	
    }elseif($_GET['action'] == "editnews"){
    	if(getaccess("news")){
    		require_once('modules/editnews.php');		
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][3]."</span>";
    		echo $noaccessmsg;
    	}
    }elseif($_GET['action'] == "editcomments"){
    	if(getaccess("comments")){
    		require_once( 'modules/editcomments.php');
    	}else{
    		echo "<span class=header>".$langmsg['admindata'][4]."</span>";
    		echo $noaccessmsg;
    	}
    }elseif($_GET['action'] == "accesslogs"){
    	require_once( 'modules/modaccesslog.php');        
    }elseif($_GET['action'] == "options"){
        #echo "<span class=header>".$langmsg['options'][0]."</span>";
    		if($_GET['mod'] == "rss"){
    			if(getaccess("rss")){
    				require_once( 'modules/modrss.php');	   	
    			}else{				 
    				echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "accesslevels"){
    			if(getaccess("accesslevels")){	
    				require_once( 'modules/modaccess.php');
    			}else{
    			 	echo $noaccessmsg;
    			}            
    		}elseif($_GET['mod'] == "profile"){
    			if(getaccess("profile")){
    				require_once( 'modules/modprofile.php');
    			}else{
    				echo $noaccessmsg;
    			}		
    		}elseif($_GET['mod'] == "templates"){
    			if(getaccess("templates")){	
    				require_once( 'modules/modtemplate.php');
    			}else{
    			 	echo $noaccessmsg;
    			}              
    		}elseif($_GET['mod'] == "sysconfig"){
    			if(getaccess("sysconfig")){	
    				require_once( 'modules/modsystem.php');
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "bannedips"){
    			if(getaccess("bannedips")){
    				require_once( 'modules/modbanned.php');
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "newscats"){
    			if(getaccess("newscats")){
    				require_once( 'modules/modcategories.php');
    			}else{
    			 	echo $noaccessmsg;
    			}	
    		}elseif($_GET['mod'] == "accounts"){
    			if(getaccess("accounts")){
    				require_once( 'modules/modaccounts.php');
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "wordfilters"){
    			if(getaccess("wordfilters")){
    				require_once( 'modules/modfilter.php');
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "personaloptions"){
    			if(getaccess("personaloptions")){
    				require_once( 'modules/modpersonal.php');
    			}else{
    				echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "smilies"){
    			if(getaccess("smilies")){
    				require_once( 'modules/modsmilies.php');
    			}else{
    			 	echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "imageuploads"){
    			if(getaccess("imageuploads")){
    				require_once( 'modules/modimageuploads.php');
    			}else{
    				echo $noaccessmsg;
    			}
    		}elseif($_GET['mod'] == "fileuploads"){
    			if(getaccess("fileuploads")){
    				require_once( 'modules/modfileuploads.php');
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
		require_once( 'modules/recoverpassword.php');
	}else{
		require_once( 'modules/login.php');
	}
}
?>