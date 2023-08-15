<?php
require '../config/config.php';
require 'conn.php';
if (!empty($_POST['up_id']) && !empty($_POST['up_name']) && !empty($_POST['up_price']) && file_exists($_FILES['up_img']['tmp_name'])) { $id = $_POST['up_id'];
$stmt = $conn->prepare("SELECT * FROM product WHERE ID = ?");
$stmt->execute([$id]);
$prod = $stmt->fetch();
if ($prod) {
var_dump($prod);
$stmt = $conn->prepare("UPDATE product SET name = ?, price = ?, img = ? WHERE ID = ? "); $stmt->execute([$_POST['up_name'], $_POST['up_price'], $_FILES['up_img']['name'], $id]);
if ($stmt) {
}
echo "Successfully Updated !";
} else echo 'Product is not exits';
 } else {
}
echo "Input enough value !";
$conn = null;
?>