<?php
require "../../global.php";
require "../../dao/khach-hang.php";
//--------------------------------//

check_login();

extract($_REQUEST);

if (exist_param("btn_insert")) {
    $up_hinh = save_file("hinh", "$IMAGE_DIR/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'user.png';
    try {
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $ngay_sinh);
        unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $ngay_sinh);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "khach-hang/new.php";
} else if (exist_param("btn_update")) {
    $bt = '/^([0-9]){9,10}$/';
    $bt_gioi_tinh = '/^([0|1]){1}$/';
    $err_update1 = [];
    // if (!preg_match($bt, $so_cmnd)) {
    //     $err_update1[] = "so cmnd chua hop le";
    // }


    // $gioi_tinh = "hung";
    if (!preg_match($bt_gioi_tinh, $gioi_tinh)) {
        $err_update1[] = "giới tính không hợp lệ !";
    }

    // print_r($gioi_tinh);

    if (!empty($err_update1)) {
        $MESSAGE = implode("<br>", $err_update1);
    } else {
        $up_hinh = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
        try {
            khach_hang_update($ma_kh, $gioi_tinh, $so_cmnd, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    }
    $VIEW_NAME = "khach-hang/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "khach-hang/list.php";
} else if (exist_param("btn_edit")) {
    $item = khach_hang_select_by_id($ma_kh);
    extract($item);
    $VIEW_NAME = "khach-hang/edit.php";
} else if (exist_param("form_them")) {
    $VIEW_NAME = "khach-hang/new.php";
} else {
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
}

require "../layout.php";
