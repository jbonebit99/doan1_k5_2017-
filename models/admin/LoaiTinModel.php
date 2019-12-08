<?php
require_once  HOME_MODEL.DS."BaseModel.php";

class LoaiTinModel extends BaseModel
{
    public function LietKeLoaiTin(){
        $conn = $this ->connect();
        $sql="select * from loaitin order by thutu desc";
        $lietke = mysqli_query($conn,$sql);
        return $lietke;
    }
    public function SuaLoaiTin(){
        $conn = $this ->connect();
        $sql="select * from loaitin where idloaitin='$_GET[id]'";
        $sua = mysqli_query($conn,$sql);
        return $sua;
    }
    public function ThemLoaiTin(){
        $conn = $this ->connect();
        $sql="select * from loaitin";
        $them = mysqli_query($conn,$sql);
        return $them;
    }
    public function XuLyLoaiTin(){
        $conn = $this ->connect();
        return $conn;

    }

    public function XoaLoaiTin()
    {
        $conn = $this ->connect();
        $sql = "delete from loaitin where idloaitin='$_GET[id]'";
        $xoa = mysqli_query($conn, $sql);
        return $xoa;
    }

}