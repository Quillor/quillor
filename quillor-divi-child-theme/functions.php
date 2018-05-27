<?php
/**
 * @author Divi Space
 * @copyright 2017
 */
if (!defined('ABSPATH')) die();
function divi_module_loading() {    if ( ! class_exists('ET_Builder_Module') ) {        return;    }	get_template_part('custom-modules/cbm');		$cbm  = new Custom_ET_Builder_Module_Blog();	remove_shortcode('et_pb_blog');		add_shortcode('et_pb_blog', array($cbm, '_shortcode_callback'));}//add_action('wp', 'divi_module_loading', 9999);
function ds_ct_enqueue_parent() { 		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );		wp_enqueue_style( 'cocoen-style', get_stylesheet_directory_uri() . '/assets/stylesheet/css/cocoen.min.css' ); 	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/stylesheet/css/style.css' ); }

function ds_ct_loadjs() {	// Google jQuery
	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',array( 'jquery' ) );	wp_enqueue_script( 'flowtype-script', get_stylesheet_directory_uri() . '/assets/js/flowType.js',array( 'jquery' ) );	wp_enqueue_script( 'cocoen-script', get_stylesheet_directory_uri() . '/assets/js/cocoen.min.js',true );	wp_enqueue_script('mixitup-js', 'https://demos.kunkalabs.com/mixitup/mixitup.min.js', true);
	}

add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );
add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );
include('login-editor.php');
?>