<?php
if (isset($_POST['btn_gui'])) {
    //1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
    // website nhỏ thì dùng tài khoản miễn phí ok
    // tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
    // trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
    $SENDGRID_API_KEY = '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';

    extract($_REQUEST);

    require 'sendmail-sendgrid/vendor/autoload.php';

    $email = new \SendGrid\Mail\Mail();
    ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
    // Thông tin người gửi
    $email->setFrom($email1, $ho_ten);
    // Tiêu đề thư
    $email->setSubject($tieu_de);
    // Thông tin người nhận
    $email->addTo("hungpvph12160@fpt.edu.vn", "hungpvph12160");
    // Soạn nội dung cho thư
    // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
    $email->addContent(
        "text/html",
        $noi_dung
    );

    // tiến hành gửi thư
    $sendgrid = new \SendGrid($SENDGRID_API_KEY);
    try {
        $response = $sendgrid->send($email);

        //--- mấy dòng print này thích in ra thì in.
        // print $response->statusCode() . "\n";
        // print_r($response->headers());
        // print $response->body() . "\n";
        echo "gui thanh cong";
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row bg-light border pt-2">
        <div class="col-5">
            <div class="form-group jumbotron px-3 py-2">
                <form action="" method="post">
                    <label for="">Tiêu đề</label>
                    <input type="text" class="form-control " name="tieu_de" id="" aria-describedby="helpId" placeholder="">
                    <label for="">Nội dung</label>
                    <textarea class="form-control " name="noi_dung" id="" rows="3"></textarea>
                    <label for="">Họ tên</label>
                    <input type="text" class="form-control " name="ho_ten" id="" aria-describedby="helpId" placeholder="">
                    <label for="">Email</label>
                    <input type="text" class="form-control " name="email1" id="" aria-describedby="helpId" placeholder="">
                    <div class=" mt-3 text-center">
                        <button class="btn btn-primary " name="btn_gui">Gửi góp ý</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-7">
            <p class="font-weight-bold text-uppercase">mọi thông tin liên hệ vui lòng sang :
                <a href="http://localhost/xshop12/xshop/site/trang-chinh/?lien-he">liên hệ</a>
            </p>
        </div>
    </div>
</body>

</html>