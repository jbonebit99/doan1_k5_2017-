<?php
if (is_array($getChiTiet) || is_object($getChiTiet)) {
foreach ($getChiTiet as $item) {
?>
<header id="header">

    <div id="post-header" class="page-header">
        <div class="background-img" style="background-image: url('./img/post-page.jpg');"></div>
        <div class="container">
            <div class="row">

                        <div class="col-md-10">
                            <div class="post-meta">
                                <a class="post-category <?=$item['maumenu']?>" href="<?= $item['duongdan']?>&id=<?= $item['idloaitin']?>"><?= $item['tenloaitin']?></a>
                                <span class="post-date"><?= $item['ngaytao']?></span>
                            </div>
                            <h1><?= $item['tenbaiviet']?></h1>
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
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post text-justify">
                        <?php
                  echo $item['noidung'];
                        ?>
                    </div>
                    <div class="post-shares sticky-shares">
                        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <div class="section-row">
                    <div class="post-author">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="./img/author.png" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h3>Admin</h3>
                                </div>
                                <p></p>
                                <ul class="author-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-row">
                    <h3>Bình Luận</h3>
                    <form action="index.php?ctl=BinhLuan&idbaiviet=<?= $item['idbaiviet']?>&id=<?=$item['idloaitin'] ?>" method="post">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <span>Họ Tên</span>
                                    <input class="input" type="text" name="hoten">
                                </div>
                                <div class="form-group">
                                    <span>Email</span>
                                    <input class="input" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <textarea class="input" name="noidung" placeholder="Nhập bình luận"></textarea>
                                </div>
                                <button type="submit" class="primary-button" name="submit" id="submit" value="submit">Gửi</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    }
                    }
                    ?>
                </div>
                <?php
                $BLCtrl = new BinhLuanController();
                $BLCtrl->XemBinhLuan();
                ?>
            </div>
            <div class="col-md-4">
                <!-- ad -->
<!--                <div class="aside-widget text-center">-->
<!--                    <a href="#" style="display: inline-block;margin: auto;">-->
<!--                        <img class="img-responsive" src="./img/ad-1.jpg" alt="">-->
<!--                    </a>-->
<!--                </div>-->
                <!-- /ad -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Tin mới</h2>
                    </div>
                    <?php
                    $TCtrl = new TinController();
                    $TCtrl->getTinCapNhat();
                    ?>
                </div>
                <!-- /post widget -->

                <!-- tags -->
                <div class="aside-widget">
                    <div class="tags-widget">
                        <ul>
                            <li><a href="#">Chrome</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Backend</a></li>
                            <li><a href="#">JQuery</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">Website</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /tags -->

            </div>
        </div>
    </div>
</div>


