(function() {
    tinymce.create('tinymce.plugins.teams', {
        init : function(ed, url) {
            ed.addButton('teams', {
                title : 'Add a team',
                image : url+'/images/team.png',
                onclick : function() {
// triggers the thickbox
						var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
						W = W - 80;
						H = H - 84;
						tb_show( 'Add a team', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=teams-form' );
						                }
            });
        },
        createControl : function(n, cm) {
            return null;
        }
    });
    tinymce.PluginManager.add('teams', tinymce.plugins.teams);
    
    // executes this when the DOM is ready
	jQuery(function(){
		// creates a form to be displayed everytime the button is clicked
		// you should achieve this using AJAX instead of direct html code like this
		var form = jQuery('<div id="teams-form"><table id="teams-table" class="form-table">\
			<tr>\
				<th><label for="teams-photo">Photo URL</label></th>\
				<td><input type="text" name="name" id="teams-photo" value=""><br />\
				<small>Past url/link of photo</small></td>\
			</tr>\
			<tr>\
				<th><label for="teams-name">Full Name</label></th>\
				<td><input type="text" name="name" id="teams-name" value=""><br />\
				<small>Enter the full name</small></td>\
			</tr>\
                        <tr>\
				<th><label for="teams-position">Position</label></th>\
				<td><input type="text" name="position" id="teams-position" value=""><br />\
			</tr>\
                        <tr>\
				<th><label for="teams-email">Email</label></th>\
				<td><input type="text" name="email" id="teams-email" value=""><br />\
			</tr>\
		</table>\
		<p class="submit">\
			<input type="button" id="teams-submit" class="button-primary" value="Insert Team" name="submit" />\
		</p>\
		</div>');
		var table = form.find('table');
		form.appendTo('body').hide();
		
		// handles the click event of the submit button
		form.find('#teams-submit').click(function(){
			// defines the options and their default values
			// again, this is not the most elegant way to do this
			// but well, this gets the job done nonetheless
			var options = { 
				'photo':'',
				'name':'',
				'position':'',
				'email':''
		};
			var shortcode = '[teams';
			
			for( var index in options) {
				var value = table.find('#teams-' + index).val();
				
				// attaches the attribute to the shortcode only if it's different from the default value
				if ( value !== options[index] )
					shortcode += ' ' + index + '="' + value + '"';
			}
			shortcode += ']';
			
			// inserts the shortcode into the active editor
			tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
			
			// closes Thickbox
			tb_remove();
		});
	});
})();
