<?php
require_once MODEL_PUBLIC.DS."TinModel.php";

class TinController
{
    public function getTin(){
        $tinModel = new TinModel();
        $tin = $tinModel -> getChiTietLoaiTin();
        require_once VIEW_PUBLIC.DS."TinView.php";
        $tinView = new TinView();
        $tinView->ShowTin($tin);
    }
    public function getTinCapNhat(){
        $tinModel = new TinModel();
        $tincapnhat = $tinModel -> getTinCapNhat();
        require_once VIEW_PUBLIC.DS."TinView.php";
        $tinView = new TinView();
        $tinView->ShowTinCapNhat($tincapnhat);
    }
    public function chitiet(){
        $idbaiviet = !empty($_GET["idbaiviet"]) ? $_GET["idbaiviet"] : "";
        $tCNModel = new TinModel();
        $getChiTiet = $tCNModel->getChiTietTin($idbaiviet);
        require_once TEMPLATE_PUBLIC.DS."Tin".DS."chitiet.php";
    }
}