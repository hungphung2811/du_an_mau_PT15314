<!DOCTYPE html>
<html>

<head>
    <script src="<?= $CONTENT_URL ?>/js/xshop-list.js"></script>
</head>

<body>
    <div class="container">
        <h4 class="text-center">CHI TIẾT BÌNH LUẬN</h4>
        <hr class="my-3">
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
        <form action="index.php?ma_hh=<?= $ma_hh ?>" method="post">
            <h4 class="text-primary">HÀNG HÓA: <?= $items[0]['ten_hh'] ?></h4>
            <table border="1" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY BL</th>
                        <th>NGƯỜI BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th><input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"></th>
                            <td><?= $noi_dung ?></td>
                            <td><?= $ngay_bl ?></td>
                            <td><?= $ma_kh ?></td>
                            <td>
                                <a onclick=" return confirm('ban co muon xoa')" href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <button id="check-all" class="btn btn-primary" type="button">Chọn tất cả</button>
                            <button id="clear-all" class="btn btn-primary" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" class="btn btn-danger" onclick=" return confirm('ban co muon xoa')" name="btn_delete">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</body>

</html>