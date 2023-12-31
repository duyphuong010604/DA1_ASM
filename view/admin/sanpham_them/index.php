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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí sản phẩm </span>/
                        Thêm mới sản phẩm</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Thêm mới sản phẩm</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <form action="<?= $ROOT_URL ?>/routerAdmin.php?act=sanpham_them" method="post"
                                        enctype="multipart/form-data">


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Tên sản phẩm</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="name" class="input-group-text"><i
                                                            class='bx bxl-product-hunt'></i></span>
                                                    <input type="text" class="form-control" id="name"
                                                        aria-describedby="name" name="name"
                                                        placeholder="Tên sản phẩm" />
                                                </div>
                                                <?php
                                                if (isset($errors['name']))
                                                    echo "<br><span style='color: red;'>" . $errors['name'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <?php
                                            $categoryList = $product->get_list_category();
                                            ?>
                                            <label class="col-sm-2 col-form-label" for="fk_categoryId">Thuộc loại sản
                                                phẩm</label>
                                            <div class="col-sm-10">
                                               
                                                <div class="input-group input-group-merge">
                                                    <span id="fk_categoryId" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="fk_categoryId" id="fk_categoryId"
                                                        class="form-control form-select">
                                                        <option disabled>Chọn</option>
                                                        <? foreach($categoryList as $categoryRow):?>
                                                        <option class="form-control" value=<?=$categoryRow['categoryId']?>>
                                                            <?=$categoryRow['name']?>
                                                        </option>
                                                        <?endforeach;?>
                                                    </select>
                                                </div>
                                               
                                                <?php
                                                if (isset($errors['fk_categoryId']))
                                                    echo "<br><span style='color: red;'>" . $errors['fk_categoryId'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <?php
                                            $brandList = $product->get_list_brand();
                                            ?>
                                            <label class="col-sm-2 col-form-label" for="fk_brandId">Thuộc thương
                                                hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="trangthai" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="fk_brandId" id="fk_brandId"
                                                        class="form-control form-select">
                                                        <option disabled>Chọn</option>
                                                        <?php
                                                        foreach ( $brandList as $brandRow):
                                                            ?>
                                                            <option class="form-control"
                                                                value='<?= $brandRow['brandId'] ?>'>
                                                                <?= $brandRow['name'] ?>
                                                            </option>
                                                        <? endforeach; ?>
                                                    </select>

                                                </div>
                                                <?php
                                                if (isset($errors['fk_brandId']))
                                                    echo "<br><span style='color: red;'>" . $errors['fk_brandId'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="image">Hình ảnh</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-password" class="input-group-text"><i
                                                            class='bx bx-image-alt'></i></span>

                                                    <input type="file" class="form-control" id="image" name="image" />
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="price">Giá</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="price" class="input-group-text"><i
                                                            class='bx bx-dollar-circle'></i></span>
                                                    <input type="number" class="form-control" id="price" name="price"
                                                        placeholder="Gía sản phẩm" />
                                                </div>
                                                <?php
                                                if (isset($errors['price']))
                                                    echo "<br><span style='color: red;'>" . $errors['price'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="size">Kích thước</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="size" class="input-group-text"><i
                                                            class='bx bx-closet'></i></span>
                                                    <input type="text" id="size" class="form-control"
                                                        aria-describedby="size" name="size"
                                                        placeholder="Kích thước cho sản phẩm" />
                                                </div>
                                                <?php
                                                if (isset($errors['size']))
                                                    echo "<br><span style='color: red;'>" . $errors['size'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="description">Mô tả</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="description" class="input-group-text"><i
                                                            class='bx bx-text'></i></span>
                                                    <input type="text" id="description" class="form-control "
                                                        name="description" placeholder="Mô tả cho sản phẩm" />
                                                </div>
                                                <?php
                                                if (isset($errors['description']))
                                                    echo "<br><span style='color: red;'>" . $errors['description'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <!-- Trường ẩn -->
                                        <input type="hidden" id="view" name="view" value="1">

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="dateUpdate">Ngày
                                                nhập</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="dateUpdate" class="input-group-text"><i
                                                            class='bx bxs-calendar-event'></i></span>
                                                    <input type="date" id="dateUpdate" class="form-control "
                                                        aria-describedby="dateUpdate" name="dateUpdate" />
                                                </div>
                                                <?php
                                                if (isset($errors['dateUpdate']))
                                                    echo "<br><span style='color: red;'>" . $errors['dateUpdate'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">

                                            <label class="col-sm-2 col-form-label" for="status">Trạng
                                                thái</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="status" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="status" id="status" class="form-control form-select">
                                                        <option selected disabled>Chọn</option>
                                                        <option class="form-control" value=1>Hiển thị</option>
                                                        <option class="form-control" value=9>Ẩn</option>
                                                    </select>
                                                </div>
                                                <?php
                                                if (isset($errors['status']))
                                                    echo "<br><span style='color: red;'>" . $errors['status'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="them">Thêm
                                                    mới</button>
                                                    <?php
                                                if (isset($Note['message']))
                                                    echo "<br><span style='color: red;'>" . $Note['message'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                    </form>
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