<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0025)http://luattritam.com.vn/ -->
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php wp_head(); ?>

    <link href="http://luattritam.com.vn/Images/favicon.ico" type="image/x-icon" rel="shortcut icon">

    <script language="javascript" type="text/javascript">
        var UrlPathHome = '/';
    </script>
    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>
    <link type="text/css" rel="Stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link type="text/css" rel="Stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nav.css">
    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/Menu.js"></script>
    <link type="text/css" rel="Stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jqueryHome.js"></script>
    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/flash.js"></script>
    <link type="text/css" rel="Stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ns.css">
    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jns.js"></script>

    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
    <link type="text/css" rel="Stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css">

    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>

    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
    <link type="text/css" rel="Stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">

    <script language="javascript" type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/jquery.simplyscroll.min.js"></script>
    <link type="text/css" rel="Stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/css/jquery.simplyscroll.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js" type="text/javascript"></script>

<body>
<?php

class Home_page
{
    const LIEN_HE = 12;
    public $hotline;
    public $email;
    public $facebook_link;

    public function __construct()
    {
    $this->hotline           = get_option('hotline');
        $this->email         = get_option('email');
        $this->facebook_link = get_option('facebook_url');
    }

    public static function getMenuItems($menu_id = 2)
    {
        $menu = wp_get_nav_menu_items($menu_id, array());
        return $menu;
    }
}
$page = new Home_page();
?>
<div id="wrapper">

    <div class="banner-container shell">
        <div class="banner">
            <!-- header -->
            <header id="header">
                <h1 id="logo">
                    <a title="logo" href=<?php echo get_site_url(); ?> target="_self"><img
                            src="<?php echo get_template_directory_uri();?>/images/logo.png" width="267" height="97" border="0"
                            alt="logo"></a>
                </h1>

                <div class="banner-content-right">
                    <div class="b-c-lang">
                        <ul class="menu_MenuTopSub top-level" id="menu_MenuTopSub">
                            <li><a class="menu_MenuTopSub" id="p_1" href="/">Trang chủ</a>
                            <li><a class="menu_MenuTopSub" id="p_194" href="/sitemap.htm">Sitemap</a>
                            <li><a class="menu_MenuTopSub" id="p_6" href="<?php echo get_page_link($page::LIEN_HE) ?>">Liên
                                    hệ</a>
                        </ul>
                    </div>
                    <!-- search -->
                    <div class="search">

                        <div class="search-box">
                            <form method="get" action="/tim-kiem.htm" onsubmit="frm_search(this);return false;">
                            <span class="field"><input name="key" type="text" class="field"
                                                       value="keywords here ..." title="keywords here ..."/></span>
                                <input type="submit" class="search-btn" value=""/>
                            </form>
                        </div>
                        <div class="email"><span>Email: <font color="#4263aa"><?php echo $page->email; ?><br/><br
                                        type="_moz"/></font></span></div>
                        <div class="hotline"><span>Hotline: <?php echo $page->hotline; ?> </span></div>
                    </div>
                    <!-- end of search -->
                    <div class="top-h1-content"></div>

                </div>

            </header>
            <!-- end of header -->
            <!-- navigation -->
            <nav id="navigation" class="menu-container">
                <a href="#" class="nav-btn">Trang chủ<span class="arr"></span></a>
                <ul class="menu" id="menu">
                    <?php
                    foreach ($page::getMenuItems() as $obj) {
                        $link = $obj->url;
                        switch ($obj->ID) {
                            case "23" :
                                $sub_content = get_post_from_post_type(null,'gioithieu', null, 6);
                            break;
                            case "26" : //san pham
                                $taxonomy = 'danh-muc-san-pham';
                                $sub_content = $terms = get_terms($taxonomy, array(
                                    'hide_empty' => 0,
                                ) );
                            break;
                            case "34" : // co dau to chuc
                                $sub_content = null;
                            break;
                            case "31" : // tin tuc
                                $sub_content = null;
                                break;
                            case "37" : //tuyen dung
                                $sub_content = get_post_from_post_type(null,'tuyendung', null, 6);
                            break;
                            default:
                                $sub_content = null;
                            break;
                        }
                        ?>
                        <li><a class="menulink " id="p_1" href="<?php echo $link;?>"><?php echo $obj->title; ?></a>
                            <?php
                            if(!empty($sub_content)) {
                            ?>
                            <ul>
                                <?php foreach($sub_content as $obj) {
                                    $link = get_permalink($obj->ID);
                                    if (isset($obj->post_title)){
                                        $title = $obj->post_title;
                                    }
                                    if (isset($obj->name)){
                                        $title = $obj->name;
                                    }
                                    if($obj->term_id) {
                                        $link = get_term_link($obj->term_id);
                                    }
                                ?>
                                <li><a class="sub" title="<?php echo $title;?>"  href="<?php echo $link;?>"><span><?php echo $title;?></span></a>
                                </li>
                                    <?php }?>
                            </ul>
                            <?php }?>
                        </li>
                    <?php } ?>
                </ul>
                <script type="text/javascript">
                    var menu = new menu.dd("menu");
                    menu.init("menu", "menuhover");
                </script>
            </nav>
            <!-- end of navigation -->
        </div>
    </div>


    <!-- slider -->
    <div class="slider-container">
        <div class="slider-holder">
            <?php
            $img_home = get_images_from_gallery(3);
            ?>
            <div class="slider flexslider">
                <ul class="slides">
                    <?php foreach ($img_home as $obj) {
                        $img_url = get_site_url()."/wp-content/gallery/" . $obj->slug . "/" . $obj->filename;
                        ?>
                    <li>
                        <div class="img-holder">
                            <img src="<?php echo $img_url;?>" width="" height="" class="img-qcngang" border="0" alt="Luat doanh nghiep">
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <!-- end of slider -->

    <div class="shell">
        <div class="container">

