<div class="container">
    <div class="text-center">
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <p class="lead">Thêm mới hàng hóa</p>
        <hr class="my-2">
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <div class="jumbotron py-3">

        <form action="index.php" method="post" id="form" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-6">
                    <label class="mt-3">MÃ HÀNG HÓA</label>
                    <input class="form-control" name="ma_hh" readonly value="auto number">
                </div>

                <div class="form-group col-6">
                    <label class="mt-3">TÊN HÀNG HÓA</label>
                    <input class="form-control" name="ten_hh" id="ten_hh">
                    <span id="error_ten_hh"></span>
                </div>

                <div class="form-group col-6">
                    <label class="mt-3">ĐƠN GIÁ</label>
                    <input class="form-control" name="don_gia" id="don_gia">
                    <span id="error_don_gia"></span>
                </div>

                <div class="form-group col-6">
                    <label class="mt-3">GIẢM GIÁ</label>
                    <input class="form-control" name="giam_gia" id="giam_gia" value="0">
                    <span id="error_giam_gia"></span>
                </div>

                <div class="form-group col-6">
                    <label class="mt-3">NGÀY NHẬP</label>
                    <input class="form-control" type="date" name="ngay_nhap" id="ngay_nhap" id="example-datetime-local-input">
                    <span id="error_ngay_nhap"></span>
                </div>

                <div class="form-group col-6">
                    <label class="mt-3">LOẠI HÀNG</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                        foreach ($loai_select_list as $loai) {
                            echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group ">
                        <label class="mt-3">HÌNH ẢNH</label>
                        <div class="bg-light py-2 px-3 border rounded">
                            <input name="hinh" id="hinh" type="file">
                        </div>
                        <span id="error_hinh"></span>
                    </div>
                    <div class="form-group ">
                        <label class="mt-3">HÀNG ĐẶC BIỆT?</label>
                        <div class="bg-light py-2 px-3 rounded border">
                            <label><input name="dac_biet" value="1" class="mr-2" type="radio">Đặc biệt</label>
                            <label><input name="dac_biet" value="0" class="mr-2 ml-5" type="radio" checked>Bình thường</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mt-3">SỐ LƯỢC XEM</label>
                        <input class="form-control" name="so_luot_xem" readonly value="0">
                    </div>
                </div>
                <div class="col-6 py-3 px-5">
                    <label class="ml-5 text-uppercase" for="">hình ảnh sẽ upload</label>
                    <div id="result_image">
                        <p id="desc" class="ml-5 mt-3 text-info">( chưa có gì ! ) </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label class="mt-3">MÔ TẢ</label>
                    <textarea class="form-control" name="mo_ta" id="mo_ta" rows="4"></textarea>
                    <span id="error_mo_ta"></span>
                </div>
                <div class="mt-4 text-center">
                    <button class="btn btn-primary mr-3" name="btn_insert">Thêm mới</button>
                    <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
                    <a class="btn btn-info" href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- js validate link -->
<script src="<?= $CONTENT_URL ?>/js/hang-hoa/validate_new.js"></script>