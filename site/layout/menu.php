<div class="">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="mr-5 nav-link pl-0 text-light" href="<?= $SITE_URL ?>/trang-chinh?trang-chu">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="mr-5 nav-link pl-0 text-light" href="<?= $SITE_URL ?>/trang-chinh?gioi-thieu">Giới thiệu</a>
        </li>
        <li class="nav-item">
            <a class="mr-5 nav-link pl-0 text-light" href="<?= $SITE_URL ?>/trang-chinh?lien-he">Liên hệ</a>
        </li>
        <li class="nav-item">
            <a class="mr-5 nav-link pl-0 text-light" href="<?= $SITE_URL ?>/trang-chinh?gop-y">Góp ý</a>
        </li>
        <li class="nav-item">
            <a class="mr-5 nav-link pl-0 text-light" href="<?= $SITE_URL ?>/trang-chinh?hoi-dap">Hỏi đáp</a>
        </li>
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <li class="nav-item">
                <div class="dropdown text-light">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-inline-block">
                            <div class="d-flex justify-content-center align-items-center">
                                <span>Xin chào : </span>
                                <h6 class="mt-2 mx-2">
                                    <?= $_SESSION['user']['ho_ten'] ?>
                                </h6>
                                <img width="30" height="30" class="border border-danger rounded-circle" src='<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['hinh'] ?>'>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a>
                        <a class="dropdown-item " href="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a>
                        <?php
                        if ($_SESSION['user']['vai_tro'] == TRUE) {
                        ?>
                            <a class="dropdown-item" href='<?= $ADMIN_URL ?>/trang-chinh'>Quản trị website</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</div>