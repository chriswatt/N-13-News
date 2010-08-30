/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{

	// ARTICLE
	CKEDITOR.instances['story'].config.language = 'en';
	CKEDITOR.instances['shortstory'].config.language = 'en';
   
   
	CKEDITOR.instances['story'].config.extraPlugins = 'customimage,customsmiley,customfiles';
	CKEDITOR.instances['story'].config.resize_maxWidth = 750;
	CKEDITOR.instances['story'].config.resize_minHeight = 100;
	CKEDITOR.instances['story'].config.toolbar = [
	['Font','FontSize','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','NumberedList','BulletedList'],
	['TextColor','customimage','customsmiley','Link','customfiles','Table','-','Outdent','Indent','-','Source']
	];
	
	/* uncomment for all toolbar buttons
	CKEDITOR.instances['story'].config.toolbar = [
		['customfiles','customsmiley','customimage','-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
		
		
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link','Unlink','Anchor'],
		['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor'],
		['Maximize', 'ShowBlocks','-','About']
	];
	*/
	// END ARTICLE
	
	
	
	
	
	// SUMMARY
	CKEDITOR.instances['shortstory'].config.extraPlugins = 'customimage2,customsmiley2,customfiles2';
	CKEDITOR.instances['shortstory'].config.resize_maxWidth = 750;
	CKEDITOR.instances['shortstory'].config.resize_minHeight = 100;
	CKEDITOR.instances['shortstory'].config.toolbar = [
	['Font','FontSize','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','NumberedList','BulletedList'],
	['TextColor','customimage2','customsmiley2','Link','customfiles2','Table','-','Outdent','Indent','-','Source']
	];
	
	/* uncomment for all toolbar buttons
	CKEDITOR.instances['shortstory'].config.toolbar = [
		['customfiles2','customsmiley2','customimage2','-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
		
		
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link','Unlink','Anchor'],
		['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor'],
		['Maximize', 'ShowBlocks','-','About']
	];
	*/	

	// END SUMMARY

};