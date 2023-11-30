<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Tất cả sản phẩm</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Tất cả sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container mt-5">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories mt-4">
                <div class="head">Danh mục sản phẩm</div>
                <ul class="main-categories">
                <li class="main-nav-list"><a href="#"><span class="lnr lnr-arrow-right"></span>
                                Tất cả các sản phẩm<span class="number">(53)</span>
                    <?php
                    $categoryList = $category->get_list_client();
                    foreach ($categoryList as $categoryRow):
                        extract($categoryRow);
                        ?>
                        <li class="main-nav-list"><a href="#"><span class="lnr lnr-arrow-right"></span>
                                <?= $name ?><span class="number">(53)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>

                    <!-- <li class="main-nav-list"><a class="border-bottom-0" data-toggle="collapse" href="#babyCare"
                            aria-expanded="false" aria-controls="babyCare"><span class="lnr lnr-arrow-right"></span>Baby
                            Care<span class="number">(48)</span></a>
                        <ul class="collapse" id="babyCare" data-toggle="collapse" aria-expanded="false"
                            aria-controls="babyCare">
                            <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">Meat Alternatives<span
                                        class="number">(01)</span></a></li>
                            <li class="main-nav-list child"><a href="#" class="border-bottom-0">Meat<span
                                        class="number">(11)</span></a></li>
                        </ul>
                    </li>  -->
                </ul>
            </div>

        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <!-- <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div> -->
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <?php
                    $productList = $product->get_list_client();
                    foreach($productList as $productRow):
                        extract($productRow);
                    ?>
                    <!-- single product -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt="">
                            <div class="product-details">
                                <h6><?=$name?></h6>
                                <div class="price">
                                    <h6><?=number_format($price)?> VNĐ</h6>
                                    
                                </div>
                                <div class="prd-bottom">

                                    <a class="social-info">
                                        <span class="ti-bag"></span>
                                        <form action="<?= $ROOT_URL?>/routerClient.php?act=giohang" method='post'>
                                            <input type="hidden" name='productId' value='<?=$productId?>'>
                                            <input type="hidden" name='name' value='<?=$name?>'>
                                            <input type="hidden" name='price' value='<?=$price?>'>
                                            <input type="hidden" name='image' value='<?=$image?>'>
                                            <button type="submit" class="btn hover-text btn-warning" name='giohang'>+Giỏ hàng</button>
                                        </form>                                     
                                    </a>
                                    <!-- <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a> -->
                                    <a href="" class="social-info">
                                    <span class="fa-solid fa-barcode fa-2xs"></span>
                                        <p class="hover-text">Mua ngay</p>
                                    </a>
                                    <a href="<?= $ROOT_URL ?>/routerClient.php?act=chitiet-sp&productId=<?=$productId?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">Xem chi tiết</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endforeach;?>
                    <!-- single product -->
                    
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <!-- <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div> -->
            <!-- End Filter Bar -->
        </div>
    </div>
</div>

<!-- Start related-product Area -->
<section class="related-product-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Sản phẩm Hot</h1>
                    <p>Danh sách các sản phẩm khuyến mãi giảm giá.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r1.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r2.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r3.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r5.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r6.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r7.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r9.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r10.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r11.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ctg-right">
                    <a href="#" target="_blank">
                        <img class="img-fluid d-block mx-auto" src="<?= $CONTENT_URL ?>/client/img/category/c5.jpg"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End related-product Area -->