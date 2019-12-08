<?php
require_once MODEL_PUBLIC . DS . "TaiKhoanModel.php";

class TaiKhoanController
{
    public function index()
    {
        require_once TEMPLATE_PUBLIC.DS."Login".DS."index.php";
    }

    public function Login()
    {
       $TaiKhoanModel = new TaiKhoanModel();
       $TaiKhoanModel ->getTaiKhoan();
    }

}