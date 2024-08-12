<?php
	include 'conn01.php';

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$message = $_REQUEST['msg'];


		$sql = "INSERT INTO contact (name,email,number,message) VALUES ('$name','$email','$number','$message')";
	
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