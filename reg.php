<?php 


	$conn = mysqli_connect("localhost","root","","nsbmlms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$id=$_POST['sid'];
	$username=$_POST['username'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];


	


	$sql = "INSERT INTO signup(ID,username,name,email,password) VALUES('$id', '$username','$name', '$email', '$password')";



	$result = mysqli_query($conn,$sql);

	header("location:index.php");

 ?>