<?php
require "../config/config.php";
include 'conn.php';
if (!empty($_POST['name']) && !empty($_POST['usr']) && !empty($_POST['pwd']) && !empty($_FILES['file'])) {
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $usr = $_POST['usr'];
    $img = basename($_FILES['file']['name'], ".jpg");
    $stmt = $conn->prepare("INSERT INTO user1 VALUE(?,?,?,?)");
    $stmt->bindParam(1, $usr);
    $stmt->bindParam(2, password_hash($pwd,PASSWORD_DEFAULT));
    $stmt->bindParam(3, $name);
    $stmt->bindParam(4, $img);
    $stmt->execute();
    if ($stmt) {
        $dir = "../upload/" . basename($_FILES['file']['name']);
        $file = $_FILES['file']['tmp_name'];
        $stt = move_uploaded_file($file, $dir);
        $err =  $_FILES['file']['error'];
        header("location: ../view/login.php");
    }
} else echo "Enter enough fields please !";
$conn = null;
?>
