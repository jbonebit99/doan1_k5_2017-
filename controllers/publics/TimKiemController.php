<?php
require_once MODEL_PUBLIC.DS."TimKiemModel.php";

class TimKiemController
{
    public function TimKiem()
    {
        $TimKiemModel = new TimKiemModel();
        $timkiem = $TimKiemModel->getTimKiem();
        require_once VIEW_PUBLIC.DS."TimKiemView.php";
        $TimKiemView = new TimKiemView();
        $TimKiemView->ShowTimKiem($timkiem);
    }
}