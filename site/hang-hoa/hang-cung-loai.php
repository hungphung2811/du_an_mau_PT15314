<!DOCTYPE html>
<html>

<body>
    <div class="panel panel-default mt-4 shadow border p-4">
        <div class="panel-heading ml-4">HÀNG CÙNG LOẠI</div>
        <hr class=" mb-3 mt-2">
        <div class="row">
            <?php
            $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
            foreach ($hh_cung_loai as $hh) {
            ?>
                <div class="col-6 mt-3 pb-2">
                    <a href='chi-tiet.php?ma_hh=<?= $hh['ma_hh'] ?>'>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid mr-3" width="100" src="<?= $CONTENT_URL ?>/images/products/<?= $hh['hinh'] ?>" alt="photo">
                            <span>
                                <?= $hh['ten_hh'] ?>
                            </span>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>