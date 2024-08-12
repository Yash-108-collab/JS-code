<?php
	$conn01 = mysqli_connect("localhost","root","","coffeeshop");

	if(!$conn01)
	{
		die("Connection Failed :" .mysqli_connect_error());

	}

?>