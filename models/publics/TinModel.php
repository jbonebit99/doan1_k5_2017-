<?php
require_once HOME_MODEL.DS."BaseModel.php";

class TinModel extends BaseModel
{
    public function getChiTietLoaiTin(){
        $conn=$this->connect();
        $sql = "select count(idbaiviet) as total from baiviet where idloaitin = '$_GET[id]'";
        $tin =  mysqli_query($conn ,$sql);
        $row = mysqli_fetch_assoc($tin);
        $total_records = $row['total'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
        $total_page = ceil($total_records / $limit);

        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        $start = ($current_page - 1) * $limit;
        $sqllt = "SELECT *
                  FROM loaitin WHERE idloaitin = '$_GET[id]'";
        $loaitin = mysqli_query($conn,$sqllt);
        $sql = "SELECT * 
                FROM baiviet
                JOIN loaitin ON baiviet.`idloaitin` = loaitin.`idloaitin`
                WHERE loaitin.`idloaitin` = '$_GET[id]' AND baiviet.trangthai='Hiển thị' LIMIT $start, $limit";
        $tin = mysqli_query($conn ,$sql);

        return [
            "data" => $tin,
            "datalt"=>$loaitin,
            "total_page" => $total_page,
            "current_page"=>$current_page,
            "total_records"=> $total_records
        ];
    }

    public function getChiTietTin($idbaiviet = null)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM baiviet 
        JOIN loaitin ON baiviet.`idloaitin` = loaitin.`idloaitin`
        WHERE baiviet.idbaiviet = $idbaiviet AND loaitin.idloaitin ='$_GET[id]'";
        $getChiTiet = mysqli_query($conn,$sql);
        return $getChiTiet;
    }

    public function getTinCapNhat(){
        $conn = $this -> connect();
        $sql = "SELECT * 
                FROM baiviet
                JOIN loaitin ON baiviet.`idloaitin` = loaitin.`idloaitin`
                WHERE loaitin.`idloaitin` = '$_GET[id]' ORDER BY ngaytao DESC LIMIT 4  ";
        $tincapnhat= mysqli_query($conn,$sql);
        return $tincapnhat;
    }
}