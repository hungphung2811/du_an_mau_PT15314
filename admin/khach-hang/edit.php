<div class="container">
    <div class="text-center">
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <p class="lead">Sửa khách hàng</p>
        <hr class="my-2">
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <div class="jumbotron py-3">
        <form action="index.php" method="post" id="form" class="form-group" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <label class="mt-3">MÃ KHÁCH HÀNG</label>
                    <input class="form-control" id="ma_kh" name="ma_kh" value="<?= $ma_kh ?>" readonly>
                    <span id="error_ma_kh"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">HỌ VÀ TÊN</label>
                    <input class="form-control" id="ho_ten" name="ho_ten" value="<?= $ho_ten ?>">
                    <span id="error_ho_ten"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">MẬT KHẨU</label>
                    <input name="mat_khau" id="mat_khau" class="form-control" value="<?= $mat_khau ?>" type="password">
                    <span id="error_mat_khau"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">XÁC NHẬN MẬT KHẨU</label>
                    <input name="mat_khau2" id="mat_khau2" class="form-control" value="<?= $mat_khau ?>" type="password">
                    <span id="error_mat_khau2"></span>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div>
                        <label class="mt-3">ĐỊA CHỈ EMAIL</label>
                        <input name="email" id="email" class="form-control" value="<?= $email ?>">
                        <span id="error_email"></span>
                    </div>
                    <div>
                        <label class="mt-3">HÌNH ẢNH</label>
                        <input name="hinh" type="hidden" value="<?= $hinh ?>">
                        <input class="form-control" id="hinh" name="up_hinh" type="file"> (<?= $hinh ?>)
                        <span class="d-none" id="error_hinh"></span>
                    </div>

                    <div>
                        <label class="mt-3">KÍCH HOẠT?</label>
                        <div class="form-control">
                            <label>
                                <input class="mr-2" <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio">
                                Chưa kích hoạt
                            </label>
                            <label>
                                <input class="mr-2 ml-5" <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="1" type="radio">
                                Kích hoạt
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="mt-3">VAI TRÒ</label>
                        <div class="form-control">
                            <label>
                                <input class="mr-2" <?= !$vai_tro ? 'checked' : '' ?> name="vai_tro" value="0" type="radio">
                                Khách hàng
                            </label>
                            <label>
                                <input class="mr-2 ml-5" <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" value="1" type="radio">
                                Nhân viên
                            </label>
                        </div>
                    </div>

                </div>

                <div class="col-6">

                    <div class="row">
                        <div class="col-6">
                            <label class="text-center mt-5 text-uppercase" for="">hình ảnh hiện tại</label>
                            <img width="200" class="img-fluid" src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>" alt="photo">
                        </div>
                        <div class="col-6">
                            <label class="text-uppercase mt-5 text-center">hình sẽ được update</label>
                            <div id="result_image">
                                <p id="desc" class="ml-5 mt-3 text-info">( chưa có gì ! ) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <hr class="my-3">
                <button class="btn btn-primary mr-3" name="btn_update">Cập nhật</button>
                <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
                <a class="btn btn-primary mr-3" href="index.php?form_them">Thêm mới</a>
                <a class="btn btn-info mr-3" href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </div>
</div>
<script src="<?= $CONTENT_URL ?>/js/khach-hang/validate_edit.js"></script>