<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

$VIEW_NAME = "tai-khoan/quen-mk-form.php";

if (exist_param("btn_forgot")) {
    $user = khach_hang_select_by_id($ma_kh);
    if ($user) {
        if ($user['email'] != $email1) {
            $MESSAGE = "Sai địa chỉ email!";
        } else {
            $MESSAGE = "Mật khẩu của bạn là: " . $user['mat_khau'];
            if (isset($_POST['btn_forgot'])) {
                //1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
                // website nhỏ thì dùng tài khoản miễn phí ok
                // tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
                // trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
                $SENDGRID_API_KEY = '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';

                extract($_REQUEST);

                require '../trang-chinh/sendmail-sendgrid/vendor/autoload.php';

                $email = new \SendGrid\Mail\Mail();
                ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
                // Thông tin người gửi
                $email->setFrom("hungpvph12160@fpt.edu.vn", "hungpvph12160");
                // Tiêu đề thư
                $email->setSubject("lấy lại mật khẩu");
                // Thông tin người nhận
                $email->addTo($email1, $ma_kh);
                // Soạn nội dung cho thư
                // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
                $email->addContent(
                    "text/html",
                    "bạn đã lấy lại mật khẩu . mật khẩu của bạn là : " . $user['mat_khau']
                );

                // tiến hành gửi thư
                $sendgrid = new \SendGrid($SENDGRID_API_KEY);
                try {
                    $response = $sendgrid->send($email);

                    //--- mấy dòng print này thích in ra thì in.
                    // print $response->statusCode() . "\n";
                    // print_r($response->headers());
                    // print $response->body() . "\n";
                    // echo "gui thanh cong";
                } catch (Exception $e) {
                    echo 'Caught exception: ' . $e->getMessage() . "\n";
                }
            }
            $VIEW_NAME = "tai-khoan/dang-nhap-form.php";
            global $ma_kh, $mat_khau;
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
}

require '../layout.php';
