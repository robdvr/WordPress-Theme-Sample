<?php

// Calling register_nav_menu -> WordPress will know our theme supports Native Menus.
register_nav_menu( 'primary', 'Main Menu' );


// Calling register_sidebar -> WordPress will know our theme supports Sidebar Widgets.
if ( function_exists('register_sidebar') )
    register_sidebar();


// Custom function to Enqueue JQuery- adds a custom stylesheet or a script file for the theme's wp_head()
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    

// Calling add_action() to Add our Custom function to the Enqueue Hook
add_action('wp_enqueue_scripts', 'my_scripts_method');

?>