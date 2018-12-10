<?php 

  include 'core/init.php';

?>

<html>
	<head>
		<title>twitter</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
		<link rel="stylesheet" href="assets/css/style-complete.css"/>
	</head>

<body>
<div class="front-img">
	<img src="assets/images/landingpage.jpg"></img>
</div>	

<div class="wrapper">
<div class="header-wrapper">
	
	<div class="nav-container">
		<div class="nav">
			
			<div class="nav-left">
				<ul>
					<li><i class="fa fa-twitter" aria-hidden="true"></i><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>

			<div class="nav-right">
				<ul>
					<li><a href="#">Language</a></li>
				</ul>
			</div>

		</div>

	</div>

</div>
	
<div class="inner-wrapper">
	<div class="main-container">
		<div class="content-left">
			<h1>Welcome to Twitter</h1>
			<br/>
			<p>Connect with people worldwide.</p>
		</div>

		<div class="content-right">
			<div class="login-wrapper">
			<?php include 'includes/login.php';?>
			</div>

			<div class="signup-wrapper">
			<?php include 'includes/signup-form.php';?>
			</div>

		</div>

	</div>

</div>
</div>
</body>
</html>