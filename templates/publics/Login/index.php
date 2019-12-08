<div class="modal" id="login-modal" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog custom_modeldialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Đăng nhập</h3>
<!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->
            </div>
            <div class="modal-body">
                <form role="form" action="index.php?ctl=TaiKhoan&act=Login" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Tài Khoản" name="username" type="text"
                                   autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mật Khẩu" name="password"
                                   type="password"
                                   value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Nhớ mật khẩu
                            </label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit" name="sumit"
                                value="sumit">Đăng nhập
                        </button>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>


<!--<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
<!--     style="display: none">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-4">-->
<!--                    <div class="login-panel panel panel-default">-->
<!--                        <div class="panel-heading">-->
<!--                            <h3 class="panel-title">Đăng nhập</h3>-->
<!--                        </div>-->
<!--                        <div class="panel-body">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

