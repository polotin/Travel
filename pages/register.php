<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>注册-藏域旅行</title>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/register.js"></script>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">注册</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="return check_pwd();" id="login_form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="账号" id="id" name="id" autofocus>
                            </div>
                            <div  class="err_tag" id="err_tag_id" style="display: none;">
                                <label class="fa"  id="err_label_id"></label>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="密码" name="password" type="password" value="">
                            </div>
                            <div  class="err_tag" id="err_tag_pwd" style="display: none;">
                                <label class="fa"  id="err_label_pwd"></label>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="确认密码" name="password1" type="password" value="">
                            </div>
                            <div  class="err_tag" id="err_tag_pwd1" style="display: none;">
                                <label class="fa"  id="err_label_pwd1"></label>
                            </div>
                            <input  class="btn btn-lg btn-success btn-block"  style="background-color: #69C6BA;border-color: #69C6BA" type="submit" value="注册">
                        </fieldset>
                    </form>
                    <div class="reg_link">
                        <label class="fa">
                            已有账号？
                        </label>
                        <a style="cursor: pointer;" href="login.php">点击登录</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["id"]) & isset($_POST["password"]) &  isset($_POST["password1"])) {
    $id = $_POST["id"];
    $pwd = $_POST["password"];
    $pwd1 = $_POST["password1"];
//    if ($id == "admin" & $pwd == "admin511") {
//        session_start();
//        $_SESSION['id'] = $id;
//        $_SESSION['password'] = $pwd;
//        header('Location:index.php');
//    } else {
//        echo "<script type=text/javascript>login_failed()</script>";
//    }
    echo "<script type=text/javascript>console.log('reg')</script>";
}

?>

</body>

</html>
