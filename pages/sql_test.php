<?php
/**
 * Created by PhpStorm.
 * User: Polotin
 * Date: 2018/5/12
 * Time: 15:27
 */

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('123.206.222.246','renxingyin','982164','echo');
//检查连接是否成功
if (mysqli_connect_errno()){
//注意mysqli_connect_error()新特性
    die('Unable to connect!'). mysqli_connect_error();
}
$sql = "select * from user";
//执行sql语句，完全面向对象的
$result = $mysqli->query($sql);
while($row = $result->fetch_array()){
    $list[]=$row;
}

print_r($list);