<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <div class="col-10 offset-1">
            <h4 class="text-center mb-3">ĐĂNG NHẬP</h4>
            <?php
            if (strlen($MESSAGE)) {
                echo "<h6 class='text-danger'>$MESSAGE</h6>";
            }
            ?>
            <div class="jumbotron bg-light jumbotron-fluid px-4 py-2">
                <form class="form-group" action="dang-nhap.php" method="post">
                    <div>
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
                    </div>
                    <div>
                        <label class="mt-3">Mật khẩu</label>
                        <input class="form-control" name="mat_khau" type="password" value="<?= $mat_khau ?>">
                    </div>
                    <div class="mt-3">
                        <label>
                            <input name="ghi_nho" type="checkbox" checked>
                            Ghi nhớ tài khoản?
                        </label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary mt-3" name="btn_login">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>