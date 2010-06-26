CKEDITOR.plugins.add('customimage2',
{
    init: function(editor)
    {
        var pluginName = 'customimage2';
        CKEDITOR.dialog.add(pluginName, this.path + 'plugin.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('customimage2',
            {
                label: 'Insert an image',
                command: 'customimage2',
				icon : this.path + 'images/picture.png'
            });
			
		var cmd = editor.addCommand('customimage2', {exec:customimage2});

    }
});

function customimage2(e){

	bbcode('image', 'shortstory');
	
}