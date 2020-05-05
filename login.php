<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<title>LOGIN</title>
</head>
<body>
	<div class="page-holder bg-cover" style="background-image: url('IMG/loginimg.jpg');">
	<!---NAVBAR START--->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	 <div class="container">
	 	<a class="navbar-brand navbar-brand-logo" href="index.php">
	  		<div class="logo">
	  			<img src="IMG/logo.jpg" class="rounded-circle" height="50" width="50" alt="LOGO">
	  		</div>
	  	</a>
	 	<a class="navbar-brand" href="index.php">MyLIB</a>
	 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="navbar-nav ml-auto">
		            <li>
			  				<a href="javascript:void(0)" data-toggle="search" class="btn btn-light">
			  					<img src="IMG/search.png" class="rounded-circle" height="30" width="30" alt="SEARCH">
			  				</a>
			  			</li>&nbsp&nbsp&nbsp&nbsp
			  			<li class="dropdown">
			  				<a href="#" class="dropdown-toggle" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
			  					<img src="IMG/user.png" class="rounded-circle" height="40" width="40" alt="USER">
			  				</a>
			  				<ul class="dropdown-menu">
			  					<li><a href="login.php" class="dropdown-item">Login</a></li>
			  					<div class="dropdown-divider"></div>
			  					<li><a href="reg.php" class="dropdown-item">Register</a></li>
			  				</ul>
			  			</li>
		        </ul>
	  	</div>
	 </div>
	</nav>
	<!---NAVBAR END--->
	<!---MAIN BODY CONTENT--->
	<div class="container-fluid">
		<div class="row justify-content-center custom-margin">
			<div class="col-sm-6 col-md-4">
				<h1 class="shadow-lg p-4 text-white">
					LOGIN
				</h1>
			</div>
		</div>
	<!---PHP SESSION CODE--->
	<?php
		session_start();
		$message="";
		if (count($_GET)>0) {
			include ('dbconnect.php');
			$res = mysqli_query($conn,"SELECT * FROM users WHERE UEmail='".$_GET['u_mail']."' AND UPass='".$_GET['u_pass']."'");
			$row = mysqli_fetch_array($res);
			if (is_array($row)) {
				$_SESSION['UEmail']=$row['UEmail'];
				$_SESSION['UPass']=$row['UPass'];
				$_SESSION['UName']=$row['UName'];
			}
			else{
				$message = "Invalid Email or Password!";
			}
			if (isset($_SESSION['UEmail'])) {
				header("Location:dashboard.php");
			}
		}
	?>
	<!---PHP SESSION CODE ENDS--->
	<!---LOGIN FORM--->
		<div class="row justify-content-center">
			<div class="col-sm-6 col-md-4">
				<form method="get" class="shadow-lg p-4 text-white">
					<div class="form-group">
						<i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">EMAIL</label>
						<input type="email" name="u_mail" class="form-control" placeholder="Email" required />
						<small class="form-text">We'll never share your email with anyone.</small>
					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">PASSWORD</label><br>
						<input type="password" name="u_pass"  class="form-control" placeholder="Password" required />
					</div>
					<div class="form-check">
						<input type="checkbox" name="rem_me" class="form-check-input" id="rem_me">
						<label class="form-check-label" for="rem_me">Remember Me?</label>
					</div>
					<div class="message">
						<?php
							if ($message != "") {
								echo "<h2>$message</h2>";
							}
						?>
					</div>
					<button class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold">SUBMIT</button>
				</form>
			</div>
		</div>
	<!---LOGIN FORM ENDS--->
	<!---MAIN BODY CONTENT ENDS--->
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<style type="text/css">
	.page-holder {
	  min-height: 100vh;
	}
	.bg-cover {
	  background-size: cover !important;
	  background-repeat: no-repeat;
	}
	.custom-margin {
         margin-top: 20vh;
      }
    .login-header{
    	text-align: justify-content-center;
    	font-size: 50px;
    	font-weight: bold;
    }
</style>
</html>