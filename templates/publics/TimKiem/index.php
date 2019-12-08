<header id="header">
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="<?=ROOT_URL?>">Trang chủ</a></li>
                        <li>Tìm Kiếm</li>
                        <h4 style="margin-top: 12px">Có <?php if(isset($timkiem["total_records"])){
                            echo $timkiem["total_records"];
                        }
                        else {
                            echo "0";
                        }?> kết quả được tìm thấy!</h4>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
</header>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="clearfix visible-md visible-lg"></div>
                    <?php
                    if (is_array($timkiem["timkiem"]) || is_object($timkiem["timkiem"])) {
                        foreach ($timkiem["timkiem"] as $item) {

                            ?>
                            <div class="col-md-12">
                                <div class="post post-row">
                                    <a class="post-img"
                                       href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $item['idbaiviet'] . '&id=' . $item['idloaitin'] ?>"><img
                                            src="<?= $item['anhminhhoa'] ?>" alt=""></a>
                                    <div class="post-body">
<!--                                        <div class="post-meta">-->
<!--                                            <a class="post-category --><?//= $item['maumenu'] ?><!--"-->
<!--                                               href="">--><?//= $item['tenloaitin'] ?><!--</a>-->
<!--                                            <span class="post-date">--><?//= $item['ngaytao'] ?><!--</span>-->
<!--                                        </div>-->
                                        <h3 class="post-title"><a
                                                href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $item['idbaiviet'] . '&id=' . $item['idloaitin'] ?>"> <?= $item['tenbaiviet'] ?></a>
                                        </h3>
                                        <p><?= $item['tomtat'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }else {
                        ?>
                    <h3 class="post-title">Không có kết quả tìm kiếm.</h3>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>