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

	<title>REGISTER-STATUS</title>
</head>
<body>
	<div class="page-holder bg-cover" style="background-image: url('IMG/regimg.jpg');">
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
					REGISTRATION STATUS
				</h1>
			</div>
		</div>
	</div>
	<!---REGISTER FORM--->
	<?php
		extract($_GET);
	?>
	<?php
    	include ("dbconnect.php");
    	$query = "INSERT INTO Users VALUES (null,'$name','$gender',$mobno,'$email','$u_pass_confirm')";
    	if ($conn->query($query) === TRUE) {
		   	header("refresh: 2, url=login.php");
		} else {
		    echo "Error: " . $query . "<br>" . $conn->error;
		}
		$conn->close();
    ?>
		<div class="container">
	    <form class="form-horizontal" method="get" action="regsuccess.php">
	        <div class="row">
	            <div class="col-md-3"></div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="mobno">PROFILE INFO:</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <strong class="text-white">
	                        	Profile Details
	                        </strong>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="name">Name: &nbsp</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user text-white"></i></div>
	                        <?php echo "<strong class='text-white'>$name</strong>"; ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="gender">Gender</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-mars text-white"></i></div>
	                        <?php
	                        	if($gender == 'Male'){
	                        	echo "<input type='radio' name='gender' class='form-checkinput' id='gender' checked>";
	                        	echo "<label class='form-check-label text-white' for='male'>&nbsp&nbspMale</label>";
	                        }
	                        else if($gender == 'Female'){
	                        	echo "<input type='radio' name='gender' class='form-checkinput' id='gender' checked>";
	                        	echo "<label class='form-check-label text-white' for='female'>&nbsp&nbspFemale</label>";
	                    	}
	                    	else if($gender == 'Other'){
	                    		echo "<input type='radio' name='gender' class='form-checkinput' id='gender' checked>";
	                        	echo "<label class='form-check-label text-white' for='other'>&nbsp&nbspOther</label>";
	                    	}
	                        ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="mobno">Mobile Number</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-mobile text-white" aria-hidden="true"></i></div>
	                        	<?php echo "<strong class='text-white'>$mobno</strong>"; ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="email">E-Mail Address</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at text-white"></i></div>
	                        <?php echo "<strong class='text-white'>$email</strong>"; ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="password">Password</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group has-danger">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key text-white"></i></div>
	                        <h4 class="text-white">Your Password is registered and is safe with us!</h4>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3"></div>
	            <div class="col-md-6">
	                <h4 class="text-white">Above is your Registration Status.<br>
	                You will be redirected to Login Page!</h4>
	            </div>
	        </div>
	    </form>
	</div>
	<!---REGISTER FORM ENDS--->
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
    @media(min-width: 768px) {
  	.field-label-responsive {
    	padding-top: .5rem;
    	text-align: right;
  		}
	}
</style>
</html>