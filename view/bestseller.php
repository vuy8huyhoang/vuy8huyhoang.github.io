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
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
   



    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-4">
            <h3 style="" class="tittle text-center">Best Seller</h3>
            <div class="row">
                <?php
              
                if(isset($_REQUEST['pagi'])){
                    $offset = ($_REQUEST['pagi'] - 1) * 5;
                } else
                    $offset = 0;
                $stmt = $conn->query("SELECT * FROM product limit $offset,5");
                while ($row = $stmt->fetch()) {
                    echo '<div class="col product-men">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="assets/images/' . $row['Img'] . '.png" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">' . $row['Name'] . ' </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$' . $row['Price'] . '</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>';
                };
                ?>
            </div>
            <div class="cc2">
                <style>
                     .cc2{
                        text-align: center;
                        padding-top: 50px;
                     }
                     .cc:hover{
                        background-color: aquamarine;
                     }
                    </style>
                <?php
                $rows = $conn->query("SELECT count(*) FROM product")->fetchColumn();
                $total_pages = ceil($rows / 5);
                for ($i=1; $i <= $total_pages; $i++) {
                    echo " <a class='cc' style='color: red;margin-top:100px;margin-right:25px;border:solid 1px aqua;padding:10px 15px 10px 15px;border-radius:5px;cursor:pointer;'  href='index.php?pagi=$i'>$i</a>";
                }
                ?>

            </div>
        </div>
    </section>
    <!-- //ab -->
