<header id="header">
    <!-- Nav -->
    <div id="nav">
        <!-- Main Nav -->
        <div id="nav-fixed">
            <div class="container">
                <!-- logo -->
                <div class="nav-logo">
                    <a href="<?= ROOT_URL ?>" class="logo"><img src="<?= ROOT_URL ?>/img/lgo.png" alt=""></a>
                </div>
                <!-- /logo -->
                <!-- nav -->
                <ul class="nav-menu nav navbar-nav">
                    <li class="cat-4"><a href="<?= ROOT_URL ?>">Trang chủ</a></li>
                    <?php
                    while ($dong = mysqli_fetch_array($menus["data"])) {
                        ?>
                        <li class="<?= $dong['maumenu'] ?>"><a
                                    href="<?= $dong['duongdan'] ?>&id=<?= $dong['idloaitin'] ?> "><?= $dong['tenloaitin'] ?></a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="cat-3"><a href="index.php?ctl=GioiThieu">Giới thiệu</a></li>
                </ul>
                <!-- /nav -->
                <!-- search & aside toggle -->
                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <form action="" class="search-form" id="search-form" method="post">
                        <input class="search-input" type="text" name="search" placeholder="Nhập để tìm kiếm ...">
                        <button type="button" class="search-close"><i class="fa fa-times"></i></button>
                        <button class="search-submit" type="submit" name="submit"
                                formaction="index.php?ctl=TimKiem&act=TimKiem"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /search & aside toggle -->
            </div>
        </div>
        <!-- /Main Nav -->

        <!-- Aside Nav -->
        <div id="nav-aside">
            <!-- nav -->
            <div class="section-row">
                <ul class="nav-aside-menu">
                    <li><a href="<?= ROOT_URL ?>">Trang chủ</a></li>
                    <?php
                    foreach ($menus["data"] as $item) {
                        ?>
                        <li class="cat-1"><a
                                    href="<?= $item['duongdan'] ?>&id=<?= $item['idloaitin'] ?> "><?= $item['tenloaitin'] ?></a>
                        </li>
                        <?php
                    }
                    ?>
                    <li><a href="index.php?ctl=GioiThieu">Giới thiệu</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li>
                </ul>
            </div>
            <!-- /nav -->
            <!--widget posts -->
            <div class="section-row">

            </div>
            <!-- /widget posts -->

            <!-- social links -->
            <div class="section-row">
                <h3>Theo dõi chúng tôi</h3>
                <ul class="nav-aside-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
            <!-- /social links -->
            <!-- aside nav close -->
            <button class="nav-aside-close"><i class="fa fa-times"></i></button>
            <!-- /aside nav close -->
        </div>
        <!-- Aside Nav -->
    </div>
    <!-- /Nav -->
</header>
<!-- /Header -->

