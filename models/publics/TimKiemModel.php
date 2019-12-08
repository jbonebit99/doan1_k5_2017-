<?php
require_once HOME_MODEL.DS."BaseModel.php";

class TimKiemModel extends BaseModel
{
    public function getTimKiem()
    {
        $conn = $this->connect();
        if (isset( $_POST['submit']) && $_POST["search"] != '') {
            $search = $_POST['search'];
            $sql = "select count(idbaiviet) as total from baiviet where (tenbaiviet like '%$search%') and trangthai='Hiển thị'";
            $tkiem =  mysqli_query($conn ,$sql);
            $row = mysqli_fetch_assoc($tkiem);
            $total_records = $row['total'];
//            $query = "SELECT * FROM baiviet WHERE (tenbaiviet like '%$search%') OR ( like '%$search%') ";
            $query = "SELECT *FROM baiviet WHERE (tenbaiviet like '%$search%') and trangthai='Hiển thị'";
            $timkiem = mysqli_query($conn, $query);
            return [
                "total_records"=>$total_records,
                "timkiem"=>$timkiem
            ];
        }

    }
}