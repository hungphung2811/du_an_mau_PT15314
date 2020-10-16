<div class="container">
    <div class="text-center">
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <p class="lead">Sửa hàng hóa</p>
        <hr class="mt-2 mb-4">
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h6 class='text-danger'>$MESSAGE</h6>";
    }
    ?>
    <div class="jumbotron py-3">
        <form action="index.php" method="post" id="form" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-6">
                    <label class="mt-3">MÃ HÀNG HÓA</label>
                    <input class="form-control" name="ma_hh" readonly value="<?= $ma_hh ?>">
                </div>

                <div class="col-6">
                    <label class="mt-3">TÊN HÀNG HÓA</label>
                    <input class="form-control" name="ten_hh" id="ten_hh" value="<?= $ten_hh ?>">
                    <span class="span" id="error_ten_hh"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">ĐƠN GIÁ</label>
                    <input class="form-control" name="don_gia" id="don_gia" value="<?= $don_gia ?>">
                    <span class="span" id="error_don_gia"></span>
                </div>

                <div class="col-6">
                    <label class="mt-3">GIẢM GIÁ</label>
                    <input class="form-control" name="giam_gia" id="giam_gia" value="<?= $giam_gia ?>">
                    <span class="span" id="error_giam_gia"></span>
                </div>

                <div class="form-group col-6">
                    <label class="mt-3">NGÀY NHẬP</label>
                    <input class="form-control" value="<?= $ngay_nhap ?>" type="date" name="ngay_nhap" id="ngay_nhap" id="example-datetime-local-input">
                    <span id="error_ngay_nhap"></span>
                </div>

                <div class="col-6 form-group">
                    <label class="mt-3">LOẠI HÀNG</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                        foreach ($loai_select_list as $loai) {
                            if ($loai['ma_loai'] == $ma_loai) {
                                echo '<option selected value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                            } else {
                                echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-6">
                    <div>
                        <label class="">HÌNH ẢNH</label>
                        <div class="form-control">
                            <input name="up_hinh" id="hinh" type="file">
                        </div>
                        <input name="hinh" type="hidden" id="abc" value="<?= $hinh ?>"> (<?= $hinh ?>)
                        <span class="d-none" id="error_hinh"></span>
                    </div>

                    <div>
                        <label class="mt-3">HÀNG ĐẶC BIỆT?</label>
                        <div class="form-control">
                            <label><input class="mr-3" name="dac_biet" value="0" type="radio" <?= $dac_biet ? '' : 'checked' ?>>Đặc biệt</label>
                            <label><input class="mr-3 ml-5" name="dac_biet" value="1" type="radio" <?= $dac_biet ? 'checked' : '' ?>>Bình thường</label>
                        </div>
                    </div>

                    <div>
                        <label class="mt-3">SỐ LƯỢC XEM</label>
                        <input class="form-control" name="so_luot_xem" readonly value="0" value="<?= $so_luot_xem ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <label class="text-center text-uppercase" for="">hình ảnh hiện tại</label>
                            <img width="200" class="img-fluid" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>" alt="photo">
                        </div>
                        <div class="col-6">
                            <label class="text-center text-uppercase" for="">hình ảnh sẽ update</label>
                            <div id="result_image">
                                <p id="desc" class="ml-5 mt-3 text-info">( chưa có gì ! ) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label class="mt-3">MÔ TẢ</label>
                    <textarea class="form-control" name="mo_ta" id="mo_ta" rows="4"><?= $mo_ta ?></textarea>
                    <span id="error_mo_ta"></span>
                </div>
                <div class="mt-5">
                    <button type="submit" name="btn_update" class="mr-3 btn btn-info">Cập nhật</button>
                    <button type="reset" class="mr-3 btn btn-primary">Nhập lại</button>
                    <a class="btn btn-primary mr-3" href="index.php?form_them">Thêm mới</a>
                    <a class="btn btn-info" href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- js validate link -->
<script src="<?= $CONTENT_URL ?>/js/hang-hoa/validate_edit.js"></script>