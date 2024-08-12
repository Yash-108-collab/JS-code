<?php
	include 'conn01.php';

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$type = $_REQUEST['type'];
		$quantity = $_REQUEST['quantity'];
		$special = $_REQUEST['special'];


		$sql = "INSERT INTO orderinfo (name,email,phone,type,quantity,special) VALUES ('$name','$email','$phone','$type','$quantity','$special')";
	
		if(mysqli_query($conn01,$sql))
		{
			include "index.php";
		}
		else
		{
			echo "unable to insert";
		}
	}
?>