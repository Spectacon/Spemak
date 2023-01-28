<?php  include 'db/db.php'; ?>
<?php //include 'cart/process.php'; ?>
<?php //include 'cart/process2.php'; ?>
<?php //include 'cart/processing2.php'; ?>
<?php //include 'cart/header.php'; ?>
<?php //include 'include/head.php'; ?>
<?php //include 'include/head2.php'; ?>

<div class="container">
  <h1 class="my-4">Gift Card Selector</h1>
  <div class="row">
	
  <?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
    
             <!-- Product Start-->
             <div class="col-lg-4 col-md-6 col-12 mb-60">
             <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div class="product">
                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="#" class="img"><img src="img/product/<?php echo $row["image"]; ?>" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <span class="label">New</span>
                        </div>
                        <!-- Content -->
                        <div class="content">
                            <!-- Head Content -->
                            <div class="head fix">
                               
                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="product-details.html"><?php echo $row["name"]; ?></a></h5>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                  
                                    <span class="new">$<?php echo $row["price"]; ?></span>
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                                  </div>
                            </div>
                            <!-- Action Button -->
                            <div class="action-button fix">
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                            
                            </div>   
                        </div>
                    </div>
                    </form>
                </div><!-- Product End-->

                <!-- Product End-->
                <?php
					}
				}
			?>
  </div>

</div>
<?php // include 'footer.php'; ?>