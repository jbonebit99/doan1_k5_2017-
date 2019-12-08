<?php
require_once MODEL_PUBLIC.DS."BinhLuanModel.php";

class BinhLuanController
{
    public function index()
    {
        $BLModel = new BinhLuanModel();
        $BLModel->ThemBinhLuan();
    }
    public function XemBinhLuan(){
        $BLModel = new BinhLuanModel();
        $binhluan = $BLModel->getBinhLuan();
       require_once VIEW_PUBLIC.DS."BinhLuanView.php";
       $BLView = new BinhLuanView();
       $BLView->ShowBinhLuan($binhluan);
    }
}