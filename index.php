<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>藏域旅行</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="tm-main-content" id="top">
    <div class="tm-top-bar-bg"></div>
    <div class="tm-top-bar" id="tm-top-bar">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg narbar-light">
                    <a class="navbar-brand mr-auto" href="#">
                        <img src="img/logo.png" alt="Site logo">
                        藏域旅行
                    </a>
                    <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse"
                            data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#top">主页 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-hot">热门景点</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tm-section-3">推荐</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tm-section-4">联系我们</a>
                            </li>
                            <li class="nav-item" id="li_login">
                                <a class="nav-link" href="#" onclick="login()" style="display: inline-block; padding-right: 0px">登录 </a>
                                /
                                <a class="nav-link" href="#" onclick="register()" style="display: inline-block; padding-left: 0px"> 注册</a>
                            </li>

                            <li class="nav-item" id="li_name" style="display: none">
                                <a class="nav-link" id="user_href" href="#" onclick="" style="display: inline-block; padding-right: 0px;"><i class="fa fa-user "></i></a>
                                /
                                <a class="nav-link" href="#" onclick="logout()" style="display: inline-block; padding-left: 0px"> 退出登录</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="tm-page-wrap mx-auto">
        <section class="tm-banner">
            <div class="tm-container-outer tm-banner-bg">
                <div class="container">

                    <div class="row tm-banner-row tm-banner-row-header">
                        <div class="col-xs-12">
                            <div class="tm-banner-header">
                                <h1 class="text-uppercase tm-banner-title">让我们开始</h1>
                                <img src="img/dots-3.png" alt="Dots">
                                <p class="tm-banner-subtitle">带您走进美丽的西藏</p>
                                <a href="javascript:void(0)" class="tm-down-arrow-link"><i
                                            class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row tm-banner-row" id="tm-section-search">

                    </div>
                    <div class="tm-banner-overlay"></div>
                </div>
            </div>
        </section>

        <section class="p-5 tm-container-outer tm-bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                        <h2 class="text-uppercase mb-4"><strong>西藏</strong> 印象</h2>
                        <p class="mb-4">西藏北临新疆维吾尔自治区，东北连接青海省，东连四川省，东南与云南省相连；南边和西部与缅甸、印度、 不丹、锡金和克什米尔等国家和地区接壤。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。青藏高原是世界上隆起最晚、面积最大、海拔最高的高原，因而被称为“世界屋脊”，
                            西藏高原位于青藏高原的主题位置。有分属寒带、温带、亚热带、热带的种类繁多的奇花异草和珍稀野生动物。</p>
                        <a href="#section-hot" class="text-uppercase btn-primary tm-btn">继续探索</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="tm-container-outer" id="section-hot">
            <?php
            include_once 'pages/index.php';
            echo load_hot();
            ?>
        </div>

        <div style="padding-top: 40px"></div>



        <div class="tm-container-outer" id="tm-section-3" style="padding-top: 20px;">
            <hr align=center width=90%  color=#987cb9 />

            <div style="padding-bottom: 30px;">
                <div style="height: 15px; text-align:center;">
                    <i class="fa fa-quote-left" style="margin-top: 0px"></i>
                    <strong style="font-size: large; margin-bottom:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    <i class="fa fa-quote-right" style="margin-bottom: 10px"></i>

                </div>
                <div style="padding-top: 0px; text-align:center;">
                    <strong style="font-size: large; font-weight: bold">推荐</strong>
                </div>
            </div>

            <ul class="nav nav-pills tm-tabs-links">
                <li class="tm-tab-link-li">
                    <a href="#1a" data-toggle="tab" class="tm-tab-link">
<!--                        <img src="img/img_recommend/recommend1_cover.jpg" alt="Image" class="img-fluid">-->
                        日喀则
                    </a>
                </li>
                <li class="tm-tab-link-li">
                    <a href="#2a" data-toggle="tab" class="tm-tab-link">
<!--                        <img src="img/south-america.png" alt="Image" class="img-fluid">-->
                        雅鲁藏布大峡谷
                    </a>
                </li>
                <li class="tm-tab-link-li">
                    <a href="#3a" data-toggle="tab" class="tm-tab-link">
<!--                        <img src="img/europe.png" alt="Image" class="img-fluid">-->
                        珠穆朗玛峰
                    </a>
                </li>
                <li class="tm-tab-link-li">
                    <a href="#4a" data-toggle="tab" class="tm-tab-link active"><!-- Current Active Tab -->
<!--                        <img src="img/asia.png" alt="Image" class="img-fluid">-->
                        羊卓雍措
                    </a>
                </li>
                <li class="tm-tab-link-li">
                    <a href="#5a" data-toggle="tab" class="tm-tab-link">
<!--                        <img src="img/africa.png" alt="Image" class="img-fluid">-->
                        林芝
                    </a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <!-- Tab 1 -->
                <div class="tab-pane fade" id="1a">
                    <div class="tm-recommended-place-wrap">

                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend1_1.jpg"  style="width: 100%;  height:100%" alt="日喀则" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">日喀则</h3>
                                <p class="tm-text-highlight">简介</p>
                                <p class="tm-text-gray">日喀则地处西藏西南部，位于雅鲁藏布江和年楚河的交汇处，是目前西藏的第二大城市，美丽旖旎的自然风光，独具特色的后藏生活，这里被誉为“最如意美好的庄园”。从日喀则继续南行，就可到达世界第一高峰珠穆朗玛峰，以北则直达那曲，往东至拉萨、山南，西进则可直抵阿里。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
<!--                                <p class="tm-recommended-price-link">查看详情</p>-->
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend1_2.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">藏传佛教寺庙巡礼——日喀则地区</h3>
                                <p class="tm-text-highlight">攻略</p>
                                <p class="tm-text-gray">你来日喀则，你要看看巍峨的山川，深谷的密林，蔚蓝的湖水，千年的古寺。日喀则像是一个沉稳坚毅，充满智慧的守护者，在阅尽风霜后风轻云淡地承载着人们心中的信仰。</p>
                            </div>
                            <div id="preload-hover-img"></div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
<!--                                <p class="tm-recommended-price-link">Continue Reading</p>-->
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">查看更多</a>
                </div> <!-- tab-pane -->

                <!-- Tab 2 -->
                <div class="tab-pane fade" id="2a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
<!--                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">-->
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend2_1.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">雅鲁藏布江大峡谷</h3>
                                <p class="tm-text-highlight">简介</p>
                                <p class="tm-text-gray">雅鲁藏布江大峡谷平均海拔3000m以上，长达近500km，世界第一大峡谷，被《中国国家地理》评选为中国最美的十大峡谷之首。最险峻、最核心的地段是从白玛狗雄往下长约近百公里的河段，其艰难与危险，堪称“人类最后的秘境”。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">270元</p>
                                <p class="tm-recommended-price-link">查看详情</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend2_2.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">迷情雅鲁藏布大峡谷</h3>
                                <p class="tm-text-highlight">游记</p>
                                <p class="tm-text-gray"> 穿过了林芝县的茂密森林，一副田园画尽展眼前，天空蓝得炫目，云朵白得精彩，阳光明媚得脱俗，绿油油的林芝仿佛贫瘠藏地上的一枚宝石，让人痴恋得不忍离去。迷人的尼洋河，纤纤少女一般，蜿蜒着优雅的身姿静静地流淌，在林芝城外汇入奔腾不息的雅鲁藏布江。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">查看更多</a>
                </div> <!-- tab-pane -->

                <div class="tab-pane fade" id="3a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
<!--                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">-->
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend3_1.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">珠穆朗玛峰</h3>
                                <p class="tm-text-highlight">简介</p>
                                <p class="tm-text-gray">珠穆朗玛峰是世界最高大的山系喜马拉雅山的主峰，位于中国和尼泊尔交界，北坡在中国西藏定日县境内，南坡在尼泊尔境内。山顶终年积雪，高度8848.13米，为世界第一高峰。 珠穆朗玛为藏语的音译，简称珠峰，又意译作圣母峰，意为“女神第三”。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">180元</p>
                                <p class="tm-recommended-price-link">查看详情</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend3_2.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">走，去西藏过个年！</h3>
                                <p class="tm-text-highlight">游记</p>
                                <p class="tm-text-gray">西藏有毒  会让人上瘾
                                    如果不是这一次在冲动之下的说走就走
                                    怎会知道藏地比想象中的更加迷人</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">查看更多</a>
                </div> <!-- tab-pane -->

                <!-- Tab 4 -->
                <div class="tab-pane fade show active" id="4a">
                    <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend4_1.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">羊卓雍措</h3>
                                <p class="tm-text-highlight">简介</p>
                                <p class="tm-text-gray">羊卓雍措，简称羊湖，距拉萨不到100公理，与纳木措、玛旁雍措并称西藏三大圣湖，是喜马拉雅山北麓最大的内陆湖泊，湖光山色之美，冠绝藏南。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">108元</p>
                                <p class="tm-recommended-price-link">查看详情</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend4_2.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">遇见羊卓雍措</h3>
                                <p class="tm-text-highlight">游记</p>
                                <p class="tm-text-gray">西藏，每个人都向往的一个地方。
                                    那说走就走，是对向往迈进的一个决定！ 山脚下的检查站开始卖门票了，只要说是去拉孜县就不会被要求买门票，只是不能去山顶的观景台，但是一路都是风景，不影响游览。</p>
                            </div>
                            <div id="preload-hover-img"></div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">查看更多</a>
                </div> <!-- tab-pane -->

                <!-- Tab 5 -->
                <div class="tab-pane fade" id="5a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend5_1.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">林芝</h3>
                                <p class="tm-text-highlight">简介</p>
                                <p class="tm-text-gray">西藏海拔最低的地方，优美的田园风光，让你有恍惚置身江南之感。空气清新，特别是三月份才是最美的世外桃源，并且植被相当茂密。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <div style="display: inline-block; width: 270px">
                                <img src="img/img_recommend/recommend5_2.jpg"  style="width: 100%;  height:100%" alt="日喀则江孜寺" class="img-fluid tm-recommended-img">
                            </div>
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">西藏林芝 | 饮一壶桃花醉 我先干为敬</h3>
                                <p class="tm-text-highlight">游记</p>
                                <p class="tm-text-gray">“最是人间好时节，梅花落尽桃花开”，年幼时只道赏花是矫揉造作之举，直至某天发觉那一树一树花开的明媚生机着实让人心动，竟也开始追寻极致花境。锁定那一片雪域桃花林，西藏东南部——林芝，位于高原寒境却还拥有热带雨林景致的神奇之地。</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">查看详情</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">查看更多</a>
                </div> <!-- tab-pane -->


            </div>
        </div>


        <footer class="tm-container-outer">
            <p class="mb-0">Copyright © <span class="tm-current-year">2018</span></p>
        </footer>
    </div>

</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/index.js"></script>
<?php
include_once 'pages/index.php';
check_session();
?>
<script>
    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

        // Change top navbar on scroll
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 100) {
                $(".tm-top-bar").addClass("active");
            } else {
                $(".tm-top-bar").removeClass("active");
            }
        });

        // Smooth scroll to search form
        $('.tm-down-arrow-link').click(function () {
            $.scrollTo('#section-hot', 300, {easing: 'linear'});
        });

        // Date Picker in Search form
        // var pickerCheckIn = datepicker('#inputCheckIn');
        // var pickerCheckOut = datepicker('#inputCheckOut');

        // Update nav links on scroll
        $('#tm-top-bar').singlePageNav({
            currentClass: 'active',
            offset: 60
        });

        // Close navbar after clicked
        $('.nav-link').click(function () {
            $('#mainNav').removeClass('show');
        });

        // Slick Carousel
        $('.tm-slideshow').slick({
            infinite: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });


        $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });
</script>

</body>
</html>