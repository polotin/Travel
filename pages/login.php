<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>登录-藏域旅行</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/login.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/login.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">登录</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login_form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="账号" name="id" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="密码" name="password" type="password" value="">
                            </div>
                            <input  class="btn btn-lg btn-success btn-block"  style="background-color: #69C6BA;border-color: #69C6BA" type="submit" value="登录">
                        </fieldset>
                    </form>
                    <div class="reg_link">
                        <label class="fa">
                            还没有账号？
                        </label>
                        <a style="cursor: pointer;" href="register.php">点击注册</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["id"]) & isset($_POST["password"])) {
    $id = $_POST["id"];
    $pwd = $_POST["password"];
    if ($id == "admin" & $pwd == "admin511") {
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['password'] = $pwd;
        header('Location:index.php');
    } else {
        echo "<script type=text/javascript>login_failed()</script>";
    }
}

?>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<!--<script src="../dist/js/sb-admin-2.js"></script>-->

</body>

</html>
