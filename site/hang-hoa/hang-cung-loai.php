<!DOCTYPE html>
<html>

<body>
    <div class="panel panel-default mt-4 shadow border p-4">
        <div class="panel-heading ml-4">HÀNG CÙNG LOẠI</div>
        <hr class=" mb-3 mt-2">
        <div class="panel-body px-5">
            <ul class="row">
                <?php
                $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
                foreach ($hh_cung_loai as $hh) {
                    echo "<li class='col-6'><a href='chi-tiet.php?ma_hh=$hh[ma_hh]'>$hh[ten_hh]</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>