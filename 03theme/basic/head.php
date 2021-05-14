<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">

    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
<!--
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>


    </div> -->

    <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
          <header>
        <div class="nav clearfix">
            <h1 class="stand"><a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a></h1>
            <h1 class="over"><a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo02.png" alt="<?php echo $config['cf_title']; ?>"></a></h1>

            <ul class="mainmenu clearfix">

                <li class="mHome gnb_1da"><a href="index.html"><img src="images/home.png" alt=""></a></li>
                <li><a href="<?php echo $row['me_link']; ?>">회사소개</a>

                </li>
                <li><a href="<?php echo $row['me_link']; ?>">제품</a>

                </li>
                <li><a href="<?php echo $row['me_link']; ?>">투자정보</a>

                </li>
                <li><a href="<?php echo $row['me_link']; ?>">지속가능경영</a>

                </li>
                <li><a href="<?php echo $row['me_link']; ?>">인재경영</a>

                </li>
                <li><a href="<?php echo $row['me_link']; ?>">홍보센터</a>

                </li>
            </ul>
        </div>
        <h2 class="mlogo"><img src="images/mlogo.png" alt="동국제강"></h2>
        <div class="toggleMenu">

            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>
<!--
            <ul id="gnb_1dul">
                <li class="gnb_1dli gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></li>
                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
                <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue;

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul> -->
            <div id="gnb_all">
                <h2>전체메뉴</h2>
                <ul class="gnb_al_ul">
                    <?php

                    $i = 0;
                    foreach( $menu_datas as $row ){
                    ?>
                    <li class="gnb_al_li">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
                            if($k == 0)
                                echo '<ul>'.PHP_EOL;
                        ?>
                            <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div id="gnb_all_bg"></div>
        </div>
    </nav>
    <script>

    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<? if(defined('_INDEX_')){?>


  <div class="sliderWrap" style="position:relative">
    <ul class="slider">

        <li><img src="img/slide02.png" alt="">

            <video id="myVideo" autoplay muted loop>
                <source src="video/MAIN_01.mp4" type="video/mp4">
                <p>이 브라우저는 비디오 태그를 지원하지 않습니다.</p>
            </video>

            <div class="textWrap">
                <p>동국제강은 지구를 탄생시킨<br>
                    철의 에너지를 미래를 여는<br>
                    순환 에너지로 바꿔갑니다</p>
            </div>

        </li>

        <li><img src="img/slide02.png" alt="">
            <div class="textWrap">
                <p>동국제강은 철의 본질에<br>
                    색과 온도를 더해<br>
                    인간문화 발전에 기여합니다</p>
            </div>
        </li>
        <li><img src="img/slide03.png" alt="">
            <div class="textWrap">
                <p>동국제강은<br>
                    철강제품의 혁신을 통해<br>
                    우리 삶의 중심을 만듭니다</p>
            </div>
        </li>
    </ul>
</div>
<script>

  $(document).ready(function(){
    var mySlider = $('.slider').bxSlider({
    auto:false,
    pager:false,
    controls:false
  });
</script>

<?}?>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">

    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>">
          <?php echo get_head_title($g5['title']); ?>
        </span></h2>
      <?php }?>
