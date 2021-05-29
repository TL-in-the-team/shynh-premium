<?php
/**
 * Lavo Coporation Template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Lavo Coporation-dev-team
 * @since Lavo Coporation Template 1.0
 */

/**
 * Lavo Coporation Template only works in WordPress 7 or later.
 */
include get_theme_file_path( '/inc/common.php' );

add_action('wp_head','custom_wp_head');
add_action('admin_head','custom_wp_head');
function custom_wp_head(){
    echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/images/favicon.png">';
}
//SET UP INIT
add_filter('widget_text','do_shortcode');
add_action('init','init_function');
function init_function(){
    add_theme_support( 'title-tag' );
    register_nav_menu('header-menu',__( 'Header Menu' ));
    //add_image_size( 'header-item-image', 486, 300, true );
}

//SETTINGS THEMES
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}


//ADD SCRIPTS
function add_theme_scripts() {
    wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Philosopher:wght@700&display=swap', array(), '1.0', 'all' );
    wp_enqueue_style( 'font-style-philosopher', 'https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap', array(), '1.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.min.css', array(), '1.0', 'all' );
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, TRUE);
    wp_enqueue_script('owl-carouse', get_template_directory_uri() . "/js/add-ons/owl.carousel.min.js", array(), '1.0', TRUE);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.min.js', array ( 'jquery' ), 1.1, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'lavo' ),
        'id'            => 'sidebar-footer',
        'description'   => __( 'Widgets display in footer', 'lavo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="footer__title">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'lavo' ),
        'id'            => 'sidebar-primary',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="common__sidebar__tit">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Video Sidebar', 'lavo' ),
        'id'            => 'video-sidbar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="common__sidebar__tit">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

function custom_widget_menu($atts){
    return wp_nav_menu( 
        array( 
            'menu_class' => 'footer__menu',
            'menu' => $atts['id'],
            'echo' => false
        )
    );
}

add_shortcode('nextone_menu','custom_widget_menu');

class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
 
    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        if($depth == 0):
            $output .= "\n" . $indent . '<div class="header__menu__subround"><div class="container"><ul class="' . $class_names . '">' . "\n";
        else:
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        endif;
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        
        if($depth == 0):
            $output .= "$indent</ul></div></div>\n";
        else:
            $output .= "$indent</ul>\n";
        endif;
    }
 
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
 
        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
 
        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
 
        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
 
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

function gp_parse_request_trick( $query ) {
 
    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;
 
    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
 
    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post','page') );
    }
}
add_action( 'pre_get_posts', 'gp_parse_request_trick' );