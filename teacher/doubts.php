<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}

$name=$_SESSION['name'];

include '../config/control.php';
$c=new control();

if ($_REQUEST['id']) {
     $id=$_REQUEST['id'];
      $res=$c->fetchsubjectsbyid($id);
      $row1=mysqli_fetch_array($res);
      $id=$row1['SubjectCode'];
      $result1=$c->fetchdoubtbysubject($id);
      $cnt=mysqli_num_rows($result1);
      if(!$cnt){
        echo "<script>alert('No Record Found!!!');</script>";
      }
}
else{
      echo "<script>alert('No Subjects Selected');</script>";  
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Doubts</title>
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

  <!--  Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  
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
          <li><a href="dashboard.php">Dashborad</a></li>
          <li> Doubts</li>
        </ol>
        
          <h2>Posts</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= doubt Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">

            <div class="row">
            
            <?php  foreach($result1 as $result){  ?>
            
              <div class="col-md-4">
                <article class="entry dbox">

                  <h2 class="entry-title">
                    <a href="doubt-single-view.php"><?php echo $result['topic']; ?></a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="doubt-single-view.php"><?php echo $result['stname']; ?></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="doubt-single-view.php"><time><?php echo $result['postdate']; ?></time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p><?php echo $result['question']; ?></p>
                  </div>
                  <div class="entry-content end">
                    <div class="read-more flex-b">
                      <a href="doubt-single-view.php?id=<?php echo $result['QId']; ?> ">View And Answer</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
          <?php } ?>
             
            </div>
            <?php if ($cnt >10) { ?>
              <div class=" blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>  
          <?php  } ?>
            

          </div><!-- End blog entries list -->

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

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>