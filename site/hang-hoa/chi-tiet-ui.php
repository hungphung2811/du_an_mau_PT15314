<!DOCTYPE html>
<html>

<body>
    <div class="thumbnail container mt-2 bg-light shadow border p-4">
        <div class="row">
            <div class="col-4 bg-light jumbotron">
                <img class=" img-fluid" src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' style="max-width:75%">
            </div>
            <div class="col-8 px-4">
                <div class="caption ">
                    <p>
                        <ul class="px-4">
                            <li class="mt-2">MÃ HH: <?= $ma_hh ?></li>
                            <li class="mt-2">TÊN HH: <?= $ten_hh ?></li>
                            <li class="font-weight-bold mt-2">ĐƠN GIÁ: <strike class="text-danger"><span class="ml-5">$</span> <?= number_format($don_gia, 2) ?></strike></li>
                            <li class="font-weight-normal mt-2">GIÁ KHUYẾN MẠI: <h4 class=" font-weight-bold d-inline-block"> $ <?= number_format($don_gia - ($giam_gia / 100 * $don_gia), 2) ?></h4>
                            </li>
                            <li>GIẢM GIÁ: <?= $giam_gia ?>%</li>
                        </ul>
                    </p>
                    <div><?= $mo_ta ?></div>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary">Mua hàng</button>
                </div>
            </div>
        </div>
    </div>
    <?php require 'binh-luan.php'; ?>

    <?php require 'hang-cung-loai.php'; ?>
</body>

</html>