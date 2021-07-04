<?php
	

	$con = mysqli_connect("localhost", "root", "", "grootantask") or die(mysqli_error($con));
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$user_registration_query = "insert into signup (name,email,password,contact) values ('$name','$email', '$password', '$contact')";
	$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
	header('location:login.html');
	?>
