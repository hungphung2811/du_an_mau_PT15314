<?php
require '../../global.php';
require '../../dao/khach-hang.php';

check_login();

extract($_REQUEST);

if (exist_param("btn_update")) {
    $err = [];
    $bieu_thuc_email = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
    $bieu_thuc_ho_ten = '/^[a-zA-Z_ àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{1,}$/';
    $type = $_FILES['up_hinh']['type'];

    if (!preg_match($bieu_thuc_ho_ten, $ho_ten)) {
        $err[] = 'Họ tên không hợp lệ  . ví dụ Hưng_Phùng';
    }

    if (!preg_match($bieu_thuc_email, $email)) {
        $err[] = 'email không hợp lệ . ví dụ example@gmail.com';
    }

    if ($_FILES['up_hinh']['size'] >= 1.5 * 1024 * 1024) {
        $err[] = "Bạn nhập ảnh quá lớn .  ";
    }

    if (!($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/bmp')) {
        $err[] = "Nếu muốn update ảnh mới vui lòng nhập ảnh có định dạng jpeg , png hoặc bmp ";
    }

    if (!empty($err)) {
        $MESSAGE = implode("<br>", $err);
    } else {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : $hinh;
        try {
            khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Cập nhật thông tin thành viên thành công!";
            $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
        }
    }
} else {
    extract($_SESSION['user']);
}

$VIEW_NAME = "tai-khoan/cap-nhat-tk-form.php";
require '../layout.php';
