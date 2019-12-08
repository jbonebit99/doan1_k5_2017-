<?php
$tenbaiviet = str_replace("'", "''", $_POST['tenbaiviet']);
$tomtat = $_POST['tomtat'];
$noidung = str_replace("'", "''", $_POST['noidung']);
$loaitin = $_POST['loaitin'];
$trangthai = $_POST['trangthai'];
$thutu = $_POST['thutu'];
$ngaytao = $_POST['ngaytao'];
$id = isset($_GET['id']) ? $_GET['id'] : '';

if (isset($_POST['them'])) {
    $tenanh = $_FILES['anhminhhoa']['name'];
    if ($tenanh != '') {
        $time = date('Ymdhis');
        $tenanh = $time . $tenanh;
        $anhminhhoa = 'uploads/' . $tenanh;
        $uploadImagePath = dirname(dirname(__DIR__)) . '/' . $anhminhhoa;
        copy($_FILES['anhminhhoa']['tmp_name'], $uploadImagePath);
    }
    try {
        $sql = "insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu,ngaytao)
		    values('$tenbaiviet','$anhminhhoa','$tomtat','$noidung','$loaitin','$trangthai','$thutu','$ngaytao')";

        mysqli_query($xuly, $sql);
        UtilityController::message("Thêm Thành Công!!");
        UtilityController::gotoPage("index.php?ctl=BaiViet");
    } catch (Exception $e)
    {
        UtilityController::message("Thêm thất bại!");
    }


} else if (isset($_POST['sua'])) {
    //sua loai tin
    $tenanh = $_FILES['anhminhhoa']['name'];
    if ($tenanh != '') {
        $time = date('Ymdhis');
        $tenanh = $time . $tenanh;
        $anhminhhoa = 'uploads/' . $tenanh;
        $uploadImagePath = dirname(dirname(__DIR__)) . '/' . $anhminhhoa;
        copy($_FILES['anhminhhoa']['tmp_name'], $uploadImagePath);
        try {
            $sql = "update baiviet 
                set tenbaiviet='$tenbaiviet',anhminhhoa='$anhminhhoa',tomtat='$tomtat',noidung='$noidung',idloaitin='$loaitin',trangthai='$trangthai',thutu='$thutu',ngaytao='$ngaytao'
		        where idbaiviet='$id'";
            mysqli_query($xuly, $sql);
        } catch (Exception $e)
        {
            UtilityController::messageError();
        }

    }
    else {
        try {
            $sql = "update baiviet 
                set tenbaiviet='$tenbaiviet',tomtat='$tomtat',noidung='$noidung',idloaitin='$loaitin',trangthai='$trangthai',thutu='$thutu',ngaytao='$ngaytao'
			    where idbaiviet='$id'";
            mysqli_query($xuly, $sql);
            UtilityController::gotoPage("index.php?ctl=BaiViet");
        }
        catch (Exception $e)
        {
            UtilityController::messageError();
        }

    }
}
