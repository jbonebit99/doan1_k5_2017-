<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">QUẢN LÝ BÀI VIẾT</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    <?php
    $bvctrl = new BaiVietController();
    $bvctrl->LietKeBaiViet();
    ?>
    </div>
</div>