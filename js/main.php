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
$dirname = dirname(__FILE__);
$dirname = str_replace('js', '', $dirname);
if(!defined('ABSPATH')){
	define('ABSPATH', $dirname);
}
require_once(ABSPATH . '/functions.php');
require_once(ABSPATH . '/langmsg.php');
?>
if(document.images){
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/delete.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/email_edit.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/email_in.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/email_out.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/delete.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/emoticon_smile.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/feed.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/folder_page.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/key.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/layout.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/page_add.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/page_green.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/pencil_delete.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/personal.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/user.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/vcard.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/wrench.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/images.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/monitor.png";
    cachedImages1 = new Image(2,38);
    cachedImages1.src = "images/icons/page_key.png";																										    
}
function editnews_filtercat(archives){
	var filtercat = document.getElementById('filter_cat').value;
	window.location = 'admin.php?action=editnews&archives=' + archives + '&filtercat=' + filtercat;
}
function newschangecatgroup(){
	//total catgroups
	var totalgroups = document.getElementById('totalcatgroups').innerHTML;
	for(i=1;i<=totalgroups;i++){
		if(document.getElementById('news_selectcat').value == i){
			//alert('cat_'+i);
			document.getElementById('imagecat_'+i).className = 'show';
			//document.getElementById('cat_'+i).setAttribute("class", "show");
		}else{
			//document.getElementById('imagecat_'+i).setAttribute("class", "noshow");
			document.getElementById('imagecat_'+i).className = 'noshow';
		}
	}
			
	
}
function videocatchange(){
	if(document.getElementById('videooptions').value == "addtocat" || document.getElementById('videooptions').value == "removefromcat"){
		document.getElementById('addtocat').style.display = '';
	}else{
		document.getElementById('addtocat').style.display = 'none';
	}
}
function imagecatchange(){
	if(document.getElementById('imageoptions').value == "addtocat" || document.getElementById('imageoptions').value == "removefromcat"){
		document.getElementById('addtocat').style.display = '';
	}else{
		document.getElementById('addtocat').style.display = 'none';
	}
}
function removecat(id, file, cat, view){
	document.getElementById(id).style.backgroundColor = '#ffdede';
	if(confirm('<?php echo esc($langmsg['js'][0]); ?>')){
		window.location = '?action=options&mod=imageuploads&file='+file+'&catid='+cat+'&view='+view;		
	}else{
		document.getElementById(id).style.backgroundColor = '';
	}
}
function deleteimages(){
	if(document.getElementById('imageoptions').value == "delete"){
		if(confirm('<?php echo esc($langmsg['js'][1]); ?>')){
			document.getElementById('imageform').submit();
		}	
	}else if(document.getElementById('imageoptions').value == "addtocat"){
		document.getElementById('imageform').submit();
	}else if(document.getElementById('imageoptions').value == "removefromcat"){
		document.getElementById('imageform').submit();
	}
}
function colorfield(id,origcolor){
	if(document.getElementById('check_'+id).checked == true){
		document.getElementById(id).className = 'thumbnail rowhighlight';
	}else{
		document.getElementById(id).className = 'thumbnail';
	}	
}
function markfield(field){
	document.getElementById(field).className += ' rowhighlight';
}
function unmarkfield(field){
	document.getElementById(field).className = document.getElementById(field).className.replace(' rowhighlight','');
}
function selectall() {
var checkboxes = document.getElementById('rows').getElementsByTagName('input');
for (i = 1; i < checkboxes.length ; i++) {
	if(document.getElementById('allcheck').checked == true){
		checkboxes[i].checked = true;
		
		if(document.getElementById(i).className.match(' rowhighlight')){
		}else{
			document.getElementById(i).className += ' rowhighlight';
		}
	}else{
		
		checkboxes[i].checked = false;
		document.getElementById(i).className = document.getElementById(i).className.replace(/ rowhighlight/g,'');
	}
}
}
function selectall2(){
	var checkboxes = document.getElementById('rows').getElementsByTagName('input');
	for (i = 1; i < checkboxes.length ; i++) {
		if(document.getElementById('allcheck').checked == true){
			checkboxes[i].checked = true;
		}else{
			checkboxes[i].checked = false;
		}
	}
}
function expandcollapse(elem){
	if(document.getElementById(elem).style.display == ''){
		document.getElementById(elem).style.display = 'none';
	}else{
		document.getElementById(elem).style.display = '';
	}
}
function privatemsgsedit(){
 	if(document.getElementById('todo').value == 'delete'){
		var c = confirm('<?php echo esc($langmsg['js'][2]); ?>');
		if(c){
			document.getElementById('privatemsgform').submit();
		}
 	}else{
 		document.getElementById('privatemsgform').submit();
 	}
}
function togglestory(){
	if(document.getElementById('shortstory1').style.display == ''){
		document.getElementById('shortstory1').style.display = 'none';
		document.getElementById('shortstory2').style.display = 'none';
	}else{
		document.getElementById('shortstory1').style.display = '';
		document.getElementById('shortstory2').style.display = '';
	}
}
function switcharchive(){
	if(document.getElementById('archiverow').style.display == ''){
		document.getElementById('archiverow').style.display = 'none';
	}else{
		document.getElementById('archiverow').style.display = '';
	}
}
function switchdate(){
	if(document.getElementById('daterow').style.display == ''){
		document.getElementById('daterow').style.display = 'none';
	}else{
		document.getElementById('daterow').style.display = '';
	}
}
function editcomments(){
	if(document.getElementById('commentaction').value == 'delete'){
		document.getElementById('approveaction').style.display = 'none';
	}
	if(document.getElementById('commentaction').value == 'approve'){
		document.getElementById('approveaction').style.display = '';
	}

}
function edittemplates(){
	if(document.getElementById('templateaction').value == 'delete'){
		var c = confirm('<?php echo esc($langmsg['js'][3]); ?>');
		if(c){
			document.getElementById('edittemplateform').submit();
		}
	}else if(document.getElementById('templateaction').value == 'createcopy'){
		document.getElementById('edittemplateform').submit();	
	}
}
function editbannedips(){
	if(document.getElementById('bannedipaction').value == 'delete'){
		if(confirm('<?php echo esc($langmsg['js'][4]); ?>')){
			document.getElementById('bannedform').submit();	
		}
	}
	if(document.getElementById('bannedipaction').value == 'reset'){
		if(confirm('<?php echo esc($langmsg['js'][5]); ?>')){
			document.getElementById('bannedform').submit();
		}
	}	
}
function editaccess(){
	if(document.getElementById('accessoption').value == 'delete'){
		if(confirm('<?php echo esc($langmsg['js'][6]); ?>')){
			document.getElementById('accessform').submit();	
		}else{
		
		}
	}
}
function editcataction(){
	if(document.getElementById('catoption').value == 'delete'){
		if(confirm('<?php echo esc($langmsg['js'][7]); ?>')){
			document.getElementById('catform').submit();	
		}else{
		
		}
	}else if(document.getElementById('catoption').value == 'deleteposts'){
		if(confirm('<?php echo esc($langmsg['js'][8]); ?>')){
			document.getElementById('catform').submit();	
		}else{
		
		}			
	}	
}
function editsmilies(){
	if(document.getElementById('smilieaction').value == 'delete'){
		if(confirm('<?php echo esc($langmsg['js'][32]); ?>')){
			document.getElementById('smilieform').submit();	
		}else{
		
		}
	}
}
function editnewsaction(){
	if(document.getElementById('action').value == 'changecat'){ 
		document.getElementById('allowcomments').style.display = 'none';
		document.getElementById('approveaction').style.display = 'none';
	}else if(document.getElementById('action').value == 'allowcomments'){
		document.getElementById('allowcomments').style.display = '';
		document.getElementById('approveaction').style.display = 'none';
	}else if(document.getElementById('action').value == "changeapproval"){
		document.getElementById('allowcomments').style.display = 'none'; 
		document.getElementById('approveaction').style.display = '';
	}else if(document.getElementById('action').value == "resetview"){
		document.getElementById('allowcomments').style.display = 'none'; 
		document.getElementById('approveaction').style.display = 'none';		
	}else if(document.getElementById('action').value == "resetratings"){
		document.getElementById('allowcomments').style.display = 'none'; 
		document.getElementById('approveaction').style.display = 'none';
	}else{ 
		document.getElementById('allowcomments').style.display = 'none'; 
		document.getElementById('approveaction').style.display = 'none';
	}
}
function accountaction(){
	if(document.getElementById('accountoption').value == "delete"){
		if(confirm('<?php echo esc($langmsg['js'][10]); ?>')){
			document.getElementById('accounteditform').submit();	
		}
	}else if(document.getElementById('accountoption').value == "deleteposts"){
		if(confirm('<?php echo esc($langmsg['js'][11]); ?>')){
			document.getElementById('accounteditform').submit();
		}
	}
}
function xxx(){
	
}
function insertimage(e,d,source){
	d = '<img src="' + d + '" alt="Image" title="Image" />';
	CKEDITOR.instances[document.getElementById('whichbox').innerHTML].insertHtml(d);
	//document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),d);
}
function doeditaction(){
	if(document.getElementById('action').value == 'delete'){ 
		if(confirm('<?php echo esc($langmsg['js'][12]); ?>')){
			document.getElementById('editform').submit();	
		} 
	}else{
	 		document.getElementById('editform').submit();
	}
}
function bbcode(a,e){
 if (a == "bold"){
   var c = window.prompt("<?php echo esc($langmsg['js'][13]); ?>","<?php echo esc($langmsg['js'][14]); ?>");
    if(c){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[b]' + c + '[/b]');
    }
 }
 if(a == "italic"){
   var c = window.prompt("<?php echo esc($langmsg['js'][13]); ?>","<?php echo esc($langmsg['js'][14]); ?>");
    if(c){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[i]' + c + '[/i]');
    }
 }
 if(a == "color"){
   var c = window.prompt("<?php echo esc($langmsg['js'][15]); ?>","<?php echo esc($langmsg['js'][16]); ?>");
    if(c){
       var b = window.prompt("<?php echo esc($langmsg['js'][13]); ?>","<?php echo esc($langmsg['js'][14]); ?>")
        if(b){
     	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[color=' + c + ']' + b + '[/color]');         
        }
    }
 }
 if(a == "underline"){
   var c = window.prompt("<?php echo esc($langmsg['js'][13]); ?>","<?php echo esc($langmsg['js'][14]); ?>");
    if(c){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[u]' + c + '[/u]');
    }
 }
 if(a == "list1"){
	document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'\n[ul]\n[*] Item\n[*] Item2\n[/ul]');
 }
 if(a == "list2"){
	document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'\n[ol]\n[*] Item\n[*] Item2\n[/ol]');
 } 
 if(a == "image"){
   document.getElementById('whichbox').innerHTML = e;
   if(document.getElementById('imagebox').style.display == ''){
   	 document.getElementById('imagebox').style.display = 'none';
   	 document.getElementById('fade').style.display = 'none';
   	}else{
   	 document.getElementById('imagebox').style.display = ''
   	 document.getElementById('fade').style.display = 'block';
   	}
 }
 if(a == "files"){
   if(document.getElementById('filebox').style.display == ''){
   	 document.getElementById('filebox').style.display = 'none';
   	 document.getElementById('fade').style.display = 'none';
   	}else{
   	 document.getElementById('filebox').style.display = ''
   	 document.getElementById('fade').style.display = 'block';
   	}
 }  
 if(a == "url"){
   var c = window.prompt("<?php echo esc($langmsg['js'][17]); ?>","http://");
    if(c){
     var b = window.prompt("<?php echo esc($langmsg['js'][18]); ?>","<?php echo esc($langmsg['js'][19]); ?>");
      if(b){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[url="' + c + '"]' + b + '[/url]');        
      }
    }
 }
 if(a == "size"){
  var c = window.prompt("<?php echo esc($langmsg['js'][20]); ?>","<?php echo esc($langmsg['js'][21]); ?>");
    if(c){
     var b = window.prompt("<?php echo esc($langmsg['js'][22]); ?>","");
      if(b){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[size="' + c + '"]' + b + '[/size]');
      }
    }
 }  
 if(a == "email"){
  var c = window.prompt("<?php echo esc($langmsg['js'][23]); ?>","<?php echo esc($langmsg['js'][24]); ?>");
    if(c){
     var b = window.prompt("<?php echo esc($langmsg['js'][22]); ?>","<?php echo esc($langmsg['js'][25]); ?>");
      if(b){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[email="' + c + '"]' + b + '[/email]');
      }
    }
 } 
 if(a == "code"){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[code]<' + '?php' + ' \necho \'code here\';' + '\n?' + '>[/code]');   
 }
 if(a == "center"){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[center][/center]');
 }
if(a == "left"){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[left][/left]');
 }  
if(a == "right"){
	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[right][/right]');
 }  
 if(a == "quote"){
      var b = window.prompt("<?php echo esc($langmsg['js'][26]); ?>","<?php echo esc($langmsg['js'][27]); ?>");
       if(b){
     	 document.getElementById(e).focus(); insertAtCursor(document.getElementById(e),'[quote]' + b + '[/quote]');        
       }
 }
}
function delcomments(){
if(document.getElementById('commentaction').value == 'delete'){
 	if(confirm('<?php echo esc($langmsg['js'][28]); ?>')){
 	 	document.getElementById('commentsform').submit();
 	}
}
if(document.getElementById('commentaction').value == 'approve'){
	document.getElementById('commentsform').submit();
}
}
function deletecat(){
	if(document.getElementById('cataction').value == "delete"){
		if(confirm('<?php echo esc($langmsg['js'][29]); ?>')){
			document.getElementById('catform').submit();
		}
	}
}
function insertAtCursor(myField, myValue){
	if(document.selection){
		var temp;
		myField.focus();
		sel = document.selection.createRange();
		temp = sel.text.lenght;
		sel.text = myValue;
	if(myValue.length == 0){
		sel.moveStart('character', myValue.length);
		sel.moveEnd('character', myValue.length);
	}else{
		sel.moveStart('character', -myValue.length + temp);
	}
		sel.select();
	}else if(myField.selectionStart || myField.selectionStart == '0'){
		var startPos = myField.selectionStart;
		var endPos = myField.selectionEnd;
		myField.value = myField.value.substring(0, startPos) + myValue + myField.value.substring(endPos, myField.value.length);
		myField.selectionStart = startPos + myValue.length;
		myField.selectionEnd = startPos + myValue.length;
	}else{
		myField.value += myValue;
	}
}

function showsmilies(event,source){
 document.getElementById('whichbox').innerHTML = source;
 if(!document.getElementById('smileybox')){
	 var insertO, oSpan, results;
	 insertO = document.getElementById('box');
	 oSpan = document.createElement('div');
	 oSpan.setAttribute('id','smileybox');
	 insertO.insertBefore(oSpan, insertO.firstChild);
	 document.getElementById('smileybox').style.display = '';
	 document.getElementById('smileybox').innerHTML = "<?php echo esc($langmsg['js'][30]); ?>";
	
 }else{
 		 document.getElementById('smileybox').style.display = '';
 		 document.getElementById('fade').style.display = 'block';
 }
	//	document.getElementById('smileybox').style.left = x + "px";
	// 	document.getElementById('smileybox').style.top = y + "px";
 }




function showeditimage(id){
	document.getElementById(id+'_editicon').style.display = '';
}
function hideeditimage(id){
	document.getElementById(id+'_editicon').style.display = 'none';
}
function loadthumbnails(){
	var youtubeid = document.getElementById('youtubeid').value;
	if(youtubeid.length == '11'){
		document.getElementById('http://i2.ytimg.com/vi/'+youtubeid+'/2.jpg');
		document.getElementById('videothumbnail1').style.backgroundImage = "url('http://i2.ytimg.com/vi/"+youtubeid+"/2.jpg')"; 
		//document.getElementById('thumbnailcontainer').innerHTML = thumbnails;
	}else{
		//alert('asds');
	}
}



function deletefiles(){
	if(document.getElementById('fileoptions').value == "delete"){
		if(confirm('<?php echo esc($langmsg['js'][31]); ?>')){
			document.getElementById('fileform').submit();
		}	
	}else if(document.getElementById('fileoptions').value == "addtocat"){
		document.getElementById('fileform').submit();
	}else if(document.getElementById('fileoptions').value == "removefromcat"){
		document.getElementById('fileform').submit();
	}
}
function newschangecatgroup(){
	//total catgroups
	var totalgroups = document.getElementById('totalcatgroups').innerHTML;
	for(i=1;i<=totalgroups;i++){
		if(document.getElementById('news_selectcat').value == i){
			//alert('cat_'+i);
			document.getElementById('imagecat_'+i).className = 'show';
			//document.getElementById('cat_'+i).setAttribute("class", "show");
		}else{
			//document.getElementById('imagecat_'+i).setAttribute("class", "noshow");
			document.getElementById('imagecat_'+i).className = 'noshow';
		}
	}
			
	
}

function newsfilechangecatgroup(){
	//total catgroups
	var totalgroups = document.getElementById('totalfilecatgroups').innerHTML;
	var i = 1;
	while(i <= totalgroups){
		if(document.getElementById('news_fileselectcat').value == i){
			document.getElementById('filecat_'+i).className = 'show';
		}else{
			document.getElementById('filecat_'+i).className = 'noshow';
		}
		i++;
	}	
}
function filecatchange(){
	if(document.getElementById('fileoptions').value == "addtocat" || document.getElementById('fileoptions').value == "removefromcat"){
		document.getElementById('addtocat').style.display = '';
	}else{
		document.getElementById('addtocat').style.display = 'none';
	}
}
function insertsmiley(keycode,path,source){
	//document.getElementById(e).focus(); 
	//insertAtCursor(document.getElementById(e),keycode); 
	d = '<img src="' + path + '" title="' + keycode + '" alt="' + keycode + '" />';
	CKEDITOR.instances[document.getElementById('whichbox').innerHTML].insertHtml(d);
	document.getElementById('smileybox').style.display = 'none';
	document.getElementById('fade').style.display = 'none';
	
}
function showhidesection(id){
	if(document.getElementById(id).style.display == ''){
		document.getElementById(id).style.display = 'none';
		document.getElementById('image_'+id).src = 'images/expand.gif';
	}else{
		document.getElementById(id).style.display = '';
		document.getElementById('image_'+id).src = 'images/collapse.gif';
	}	
}
function showhideeditnewsfiles(id){
	if(document.getElementById(id).style.display == "none"){
		document.getElementById(id).style.display = '';
	}else{
		document.getElementById(id).style.display = 'none';
	}
}
function toggle_section(id){
	if(document.getElementById('section_'+id).style.display == "none"){
		document.getElementById('section_'+id).style.display = 'block';
	}else{
		document.getElementById('section_'+id).style.display = 'none';
	}
}
function toggle_section2(id){
	if(document.getElementById('section_'+id).style.display == "none"){
		document.getElementById('section_'+id).style.display = 'table';
	}else{
		document.getElementById('section_'+id).style.display = 'none';
	}
}