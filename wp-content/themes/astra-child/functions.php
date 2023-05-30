<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

//Register menu

function wpb_custom_new_menu() {
	register_nav_menu('header',__( 'Menu personnalisé' ));
  register_nav_menu('ftrmenu',__( 'Footer Menu' )); 
  }
  add_action( 'init', 'wpb_custom_new_menu' );

//Ajouter un lien Desktop

function lien_admin_menu( $items, $args) {
  
  // Si l'utilisateur est connecté et s'il est administrateur et spécifier le menu d'affichage
 
  if ( is_user_logged_in() && current_user_can( 'administrator' ) && ($args->theme_location === 'header'||$args->theme_location === 'mobile_menu')) {
      
      // link Admin
      $admin_link = admin_url();
      $link_text = 'Admin';
      $link = '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-ite"><a href="' . $admin_link . '" class="menu-link">' . $link_text . '</a></li>';

      // Insérer le lien après le premier élément du menu
     $items = preg_replace( '/(<li[^>]+>)(.*)(<\/li>)/', '$1$2</li>' . $link . '$3', $items, 1 );
  }

  return $items;
}

add_filter( 'wp_nav_menu_items', 'lien_admin_menu', 10, 2 );

//Ajouter un lien Tab et Mobile

/*function lien_admin_mobile( $items, $args) {
if ( is_user_logged_in() && current_user_can( 'administrator' ) && $args->theme_location === 'mobile_menu') {
      
  // link Admin
  $admin_link = admin_url();
  $link_text = 'Admin';
  $link = '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-ite"><a href="' . $admin_link . '" class="menu-link">' . $link_text . '</a></li>';

  // Insérer le lien après le premier élément du menu
 $items = preg_replace( '/(<li[^>]+>)(.*)(<\/li>)/', '$1$2</li>' . $link . '$3', $items, 1 );
}

return $items;
}

add_filter( 'wp_nav_menu_items', 'lien_admin_mobile', 10, 2 );*/
