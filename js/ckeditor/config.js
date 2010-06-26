/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
   // Define changes to default configuration here. For example:
   // config.language = 'fr';
   // config.skin = 'office2003';
   //config.removePlugins =  'elementspath,enterkey,entities,forms,pastefromword,htmldataprocessor,specialchar' ;
//   config.removePlugins =  'elementspath,enterkey,entities,forms,pastefromword,htmldataprocessor,specialchar,horizontalrule,wsc' ;
// config.skin = 'v2';
   //config.toolbar = 'Basic';
//var instance = CKEDITOR.instances['story'];


	CKEDITOR.instances['story'].config.extraPlugins = 'customimage,customsmiley,customfiles';
	CKEDITOR.instances['story'].config.resize_maxWidth = 750;
	CKEDITOR.instances['story'].config.resize_minHeight = 100;
	CKEDITOR.instances['story'].config.toolbar = [
	['Font','FontSize','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','NumberedList','BulletedList'],
	['TextColor','customimage','customsmiley','Link','customfiles','Table','-','Outdent','Indent','-','Source']
	];
	
	CKEDITOR.instances['shortstory'].config.extraPlugins = 'customimage2,customsmiley2,customfiles2';
	CKEDITOR.instances['shortstory'].config.resize_maxWidth = 750;
	CKEDITOR.instances['shortstory'].config.resize_minHeight = 100;
	CKEDITOR.instances['shortstory'].config.toolbar = [
	['Font','FontSize','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','NumberedList','BulletedList'],
	['TextColor','customimage2','customsmiley2','Link','customfiles2','Table','-','Outdent','Indent','-','Source']
	];	


};