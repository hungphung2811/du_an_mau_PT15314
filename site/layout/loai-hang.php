<!DOCTYPE html>
<html>

<body>
    <div class="border border-secondary rounded mt-3">
        <div class="jumbotron jumbotron-fluid py-3 mb-2 shadow text-center">
            DANH MỤC
        </div>
        <div class="list-group">
            <?php
            require '../../dao/loai.php';
            $loai_array = loai_select_all();
            foreach ($loai_array as $loai) {
                $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                echo '<li class="list-group-item">' . "<a href='$href'>$loai[ten_loai]</a>" . "</li>";
            }
            ?>
        </div>
       
    </div>
</body>

</html>