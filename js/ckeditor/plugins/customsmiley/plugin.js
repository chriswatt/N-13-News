CKEDITOR.plugins.add('customsmiley',
{
    init: function(editor)
    {
        var pluginName = 'customsmiley';
        CKEDITOR.dialog.add(pluginName, this.path + 'plugin.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('customsmiley',
            {
                label: 'Insert a smiley',
                command: 'customsmiley',
				icon : this.path + 'images/emoticon_smile.png'
            });
			
		var cmd = editor.addCommand('customsmiley', {exec:customsmiley});

    }
});

function customsmiley(e){

	showsmilies(e, 'story');
	
}