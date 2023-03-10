<?php //session_start(); ?>
<?php //include 'dbcontroller.php'; ?>
<?php include 'dbcontroller.php'; ?>
<?php include 'header.php'; ?>
<?php include 'cart/process.php'; ?>
<body>

<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

    <!-- Header Section Start -->
    <div class="header-section section">
       
        <!-- Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Header Top Wrapper Start -->
                        <div class="header-top-wrapper">
                            <div class="row">

                                <!-- Header Social -->
                                <div class="header-social col-md-4 col-12">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>

                                <!-- Header Logo -->
                                <div class="header-logo col-md-4 col-12">
                                    <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
                                </div>
                                
                                
                                <div class="account-menu col-md-4 col-12">

                               <div class="d-flex">
                                    
                                    <!-- Account Menu <a class="btn btn-outline-success" href="cart/cart.php"> Cart </a>-->
                                    <?php //if (isset($_SESSION['cart'])) :
                                    //echo count($_SESSION['cart']); 
                                    ?>
                                    <?php //echo count($_SESSION['cart']); ?>
                                     <?php //endif; ?>
                                           
                                </div>
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="num"><?php echo count($_SESSION['cart']);; ?></span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <?php
                                                
                                                if (isset($_SESSION['cart'])) :
                                                    $i = 1;
                                                    foreach ($_SESSION['cart'] as $cart):
                                                //        $cart_price = $cart["quantity"]*$cart["price"];
                                                ?> 
                                                <div class="all-cart-product clearfix">
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.php"><img src="img/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.php"><?= $cart['pro_id']; ?></a></h5>
                                                            <p><?= $cart['qty']; ?> x $<?=  $cart['item_price']; ?></p>
                                                            <a href="cart/removecartitem.php?id=<?= $cart['pro_id']; ?>" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    
                                                        $total_price += ($cart["item_price"]*$cart["qty"]);
                                                        ?>
                                                </div>
                                                <?php
                                                $i++;
                                                endforeach;
                                            endif;
                                            ?>
                                                <!-- Cart Total -->
                                                <div class="cart-totals">
                                                    <h5>Total <span><?php echo "$ ".number_format($total_price, 2); ?></span></h5>
                                                   
                                                </div>
                                                <!-- Cart Button -->
                                                <div class="cart-bottom  clearfix">
                                                    <a href="checkout.php">Check out</a>
                                                </div>
                                            </div>
                                            
                                            
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Header Top Wrapper End -->

                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Bottom Start -->
        <div class="header-bottom section">
            <div class="container">
                <div class="row">
                   
                    <!-- Header Bottom Wrapper Start -->
                    <div class="header-bottom-wrapper text-center col">

                        <!-- Header Bottom Logo -->
                        <div class="header-bottom-logo">
                            <a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
                        </div>

                        <!-- Main Menu -->
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li class="active"><a href="index.php">home</a></li>
                                <li><a href="shop.php">shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.php">shop page</a></li>
                                        <li><a href="product-details.php">product details</a></li>
                                    </ul>
                                </li>
                                  <!-- <li><a href="about.php"></a></li>-->
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.php">cart</a></li>
                                        <li><a href="checkout.php">checkout</a></li>
                                        <li><a href="wishlist.php">wishlist</a></li>
										<li><a href="under-construction.php">Under Construction</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="contact.php">contact</a></li>
                            </ul>
                            
                            
                        </nav>
<!-- Header Search -->
<div class="header-search">
                            
                            <!-- Search Toggle -->
                            <button class="search-toggle"><i class="ion-ios-search-strong"></i></button>
                            
                            <!-- Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu section d-md-none"></div>

                    </div><!-- Header Bottom Wrapper End -->
                    
                </div>
            </div>
        </div><!-- Header Bottom End -->

        </div><!-- Header Section End -->