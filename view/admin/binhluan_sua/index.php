
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
           
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí bình luận / Danh
                                sách bình luận </span>/ Sửa bình luận</h4>

                        <!-- Basic Layout & Basic with Icons -->
                        <div class="row">

                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Chỉnh sửa bình luận</h5>
                                        <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method='post'>
                       
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="content">Nội dung bình
                                                    luận</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="content" class="input-group-text"><i
                                                                class='bx bx-text'></i></span>
                                                        <input type="text" class="form-control" id="content"
                                                            placeholder="Nhập nội dung" name="content"
                                                            value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="traloi">Trả lời bình
                                                    luận</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                
                                                    <span id="traloi" class="input-group-text"><i
                                                                class='bx bx-text'></i></span>
                                                        <input type="text" class="form-control" id="traloi"
                                                            placeholder="Nhập nội dung trả lời" name="traloi"
                                                            value="" />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="trangthai_bl">Trạng
                                                    thái</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="trangthai_bl" class="input-group-text"><i
                                                                class='bx bx-list-ul'></i></span>
                                                        <select name="trangthai_bl" id="trangthai_bl"
                                                            class="form-control form-select">
                                                            <option disabled>Chọn</option>
                                                            <option class="form-control" value="Hiển thị"
                                                                value="Hiển thị">Hiển thị</option>
                                                            <option class="form-control" value="Ẩn" value="Ẩn">
                                                                Ẩn</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary"
                                                        name='luu'>Lưu</button>
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

   