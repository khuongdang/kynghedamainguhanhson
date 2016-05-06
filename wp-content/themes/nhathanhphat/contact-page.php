<?php
/*
Template Name: Contact
*/
get_header();
$footer_content = nl2br(get_option('footer_content'));
?>
        <div class="content-home-box">
            <div class="content-news-box2">
                <div class="content-news-box-p2">
                    <div class="path-list-module"><span class="title-link-home"><a href="/">Trang chủ</a></span><span class="title-link-item"><a>Liên hệ</a></span></div>
                    <div class="c-n-b-title"><h2>Liên hệ</h2></div>
                    <div class="company-info-content">
                        <?php echo $footer_content; ?>
                    </div>
                    <div class="c-form">
                        <div class="item">
                            <span id="error-message" style="display:none;"></span>
                        </div>
                        <div class="item">
                            <label>Họ tên (*):</label>
                            <input type="text" id="txtFfullname">
                        </div>
                        <div class="item">
                            <label>Địa chỉ (*):</label>
                            <input type="text" id="txtFaddress">
                        </div>
                        <div class="item">
                            <label>Điện thoại (*):</label>
                            <input type="text" id="txtFphone">
                        </div>
                        <div class="item">
                            <label>Di động :</label>
                            <input type="text" id="Text1">
                        </div>
                        <div class="item">
                            <label>Email (*):</label>
                            <input type="text" id="txtFemail">
                        </div>
                        <div class="item">
                            <label>Nội dung (*):</label>
                            <textarea class="item-area-c" id="txtFcontent" cols="20" rows="2" name="txtcontent"></textarea>
                        </div>
                        <div class="item">
                            <input type="button" class="submit-contact" value="Gửi đi" id="doSendFeedback" name="doSendFeedback">
                        </div>
                    </div>
                    <div class="c-map">
                        <br>
                    </div>
                </div>
            </div></div>
<?php get_footer(); ?>