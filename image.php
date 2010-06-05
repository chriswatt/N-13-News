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

session_name('n13news');
session_start();

include_once('db.php');
include_once('config.php');
$rand = rand(10000, 99999);
$_SESSION['image_random_value'] = md5(SALT . $rand);
$image = imagecreate(36, 8);
$bgColor = imagecolorallocate ($image, 255, 255, 255);
$textColor = imagecolorallocate ($image, 0, 0, 0);
imagestring ($image, 2, 1, -3,  $rand, $textColor);

header("Expires: Mon, 26 Jul 1986 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-type: image/jpeg');

imagejpeg($image);
imagedestroy($image);
?>