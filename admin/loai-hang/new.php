<!DOCTYPE html>
<html>

<body>
    <div class="text-center container">
        <h3 class="display-5">QUẢN LÝ LOẠI HÀNG</h3>
        <p class="lead">Thêm mới</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>
    </div>
    <div class="container">
        <form action="index.php" method="post" class="border col-6 p-4 jumbotron">
            <div>
                <label>Mã loại</label>
                <input name="ma_loai" value="auto number" readonly>
            </div>

            <div class="my-3">
                <label>Tên loại</label>
                <input name="ten_loai">
            </div>
            <div>
                <button class="btn btn-primary mr-3" name="btn_insert">Thêm mới</button>
                <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>