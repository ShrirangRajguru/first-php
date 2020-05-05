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

	<title>DASHBOARD</title>
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
	  <input type="submit" name="dashsub" id="dashsub" value="Update Book" class="btn btn-dark btn-lg text-center" align="center" /><br><br>
	 </form>
	</div>
	<div id="main">
	  <button class="openbtn" onclick="openNav()">☰ Open Dashboard</button><br><br>
	<?php
		session_start();
		if(isset($_SESSION['UName'])){
			if ($_SESSION['UName']) {
				
	?>
		  <h2>Welcome <?php echo $_SESSION['UName']; ?>!</h2><br>
	<?php
				}
			}
		else{
	?>
		<h2>Welcome Invalid User!</h2><br>
	<?php
		}
		if (isset($_GET['dashsub'])) {
			if ($_GET['dashsub'] == 'Your Books') {
				include ('dbconnect.php');
				$booksel = "SELECT * FROM u_books WHERE UEmail = '".$_SESSION['UEmail']."'";
				$books = mysqli_query($conn,$booksel);
				if (mysqli_num_rows($books)>0){
	?>
		<table class="table table-hover table-responsive">
			<tr>
				<th>BOOK NAME</th>
				<th>BOOK AUTHOR</th>
				<th>BOOK PRICE</th>
			</tr>
	<?php
					while($rows = mysqli_fetch_array($books)){
						echo "<tr>";
							echo "<td>".$rows['BName']."</td>";
							echo "<td>".$rows['BAuthor']."</td>";
							echo "<td>".$rows['BPrice']."</td>";
						echo "</tr>";
					}
					echo "</table>";
					mysqli_free_result($books);
				}
				else{
					echo "<br><h4>No Books Inserted!</h4>";
				}
				$conn -> close();
	?>
			<div class="pad" style="width: 500px;">
		    		<progress class="progress" value="0" max="100">0%</progress>
		    		<div class="alert alert-success" role="alert">Your Data is here!</div>
			</div>
	<?php
			}
			else if ($_GET['dashsub'] == 'Insert Book') {
	?>
				<form method="GET" action="insertsucess.php">
					<h4>Enter Book Name</h4><br>
					<input type="text" name="bname" required><br><br>
					<h4>Enter Book Author</h4><br>
					<input type="text" name="bauthor" required><br><br>
					<h4>Enter Book Price</h4><br>
					<input type="number" name="bprice" required><br><br>
					<input type="submit" name="bsub" value="SUBMIT DATA"><br>		
				</form>
	<?php
			}
			else if ($_GET['dashsub'] == 'Delete Book'){
	?>
				<form method="GET" action="delsucess.php">
					<h4>Enter Book Name</h4><br>
					<input type="text" name="bname" required><br><br>
					<input type="submit" name="delsub" value="DELETE BOOK"><br><br>				
				</form>
	<?php
			}
			else if($_GET['dashsub'] == 'Update Book'){
	?>
				<form action="updatebook.php" method="GET">
					<h4><u>OLD BOOK DETAILS</u></h4><br>
					<label>Book Name:&nbsp&nbsp</label>
					<input type="text" name="BN"><br><br>
					<label>Book Author:&nbsp&nbsp</label>
					<input type="text" name="BA"><br><br>
					<label>Book Price:&nbsp&nbsp</label>
					<input type="text" name="BP"><br><br>
					<h4><u>UPDTAED BOOK DETAILS</u></h4>
			  		<small>Please check the fields you want to update.</small><br>
			  		<input type="checkbox" name="b[]" id="c" value="BName">&nbsp&nbsp Book Name<br>
			  		<input type="text" name="BookName"><br><br>
			  		<input type="checkbox" name="b[]" id="c" value="BAuth">&nbsp&nbsp Book Author<br>
			  		<input type="text" name="BookAuthor"><br><br>
			  		<input type="checkbox" name="b[]" id="c" value="BPrice">&nbsp&nbsp Book Price<br>
			  		<input type="number" name="BookPrice"><br><br>
			  		<input type="submit" name="upBook" value="UPDATE BOOK">
			  	</form>
	<?php
			}
		}
	?>
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