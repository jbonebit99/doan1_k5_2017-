<?php
$dong = mysqli_fetch_array($sua);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Sửa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sửa Loại Tin
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form"
                                      action="index.php?ctl=LoaiTin&act=XuLyLoaiTin&id=<?= $dong['idloaitin'] ?>"
                                      method="post">
                                    <div class="form-group">
                                        <label>Tên Loại Tin</label>
                                        <input class="form-control" name="tenloaitin" id="tenloaitin"
                                               value="<?php echo $dong['tenloaitin'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
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
                                    <div class="form-group">
                                        <label>Thứ Tự</label>
                                        <input class="form-control" type="text" name="thutu" id="thutu"
                                               value="<?php echo $dong['thutu'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Đường dẫn</label>
                                        <input class="form-control" type="text" name="duongdan" id="duongdan"
                                               value="<?php echo $dong['duongdan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Màu Menu</label>
                                        <input class="form-control" type="text" name="maumenu" id="maumenu"
                                               value="<?php echo $dong['maumenu'] ?>">
                                    </div>
                                    <div class="panel-body">
                                        <button type="submit" name="sua" id="sua" value="Sửa"
                                                class="btn btn-info">Sửa
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
</div>


