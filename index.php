<?php
require 'config/config.php';
require 'model/conn.php';
include 'view/header.php';
include 'view/promote.php';
include 'view/bestseller.php';
if(isset($_REQUEST['page'])){
    $page=$_REQUEST['page'];
    switch($page){
        case 'about':
        include 'view/about.php';
        break;
        case 'blog':
        include 'view/blog.php';
        break;
        case 'login':
            echo "<script> window.location.href='view/login.php';</script>";
            break;
        case 'logout';
                echo "<script> window.location.href='model/logout.php';</script>";
                break;
        case 'update';
                echo "<script> window.location.href='view/update_pro.php';</script>";
                break;        
        default:
        include 'view/product.php';
        break;
    }
}
else include 'view/product.php';
include 'view/footer.php';

?>