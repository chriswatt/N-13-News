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

require_once 'db.php';
require_once 'config.php';

$_SESSION['language'] = (empty($_SESSION['language'])) ? '' : $_SESSION['language'];
if($_SESSION['language']){
	if(file_exists(ABSPATH . "/language/" . basename($_SESSION['language']) . ".php")){
		require_once(ABSPATH . '/language/' . basename($_SESSION['language']) . ".php");
	}else{
		require_once(ABSPATH . '/language/english.php');
	}
}else{
	require_once(ABSPATH . '/language/english.php');
}
?>