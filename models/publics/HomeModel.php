<?php
require_once HOME_MODEL.DS."BaseModel.php";

class HomeModel extends BaseModel
{
    public function getTinMoi(){
        $conn = $this->connect();
        $sql = "SELECT * 
                FROM baiviet
                JOIN loaitin ON baiviet.`idloaitin` = loaitin.`idloaitin` 
                WHERE baiviet.trangthai='Hiển thị'
                ORDER BY baiviet.`ngaytao` DESC LIMIT 2
                ";
        $tm = mysqli_query($conn ,$sql);
        $sqlrc = "SELECT *
            FROM baiviet
                JOIN loaitin ON baiviet.`idloaitin` = loaitin.`idloaitin` 
                WHERE baiviet.trangthai='Hiển thị'
                ORDER BY baiviet.`thutu` DESC LIMIT 3" ;
        $trc = mysqli_query($conn,$sqlrc);
        return [
            "tinmoi"=>$tm,
            "tinrc"=>$trc
        ];
    }
}