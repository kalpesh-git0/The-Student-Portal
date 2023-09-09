<?php 
    session_start();
    if(isset($_POST['submit'])){
        
    	$username=$_POST['emailid'];
    	$password=$_POST['password'];

       require 'config/control.php';

       $c=new control();
       $result=$c->login($username,$password);
       if (!$result) {
       		echo "hello";
       }
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>The Student Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/login css/style.css">

	</head>
	<body class="img " style="background-image: url(assets/img/hero-bg.jpg);  ">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><strong>The Student Portal</strong></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Email id" required name="emailid" autocomplete="off">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="password" autocomplete="off">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Go Back To &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Website</a>
	          	
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/login js/jquery.min.js"></script>
  <script src="assets/js/login js/popper.js"></script>
  <script src="assets/js/login js/bootstrap.min.js"></script>
  <script src="assets/js/login js/main.js"></script>

	</body>
</html>

