<?php
session_start();

// Check if product is coming or not
if(isset($_POST["add_to_cart"]))
//if (isset($_GET['pro_id']))
 {

  $proid = $_GET['id'];

  // If session cart is not empty
  if (!empty($_SESSION['cart'])) {

    // Using "array_column() function" we get the product id existing in session cart array
    $acol = array_column($_SESSION['cart'], 'id');

    // now we compare whther id already exist with "in_array() function"
    if (in_array($proid, $acol)) {

      // Updating quantity if item already exist
      $_SESSION['cart'][$proid]['qty'] += 1;
    } else { 
      // If item doesn't exist in session cart array, we add a new item
      $item = [
        'id' => $_GET['id'],
        'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
        'qty' => 1,
         
     
        ];

      $_SESSION['cart'][$proid] = $item;
    }
  } else {
    // If cart is completely empty, then store item in session cart
    $item = [
      'id' => $_GET['id'],
      'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
      'qty' => 1
    ];

    $_SESSION['cart'][$proid] = $item;
  }
}
?>