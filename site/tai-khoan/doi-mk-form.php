<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <div class="col-10 offset-1">
            <h4 class="text-center mb-3">ĐỔI MẬT KHẨU</h4>
            <?php
            if (strlen($MESSAGE)) {
                echo "<h6 class='text-danger'>$MESSAGE</h6>";
            }
            ?>
            <div class="jumbotron bg-light jumbotron-fluid px-4 py-2">
                <form class="form-group" action="doi-mk.php" method="post">
                    <div>
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh">
                    </div>
                    <div>
                        <label>email</label>
                        <input class="form-control" name="email1">
                    </div>
                    <div>
                        <label class="mt-3">Mật khẩu cũ</label>
                        <input class="form-control" name="mat_khau" type="password">
                    </div>
                    <div>
                        <label class="mt-3">Mật khẩu mới</label>
                        <input class="form-control" name="mat_khau2" type="password">
                    </div>
                    <div>
                        <label class="mt-3">Xác nhận mật khẩu mới</label>
                        <input class="form-control" name="mat_khau3" type="password">
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" name="btn_change">Đổi mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>