<?php
$dong = mysqli_fetch_array($quanly);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Quản Lý Bình Luận</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ẩn Hiện Bình Luận
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="index.php?ctl=QLBinhLuan&act=Sua&id=<?= $_GET['id']; ?>"
                                      method="post">
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <label for="disabledSelect">ID Bình Luận</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                   placeholder="<?php echo $dong['idbinhluan'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">ID Bài Viết</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                   placeholder="<?php echo $dong['idbaiviet'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Email</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                   placeholder="<?php echo $dong['email'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Họ Tên</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                   placeholder="<?php echo $dong['hoten'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Nội Dung</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                   placeholder="<?php echo $dong['noidung'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Ngày Bình Luận</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                   placeholder="<?php echo $dong['ngaybinhluan'] ?>" disabled>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <label>Trạng Thái</label>
                                        <select class="form-control" name="trangthai" id="trangthai">
                                            <?php
                                            if ($dong['trangthai'] == 'Hiển thị') {
                                                ?>
                                                <option value="Hiển thị" selected>Hiển thị</option>
                                                <option value="Không hiển thị">Không hiển thị</option>
                                                <?php
                                            } else {
                                                ?>
                                                <option value="Hiển thị">Hiển thị</option>
                                                <option value="Không hiển thị" selected>Không hiển thị</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="panel-body">
                                        <button type="submit" name="sua" id="sua" value="Sửa"
                                                class="btn btn-info">Ẩn / Hiện
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <?php
                $ltctl = new LoaiTinController();
                $ltctl->LietKeLoaiTin();
                ?>
            </div>
        </div>
    </div>
