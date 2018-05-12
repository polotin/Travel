<?php
/**
 * Created by PhpStorm.
 * User: Polotin
 * Date: 2018/5/12
 * Time: 22:32
 */
if (isset($_POST["id"]) & isset($_POST["password"])) {
    $id = $_POST["id"];
    $pwd = $_POST["password"];

    //创建对象并打开连接，最后一个参数是选择的数据库名称
    $mysqli = new mysqli('123.206.222.246', 'renxingyin', '982164', 'travel');
    //检查连接是否成功
    if (mysqli_connect_errno()) {
        die('Unable to connect!') . mysqli_connect_error();
    }
    $sql = "select user_name from user where user_id ='" . $id . "' and pwd = '" . $pwd . "'";
    $result = $mysqli->query($sql);
    if ($result) {
        if ($result->num_rows != 0) {
            $row = $result->fetch_array();
            $name = $row['user_name'];
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            echo '$(location).attr("href", "../index.php");';
        }

    } else {
        echo "<script type=text/javascript>login_failed()</script>";
    }
} else {
    return false;
}
