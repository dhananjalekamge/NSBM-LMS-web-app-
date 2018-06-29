<?php 

session_start();

	$conn = mysqli_connect("localhost","root","","nsbmlms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

$id = $_POST['username'];
$pass = $_POST['password'];


$sql = "SELECT * FROM leclog WHERE ID='$id' AND password='$pass'";


$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	header('Location:login.php');
}
else {
 	$_SESSION['username'] = $row['username']; 	
 	header('Location:faculty.php');

}


 ?>