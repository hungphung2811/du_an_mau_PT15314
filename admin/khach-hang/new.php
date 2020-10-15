<div class="container">
    <div class="text-center">
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <p class="lead">Thêm khách hàng</p>
        <hr class="my-2">
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <div class="jumbotron py-3">
        <form action="index.php" id="form" class="form-group" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input class="form-control" id="ma_kh" name="ma_kh">
                    <span id="error_ma_kh"></span>
                </div>

                <div class="col-6">
                    <label>HỌ VÀ TÊN</label>
                    <input class="form-control" id="ho_ten" name="ho_ten">
                    <span id="error_ho_ten"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">MẬT KHẨU</label>
                    <input class="form-control" id="mat_khau" name="mat_khau" type="password">
                    <span id="error_mat_khau"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">XÁC NHẬN MẬT KHẨU</label>
                    <input class="form-control" id="mat_khau2" name="mat_khau2" type="password">
                    <span id="error_mat_khau2"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <label class="mt-3">ĐỊA CHỈ EMAIL</label>
                        <input class="form-control" id="email" name="email">
                        <span id="error_email"></span>
                    </div>

                    <div class="">
                        <label class="mt-3">KÍCH HOẠT?</label>
                        <div class="form-control">
                            <label><input name="kich_hoat" class="mr-2" value="0" type="radio">Chưa kích hoạt</label>
                            <label><input name="kich_hoat" class="ml-5 mr-2" value="1" type="radio" checked>Kích hoạt</label>
                        </div>
                    </div>
                    <div class="">
                        <label class="mt-3">VAI TRÒ</label>
                        <div class="form-control">
                            <label><input name="vai_tro" value="0" class="mr-2" type="radio">Khách hàng</label>
                            <label><input name="vai_tro" class="ml-5 mr-2" value="1" type="radio" checked>Nhân viên</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <label class="mt-3">HÌNH ẢNH</label>
                        <input name="hinh" id="hinh" class="form-control" type="file">
                        <span id="error_hinh"></span>
                    </div>
                    <label class="mt-2 text-uppercase text-center">hình sẽ được upload</label>
                    <div id="result_image">
                        <p id="desc" class="ml-5 mt-3 text-info">( chưa có gì ! ) </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <div>
                    <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                    <a class="btn btn-info" href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?= $CONTENT_URL ?>/js/khach-hang/validate_new.js"></script>