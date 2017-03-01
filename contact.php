<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>Register </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="courses.html">Courses</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="signIn.php">SignIn</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</header>
<div class="container">
				<div class="row">
					<div class="col-md-6">

<h3>Your Message</h3>
<form action="" method="POST">
<div class="control-group">
		<div class="controls">
	Username: <input type="text" class="form-control" name="user"><br />	
		</div>
		</div> 
		<div class="control-group">
		<div class="controls">
	Email: <input type="email" class="form-control" name="email"><br />	
		</div>
		</div> 		

<div class="control-group">
		<div class="controls">
	Message :<textarea rows="10" name="message" cols="100" class="form-control" ></textarea>	
		</div>
		</div> 	

<input type="submit" value="Send" name="submit" />
</form>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>



<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['email']) ) {
	$user=$_POST['user'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$con=mysql_connect('localhost','root','12345') or die(mysql_error());
	mysql_select_db('learning') or die("cannot select DB");


	$sql="INSERT INTO contact(username,email,message) VALUES('$user','$email','$message')";

	$result=mysql_query($sql);


	if($result)
    {
	echo "Message Succesfully Send";
	}
     else {
	echo "Failure!";
	}



} else {
	echo "All fields are required!";
}
}
?>
	
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About</a> |
								<a href="courses.html">Courses</a> |
								
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2016.  <a href="" rel="develop">MR Technologies</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
    <!-- CREATE TABLE IF NOT EXISTS `conatct` (
        `id` INT NOT NULL AUTO_INCREMENT , 
    `username` varchar(200) NOT NULL,
    `email` varchar(200) NOT NULL,
    `message` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->