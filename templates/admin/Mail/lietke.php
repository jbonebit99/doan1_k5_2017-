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
                            <th>ID</th>
                            <th>Email</th>
                            <th>Ngày gửi</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array($mail) || is_object($mail)) { ?>
                            <?php
                            foreach ($mail as $item) { ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $item['idlienhe']; ?></td>
                                    <td> <a href="mailto:<?=$item['email'] ?>"><?=$item['email'] ?></a></td>
                                    <td><?php echo $item['ngaygui'] ?></td>
                                    <td>
                                        <a class="btn btn-danger btn-xs delete_btn" href="index.php?ctl=QLMailLienHe&act=Xoa&id=<?=$item['idlienhe']?>">Xóa</a>
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