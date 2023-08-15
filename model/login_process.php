<?php
require "../config/config.php";
include 'conn.php';
if (isset($_POST['usr'])&& isset($_POST['pwd'])){
    $usr=$_POST['usr'];
    $pwd=$_POST['pwd'];
} else "Enter password and username please";
$stmt = $conn->prepare("SELECT * FROM user1 WHERE username =:u");
// $stmt->bindParam(1, $usr);
// $stmt->bindParam(2, $pwd);
$stmt->execute([":u" => $usr]);

$user = $stmt->fetch();
if($user&&password_verify($pwd,$user['pass'])){
    
    
    setcookie('usr',$user['img'],time()+7200,'/');
    setcookie('usr',$user['name'],time()+7200,'/');
    header("location: ../index.php");
} else echo "Fail";
$conn = null;
?>
