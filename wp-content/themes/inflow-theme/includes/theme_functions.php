<?php 
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );

//Theme options ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


// active menu item for archive fix
function change_page_menu_classes($menu)
{
    global $post;
    if (is_post_type_archive('products') || is_singular('products')) :
        $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
        $menu = str_replace('menu-item-object-products', 'menu-item-object-products current-menu-item', $menu); // add the current_page_parent class to the page you want
    endif;
    // if (is_post_type_archive('job') || is_singular('job')) :
    //     $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
    //     $menu = str_replace('menu-item-object-job', 'menu-item-object-job current-menu-item', $menu); // add the current_page_parent class to the page you want
    // endif;
    // if (is_post_type_archive('proizvod') || is_singular('proizvod')) :
    //     $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
    //     $menu = str_replace('menu-item-object-product', 'menu-item-object-product current-menu-item', $menu); // add the current_page_parent class to the page you want
    // endif;
    return $menu;
}
add_filter('nav_menu_css_class', 'change_page_menu_classes', 10, 2);


function cc_mime_types_dd($mimesdd) {
    $mimesdd['json'] = 'application/json'; 
    $mimesdd['svg'] = 'image/svg+xml'; 
    return $mimesdd; 
    } 
    
add_filter('upload_mimes', 'cc_mime_types_dd');



// function prefix_category_title( $title ) {
//     if(is_archive('slug-of-your-custom-post-type')){
//       $title = single_cat_title( '', false );
//     }
//     return $title;
//   }
//   add_filter( 'get_the_archive_title', 'prefix_category_title' );

  
// function my_theme_archive_title( $title ) {
//     if ( is_category() ) {
//         $title = single_cat_title( '', false );
//     } elseif ( is_tag() ) {
//         $title = single_tag_title( '', false );
//     } elseif ( is_author() ) {
//         $title = '<span class="vcard">' . get_the_author() . '</span>';
//     } elseif ( is_post_type_archive() ) {
//         $title = post_type_archive_title( '', false );
//     } elseif ( is_tax() ) {
//         $title = single_term_title( '', false );
//     }
  
//     return $title;
// }
 
// add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
?>