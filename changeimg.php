<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<title>PROFILE</title>
</head>
<body>
	<div class="page-holder bg-cover" style="background-image: url('IMG/dash.jpg');">
	<!---NAVBAR START--->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	 <div class="container">
	 	<a class="navbar-brand navbar-brand-logo">
	  		<div class="logo">
	  			<img src="IMG/logo.jpg" class="rounded-circle" height="50" width="50" alt="LOGO">
	  		</div>
	  	</a>
	 	<nav class="navbar-brand">MyLIB</nav>
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
			  					<li><a href="myprofile.php" class="dropdown-item">Profile</a></li>
			  					<div class="dropdown-divider"></div>
			  					<li><a href="logout.php" class="dropdown-item">Logout</a></li>
			  				</ul>
			  			</li>
		        </ul>
	  	</div>
	 </div>
	</nav>
	<!---NAVBAR END--->
	<div id="mySidebar" class="sidebar">
		<form action="dashboard.php" method="get">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a><br>
		  &nbsp&nbsp&nbsp&nbsp<i class="fa fa-book text-white" aria-hidden="true"></i>
		  <input type="submit" name="dashsub" id="dashsub" value="Your Books" class="btn btn-dark btn-lg text-center" align="center" /><br><br>
		  &nbsp&nbsp&nbsp&nbsp<i class="fa fa-inbox text-white" aria-hidden="true"></i>
		  <input type="submit" name="dashsub" id="dashsub" value="Insert Book" class="btn btn-dark btn-lg text-center" align="center" /><br><br>
		  &nbsp&nbsp&nbsp&nbsp<i class="fa fa-trash text-white" aria-hidden="true"></i>
		  <input type="submit" name="dashsub" id="dashsub" value="Delete Book" class="btn btn-dark btn-lg text-center" align="center" /><br><br>
		  &nbsp&nbsp&nbsp&nbsp<i class="fa fa-upload text-white" aria-hidden="true"></i>
		  <input type="submit" name="dashsub" id="dashsub" value="Update Book Info" class="btn btn-dark btn-lg text-center" align="center" /><br><br>
		</form>
	</div>
	<div id="main">
	  <button class="openbtn" onclick="openNav()">☰ Open Dashboard</button><br><br>
	  <div class="container-fuild">
	  	<?php
	  		if($_POST['imgsub'] == 'CHANGE PROFILE IMAGE'){
	  	?>
	  	<form method="POST" action="changeimg.php" enctype="multipart/form-data">
	  		<label for="u_name">Enter Your Email ID:&nbsp</label>
	  		<input type="text" name="UEmail" id="UEmail" /><br><br>
	  		<label for="u_name">Enter Your Password:&nbsp</label>
	  		<input type="password" name="UPass" id="UPass" /><br><br>
	  		<input type="submit" name="imgsub" id="imgsub" value="SUBMIT" /><br>
	  	</form><br>
	  	<h6>Wondering Why?</h6>
	  	<br><h6>Because we care about security!</h6>
	  	<?php
	  		}
	  		if($_POST['imgsub'] == 'SUBMIT'){
		  		session_start();
		  		include ('dbconnect.php');
		  		$result = mysqli_query($conn,"SELECT * FROM users WHERE UEmail='".$_SESSION['UEmail']."' AND UPass='".$_SESSION['UPass']."'");
				$row = mysqli_fetch_array($result);
				if($row['UPass'] == $_POST['UPass']){
					$_SESSION['IMG_MAIL'] = $_POST['UEmail'];
					$_SESSION['IMG_PASS'] = $_POST['UPass'];
	  	?>
	  	<form method="POST" action="changeimg.php" enctype="multipart/form-data">
	  		<label for="change_image">Select Your Image:&nbsp</label>
	  		<input type="file" name="u_img" id="u_img" accept="image/*" /><br><br>
	  		<input type="submit" name="imgsub" id="imgsub" value="SUBMIT IMAGE" /><br>
	  		<small class="form-text">Image should be less than 5MB</small>
	  	</form>
	  	<?php
	  			$conn->close();
	  			}
	  		else{
	  			echo "<br><h2>Invalid Password!</h2><br><h2>Please Try again</h2><h2>Redirecting you to Profile Page.....</h2>";
	  			header ("Refresh: 5, url=myprofile.php");
	  			}
	  		}
	  		if($_POST['imgsub'] == 'SUBMIT IMAGE'){
	  			include ('dbconnect.php'); 
	  			session_start();

	  			/*INSERTING IMAGE INTO FILE*/
	  			$img = $_FILES['u_img'];
	  			extract($img);
	  			//var_dump($img);
	  			$img_path = "USERIMG/$name";
	  			copy($tmp_name,$img_path);

	  			/*INSERTING IMAGE INTO DB*/
	  			$sel = "SELECT * FROM users WHERE UEmail='".$_SESSION['IMG_MAIL']."' AND UPass='".$_SESSION['IMG_PASS']."'";
	  			$sel_res = mysqli_query($conn,$sel);
	  			if($sel_res != null){
	  				$in_query = "INSERT INTO u_imgs VALUES(null,'".$_SESSION['IMG_MAIL']."','$name')";
	  				if ($conn->query($in_query) === TRUE) {
	  					echo "<h4>Image Uploaded.....Redirecting you to Profile Page!</h4>";
	  					header("Refresh: 5,url=myprofile.php");
					} else {
					    echo "Error: " . $in_query . "<br>" . $conn->error;
					}
				}
				else{
					echo "<h4>Sorry....Something went wrong!</h4>";
				}
				$conn->close();
				unset($_SESSION['IMG_MAIL']);
				unset($_SESSION['IMG_PASS']);
	  		}
	  	?>
	  </div>
	</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script type="text/javascript">
	function openNav() {
	  document.getElementById("mySidebar").style.width = "250px";
	  document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidebar").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	}
	</script>
	<script type="text/javascript">
		var $alert = $('.alert');
		var $progressBar = $('.progress');

		var progress = 0;      // initial value of your progress bar
		var timeout = 10;      // number of milliseconds between each frame
		var increment = .5;    // increment for each frame
		var maxprogress = 110; // when to leave stop running the animation

		function animate() {
		    setTimeout(function () {
		        progress += increment;
		        if(progress < maxprogress) {
		            $progressBar.attr('value', progress);
		            animate();
		        } else {
		            $progressBar.css('display', 'none');
		            $alert.css('display', 'block');
		        }
		    }, timeout);
		};
		animate();
	</script>
</body>
<style type="text/css">
	body{
		font-family: "Lato", sans-serif;
		text-decoration-color: rgb(0,0,0);
	}
	.page-holder {
	  min-height: 100vh;
	}
	.bg-cover {
	  background-size: contain !important;
	  background-repeat: no-repeat;
	  background-position: right;
	 }
	.sidebar {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  transition: 0.5s;
	  padding-top: 60px;
	}
	.sidebar a {
	  padding: 8px 8px 8px 32px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display: block;
	  transition: 0.3s;
	}
	.sidebar a:hover {
	  color: #f1f1f1;
	}
	.sidebar .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;
	}
	.openbtn {
	  font-size: 20px;
	  cursor: pointer;
	  background-color: #111;
	  color: white;
	  padding: 10px 15px;
	  border: none;
	}
	.openbtn:hover {
	  background-color: #444;
	}
	#main {
	  transition: margin-left .5s;
	  padding: 16px;
	}
	@media screen and (max-height: 450px) {
	  .sidebar {padding-top: 15px;}
	  .sidebar a {font-size: 18px;}
	}
	.pad {
	    padding: 15px;
	}
	.alert {
	    display: none;
	}
</style>
</html>