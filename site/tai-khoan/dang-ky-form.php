<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <h4 class="text-center mb-3">ĐĂNG KÝ THÀNH VIÊN</h4>
        <div class="col-10 offset-1">
            <?php
            if (strlen($MESSAGE)) {
                echo "<h6 class='text-info mb-3'>$error[ma_gioi_thieu]</h6>";
                echo "<h6 class='text-danger'>$MESSAGE</h6>";
            }
            ?>
            <div class="jumbotron jumbotron-fluid bg-light px-4 py-2 border shadow">
                <form class="form-group" action="dang-ky.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label class="mt-3">Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
                    </div>
                    <div>
                        <label class="mt-3">ngay thang</label>
                        <input class="form-control" name="ngay_sinh" type="" value="<?= $ngay_sinh ?>">
                    </div>
                    <div>
                        <label class="mt-3">ma gioi thieu</label>
                        <input class="form-control" name="ma_gioi_thieu" type="" value="<?= $ma_gioi_thieu ?>">
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
                            <input class="form-control" id="hinh" value="<?= $hinh ?>" name="up_hinh" type="file">
                        </div>
                        <div class="col-6">
                            <label class="mt-4 text-center ml-5">Hình sẽ tải lên</label>
                            <div id="result_image" class="ml-5">
                                <div id="desc">
                                    <span>( Chưa có ảnh nào )</span>
                                    <span class="text-info d-block">hãy upload bằng cách chọn tệp</span>
                                </div>
                            </div>
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
    <script src="<?= $CONTENT_URL ?>/js/site/tai-khoan/dangKy.js"></script>
</body>

</html>