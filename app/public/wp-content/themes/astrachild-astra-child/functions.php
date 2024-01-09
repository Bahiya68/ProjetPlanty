<?php
/* Child theme generated with WPS Child Theme Generator */

if (!function_exists('b7ectg_theme_enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles');

    function b7ectg_theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }
}




add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
  function add_extra_item_to_nav_menu( $items, $args ) {
      if (is_user_logged_in() && ($args->theme_location == "primary" || $args->theme_location == "menu left")) {
          $items .= '<li class="menu-item menu-item-type-post_type "><a class="menu-link" href="'.  get_admin_url() .'">Admin</a></li>';
     }
    

    
     return $items;
  
    }




// add_filter('wp_nav_menu_items', 'ajouter_element_menu', 10, 2);
// function ajouter_element_menu($items, $args) {
//     if (is_user_logged_in() && ($args->theme_location == "primary" )) 
//    //Votre code à ajouter au menu
//     $nouvel_element = '<li><a class="menu-item menu-item-type-post_type" href="'.  get_admin_url() .'">Admin</a></li>';
//     // Ajoutez l'élément au début du menu
//     $items =  $nouvel_element . $items;
 
//     return $items;
// }

 

   





