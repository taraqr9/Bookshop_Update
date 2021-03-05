<?php
include "init.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Nav Bar Start -->
    <form action="" method="POST"><?php include 'php/headnav.php'; ?></form>
    <!-- Nav Bar End -->


    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active">Product List</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        
                        
                        <?php 
                            if(isset($_POST['comics'])){
                                $query = $source->Query("SELECT * FROM books where category = 1");
                            }elseif(isset($_POST['computer'])){
                                $query = $source->Query("SELECT * FROM books where category = 2");
                            }elseif(isset($_POST['entertainment'])){
                                $query = $source->Query("SELECT * FROM books where category = 3");
                            }elseif(isset($_POST['health'])){
                                $query = $source->Query("SELECT * FROM books where category = 4");
                            }elseif(isset($_POST['history'])){
                                $query = $source->Query("SELECT * FROM books where category = 5");
                            }elseif(isset($_POST['horror'])){
                                $query = $source->Query("SELECT * FROM books where category = 6");
                            }elseif(isset($_POST['literature'])){
                                $query = $source->Query("SELECT * FROM books where category = 7");
                            }elseif(isset($_POST['mysteries'])){
                                $query = $source->Query("SELECT * FROM books where category = 8");
                            }elseif(isset($_POST['religion'])){
                                $query = $source->Query("SELECT * FROM books where category = 9");
                            }elseif(isset($_POST['science'])){
                                $query = $source->Query("SELECT * FROM books where category = 10");
                            }else{
                                $query = $source->Query("SELECT * FROM books");
                            }
                            
                            $query = $source->FetchAll();
                            $CountRow = $source->CountRows();
                            if($CountRow>0){
                                foreach($query as $row):
                                    echo "
                                <div class='col-md-4'>
                                <div class='product-item'>
                                    <div class='product-title' style='height:100px;'>
                                        <a href='product-detail.php?bid=".$row->id."'>$row->name</a>
                                        <div class='ratting'>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                            <i class='fa fa-star'></i>
                                        </div>
                                    </div>
                                    <div class='product-image' >
                                        <a href='product-detail.html'>
                                            <img src='assets/bookimg/".$row->image."' style='height:400px;width:400px;' alt='Product Image'>
                                        </a>
                                        <div class='product-action'>
                                            <a href='#'><i class='fa fa-cart-plus'></i></a>
                                            <a href='#'><i class='fa fa-heart'></i></a>
                                        </div>
                                    </div>
                                    <div class='product-price'>
                                        <h3>".$row->price."</h3>
                                        <a class='btn' href='checkout.php?buyNow=".$row->id."'><i class='fa fa-shopping-cart'></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                                ";
                                endforeach;
                            }
                        ?>
                        
                    </div>
                </div>
                <!-- Side Bar Start -->
                <!-- FIXME -->
                <?php include 'php/sideBarCate.php' ?>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Footer Start -->
    <?php include 'php/footerDetails.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>