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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí tài khoản người
                                dùng / Danh sách tài khoản người dùng </span>/ Sửa tài khoản người dùng</h4>

                        <!-- Basic Layout & Basic with Icons -->
                        <div class="row">

                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Chỉnh sửa tài khoản người dùng</h5>
                                        <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                    </div>
                                    <div class="card-body">
                                        <form action="../backend/khachhang-sua.php" method="post">
                                           
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="id_kh">ID Khách
                                                    hàng</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="id_kh" class="input-group-text"><i class='bx bx-id-card'></i></span>
                                                        <input type="text" class="form-control" id="id_kh"
                                                            aria-describedby="id_kh" required readonly name="id_kh"
                                                            value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="username">User Name</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="username" class="input-group-text"><i
                                                                class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="username"
                                                            placeholder="Nhập tên đăng nhập"
                                                            name="username"
                                                            value="" required readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="username">Ảnh đại diện</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge ">
                                                        <span id="username" class="input-group-text"><i class='bx bxs-image-alt' ></i></span>
                                                        <div class="border border-image ">
                                                            <img src="../../../uploads/images-logo/TULUNA PK.png" alt="" height='50px'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="password">Password</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span 
                                                            class="input-group-text"><i class='bx bx-text'></i></span>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Mật khẩu" name="password"
                                                            value="" required />
                                                        <span id="icon-hidden"
                                                            class="input-group-text">
                                                            <i class='bx bx-show' id="cu" onclick="changeTypePassword()"></i>
                                                        </span>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="ho">Họ và tên </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="ho" class="input-group-text"><i
                                                                class='bx bx-user-circle'></i></span>
                                                        <input type="text" class="form-control" id="ho"
                                                            placeholder="Họ và tên đệm" name="ho"
                                                            value="" required />
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="diachi">Địa chỉ</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="diachi" class="input-group-text"><i
                                                                class="bx bx-buildings"></i></span>
                                                        <input type="text" id="diachi" class="form-control"
                                                            placeholder="ACME Inc." aria-label="ACME Inc."
                                                            aria-describedby="diachi" name="diachi"
                                                            value="" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                class="bx bx-envelope"></i></span>
                                                        <input type="text" id="email" class="form-control"
                                                            placeholder="email" aria-label="email"
                                                            aria-describedby="email" name="email"
                                                            value="" required />
                                                        <span id="email" class="input-group-text">@example.com</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="sdt">Số điện
                                                    thoại</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="sdt" class="input-group-text"><i
                                                                class="bx bx-phone"></i></span>
                                                        <input type="number" minlength="10" maxlength="10" id="sdt"
                                                            class="form-control phone-mask" placeholder="658 799 8941"
                                                            aria-label="658 799 8941" aria-describedby="sdt" name="sdt"
                                                            value="" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="date">Ngày sinh</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="sdt" class="input-group-text"><i class='bx bx-calendar' ></i></span>
                                                        <input type="date" name='date' placeholder='Ngày sinh' class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="trangthai ">Trạng
                                                    thái</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="trangthai " class="input-group-text"><i
                                                                class='bx bx-list-ul'></i></span>
                                                        <select name="trangthai" id="trangthai"
                                                            class="form-control form-select" required>
                                                            <option selected disabled>Chọn</option>
                                                            <option class="form-control" value="Cho phép">
                                                                Cho phép</option>
                                                            <option class="form-control" value="Chặn" >Chặn
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="luu">Lưu</button>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
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
    <script>
    function changeTypePassword() {
      document.getElementById('password').type = document.getElementById('password').type == 'text' ? 'password' : 'text';
      
    }
  </script>
</body>

</html>