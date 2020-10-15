    <div class="text-center container">
        <h3 class="display-5">QUẢN LÝ LOẠI HÀNG</h3>
        <p class="lead">Danh sách loại hàng</p>
        <hr class="my-3">
    </div>
    <div class="container">
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5 >$MESSAGE</h5>";
        }
        ?>
    </div>
    <div class="container">
        <form action="index.php" method="post">
            <table border="1" class="text-center table col-10 table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">MÃ LOẠI</th>
                        <th scope="col">TÊN LOẠI</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th scope="row"><input type="checkbox" name="ma_loai[]" value="<?= $ma_loai ?>"></th>
                            <td><?= $ma_loai ?></td>
                            <td><?= $ten_loai ?></td>
                            <td>
                                <a href="index.php?btn_edit&ma_loai=<?= $ma_loai ?>" class="btn btn-primary">Sửa</a>
                                <a onclick="return confirm('Bạn có muốn xóa ?')" class="btn btn-danger" href="index.php?btn_delete&ma_loai=<?= $ma_loai ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button id="check-all" class="btn btn-primary mr-3" type="button">Chọn tất cả</button>
                            <button id="clear-all" class="btn btn-primary mr-3" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" class="btn btn-danger mr-3" onclick="return confirm('Bạn có muốn xóa tất cả ?')" name="btn_delete">Xóa các mục chọn</button>
                            <a href="index.php?form_them" class="btn btn-info">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>