<?php include 'cart/process.php'; ?>

<?php include 'db/db.php'; ?>
<?php include 'cart/header.php'; ?>
<?php //include 'include/head.php'; ?>
<?php //include 'shopping/process.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">

            
            
            <div class="col-md-4">
				<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			<img src="img/product.jpg" class="card-img-top">

			<div class="card-body">
				<h5 class="card-title">Product 1</h5>
				<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore excepturi quam quia quo alias iste magni et.</p>
				<a href="shop.php?pro_id=1" class="btn btn-success">Add to Cart</a>
			</div>
			</div>
		</div>
				<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
                   
                    <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
                    
                        <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                        <div class="title-category float-left">
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
                        </div>
                        <div class="price float-right">
						    <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                            
                        </div>
                        <div class="">
						<input type="text" name="quantity" value="1" class="form-control" />
                    </div>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                        
						   <input href="index.php?pro_id=1" type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                        
					</div>
				</form>
			</div>
			
			<div style="clear:both"></div>
            <?php
				//  THIS IS THE FILE
					?>
			<br />
	<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
				
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td> 
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					
				</table>
			</div>
    </div>