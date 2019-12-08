<?php
require_once HOME_MODEL . DS . "BaseModel.php";

class HomeModel extends BaseModel
{
    public function getDuLieuDB()
    {
        $conn = $this->connect();
        $sqlbv = "SELECT *FROM baiviet";
        $baiviet = mysqli_query($conn, $sqlbv);
        $sqllt = "SELECT *FROM loaitin";
        $loaitin = mysqli_query($conn, $sqllt);
        $sqladmin = "SELECT *FROM admin";
        $admin = mysqli_query($conn, $sqladmin);
        return [
            "baiviet" => $baiviet,
            "loaitin" => $loaitin,
            "admin" => $admin];
    }
}