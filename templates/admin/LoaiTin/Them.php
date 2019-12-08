<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Thêm</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm Loại Tin
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="index.php?ctl=LoaiTin&act=XuLyLoaiTin" method="post">
                                    <div class="form-group">
                                        <label>Tên Loại Tin</label>
                                        <input class="form-control" name="tenloaitin" id="tenloaitin">
                                        <div class="form-group">
                                            <label>Trạng Thái</label>
                                            <select class="form-control" name="trangthai" id="trangthai">

                                                <option value="Hiển thị" selected>Hiển thị</option>
                                                <option value="Không hiển thị">Không hiển thị</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Thứ Tự</label>
                                            <input class="form-control" type="text" name="thutu" id="thutu">
                                        </div>
                                        <div class="form-group">
                                            <label>Đường dẫn</label>
                                            <input class="form-control" type="text" name="duongdan" id="duongdan">
                                        </div>
                                        <div class="form-group">
                                            <label>Màu Menu</label>
                                            <select class="form-control" name="maumenu" id="maumenu">

                                                <option value="cat-1" selected>cat-1</option>
                                                <option value="cat-2" selected>cat-2</option>
                                                <option value="cat-3" selected>cat-3</option>
                                                <option value="cat-4" selected>cat-4</option>
                                                <option value="cat-5" selected>cat-5</option>
                                                <option value="" selected>-Không-</option>

                                            </select>
                                        </div>
                                        <div class="panel-body">
                                            <button type="submit" name="them" id="them" value="Thêm"
                                                    class="btn btn-success">Thêm
                                            </button>
                                        </div>
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




