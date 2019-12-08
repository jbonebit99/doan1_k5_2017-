<?php
require_once MODEL_ADMIN.DS."AccountModel.php";

class AccountController
{
    public function Login()
    {
        $accmodel = new AccountModel();
        $accmodel->getTK();
    }
    public function Logout(){
        session_destroy();
        UtilityController::gotoPage('Login.php');
    }
}