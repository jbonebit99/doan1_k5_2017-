
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Thêm</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm Bài Viết
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form"
                                      action="index.php?ctl=BaiViet&act=XuLyBaiViet"
                                      method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên Bài Viết</label>
                                        <input class="form-control" type="text" name="tenbaiviet" id="tenbaiviet">
                                        <div class="form-group">
                                            <label>Ảnh Minh Họa</label>
                                            <input type="file" name="anhminhhoa" id="anhminhhoa"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tóm Tắt</label>
                                            <textarea class="form-control" name="tomtat" id="tomtat" cols="45" rows="5">
                                             </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea class="form-control" name="noidung" id="noidung" cols="45"
                                                      rows="5">
                                              </textarea>
                                            <script>
                                                // We need to turn off the automatic editor creation first.
                                                CKEDITOR.disableAutoInline = true;
                                                CKEDITOR.config.resize_dir = 'both';
                                                CKEDITOR.config.entities = false;
                                                CKEDITOR.config.fullPage=true;
                                                CKEDITOR.replace('noidung', {
                                                    extraPlugins: 'sourcedialog',
                                                    removePlugins: 'sourcearea'
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Loại Tin</label>
                                            <select class="form-control" name="loaitin" id="loaitin">
                                                <?php
                                                while ($dong = mysqli_fetch_array($them)) {
                                                    ?>
                                                    <option value="<?php echo $dong['idloaitin'] ?>"><?php echo $dong['tenloaitin'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
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
                                            <label>Thứ tự</label>
                                            <input class="form-control" type="text" name="thutu" id="thutu">
                                        </div>

                                        <div class="form-group">
                                            <label>Ngày Tạo</label>
                                            <input class="form-control" type="date" id="ngaytao" name="ngaytao"
                                                   value="2019-01-01"
                                                   min="2018-01-01" max="2099-12-31">
                                        </div>
                                        <div class="panel-body">
                                            <button type="submit" name="them" id="them" value="Thêm"
                                                    class="btn btn-success">Thêm
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <?php
            $ltctl = new BaiVietController();
            $ltctl->LietKeBaiViet();
            ?>
        </div>
    </div>
</div>




