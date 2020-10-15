<?php
//1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
// website nhỏ thì dùng tài khoản miễn phí ok
// tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
// trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
$SENDGRID_API_KEY='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';

require 'vendor/autoload.php';

$email = new \SendGrid\Mail\Mail(); 
///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
// Thông tin người gửi
$email->setFrom("hungphung281101@gmail.com", "hung281101"); 
// Tiêu đề thư
$email->setSubject("Sending with SendGrid is Fun");
// Thông tin người nhận
$email->addTo("hungpvph12160@fpt.edu.vn", "hungpvph12160"); 
// Soạn nội dung cho thư
// $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
$email->addContent(
    "text/html", "<h2>Nội dung có sử dụng thẻ html</h2>"
);

// tiến hành gửi thư
$sendgrid = new \SendGrid($SENDGRID_API_KEY);
try {
    $response = $sendgrid->send($email);

    //--- mấy dòng print này thích in ra thì in.
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
 