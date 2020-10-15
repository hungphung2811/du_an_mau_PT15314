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
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "khach-hang/new.php";
} else if (exist_param("btn_update")) {
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    try {
        khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
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
