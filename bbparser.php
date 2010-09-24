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

function resizeimg($str,$caption,$oldformat){
	global $image_maxheight, $image_maxwidth, $adminpath, $image_clickable;
	
	$str = str_replace(" ", "%20",$str);
	$caption = stripslashes($caption);
	if(!$caption){ $caption = 'Image'; }
	if($image_maxheight || $image_maxwidth){
		list($width, $height, $type, $attr) = @getimagesize("$str");
		if($width && $height){
			if(!$image_maxheight){ $image_maxheight = $height; }
			if(!$image_maxwidth){ $image_maxwidth = $width; }
			if($width > $image_maxwidth || $height > $image_maxheight){         
				if($width > $image_maxwidth || $height > $image_maxheight){
					$new_width = $width;
					$new_height = $height;
					$percent = 0.9;					
					while($new_width > $image_maxwidth|| $new_height > $image_maxheight){
						$new_width = $width * $percent;
						$new_height = $height * $percent;
						$percent = $percent - 0.01;
					}
				}else{
					$new_width = $width;
					$new_height = $height;			
				}
				if($image_clickable == 1){
					return "<a href=\"$str\"><img class=\"fullnewsimage\" alt=\"" . $caption . "\" src=\"" . ADMINPATH . "?action=options&mod=imageuploads&width=$new_width&height=$new_height&thumb=$str\" /></a>";
				}else{
					return "<img class=\"fullnewsimage\" alt=\"" . $caption . "\" src=\"" . ADMINPATH . "?action=options&mod=imageuploads&width=$new_width&height=$new_height&thumb=$str\" />";
				}				
			}else{
					return "<img src=\"$str\" class=\"fullnewsimage\" alt=\"" . $caption . "\" />";
			}
		}else{
			return "<img src=\"$str\" class=\"fullnewsimage\" alt=\"" . $caption . "\" />";
		}
	}else{
		return "<img src=\"$str\" class=\"fullnewsimage\" alt=\"" . $caption . "\" />";
	}
}

function resizeimg2($img){
	global $imgresize;
	require_once(ABSPATH . '/simple_html_dom.php');
	// $html = str_get_html('<img alt="Image" src="http://dev.network-13.com/news/uploads/34ui9ry3498r34dd_pen.jpg" style="width: 205px; height: 153px;" title="Image" />');

	$img = stripslashes($img);
	$img = "<img" . $img . " />";
	
	$img2 = str_get_html($img);
	$final = array();
	foreach($img2->find('img') as $element){
		$style	= explode(";", $element->style);
		$title	= $element->title;
		$alt	= $element->alt;
		$src	= $element->src;
		foreach($style AS $styles){
			$attribs = explode(":", $styles);
			if(trim($attribs['0']) == "height"){
				$final['height'] = str_replace("px", "", trim($attribs['1']));
			}
			if(trim($attribs['0']) == "width"){
				$final['width'] = str_replace("px", "", trim($attribs['1']));
			}
		}
	}

	$final['height']	= (empty($final['height'])) ? '' : $final['height'];
	$final['width']		= (empty($final['width'])) ? '' : $final['width'];

	if($imgresize == true){
		if($final['height'] && $final['width']){
			// height and width found, create thumbnail
			return "<img alt=\"" . $alt . "\" title=\"" . $title . "\" src=\"" . SCRIPTPATH . "admin.php?action=options&mod=imageuploads&thumb=" . $src . "&height=" . $final['height'] . "&width=" . $final['width'] . "\" />";
		}else{
			// height width not found, return original image
			return $img;
		}
	}else{
		return $img;
	}
}

#on-the-fly links
function linkfy($str){
	$d = explode("\n",$str);
	foreach($d as $url){
		if($url !== ""){
			$url = str_replace("<br />","",$url);
			$newstr .= "<a href=\"$url\">$url</a><br />\n";	
		}
	}
	return $newstr;
}

function bb2html($str,$usehtml = '1', $style) {

	if($style == "0"){
		$match = array('#\<img(.*?)\/\>#se');
		$replace = array("'' . resizeimg2('$1') . ''");
		$str = preg_replace($match, $replace, $str);   
		
		return $str;
	}else{
		global $langmsg, $smilies, $image_clickable;
		$bb2html = $str;                                  
		if($usehtml == "0"){
			$bb2html = htmlentities($bb2html, ENT_NOQUOTES, 'utf-8');
		}

		foreach(unserialize(SMILIES) AS $smiley){
			$bb2html = str_replace($smiley['keycode'], "<img src=\"" . $smiley['path'] . "\" alt=\"" . $smiley['keycode'] . "\" />", $bb2html);
		}
		$bb2html = str_replace("\r",'<br />', $bb2html); 
		$bb2html = preg_replace("#\[url\](.*?)\[\/url\]#se", "'' . linkfy(\"$1\") . ''", $bb2html);
		$bb2html = str_replace('[left]', '<div align="left">', $bb2html);
		$bb2html = str_replace('[/left]', '</div>', $bb2html);
		$bb2html = str_replace('[center]', '<div align="center">', $bb2html);
		$bb2html = str_replace('[/center]', '</div>', $bb2html);
		$bb2html = str_replace('[right]', '<div align="right">', $bb2html);
		$bb2html = str_replace('[/right]', '</div>', $bb2html);
		$bb2html = str_replace('[b]', '<strong>', $bb2html);
		$bb2html = str_replace('[/b]', '</strong>', $bb2html);
		$bb2html = str_replace('[i]', '<em>', $bb2html);
		$bb2html = str_replace('[/i]', '</em>', $bb2html);
		$bb2html = str_replace('[u]', '<u>', $bb2html);
		$bb2html = str_replace('[/u]', '</u>', $bb2html);
		$bb2html = str_replace('[*]', '<li>', $bb2html);
		$bb2html = str_replace('[/*]', '</li>', $bb2html);
		$bb2html = str_replace('[ul]', '<ul>', $bb2html);
		$bb2html = str_replace('[/ul]', '</ul>', $bb2html);
		$bb2html = str_replace('[list]', '<ul>', $bb2html);
		$bb2html = str_replace('[/list]', '</ul>', $bb2html);
		$bb2html = str_replace('[ol]', '<ol>', $bb2html);
		$bb2html = str_replace('[/ol]', '</ol>', $bb2html);
		$bb2html = str_replace('</li><br />', '</li>', $bb2html);
		$bb2html = str_replace('<ul><br />', '<ul>', $bb2html);
		$bb2html = str_replace('</ul><br />', '</ul>', $bb2html);
		$bb2html = str_replace('<ol><br />', '<ol>', $bb2html);
		$bb2html = str_replace('</ol><br />', '</ol>', $bb2html);
		$bb2html = str_replace('[/img]<br />', '[/img]', $bb2html);
		$bb2html = str_replace('[quote]', "<div class=\"quote\">", $bb2html);
		$bb2html = str_replace('[/quote]', '</div>', $bb2html);
		$bb2html = preg_replace("/\[size=(\W?)(.*?)(\W?)\](.*?)\[\/size\]/", '<font style="font-size: $2">$4</font>', $bb2html);
		$bb2html = preg_replace("/\[email=(\W?)(.*?)(\W?)\](.*?)\[\/email\]/i", '<a href="mailto:$2">$4</a>', $bb2html);
		$bb2html = preg_replace("/\[url=(\W?)(.*?)(\W?)\](.*?)\[\/url\]/", '<a href="$2">$4</a>', $bb2html);
		$match = array('#\[img=(\W?)(.*?)(\W?)\](.*?)\[\/img\]#se');
		$replace = array("'' . resizeimg('$2','$4','') . ''");
		$bb2html = preg_replace($match, $replace, $bb2html);	
		##oldformat [img]http://[/img]
		$match = array('#\[img\]http://(.*?)\[\/img\]#se');
		$replace = array("'' . resizeimg('http://$1','','true') . ''");
		$bb2html = preg_replace($match, $replace, $bb2html);    
		$bb2html = preg_replace('/\[color\=(.+?)\](.+?)\[\/color\]/is', "<span style=\"color:$1\">$2<!--color--></span>", $bb2html);
		
		return $bb2html;
	}
}
?>