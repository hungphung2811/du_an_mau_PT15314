<!DOCTYPE html>
<html>

<head>
    <script src="<?= $CONTENT_URL ?>/js/xshop-list.js"></script>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h3>QUẢN LÝ KHÁCH HÀNG</h3>
            <p class="lead">Danh sánh khách hàng</p>
            <hr class="my-2">
        </div>
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
        <form action="index.php" method="post">
            <table border="1" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ KH</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>VAI TRÒ?</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh ?>"></th>
                            <td><?= $ma_kh ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $email ?></td>
                            <td>
                                <img width="100" class="img-fluid" src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>" alt="photo">
                            </td>
                            <td><?= $vai_tro ? 'Nhân viên' : 'Khách hàng' ?></td>
                            <td>
                                <a class="btn btn-primary" href="index.php?btn_edit&ma_kh=<?= $ma_kh ?>">Sửa</a>
                                <a onclick="return confirm('Bạn có muốn xóa ?')" class="btn btn-danger" href="index.php?btn_delete&ma_kh=<?= $ma_kh ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7" class="p-4">
                            <button id="check-all" class="btn btn-primary mr-3" type="button">Chọn tất cả</button>
                            <button id="clear-all" class="btn btn-primary mr-3" type="button">Bỏ chọn tất cả</button>
                            <button onclick="return confirm('Bạn có muốn xóa tất cả ?')" id="btn-delete" class="btn btn-danger mr-3" name="btn_delete">Xóa các mục chọn</button>
                            <a class="btn btn-info" href="index.php?form_them">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</body>

</html>