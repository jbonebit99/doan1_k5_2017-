<?php


class BaiVietView
{
    public function ShowLietKe($lietke)
    {
        require_once TEMPLATE_ADMIN . DS . "BaiViet" . DS . "LietKe.php";
    }

    public function ShowSua($sua)
    {
        require_once TEMPLATE_ADMIN . DS . "BaiViet" . DS . "Sua.php";
    }

    public function ShowThem($them)
    {
        require_once TEMPLATE_ADMIN . DS . "BaiViet" . DS . "Them.php";
    }

    public function ShowXuLy($xuly)
    {
        require_once MODEL_ADMIN . DS . "XuLyBaiViet.php";
    }
}