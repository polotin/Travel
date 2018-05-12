<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Journey HTML CSS Template</title>
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
                        </div>  <!-- col-xs-12 -->
                    </div> <!-- row -->
                    <div class="row tm-banner-row" id="tm-section-search">



                    </div> <!-- row -->
                    <div class="tm-banner-overlay"></div>
                </div>  <!-- .container -->
            </div>     <!-- .tm-container-outer -->
        </section>

        <section class="p-5 tm-container-outer tm-bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                        <h2 class="text-uppercase mb-4"><strong>西藏</strong> 印象</h2>
                        <p class="mb-4">西藏北临新疆维吾尔自治区，东北连接青海省，东连四川省，东南与云南省相连；南边和西部与缅甸、印度、 不丹、锡金和克什米尔等国家和地区接壤。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。青藏高原是世界上隆起最晚、面积最大、海拔最高的高原，因而被称为“世界屋脊”，
                            西藏高原位于青藏高原的主题位置。有分属寒带、温带、亚热带、热带的种类繁多的奇花异草和珍稀野生动物。</p>
                        <a href="#" class="text-uppercase btn-primary tm-btn">继续探索</a>
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