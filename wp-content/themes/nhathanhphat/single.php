<?php get_header();
$id = get_the_ID();
$title = get_the_title();
$content_post = get_post($id);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$current_post_type = get_post_type($id);
$other_content = get_post_from_post_type($id, $current_post_type, null, 6);

switch ($current_post_type) {
    case "gioithieu":
        $page_title = 'Giới thiệu';
        $link = '/gioi-thieu';
    break;
    case "tuyendung":
        $page_title = 'Tuyển dụng';
        $link = '/tuyen-dung';
        break;
    case "tintuc":
        $page_title = 'Tin tức';
        $link = '/tin-tuc';
        break;
    case "cocautochuc":
        $page_title = 'Cơ cấu tổ chức';
        $link = '/co-cau-to-chuc';
        break;
    case "muabannhadat":
        $page_title = 'Mua bán nhà đất';
        $link = '/mua-ban-nha-dat';
        break;
    case "san-pham":
        $page_title = 'Sản phẩm';
        $link = '/san-pham-du-an';
        break;
}
?>

    <div class="content-home-box">
        <?php get_template_part('left-side-bar');
        ?>
        <div class="content-box-right">
            <div class="content-news-box">
                <div class="content-news-box-p">
                    <div class="path-list-module"><span class="title-link-home"><a href="<?php echo get_site_url();?>">Trang chủ</a></span>
                        <span class="title-link-item"><a href="<?php echo $link;?>"><?php echo $page_title; ?></a></span>
                        <span class="title-link-item"><?php echo $title; ?></span>
                    </div>
                    <div class="c-n-b-title"><h2><?php echo $title;?></h2></div>

                    <div class="content-box-right-text">
                        <?php echo $content;?>
                    </div>
                    <?php if($other_content) {?>
                    <div class="news-detai-other">
                        <div class="news-detai-other-tile">Các tin khác</div>
                        <ul class="news-detai-other-item">
                            <?php foreach ($other_content as $obj) {
                                $link   = get_permalink($obj->ID);
                                $title  = $obj->post_title;
                                $date   = date('d/m/Y', strtotime($obj->post_date));
                                ?>
                            <li><a href="<?php echo $link;?>"><?php echo $title; ?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>