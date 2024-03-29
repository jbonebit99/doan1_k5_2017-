<?php
//require_once "../config.php";
//require_once ('../admin/autoload.php');
//?>
<!--login-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Tech News</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style ="background: url(../img/nenlogin.jpg); background-size: cover; background-repeat: no-repeat; background-attachment:  fixed">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
                <div class="panel-body">
                    <form class="lcb-form" role="form" action="index.php?ctl=Account&act=Login" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Tài Khoản" name="username" type="text"
                                   autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mật Khẩu" name="password"
                                   type="password"
                                   value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Nhớ mật khẩu
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button class="btn btn-lg btn-success btn-block" type="submit" name="sumit"
                                value="Đăng nhập">Đăng nhập
                        </button>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../assets/js/startmin.js"></script>

</body>
</html>
