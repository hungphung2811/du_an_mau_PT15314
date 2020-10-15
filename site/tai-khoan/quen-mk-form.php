<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <div class="offset-1 col-10">
            <h4 class="text-center mb-3">QUÊN MẬT KHẨU</h4>
            <?php
            if (strlen($MESSAGE)) {
                echo "<h6 class='text-danger'>$MESSAGE</h6>";
            }
            ?>
            <div class="jumbotron bg-light jumbotron-fluid px-4 py-2">
                <form class="form-group" action="quen-mk.php" method="post">
                    <div>
                        <label class="mt-3">Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh">
                    </div>
                    <div>
                        <label>Địa chỉ email</label>
                        <input class="form-control" name="email1">
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" name="btn_forgot">Tìm lại mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>