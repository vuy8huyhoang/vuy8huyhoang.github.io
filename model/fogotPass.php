<?php
require "../config/config.php";
include 'conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['fg_usr'];
    $email = $_POST['fg_mail'];

    // Kiểm tra xem username có tồn tại trong cơ sở dữ liệu không
    $query = "SELECT * FROM user1 WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        echo "Tên người dùng không tồn tại";
    } else {
        // Gửi email cho người dùng bằng PHPMailer
        $resetLink = "http://localhost:3000/view/resetPass.php?username=" . urlencode($username);
        
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username   = 'vubhps35339@fpt.edu.vn'; // SMTP username
        $mail->Password   = 'rwhidvvrwpmzgxxn'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable implicit TLS encryption
        $mail->Port       = 465; 
        
        $mail->setFrom('vubhps35339@fpt.edu.vn', 'Bui Huy Vu');
        $mail->addAddress($email, $username);
        $mail->Subject = 'Reset password';
        $mail->Body = "Xin chào $username,\n\nVui lòng truy cập liên kết sau để đặt lại mật khẩu của bạn:\n\n$resetLink";
        
        if ($mail->send()) {
            echo "Vui lòng kiểm tra email của bạn để đặt lại mật khẩu";
        } else {
            echo "Có lỗi xảy ra trong quá trình gửi email. Lỗi: " . $mail->ErrorInfo;
        }
    }
}
?>