<?php
global $post;
$post_slug = $post->post_name;
if ($post->post_type != 'page') {
    $post_slug = $post->post_type;
}
$post_slug = str_replace("-", "", $post_slug);
if ($post_slug == 'sanphamduan') {
    $taxonomy = 'danh-muc-san-pham';
    $content = $terms = get_terms($taxonomy, array(
        'hide_empty' => 0,
    ));
} else {
    $content = get_post_from_post_type(null, $post_slug);
}

$news = get_post_from_post_type(null, 'tintuc', 'post_date DESC', 6);
switch ($post_slug) {
    case "gioithieu":
        $title_top = 'Giới thiệu';
    break;
    case "tintuc":
        $title_top = 'Tin tức';
    break;
    case "sanphamduan":
        $title_top = 'Sản phẩm - Dự Án';
    break;
    case "cocautochu":
        $title_top = 'Cơ cấu tổ chức';
    break;
    case "muabannhadat":
        $title_top = 'Mua bán nhà đất';
    break;
    case "muabannhadat":
        $title_top = 'Mua bán nhà đất';
        break;
    case "tintuc":
        $title_top = 'Tin tức';
    break;
    case "tuyendung":
        $title_top = 'Tuyển dụng';
    break;
}

?>
<div class="content-box-left">
    <div class="left-menu">
        <div class="home-title-news"><span><?php echo $title_top;?></span></div>
        <div class="home-left-content">
            <ul id="left-nav" class="data-category-menu">
                <?php foreach ($content as $obj) {
                    if (!$obj->term_id) {
                        $link = get_permalink($obj->ID);
                        $title = $obj->post_title;
                    } else {
                        $title = $obj->name;
                        $link = get_term_link($obj->term_id);
                    }

                    ?>
                    <li class="m_parent"><a id="mleft_366" title="<?php echo $title; ?>"
                                            href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="hotline-left"><a title="Hotline" href="#" target="_self"><img
                src="<?php echo get_template_directory_uri(); ?>/images/hotline.jpg"
                width="" height="" border="0"
                alt="Hotline"></a></div>

    <div class="left-head"><span>Tin nhiều người đọc</span></div>
    <ul class="left-news">
        <?php if (!empty($news)) { ?>
            <?php foreach ($news as $obj) {
                $title = $obj->post_title;
            }
            ?>
            <li><a title="<?php echo $title; ?>"
                   href=""><?php echo $title; ?></a></li>
        <?php } ?>
    </ul>

    <div class="h-news-bot-image">
        <div class="left-head gt"><span>Hình ảnh hoạt động</span></div>
        <div class="h-image-ga">
            <ul class="slides">
                <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                    <img alt="2" title="2"
                         src="http://luattritam.com.vn//uploads/image/woman-shopping-online-for-deals2.jpg">

                </li>

                <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                    <img alt="3" title="3" src="http://luattritam.com.vn//uploads/image/anhhoatdong2.jpg">


                </li>

                <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                    <img alt="Ảnh thông tin" title="Ảnh thông tin"
                         src="http://luattritam.com.vn//uploads/anhhoatdong1.jpg">


                </li>

                <li style="width: 100%; float: left; margin-right: -100%; display: list-item;">
                    <img alt="Ảnh hoạt động" title="Ảnh hoạt động"
                         src="http://luattritam.com.vn//uploads/image/anhhoatdong3.jpg">


                </li>

            </ul>
            <ul class="flex-direction-nav">
                <li><a class="prev" href="#">Previous</a></li>
                <li><a class="next" href="#">Next</a></li>
            </ul>
        </div>
    </div>


    <script type="text/javascript">
        $(function () {
            $(".left-ga").colorbox({rel: '.left-ga', opacity: 0.8, slideshow: true, slideshowSpeed: 3500});
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $('.h-image-ga').flexslider({
                animation: "fade",
                controlsContainer: ".h-image-ga",
                slideshowSpeed: 3000,
                directionNav: true,
                controlNav: false,
                animationDuration: 1000
            });
        });
    </script>
    <style>
        .h-news-bot-image {
            width: 280px;
        }

        .h-image-ga {
            width: 280px;
            height: 180px;
        }

        .h-image-ga img {
            width: 280px;
            height: 180px;
        }
    </style>
</div>
