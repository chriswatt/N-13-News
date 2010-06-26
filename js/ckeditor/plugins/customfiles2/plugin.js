CKEDITOR.plugins.add('customfiles2',
{
    init: function(editor)
    {
        var pluginName = 'customfiles2';
        CKEDITOR.dialog.add(pluginName, this.path + 'plugin.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('customfiles2',
            {
                label: 'Attach a file to this article',
                command: 'customfiles2',
				icon : this.path + 'images/page_white_office.png'
            });
			
		var cmd = editor.addCommand('customfiles2', {exec:customfiles2});

    }
});

function customfiles2(e){

	bbcode('files','shortstory');
	
}