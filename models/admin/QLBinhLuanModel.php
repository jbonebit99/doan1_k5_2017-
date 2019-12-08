<?php
require_once HOME_MODEL.DS."BaseModel.php";

class QLBinhLuanModel extends BaseModel
{
    public function LietKe(){
        $conn = $this ->connect();
        $sql="select * from binhluan";
        $lietke = mysqli_query($conn,$sql);
        return $lietke;
    }
    public function Xoa()
    {
        $conn = $this ->connect();
        $sql = "delete from binhluan where idbinhluan='$_GET[id]'";
        $xoa = mysqli_query($conn, $sql);
        return $xoa;
    }

    public function Sua()
    {
        $conn = $this ->connect();
        $trangthai = $_POST['trangthai'];
        if (isset($_POST['sua'])) {
            $sql = "update binhluan set trangthai='$trangthai' where idbinhluan = '$_GET[id]'";
            mysqli_query($conn, $sql);
            UtilityController::gotoPage("index.php?ctl=QLBinhLuan");
        }
    }

    public function QuanLy()
    {
        $conn = $this ->connect();
        $sql="SELECT *FROM binhluan WHERE idbinhluan='$_GET[id]'";
        $quanly = mysqli_query($conn,$sql);
        return $quanly;
    }

}