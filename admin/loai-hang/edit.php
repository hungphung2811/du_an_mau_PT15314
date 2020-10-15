<!DOCTYPE html>
<html>

<body>
    <div class="text-center container">
        <h3>QUẢN LÝ LOẠI HÀNG</h3>
        <p class="lead">Sửa loại hàng</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5 >$MESSAGE</h5>";
        }
        ?>
    </div>
    <div class="container">
        <form action="index.php" method="post" class="border p-4 col-6 jumbotron">
            <div>
                <label>Mã loại</label>
                <input name="ma_loai" value="<?= $ma_loai ?>" readonly>
            </div>
            <div class="my-3">
                <label>Tên loại</label>
                <input name="ten_loai" value="<?= $ten_loai ?>">
            </div>
            <div>
                <button class="btn btn-primary mr-3" name="btn_update">Cập nhật</button>
                <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
                <a href="index.php?form_them" class="mr-3">Thêm mới</a>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>