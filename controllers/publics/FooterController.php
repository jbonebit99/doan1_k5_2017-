<?php
require_once MODEL_PUBLIC.DS."MenuModel.php";

class FooterController
{
public function index(){
    $footerModel = new MenuModel();
    $footer = $footerModel->getMenu();
    require_once VIEW_PUBLIC.DS."FooterView.php";
    $footerView = new FooterView();
    $footerView->ShowFooter($footer);
}
}