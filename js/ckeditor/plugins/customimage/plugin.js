CKEDITOR.plugins.add('customimage',
{
    init: function(editor)
    {
        var pluginName = 'customimage';
        CKEDITOR.dialog.add(pluginName, this.path + 'plugin.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('customimage',
            {
                label: 'Insert an image',
                command: 'customimage',
				icon : this.path + 'images/picture.png'
            });
			
		var cmd = editor.addCommand('customimage', {exec:customimage});

    }
});

function customimage(e){

	bbcode('image', 'story');
	
}