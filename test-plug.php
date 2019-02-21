<?php
/**
 * @package TestPlugin
 */
/*
Plugin Name: Test Plugin
Plugin URI: http://test.com
Description: This a test plugin
Version: 1.0.0
Licence: GPLv2 or later
Author: Test
*/
include('functions.php');
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class TestPlugin{
    function __construct(){
        add_action('init',array($this, 'custom_post_type'));
        
    }
    function activate(){
        $this->custom_post_type();
        flush_rewrite_rules();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    function uninstall(){
        
    }
    function custom_post_type(){
        register_post_type('book',['public' => true, 'label' => 'Books']);
    }
  
};

if (class_exists('TestPlugin')){
    $testPlugin = new TestPlugin();
}

add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );
register_activation_hook(__FILE__,array($testPlugin,'activate'));
register_deactivation_hook(__FILE__,array($testPlugin,'deactivate'));