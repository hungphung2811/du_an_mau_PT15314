</html>

<!doctype html>
<html lang="en">

<head>
    <title>Siêu thị trực tuyến</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Demo styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <style>
        body {
            background: #eee;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            height: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {

            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <header class="bg-info p-3 pb-4 text-light jumbotron shadow">
        <div class="d-flex justify-content-start ml-5">
            <div class="mr-5 ml-5">
                <a href="/xshop12/xshop/site/trang-chinh/?trang-chu">
                    <img class="ml-5" src="https://salt.tikicdn.com/ts/banner/33/ba/89/54c02d2475983f93a024c0cd13f238e4.png" alt="logo tiki ">
                </a>
            </div>
            <div class="form-group form-inline">
                <form class="mt-2" action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php">
                    <input class="form-control-sm form-control" name="keywords" placeholder="Từ khóa tìm kiếm">
                    <button class="btn btn-primary btn-sm">search</button>
                </form>
            </div>
            <div class="ml-5">
                <a class="d-inline-block nav-link pl-0 text-light" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php">Đăng nhập</a>
                <a class="d-inline-block nav-link pl-0 text-light" href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký</a>
                <a class="d-inline-block nav-link pl-0 text-light" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a>
                <?php
                if (isset($_SESSION['user'])) {
                    if ($_SESSION['user']['vai_tro'] == TRUE) {
                ?>
                        <a class="d-inline-block nav-link pl-0 text-light" href='<?= $ADMIN_URL ?>/trang-chinh'>Quản trị website</a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
            $temp = 'd-flex justify-content-center';
            $temp1 = 'ml-5';
        } else {
            $temp = 'container';
            $temp1 = '';
        }
        ?>
        <div class="<?= $temp ?>">

            <nav class="<?= $temp1 ?> navbar navbar-expand-lg p-0">
                <?php require 'layout/menu.php'; ?>
            </nav>
        </div>
    </header>
    <div class="container">
        <div>
            <?php require $VIEW_NAME; ?>
        </div>
    </div>
    <!-- footer -->
    <footer class="mt-5">
        <section class="mt-2 bg-info p-3">
            <div class="text-center">
                <h5>
                    ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI HOẶC ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ
                </h5>
                <form action="" class="form-group">
                    <div class="d-flex justify-content-center">
                        <input class="form-control w-50" type="text" placeholder="nhập email hoặc số điện thoại của bạn ">
                        <button class="btn btn-warning ml-3">Gửi</button>
                    </div>
                </form>
            </div>
        </section>
        <div class="container">
            <section class="bg-light mt-3 p-3 border">
                <div class="row mx-n1">
                    <div class="col-lg-4 col-sm-6 px-1">
                        <div class="d-flex align-items-center">
                            <div class="text-danger h2">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="ml-3">
                                <p class="h6">
                                    CHÍNH SÁCH GIAO HÀNG
                                </p>
                                <span>
                                    Nhận hàng tại nhà mùa dịch
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 px-1">
                        <div class="d-flex align-items-center">
                            <div class=" text-danger h2">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="ml-3">
                                <p class="h6">
                                    ĐỔI TRẢ DỄ DÀNG
                                </p>
                                <span>
                                    Dùng thử trong vòng 3 ngày
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 px-1">
                        <div class="d-flex align-items-center">
                            <div class="text-danger h2">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ml-3">
                                <p class="h6">
                                    HỖ TRỢ NHIỆT TÌNH
                                </p>
                                <span class="">
                                    Tư vấn, giải đáp mọi thắc mắc
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="bg-light mt-3 p-3 border">
            <div class="container text-center">
                <ul class="list-unstyled">
                    <li>
                        © 2020 Công Ty Cổ Phần Máy Tính Hà Nội
                    </li>
                    <li>
                        Địa chỉ: Số 129 + 131, phố Lê Thanh Nghị, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội
                    </li>
                    <li>
                        GPĐKKD số 0101161194 do Sở KHĐT Tp.Hà Nội cấp ngày 31/8/2001
                    </li>
                    <li>
                        Email: hnc@hanoicomputer.com. Điện thoại: 1900 1903
                    </li>
                </ul>
            </div>
        </section>
    </footer>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>