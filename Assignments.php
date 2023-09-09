<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}  

$id=$_REQUEST['id'];

include 'config/control.php';

$c=new control();
$results=$c->fetchassignments($id);

$sno=1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Notes-TSP</title>
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

  <!--  Main CSS File -->
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
          <li><a href="home.php #services">Services</a></li>
          <li><a href="E-learning.php">E-learning</a></li>
        </ol>
        
          <h2>Assignment</h2>
          
      </div>
    </section><!-- End Breadcrumbs -->

	<section class="class" id="class">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<table class="table table-striped table-borderless">
            <?php foreach ($results as $value) { ?>
            <tr>
              <td class="mid"><?php echo $sno++;?></td>
              <td class="width-for-notes">
                 <label class=" col-form-label " for="lect"><a  href="uploads/<?php echo $value['attachment']; ?>"><?php echo $value['Title']; ?></a></label>
              </td>
              <td class="mid">
                 <a href="uploads/<?php echo $value['attachment']; ?>" download class="btn btn-download "><span class="bx bx-download " ></span>&nbsp Download</a>
              </td>
            </tr>
            <?php } ?>
          </table>  
			
			<div class="class-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>				
				</div>
			</div>
		</div>
	</section>    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include("footer.php"); ?>
  <!-- ======= End Footer ======= -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>