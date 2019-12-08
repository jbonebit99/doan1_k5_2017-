<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN - Tech News</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=ROOT_ASSETS."/"?>css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=ROOT_ASSETS."/"?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

    <script src="https://cdn.ckeditor.com/4.13.0/standard-all/ckeditor.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">TechNews</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="<?= ROOT_URL?>" target="_blank"><i class="fa fa-home fa-fw"></i> View Website</a></li>
        </ul>

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                    <i class="fa fa-user fa-fw"></i> <?= $_SESSION["user_info"]?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="index.php?ctl=Account&act=Logout"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
<!--                    <li class="sidebar-search">-->
<!--                        <div class="input-group custom-search-form">-->
<!--                            <input type="text" class="form-control" placeholder="Search...">-->
<!--                            <span class="input-group-btn">-->
<!--                                        <button class="btn btn-primary" type="button">-->
<!--                                            <i class="fa fa-search"></i>-->
<!--                                        </button>-->
<!--                                </span>-->
<!--                        </div>-->
<!--                         /input-group -->
<!--                    </li>-->
                    <li>
                        <a href="index.php?ctl=Home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Biểu Đồ<span class="fa arrow"></span></a>
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li>-->
<!--                                <a href="">Null</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="">Null</a>-->
<!--                            </li>-->
<!--                        </ul>-->
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="index.php?ctl=Home&act=BangDuLieu"><i class="fa fa-table fa-fw"></i> Bảng</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>-->
<!--                    </li>-->
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Quản lý<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?ctl=BaiViet">Bài Viết</a>
                            </li>
                            <li>
                                <a href="index.php?ctl=LoaiTin">Loại Tin</a>
                            </li>
                            <li>
                                <a href="index.php?ctl=QLBinhLuan">Bình Luận</a>
                            </li>
                            <li>
                                <a href="index.php?ctl=QLMailLienHe">Mail Liên Hệ</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span-->
<!--                                    class="fa arrow"></span></a>-->
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li>-->
<!--                                <a href="#">Second Level Item</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Second Level Item</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level <span class="fa arrow"></span></a>-->
<!--                                <ul class="nav nav-third-level">-->
<!--                                    <li>-->
<!--                                        <a href="#">Third Level Item</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#">Third Level Item</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#">Third Level Item</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#">Third Level Item</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                 /.nav-third-level -->
<!--                            </li>-->
<!--                        </ul>-->
<!--                         /.nav-second-level -->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>-->
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li>-->
<!--                                <a href="blank.html">Blank Page</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="login.html">Login Page</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                         /.nav-second-level -->
<!--                    </li>-->
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
<?php
    require_once HOME_CONTROLLER.DS."Router.php";
?>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?=ROOT_ASSETS."/"?>js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=ROOT_ASSETS."/"?>js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=ROOT_ASSETS."/"?>js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?=ROOT_ASSETS."/"?>js/raphael.min.js"></script>
<!--<script src="--><?//=ROOT_ASSETS."/"?><!--js/morris.min.js"></script>-->
<!--<script src="--><?//=ROOT_ASSETS."/"?><!--js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="<?=ROOT_ASSETS."/"?>js/startmin.js"></script>
<!-- DataTables JavaScript -->
<script src="<?=ROOT_ASSETS."/"?>js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?=ROOT_ASSETS."/"?>js/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?= ROOT_ASSETS ."/"?>js/script.js"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "lengthMenu": "Hiển thị _MENU_ kết quả",
                "zeroRecords": "Không có kết quả",
                "info": "Trang _PAGE_ trên tổng số _PAGES_",
                "infoEmpty": "Không có gì ở đây!",
                "infoFiltered": "(Đã lọc _MAX_ kết quả)",
                "paginate": {
                    "first":      "Đầu",
                    "last":       "Cuối",
                    "next":       "Sau",
                    "previous":   "Trước"
                },
                "search":         "Tìm kiếm:",
                "emptyTable":     "Không có dữ liệu",
            }
        });
    });
</script>

</body>
</html>
