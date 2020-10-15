<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
//-------------------------------//

$get_ma_hh = $_GET['ma_hh'];
extract($_REQUEST);
if (!is_numeric($get_ma_hh)) {
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
    require_once '../layout.php';
    echo "  <script>
                alert('hàng hóa không tồn tại . vui lòng thử lại !')
            </script>";
} else if (!hang_hoa_exist($ma_hh)) {
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
    require_once '../layout.php';
    echo "  <script>
                alert('hàng hóa không tồn tại . vui lòng thử lại !')
                </script>";
} else {
    // Truy vấn mặt hàng theo mã
    $hang_hoa = hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa);

    // Tăng số lượt xem lên 1
    hang_hoa_tang_so_luot_xem($ma_hh);

    $VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
    require '../layout.php';
}
