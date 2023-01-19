<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





<main>
         <div class="mainVisual">
                <div class="inner">
                    <h2>어쩌면 삶은
                        <br />인생이라는 종이 위에
                        <br />써 내려가는
                        <br />펜의 기록 같습니다.
                    </h2>
                    <p>그중에서도 지우고 싶지 않은 기록이 있습니다.<br />
                        모나미는 언제나 당신의 행복한 기록과 함께 합니다.</p>
                </div>
            </div>

            <div class="mainNew">
                <h2>NEW ARRIVALS</h2>
                <p>가장 먼저 만나는 설레는 기다림</p>

                <div class="inner">
                    <div class="top">
                        <a href="">
                            <figure>
                                <img src="<?= G5_THEME_URL ?>/img/main01.jpg" alt="">
                                <div class="over">
                                    <h3>BALL POINT PEN</h3>
                                    <p>FX ZETA C3</p>
                                </div>
                            </figure>
                        </a>
                        <a href="">
                            <figure>
                                <img src="<?= G5_THEME_URL ?>/img/main02.jpg" alt="">
                                <div class="over">
                                    <h3>NOTE</h3>
                                    <p>지퀀스</p>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="bottom">
                        <a href="">
                            <figure>
                                <img src="<?= G5_THEME_URL ?>/img/main03.jpg" alt="">
                                <div class="over">
                                    <h3>HIGHLIGHTER</h3>
                                    <p>그랑데 형광펜 604</p>
                                </div>
                            </figure>
                        </a>
                        <a href="">
                            <figure>
                                <img src="<?= G5_THEME_URL ?>/img/main04.jpg" alt="">
                                <div class="over">
                                    <h3>BALL POINT PEN</h3>
                                    <p>제니스</p>
                                </div>
                            </figure>
                        </a>
                        <a href="">
                            <figure>
                                <div class="case">
                                    <img src="<?= G5_THEME_URL ?>/img/main05.jpg" alt="">
                                </div>
                                <div class="over">
                                    <h3>SHARP</h3>
                                    <p>클리키</p>
                                </div>
                            </figure>
                        </a>
                    </div>

                </div>

            </div>

            <div class="mainProduct">
                <div class="inner">
                    <h2>BEST PRODUCT</h2>
                    <p>언제 어디서나 생활 속에 함께하는 모나미</p>
                    <div class="cate">
                        <a href=""><span>펜</span></a>
                        <a href=""><span>마카</span></a>
                        <a href=""><span>형광펜</span></a>
                        <a href=""><span>미술용품</span></a>
                    </div>
                    <div class="main_pro_slide">
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro01.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">유성볼펜</div>
                                <div class="name">FX ZETA C3</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro02.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">유성볼펜</div>
                                <div class="name">제니스7</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro03.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">만년필</div>
                                <div class="name">153 네오 만년필 EF</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro04.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">프리미엄펜</div>
                                <div class="name">60주년 프러스펜</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro05.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">프리미엄펜</div>
                                <div class="name">153 스마트펜</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro06.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">FX 153</div>
                                <div class="name">FX 153</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro07.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">유성볼펜</div>
                                <div class="name">FX ZETA</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro08.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">프리미엄펜</div>
                                <div class="name">153 블랙 & 화이트</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="img_box">
                                <img src="<?= G5_THEME_URL ?>/img/pro09.jpg" alt="">
                            </div>
                            <div class="tit">
                                <div class="ctg">프리미엄펜</div>
                                <div class="name">153 골드</div>
                            </div>
                        </figure>

                    </div>

                    <div class="arrows">
                        <i class="xi-angle-left"></i>
                        <i class="xi-angle-right"></i>
                    </div>
                </div>

            </div>

            <div class="mainBanner">
                <div class="inner">
                    <h3>VIDEO</h3>
                    <a href="https://www.youtube.com/watch?v=KwyhEUETCjM&t=1s">
                        <img src="<?= G5_THEME_URL ?>/img/btn_play_bg1.png" alt="">
                        <p>PLAY</p>
                    </a>




                </div>

            </div>


            <div class="mainCustomer">
                <div class="inner">
                    <div class="cs">
                        <div class="right">
                            <div class="news">
                                <h3>MONAMI NEWS<a href="/bbs/board.php?bo_table=nos"><i class="xi-plus"></i></a></h3>
                                <div class="latest">
                            <?php
                                echo latest('theme/basic', 'nos', 4, 35);
                            ?>	
                        </div>
                            </div>
                        </div>
                        <div class="left">
                            <img src="<?= G5_THEME_URL ?>/img/inquiry_tit_bg.png" alt="">
                            <h3>INQUIRY</h3>
                            <P>언제나 소중한 의견에 귀 기울이겠습니다.<br />
                                궁금한 사항은 문의하세요.</P>
                            <a href="">INQUIRY NOW</a>
                        </div>
                    </div>

                    
                </div>
            </div>
          

            <div class="family">
                <div class="inner">
                    <figure>
                        <a href=""><img src="<?= G5_THEME_URL ?>/img/fam_img1.jpg" alt=""></a>
                    </figure>
                    <figure>
                        <a href=""><img src="<?= G5_THEME_URL ?>/img/fam_img2.jpg" alt=""></a>
                    </figure>
                    <figure>
                        <a href=""><img src="<?= G5_THEME_URL ?>/img/fam_img3.jpg" alt=""></a>
                    </figure>
                    <figure>
                        <a href=""><img src="<?= G5_THEME_URL ?>/img/fam_img4.jpg" alt=""></a>
                    </figure>
                </div>

            </div>












 </main>















<?php
include_once(G5_THEME_PATH.'/tail.php');