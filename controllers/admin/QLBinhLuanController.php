<?php


class QLBinhLuanController
{
    public function index()
    {
        require_once TEMPLATE_ADMIN . DS . "BinhLuan" . DS . "index.php";
    }

    public function LietKe()
    {
        $QLBLModel = new QLBinhLuanModel();
        $lietke=$QLBLModel->LietKe();
        require_once VIEW_ADMIN.DS."QLBinhLuanView.php";
        $QLBLView = new QLBinhLuanView();
        $QLBLView->ShowLietKe($lietke);
    }
    public function Xoa()
    {
        $xulymdel = new QLBinhLuanModel();
        $xulymdel->Xoa();
        UtilityController::message("Đã Xóa!");
        echo '<script>window.location.href = "index.php?ctl=QLBinhLuan";</script>';
    }
    public function QuanLy(){
        $QLBLModel = new QLBinhLuanModel();
        $quanly = $QLBLModel->QuanLy();
        require_once VIEW_ADMIN.DS."QLBinhLuanView.php";
        $QLBLView = new QLBinhLuanView();
        $QLBLView->ShowQuanLy($quanly);

    }
    public function Sua(){
        $QLBLModel = new QLBinhLuanModel();
        $QLBLModel->Sua();
    }

}