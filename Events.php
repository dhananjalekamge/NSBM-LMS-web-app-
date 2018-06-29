<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LMS@NSBM</title>
		<link rel="stylesheet" type="text/css" href="css/events.css">
		<link src="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script>
		.mySlides{display:none;}
	</script>

</head>	


<body bgcolor="#F7F5D8	" >

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

    <div class="sub">
    	<h1>Events</h1>
    		<div class="sub1">
    	<script type="text/javascript">
<!-->
var image1=new Image()
image1.src="img/4 (1).jpg"
var image2=new Image()
image2.src="img/4.jpg"
var image3=new Image()
image3.src="img/Google-IO-01.jpg"
//-->
</script>
</head>
<body>
<img src="img/4 (1).jpg" name="slide" width="50" height="50">
<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",3500)
}
slideit()
//-->
</script>
	<div class="sub2 "><p>lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
				<h2>Upcoming Events</h2>
	
				<div class="sub3">
				<h5 >Mini Hackethon </h5>
					<img src="img/20228858_1416333308416220_5551852347939987580_n.jpg">
					<input type="button" class="button" value="JOIN">
					</div>

					<div class="sub4">
					<h5 >Appreciation </h5>
						<img src="img/20287007_1315359545229531_6893095387783095542_o.jpg">
						<input type="button" class="button1" value="JOIN">
					</div>
    		</div>
    	
    </div>
   
    
    
    
    
    
    
    
    



			<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>NSBM Green University Town</h4><br/>
							<h5>
								309 , Dampe ,<br/>
								Pitipana Road ,	<br/>
								Colombo ,<br/>
								Sri Lanka	
							</h5>
							<br/>
							<h5>
								inquiries@nsbm.lk <br/> 011 544 5000
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
						quis nostrud exercitation ullamco <br/>2 days ago</p>

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