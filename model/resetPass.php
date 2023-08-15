<?php
require "../config/config.php";
include 'conn.php';

if (!empty($_POST['rs_pwd']) && !empty($_POST['rs_cfp']) && !empty($_REQUEST['usr'])) {
    if ($_POST['rs_pwd'] == $_POST['rs_cfp']) {
        //Nếu có username mà người ta đã nhập ở form forgot rồi thì update lại pass cho username đó
        $stmt = $conn->prepare("UPDATE user1 SET pass=? WHERE username = ?");
        $hs = password_hash($_POST['rs_pwd'], PASSWORD_DEFAULT);
        // $_REQUEST['usr'] là username lấy từ link gửi trong mail.
        $stmt->execute([$hs, $_REQUEST['usr']]);
        header("location: ../view/login.php");
        exit();
    } else echo 'Passwords not match';
} else echo "Can't change password!";
$conn == null;
?>