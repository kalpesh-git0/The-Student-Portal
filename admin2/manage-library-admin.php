<?php

include '../config/control.php';

$c=new control();
$result=$c->fetchlibadmin();

$sno=0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Admin | Manage Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons -->
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

  <!-- Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.css">

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
          <li>TSP</li>
        </ol>
        
          <h2>Manage Library Admin</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= manage admin ======= -->
     <section id="table" class="table">
      <div class="container d-flex justify-content-center">

        <div class="col-lg-10 entries">
          <input type="text" id="myInput" onkeyup="myFunctions()" placeholder="Search for names.."> 
          <!--- ====== table data ====== --->
          <form action="" method="post">
            <table class="table table-striped table-bordered " id="myTable">
              <thead class="text-center">
                <th>S.No</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Action</th>
              </thead>
              <tbody class="text-center">
                <?php foreach($result as $r1){ ?>
                <tr>
                <td><label><?php echo ++$sno; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['fullname']; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['emailid']; ?></label></td>
                <td class="flexd"><a href="#" class=" pr-4"><i class="fa fa-edit"></i></a>
                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                </td>              
              </tr>
            <?php }?>
              </tbody>
            </table>
               
          </form> 
          <!--- ====== end table data ====== ---> 
        </div>  
      </div>

    </section>
    <!-- End manage admin -->

  </main>
  <!-- End #main -->

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

  <!--  Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/search.js"></script>

</body>

</html>