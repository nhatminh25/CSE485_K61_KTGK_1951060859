<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
        $mail->isSMTP();// send SMTP
        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'hnminh020501@gmail.com';// SMTP username
        $mail->Password = 'idsuwcotmwtrxogc'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('hnminh020501@gmail.com', '37.Hà Nhật Minh.1951060859');

        $mail->addReplyTo('hnminh020501@gmail.com', '37.Hà Nhật Minh.1951060859');
        
        $mail->addAddress('haminh0205@gmail.com');

        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = '[Công nghệ Web-61TH1] Test SendEmail điểm danh';
        $mail->Body = '37.Hà Nhật Minh.1951060859';
    
        if($mail->send()){
            echo 'Thư đã được gửi đi';
        } else{
            echo 'Lỗi. Thư chưa gửi được';
        }  
    } catch(Exception $e) {
        echo "Có lỗi: ";
    }
?>