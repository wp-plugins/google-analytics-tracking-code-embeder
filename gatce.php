<?php 
/*
Plugin Name: Google Analytics Tracking Code Embeder
Plugin URI: http://www.mixedwaves.com/google-analytics-tracking-code-embeder/
Description: This simple plugin allows you to embed your Google Analytics Tracking Code to your theme files without hard-coding them into your template or theme files. You add your GA code once in plugin's settings page and it gets embedded in all themes you select for your blog. To add your GA tracking code go to the <a href="options-general.php?page=gatce.php">settings page &raquo;</a>
Author: Penuel Ratnagrahi
Version: 1.0
Author URI: http://www.mixedwaves.com/
*/
function get_gatcode() {
	
	$ga = get_option('gatc_code');

	return $ga;
}


function gatce() {
	
	
	if(get_option('gatc_disabled')!="1"){
		echo "\n";
	
		echo "\n<!-- (GATCE) Google Analytics Tracking Code begin-->\n";
	
		echo get_gatcode();
	
		echo "\n<!-- Google Analytics Tracking Code end-->\n";
		}

}

function gatce_css(){

	echo '<style type="text/css">
		#icon-options-gatce	{background:url("../wp-content/plugins/'. str_replace(basename(__FILE__),"", plugin_basename(__FILE__)) .'images/analytics.png") no-repeat scroll  transparent;}
	</style>';
}

function gatce_settings_menu(){
 
 add_options_page("Google Analytics Tracking Code Embeder", "GA Tracking Code", "administrator", 'gatce.php', 'gatce_options_page'); 

}

function gatce_options_page(){
	include("gatce_options.php");
}



add_action('wp_footer', 'gatce');

add_action('admin_head', 'gatce_css');

add_action('admin_menu', 'gatce_settings_menu');


?>
