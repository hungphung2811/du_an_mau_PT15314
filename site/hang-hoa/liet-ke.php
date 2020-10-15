<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
//-------------------------------//

extract($_REQUEST);

if (exist_param("ma_loai")) {
    $items = hang_hoa_select_by_loai($ma_loai);
} else if (exist_param("dac_biet")) {
    $items = hang_hoa_select_dac_biet();
} else if (exist_param("keywords")) {
    $items = hang_hoa_select_keyword($keywords);
} else {
    $items = hang_hoa_select_all();
}

$VIEW_NAME = "hang-hoa/liet-ke-ui.php";
require '../layout.php';
