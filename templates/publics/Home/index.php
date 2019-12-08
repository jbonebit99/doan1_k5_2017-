<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- post -->
            <?php
            while ($dong = mysqli_fetch_array($tm["tinmoi"])) {
                ?>
                <div class="col-md-6">
                    <div class="post post-thumb">
                        <a class="post-img"
                           href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $dong['idbaiviet'] . '&id=' . $dong['idloaitin'] ?>"><img
                                    src="<?= $dong['anhminhhoa'] ?>" alt="" width="555" height="333"></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category <?= $dong['maumenu'] ?>"
                                   href="<?= $dong['duongdan'] . '&id=' . $dong['idloaitin'] ?>"><?= $dong['tenloaitin'] ?></a>
                                <span class="post-date"><?= $dong['ngaytao'] ?></span>
                            </div>
                            <h3 class="post-title"><a
                                        href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $dong['idbaiviet'] . '&id=' . $dong['idloaitin'] ?>"><?= $dong['tenbaiviet'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <!-- /post -->

            <!-- post -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Bài gần đây</h2>
                </div>
            </div>

            <!-- post -->
            <?php
            while ($dongtrc = mysqli_fetch_array($tm["tinrc"])) {
                ?>
                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img"
                           href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $dongtrc['idbaiviet'] . '&id=' . $dongtrc['idloaitin'] ?>"><img
                                    src="<?= $dongtrc['anhminhhoa'] ?>" alt="" width="360" height="216"></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category <?= $dongtrc['maumenu'] ?>"
                                   href="<?= $dongtrc['duongdan'] . '&id=' . $dongtrc['idloaitin'] ?>"><?= $dongtrc['tenloaitin'] ?></a>
                                <span class="post-date"><?= $dongtrc['ngaytao'] ?></span>
                            </div>
                            <h3 class="post-title"><a
                                        href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet=' . $dongtrc['idbaiviet'] . '&id=' . $dongtrc['idloaitin'] ?>"><?= $dongtrc['tenbaiviet'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


            <!--            <div class="clearfix visible-md visible-lg"></div>-->


        </div>
        <!-- /row -->

        <!-- row -->

        <!-- /row -->
    </div>
    <!-- /container -->
</div>