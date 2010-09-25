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

echo "<div id=\"headerBox\">Help & About</div>";

echo "<div class=\"subheaders\">Help</div>";
echo "<div class=\"subheaders_body displaytable\">";
echo "<table width=\"100%\">
<tr><td style=\"padding: 0 20px 0 20px; width: 50%; text-align: center\" valign=\"top\">For documentation, bug reports and source code go here.<br /><br /><a href=\"http://n-13news.googlecode.com\">http://n-13news.googlecode.com</a></td><td valign=\"top\" style=\"padding: 0 20px 0 20px; width: 50%; text-align: center\">For help and suport visit the support forum.<br /><br /><a href=\"http://network-13.com/forum\">http://network-13.com/forum</a></td></tr>
</table>";
echo "</div>";

echo "<div class=\"subheaders\">Licence</div>";
echo "<div class=\"subheaders_body displaytable\">";
echo "N-13 News is a free news publishing system<br />
  Copyright (C) 2010 Chris Watt<br />
  <br />
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.<br />
  <br />
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.<br />
  <br />
  You should have received a copy of the GNU General Public License
  along with this program. If not, see http://www.gnu.org/licenses/";
echo "</pre></div>";
echo "		</div><!--rightside-->
	</div><!--pageCont-->";

?>