<?php

require('db/db.php');

// SQL QUERY
$query = "SELECT * FROM `user`;";

// FETCHING DATA FROM DATABASE
$result = $con->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "Roll No: " .
				$row["Product"]. " - Name: " .
				$row["Price"]. " | amount: " .
				$row["Quantity"]. "<br>";
		}
	}
	else {
		echo "0 results";
	}

$con->close();

?>
