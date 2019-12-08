<?php
require_once MODEL_PUBLIC.DS."MenuModel.php";
class MenuController {
    public function getMenu(){
        $menuModel = new MenuModel();
        $menus = $menuModel->getMenu();
        require_once VIEW_PUBLIC.DS."MenuView.php";
        $menuView = new MenuView();
        $menuView -> ShowMenu($menus);
    }

}