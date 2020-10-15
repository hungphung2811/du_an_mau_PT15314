<!DOCTYPE html>
<html>

<body>
    <div class="border border-secondary rounded">
        <div class="text-center jumbotron jumbotron-fluid shadow py-3">
            TOP 10 YÊU THÍCH
        </div>
        <div class="px-3">
            <?php
            require_once '../../dao/hang-hoa.php';
            $hh_array = hang_hoa_select_top10();
            foreach ($hh_array as $hh) {
                $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                echo "
                            <div class=' d-flex justify-content-start align-items-center'>
                                <div class='w-25 border border-secondary rounded p-1'><img class='img-fluid' src='$CONTENT_URL/images/products/$hh[hinh]'></div>
                               
                                <div class='ml-4'><a href='$href'>$hh[ten_hh]</a></div>
                            </div>
                            <hr class='mb-3'>
                        ";
            }
            ?>
        </div>
    </div>
</body>

</html>