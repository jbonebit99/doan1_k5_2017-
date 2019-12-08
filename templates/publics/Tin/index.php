
<header id="header">
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="<?=ROOT_URL?>">Trang chủ</a></li>
                        <li>
                            <?php
                            $dongten = mysqli_fetch_array($tin["datalt"]);
                            echo $dongten['tenloaitin']
                            ?></li>
                    </ul>
                    <h1><?php
                        foreach ($tin["datalt"] as $item) {
                            echo $item['tenloaitin'];
                        }
                        ?></h1>
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

                    <!--                    <!-- ad -->
                    <!--                    <div class="col-md-12">-->
                    <!--                        <div class="section-row">-->
                    <!--                            <a href="#">-->
                    <!--                                <img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <!-- ad -->

                    <!-- post -->
                    <?php
                     if (is_array($tin["data"]) || is_object($tin["data"])) {
                        foreach ($tin["data"] as $item) {
                                ?>
                                <div class="col-md-12">
                                    <div class="post post-row">
                                        <a class="post-img"
                                           href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $item['idbaiviet'] . '&id=' . $item['idloaitin'] ?>"><img
                                                    src="<?= $item['anhminhhoa'] ?>" alt="" width="380" height="180"></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category <?= $item['maumenu'] ?>"
                                                   href=""><?= $item['tenloaitin'] ?></a>
                                                <span class="post-date"><?= $item['ngaytao'] ?></span>
                                            </div>
                                            <h3 class="post-title"><a
                                                        href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $item['idbaiviet'] . '&id=' . $item['idloaitin'] ?>"> <?= $item['tenbaiviet'] ?></a>
                                            </h3>
                                            <p><?= $item['tomtat'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>

            <div class="col-md-4">
                <!--                <!-- ad -->
                <!--                <div class="aside-widget text-center">-->
                <!--                    <a href="#" style="display: inline-block;margin: auto;">-->
                <!--                        <img class="img-responsive" src="./img/ad-1.jpg" alt="">-->
                <!--                    </a>-->
                <!--                </div>-->
                <!--                <!-- /ad -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Tin Cập Nhật</h2>
                    </div>
                    <?php
                    $tincapnhatCtrl = new TinController();
                    $tincapnhatCtrl->getTinCapNhat();
                    ?>
                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Thống Kê</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-5">Tổng Số Tin<span><?= $tin['total_records']?></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->

                <!-- tags -->
<!--                <div class="aside-widget">-->
<!--                    <div class="tags-widget">-->
<!--                        <ul>-->
<!--                            <li><a href="#">Chrome</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- /tags -->

                <!-- archive -->
<!--                <div class="aside-widget">-->
<!--                    <div class="section-title">-->
<!--                        <h2>Archive</h2>-->
<!--                    </div>-->
<!--                    <div class="archive-widget">-->
<!--                        <ul>-->
<!--                            <li><a href="#">Jan 2018</a></li>-->
<!--                            <li><a href="#">Feb 2018</a></li>-->
<!--                            <li><a href="#">Mar 2018</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- /archive -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<div class="container text-center">
    <u class="pagination">
        <?php
        if ($tin['current_page'] > 1 && $tin['total_page'] > 1)
        {
            ?>
            <li class="page-item"><a class="page-link" href="index.php?ctl=Tin&act=getTin&id=<?= $_GET['id']?>&page=<?php echo ($tin['current_page']-1)?>">Trước</a></li>

            <?php
        }
        for ($i = 1; $i <= $tin['total_page']; $i++){
            if ($i == $tin['current_page']){
                ?>
                <li class="page-item"><a class="page-link" href=""><?php echo $i ?> </a></li>
                <?php
            }
            else{
                ?>
                <li class="page-item"><a class="page-link" href="index.php?ctl=Tin&act=getTin&page=<?php echo $i?>&id=<?= $_GET['id']?> "><?php echo $i ?></a></li>
                <?php
            }
        }
        if ($tin['current_page'] < $tin['total_page'] && $tin['total_page'] > 1){
            ?>
            <li class="page-item"><a class="page-link" href="<?php echo 'index.php?ctl=Tin&act=getTin&page='?><?php echo ($tin['current_page'] + 1)?>&id=<?= $_GET['id']?>">Sau</a></li>
            <?php
        }
        ?>
    </u>
</div>