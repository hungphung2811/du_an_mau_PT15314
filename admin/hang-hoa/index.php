<?php
require "../../global.php";
require "../../dao/hang-hoa.php";
//--------------------------------//
require "../../dao/loai.php";

check_login();

extract($_REQUEST);

if (exist_param("btn_insert")) {
    $err_new = [];
    $bieu_thuc_ten_hh = '/^[a-zA-Z0-9_]{3,}$/';
    if (!preg_match($bieu_thuc_ten_hh, $ten_hh)) {
        $err_new[] = 'Tên hàng hóa phải từ 3 kí tự trở lên !';
    }
    if (!empty($err_new)) {
        $MESSAGE = implode("<br>", $err_new);
    } else {
        $up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';
        try {
            hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            unset($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại! " . $exc->getMessage();
        }
    }
    $VIEW_NAME = "hang-hoa/new.php";
} else if (exist_param("btn_update")) {
    $err_update = [];
    if (!preg_match($bieu_thuc_ten_hh, $ten_hh)) {
        $err_update[] = 'Tên hàng hóa phải từ 3 kí tự trở lên !';
    }
    if (!empty($err_update)) {
        $MESSAGE = implode("<br>", $err_update);
    } else {
        $up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
        try {
            hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $MESSAGE = "Cập nhật thất bại!" . $exc->getMessage();
        }
    }
    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
    }
    $VIEW_NAME = "hang-hoa/list.php";
} else if (exist_param("btn_edit")) {
    $item = hang_hoa_select_by_id($ma_hh);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("form_them")) {
    $VIEW_NAME = "hang-hoa/new.php";
} else {
    $items = hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
}


if ($VIEW_NAME == "hang-hoa/new.php" || $VIEW_NAME == "hang-hoa/edit.php") {
    $loai_select_list = loai_select_all();
}

require "../layout.php";
