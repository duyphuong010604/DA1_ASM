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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí khuyến mãi / Danh
                            sách quản lí khuyến mãi </span>/ Thông tin chi tiết khuyến mãi</h4>


                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Thông tin chi tiết khuyến mãi </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>Thông tin</th>
                                        <th>Thông tin khuyến mãi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $promotionId = $_GET['promotionId'];
                                    $promotionDetail = $promotion->getBypromotionId($promotionId);
                                    extract($promotionDetail);
                                    $editPromotion = "routerAdmin.php?act=khuyenmai_sua&promotionId=" . $promotionId;
                                    $deletePromotion = "routerAdmin.php?act=khuyenmai_xoa&promotionId=" . $promotionId;
                                    ?>
                                    <tr>
                                        <td>ID Khuyến mãi</td>
                                        <td>
                                            <?= $promotionId ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tên Khuyến mãi</td>
                                        <td>
                                            <?= $name ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Giảm</td>
                                        <td>
                                            <?= number_format($discount) ?>
                                            <?php
                                            if ($promotionType == 1)
                                                echo "VNĐ";
                                            if ($promotionType == 9)
                                                echo "%";
                                            ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ngày bất đầu</td>
                                        <td>
                                            <?= $starTime ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ngày kết thúc</td>
                                        <td>
                                            <?= $endTime ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Giá giảm theo
                                        </td>
                                        <td>
                                            <?php
                                            if ($promotionType == 1)
                                                echo "VNĐ";
                                            if ($promotionType == 9)
                                                echo "%";
                                            ?>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Điều kiện tổng hóa đơn từ</td>

                                        <td>
                                            <?= number_format($conditionDiscount) ?> VNĐ
                                        </td>
                                    </tr>
                                    <tr></tr>

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
                                <tfoot class="table-border-bottom-0 bg-secondary opacity-75 text-white fw-bold">
                                    <tr>
                                        <td>Tùy chọn</td>
                                        <td>
                                            <a href="<?= $editPromotion ?>">
                                                <button class="btn btn-outline-success"><i
                                                        class='bx bx-message-square-edit'></i></button>
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#exampleModal_km">
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
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal_km" tabindex="-1" aria-labelledby="exampleModalLabel_km"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa khuyến mãi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 col-12 mb-0">
                                <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Bạn chắc chắn muốn xóa
                                        khuyến mãi?</h6>
                                    <p class="mb-0">Nếu chắc chắn hãy tích vào ô bên dưới.</p>
                                </div>
                            </div>
                            <form id="formAccountDeactivation" action="<?= $deletePromotion ?>" method="post">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="accountActivation"
                                        id="accountActivation" required />
                                    <label class="form-check-label" for="accountActivation">Tôi đồng ý
                                        xóa !</label>
                                </div>
                                <button type="submit" class="btn btn-danger deactivate-account" name="xoa">Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Overlay -->

</div>