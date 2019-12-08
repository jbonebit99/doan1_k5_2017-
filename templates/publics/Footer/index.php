<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="<?= ROOT_URL?>" class="logo"><img src="<?=ROOT_URL?>/img/lgo.png" alt=""></a>
                    </div>
                    <ul class="footer-nav">
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Quảng cáo</a></li>
                    </ul>
                    <div class="footer-copyright">
                        <span>Trường Đại Học Kỹ Thuật Công Nghệ Cần Thơ - Kỹ Thuật Phần Mềm 0217 - Khóa 5 </span>
                        <br>
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-title">Giới thiệu</h3>
                            <ul class="footer-links">

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-title">Loại Tin</h3>
                            <ul class="footer-links">

                                <?php
                                while  ($dong = mysqli_fetch_assoc($footer["data"]))
                                {
                                    ?>
                                    <li><a href="<?= $dong['duongdan']?>&id=<?= $dong['idloaitin']?>"><?= $dong['tenloaitin']?></a></li>
                                    <?php
                                        }
                                     ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Tham gia với chúng tôi</h3>
                    <div class="footer-newsletter">
                        <form action="index.php?ctl=LienHe" method="post">
                            <input class="input" type="email" name="email" placeholder="Nhập Email của bạn">
                            <button type="submit" class="newsletter-btn" name="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
