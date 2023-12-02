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
                                                    <img src="<?= $CONTENT_URL ?>/admin/assets/img/avatars/1.png" alt
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    array("y" => 3373.64, "label" => "Germany"),
                                    array("y" => 2435.94, "label" => "France"),
                                    array("y" => 1842.55, "label" => "China"),
                                    array("y" => 1828.55, "label" => "Russia"),
                                    array("y" => 1039.99, "label" => "Switzerland"),
                                    array("y" => 765.215, "label" => "Japan"),
                                    array("y" => 612.453, "label" => "Netherlands")
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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



            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
</div>



<!-- Place this tag in your head or just before your close body tag. -->

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
            theme: "light2",
            title: {
                text: "Số lượt mua hàng"
            },
            axisY: {
                title: ""
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.## tonnes",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }]
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