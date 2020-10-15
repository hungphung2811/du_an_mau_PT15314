<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if (exist_param("btn_login")) {
    $user = khach_hang_select_by_id($ma_kh);
    $err = [];
    $bieu_thuc = '/^[a-zA-Z0-9]{5,30}$/';
    if (!preg_match($bieu_thuc, $ma_kh)) {
        $err[] =  "Sai !. tên đăng nhập phải từ 5 -> 30 kí tự và không chứa các kí tự đặc biệt";
    }
    if (strlen($mat_khau) == 0) {
        $err[] =  "Bạn chưa nhập mật khẩu !";
    } else if (!$user) {
        $err[] = "Sai mã đăng nhập!";
    } else {
        if ($user['mat_khau'] != $mat_khau) {
            $err[] = "Sai mật khẩu!";
        } else {
            $MESSAGE = "Đăng nhập thành công!";
            header("location: /xshop12/xshop/site/trang-chinh/?trang-chu");

            if (exist_param("ghi_nho")) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            $_SESSION["user"] = $user;

            if (isset($_SESSION['request_uri'])) {
                header("location: " . $_SESSION['request_uri']);
            }
        }
    }

    if (!empty($err)) {
        $MESSAGE = implode("<br>", $err);
    }
} else {
    if (exist_param("btn_logoff")) {
        session_unset();
        header("location: /xshop12/xshop/site/trang-chinh/?trang-chu");
    }

    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");

    // if (isset($_SERVER['HTTP_REFERER'])) {
    //     header("location: " . $_SERVER['HTTP_REFERER']);
    // }
}

$VIEW_NAME = "tai-khoan/dang-nhap-form.php";
require '../layout.php';
