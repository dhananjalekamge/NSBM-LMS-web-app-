<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>NSBM Learning Management System</title>
		<link rel="stylesheet" type="text/css" href="css/subjectcssCOM.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
<body bgcolor="#FFF1ED" >

<div class="wrapper">
	<div class="top-bar clearfix">
		<div class="top-bar-links">
			 
			 	<?php
			 	if(isset($_SESSION['username'])) {
			 		echo '<ul>
			 	<li>You are Login as :'.$_SESSION['username'].'</li>
			 	<li><a href="logout.php"><strong>Logout</strong></a></li></ul>';

			 	}
			 	else{
			 		echo'<ul>
			 
			 	<li><a href="register.php"><strong>SignUp</strong></a></li>
			 	<li><a href="login.php"><strong>Login</strong></a></li>
			 </ul>';}
			 ?>
		</div>
	</div>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="lecture.php">Lectures</a></li>
			<li><a href="Events.php">Events</a></li>
			<li><a href="thingstodo.php">Things To Do</a></li>
			<li><a href="unis.php">Universities</a></li>
			

		</ul>
	</nav>



<div id="div1">
      
      <div id="div13">
      <h4 id="head1">SELECT THE MODULE</h4>
      <br><br><br>

      

      <h3 class="head2"><a class="link2" target="blank" href="uploads/java_application_ticket_booking_sysytem.rar">Lecture - 1 BASICS OF C language</a>
      <?php
      if($_SESSION['username']=="lec"){
      	echo'
      <a href="upload.php">UPLOAD</a></h3>';}
      ?>
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Lecture - 2 Statments in C Language</a></h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Lecture - 3 Operators</a></h3>
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Lecture - 4 COnditions</a></h3>
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Lecture - 5 Switch case and goto</a></h3>
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Lecture - 6  Arrays</a></h3>
      <br><br>
      <hr>
      
      
      </div>
</div>


	<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>NSBM Green University Town</h4><br>
							<h5>
								309 , Dampe ,<br>
								Pitipana Road ,	<br>
								Colombo ,<br>
								Sri Lanka	
							</h5>
							<br>
							<h5>
								inquiries@nsbm.lk <br> 011 544 5000
							</h5>
						</div>
				</div>

				<div class="footercol">
					 <h3>Contact Us</h3>
					 	<form action="index.html">
					 		<input type="text" name="fname" placeholder="Enter Your First Name" required>
					 		<input type="text" name="lname" placeholder="Enter Your Last Name" required>
					 		<input type="text" name="email" placeholder="Enter Your Email" required>
					 		<textarea name="message" placeholder="Type Your Message" cols="23" rows="8"></textarea>
					 		<button>Submit</button>
					 	</form>
				</div>

				<div class="footercol">
					<h3>Social media</h3> 
					<a href=""><i class="fa fa-facebook-official"> Facebook</i></a><br>
					<a href=""><i class="fa fa-twitter" > Twitter</i></a><br>
					<a href=""><i class="fa fa-linkedin" > Linkedin</i></a><br>
					<a href=""><i class="fa fa-instagram" > Instagram</i></a>
				</div>

				<div class="footercol">
					<h3>Tweets</h3> 
					<div class="tweet">
						<a href="#">@NSBMGreenUni</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco <br>2 days ago</p>

					</div>
				</div>

			</footer>

			<div class="copyright">
				<div class="left">
					Copyright &copy; www.nsbm.lk All Right Reserverd 2017
				</div>

				<div class="right">
					This is Developed by Team Red-X
				</div>
			</div>


</div>

</body>
</html>