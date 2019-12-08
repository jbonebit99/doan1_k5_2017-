<?php
require_once HOME_MODEL . DS . "BaseModel.php";

class BaiVietModel extends BaseModel
{
    public function ThemBaiViet()
    {
        $conn = $this->connect();
        $sql = "select * from loaitin";
        $them = mysqli_query($conn, $sql);
        return $them;
    }

    public function LietKeBaiViet()
    {
        $conn = $this->connect();
        $sql = "select idbaiviet,tenbaiviet,anhminhhoa,tomtat,noidung,loaitin.tenloaitin,baiviet.trangthai,baiviet.idloaitin,baiviet.ngaytao,baiviet.thutu
	 from baiviet,loaitin where loaitin.idloaitin=baiviet.idloaitin  order by thutu desc";
        $lietke = mysqli_query($conn, $sql);
        return $lietke;
    }

    public function SuaBaiViet()
    {
        $conn = $this->connect();
        $sql = "select * from baiviet where idbaiviet='$_GET[id]'";
        $sua = mysqli_query($conn, $sql);
        $sqlbv = "select * from loaitin";
        $suabv = mysqli_query($conn, $sqlbv);
        return [
            "sua" => $sua,
            "suabv" => $suabv
        ];
    }

    public function XuLyBaiViet()
    {
        $conn = $this->connect();
        return $conn;
    }

    public function XoaBaiViet()
    {
        $conn = $this->connect();
        $sql = "delete from baiviet where idbaiviet='$_GET[id]'";
        $xoa = mysqli_query($conn, $sql);
        return $xoa;

    }
}