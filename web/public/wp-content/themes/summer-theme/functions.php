<?php
/*
*Function enqueues style  
*/
function summertheme_scripts() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/my-style.css');
  
 }

 add_action( 'wp_enqueue_scripts', 'summertheme_scripts' );

/*
*Ads theme support for featured image and rhumbnails
*/
 add_theme_support( 'post-thumbnails' );

 /*
* Function to get post featured image  
*/

 add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
 function my_post_image_html( $html, $post_id, $post_image_id ) {
     $html = '<a href="' . get_permalink( $post_id ) . '" title="' . 
         esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
     return $html;
 }
 add_image_size( 'featured-large', 1000, 677, true ); // width, height, crop
add_image_size( 'featured-small', 320, 147, true );

// Add other useful image sizes for use through Add Media modal
add_image_size( 'medium-width', 480 );
add_image_size( 'medium-height', 9999, 480 );
add_image_size( 'medium-something', 480, 480 );

// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-width' => __( 'Medium Width' ),
        'medium-height' => __( 'Medium Height' ),
        'medium-something' => __( 'Medium Something' ),
    ) );
}
/*
*Function removes admin login bar top of page  
*/
 function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
/*
*Function creates custom post type event 
*/
function wporg_custom_post_type()
{
    register_post_type('event',
                       array(
                           'labels'      => array(
                               'name'          => __('event'),
                               'singular_name' => __('event'),
                           ),
                           'public'      => true,
                           'has_archive' => true,
                           'show_in_rest' => true,
   'supports' => array('editor')
                       )
    );
}
add_action('init', 'wporg_custom_post_type');


