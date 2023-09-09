<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-learning catagory-TSP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-mod.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("header.php");  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
          <li>E-learning</li>
        </ol>
        
        <h2>Catagory</h2>
          
      </div>
    </section><!-- End Breadcrumbs -->
    <section id="features" class="features">

    <div class="container">

        <div class="row">

         <div class="col-lg-3 col-md-3 col-7 mt-4">
            <div class="icon-box center ">
              <h3><a href="subjects.php?id=E-classes.php" ><span class="Cat-fs">E - Classes</span></a></h3>
            </div>
          </div> 
          <div class="col-lg-3 col-md-3 col-7 mt-4">
            <div class="icon-box center ">
              <h3><a href="subjects.php?id=Notes.php" ><span class="Cat-fs">Notes</span></a></h3>
            </div>
          </div> 
          <div class="col-lg-3 col-md-3 col-7 mt-4">
            <div class="icon-box center ">
              <h3><a href="subjects.php?id=Assignments.php" ><span class="Cat-fs">Assignments</span></a></h3>
            </div>
          </div> 
          <div class="col-lg-3 col-md-3 col-7 mt-4">
            <div class="icon-box center ">
              <h3><a href="subjects.php?id=E-Projects.php" ><span class="Cat-fs">Projects</span></a></h3>
            </div>
          </div> 

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include("footer.php"); ?>
  <!-- End Footer -->

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

</body>

</html>