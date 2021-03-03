<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link active" style="color: white;">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" style="color: #61F1FF;">Category</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Comics</a>
                            <a href="#" class="dropdown-item">Computers & Tech</a>
                            <a href="#" class="dropdown-item">Entertainment</a>
                            <a href="#" class="dropdown-item">History</a>
                            <a href="#" class="dropdown-item">Horror</a>
                            <a href="#" class="dropdown-item">Literature & Fiction</a>
                            <a href="#" class="dropdown-item">Religion</a>
                            <a href="#" class="dropdown-item">Science & Math</a>
                        </div>
                    </div>
                    <a href="product-list.php" class="nav-item nav-link">Products</a>
                    <a href="product-detail.php" class="nav-item nav-link">Product Detail</a>

                </div>
                <?php
                if (empty($_SESSION['login_success'])) {
                    echo "
                            <div class='navbar-nav ml-auto'>
                                            <div class='nav-item dropdown'>
                                                <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>User Account</a>
                                                <div class='dropdown-menu'>
                                                    <a href='login.php' class='dropdown-item'>Login</a>
                                                    <a href='login.php' class='dropdown-item'>Register</a>
                                                </div>
                                            </div>
                                        </div>
                            ";
                } else {
                    echo "
                            <div class='navbar-nav ml-auto'>
                                            <div class='nav-item dropdown'>
                                                <a href='#' class='nav-link text-white dropdown-toggle' data-toggle='dropdown'>".$_SESSION['login_success']."</a>
                                                <div class='dropdown-menu'>
                                                    <a href='my-account.php' class='dropdown-item'>My Account</a>
                                                    <a href='cart.php' class='dropdown-item'>Cart</a>
                                                    <a href='checkout.php' class='dropdown-item'>Checkout</a>
                                                    <a href='logout.php' class='dropdown-item'>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                            ";
                }
                ?>

            </div>
        </nav>
    </div>
</div>

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php">
                        <h1>BOOKSHOP</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->