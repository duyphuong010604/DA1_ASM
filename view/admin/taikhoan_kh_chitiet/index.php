<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

          

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí tài khoản người
                            dùng / Danh sách quản lí tài khoản người dùng </span>/ Thông tin chi tiết tài
                        khoản</h4>


                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Thông tin chi tiết tài khoản </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>Thông tin</th>
                                        <th>Thông tin tài khoản</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $userId = $_GET['userId'];
                                    $userDetail = $user->getByuserId($userId);
                                    extract($userDetail);
                                    $editUser = "routerAdmin.php?act=taikhoan_kh_sua&userId=" . $userId;
                                    $deleteUser = "routerAdmin.php?act=taikhoan_kh_xoa&userId=" . $userId;
                                    ?>
                                    <tr>
                                        <td>ID tài khoản</td>
                                        <td>
                                            <?= $userId ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User name</td>
                                        <td>
                                            <?= $username ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Họ và tên</td>
                                        <td>
                                            <?= $fullname ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ảnh đại diện</td>
                                        <td>
                                        <?php
                                            if (!empty($image)):
                                                ?>
                                                <img src="<?= $UPLOAD_IMG_URL ?>/users/<?= $image ?>" alt=""
                                                    width="60px" height="60px">
                                            <? else: ?>
                                                Không có ảnh đại diện
                                            <? endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            <?= $password ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <?= $email ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>
                                            <?= $phone ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>
                                            <?= $address ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Trạng thái</td>
                                        <td><span class="badge 
                                                <? if ($status == 1)
                                                    echo 'bg-label-success';
                                                if ($status == 9)
                                                    echo 'bg-label-secondary';
                                                ?> me-1">
                                                <? if ($status == 1)
                                                    echo 'Cho phép';
                                                if ($status == 9)
                                                    echo 'Chặn'; ?>
                                            </span></td>
                                    </tr>


                                </tbody>
                                <tfoot class="table-border-bottom-0 bg-secondary opacity-15 text-white fw-bold">
                                    <tr>
                                        <td>Tùy chọn</td>
                                        <td>
                                            <a href="<?= $editUser ?>">
                                                <button class="btn btn-outline-success"><i
                                                        class='bx bx-message-square-edit'></i></button>
                                            </a>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-xoatk">
                                                <button class="btn btn-outline-danger"><i
                                                        class='bx bx-message-square-x'></i></button>
                                            </a>

                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap Table with Header - Footer -->
                </div>
                <!-- / Content -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal-xoatk" tabindex="-1" aria-labelledby="exampleModalLabel-xoatk"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xóa Tài khoản khách hàng</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading fw-bold mb-1">Bạn chắc chắn muốn
                                                    xóa
                                                    tài khoản khách hàng?</h6>
                                                <p class="mb-0">Nếu chắc chắn hãy tích vào ô bên dưới.
                                                </p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" action='<?= $deleteUser ?>' method="post">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                                    id="accountActivation" required />
                                                <label class="form-check-label" for="accountActivation">Tôi
                                                    đồng ý
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