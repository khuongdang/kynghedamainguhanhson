<?php get_header(); ?>
<?php
$id = get_the_ID();
$content = get_post_from_post_type(null, 'gioi-thieu');

?>
    <div class="content-home-box">
        <div class="content-box-left">
            <div class="left-menu">
                <div class="home-title-news"><span>Giới thiệu</span></div>
                <div class="home-left-content">
                    <ul id="left-nav" class="data-category-menu">
                        <?php foreach ($content as $obj) {
                            $link   = get_permalink($obj->ID);
                            $title  = $obj->post_title;
                            ?>
                        <li class="m_parent"><a id="mleft_366" title="<?php echo $title;?>"
                                                href="<?php echo $link;?>"><?php echo $title;?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="hotline-left"><a title="Hotline" href="#" target="_self"><img src="<?php echo get_template_directory_uri(); ?>/images/hotline.jpg"
                                                                                      width="" height="" border="0"
                                                                                      alt="Hotline"></a></div>


            <div class="left-head"><span>Tin nhiều người đọc</span></div>
            <ul class="left-news">

                <li><a title="Những điểm mới của Luật đầu tư năm 2015"
                       href="/tin-chuyen-nganh/nhung-diem-moi-cua-luat-dau-tu-nam-2015.htm">Những điểm mới của Luật đầu
                        tư năm 2015</a></li>

                <li><a title="Những  điểm mới của Luật doanh nghiệp sửa đổi năm 2014"
                       href="/tin-chuyen-nganh/nhung-diem-moi-cua-luat-doanh-nghiep-sua-doi-nam-2014.htm">Những điểm mới
                        của Luật doanh nghiệp sửa đổi năm 2014</a></li>

                <li><a title="Thủ tục góp vốn vào công ty " href="/luat-doanh-nghiep/thu-tuc-gop-von-vao-cong-ty.htm">Thủ
                        tục góp vốn vào công ty </a></li>

                <li><a title="Có được đặt trụ sở công ty tại khu chung cư  không ?"
                       href="/luat-doanh-nghiep/co-duoc-dat-tru-so-cong-ty-tai-khu-chung-cu-khong.htm">Có được đặt trụ
                        sở công ty tại khu chung cư không ?</a></li>

                <li><a title="Quy định về tạm nhập, tái xuất hàng hóa"
                       href="/luat-doanh-nghiep/quy-dinh-ve-tam-nhap-tai-xuat-hang-hoa.htm">Quy định về tạm nhập, tái
                        xuất hàng hóa</a></li>

                <li><a title="Điều kiện gì để công ty được mua hóa đơn VAT"
                       href="/luat-doanh-nghiep/dieu-kien-gi-de-cong-ty-duoc-mua-hoa-don-vat.htm">Điều kiện gì để công
                        ty được mua hóa đơn VAT</a></li>

            </ul>

            <div class="h-news-bot-image">
                <div class="left-head gt"><span>Hình ảnh hoạt động</span></div>
                <div class="h-image-ga">
                    <ul class="slides">
                        <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                            <img alt="2" title="2" src="http://luattritam.com.vn//uploads/image/woman-shopping-online-for-deals2.jpg">

                        </li>

                        <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                            <img alt="3" title="3" src="http://luattritam.com.vn//uploads/image/anhhoatdong2.jpg">


                        </li>

                        <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                            <img alt="Ảnh thông tin" title="Ảnh thông tin" src="http://luattritam.com.vn//uploads/anhhoatdong1.jpg">


                        </li>

                        <li style="width: 100%; float: left; margin-right: -100%; display: list-item;">
                            <img alt="Ảnh hoạt động" title="Ảnh hoạt động" src="http://luattritam.com.vn//uploads/image/anhhoatdong3.jpg">


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
        <div class="content-box-right">
            <div class="content-news-box">
                <div class="content-news-box-p">

                    <div class="path-list-module"><span class="title-link-home"><a href="/">Trang chủ</a></span> <span
                            class="title-link-item"><a href="/gioi-thieu.htm">Giới thiệu</a></span></div>

                    <div class="c-n-b-title"><h2>Giới thiệu về công ty</h2></div>

                    <div class="content-box-right-text">
                        cac
                    </div>


                    <div class="news-detai-other">
                        <div class="news-detai-other-tile">Các tin khác</div>
                        <ul class="news-detai-other-item">

                            <li><a href="/chinh-sach-khach-hang/chinh-sach-khach-hang-cua-tri-tam.htm">Chính sách Khách
                                    hàng của Trí Tâm (<span class="date-detail-news-f">26/08/2014</span>)</a></li>

                            <li><a href="/can-mua-doanh-nghiep/can-mua-cong-ty.htm">Cần mua Công ty (<span
                                        class="date-detail-news-f">25/08/2014</span>)</a></li>

                            <li><a href="/tuyen-dung-chuyen-vien-phap-ly/tuyen-dung-chuyen-vien-phap-ly.htm">Tuyển dụng
                                    chuyên viên pháp lý (<span class="date-detail-news-f">21/08/2014</span>)</a></li>

                            <li><a href="/tuyen-dung-cong-tac-vien-phap-ly/tuyen-dung-cong-tac-vien-phap-ly.htm"> Tuyển
                                    dụng Cộng tác viên pháp lý (<span class="date-detail-news-f">21/08/2014</span>)</a>
                            </li>

                            <li><a href="/tuyen-dung-luat-su/tuyen-dung-luat-su.htm">Tuyển dụng luật sư (<span
                                        class="date-detail-news-f">21/08/2014</span>)</a></li>

                            <li><a href="/thu-tuc-xin-giay-phep-ban-le-ruou/thu-tuc-xin-giay-phep-ban-le-ruou.htm">Thủ
                                    tục xin Giấy phép bán lẻ rượu (<span
                                        class="date-detail-news-f">27/06/2014</span>)</a></li>

                            <li>
                                <a href="/tu-van-xin-giay-phep-ve-sinh-an-toan-thuc-pham/tu-van-xin-giay-phep-ve-sinh-an-toan-thuc-pham.htm">Tư
                                    vấn xin giấy phép vệ sinh an toàn thực phẩm (<span class="date-detail-news-f">27/06/2014</span>)</a>
                            </li>

                            <li><a href="/dich-vu-lam-so-do-nha-o-chung-cu/dich-vu-lam-so-do-nha-o-chung-cu.htm">Dịch vụ
                                    làm sổ đỏ nhà ở chung cư (<span class="date-detail-news-f">27/06/2014</span>)</a>
                            </li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>