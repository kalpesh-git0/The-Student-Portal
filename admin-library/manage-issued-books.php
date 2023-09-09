<?php
include  '../config/control.php';

$c=new control();
$results=$c->fetchissuedbooks();

$sno=1;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Admin | Manage Issued Books</title>
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
  <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" >


  <!--  Main CSS File -->
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
          <li>Library</li>
        </ol>
        
          <h2>Manage Issued Books</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Manage Books Section ======= -->
    <section id="table" class="table">
      <div class="container">

        <div class="row">
            <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Student Name</th>
                          <th>Book Name</th>
                          <th>ISBN </th>
                          <th>Issued Date</th>
                          <th>Return Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($results as $result):?>                                      
                        <tr class="odd gradeX">
                          <td class="center"><?php echo htmlentities($sno);?></td>
                          <td class="center"><?php echo htmlentities($result['FullName']);?></td>
                          <td class="center"><?php echo htmlentities($result['bookname']);?></td>
                          <td class="center"><?php echo htmlentities($result['ISBN_no']);?></td>
                          <td class="center"><?php echo htmlentities($result['issuedate']);?></td>
                          <td class="center"><?php if($result['returndate']=="")
                          {
                              echo htmlentities("Not Return Yet");
                          } else {


                          echo htmlentities($result['returndate']);
}
                          ?></td>
                          <td class="text-center">

                          <a href="update-issue-bookdeails.php?id=<?php echo htmlentities($result['id']);?>"><i class="fa fa-edit "></i>  
                       
                          </td>
                        </tr>
                      <?php $sno++; endforeach; ?>                                      
                      </tbody>
                    </table>
                  </div>
                
              </div>
            </div>
          <!--End Advanced Tables -->
          </div>
        </div>  
      </div>

    </section><!-- End Manage Books Section -->

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

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/search.js"></script>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>
  <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
  <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>


</body>

</html>