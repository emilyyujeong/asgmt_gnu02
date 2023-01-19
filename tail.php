<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.tail.php'; // 서브페이지 푸터
}
?>


<footer class="footer">
            <div class="inner">
                <div class="top">
                    <img src="<?= G5_THEME_URL ?>/img/foot_logo.jpg" alt="">
                    <ul>
                        <li>회사소개</li>
                        <li>개인정보처리방침</li>
                        <li>이메일무단수집거부</li>
                    </ul>

                </div>
                <div class="bottom">
                    <ul class="right">
                        <h3>INFO</h3>
                        <li>ADDRESS : 경기도 용인시 수지구 손곡로 17</li>
                        <li>TEL : 031-216-0153</li>
                        <li> FAX : 031-270-5154</li>
                        <div class="copy">
                            COPYRIGHT &copy; 2017 MONAMI.CO.,LTD. ALL RIGHTS RESERVED.
                        </div>
                    </ul>


                    <div class="left">
                        <form action="">
                            <select id="f_link">
                                <option value="">패밀리 사이트</option>
                                <option value="">모나미몰</option>
                                <option value="">모나르떼</option>
                                <option value="">모나미 컨셉스토어</option>
                            </select>
                        </form>
                    </div>
                </div>



            </div>
        </footer>

    <div class="toTop">
        <i class="xi-angle-up">
        </i>
    </div>

    <button class="mopen">
        <i class="xi-bars"></i>
    </button>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");