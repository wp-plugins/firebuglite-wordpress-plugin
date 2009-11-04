<?php
/*
Plugin Name: Firebug Lite User
Plugin URI: http://www.gregprogramming.com/plugins/FirebugLite
Description: Firebug Lite
Author: Greg D'Angelo
Version: 1
Author URI: http://www.gregprogramming.com
*/
/*Let's Add in our scripts*/
if($_REQUEST['debug']=='fblite'){
	add_action('wp_enqueue_scripts', 'fblite_scripts');
	function fblite_scripts() {
		wp_enqueue_script('fblite-debugger', 'http://getfirebug.com/releases/lite/1.2/firebug-lite-compressed.js', array('jquery'), '1', true);
	}
}
?>