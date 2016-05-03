<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('nhathanhphat', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width)) $content_width = 640;
    register_nav_menus(
        array('main-menu' => __('Main Menu', 'nhathanhphat'))
    );
}

add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts()
{
    wp_enqueue_script('jquery');
}

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'blankslate_title');
function blankslate_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'blankslate_filter_wp_title');
function blankslate_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'nhathanhphat'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

function blankslate_custom_pings($comment)
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}

add_filter('get_comments_number', 'blankslate_comments_number');
function blankslate_comments_number($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

function add_theme_menu_item()
{
    add_menu_page("Thông tin website", "Thông tin website", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Thông tin website</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function display_hotline_element()
{

    ?>
    <input type="text" name="hotline" id="hotline" value="<?php echo get_option('hotline'); ?>"/>
    <?php
}

function display_email_element()
{
    ?>
    <input style="width: 250px;" type="text" name="email" id="email" value="<?php echo get_option('email'); ?>"/>
    <?php
}

function display_facebook_element()
{
    ?>
    <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>"/>
    <?php
}

function display_layout_element()
{
    ?>
    <input type="checkbox" name="theme_layout" value="1" <?php checked(1, get_option('theme_layout'), true); ?> />
    <?php
}

function logo_display()
{
    ?>
    <input type="file" name="logo"/>
    <?php echo get_option('logo'); ?>
    <?php
}

function footer_display()
{
    $settings = array(
        'teeny'         => true,
        'textarea_rows' => 15,
        'tabindex'      => 1
    );
    wp_editor(esc_html( __(get_option('footer_content'))), 'footer_content', $settings);
}

function handle_logo_upload()
{
    if (!empty($_FILES["demo-file"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }
    return $option;
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("hotline", "Hot Line", "display_hotline_element", "theme-options", "section");
    add_settings_field("email", "Email", "display_email_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("theme_layout", "Do you want the layout to be responsive?", "display_layout_element", "theme-options", "section");
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");
    add_settings_field("footer_content", "Footer Content", "footer_display", "theme-options", "section");

    register_setting("section", "hotline");
    register_setting("section", "email");
    register_setting("section", "facebook_url");
    register_setting("section", "theme_layout");
    register_setting("section", "logo", "handle_logo_upload");
    register_setting("section", "footer_content");
}

add_action("admin_init", "display_theme_panel_fields");

function get_post_from_post_type($id_post = '', $post_type = '', $order = '', $limit = '', $page = '') {
    global $wpdb;
    if (!empty($id_post)) {
        $sql = "Select * from $wpdb->posts where post_type = '" . $post_type . "' and post_status = 'publish' and id != $id_post";
        if (isset($order) && !empty($order)) {
            $sql.=" order by $order";
        }
        if (isset($limit) && !empty($limit) && empty($page)) {
            $sql.=" limit 0, $limit";
        }
    } else {
        $sql = "Select * from $wpdb->posts where post_type = '" . $post_type . "' and post_status = 'publish'";
        if (isset($order) && !empty($order)) {
            $sql.=" order by $order";
        }
        if (!empty($page) && isset($page)) {
            $sql .= " LIMIT " . ( ( $page - 1 ) * $limit ) . ", $limit";
        }
        if (isset($limit) && !empty($limit)) {
            $sql.=" limit 0, $limit";
        }
    }
    $items = $wpdb->get_results($sql);

    return $items;
}

function get_post_content($content = null) {
    if (!empty($content)) {
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        return $content;
    }
    return null;
}

function get_post_from_post_type_and_meta_value($value = '', $post_type = null) {
    if (isset($value)) {
        $args = array(
            'numberposts' => -1,
            'post_type' => $post_type,
            'meta_query' => array(
                array(
                    'key' => $value
                )
            )
        );
// get results
        $the_query = new WP_Query($args);
        return $the_query->posts;
    }
}

function trimstr($string, $length = 25, $method = 'WORDS', $pattern = '...') {

    if (!is_numeric($length)) {
        $length = 25;
    }

    if (strlen($string) <= $length) {
        return rtrim($string) . $pattern;
    }

    $truncate = substr($string, 0, $length);

    if ($method != 'WORDS') {
        return rtrim($truncate) . $pattern;
    }

    if ($truncate[$length - 1] == ' ') {
        return rtrim($truncate) . $pattern;
    }
// we got ' ' right where we want it

    $pos = strrpos($truncate, ' ');
// lets find nearest right ' ' in the truncated string

    if (!$pos) {
        return $pattern;
    }
// no ' ' (one word) or it resides at the very begining
// of the string so the whole string goes to the toilet

    return rtrim(substr($truncate, 0, $pos)) . $pattern;
// profit
}

function get_product_categories_parent($taxonomy = '') {
    if (!empty($taxonomy)) {
        $categories = get_terms($taxonomy, 'parent=0&hide_empty=0');
        if (!empty($categories)) {
            return $categories;
        }
    }
}

function get_posts_from_category($category = '') {
    if (!empty($category) && is_numeric($category)) {
        $args = array('category' => $category);
        $list_posts = get_posts($args);
        return $list_posts;
    }
    return array();
}
function get_post_content_from_id($id=''){
    if(!empty($id)){
        $content_post = get_post($id);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        return $content;
    }
}


