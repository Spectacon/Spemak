<!doctype html>
<html class="no-js" lang="en">

<?php include 'include/head.php'; ?>

   
<?php include('processor/process_login.php') ?>

<body>

<!-- Main Wrapper Start -->
<?php include 'include/head2.php'; ?>
    
       
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
                                    
                                    <form action="" method="post" class="checkout-login-form">
                                      <?php include('include/errors.php'); ?>    
                                    <div class="row">
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="text" placeholder="Username/Email Address" name="username"></div>
                                            <div class="input-box col-md-6 col-12 mb-20"><input type="password" placeholder="Password" name="password"></div>
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
                                    <?php
                            if (isset($_SESSION['cart'])) :
                                $i = 1;
                                $total = 0;
                                foreach ($_SESSION['cart'] as $cart) :
                                    $cart_price = $cart["quantity"]*$cart["price"];
                            ?>
                            <?php
                                    $total1 = $cart["qty"] * $cart["item_price"];
                                    $total2 = number_format($total1, 2);
                            ?>
                                    <li><p><?= $cart['item_name']; ?> <?= $cart['qty']; ?> x <?php echo $cart["item_price"]; ?> </p><p>$ <?php echo $total2 ?></p></li>
                                    
                                    <?php
                                    $i++;
                                    endforeach;
                                endif;
                                ?>
                                    <li><p class="strong">cart subtotal</p><p class="strong"><?php echo "$ ".number_format($total_price, 2); ?></p></li>
                                    <li><p class="strong">Process Charges</p><p>
                                        <input type="radio" name="order-shipping" id="flat" /><label for="flat">Flat Rate $ 1.90</label><br />
                                       
                                    </p></li>
                                    <li><p class="strong">order total</p><p class="strong"><?php echo "$ ".number_format(1.9 + $total_price, 2); ?></p></li>
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