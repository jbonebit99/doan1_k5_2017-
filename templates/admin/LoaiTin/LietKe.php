
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Bảng dữ liệu
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <div class="panel-body">
                        <button type="button" class="btn btn-success btn-circle"
                                onclick="window.location.href = 'index.php?ctl=LoaiTin&act=ThemLoaiTin';" title="Thêm"><i
                                    class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-primary btn-circle"
                                onclick="window.location.href = 'index.php?ctl=LoaiTin';" title="Liệt Kê"><i
                                    class="fa fa-list"></i></button>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên loại tin</th>
                            <th>Trạng thái</th>
                            <th>Thứ tự</th>
                            <th>Đường dẫn</th>
                            <th>Màu Menu</th>
                            <th> Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array($lietke) || is_object($lietke)) { ?>
                        <?php
                        foreach ($lietke as $item) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $item['idloaitin']; ?></td>
                            <td><?php echo $item['tenloaitin'] ?></td>
                            <td><?php echo $item['trangthai'] ?></td>
                            <td class="center"><?php echo $item['thutu'] ?></td>
                            <td><?= $item['duongdan'] ?></td>
                            <td class="center"><?= $item['maumenu'] ?></td>
                            <td>
                                <button onclick="window.location.href='index.php?ctl=LoaiTin&act=SuaLoaiTin&id=<?php echo $item['idloaitin'] ?>'" type="button" class="btn btn-info btn-xs">Sửa</button>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-xs delete_btn" href="index.php?ctl=LoaiTin&act=XoaLoaiTin&id=<?=$item['idloaitin']?>">Xóa</a>
                            </td>
                        </tr>
                            <?php
                        }
                            ?>
                            <?php
                        }
                        ?>
                        </tbody>
                        <div class="clear"></div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


