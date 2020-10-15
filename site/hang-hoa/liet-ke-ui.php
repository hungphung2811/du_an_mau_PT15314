<!DOCTYPE html>
<html>

<body>
    <div class="row">
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <div class="col-6 px-4 py-2">
                <div class="bg-light shadow border p-3 row">
                    <div class="col-4 border-right border-secondary">
                        <a href="chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                            <img class="img-fluid" width="90" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>"  />
                        </a>
                    </div>
                    <div class="col-8 px-4">
                        <div>
                            <h5>
                                <a href="chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                                    <?= $ten_hh ?>
                                </a>
                            </h5>
                        </div>
                        <div class="text-info display-5">
                            <span>$</span>
                            <?= number_format($don_gia,2) ?>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a class="btn btn-sm btn-primary text-nowrap mr-2" href="#">Mua hàng</a>
                            <a class="btn btn-sm btn-info text-nowrap" href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>


</body>

</html>