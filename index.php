<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>HOME</title>
</head>
<body>
	<div class="page-holder bg-cover" style="background-image: url('IMG/bgimg.jpg');">
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
	<div class="container py-5 main-content">
	    <header class="text-center text-white py-5">
	      <h1 class="display-4 font-weight-bold mb-4"><u>WELCOME TO MYLIB</u></h1>
	      <p class="lead mb-0">Your personal Library Management made only for you.</p><br>
	      <p class="font-italic">Get your Books managed now!</p>
	    </header>
	    <div class="row bg-transparent">
	    	<div class="col-md-6">
	    		<h2><b>Why Need A Library Management System?</b></h2>
	    	</div>
	    	<div class="col-md-6">
	    		<p class="text-white">A library management system is the most proficient and easy to use system for managing all the processes involved in a Library in the most effective ways.</p>
				<p class="text-white">This system will reduce all the manual work and the whole process can be managed just through single clicks and edits.</p>
				<p class="text-white">There will be no headache and doubtfulness of storing the data securely and searching the records of any individual afterward.</p>
	    	</div>
	    </div>
	    <div class="row bg-transparent">
	    	<div class="col-md-6">
	    		<h2><b>Who can use the library management system?</b></h2>
	    	</div>
	    	<div class="col-md-6">
	    		<p class="text-white">he Library management system is nowadays essential for schools, colleges, private libraries, and other organizations. They can use this software as the purpose of books issuing and returning for renewal. Moreover, this software helps the librarian to maintain information about book issuing and returning the book before the last date.</p>
				<p class="text-white">Effective library management system to manage all your library efficiently and organically</p>
	    	</div>
	    </div>
	</div>
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
	}
	.main-content{
        padding: 20px;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        font: 18px Arial, sans-serif;
    }
</style>
</html>