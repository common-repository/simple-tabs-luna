<?php
/*
Plugin Name: Simple Tabs Luna
Plugin URI: http://danielriera.net/plugins-wp/tabs-luna
Description: Show simple tabs on post, widgets, etc.
Author: Daniel Riera
Version: 1.0
Author URI: http://danielriera.net
Text Domain: simple-tabs-luna
*/


function SIMTAB_scripts() {
	wp_register_style( 'css_SIMTAB', plugins_url('simple-tabs-luna/css/estilos.css'));
	wp_enqueue_style( 'css_SIMTAB' );
	wp_register_script( 'js_SIMTAB', plugins_url('simple-tabs-luna/js/core.js'));
	wp_enqueue_script( 'js_SIMTAB' );	
}
function SIMTAB_tab($atributosTab, $contenidoTab) {
	extract(shortcode_atts(array('title' => ''), $atributosTab));
	$contenidoLimpio = str_replace('"',"'",$contenidoTab);
	$salidaTab = '<li class="simple-tabs-wp-plugin" data-content="'.$contenidoLimpio.'"><a>'.$title.'</a></li>';
	return $salidaTab;
}
function SIMTAB_finishLoad(){
	echo '<script>SIMTAB_checkTabs();</script>';
}

add_shortcode('tab', 'SIMTAB_tab');
add_action( 'wp_enqueue_scripts','SIMTAB_scripts');
add_action( 'wp_footer','SIMTAB_finishLoad');