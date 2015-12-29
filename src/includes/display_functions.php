<?php

// posting content at footer of description

function festive_cursor_trail($content)
{
	global $wpap_setting;

	if(is_single()) 
	{
		if($wpap_setting['enable'] == true)
		{

		     $content.= '
		     <div class="share-text">Share Buttons 
			     <span class="social">
			     <a href="'.$wpap_setting['facebook_url'].'"><img class="share-buttons" src="'.plugins_url( 'images/facebook.png', dirname(__FILE__) ).'" /></a>
			     </span>
			     <span class="social">
			     <a href="'.$wpap_setting['twitter_url'].'"><img class="share-buttons" src="'.plugins_url( 'images/twitter.png', dirname(__FILE__) ).'" /></a>
			     </span>
			     <span class="social">
			     <a href="'.$wpap_setting['gplus_url'].'"><img class="share-buttons" src="'.plugins_url( 'images/gplus.png', dirname(__FILE__) ).'" /></a>
				</span>
			     <span class="social">
			     <a href="'.$wpap_setting['linkedin_url'].'"><img class="share-buttons" src="'.plugins_url( 'images/linkedin.png', dirname(__FILE__) ).'" /></a>
			     </span>
		     </div>';	
		}
   	}

//add_action('wp_head','wpap_load_lightbulb'); not working

	return $content;
}

?>