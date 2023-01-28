<?php session_start(); ?>

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
                                    
                                    <th class="name">product name</th>
                                    <th class="qty">Qty</th>
                                    <th class="qty">Update Qty</th>
                                    <th class="price">price</th>
                                    <th class="total">total</th>
                                    
                                    <th class="remove">remove</th>
                                </tr>
                            </thead>
                            
                            <!-- Table Body -->
                            <tbody>
                            <?php
      if (isset($_SESSION['cart'])) :
        $i = 1;
        $total = 0;
        foreach ($_SESSION['cart'] as $cart) :
            $cart_price = $cart["quantity"]*$cart["price"];
      ?>
                                <tr>
                                    <td><span class="cart-number"><?php echo $i; ?> </span></td>
                                    
                                    <td><a href="#" class="cart-pro-title"><?= $cart['item_name']; ?></a></td>
                                    <td><form action="cart/update.php" method="post">
                                        <div class="product-quantity">
                                    
                                        <input type="text" value="<?= $cart['qty']; ?>" name="qty" min="1">
                                       
                                    </div></td>
                                    <td class=""><input type="hidden" name="upid" value="<?= $cart['id']; ?>">
                            <input type="submit" name="update" class="button" color="purple" value="Update" >
                            </td>
                            </form>
                                    <td><p class="cart-pro-price">$<?php echo $cart["item_price"]; ?></p></td>
                                    <?php
                                    $total1 = $cart["qty"] * $cart["item_price"];
                                    $total2 = number_format($total1, 2);
                                    //$total3 = echo number_format($cart["qty"] * $cart["item_price"], 2);
                                    //$total_quantity += $item["quantity"];
			                    	//$total_price += ($cart["item_price"]*$cart["qty"]);
                                    ?>
                                    <td><p class="cart-price-total">$ <?php echo $total2 ?> </p></td>
                                    <td><a class="cart-pro-remove" href="cart/removecartitem.php?id=<?= $cart['id']; ?>" >
                                    <i  class="fa fa-trash-o"  >
                                </i></a></td>
                                </tr>
                                
                                <?php
                                    $i++;
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">

                       
                       
                        <!-- Cart Action -->
                        <div class="cart-action col-lg-4 col-md-6 col-12 mb-30">
                            <a href="#" class="button">Continiue Shopping</a>
             
                            <input type="hidden" name="upid" value="<?= $cart['id']; ?>">
                            <input type="submit" name="update" class="button" value="Update" >
                            
                        
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
                        <?php
                        //if (!isset($_SESSION['cart'])){
                            $total=0;
                           // foreach($_SESSION["cart"] as $keys => $cart){

                            
						
                        
                        ?>
                        <!-- Cart Checkout Progress -->
                        <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Process Checkout</h4>
                            
                            <p><span>Subtotal</span><span><?php echo "$ ".number_format($total_price, 2); ?></span></p>
                            <h5><span>Grand total</span><span><?php echo "$ ".number_format($total_price, 2); ?></span></h5>
                            <a href="checkout.php" class="button">process to checkout</a>
                        </div>
                        
                    </div>
                    <?php
                         //   }
					// }
					?>
                  

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