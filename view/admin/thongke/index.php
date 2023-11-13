<?php require "../../../global.php"; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="<?= $CONTENT_URL ?>/admin/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ADMIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../uploads/images-logo/ADMIN.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img class="img" src="../../../uploads/images-logo/ADMIN.png" alt="logo" width="42px"
                                height="42px">
                        </span>
                        <div class="text-logo">
                            <span class="app-brand-text demo menu-text fw-bolder ms-2">BORCELLE</span>
                            <span class=" text-admin ps-1">Admin</span>
                        </div>
                    </a>


                </div>



                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Bảng điều khiển</div>
                        </a>
                    </li>


                    <!-- Quản lí -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Quản lí</span>
                    </li>
                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Tài khoản người dùng</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <div data-i18n="Tables">Danh sách tài khoản</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="them_taikhoannguoidung.php" class="menu-link">
                                    <div data-i18n="Tables">Thêm mới tài khoản</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Tables">Loại sản phẩm</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="danhsach_loaisp.php" class="menu-link">
                                    <div data-i18n="Tables">Danh sách loại sản phẩm</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="them_loaisp.php" class="menu-link">
                                    <div data-i18n="Tables">Thêm mới loại sản phẩm</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Tables">Thương hiệu</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="danhsach_loaisp.php" class="menu-link">
                                    <div data-i18n="Tables">Danh sách thương hiệu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="them_loaisp.php" class="menu-link">
                                    <div data-i18n="Tables">Thêm mới thương hiệu</div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Tables">Sản phẩm</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="danhsach_sanpham.php" class="menu-link">
                                    <div data-i18n="Tables">Danh sách sản phẩm</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="them_sanpham.php" class="menu-link">
                                    <div data-i18n="Tables">Thêm mới sản phẩm</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Tables">Bình luận </div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="danhsach_binhluan.php" class="menu-link">
                                    <div data-i18n="Tables">Danh sách bình luận</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Hóa đơn</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <div data-i18n="Tables">Danh sách hóa đơn</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Banner</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <div data-i18n="Tables">Danh sách Banner</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <div data-i18n="Tables">Thêm mới Banner</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Mã khuyến mãi</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <div data-i18n="Tables">Danh sách mã khuyến mãi</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <div data-i18n="Tables">Thêm mới mã khuyến mãi</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Thống kê  -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Thống kê</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Thống kê</div>
                        </a>
                    </li>

                    <!-- Góp ý -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Góp ý</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Danh sách góp ý từ khách hàng</div>
                        </a>
                    </li>

                    <!-- Thông báo -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Thông báo</span>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Danh sách thông báo</div>
                        </a>
                    </li>


                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?= $CONTENT_URL ?>/admin/assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?= $CONTENT_URL ?>/admin/assets/img/avatars/1.png"
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Thông tin tài khoản</span>
                                        </a>
                                    </li>


                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Đăng xuất</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 col-sm-4 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/chart-success.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Doanh thu</span>
                                        <h3 class="card-title mb-2">$12,628</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                            +72.80%</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/wallet-info.png"
                                                    alt="Credit Card" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Gía trị kho</span>
                                        <h3 class="card-title mb-2">$12,628</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                            +72.80%</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/loinhuan.png"
                                                    alt="Credit Card" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Lợi nhuận</span>
                                        <h3 class="card-title mb-2">$12,628</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                            +72.80%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 pt-2">
                                <div class="card">
                                    <div class="card-header header-elements">
                                        <h5 class="card-title mb-0">Biểu đồ thống kê</h5>
                                    </div>
                                    <!-- dứ liệu -->
                                    <?php

                                    $dataPoints1 = array(
                                        array("x" => 1451586600000, "y" => 96.709),
                                        array("x" => 1454265000000, "y" => 94.918),
                                        array("x" => 1456770600000, "y" => 95.152),
                                        array("x" => 1459449000000, "y" => 97.070),
                                        array("x" => 1462041000000, "y" => 97.305),
                                        array("x" => 1464719400000, "y" => 89.854),
                                        array("x" => 1467311400000, "y" => 88.158),
                                        array("x" => 1469989800000, "y" => 87.989),
                                        array("x" => 1472668200000, "y" => 86.366),
                                        array("x" => 1475260200000, "y" => 81.650),
                                        array("x" => 1477938600000, "y" => 85.789),
                                        array("x" => 1480530600000, "y" => 83.846),
                                        array("x" => 1483209000000, "y" => 84.927),
                                        array("x" => 1485887400000, "y" => 82.609),
                                        array("x" => 1488306600000, "y" => 81.428),
                                        array("x" => 1490985000000, "y" => 83.259),
                                        array("x" => 1493577000000, "y" => 83.153),
                                        array("x" => 1496255400000, "y" => 84.180),
                                        array("x" => 1498847400000, "y" => 84.840),
                                        array("x" => 1501525800000, "y" => 82.671),
                                        array("x" => 1504204200000, "y" => 87.496),
                                        array("x" => 1506796200000, "y" => 86.007),
                                        array("x" => 1509474600000, "y" => 87.233),
                                        array("x" => 1512066600000, "y" => 86.276)
                                    );

                                    $dataPoints2 = array(
                                        array("x" => 1451586600000, "y" => 73.5555),
                                        array("x" => 1454265000000, "y" => 74.1625),
                                        array("x" => 1456770600000, "y" => 75.3980),
                                        array("x" => 1459449000000, "y" => 76.0965),
                                        array("x" => 1462041000000, "y" => 74.8165),
                                        array("x" => 1464719400000, "y" => 74.9660),
                                        array("x" => 1467311400000, "y" => 74.4805),
                                        array("x" => 1469989800000, "y" => 74.7355),
                                        array("x" => 1472668200000, "y" => 74.8155),
                                        array("x" => 1475260200000, "y" => 73.2275),
                                        array("x" => 1477938600000, "y" => 72.6315),
                                        array("x" => 1480530600000, "y" => 71.4610),
                                        array("x" => 1483209000000, "y" => 72.9025),
                                        array("x" => 1485887400000, "y" => 70.5750),
                                        array("x" => 1488306600000, "y" => 69.0955),
                                        array("x" => 1490985000000, "y" => 70.0565),
                                        array("x" => 1493577000000, "y" => 72.5320),
                                        array("x" => 1496255400000, "y" => 73.8350),
                                        array("x" => 1498847400000, "y" => 76.0255),
                                        array("x" => 1501525800000, "y" => 76.1465),
                                        array("x" => 1504204200000, "y" => 77.1570),
                                        array("x" => 1506796200000, "y" => 75.4075),
                                        array("x" => 1509474600000, "y" => 76.7690),
                                        array("x" => 1512066600000, "y" => 76.5950)
                                    );

                                    $dataPoints3 = array(
                                        array("x" => 1451586600000, "y" => 73.5555),
                                        array("x" => 1454265000000, "y" => 74.1625),
                                        array("x" => 1456770600000, "y" => 75.3980),
                                        array("x" => 1459449000000, "y" => 76.0965),
                                        array("x" => 1462041000000, "y" => 74.8165),
                                        array("x" => 1464719400000, "y" => 74.9660),
                                        array("x" => 1467311400000, "y" => 74.4805),
                                        array("x" => 1469989800000, "y" => 74.7355),
                                        array("x" => 1472668200000, "y" => 74.8155),
                                        array("x" => 1475260200000, "y" => 73.2275),
                                        array("x" => 1477938600000, "y" => 72.6315),
                                        array("x" => 1480530600000, "y" => 71.4610),
                                        array("x" => 1483209000000, "y" => 72.9025),
                                        array("x" => 1485887400000, "y" => 70.5750),
                                        array("x" => 1488306600000, "y" => 69.0955),
                                        array("x" => 1490985000000, "y" => 70.0565),
                                        array("x" => 1493577000000, "y" => 72.5320),
                                        array("x" => 1496255400000, "y" => 73.8350),
                                        array("x" => 1498847400000, "y" => 76.0255),
                                        array("x" => 1501525800000, "y" => 76.1465),
                                        array("x" => 1504204200000, "y" => 77.1570),
                                        array("x" => 1506796200000, "y" => 75.4075),
                                        array("x" => 1509474600000, "y" => 76.7690),
                                        array("x" => 1512066600000, "y" => 76.5950)
                                    );

                                    ?>
                                    <div class="card-body pt-2">
                                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-sm-3 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/group.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Số lượng tài khoảng </span>
                                        <h3 class="card-title mb-2">100 tài khoản</h3>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-3 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/box (1).png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Số lượng sản phẩm</span>
                                        <h3 class="card-title mb-2">100 sản phẩm</h3>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-3 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/carousel.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Số lượng loại sản phẩm</span>
                                        <h3 class="card-title mb-2">10 loại sản phẩm</h3>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-3 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/blogger.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Số lượng thương hiệu</span>
                                        <h3 class="card-title mb-2">10 thương hiệu</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-12 pt-2">
                                <div class="card">
                                    <div class="card-header header-elements">
                                        <h5 class="card-title mb-0">Biểu đồ thống kê phần trăm loại sản phẩm</h5>
                                    </div>
                                    <!-- dứ liệu -->
                                    <?php

                                    $dataPoints = array(
                                        array("label" => "Chrome", "y" => 64.02),
                                        array("label" => "Firefox", "y" => 12.55),
                                        array("label" => "IE", "y" => 8.47),
                                        array("label" => "Safari", "y" => 6.08),
                                        array("label" => "Edge", "y" => 4.29),
                                        array("label" => "Others", "y" => 4.59)
                                    )
                                        ?>
                                    <div class="card-body pt-2">
                                        <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-sm-4 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/sigma.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Gía sản phẩm trung bình</span>
                                        <h3 class="card-title mb-2">100.000VNĐ</h3>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/sigma1.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Gía sản phẩm cao nhất</span>
                                        <h3 class="card-title mb-2">100.000VNĐ</h3>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 pt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/sigma1.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </button>
                                            </div>
                                        </div>
                                        <span class="fw-bold d-block mb-1">Gía sản phẩm thấp nhất</span>
                                        <h3 class="card-title mb-2">100.000VNĐ</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column align-items-center">
                            <div class="text-footer">


                                <a href="#" class="footer-link fw-bolder">
                                    <img src="../../../uploads/images-logo/TULUNA PK_HE.png" alt="">
                                    TULUNA PK SHOP
                                </a>
                            </div>
                            <div class="mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank"
                                    class="footer-link fw-bolder">ThemeSelection</a>

                            </div>


                        </div>
                    </footer>
                    <!-- / Footer -->

                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

    <script>
        window.onload = function () {


            var chart1 = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                title: {
                    text: "Tỷ lệ các loại sản phẩm"
                },
                subtitles: [{
                    text: "Sản phẩm hiện tại được hiển thị"
                }],
                data: [{
                    type: "pie",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabel: "{label} ({y})",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart1.render();


            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Biểu đồ doanh số"
                },
                subtitles: [{
                    text: "Doanh thu & Giá trị kho & Lợi nhuận",
                    fontSize: 18
                }],
                axisY: {
                    prefix: "đ"
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                toolTip: {
                    shared: true
                },
                data: [
                    {
                        type: "area",
                        name: "GBP",
                        showInLegend: "true",
                        xValueType: "dateTime",
                        xValueFormatString: "DD MM YYYY",
                        yValueFormatString: "đ#,##0.##",
                        dataPoints: <?php echo json_encode($dataPoints1); ?>
                    },
                    {
                        type: "area",
                        name: "EUR",
                        showInLegend: "true",
                        xValueType: "dateTime",
                        xValueFormatString: "DD MM YYYY",
                        yValueFormatString: "đ#,##0.##",
                        dataPoints: <?php echo json_encode($dataPoints2); ?>
                    },
                    {
                        type: "area",
                        name: "Aloalo",
                        showInLegend: "true",
                        xValueType: "dateTime",
                        xValueFormatString: "DD MM YYYY",
                        yValueFormatString: "đ#,##0.##",
                        dataPoints: <?php echo json_encode($dataPoints3); ?>
                    }
                ]
            });

            chart.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
    </script>


</body>

</html>