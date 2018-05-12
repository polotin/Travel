<?php
/**
 * Created by PhpStorm.
 * User: Polotin
 * Date: 2018/5/12
 * Time: 19:27
 */

$id = "";
$name = "";
$pwd = "";

if (isset($_POST["id"]) & isset($_POST["name"]) & isset($_POST["password"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $pwd = $_POST["password"];
} else {
    return false;
}

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('123.206.222.246', 'renxingyin', '982164', 'travel');
//检查连接是否成功
if (mysqli_connect_errno()) {
    die('Unable to connect!') . mysqli_connect_error();
}
$sql = "select user_name from user where user_id ='" . $id . "'";
$result = $mysqli->query($sql);
if($result){
    if ($result->num_rows != 0) {
        $mysqli -> close();
        echo '$("#err_tag_id").css("display", "block");
                 $("#err_label_id").text("账号已被注册！");';
        return;
    }
}

$sql = "select user_name from user where user_name ='" . $name . "'";
$result = $mysqli->query($sql);

if($result){
    if ($result->num_rows != 0) {
        $mysqli -> close();
        echo '$("#err_tag_name").css("display", "block");
                 $("#err_label_name").text("用户名已被占用！");';
        return;
    } else {
        $sql = "insert into user (user_id, user_name, pwd) values ('" . $id . "','" .$name."','".$pwd."')";
        //执行sql语句，完全面向对象的
        $result = $mysqli->query($sql);
        if($result == 1){
//            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            $mysqli -> close();
            echo '$(location).attr("href", "../index.php");';
        }else{
            $mysqli -> close();
            echo '$("#err_tag_pwd1").css("display", "block");
                 $("#err_label_pwd1").text("注册失败！");';
        }
    }
}







