<?php

require('db/db.php');

// SQL QUERY
//$query = "SELECT * FROM `user`;";



// FETCHING DATA FROM DATABASE
//$result = mysqli_query($con, "SELECT * FROM `product` ");
$result = mysqli_query($con, "SELECT * FROM tbl_product ORDER BY id ASC");
//$query = "SELECT * FROM tbl_product ORDER BY id ASC";
$row = mysqli_fetch_array( $result);
//$row = mysqli_fetch_array( $query);

?>


