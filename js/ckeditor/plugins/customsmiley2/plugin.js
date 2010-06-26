CKEDITOR.plugins.add('customsmiley2',
{
    init: function(editor)
    {
        var pluginName = 'customsmiley2';
        CKEDITOR.dialog.add(pluginName, this.path + 'plugin.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('customsmiley2',
            {
                label: 'Insert a smiley',
                command: 'customsmiley2',
				icon : this.path + 'images/emoticon_smile.png'
            });
			
		var cmd = editor.addCommand('customsmiley2', {exec:customsmiley2});

    }
});

function customsmiley2(e){

	showsmilies(e, 'shortstory');
	
}