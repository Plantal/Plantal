<?php 
	$connect = new mysqli("127.0.0.1","root","root", "plantal");

	if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $connect->connect_error);
    exit();
	}

	$query = "SELECT * FROM users";

	$result = mysql_query($connect, $query);
	$options = "";

	while ($row = mysqli_fetch_array($result)) {
		$options = $options."<option>$row[1]</option>";
	}



 ?>