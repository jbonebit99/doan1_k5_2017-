<?php
require_once MODEL_PUBLIC.DS."HomeModel.php";
class HomeController{
    public function index(){
        $homeModel = new HomeModel();
        $tm = $homeModel->getTinMoi();
        require_once VIEW_PUBLIC.DS."HomeView.php";
        $homeView = new HomeView();
        $homeView->showTinMoi($tm);
    }
}
