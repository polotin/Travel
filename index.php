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
                        日喀则江孜寺
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
                        玛吉阿米西餐吧
                    </a>
                </li>
                <li class="tm-tab-link-li">
                    <a href="#6a" data-toggle="tab" class="tm-tab-link">
<!--                        <img src="img/australia.png" alt="Image" class="img-fluid">-->
                        八廊街
                    </a>
                </li>
                <li class="tm-tab-link-li">
                    <a href="#7a" data-toggle="tab" class="tm-tab-link">
<!--                        <img src="img/antartica.png" alt="Image" class="img-fluid">-->
                        色拉寺
                    </a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <!-- Tab 1 -->
                <div class="tab-pane fade" id="1a">
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">North Garden Resort</h3>
                                <p class="tm-text-highlight">One North</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$110</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Felis nec dignissim</h3>
                                <p class="tm-text-highlight">Two North</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <div id="preload-hover-img"></div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$120</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Sed fermentum justo</h3>
                                <p class="tm-text-highlight">Three North</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$130</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Maecenas ultricies neque</h3>
                                <p class="tm-text-highlight">Four North</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$140</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                </div> <!-- tab-pane -->

                <!-- Tab 2 -->
                <div class="tab-pane fade" id="2a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">South Resort Hotel</h3>
                                <p class="tm-text-highlight">South One</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$220</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Aenean ac ante nec diam</h3>
                                <p class="tm-text-highlight">South Second</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$230</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Suspendisse nec dapibus</h3>
                                <p class="tm-text-highlight">South Third</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$240</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Aliquam viverra mi at nisl</h3>
                                <p class="tm-text-highlight">South Fourth</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$250</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                </div> <!-- tab-pane -->

                <!-- Tab 3 -->
                <div class="tab-pane fade" id="3a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Europe Hotel</h3>
                                <p class="tm-text-highlight">Venecia, Italy</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$330</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">In viverra enim turpis</h3>
                                <p class="tm-text-highlight">Paris, France</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$340</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Volutpat pellentesque</h3>
                                <p class="tm-text-highlight">Barcelona, Spain</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$350</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                <p class="tm-text-highlight">Istanbul, Turkey</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$360</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                </div> <!-- tab-pane -->

                <!-- Tab 4 -->
                <div class="tab-pane fade show active" id="4a">
                    <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Asia Resort Hotel</h3>
                                <p class="tm-text-highlight">Singapore</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$440</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Nullam eget est a nisl</h3>
                                <p class="tm-text-highlight">Yangon, Myanmar</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <div id="preload-hover-img"></div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$450</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                                <p class="tm-text-highlight">Bangkok, Thailand</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$460</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Lorem ipsum dolor sit</h3>
                                <p class="tm-text-highlight">Vientiane, Laos</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$470</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                </div> <!-- tab-pane -->

                <!-- Tab 5 -->
                <div class="tab-pane fade" id="5a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Africa Resort Hotel</h3>
                                <p class="tm-text-highlight">First City</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$550</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Aenean ac magna diam</h3>
                                <p class="tm-text-highlight">Second City</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$560</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Beach Barbecue Sunset</h3>
                                <p class="tm-text-highlight">Third City</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$570</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                <p class="tm-text-highlight">Fourth City</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$580</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                </div> <!-- tab-pane -->

                <!-- Tab 6 -->
                <div class="tab-pane fade" id="6a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Hotel Australia</h3>
                                <p class="tm-text-highlight">City One</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$660</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                                <p class="tm-text-highlight">City Two</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$650</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Beach Barbecue Sunset</h3>
                                <p class="tm-text-highlight">City Three</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$640</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                <p class="tm-text-highlight">City Four</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$630</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                </div> <!-- tab-pane -->

                <!-- Tab 7 -->
                <div class="tab-pane fade" id="7a">

                    <div class="tm-recommended-place-wrap">
                        <div class="tm-recommended-place">
                            <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Antartica Resort</h3>
                                <p class="tm-text-highlight">Ant City One</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$770</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Pulvinar Semper</h3>
                                <p class="tm-text-highlight">Ant City Two</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$230</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Cras vel sapien</h3>
                                <p class="tm-text-highlight">Ant City Three</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$140</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>

                        <div class="tm-recommended-place">
                            <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                            <div class="tm-recommended-description-box">
                                <h3 class="tm-recommended-title">Nullam eget est</h3>
                                <p class="tm-text-highlight">Ant City Four</p>
                                <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                    risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                            </div>
                            <a href="#" class="tm-recommended-price-box">
                                <p class="tm-recommended-price">$190</p>
                                <p class="tm-recommended-price-link">Continue Reading</p>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
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