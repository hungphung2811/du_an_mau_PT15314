<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <h4 class="text-center mb-3">ĐĂNG KÝ THÀNH VIÊN</h4>
        <div class="col-10 offset-1">
            <?php
            if (strlen($MESSAGE)) {
                echo "<h5 class='text-danger'>$MESSAGE</h5>";
            }
            ?>
            <div class="jumbotron jumbotron-fluid bg-light px-4 py-2 border shadow">
                <form class="form-group" action="dang-ky.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label class="mt-3">Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
                    </div>
                    <div>
                        <label class="mt-3">Mật khẩu</label>
                        <input class="form-control" name="mat_khau" type="password" value="<?= $mat_khau ?>">
                    </div>
                    <div>
                        <label class="mt-3">Xác nhận mật khẩu</label>
                        <input class="form-control" name="mat_khau2" type="password" value="<?= $mat_khau2 ?>">
                    </div>
                    <div>
                        <label class="mt-3">Họ và tên</label>
                        <input class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
                    </div>
                    <div>
                        <label class="mt-3">Địa chỉ email</label>
                        <input class="form-control" name="email" value="<?= $email ?>">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="mt-3">Hình</label>
                            <input class="form-control" name="up_hinh" type="file">
                        </div>
                        <div class="col-6">
                            <label class="mt-4">HÌNH SẼ UPDATE</label>
                            <span>( Chưa có ảnh nào )</span>
                            <span class="text-info d-block">hãy upload bằng cách chọn tệp</span>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn btn-primary" name="btn_register">Đăng ký</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="0" type="hidden">
                    <input name="kich_hoat" value="0" type="hidden">
                </form>
            </div>
        </div>
    </div>
</body>

</html>