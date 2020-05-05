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

	<title>REGISTER</title>
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
				<h1 class="shadow-lg p-4 text-white">REGISTER</h1>
			</div>
		</div>
	</div>
	<!---REGISTER FORM--->
		<div class="container">
	    <form class="form-horizontal" method="GET" action="regsuccess.php">
	        <div class="row">
	            <div class="col-md-3"></div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="name">Name</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user text-white"></i></div>
	                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required autofocus>
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
	                        <input type="radio" name="gender" class="form-checkinput" id="gender" value="Male" required autofocus>
	                        <label class="form-check-label text-white" for="male">&nbsp&nbspMale</label>
	                    </div>
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-venus text-white"></i></div>
	                        <input type="radio" name="gender" class="form-checkinput" id="gender" value="Female" required autofocus>
	                        <label class="form-check-label text-white" for="female">&nbsp&nbspFemale</label>
	                    </div>
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-transgender text-white"></i></div>
	                        <input type="radio" name="gender" class="form-checkinput" id="gender" value="Other" required autofocus>
	                        <label class="form-check-label text-white" for="other">&nbsp&nbspOther</label>
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
	                        <input type="text" name="mobno" class="form-control" id="mobno" required maxlength="10" autofocus>
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
	                        <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required pattern="^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$" autofocus>
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
	                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required maxlength="8" minlength="4">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3 field-label-responsive text-white">
	                <label for="password">Confirm Password</label>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
	                        <div class="input-group-addon" style="width: 2.6rem">
	                            <i class="fa fa-unlock-alt text-white" aria-hidden="true"></i>
	                        </div>
	                        <input type="password" name="u_pass_confirm" class="form-control" id="u_pass_confirm" placeholder="Confirm Password" required maxlength="8" minlength="4">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-3"></div>
	            <div class="col-md-6">
	                <button type="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold"><i class="fa fa-user-plus" name="regsub" id="regsub"></i> Register</button>
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
<!---
    <script type="text/javascript">
    	function validity() {
    		const pass = document.getElementById('password');
    		const cpass = document.getElementById('u_pass_confirm');
    		console.log(pass);
    		console.log(cpass);
    		if (pass == cpass) {
    			document.forms['register'].submit();
    		}
    		else{
    			returnBackReg();
    		}
    	}
    	function returnBackReg() {
    		window.location.href = "regsuccess.php";
    	}
    </script>
--->
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