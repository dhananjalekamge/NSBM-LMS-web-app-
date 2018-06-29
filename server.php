<?php 
if(isset($_POST['submit'])){
	$username = "";
$name = "";
$email = "";
$errors  = array();
//db connection

$db = mysqli_connect('localhost','root','','nsbmlms');

//if click submit

if (isset($_POST['submit'])){
	$username = mysql_real_escape_string($_POST['username']);
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);

//cheack pw

if ($password_1 != $password_2) {
	# code...
	array_push($errors, "Passwords are doesnot match");
}

//save data

if(count($errors)==0){
	//encrypted password
	$password = md5($password_1);
	$sql = "INSERT INTO signup (username , name , email , password) VALUES ('$username' , '$name' , '$email' , '$password');"
	
}}
}
 }?>
