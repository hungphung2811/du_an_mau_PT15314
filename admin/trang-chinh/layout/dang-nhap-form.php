<!DOCTYPE html>
<html>

<body>
    <div class="border border-secondary rounded">
        <div class="text-center jumbotron mb-2 jumbotron-fluid shadow-sm py-3">
            TÀI KHOẢN
        </div>
        <div class="px-3">
            <form class="form-group" action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post">
                <div>
                    <div>Tên đăng nhập</div>
                    <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
                </div>
                <div class="mt-2">
                    <div>Mật khẩu</div>
                    <input class="form-control" name="mat_khau" type="password" value="<?= $mat_khau ?>">
                </div>
                <div class="mt-2">
                    <label>
                        <input name="ghi_nho" type="checkbox" checked>
                        Ghi nhớ tài khoản?
                    </label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" name="btn_login">Đăng nhập</button>
                </div>
                <div class="mt-3">
                    <ul>
                        <li><a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                        <li><a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</body>

</html>