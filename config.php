	<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "shop_db";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{

		die("failed to connect!");
	}



	$conn = mysqli_connect('localhost', 'root', '', 'shop_db') or die('connection failed');

	?>