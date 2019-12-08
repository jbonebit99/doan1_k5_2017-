<?php

class UtilityController
{

    public static function gotoPage($str)
    {
        echo "<script type='text/javascript'>window.location.href='" . $str . "';</script>";
    }

    public static function messageSuccess()
    {
        echo "<script type='text/javascript'>alert('Thành công');</script>";
    }

    public static function messageError()
    {
        echo "<script type='text/javascript'>alert('Lỗi ');</script>";
    }
    public static function messageErrorLogin()
    {
        echo "<script type='text/javascript'>alert('Sai tài khoản hoặc mật khẩu');</script>";
    }

    public static function message($str)
    {
        echo "<script type='text/javascript'>alert('" . $str . "');</script>";
    }


}
