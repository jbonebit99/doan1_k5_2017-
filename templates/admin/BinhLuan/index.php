<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">QUẢN LÝ BÌNH LUẬN</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
$QLBLCtrl = new QLBinhLuanController();
$QLBLCtrl ->LietKe();
        ?>
    </div>
</div>