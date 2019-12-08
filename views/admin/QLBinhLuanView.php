<?php


class QLBinhLuanView
{
    public function ShowLietKe($lietke)
    {
        require_once TEMPLATE_ADMIN.DS."BinhLuan".DS."LietKe.php";
    }
    public function ShowQuanLy($quanly){
        require_once TEMPLATE_ADMIN.DS."BinhLuan".DS."QuanLy.php";
    }
}