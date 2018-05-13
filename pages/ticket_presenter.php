<?php
/**
 * Created by PhpStorm.
 * User: Polotin
 * Date: 2018/5/13
 * Time: 21:23
 */
$action = "";
$scenic_id = 0;
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}
if (isset($_GET['scenic_id'])) {
    $scenic_id = $_GET['scenic_id'];
}
if (isset($_POST['scenic_id'])) {
    $scenic_id = $_POST['scenic_id'];
}


switch ($action) {
    case 'load_ticket':
        check_session();
        load_ticket_info($scenic_id);
        break;
    case 'order_ticket':
        $id = check_login();
        if($id == ''){
            echo '$(window).attr("location","login.html");';
            return;
        }else{
            check_session();
            $num = $_POST['num'];
            $price_single = $_POST['price'];
            $scenic_name = $_POST['scenic_name'];
            order_ticket($scenic_id, $num, $_SESSION['id'], $price_single, $scenic_name);
        }

        break;
    case 'mytickets':
        $id = check_login();
        if($id == ''){
            echo '$(window).attr("location","login.html");';
            return;
        }else{
            check_session();
            show_my_tickets($_SESSION['id']);
        }

        break;
}

function show_my_tickets($id){
    //创建对象并打开连接，最后一个参数是选择的数据库名称
    $mysqli = new mysqli('123.206.222.246', 'renxingyin', '982164', 'travel');
    //检查连接是否成功
    if (mysqli_connect_errno()) {
        die('Unable to connect!') . mysqli_connect_error();
    }
    $sql = "select * from travel.order where USER_ID='".$id."'";
    $result = $mysqli->query($sql);
    if($result){
        $html= '';
        while ($row = $result->fetch_array()){
            $order_id = $row['ID'];
            $user_id = $row['USER_ID'];
            $scenic_name = $row['SCENIC_NAME'];
            $price = $row['PRICE'];
            $num = $row['NUM'];
            $time = $row['TIME'];
            $html .= '<tr>';
            $html .= '<td>'.$order_id.'</td>';
            $html .= '<td>'.$user_id.'</td>';
            $html .= '<td>'.$scenic_name.'</td>';
            $html .= '<td>'.$price.'</td>';
            $html .= '<td>'.$num.'</td>';
            $html .= '<td>'.$time.'</td>';
            $html .= '</tr>';
        }
        echo '$("#table_body").html("'.$html.'");';
    }
    $mysqli->close();
}

function order_ticket($scenic_id, $num, $id, $price_single, $scenic_name){
    //创建对象并打开连接，最后一个参数是选择的数据库名称
    $mysqli = new mysqli('123.206.222.246', 'renxingyin', '982164', 'travel');
    //检查连接是否成功
    if (mysqli_connect_errno()) {
        die('Unable to connect!') . mysqli_connect_error();
    }
    date_default_timezone_set("Asia/Shanghai");
    $cur_time = date("Y-m-d-H-i-s");
    $sql = "insert into travel.order(scenic_id,user_id,num,time,price, scenic_name) values('".$scenic_id."','".$id."','".$num."','".$cur_time."','".$price_single."','".$scenic_name."')";
    $result = $mysqli->query($sql);

    if($result){
        echo '$(window).attr("location","mytickets.html");';
    }
    $mysqli->close();
}

function check_login(){
    if (isset($_SESSION['id'])) {
        if($_SESSION['id']){
            return $_SESSION['id'];
        }else echo '';
    }else{
        echo '';
    }
}

function load_ticket_info($scenic_id)
{
    //创建对象并打开连接，最后一个参数是选择的数据库名称
    $mysqli = new mysqli('123.206.222.246', 'renxingyin', '982164', 'travel');
    //检查连接是否成功
    if (mysqli_connect_errno()) {
        die('Unable to connect!') . mysqli_connect_error();
    }
    $sql = "select * from scenic where scenic_id =" . $scenic_id;
    $result = $mysqli->query($sql);
    if ($result) {
        if ($result->num_rows != 0) {
            $row = $result->fetch_array();
            $scenic_name = $row['NAME'];
            $intro_short = $row['INTRO_SHORT'];
            $introduction = $row['INTRODUCTION'];
            $price = $row['PRICE'];
            $sold = $row['SOLD'];
            $information = $row['INFORMATION'];

            $files_folder = scandir('../img/tickets/photos/');
            foreach ($files_folder as $name) {
                if (startWith("img_".$scenic_id , $name)) {
                    $file_names[] = $name;
                }
            }
            $html_img = '';
            if (!empty($file_names)) {
                foreach ($file_names as $file_name) {
                    $html_img .= '<img src=\"../img/tickets/photos/'.$file_name.'\" width=\"400\" height=\"400\"/>';
                }
            }

            if($price == "0" | $price == 0){
                echo '$(".yh").css("background","#D9D9D9");';
                echo '$("#btn_buy").attr("disabled",true);';
            }

            echo '$("#scenic_name").append("' . $scenic_name . '");'.
                '$("#add_sell_num").append("' . $sold . '");'.
                '$("#price").append("' . $price . '");'.
                '$("#showbox").html("' . $html_img . '");'.
                '$("#introduction").append("' . str_replace("\n"," ",trim($introduction)) . '");'.
                '$("#information").append("' . str_replace("\n"," ",trim($information)) . '");'.
            '   var showproduct = {
                "boxid": "showbox",
                "sumid": "showsum",
                "boxw": 400,
                "boxh": 400,
                "sumw": 60,
                "sumh": 60,
                "sumi": 4,
                "sums": '.count($file_names,0).',
                "sumsel": "sel",
                "sumborder": 1,
                "lastid": "showlast",
                "nextid": "shownext"
            };
            $.ljsGlasses.pcGlasses(showproduct);';


        }
        $mysqli->close();
    } else {
        echo "<script type=text/javascript>alert('x')</script>";
        $mysqli->close();
    }
}

function check_session()
{
    if (isset($_SESSION['name'])) {
        if ($_SESSION['name']) {
            echo '$("#li_login").css("display","none");' .
                '$("#li_name").css("display","block");' .
                '$("#user_href").append(" ' . $_SESSION['name'] . ' ");';
        } else {
            echo '$("#li_login").css("display","block");' .
                '$("#li_name").css("display","none");' ;
        }
    }

}

function startWith($needle, $name)
{
    return strpos($name, $needle) === 0;
}
