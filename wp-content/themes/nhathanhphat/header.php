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
                            src="http://luattritam.com.vn/uploads/logo/logo1.png" width="267" height="97" border="0"
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
                    <!--                    <li><a class="menulink m-select" id="p_292" href="/gioi-thieu.htm">Giới thiệu</a>
                                            <ul>
                                                <li><a class="sub" id="s_gioi-thieu-ve-cong-ty" href="/gioi-thieu-ve-cong-ty.htm"><span>Giới thiệu về công ty</span></a>
                                                </li>
                                                <li><a class="sub" id="s_van-hoa-doanh-nghiep" href="/van-hoa-doanh-nghiep.htm"><span>Văn hóa Doanh nghiệp</span></a>
                                                </li>
                                                <li><a class="sub" id="s_chinh-sach-khach-hang" href="/chinh-sach-khach-hang.htm"><span>Chính sách Khách hàng</span></a>
                                                </li>
                                                <li><a class="sub" id="s_tuyen-dung" href="/tuyen-dung.htm"><span>Tuyển dụng</span></a></li>
                                                <li><a class="sub" id="s_tin-chuyen-nganh" href="/tin-chuyen-nganh.htm"><span>Tin chuyên ngành</span></a>
                                                </li>
                                                <li><a class="sub" id="s_tin-noi-bo" href="/tin-noi-bo.htm"><span>Tin nội bộ</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menulink" id="p_179" href="/dich-vu-luat-su.htm">Dịch vụ luật sư</a>
                                            <ul>
                                                <li><a class="sub" id="s_tu-van-thanh-lap-cong-ty"
                                                       href="/tu-van-thanh-lap-cong-ty.htm"><span>Tư vấn thành lập Công ty</span></a></li>
                                                <li><a class="sub" id="s_tu-van-doanh-nghiep" href="/tu-van-doanh-nghiep.htm"><span>Tư vấn doanh nghiệp</span></a>
                                                </li>
                                                <li><a class="sub" id="s_so-huu-tri-tue"
                                                       href="/so-huu-tri-tue.htm"><span>Sở hữu trí tuệ</span></a></li>
                                                <li><a class="sub" id="s_tu-van-dat-dai"
                                                       href="/tu-van-dat-dai.htm"><span>Tư vấn đất đai</span></a></li>
                                                <li><a class="sub" id="s_tu-van-thua-ke-di-chuc" href="/tu-van-thua-ke-di-chuc.htm"><span>Tư vấn Thừa kế - Di chúc</span></a>
                                                </li>
                                                <li><a class="sub" id="s_tu-van-hon-nhan-gia-dinh"
                                                       href="/tu-van-hon-nhan-gia-dinh.htm"><span>Tư vấn Hôn nhân Gia đình</span></a></li>
                                                <li><a class="sub" id="s_tu-van-soan-thao-hop-dong"
                                                       href="/tu-van-soan-thao-hop-dong.htm"><span>Tư vấn soạn thảo hợp đồng</span></a></li>
                                                <li><a class="sub" id="s_tu-van-luat-lao-dong-va-viec-lam"
                                                       href="/tu-van-luat-lao-dong-va-viec-lam.htm"><span>Tư vấn Luật lao động và việc làm</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-ve-tranh-tung" href="/dich-vu-ve-tranh-tung.htm"><span>Dịch vụ về Tranh Tụng</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="menulink" id="p_319" href="/dich-vu-cap-phep.htm">Dịch vụ cấp phép</a>
                                            <ul>
                                                <li><a class="sub" id="s_cap-phep-dau-tu"
                                                       href="/cap-phep-dau-tu.htm"><span>Cấp phép đầu tư</span></a></li>
                                                <li><a class="sub" id="s_thu-tuc-hanh-chinh-cho-doanh-nghiep"
                                                       href="/thu-tuc-hanh-chinh-cho-doanh-nghiep.htm"><span>Thủ tục hành chính cho Doanh nghiệp</span></a>
                                                </li>
                                                <li><a class="sub" id="s_cong-bo-my-pham"
                                                       href="/cong-bo-my-pham.htm"><span>Công bố mỹ phẩm</span></a></li>
                                                <li><a class="sub" id="s_cong-bo-thuc-pham" href="/cong-bo-thuc-pham.htm"><span>Công bố thực phẩm</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-tu-van-cap-so-do"
                                                       href="/dich-vu-tu-van-cap-so-do.htm"><span>Dịch vụ tư vấn cấp sổ đỏ</span></a></li>
                                                <li><a class="sub" id="s_giay-phep-ve-web" href="/giay-phep-ve-web.htm"><span>Giấy phép về web</span></a>
                                                </li>
                                                <li><a class="sub" id="s_giay-phep-atvstp" href="/giay-phep-atvstp.htm"><span>Giấy phép ATVSTP</span></a>
                                                </li>
                                                <li><a class="sub" id="s_lam-thu-tuc-xin-ly-lich-tu-phap"
                                                       href="/lam-thu-tuc-xin-ly-lich-tu-phap.htm"><span>Làm thủ tục xin lý lịch tư pháp</span></a>
                                                </li>
                                                <li><a class="sub" id="s_hop-phap-hoa-lanh-su-chung-nhan-lanh-su"
                                                       href="/hop-phap-hoa-lanh-su-chung-nhan-lanh-su.htm"><span>Hợp pháp hóa lãnh sự, chứng nhận lãnh sự</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="menulink" id="p_317" href="/dich-vu-cho-nguoi-nuoc-ngoai.htm">Dịch vụ cho người nước
                                                ngoài</a>
                                            <ul>
                                                <li><a class="sub" id="s_cap-giay-phep-lao-dong-cho-nguoi-nuoc-ngoai"
                                                       href="/cap-giay-phep-lao-dong-cho-nguoi-nuoc-ngoai.htm"><span>Cấp giấy phép lao động cho người nước ngoài</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-ho-tro-lam-the-tam-tru"
                                                       href="/dich-vu-ho-tro-lam-the-tam-tru.htm"><span>Dịch vụ hỗ trợ làm thẻ tạm trú</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-danh-cho-viet-kieu" href="/dich-vu-danh-cho-viet-kieu.htm"><span>Dịch vụ dành cho Việt Kiều</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-dang-ky-ket-hon-voi-nguoi-viet-nam"
                                                       href="/dich-vu-dang-ky-ket-hon-voi-nguoi-viet-nam.htm"><span>Dịch vụ Đăng ký kết hôn với người Việt Nam</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-mien-thi-thuc" href="/dich-vu-mien-thi-thuc.htm"><span>Dịch vụ miễn thị thực</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dich-vu-lam-visa-viet-nam"
                                                       href="/dich-vu-lam-visa-viet-nam.htm"><span>Dịch vụ làm visa Việt Nam</span></a></li>
                                                <li><a class="sub" id="s_tu-van-lam-the-apec" href="/tu-van-lam-the-apec.htm"><span>Tư vấn làm thẻ APEC</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="menulink" id="p_8" href="/hoi-dap-phap-luat.htm">Hỏi đáp Pháp Luật </a>
                                            <ul>
                                                <li><a class="sub" id="s_luat-doanh-nghiep" href="/luat-doanh-nghiep.htm"><span>Luật doanh nghiệp</span></a>
                                                </li>
                                                <li><a class="sub" id="s_luat-so-huu-tri-tue" href="/luat-so-huu-tri-tue.htm"><span>Luật Sở Hữu Trí Tuệ</span></a>
                                                </li>
                                                <li><a class="sub" id="s_luat-hinh-su"
                                                       href="/luat-hinh-su.htm"><span>Luật Hình sự</span></a></li>
                                                <li><a class="sub" id="s_luat-dan-su" href="/luat-dan-su.htm"><span>Luật Dân sự</span></a>
                                                </li>
                                                <li><a class="sub" id="s_luat-lao-dong" href="/luat-lao-dong.htm"><span>Luật Lao Động</span></a>
                                                </li>
                                                <li><a class="sub" id="s_luat-hon-nhan-va-gia-dinh"
                                                       href="/luat-hon-nhan-va-gia-dinh.htm"><span>Luật Hôn Nhân và Gia Đình</span></a></li>
                                                <li><a class="sub" id="s_luat-giao-thong"
                                                       href="/luat-giao-thong.htm"><span>Luật Giao Thông</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menulink" id="p_332" href="/van-ban-phap-luat.htm">Văn bản pháp luật</a>
                                            <ul>
                                                <li><a class="sub" id="s_doanh-nghiep"
                                                       href="/doanh-nghiep.htm"><span>Doanh nghiệp</span></a></li>
                                                <li><a class="sub" id="s_thuong-mai" href="/thuong-mai.htm"><span>Thương mại</span></a></li>
                                                <li><a class="sub" id="s_van-ban-so-huu-tri-tue" href="/van-ban-so-huu-tri-tue.htm"><span>Sở hữu trí tuệ</span></a>
                                                </li>
                                                <li><a class="sub" id="s_dan-su" href="/dan-su.htm"><span>Dân sự</span></a></li>
                                                <li><a class="sub" id="s_hon-nhan-gia-dinh" href="/hon-nhan-gia-dinh.htm"><span>Hôn nhân gia đình</span></a>
                                                </li>
                                                <li><a class="sub" id="s_lao-dong" href="/lao-dong.htm"><span>Lao động</span></a></li>
                                                <li><a class="sub" id="s_hinh-su" href="/hinh-su.htm"><span>Hình sự</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menulink" id="p_6" href="/Lien-he.htm">Liên hệ</a>
                                            <ul></ul>
                                        </li>-->
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

            <div class="slider flexslider">
                <ul class="slides">

                    <li>
                        <div class="img-holder"><img src="http://luattritam.com.vn/uploads/4moi.jpg" width="" height=""
                                                     class="img-qcngang" border="0" alt="Luat doanh nghiep"></div>
                    </li>

                    <li>
                        <div class="img-holder"><a title="dang ky nhan hieu hang hoa" href=# target="_self"><img
                                    class="img-qcngang" src="http://luattritam.com.vn/uploads/2fdd.jpg" width="1348"
                                    height="376" border="0" alt="dang ky nhan hieu hang hoa"></a></div>
                    </li>

                    <li>
                        <div class="img-holder"><a title="bat dong san" href=# target="_self"><img class="img-qcngang"
                                                                                                   src="http://luattritam.com.vn/uploads/1.jpg"
                                                                                                   width="1348"
                                                                                                   height="376"
                                                                                                   border="0"
                                                                                                   alt="bat dong san"></a>
                        </div>
                    </li>

                    <li>
                        <div class="img-holder"><img src="http://luattritam.com.vn/uploads/7.jpg" width="" height=""
                                                     class="img-qcngang" border="0" alt="tranh tung tai toa"></div>
                    </li>

                    <li>
                        <div class="img-holder"><img src="http://luattritam.com.vn/uploads/image/slide2.jpg"
                                                     width="1348" height="376" class="img-qcngang" border="0"
                                                     alt="hon nhan gia dinh"></div>
                    </li>

                    <li>
                        <div class="img-holder"><img src="http://luattritam.com.vn/uploads/image/dichvucapphep.jpg"
                                                     width="" height="" class="img-qcngang" border="0"
                                                     alt="dich vu cap phep"></div>
                    </li>

                    <li>
                        <div class="img-holder"><img src="http://luattritam.com.vn/uploads/image/6.jpg" width=""
                                                     height="" class="img-qcngang" border="0" alt="giay phep lao dong">
                        </div>
                    </li>

                    <li>
                        <div class="img-holder"><img src="http://luattritam.com.vn/uploads/image/3.jpg" width=""
                                                     height="" border="0" alt="cap so do"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- end of slider -->

    <div class="shell">
        <div class="container">

