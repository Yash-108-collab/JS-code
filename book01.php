<?php
	include 'conn01.php';

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['phone'];
		$date = $_REQUEST['date'];
		$time = $_REQUEST['time'];
		$guests = $_REQUEST['guests'];
		$requests = $_REQUEST['requests'];


		$sql = "INSERT INTO book (name,email,phone,date,time,guest,request) VALUES ('$name','$email','$number','$date','$time','$guests','$requests')";
	
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