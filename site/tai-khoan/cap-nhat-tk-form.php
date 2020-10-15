<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <h4 class="text-center mb-3">CẬP NHẬT TÀI KHOẢN</h4>
        <div class="offset-1">
            <?php
            if (strlen($MESSAGE)) {
                echo "<h5>$MESSAGE</h5>";
            }
            ?>
        </div>
        <div class="jumbotron col-10 offset-1 p-4 jumbotron-fluid">
            <form class="form-group" action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
                <div>
                    <div>
                        <div class="row text-center">
                            <div class="col-6">
                                <label>AVATAR</label>
                                <img class="d-block img-fluid mx-auto mt-2" width="150" src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>" style="max-width: 95%">
                            </div class="col-6">
                            <div class="col-6">
                                <p>HÌNH SẼ UPDATE</p>
                                <span class="text-info">( Chưa có gì cả ! )</span>
                                <span class="text-info d-block">hãy upload bằng cách chọn tệp</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="mt-3">Hình thay đổi</label>
                        <input class="form-control" name="up_hinh" type="file">
                    </div>
                    <div>
                        <label class="mt-3">Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>" readonly>
                    </div>
                    <div>
                        <label class="mt-3">Họ và tên</label>
                        <input class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
                    </div>
                    <div>
                        <label class="mt-3">Địa chỉ email</label>
                        <input class="form-control" name="email" value="<?= $email ?>">
                    </div>

                </div>
                <div>
                    <div class="text-center">
                        <button class="btn btn-primary mt-4" name="btn_update">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
                    <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
                    <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
                    <input name="hinh" value="<?= $hinh ?>" type="hidden">
                </div>
            </form>
        </div>
    </div>
</body>

</html>