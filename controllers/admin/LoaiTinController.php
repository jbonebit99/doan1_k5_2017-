<?php
require_once MODEL_ADMIN . DS . "LoaiTinModel.php";

class LoaiTinController
{
    public function index()
    {
        require_once TEMPLATE_ADMIN . DS . "LoaiTin" . DS . "index.php";
    }

    public function LietKeLoaiTin()
    {
        $ltmodel = new LoaiTinModel();
        $lietke = $ltmodel->LietKeLoaiTin();
        require_once VIEW_ADMIN . DS . "LoaiTinView.php";
        $ltView = new LoaiTinView();
        $ltView->ShowLietKe($lietke);
    }

    public function SuaLoaiTin()
    {
        $ltmodel = new LoaiTinModel();
        $sua = $ltmodel->SuaLoaiTin();
        require_once VIEW_ADMIN . DS . "LoaiTinView.php";
        $ltView = new LoaiTinView();
        $ltView->ShowSua($sua);
    }

    public function ThemLoaiTin()
    {
        $themmodel = new LoaiTinModel();
        $them = $themmodel->ThemLoaiTin();
        require_once VIEW_ADMIN . DS . "LoaiTinView.php";
        $themView = new LoaiTinView();
        $themView->ShowThem($them);
    }

    public function XuLyLoaiTin()
    {
        $xulymdel = new LoaiTinModel();
        $conn = $xulymdel->XuLyLoaiTin();
        require_once VIEW_ADMIN . DS . "LoaiTinView.php";
        $ltView = new LoaiTinView();
        $ltView->ShowXuLy($conn);

    }

    public function XoaLoaiTin()
    {
        $xulymdel = new LoaiTinModel();
        $xulymdel->XoaLoaiTin();
        UtilityController::message("Đã Xóa!");
        echo '<script>window.location.href = "index.php?ctl=LoaiTin";</script>';
    }
}