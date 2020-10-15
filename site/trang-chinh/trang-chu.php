<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-8">
            <div class="swiper-container border shadow">
                <div class="swiper-wrapper">
                  
                    <?php
                    foreach ($items as $item) {
                    ?>
                        <div class="swiper-slide">
                            <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
                                <img class="img-fluid" src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" alt="" height="150px">
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- san pham theo list -->
            <div>
                <h5 class="mt-3">SẢN PHẨM NỔI BẬT</h5>
                <div class="row border shadow mx-n2">
                    <?php
                    require_once '../../dao/hang-hoa.php';
                    $hh_array = hang_hoa_select_all();
                    foreach ($hh_array as $hh) {
                        $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                    ?>
                        <div class="col-4 mb-3 px-2 pt-2">
                            <div class="card">
                                <a href="<?= $href ?>">
                                    <img class='img-fluid' src="<?= $CONTENT_URL ?>/images/products/<?= $hh['hinh'] ?>">
                                </a>
                                <div class="card-body p-2">
                                    <h5 class="card-title">
                                        <a href="<?= $href ?>"> <?= $hh['ten_hh'] ?> </a>
                                    </h5>

                                    <strike class="text-dark">
                                        <p class="card-text">$ <?= number_format($hh['don_gia'], 2) ?></p>
                                    </strike>
                                    <h5 class="text-danger  font-weight-bold">
                                        <p class="card-text">$ <?= number_format($hh['don_gia'] - ($hh['giam_gia'] / 100 * $hh['don_gia']), 2) ?></p>
                                    </h5>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <a class="btn btn-sm btn-primary text-nowrap mr-1" href="#">Mua hàng</a>
                                        <a class="btn btn-sm btn-info text-nowrap" href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <aside class="col-4">
            <!--FAVORITE-->
            <?php require '../layout/top10.php'; ?>
            <!--CATALOG-->
            <?php require '../layout/loai-hang.php'; ?>
        </aside>
    </div>



</body>

</html>