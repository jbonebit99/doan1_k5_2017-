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

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID Bình Luận</th>
                            <th>ID Bài Viết</th>
                            <th>Họ Tên</th>
                            <th>Nội Dung</th>
                            <th>Trạng thái</th>
                            <th>Ngày Bình Luận</th>
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
                                    <td><?php echo $item['idbinhluan']; ?></td>
                                    <td><?php echo $item['idbaiviet'] ?></td>
                                    <td><?php echo $item['hoten'] ?></td>
                                    <td class="center"><?php echo $item['noidung'] ?></td>
                                    <td><?= $item['trangthai'] ?></td>
                                    <td class="center"><?= $item['ngaybinhluan'] ?></td>
                                    <td>
                                        <button onclick="window.location.href='index.php?ctl=QLBinhLuan&act=QuanLy&id=<?php echo $item['idbinhluan'] ?>'" type="button" class="btn btn-info btn-xs">Sửa</button>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-danger btn-xs delete_btn delete_btn" href="index.php?ctl=QLBinhLuan&act=Xoa&id=<?=$item['idbinhluan']?>" ">Xóa</a>
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



