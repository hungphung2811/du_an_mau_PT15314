<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if (exist_param("btn_register")) {
    $err = [];
    $bieu_thuc_ma_kh = '/^[a-zA-Z0-9_]{5,30}$/';
    $bieu_thuc_email = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
    $bieu_thuc_ho_ten = '/^[a-zA-Z_ àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{1,}$/';
    // $bieu_thuc_dt = '/^(0)(32|33|34|35|36|37|38|39|56|58|59|70|76|77|78|79|81|82|83|84|85|86|88|89|90|91|92|93|94|96|97|98|99)+([0-9]){7}$/';
    // bt ngay thang nam ^(([0])([1-9])([\/])|([1|2])([0-9])([\/])|([3])([0|1])([\/]))(([0])([1-9])([\/])|([1])([0-2])([\/]))(([1|2])([0-9])([0-9])([0-9]))
    $type = $_FILES['up_hinh']['type'];

    // $temp = explode('/',$ngay_thang);
    // $temp =array_reverse($temp);
    // print_r(implode('-',$temp));

    if (khach_hang_exist($ma_kh)) {
        // gọi đến hàm kiểm tra ma_kh có tồn tại 
        $err[] = "Mã này đã được sử dụng!";
    } else {
        // mã không tồn tại trong database kiểm tra hợp lệ
        if (!preg_match($bieu_thuc_ma_kh, $ma_kh)) {
            $err[] =  "Sai !. tên đăng nhập phải từ 5 -> 30 kí tự và không chứa các kí tự đặc biệt";
        }
    }

    if (strlen($mat_khau) < 6) {
        $err[] = "Mật khẩu phải có ít nhất 6 kí tự ";
    } else if ($mat_khau != $mat_khau2) {
        $err[] = "Xác nhận mật khẩu không đúng!";
    }

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
        $err[] = "Hãy nhập ảnh có định dạng jpeg , png hoặc bmp ";
    }

    if (!khach_hang_exist($ma_gioi_thieu)) {
        $error['ma_gioi_thieu']= "ma gioi thieu <span class='font-weight-bold'> khong ton tai <span>";
    }else{
        $error['ma_gioi_thieu'] = "ma gioi thieu <span class='font-weight-bold'> ton tai <span>";
    }

    if (!empty($err)) {
        $MESSAGE = implode("<br>", $err);
    } else {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : "user.png";
        $temp = explode('/', $ngay_sinh);
        $temp = array_reverse($temp);
        $ngay_sinh = implode('-', $temp);
        try {

            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $ngay_sinh);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!" . $exc->getMessage();
        }
    }
} else {
    global $ma_kh, $ngay_sinh,$ma_gioi_thieu, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

$VIEW_NAME = "tai-khoan/dang-ky-form.php";
require '../layout.php';
