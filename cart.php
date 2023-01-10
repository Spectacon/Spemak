<!doctype html>
<html class="no-js" lang="en">


<?php include 'include/head.php'; ?>
    <?php include 'include/head2.php'; ?>

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
                    <h1>Cart</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Cart Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <div class="table-responsive mb-30">
                        <table class="table cart-table text-center">
                            
                            <!-- Table Head -->
                            <thead>
                                <tr>
                                    <th class="number">#</th>
                                    <th class="image">image</th>
                                    <th class="name">product name</th>
                                    <th class="qty">quantity</th>
                                    <th class="price">price</th>
                                    <th class="total">totle</th>
                                    <th class="remove">remove</th>
                                </tr>
                            </thead>
                            
                            <!-- Table Body -->
                            <tbody>
                                <tr>
                                    <td><span class="cart-number">1</span></td>
                                    <td><a href="#" class="cart-pro-image"><img src="img/product/1.jpg" alt="" /></a></td>
                                    <td><a href="#" class="cart-pro-title">Holiday Candle</a></td>
                                    <td><div class="product-quantity">
                                        <input type="text" value="0" name="qtybox">
                                    </div></td>
                                    <td><p class="cart-pro-price">$104.99</p></td>
                                    <td><p class="cart-price-total">$104.99</p></td>
                                    <td><button class="cart-pro-remove"><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                                <tr>
                                    <td><span class="cart-number">2</span></td>
                                    <td><a href="#" class="cart-pro-image"><img src="img/product/2.jpg" alt="" /></a></td>
                                    <td><a href="#" class="cart-pro-title">Christmas Tree</a></td>
                                    <td><div class="product-quantity">
                                        <input type="text" value="0" name="qtybox">
                                    </div></td>
                                    <td><p class="cart-pro-price">$85.99</p></td>
                                    <td><p class="cart-price-total">$85.99</p></td>
                                    <td><button class="cart-pro-remove"><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                       
                        <!-- Cart Action -->
                        <div class="cart-action col-lg-4 col-md-6 col-12 mb-30">
                            <a href="#" class="button">Continiue Shopping</a>
                            <button class="button">update cart</button>
                        </div>
                        
                        <!-- Cart Cuppon -->
                        <div class="cart-cuppon col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Discount Code</h4>
                            <p>Enter your coupon code if you have</p>
                            <form action="#" class="cuppon-form">
                                <input type="text" placeholder="Cuppon Code">
                                <button class="button">apply coupon</button>
                            </form>
                        </div>
                        
                        <!-- Cart Checkout Progress -->
                        <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Process Checkout</h4>
                            <p><span>Subtotal</span><span>$190.98</span></p>
                            <h5><span>Grand total</span><span>$190.98</span></h5>
                            <button class="button">process to checkout</button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- Cart Section End-->

       
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