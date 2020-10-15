<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <div class="text-center">
            <h4>TỔNG HỢP BÌNH LUẬN</h4>
            <hr class="my-2">
        </div>
        <form action="index.php" method="post">
            <table border="1" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>HÀNG HÓA</th>
                        <th>SỐ BL</th>
                        <th>MỚI NHẤT</th>
                        <th>CŨ NHẤT</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <td><?= $ten_hh ?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= $cu_nhat ?></td>
                            <td><?= $moi_nhat ?></td>
                            <td>
                                <a href="../binh-luan/index.php?ma_hh=<?= $ma_hh ?>">Chi tiết</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>