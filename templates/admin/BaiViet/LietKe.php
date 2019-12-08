<!-- Navigation -->


<!-- /.row -->
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
                                onclick="window.location.href = 'index.php?ctl=BaiViet&act=ThemBaiViet';" title="Thêm"><i
                                class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-primary btn-circle"
                                onclick="window.location.href = 'index.php?ctl=BaiViet';" title="Liệt Kê"><i
                                class="fa fa-list"></i></button>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên bài viết</th>
                            <th>Ảnh minh họa</th>
                            <th>Loại tin</th>
                            <th>Trạng thái</th>
                            <th>ID Loại tin</th>
                            <th>Ngày tạo</th>
                            <th>Thứ tự</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array($lietke) || is_object($lietke)) { ?>
                            <?php
                            foreach ($lietke as $item) { ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $item['idbaiviet']?></td>
                                    <td><?php echo $item['tenbaiviet']; ?></td>
                                    <td><img src="../<?php echo $item['anhminhhoa']; ?>" width="30" height="30"/></td>
                                    <td><?php echo $item['tenloaitin']; ?></td>
                                    <td><?php echo $item['trangthai']; ?></td>
                                    <td><?= $item['idloaitin']; ?></td>
                                    <td><?= $item['ngaytao']; ?></td>
                                    <td><?php echo $item['thutu']; ?></td>
                                    <td>
                                        <button class="btn btn-info btn-xs" onclick="window.location.href='index.php?ctl=BaiViet&act=SuaBaiViet&id=<?php echo $item['idbaiviet'] ?>'"
                                                type="button" >Sửa
                                        </button>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-danger btn-xs delete_btn" href="index.php?ctl=BaiViet&act=XoaBaiViet&id=<?php echo $item['idbaiviet'] ?>">Xóa</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
