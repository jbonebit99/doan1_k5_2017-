<?php
require_once HOME_MODEL . DS . "BaseModel.php";

class BinhLuanModel extends BaseModel
{
    public function ThemBinhLuan()
    {
        $conn = $this->connect();
        $ngaythang = getdate();
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $noidung = $_POST['noidung'];
        $ngaybinhluan =$ngaythang["month"] . " " .$ngaythang["mday"]." , ". $ngaythang["year"] . " lúc " . $ngaythang["hours"] . ":" . $ngaythang["minutes"];
        $trangthai = "Không hiển thị";
        $idbaiviet = $_GET['idbaiviet'];
        $id=$_GET['id'];
        if (isset($_POST['submit'])) {
            $sql = "insert into binhluan (idbaiviet,hoten,email,noidung,trangthai,ngaybinhluan)
            values ('$idbaiviet','$hoten','$email','$noidung','$trangthai','$ngaybinhluan')";
            mysqli_query($conn, $sql);
            UtilityController::gotoPage("index.php?ctl=Tin&act=chitiet&idbaiviet=$idbaiviet&id=$id");
        }
    }

    public function getBinhLuan()
    {
        $conn = $this ->connect();
        $sqltotal = "select count(idbinhluan) as total from binhluan where idbaiviet='$_GET[idbaiviet]' and trangthai='Hiển thị'";
        $bluan =  mysqli_query($conn ,$sqltotal);
        $row = mysqli_fetch_assoc($bluan);
        $total_records = $row['total'];
        $sql = "SELECT *FROM binhluan WHERE idbaiviet='$_GET[idbaiviet]' AND trangthai='Hiển thị' ";
        $binhluan = mysqli_query($conn,$sql);
        return [
            "total_records"=>$total_records,
            "binhluan"=>$binhluan
        ];
    }
}