<?php


class HomeController
{
    public function index(){
        require_once TEMPLATE_ADMIN.DS."Home".DS."index.php";
    }

    public function BangDuLieu()
    {
        $HomeModel = new HomeModel();
        $bang = $HomeModel ->getDuLieuDB();
        require_once VIEW_ADMIN.DS."HomeView.php";
        $HomeView = new HomeView();
        $HomeView->ShowBangDuLieu($bang);

    }
}