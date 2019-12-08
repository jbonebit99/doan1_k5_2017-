<?php
require_once HOME_MODEL.DS."BaseModel.php";
class MenuModel extends BaseModel{
    public function getMenu()
    {
        $conn = $this->connect();
        $sql = "select * from loaitin where trangthai='Hiển thị' order by thutu";
        $menus = mysqli_query($conn, $sql);
        return ['data' => $menus];

    }
}
