<!DOCTYPE html>
<html>

<head>
    <script src="<?= $CONTENT_URL ?>/js/xshop-list.js"></script>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h3>QUẢN LÝ HÀNG HÓA</h3>
            <p class="lead">Danh sách hàng hóa</p>
            <hr class="my-2">
        </div>
        <?php
        if (strlen($MESSAGE)) {
            echo "<h5>$MESSAGE</h5>";
        }
        ?>

        <nav class="mb-2" aria-label="Page navigation example">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item"><a href="?btn_list&page_no=1">|&lt;</a></li>
                <li class="list-group-item"><a href="?btn_list&page_no=<?= $_SESSION['prev_page'] ?>">
                        <<</a> </li> <?php
                                        for ($i = 1; $i <= $_SESSION['total_page']; $i++) {
                                            echo '<li class="list-group-item"><a href="?btn_list&page_no=' . $i . '">' . $i . '</a></li>';
                                        }
                                        ?> <li class="list-group-item"><a href="?btn_list&page_no=<?= $_SESSION['next_page'] ?>">>></a></li>
                <li class="list-group-item"><a href="?btn_list&page_no=<?= $_SESSION['total_page'] ?>">>|</a></li>
            </ul>
        </nav>
        <form action="index.php" method="post">
            <table border="1" class="table table-striped ">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>ẢNH</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th><input type="checkbox" name="ma_hh[]" value="<?= $ma_hh ?>"></th>
                            <td><?= $ma_hh ?></td>
                            <td><?= $ten_hh ?></td>
                            <td>$<?= number_format($don_gia, 2) ?></td>
                            <td><?= number_format($giam_gia) ?>%</td>
                            <td>
                                <img width="100" class="img-fluid" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>" alt="photo">
                            </td>
                            <td><?= $so_luot_xem ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-sm mr-1 btn-primary" href="index.php?btn_edit&ma_hh=<?= $ma_hh ?>">Sửa</a>
                                    <a class="btn btn-sm btn-danger" onclick="return confirm('Bạn có muốn xóa ?')" href="index.php?btn_delete&ma_hh=<?= $ma_hh ?>">Xóa</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <button id="check-all" class="btn btn-info mr-3" type="button">Chọn tất cả</button>
                            <button id="clear-all" class="btn btn-info mr-3" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" class="btn btn-danger mr-3" name="btn_delete" onclick="return confirm('Bạn có muốn xóa tất cả ?')">Xóa các mục chọn</button>
                            <a href="index.php?form_them" class="btn btn-primary">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</body>

</html>