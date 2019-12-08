<?php


class LoaiTinView
{
    public function ShowLietKe($lietke){
        require_once TEMPLATE_ADMIN.DS."LoaiTin".DS."LietKe.php";
    }
    public function ShowSua($sua){
        require_once TEMPLATE_ADMIN.DS."LoaiTin".DS."Sua.php";
    }
    public function ShowThem($them){
        require_once TEMPLATE_ADMIN.DS."LoaiTin".DS."Them.php";
    }
    public function ShowXuLy($conn){
        require_once MODEL_ADMIN.DS."XuLyLoaiTin.php";
    }
}