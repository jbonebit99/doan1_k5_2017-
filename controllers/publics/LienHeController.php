<?php
require_once MODEL_PUBLIC . DS . "LienHeModel.php";

class LienHeController
{
    public function index()
    {
        $LHModel = new LienHeModel();
        $LHModel->ThemLienHe();
        UtilityController::message("Chung tôi sẽ liên lạc với bạn! Về trang chủ");
        UtilityController::gotoPage("index.php");
        }
}