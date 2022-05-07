<?php
include_once("auth.php"); 

if (isset($_POST['submit'])) {
		  	
  	$name = $_POST['name'];
  	$position = $_POST['position'];
  	$email_address = $_POST['email_address'];
  	$password = $_POST['password'];



  	$sql = "INSERT INTO account (email_address,password) VALUES('$email_address','$password')";
  	$result = mysqli_query($con,$sql);

  	if ($result) {
  		header("location:login.php"); 
  	}
  	else {
  		header("location:signup.php");
  	}

  	$sql1 = "INSERT INTO user (user_id,name, position) VALUES (LAST_INSERT_ID(),'$name', '$position')";
  	$result1 = mysqli_query($con,$sql1);

  	if ($result1) {
  		header("location:login.php"); 
  	}
  	else {
  		header("location:signup.php");
  	}
}
?>