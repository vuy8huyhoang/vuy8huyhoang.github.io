<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Bootie Ecommerce Bootstrap Responsive Web Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>

    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.html"><span >GameCC</span></a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?page=about">Giới thiệu</a></li>
                        <li><a href="index.php?page=blog">Tin tức</a></li>
                        <li><a href="index.php?page=login">Đăng nhập</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Menu xuống <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="shop.html">Mua ngay</a></li>
                                <li><a href="shop-single.html">Sản phẩm</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Liên hệ</a></li>
                        <li>
                            <?php
                            if(isset($_COOKIE['usr']))
                                echo $_COOKIE['usr'];
                            
                            ?>
                        </li>
                        <li>
                            <style>
                               li img{
                                border-radius: 50%;
                                width: 40px;
                                height: auto;
                                border-style: inset;
                                }
                            </style>
                            <?php
                            if (isset($_COOKIE['img'])) {
                                $img = $_COOKIE['img'];
                                echo "<img src='assets/images/$img.jpg' alt='No img'>";
                            };
                            ?>
                        </li>
                        <li><a href="index.php?page=logout">Đăng xuất</a></li>
                        <li><a href="index.php?page=update">Xóa sửa</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-info">
            <p>Xu hướng tuần</p>
            <h3 class="mb-4">Máy chơi game</h3>
            <div class="ban-buttons">
                <a href="shop-single.html" class="btn">Mua ngay</a>
                <a href="single.html" class="btn active">Đọc thêm</a>
            </div>
        </div>
        <!--// banner-inner -->

    </div>