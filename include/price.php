<?php

require('db/db.php');

// SQL QUERY
//$query = "SELECT * FROM `user`;";



// FETCHING DATA FROM DATABASE
$result = mysqli_query($con, "SELECT * FROM `product` ");
$row = mysqli_fetch_array( $result);

?>
