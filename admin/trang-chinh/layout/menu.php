<div class="">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="mr-3 nav-link pl-0" href="<?= $SITE_URL ?>/trang-chinh?trang-chu">Trang chủ</a>
        </li>
       
        <li class="nav-item">
            <a class="mr-3 nav-link pl-0" href="<?= $SITE_URL ?>/trang-chinh?gioi-thieu">Giới thiệu</a>
        </li>
        <li class="nav-item">
            <a class="mr-3 nav-link pl-0" href="<?= $SITE_URL ?>/trang-chinh?lien-he">Liên hệ</a>
        </li>
        <li class="nav-item">
            <a class="mr-3 nav-link pl-0" href="<?= $SITE_URL ?>/trang-chinh?gop-y">Góp ý</a>
        </li>
        <li class="nav-item">
            <a class="mr-3 nav-link pl-0" href="<?= $SITE_URL ?>/trang-chinh?hoi-dap">Hỏi đáp</a>
        </li>
        <li class="nav-item text-primary">
            <div class="dropdown mr-3 nav-link pl-0">
                <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài khoản
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>

                        <a class="dropdown-item" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a>
                        <a class="dropdown-item" href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a>
                        <a class="dropdown-item" href="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php">Chỉnh sửa tài khoản</a>
                    <?php
                    } else {
                        ?>
                        <a class="dropdown-item" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php">Đăng nhập</a>
                        <a class="dropdown-item" href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký</a>
                        <a class="dropdown-item" href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['user'])) {
                        if ($_SESSION['user']['vai_tro'] == TRUE) {
                            echo "<a class='dropdown-item' href='$ADMIN_URL/trang-chinh'>Quản trị website</a>";
                        } else {
                            echo "";
                        }
                    }
                    ?>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <div class=" nav-link">
                    <span>Xin chào : </span>
                    <?= $_SESSION['user']['ho_ten'] ?>
                    <img class="rounded-circle border border-danger p-1" width="35" height="35" src='<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['hinh'] ?>'>
                </div>
            <?php
            }
            ?>
        </li>


    </ul>
</div>