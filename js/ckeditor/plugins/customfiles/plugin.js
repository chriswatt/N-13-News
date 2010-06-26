CKEDITOR.plugins.add('customfiles',
{
    init: function(editor)
    {
        var pluginName = 'customfiles';
        CKEDITOR.dialog.add(pluginName, this.path + 'plugin.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('customfiles',
            {
                label: 'Attach a file to this article',
                command: 'customfiles',
				icon : this.path + 'images/page_white_office.png'
            });
			
		var cmd = editor.addCommand('customfiles', {exec:customfiles});

    }
});

function customfiles(e){

	bbcode('files','story');
	
}