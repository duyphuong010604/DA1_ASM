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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí bình luận /</span>
                        Danh sách bình luận</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Danh sách bình luận</h5>
                        <div class="table-responsive text-nowrap p-1">
                            <table id="example" class="table mb-3">
                                <thead>
                                    <tr>
                                        <th>ID Bình luận</th>
                                        <th>Nội dung bình luận</th>
                                        <th>Tài khoảng bình luận</th>
                                        <th>Trả lời</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $commentList = $comment->get_list();
                                    foreach ($commentList as $row):
                                        extract($row);
                                        $detailComment = "routerAdmin.php?act=binhluan_chitiet&commentId=" . $commentId;
                                        $editComment = "routerAdmin.php?act=binhluan_sua&commentId=" . $commentId;
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $commentId ?>
                                                </strong>
                                            </td>
                                            <td>
                                                <?= $content ?>
                                            </td>

                                            <td>
                                                <? $userComment = $user->getByuserId($fk_userId);

                                                ?>
                                                <?= $userComment['username'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                $commentDetailList = $comment->get_list_admin($commentId);
                                                foreach ($commentDetailList as $item) {
                                                    
                                                    echo $item['traloi'];
                                                }
                                                ?>

                                            </td>
                                            <td><span class="badge 
                                                <? if ($status == 1)
                                                    echo 'bg-label-success';
                                                if ($status == 9)
                                                    echo 'bg-label-secondary';
                                                ?> me-1">
                                                    <? if ($status == 1)
                                                        echo 'Hiển thị';
                                                    if ($status == 9)
                                                        echo 'Ẩn'; ?>
                                                </span>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= $detailComment ?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href="<?= $editComment ?>"><i
                                                                class="bx bx-edit-alt me-1"></i>Trả lời bình luận & sửa trạng thái</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot class="table-border-bottom-0">
                                    <?php endforeach; ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap Table with Header - Footer -->


                </div>
                <!-- / Content -->

                <!-- Footer -->

                <!-- / Footer -->


            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>