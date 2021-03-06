<?php
/*
Template Name: Product
*/
get_header();
$categories = get_product_categories_parent('danh-muc-san-pham');
$title = 'Sản phẩm - dự án'
?>
    <div class="content-home-box">
        <?php get_template_part('left-side-bar');
        ?>
        <div class="content-box-right">
            <div class="content-news-box" style="min-height: 550px;">
                <div class="content-news-box-p">
                    <div class="path-list-module"><span class="title-link-home"><a href="/">Trang chủ</a>
                                                </span> <span class="title-link-item"><?php echo $title; ?></span></div>
                    <div class="duan_auto">
                        <h2 class="title">Dự án tiêu biểu</h2>
                        <?php foreach ($categories as $obj) {
                            $cat_img_url = z_taxonomy_image_url($obj->term_id);
                            $title = $obj->name;
                            $link = get_term_link($obj->term_id);
                            ?>
                            <div class="story_duan">
                                <div class="story_thumb">
                                    <a href="<?php echo $link;?>" title="<?php echo $title;?>"><img
                                            src="<?php echo $cat_img_url;?>" alt="<?php echo $title;?>"></a>
                                </div>
                                <div class="bg_title"></div>
                                <div class="story_title">
                                    <a href="<?php echo $link;?>" title="<?php echo $title;?>"><?php echo $title;?></a>
                                </div>
                                <div class="list">
                                    <img src="<?php echo get_template_directory_uri();?>/images/img_cham.png" alt="">
                                </div>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>