
<?
        if($board['bo_table'] == 'pds') {
            $cate_num = 3;
            $page_num = 1;
            $cate_title = 'NEWS & VIDEO';
            $cate_description = '모나미는 늘 밝고 새로운 미래를 그려나갑니다.';
            $page_title = '보도자료';
        } else if($board['bo_table'] == 'nbbs') {
            $cate_num = 4;
            $page_num = 1;
            $cate_title = '고객지원';
            $cate_description = '모나미는 언제나 소중한 의견에 귀 기울이겠습니다.';
            $page_title = '자주하는질문';
        } else if($board['bo_table'] == 'nbbs') {
            $cate_num = 4;
            $page_num = 2;
            $cate_title = '고객지원';
            $cate_description = '모나미는 언제나 소중한 의견에 귀 기울이겠습니다.';
            $page_title = '문의하기';
        } else if($board['bo_table'] == 'nos') {
            $cate_num = 4;
            $page_num = 3;
            $cate_title = '고객지원';
            $cate_description = '모나미는 언제나 소중한 의견에 귀 기울이겠습니다.';
            $page_title = '이벤트';
        } 
?>



        <div id="sub">
            <div class="sub_banner bg0<?= $cate_num ?>" style="background-image:url(<?= G5_THEME_URL ?>/img/bg0<?= $cate_num ?>.jpg)">
                <div class="inner">
                    <strong><?= $cate_title ?></strong>
                    <span><?= $cate_description ?></span>
                </div>
            </div>

            <div class="sub_page">
                <div class="inner">
                    <ul>
                        <li>모나미</li>
                        <li><?= $cate_title ?></li>
                        <li><?= $page_title ?></li>
                    </ul>
                </div>
            </div>

            <div class="sub_container">
                <div class="inner">
                    <article class="article">
                        <h3><?= $page_title ?> <span> /<?= $cate_title ?></span></h3>
                        <div class="content">



