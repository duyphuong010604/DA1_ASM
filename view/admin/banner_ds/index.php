<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../../contents/admin/assets/" data-template="vertical-menu-template-free">

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
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../../contents/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../contents/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../contents/admin/assets/js/config.js"></script>
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
                                        <img src="../../../contents/admin/assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../../contents/admin/assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí Banner
                                /</span> Danh
                            sách Banner</h4>

                        <!-- Bootstrap Table with Header - Footer -->
                        <div class="card ">
                            <h5 class="card-header">Danh sách Banner</h5>
                            <div class=" p-2 table-responsive text-nowrap">

                                <table class="table mb-2" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID Banner</th>
                                            <th>Tiêu đề Banner</th>
                                            <th>Trạng thái</th>
                                            <th>Tùy chọn</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>

                                                </strong></td>
                                            <td>

                                            </td>

                                            <td><span class="badge   me-1">

                                                </span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href=""><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href=""><i
                                                                class="bx bx-edit-alt me-1"></i>Sửa</a>
                                                        <a class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-xoabanner" href=""><i
                                                                class="bx bx-trash me-1"></i> Xóa</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>



                                    </tbody>
                                    <tfoot class="table-border-bottom-0">

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- Bootstrap Table with Header - Footer -->


                    </div>
                    <!-- / Content -->

                    <!-- Footer -->

                    <!-- / Footer -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-xoabanner" tabindex="-1"
                        aria-labelledby="exampleModalLabel-xoabanner" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Xóa Banner</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3 col-12 mb-0">
                                                <div class="alert alert-warning">
                                                    <h6 class="alert-heading fw-bold mb-1">Bạn chắc chắn muốn xóa
                                                    Banner?</h6>
                                                    <p class="mb-0">Nếu chắc chắn hãy tích vào ô bên dưới.</p>
                                                </div>
                                            </div>
                                            <form id="formAccountDeactivation">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="accountActivation" id="accountActivation" />
                                                    <label class="form-check-label" for="accountActivation">Tôi đồng ý
                                                        xóa !</label>
                                                </div>
                                                <button type="submit" class="btn btn-danger deactivate-account">Xóa
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->

    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../../contents/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../../contents/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../../contents/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="../../../contents/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../../contents/admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../../contents/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../../contents/admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../../contents/admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>