<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
session_start();
require_once 'config.php';
require_once 'autoload.php';
$controller = '';
$action = '';
if (isset($_POST["postType"])) {
    if ($_POST["postType"] == "ajax") {
        if (isset($_GET["ctl"])) {
            $controller = $_GET["ctl"];
        }
        if (isset($_GET['act'])) {
            $action = $_GET['act'];
        }
    }
    call_user_func(array($controller . "Controller", $action));
    exit();
}
$act = isset($_GET["act"]) ? $_GET["act"] : "";
require_once TEMPLATE_PUBLIC .DS . "index.php";
