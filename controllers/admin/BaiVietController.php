<?php
require_once MODEL_ADMIN . DS . "BaiVietModel.php";

class   BaiVietController
{
    public function index()
    {
        require_once TEMPLATE_ADMIN . DS . "BaiViet" . DS . "index.php";
    }

    public function ThemBaiViet()
    {
        $bvmodel = new BaiVietModel();
        $them = $bvmodel->ThemBaiViet();
        require_once VIEW_ADMIN . DS . "BaiVietView.php";
        $bvView = new BaiVietView();
        $bvView->ShowThem($them);
    }

    public function LietKeBaiViet()
    {
        $bvmodel = new BaiVietModel();
        $lietke = $bvmodel->LietKeBaiViet();
        require_once VIEW_ADMIN . DS . "BaiVietView.php";
        $bvView = new BaiVietView();
        $bvView->ShowLietKe($lietke);
    }

    public function SuaBaiViet()
    {
        $bvmodel = new BaiVietModel();
        $sua = $bvmodel->SuaBaiViet();
        require_once VIEW_ADMIN . DS . "BaiVietView.php";
        $bvView = new BaiVietView();
        $bvView->ShowSua($sua);
    }

    public function XuLyBaiViet()
    {
        $bvmodel = new BaiVietModel();
        $xuly = $bvmodel->XuLyBaiViet();
        require_once VIEW_ADMIN . DS . "BaiVietView.php";
        $bvView = new BaiVietView();
        $bvView->ShowXuLy($xuly);
    }
    public function XoaBaiViet(){
        $bvmodel = new BaiVietModel();
        $xuly = $bvmodel->XoaBaiViet();
        UtilityController::message("Đã Xóa!");
        UtilityController::gotoPage("index.php?ctl=BaiViet");
    }
}