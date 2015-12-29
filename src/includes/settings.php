<?php

add_action('admin_head','wpap_load_style');

// all settings are up here

// set the plugin button to sidebar 

function wpap_menu_settings()
{
	global $wpap_setting;
	ob_start();
?>
<div class="wrap">
	<h2><?php _e('Setting up You  Social Media','wpap_domain'); ?></h2>
	
	<form action="options.php" method="POST">
		<?php settings_fields('wpap_settings_group'); ?>
	  	<div class="share-text">
			<p>
				<label class="description" for="wpap_settings[enable]" >
					<?php _e('Enable','wpap_domain'); ?>
				</label>
				<input type="checkbox" id="wpap_settings[enable]" name="wpap_settings[enable]" value="1" 
					<?php checked(1,$wpap_setting['enable']); ?> />

			     <span class="social">
			     	<img class="share-buttons" src="<?php echo plugins_url( 'images/facebook.png', dirname(__FILE__) ); ?>" />
			     </span>
			     <span class="social">
			     	<img class="share-buttons" src="<?php echo plugins_url( 'images/twitter.png', dirname(__FILE__) ); ?>" />
			     </span>
			     <span class="social">
			     	<img class="share-buttons" src="<?php echo plugins_url( 'images/gplus.png', dirname(__FILE__) ); ?>" />
				</span>
			     <span class="social">
			     	<img class="share-buttons" src="<?php echo plugins_url( 'images/linkedin.png', dirname(__FILE__) ); ?>" />
			     </span>
			</p>
		</div>
		
		<div class="share-text">
			<p>
				<label class="description" for="wpap_settings[ligh_bulb]" >
					<?php _e('Enable Lights','wpap_domain'); ?>
				</label>
				<input type="checkbox" id="wpap_settings[ligh_bulb]" name="wpap_settings[ligh_bulb]" value="1" 
					<?php checked(1,$wpap_setting['ligh_bulb']); ?> />
			</p>
		</div>
		<div class="share-text">
			<p>
				<label class="description" for="wpap_settings[cursor]" >
				<?php _e('Enable Trailing Cursor','wpap_domain'); ?>
				</label>
				<input type="checkbox" id="wpap_settings[cursor]" name="wpap_settings[cursor]" value="1" 
					<?php checked(1,$wpap_setting['cursor']); ?> />
			
				<label class="description" for="wpap_settings[cursor_text]" >
					<?php _e('Add Cursor Text','wpap_domain'); ?>
				</label>
				<input id="wpap_settings[cursor_text]" size="50" name="wpap_settings[cursor_text]" type="text" value="<?php echo $wpap_setting['cursor_text']; ?>" />
			</p>
		</div>


	<p>
		<label class="description" for="wpap_settings[facebook_url]" >
			<?php _e('Add Facebook URL','wpap_domain'); ?>
		</label>
		<input id="wpap_settings[facebook_url]" size="50" name="wpap_settings[facebook_url]" type="text" value="<?php echo $wpap_setting['facebook_url']; ?>" />
	</p>
	
	<p>
		<label class="description" for="wpap_settings[twitter_url]" >
			<?php _e('Add Twitter URL','wpap_domain'); ?>
		</label>
		<input id="wpap_settings[twitter_url]" size="50" name="wpap_settings[twitter_url]" type="text" value="<?php echo $wpap_setting['twitter_url']; ?>" />
	</p>
	
	<p>
		<label class="description" for="wpap_settings[gplus_url]" >
			<?php _e('Add Google+ URL','wpap_domain'); ?>
		</label>
		<input id="wpap_settings[gplus_url]" size="50" name="wpap_settings[gplus_url]" type="text" value="<?php echo $wpap_setting['gplus_url']; ?>" />
	</p>
	
	<p>
		<label class="description" for="wpap_settings[linkedin_url]" >
			<?php _e('Add LinkedIn URL','wpap_domain'); ?>
		</label>
		<input id="wpap_settings[linkedin_url]" size="50" name="wpap_settings[linkedin_url]" type="text" value="<?php echo $wpap_setting['linkedin_url']; ?>" />
	</p>
	<p class="submit">
		<input type="submit" name="save" calss="button button-primary" value="<?php echo _e('Save Option','wpap_domain'); ?>" />
	</p>
	</form>

</div>
<?php

	echo ob_get_clean();
}

function wpap_menu()
{

//add_options_page('page_title','name_of_menu_item','who can access this page or access permission','slug of page means fake url','function name');
//add_submenu_page('Setting Up Widgets','Ad Poster','manage_options','ad-settings','wpap_settings'); with different functions
add_menu_page('Setting Up Widgets','Festive Cursor Trail','manage_options','ad-settings','wpap_menu_settings');

}

add_action('admin_menu','wpap_menu');

function wpap_register_setting()
{
	register_setting('wpap_settings_group','wpap_settings');
}

add_action('admin_init','wpap_register_setting');

?>