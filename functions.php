<?php
add_action('after_setup_theme', 'pizza_setup');
function pizza_setup(){
    load_theme_textdomain('pizza', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('woocommerce');

    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    //creo le posizioni del menu
    register_nav_menus(
        [
            'left-main-menu' => esc_html__('Left main Menu', 'pizza'),
            'right-main-menu' => esc_html__('Right main Menu', 'pizza')
        ]
    );
}



add_action('wp_enqueue_scripts', 'pizza_enqueue');
function pizza_enqueue()
{
    wp_enqueue_style('pizza-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}
add_action('wp_footer', 'pizza_footer');
function pizza_footer()
{
?>
<script>
    jQuery(document).ready(function ($) {
        var deviceAgent = navigator.userAgent.toLowerCase();
        if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
            $("html").addClass("ios");
            $("html").addClass("mobile");
        }
        if (deviceAgent.match(/(Android)/)) {
            $("html").addClass("android");
            $("html").addClass("mobile");
        }
        if (navigator.userAgent.search("MSIE") >= 0) {
            $("html").addClass("ie");
        }
        else if (navigator.userAgent.search("Chrome") >= 0) {
            $("html").addClass("chrome");
        }
        else if (navigator.userAgent.search("Firefox") >= 0) {
            $("html").addClass("firefox");
        }
        else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
            $("html").addClass("safari");
        }
        else if (navigator.userAgent.search("Opera") >= 0) {
            $("html").addClass("opera");
        }
    });
</script>
<?php
}
add_filter('document_title_separator', 'pizza_document_title_separator');
function pizza_document_title_separator($sep)
{
    $sep = esc_html('|');
    return $sep;
}
add_filter('the_title', 'pizza_title');
function pizza_title($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}
function pizza_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}
add_filter('nav_menu_link_attributes', 'pizza_schema_url', 10);
function pizza_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}
if (!function_exists('pizza_wp_body_open')) {
    function pizza_wp_body_open()
    {
        do_action('wp_body_open');
    }
}
add_action('wp_body_open', 'pizza_skip_link', 5);
function pizza_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'pizza') . '</a>';
}
add_filter('the_content_more_link', 'pizza_read_more_link');
function pizza_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'pizza'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}
add_filter('excerpt_more', 'pizza_excerpt_read_more_link');
function pizza_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'pizza'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}
add_filter('big_image_size_threshold', '__return_false');
add_filter('intermediate_image_sizes_advanced', 'pizza_image_insert_override');
function pizza_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}
add_action('widgets_init', 'pizza_widgets_init');
function pizza_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar Widget Area', 'pizza'),
            'id' => 'primary-widget-area',
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
}
add_action('wp_head', 'pizza_pingback_header');
function pizza_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('comment_form_before', 'pizza_enqueue_comment_reply_script');
function pizza_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function pizza_custom_pings($comment)
{
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?>
</li>
<?php
}
add_filter('get_comments_number', 'pizza_comment_count', 0);
function pizza_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
   /* acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));*/
    
}


  
function pizza_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Pizze', 'pizza' ),
        'menu_icon' => 'dashicons-food',
        'show_in_rest' => true,
        'supports'  => ['title', 'editor', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail']
    );
    register_post_type( 'pizza', $args );//creo il cpt pizza
    
    $args = array(
        'public'    => true,
        'label'     => __( 'Ingredienti', 'pizza' ),
        'menu_icon' => 'dashicons-food',
        'show_in_rest' => true,
        'supports'  => ['title', 'editor', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail']
    );
    register_post_type( 'ingredienti', $args );//creo il cpt ingredienti
}
add_action( 'init', 'pizza_setup_post_type' );