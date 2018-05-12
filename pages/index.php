<?php
/**
 * Created by PhpStorm.
 * User: Polotin
 * Date: 2018/5/12
 * Time: 14:23
 */

$action = "";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}
switch ($action) {
    case 'load_hot':
        load_hot();
        break;
    case 'logout':
        logout();
        break;
}
function load_hot()
{
    $html_str = '';

    $html_str .= '<section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/img_hot/hot1_1.jpg" alt="Image">
                        <img src="img/img_hot/hot1_2.jpg" alt="Image">
                        <img src="img/img_hot/hot1_3.jpg" alt="Image">    
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">神圣的高原圣殿</h2>
                        <p>
                            布达拉宫（藏文：པོ་ཏ་ལ，藏语拼音：bo da la，威利：po ta la），坐落于于中国西藏自治区的首府拉萨市区西北玛布日山上，是世界上海拔最高，集宫殿、城堡和寺院于一体的宏伟建筑，也是西藏最庞大、最完整的古代宫堡建筑群。
                            布达拉宫依山垒砌，群楼重叠，殿宇嵯峨，气势雄伟，是藏式古建筑的杰出代表（据说源于桑珠孜宗堡），中华民族古建筑的精华之作，是第五套人民币50元纸币背面的风景图案。主体建筑分为白宫和红宫两部分。宫殿高200余米，外观13层，内为9层。布达拉宫前辟有布达拉宫广场，是世界上海拔最高的城市广场。
                        </p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">了解更多</a>
                    </div>
                </section>';


    $html_str .= ' <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">
            
                                <div class="tm-right tm-slideshow tm-slideshow-highlight">
                                    <img src="img/img_hot/hot2_1.jpg" alt="Image">
                                    <img src="img/img_hot/hot2_2.jpg" alt="Image">
                                    <img src="img/img_hot/hot2_3.jpg" alt="Image">
                                </div> 
            
                                <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                                    <h2 class="">藏式宗教建筑的千古典范</h2>
                                    <p>八廓街的中心便是大昭寺，是当年松赞干布为纪念尺尊公主入藏而建。寺庙最初的名字“惹萨”后来成为这座城市的名字，并演化为今天的“拉萨”。因此，人们常说“先有大昭寺，后有拉萨城”。大昭寺作为“西藏的眼睛”，在西藏宗教文化中有着至高无上的地位，一直是各种重大佛事活动的中心，每日来此转经的人更是络绎不绝。
大昭寺最大的看头是当年文成公主入蕃时带来的释迦摩尼十二岁等身像。拉萨之所以被称为“圣地”，就与这座佛像有关。大殿通道入口处右侧是关于大昭寺建寺故事的壁画，要了解大昭寺、7世纪时的拉萨、松赞干布和文成公主，就一定要先看这幅。也别忘了登上三楼平台，这里是遥望布达拉宫、俯瞰大昭寺广场好地方。</p>
                                    <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">了解更多</a>
                                </div>                        
            
                            </section>';

    $html_str .= '                            <section class="tm-slideshow-section">
                                <div class="tm-slideshow">
                                    <img src="img/img_hot/hot3_1.jpg" alt="Image">
                                    <img src="img/img_hot/hot3_2.jpg" alt="Image">
                                    <img src="img/img_hot/hot3_3.jpg" alt="Image">
                                </div>
                                <div class="tm-slideshow-description tm-bg-primary">
                                    <h2 class="">天湖</h2>
                                    <p>四千万年的山川湖泊，全世界只有一个纳木错。在不同的季节、不同的位置，呈现出不一样的蓝色光焰，你只要在湖边站上几分钟，她就可以因云层的涌动和风吹的波澜而为你上演蓝色的迷幻变奏曲，那波光可以洗涤每个人的灵魂，只要这个人自己愿意。</p>
                                    <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">了解更多</a>
                                </div>
                            </section>';


    echo $html_str;
}

function check_session()
{
    if(isset($_SESSION['name'])){
        if ($_SESSION['name']) {
            echo '<script type=text/javascript>$("#li_login").css("display","none");' .
                '$("#li_reg").css("display","none");' .
                '$("#li_name").css("display","block");' .
                '$("#li_logout").css("display","block");' .
                '$("#user_href").append(" ' . $_SESSION['name'] . ' ")</script>';
        }else{
            echo '<script type=text/javascript>$("#li_login").css("display","block");' .
                '$("#li_reg").css("display","block");' .
                '$("#li_name").css("display","none");' .
                '$("#li_logout").css("display","none");</script>';
        }
    }

}

function logout(){
    session_unset();
    session_destroy();
}