<?php
include "init.php";

if (isset($_POST['registration'])) {
    if (!empty($_POST['regName']) || !empty($_POST['regEmail']) || !empty($_POST['phone']) || !empty($_POST['address']) || !empty($_POST['regPassword'])) {
        if (new signup($_POST['regName'], $_POST['regEmail'], $_POST['regPassword'], $_POST['phone'], $_POST['address'])) {
            $Done = "Registration Successfull";
        } else {
            $Error = "Something went wrong";
        }
    } else {
        $Error = "Please fillup your all details";
    }
}

if (isset($_POST['login'])) {
    if (!empty($_POST['logEmail']) || !empty($_POST['logPassword'])) {
        if ($login = new login($_POST['logEmail'], $_POST['logPassword'])) {
            $id = $login->id($_POST['logEmail']);
            $_SESSION['login_success'] = $login->name($_POST['logEmail']);
            $_SESSION['logId'] = $login->id($_POST['logEmail']);
            header("location:index.php");
        }
    } else {
        $Error = "Please enter your email and password";
    }
}
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
    <?php include 'php/headnav.php'; ?>
    <!-- Nav Bar End -->
    <!-- NOTE  if User not login before buys something then the msg will showUP -->
    <?php

    if(!empty($_GET['Error'])){
        echo "<span class='h2 text-danger'> Please Registration or Login first </span>";
        $_GET['Error'] = "";
    }
    ?>
    

    <!-- Login Start -->
    <div class="login">
        <div class="container-fluid">
            <?php
            if (!empty($Error)) {
                echo "<p class='text-danger'>" . $Error . "</p>";
                $Error = "";
            } elseif (!empty($Done)) {
                echo "<p class='text-success'>" . $Done . "</p>";
                $Done = "";
            }
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="register-form">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Enter Name" name="regName">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" placeholder="E-mail" name="regEmail">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="phone" placeholder="Mobile No" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>
                                    <input class="form-control" type="text" placeholder="Address" name="address">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="regPassword">
                                </div>


                                <div class="col-md-12">
                                    <input class="btn" type="submit" name="registration" value="Registration">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <form method="POST">
                            <div class="row">

                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" placeholder="E-mail" name="logEmail">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="logPassword">
                                </div>
                                <div class="col-md-12">
                                    <input class="btn" type="submit" name="login" value="Login">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

    <!-- Footer Start -->
    <?php include 'php/footerDetails.php'; ?>
    <!-- Footer End -->x

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