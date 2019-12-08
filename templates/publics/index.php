<!DOCTYPE html>
<?php
$chucnang = $controller;
if (isset($_GET["ctl"])) {
    $chucnang = $_GET["ctl"];
}
if (isset($_SESSION["username"])) {

    UtilityController::gotoPage("admin/index.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Trang tổng hợp tin tức</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= ROOT_ASSETS . "/" ?>css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?= ROOT_ASSETS . "/" ?>css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= ROOT_ASSETS . "/" ?>css/style.css"/>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="preloading">
<!--<div class="load">-->
<!--    <img src="./img/loader.gif">-->
<!--</div>-->
<?php
$menuCtrl = new MenuController();
$menuCtrl->getMenu();
require_once HOME_CONTROLLER . DS . "Router.php";
$tkCtrl = new TaiKhoanController();
$tkCtrl->index();
$footerCtrl = new FooterController();
$footerCtrl->index();
?>

<!-- jQuery Plugins -->
<script  src="<?= ROOT_ASSETS . "/" ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=ROOT_ASSETS."/"?>js/jquery-3.3.1.min.js"></script>
<script src="<?= ROOT_ASSETS . "/" ?>js/bootstrap.min.js"></script>
<script src="<?= ROOT_ASSETS . "/" ?>js/main.js"></script>
<script type="text/javascript" src="<?= ROOT_ASSETS ."/"?>js/script.js"></script>

</body>
</html>
