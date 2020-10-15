<?php
if (isset($_SESSION['user'])) {
    require 'dang-nhap-info.php';
} else {
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    require 'dang-nhap-form.php';
}
