<?php get_header();
$obj = get_queried_object();
$cat_id = $obj->term_id;

?>
    <div class="content-home-box">
        <?php get_template_part( 'left-side-bar' ); ?>
        <div class="content-box-right">
            <div class="content-news-box">

            </div>
        </div>

    </div>
<?php get_footer(); ?>