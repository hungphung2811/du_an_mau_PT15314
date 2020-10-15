<?php
require '../../global.php';
require '../../dao/khach-hang.php';

check_login();

extract($_REQUEST);

if (exist_param("btn_change")) {
    if ($mat_khau2 != $mat_khau3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
    } else {
        $user = khach_hang_select_by_id($ma_kh);
        if ($user) {
            if ($user['mat_khau'] == $mat_khau) {
                try {
                    khach_hang_change_password($ma_kh, $mat_khau2);
                    $MESSAGE = "Đổi mật khẩu thành công!";
                    if (isset($_POST['btn_change'])) {
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
                        $email->setSubject("Đổi mật khẩu");
                        // Thông tin người nhận
                        $email->addTo($email1, $ma_kh);
                        // Soạn nội dung cho thư
                        // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
                        $email->addContent(
                            "text/html",
                            "bạn đã đổi mật khẩu sang : " . $mat_khau2
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
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại !";
                }
            } else {
                $MESSAGE = "Sai mật khẩu!";
            }
        } else {
            $MESSAGE = "Sai mã đăng nhập!";
        }
    }
}


$VIEW_NAME = "tai-khoan/doi-mk-form.php";
require '../layout.php';
