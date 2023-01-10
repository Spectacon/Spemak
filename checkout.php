<!doctype html>
<html class="no-js" lang="en">

<?php include 'include/head.php'; ?>
   
<?php include('processor/process_login.php') ?>

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
                                    <a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
                                </div>

                                <!-- Account Menu -->
                                <div class="account-menu col-md-4 col-12">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="num">2</span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <div class="all-cart-product clearfix">
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.php"><img src="img/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.php">Holiday Candle</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.php"><img src="img/cart/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.php">Christmas Tree</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cart Total -->
                                                <div class="cart-totals">
                                                    <h5>Total <span>£12.00</span></h5>
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
                            <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
                        </div>

                        <!-- Main Menu -->
                        <?php include 'include/nav.php'; ?>

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
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>Checkout</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Checkout Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 col-12 mb-30">
                   
                    <!-- Checkout Accordion Start -->
                    <div id="checkout-accordion" class="panel-group">
                       
                        <!-- Checkout Method -->
                        <div class="panel single-accordion">
                           
                            <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method">1. checkout method</a>
                            
                            <div id="checkout-method" class="collapse show">
                                <div class="checkout-method accordion-body fix">
                                   
                                    <ul class="checkout-method-list">
                                        <li class="active" data-form="checkout-login-form">Login</li>
                                        <li data-form="checkout-register-form">Register</li>
                                    </ul>
                                    
                                    <form action="login.php" method="post" class="checkout-login-form">
                                      <?php include('include/errors.php'); ?>    
                                    <div class="row">
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="email" placeholder="Email Address"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="password" placeholder="Password"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="submit" value="Login"></div>
                                        </div>
                                    </form>
                                    
                                    <form action="#" class="checkout-register-form">
                                        <div class="row">
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="text" placeholder="First Name"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="text" placeholder="Last Name"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="email" placeholder="Email Address"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="password" placeholder="Password"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="password" placeholder="Confirm Password"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="submit" value="Register"></div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Billing Method -->
                        <div class="panel single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">2. billing informatioon</a>
                            <div id="billing-method" class="collapse">
                                <div class="accordion-body billing-method fix">
                                   
                                    <form action="#" class="billing-form checkout-form">
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <select>
                                                  <option value="1">Select a country</option>
                                                  <option value="2">United States of America</option>
                                                  <option value="3">Algeria</option>
                                                  <option value="4">Nigeria</option>
                                                  <option value="5">Ghana</option>
                                                  <option value="6">Albania</option>
                                                  <option value="7">Bahrain</option>
                                                  <option value="8">Colombia</option>
                                                  <option value="9">Dominican Republic</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="text" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">								
                                                <input type="text" placeholder="Last Name">
                                            </div>
            
                                            <div class="col-12 mb-20">
                                                <input placeholder="Street address" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Town / City" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="text" placeholder="State / County">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input placeholder="Postcode / Zip" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input placeholder="Phone Number" type="text">
                                            </div>							
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Shipping Method -->
                        <div class="panel single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-method">3. shipping informatioon</a>
                            <div id="shipping-method" class="collapse">
                                <div class="accordion-body shipping-method fix">
                                   
                                    <h5>shipping address</h5>
                                    <p><span>address&nbsp;</span>Bootexperts, Banasree D-Block, Dhaka 1219,</p>
                                    
                                    <button class="shipping-form-toggle">Ship to a different address?</button>
                                    
                                    <form action="#" class="shipping-form checkout-form">
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <select>
                                                  <option value="1">Select a country</option>
                                                  <option value="2">United States of America</option>
                                                  <option value="3">Algeria</option>
                                                  <option value="4">Nigeria</option>
                                                  <option value="5">Ghana</option>
                                                  <option value="6">Albania</option>
                                                  <option value="7">Bahrain</option>
                                                  <option value="8">Colombia</option>
                                                  <option value="9">Dominican Republic</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="text" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">								
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <input placeholder="Street address" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Town / City" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="text" placeholder="State / County">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input placeholder="Postcode / Zip" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">									
                                                <input placeholder="Phone Number" type="text">
                                            </div>							
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Payment Method -->
                        <div class="panel single-accordion">
                            <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">4. Payment method</a>
                            <div id="payment-method" class="collapse">
                                <div class="accordion-body payment-method fix">
                                   
                                    <ul class="payment-method-list">
                                        
                                        <li class="payment-form-toggle"><img src = "img/svg/mastercard.svg"  width="110" height="110" alt="MasterCard"/></li>
                                        <li  class="payment-form-toggle"><img src = "img/svg/visa.svg" width="110" height="110" alt="Visa Card"/></li>
                                        <!-- <li class="payment-form-toggle">credit card</li>-->
                                        
                                    </ul>
                                    
                                    <form action="#" class="payment-form">
                                        <div class="row">
                                            <div class="input-box col-12 mb-20">
                                                <label for="card-name">Name on Card *</label>
                                                <input type="text" id="card-name" />
                                            </div>
                                            <div class="input-box col-12 mb-20">
                                                <label>Credit Card Type</label>
                                                <select>
                                                    <option>Please Select</option>
                                                    <option>Master Card</option>
                                                    <option>Visa Card</option>
                                                </select>
                                            </div>
                                            <div class="input-box col-12 mb-20">
                                                <label for="card-number">Credit Card Number *</label>
                                                <input type="text" id="card-number" />
                                            </div>
                                            <div class="input-box col-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <label>Expiration Month/Year</label>
                                                        <input type="month" id="date" placeholder="Month/Year" name="date">    
                                                    </div>
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <label>Cvv</label>
                                                        <input type="text" id="date" placeholder="3 Last Digit" name="date">
                                                    </div>
                                                    
                                                   

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- Checkout Accordion Start -->
                    
                </div>
                
                <!-- Order Details -->
                <div class="col-lg-6 col-12 mb-30">
                   
                    <div class="order-details-wrapper">
                        <h2>your order</h2>
                        <div class="order-details">
                            <form action="#">
                                <ul>
                                    <li><p class="strong">product</p><p class="strong">total</p></li>
                                    <li><p>Holiday Candle x1</p><p> $104.99</p></li>
                                    <li><p>Christmas Tree x1 </p><p>$85.99</p></li>
                                    <li><p class="strong">cart subtotal</p><p class="strong">$190.98</p></li>
                                    <li><p class="strong">shipping</p><p>
                                        <input type="radio" name="order-shipping" id="flat" /><label for="flat">Flat Rate $ 7.00</label><br />
                                        <input type="radio" name="order-shipping" id="free" /><label for="free">Free Shipping</label>
                                    </p></li>
                                    <li><p class="strong">order total</p><p class="strong">$190.98</p></li>
                                    <li><button class="button">place order</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div><!-- Checkout Section End-->

       
    <?php include 'include/footer.php'; ?>

    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS -->
<script src="js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>


</html>