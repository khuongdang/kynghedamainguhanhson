<?php
$menu = wp_get_nav_menu_items(2, array());
$footer_content = nl2br(get_option('footer_content'));
$img_logo = get_images_from_gallery(1);

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
                <?php foreach ($img_logo as $obj) {
                $img_url = get_site_url()."/wp-content/gallery/" . $obj->slug . "/" . $obj->filename;
                ?>
                <li><a target="_blank" rel="nofollow" href="<?php echo $obj->description;?>">
                    <img width="120" height="64" title="/<?php echo $obj->image_slug?>" src="<?php echo $img_url;?>"/></a>
                </li>
                <?php }?>
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
                    <span style="color: #808080;"><em><span style="font-size: 11px;">© Copyright <?php echo date(Y);?> Nhà Thành Phát</span></em></span>
                </div>

                <div class="col">
                    <div class="socials">
                        <div class="socials-inner">

                            <ul>
                                <li><a class="facebook-ico"
                                       href="javascript:void(0);"><span>&#160;</span>Facebook</a>
                                </li>
                                <li><a class="twitter-ico" href="javascript:void(0);"><span>&#160;</span>Twitter</a>
                                </li>
                                <li><a class="myspace-ico" href="javascript:void(0);"><span>&#160;</span>Google+</a>
                                </li>
                                <li><a class="rss-feed-ico" href="javascript:void(0);"><span>&#160;</span>Youtube</a>
                                </li>
                            </ul>
                            <div class="cl">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <!--<div class="col">
                    <div class="f-menu-stat">Số lượt truy cập: <b>566353</b> <br/> Số người online: <b>70</b></div>
                </div>-->
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
                    <td style="padding:5px;"><b>Nhà Thành Phát</b><br> <span style="color:red; font-weight: bold;">0908 39 89 92</span><br></td>
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