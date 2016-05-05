<?php get_header();
$muabannha = get_post_from_post_type(null, 'muabannhadat');
$taxonomy = 'danh-muc-san-pham';
$terms = get_terms($taxonomy, array(
    'hide_empty' => 0,
) );
shuffle ($terms);
$tintuc = get_post_from_post_type(null, 'tintuc', 'ID DESC');
$tin_dau = $tintuc[0];
$title_tin_dau = $tin_dau->post_title;
$link_tin_dau = get_permalink($tin_dau->ID);
$img_tin_dau = wp_get_attachment_image_src(get_post_thumbnail_id($tin_dau->ID), 'single-post-thumbnail');
$img_tin_dau = $img_tin_dau[0];
$tintucother =  get_post_from_post_type($tin_dau->ID, 'tintuc');
?>
            <!-- main -->
            <div class="main">
                <a href="#" class="m-btn-grey grey-btn">request a demo</a>
                <section class="cols">
                    <div class="col">
                        <div class="ca-home-head"><a href="/mua-ban-nha-dat/" title="Mua bán nhà đất" class=""><img width="70" height="70"
                                    src="<?php echo get_template_directory_uri();?>/images/house.png"
                                    alt="Mua bán nhà đất" title="Mua bán nhà đất"/></a>
                            <h2><a href="/mua-ban-nha-dat/" title="Mua bán nhà đất" class="head-title">Mua bán nhà đất</a></h2></div>
                        <div class="col-cnt h-list-ca">
                            <ul>
                                <?php foreach ($muabannha as $obj) {
                                    $title  = $obj->post_title;
                                    $link   = get_permalink($obj->ID);
                                    ?>
                                <li><a title="<?php echo $title;?>" href="<?php echo $link;?>"> <?php echo $title;?> </a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <?php foreach ($terms as $obj) {
                        $title = $obj->name;
                        $link = get_term_link($obj->term_id);
                        $cat_img_url = z_taxonomy_image_url($obj->term_id);
                        ?>
                    <div class="col">
                        <div class="ca-home-head"><a href="" title="<?php echo $title;?>" class=""><img width="80" height="80"
                                    src="<?php echo $cat_img_url;?>"
                                    alt="<?php echo $title;?>" title="<?php echo $title;?>"/></a>
                            <h2><a href="<?php echo $link;?>" title="<?php echo $title;?>" class="head-title"><?php echo $title;?></a></h2></div>
                        <div class="col-cnt h-list-ca">
                            <ul>
                                <?php
                                $sub_content = get_post_from_taxonomy('san-pham', 'danh-muc-san-pham', $obj->term_id);
                                foreach ($sub_content as $obj) {
                                    $sub_title = $obj->post_title;
                                    $sub_link = get_permalink($obj->ID);
                                    ?>
                                <li><a title="<?php echo $sub_title;?>" href="<?php echo $sub_link;?>"> <?php echo $sub_title;?> </a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <?php }?>
                </section>
                <section class="post">
                    <div class="h-news-bot-box">
                        <div class="h-head-news"><h2>Tin tức</h2></div>
                        <div class="video-holder">
                            <a href=""><img
                                    src="<?php echo $img_tin_dau;?>"
                                    alt="<?php echo $title_tin_dau;?>"
                                    title="<?php echo $title_tin_dau;?>"/></a>
                        </div>
                        <div class="post-cnt">

                            <h2 class="h-news-view"><a
                                    href="<?php echo $link_tin_dau;?>"
                                    title="<?php echo $title_tin_dau;?>" class="head-title"><?php echo $title_tin_dau;?></a></h2>
                            <p class="lineh17">&#160;</p>
                        </div>
                        <ul>
                            <?php foreach($tintucother as $obj){
                                $link_tin = get_permalink($obj->ID);
                                $title_tin = $obj->post_title;
                                ?>
                            <li><a href="<?php echo $link_tin;?>"
                                   title="<?php echo $title_tin;?>"><?php echo $title_tin;?></a></li>
                            <?php }?>
                        </ul>
                    </div>


                    <div class="h-news-bot-box">
                        <div class="h-head-news"><h2>Tư vấn pháp luật</h2></div>
                        <ul>

                            <li><a href="/luat-doanh-nghiep/co-duoc-dat-tru-so-cong-ty-tai-khu-chung-cu-khong.htm"
                                   title="Có được đặt trụ sở công ty tại khu chung cư  không ?">Có được đặt trụ sở công
                                    ty tại khu chung cư không ?</a></li>

                            <li><a href="/luat-doanh-nghiep/quy-dinh-ve-tam-nhap-tai-xuat-hang-hoa.htm"
                                   title="Quy định về tạm nhập, tái xuất hàng hóa">Quy định về tạm nhập, tái xuất hàng
                                    hóa</a></li>

                            <li><a href="/luat-doanh-nghiep/dieu-kien-gi-de-cong-ty-duoc-mua-hoa-don-vat.htm"
                                   title="Điều kiện gì để công ty được mua hóa đơn VAT">Điều kiện gì để công ty được mua
                                    hóa đơn VAT</a></li>

                            <li><a href="/luat-doanh-nghiep/dieu-kien-de-dat-tru-so-cong-ty.htm"
                                   title="Điều kiện để đặt Trụ sở công ty">Điều kiện để đặt Trụ sở công ty</a></li>

                            <li><a href="/luat-doanh-nghiep/thu-tuc-tam-ngung-hoat-dong-cong-ty.htm"
                                   title="Thủ tục tạm ngừng hoạt động công ty">Thủ tục tạm ngừng hoạt động công ty</a>
                            </li>

                            <li><a href="/hoi-dap-phap-luat/quy-dinh-viet-kieu-mua-nha-tai-viet-nam.htm"
                                   title="Quy định Việt kiều mua nhà tại Việt Nam">Quy định Việt kiều mua nhà tại Việt
                                    Nam</a></li>

                            <li>
                                <a href="/hoi-dap-phap-luat/nguoi-viet-nam-va-nuoc-ngoai-duoc-mang-bao-nhieu-tien-mat-bang-dong-viet-nam-hoac-ngoai-te-khi-xuat-nhap-canh.htm"
                                   title="Người Việt Nam và nước ngoài được mang bao nhiêu tiền mặt bằng đồng Việt Nam hoặc ngoại tệ khi xuất nhập cảnh?">Người
                                    Việt Nam và nước ngoài được mang bao nhiêu tiền mặt bằng đồng Việt Nam hoặc ngoại tệ
                                    khi xuất nhập cảnh?</a></li>

                            <li><a href="/hoi-dap-phap-luat/linh-vuc-tranh-tung.htm" title="Lĩnh vực tranh tụng">Lĩnh
                                    vực tranh tụng</a></li>

                        </ul>
                    </div>

                    <div class="h-news-bot-image">
                        <div class="h-head-image"><h2>Hình ảnh hoạt động</h2></div>
                        <div class="h-image-ga">
                            <ul class="slides">

                                <li>
                                    <img alt="2" title="2"
                                         src="http://luattritam.com.vn/uploads/image/woman-shopping-online-for-deals2.jpg"/>

                                    <div class="flex-caption">2</div>
                                </li>

                                <li>
                                    <img alt="3" title="3"
                                         src="http://luattritam.com.vn/uploads/image/anhhoatdong2.jpg"/>

                                    <div class="flex-caption">3</div>
                                </li>

                                <li>
                                    <img alt="Ảnh thông tin" title="Ảnh thông tin"
                                         src="http://luattritam.com.vn/uploads/anhhoatdong1.jpg"/>

                                    <div class="flex-caption">Ảnh thông tin</div>
                                </li>

                                <li>
                                    <img alt="Ảnh hoạt động" title="Ảnh hoạt động"
                                         src="http://luattritam.com.vn/uploads/image/anhhoatdong3.jpg"/>

                                    <div class="flex-caption">Ảnh hoạt động</div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="h-news-bot-image">
                        <div class="h-head-image"><h2>Hồ sơ năng lực</h2></div>
                        <div class="hoso-image-ga">

                            <a href="#"><img alt="Hồ sơ năng lực"
                                                                                                  title="Hồ sơ năng lực"
                                                                                                  src="<?php echo get_template_directory_uri(); ?>/images/hosonangluc.jpg"/></a>

                        </div>
                    </div>
                    <div class="cl">&nbsp;</div>
                </section>


            </div>
            <!-- end of main -->

<?php get_footer(); ?>