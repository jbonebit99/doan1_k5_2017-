<?php


class TinView
{
    public function ShowTin($tin){
        require_once TEMPLATE_PUBLIC.DS."Tin".DS."index.php";
    }
    public function ShowTinCapNhat($tincapnhat){
        require_once TEMPLATE_PUBLIC.DS."Tin".DS."indexTinCapNhat.php";
    }
}