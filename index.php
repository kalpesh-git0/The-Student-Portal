<?php
    session_start();
    if(isset($_POST['login'])){
        
      $username=$_POST['emailid'];
      $password=$_POST['password'];

       require 'config/control.php';

       $c=new control();
       $result=$c->login($username,$password);

}


if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   include 'config/control.php';
   $c=new control();
   $r=$c->contact($name,$email,$subject,$message);
   if($r){
    echo "<script>alert('Contact Established successfully 😊');</script>";
   }else{
        echo "<script>alert('404 error!!! Try Again Later 😒');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Student Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pic2.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!--- login css --->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--link rel="stylesheet" href="assets/css/login css/style.css"-->

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center ">

      <a href="index.php" class="logo "><img src="assets/img/pic2.png" alt="" class="img-fluid"></a>
      <h1 class="logo mr-auto"><a href="index.php"> &nbsp The Student Portal</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="drop-down"><a href="#services">Services</a>
            <ul>
              <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">Library</a></li>
              <li class="drop-down"><a href="" data-toggle="modal" data-target="#exampleModalCenter">Study Material</a>
                <ul>
                  <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">E-Classes</a></li>
                  <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">Notes</a></li>
                  <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">Assignments</a></li>
                  <li><a data-toggle="modal" data-target="#exampleModalCenter" href="">Projects</a></li>
                </ul>
              </li>
              <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">Doubt Platform</a></li>
              <li><a data-toggle="modal" data-target="#exampleModalCenter" href="">Review Platform</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
          <button class="form-control login" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>The Student Portal</strong></h3>
      <h2>We are here to help you and provide you the best services we can</h2>
      <a href="#services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php include 'about us.php'; ?>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <?php include 'services.php' ?>
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <?php include 'features.php'; ?>
    <!-- End Features Section -->


    <!-- ======= Contact Section ======= -->
    <?php include 'contact us.php'; ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>The Student Portal</h3>
            <p>
              Vigyan Bhawan, University Campus,MLSU <br>
              Udaipur, Rajasthan 313001<br>
              India <br><br>
              <strong>Phone:</strong> +91 9079061200<br>
              <strong>Email:</strong> kjain2511@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php# about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php #services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">Admin Panel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="" data-toggle="modal" data-target="#exampleModalCenter">Library</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" data-toggle="modal" data-target="#exampleModalCenter">Study Material</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" data-toggle="modal" data-target="#exampleModalCenter">Your Doubts</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" data-toggle="modal" data-target="#exampleModalCenter">Review</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>You will recive important mails timely.</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder=" Enter email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
           <strong><span>The Student Portal</span></strong>
        </div>
        <div class="credits">
          Developed by <a href="#">Kalpesh Jain</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->



  <!---- ==== login code popup modal ==== ----->

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade loginshape" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <div class="row justify-content-center col-md-12">
          <h3><strong>Login</strong></h3>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
           <div class="row justify-content-center">
            <h4>Have an Account?</h4>
             <div class=" col-lg-10 mt-3">
            <form action="" method="post" class="signin-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email id" required name="emailid" autocomplete="off">
              </div>
              <div class="form-group">
                <input id="password-field" type="password" class="form-control" placeholder="Password" required name="password" autocomplete="off">
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="form-group flexd">
                <button type="submit" class="form-control signin" name="login">Sign In</button>
              </div>
              
            </form>
            
        </div>
      </div>
    </div>
      </div>
     
    </div>
  </div>
</div>
  <!---- ==== end modal login ==== -----> 

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>


  <!--- login js files ---->
  <script src="assets/js/login js/jquery.min.js"></script>
  <script src="assets/js/login js/popper.js"></script>
  <script src="assets/js/login js/bootstrap.min.js"></script>
  <script src="assets/js/login js/main.js"></script>


</body>

</html>