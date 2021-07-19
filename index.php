<?php

 /**

 * Plugin Name: WordPress Vue3 Plugin

 * Description: Vue3-Plugin in WordPress

 */



 function func_load_vuescripts() {    
     wp_register_script('wp_vue3_app_js', plugin_dir_url( __FILE__ ).'dist/js/app.js', true);
     wp_register_script('wp_vue3_chunk_vendors_js', plugin_dir_url( __FILE__ ).'dist/js/chunk-vendors.js', true);

 }
 function func_load_vuestyles(){
    wp_register_style('wp_vue3_app_css',plugin_dir_url( __FILE__ ).'dist/css/app.css');
 }

 add_action('wp_enqueue_scripts', 'func_load_vuescripts');
 add_action('wp_print_styles', 'func_load_vuestyles');

 //Add shortscode

 function func_wp_vue3(){

     wp_enqueue_style('wp_vue3_app_css');

     wp_enqueue_script('wp_vue3_app_js');

     wp_enqueue_script('wp_vue3_chunk_vendors_js');



     $str= '<div id="app"></div>';

     return $str;

 } // end function



add_shortcode( 'wpvue3', 'func_wp_vue3' );
