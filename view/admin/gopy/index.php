<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
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
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../../contents/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../../contents/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Danh
                        sách góp ý từ khách hàng</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card ">
                        <h5 class="card-header">Danh sách góp ý từ khách hàng</h5>
                        <div class=" p-2 table-responsive text-nowrap">

                            <table class="table mb-2" id="example">
                                <thead>
                                    <tr>
                                        <th>ID góp ý</th>
                                        <th>Nội dung góp ý</th>
                                        <th>Email</th>
                                        <th>Tên khách hàng</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $feedbackList = $feedback->get_list();
                                    foreach ($feedbackList as $row) :
                                        extract($row);
                                        $editFeedback = "routerAdmin.php?act=gopy";
                                    ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $feedbackId ?>
                                                </strong></td>
                                            <td>
                                                <?= $content ?>
                                            </td>
                                            <td>
                                                <?= $email ?>
                                            </td>
                                            <td>
                                                <?= $name ?>
                                            </td>
                                            <td>
                                                <form action="<?= $editFeedback ?>" method="post">
                                                    <input type="hidden" value="<?= $feedbackId ?>" name="feedbackId">
                                                    
                                                    <select name="status" id="status" class='form-control border  <?=($status==1)?"border-success":"border-secondary";?>' >
                                                        <option value=1 <? if ($status == 1)
                                                                            echo "selected" ?>>Đã trả lời
                                                        </option>
                                                        <option value=9 <? if ($status == 9)
                                                                            echo "selected" ?>>Chưa trả lời
                                                        </option>
                                                    </select>
                                                    <button type="submit" class='btn btn-outline-success mt-1' name='luu'>Lưu</button>
                                                </form>


                                            </td>
                                        </tr>


                                    <? endforeach; ?>
                                    
                                    
                                </tbody>
                                <tfoot class="table-border-bottom-0">
                                <?php
                                                    if (isset($Note['true']))
                                                        echo "<br><span style='color: green;'>" . $Note['true'] . "</span><br>";
                                                    if (isset($Note['false']))
                                                        echo "<br><span style='color: red;'>" . $Note['false'] . "</span><br>"; ?>
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