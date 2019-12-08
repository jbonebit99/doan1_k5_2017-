<?php
require_once HOME_MODEL.DS."BaseModel.php";

class QLMailLienHeModel extends BaseModel
{
    public function getMail(){
        $conn =$this->connect();
        $sql ="SELECT * FROM lienhe";
        $mail = mysqli_query($conn,$sql);
        return $mail;
    }
    public function Xoa(){
        $conn = $this->connect();
        $sql = "delete from lienhe where idlienhe='$_GET[id]'";
        $xoa = mysqli_query($conn, $sql);
        return $xoa;
    }
}