<?php
/*
Template Name: Info
*/
get_header();
global $post;
$title = $post->post_title;
$content = get_post_from_post_type(null, 'gioithieu');
?>
    <div class="content-home-box">
        <?php get_template_part('left-side-bar');
        ?>
        <div class="content-box-right">
            <div class="content-news-box">
                <div class="content-news-box-p">
                    <div class="path-list-module"><span class="title-link-home"><a href="/">Trang chủ</a>
                                                </span> <span class="title-link-item"><?php echo $title; ?></span></div>
                    <div class="c-n-b-title"><h2><?php echo $title; ?></h2></div>
                    <table class="news">
                        <?php foreach ($content as $obj) {
                            $title = $obj->post_title;
                            $link = get_permalink($obj->ID);
                            $content = $obj->post_content;
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($obj->ID), 'single-post-thumbnail');
                            $image = $image[0];
                            ?>
                            <tr><?php if ($image) { ?>
                                    <td>
                                        <div class="news-l-image">
                                            <div class="news-list-img-item">
                                                <a href="<?php echo $link; ?>"><img title="<?php echo $title; ?>"
                                                                                    src="<?php echo $image; ?>"></a>
                                            </div>
                                        </div>
                                    </td> <?php } ?>
                                <td <?php if (!$image) { ?> colspan="2" <?php } ?>>
                                    <div class="news-title"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></div>
                                    <div class="news-l-content">
                                        <div class="news-l-c-title"><a class="title-news-list" href=""></a>
                                        </div>
                                        <div class="news-l-c-NewsDepict">
                                            &nbsp;<?php echo get_post_content($content); ?></div>
                                        <div class="news-l-more"><a class="news-l-more-arrow"
                                                                    href="<?php echo $link; ?>">Chi
                                                tiết</a></div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>