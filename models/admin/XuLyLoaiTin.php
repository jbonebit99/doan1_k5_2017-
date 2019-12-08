<?php
$tenloaitin = $_POST['tenloaitin'];
$trangthai = $_POST['trangthai'];
$thutu = $_POST['thutu'];
$duondan = $_POST['duongdan'];
$maumenu = $_POST['maumenu'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
if (isset($_POST['them'])) {
    try {
        $sql = "insert into loaitin(tenloaitin,trangthai,thutu,duongdan,maumenu) values('$tenloaitin','$trangthai','$thutu','$duondan','$maumenu')";
        mysqli_query($conn, $sql);
        UtilityController::message("Thêm thành công!!");
        UtilityController::gotoPage("index.php?ctl=LoaiTin");
    }
    catch (Exception $e)
    {
        UtilityController::message("Thêm thất bại!");
    }

} else
    if (isset($_POST['sua'])) {
        try {
            $sql = "update loaitin set tenloaitin='$tenloaitin',trangthai='$trangthai',thutu='$thutu',duongdan='$duondan',maumenu='$maumenu' 
		where idloaitin='$_GET[id]'";
            mysqli_query($conn, $sql);
            UtilityController::message("Sửa thành công");
            UtilityController::gotoPage("index.php?ctl=LoaiTin");
        } catch (Exception $e)
        {
            UtilityController::message("Sửa thất bại!");
        }

    }
