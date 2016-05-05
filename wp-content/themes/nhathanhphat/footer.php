<?php
$menu = wp_get_nav_menu_items(2, array());
$footer_content = nl2br(get_option('footer_content'));
?>

<script type="text/javascript">
    $(function () {
        $('.h-image-ga').flexslider({
            animation: "fade",
            controlsContainer: ".h-image-ga",
            slideshowSpeed: 3000,
            directionNav: true,
            controlNav: false,
            animationDuration: 1000
//                            before: function (slider) {
//                                $('.img-holder').animate({ 'bottom': '-30px' }, 300)
//                            },
//                            after: function (slider) {
//                                $('.img-holder').animate({ 'bottom': '0px' }, 300)
//                            }
        });
    });
</script>

<style>
    .h-news-bot-image {
        width: 300px;
    }

    .h-image-ga {
        width: 300px;
        height: 200px;
    }

    .h-image-ga img {
        width: 300px;
        height: 200px;
    }

    .hoso-image-ga {
        width: 300px;
        height: 110px;
    }

    .hoso-image-ga img {
        width: 300px;
        height: 110px;
    }
</style>

</div>
</div>


<div class="contractor-container">
    <div class="shell">
        <div class="contractor-box">
            <ul id="scroller">

                <li><a rel="nofollow" href="http://viettel.vn"><img width="120" height="64" title="Logo Viettel"
                                                                    src="http://luattritam.com.vn/uploads/image/y-nghia-logo-Viettel.jpg"/></a>
                </li>

                <li><a rel="nofollow" href="http://www.baoviet.com.vn/Trang-chu"><img width="120" height="64"
                                                                                      title="BHXH"
                                                                                      src="http://luattritam.com.vn/uploads/image/logo-BHXH.png"/></a>
                </li>

                <li><a rel="nofollow" href="http://"><img width="120" height="64" title="accor"
                                                          src="http://luattritam.com.vn/uploads/248229_524697207577089_1183500224_n.jpg"/></a>
                </li>

                <li><a rel="nofollow" href="http://"><img width="120" height="64" title="VIB"
                                                          src="http://luattritam.com.vn/uploads/image/logo-ngan-hang-VIB.jpg"/></a>
                </li>

                <li><a rel="nofollow" href="http://"><img width="120" height="64" title="trung nguyen cf"
                                                          src="http://luattritam.com.vn/uploads/image/Logo-Trungnguyen-thuonghieu.jpg"/></a>
                </li>

                <li><a rel="nofollow" href="http://www.vietinbank.vn/web/home/vn/index.html"><img width="120"
                                                                                                  height="64"
                                                                                                  title="Vietinbank"
                                                                                                  src="http://luattritam.com.vn/uploads/image/logo-vietinbank.jpg"/></a>
                </li>
            </ul>
        </div>
        <div class="link-drop">
            <div class="link-title"> Liên kết website</div>
            <div class="link-select-drop"><span><select id="ddlWebLink">
                        <option value="">Lựa chọn</option>
                        <option value="http://vnexpress.net">vnexpress.net</option>
                    </select></span></div>
        </div>
    </div>
</div>


<div class="f-menu-container">
    <div class="shell">
        <div class="footer-bottom">
            <nav class="footer-nav">
                <ul>
<?php
foreach ($menu as $obj) {
    $link = $obj->url;
    ?>
                    <li><a href="<?php echo $link;?>"><?php echo $obj->title;?></a></li>
                    <?php }?>
                </ul>
            </nav>

            <div class="cl">&nbsp;</div>
        </div>
    </div>
</div>
<div class="footer-container">
    <div class="shell">
        <div id="footer">
            <div class="footer-cols">

                <div class="col">
                    <?php echo $footer_content; ?>
                </div>

                <div class="col">
                    <div class="socials">
                        <div class="socials-inner">

                            <ul>
                                <li><a class="facebook-ico"
                                       href="https://www.facebook.com/pages/Lu%E1%BA%ADt-Tr%C3%AD-T%C3%A2m/1461637360785644"><span>&#160;</span>Facebook</a>
                                </li>
                                <li><a class="twitter-ico" href="https://twitter.com/LuatTriTam"><span>&#160;</span>Twitter</a>
                                </li>
                                <li><a class="myspace-ico" href="https://plus.google.com/+LuattritamVn/about"><span>&#160;</span>Google+</a>
                                </li>
                                <li><a class="rss-feed-ico" href="http://luattritam.com.vn"><span>&#160;</span>Youtube</a>
                                </li>
                            </ul>
                            <div class="cl">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="f-menu-stat">Số lượt truy cập: <b>566353</b> <br/> Số người online: <b>70</b></div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
            <!-- end of footer-cols -->
        </div>
    </div>
</div>
</div>


<div style="position:relative">
    <div id="support-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hotrotructuyen.png"
             style="float:left;cursor:pointer;"/>
        <div id="support-block">
            <table class="listsuportright" width="100%">
                <tbody>
                <tr>

                    <td style="padding:5px;"><b>Luật Trí Tâm 01</b><br> <span>0964-988.999</span><br></td>
                </tr>
                <tr>
                    <td style="padding:5px;"><b>Luật Trí Tâm 02</b><br> <span>0983.348.379</span><br></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="go-top" id="go-top">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_top.png"/></a>
</div>
<script type="text/javascript">
    var num = 500; //vị trí mà khi scroll chuột đến sẽ bắt đầu sự kiện
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('#go-top').addClass('go-top-codinh');
        } else {
            $('#go-top').removeClass('go-top-codinh');
        }
    });
</script>
<script type="text/javascript" language="javascript">
    $(function () {
        //$('#slider-home').nivoSlider({ directionNav: false, controlNav: true, effect: 'fade', prevText: '', nextText: '' });
        //SetValueItemFocus_blur("input.b-input-search", "--Choose a hotel--");
    });
    $(function () {
        $("#scroller").simplyScroll({
            customClass: 'your-custom-class',
            frameRate: 27, speed: 1, autoMode: 'loop'
        });
    });

    $(document).ready(function () {
        $("#left-nav li.m_parent").hover(function () {
            $(this).addClass("select");
        }, function () {
            $(this).removeClass("select");
        });

        menu_left_select();
    });
</script>

</body>
</html>