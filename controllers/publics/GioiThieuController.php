<?php


class GioiThieuController
{
public function index(){
    require_once VIEW_PUBLIC.DS."GioiThieuView.php";
    $gioiThieuView = new GioiThieuView();
    $gioiThieuView->index();
}
}