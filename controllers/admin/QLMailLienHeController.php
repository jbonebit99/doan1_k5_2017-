<?php
require_once MODEL_ADMIN.DS."QLMailLienHeModel.php";

class QLMailLienHeController
{
    public function LietKe()
    {
        $MailModel = new QLMailLienHeModel();
        $mail = $MailModel->getMail();
        require_once VIEW_ADMIN.DS."MailView.php";
        $MailView = new MailView();
        $MailView->ShowLietKe($mail);
    }
    public function index()
    {
        require_once TEMPLATE_ADMIN . DS . "Mail" . DS . "index.php";
    }
    public function Xoa(){
        $MailModel = new QLMailLienHeModel();
        $MailModel->Xoa();
        UtilityController::message("Đã Xóa!");
        echo '<script>window.location.href = "index.php?ctl=QLMailLienHe";</script>';
    }
}