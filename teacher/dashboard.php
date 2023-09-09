<?php 

session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}

include '../config/control.php';

$c=new control();

$result1=$c->fetchstudents();
$stcnt=mysqli_num_rows($result1);
$result2=$c->fetchteachers();
$tchcnt=mysqli_num_rows($result2);
$result3=$c->fetchreviews();
$revcnt=mysqli_num_rows($result3);
$result4=$c->fetchdoubts();
$doubtcnt=mysqli_num_rows($result4);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Teacher</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo-mod.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">  
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
          <li><a href="index.php">Admin</a></li>
          <li>Library</li>
        </ol>
        
          <h2>Dashboard</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= doubt Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">

            <div class="row ">

              <!--- =====dashboard==== --->
              <div class="col-md-3  ">
               <div class="alert text-center boxinfo">
                  <i class="fa fa-graduation-cap fa-5x"></i>
    
                  <h4 class="dis"><?php echo htmlentities($stcnt);?></h4>
                      Student Count
               </div>
              </div>
              <div class="col-md-3  ">
               <div class="alert text-center boxinfo">
                  <i class="fa fa-users fa-5x"></i>

                  <h4 class="dis"><?php echo htmlentities($tchcnt);?></h4>
                      Faculty Count
               </div>
              </div>
            <div class="col-md-3  ">
               <div class="alert text-center boxinfo">
                  <i class="fa fa-comments fa-5x"></i>

                  <h4 class="dis"><?php echo htmlentities($revcnt);?></h4>
                      Total Reviews
               </div>
              </div>
               <div class="col-md-3  ">
               <div class="alert text-center boxinfo">
                  <i class="fa fa-pencil-square-o fa-5x"></i>

                  <h4 class="dis"><?php echo htmlentities($doubtcnt);?></h4>
                      Total Doubts
               </div>
              </div>

            </div>
              <!--- =====end dashboard==== --->

             
          </div>


        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include("footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="https://use.fontawesome.com/2c5475e348.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>