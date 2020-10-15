<!DOCTYPE html>
<html>

<body>
    <div class="border border-secondary rounded">
        <div class="text-center jumbotron mb-2 jumbotron-fluid shadow-sm py-3">
            TÀI KHOẢN
        </div>
        <div class="px-3 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-4">
                    <img class="img-fluid" src='<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['hinh'] ?>'>
                </div>
                <h5 class="font-weight-normal text-nowrap">
                    <?= $_SESSION['user']['ho_ten'] ?>
                </h5>
            </div>
            <div class="mt-3">
                <ul>
                    <li><a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                    <li><a href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                    <li><a href="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                    <?php
                if ($_SESSION['user']['vai_tro'] == TRUE) {
                    echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>