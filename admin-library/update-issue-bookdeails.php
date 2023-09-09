<?php

include  '../config/control.php';

$id=$_REQUEST['id'];

$c=new control();
$result1=$c->fetchisuuedbookbyid($id);
$result=mysqli_fetch_array($result1);


if(isset($_POST['return']))
{
$fine=$_POST['fine'];
$rstatus=1;

$c=new control();
$result2=$c->updateissuedbook($id,$fine,$rstatus);
if ($result2) {
    header("location:manage-issued-books.php");
}else{
    echo "<script>alert('404 Error Occured!!!');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Admin |Update Issued Book</title>
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
        
          <h2>Update Issued Book</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= doubt Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

       <div class=" d-flex justify-content-center">

              <!--- =====Add Category==== --->
               <fieldset class="col-lg-6 borderx d-flex justify-content-center"> 
                  <form action="" method="post">

                 <div class="form-group">
                    <label ><strong>Student Name : </strong></label>
                    <label class="pl-4"><?php echo $result['FullName']; ?></label>
                  </div>
                   <div class="form-group">
                    <label ><strong>Book Name : </strong></label>
                    <label class="pl-4"><?php echo $result['bookname']; ?></label>
                  </div>
                  <div class="form-group">
                    <label><strong>ISBN Number of Book : </strong></label>
                    <label class="pl-4"><?php echo $result['ISBN_no']; ?></label>
                  </div>
                 <div class="form-group">
                    <label><strong>Book Issued Date : </strong></label>
                    <label class="pl-4"><?php echo $result['issuedate']; ?></label>
                  </div>
                 <div class="form-group">
                    <label><strong>Book Returned Date : </strong></label>
                    <label class="pl-4"><?php echo $result['returndate']; ?></label>
                  </div>    
                 <div class="form-group">
                    <label><strong>Fine (in INR) :</strong></label>
                   <?php 
                        if($result['fine']==""){?>
                        <input class="form-control" type="text" name="fine" placeholder="Enter Fine in INR if not then enter 0" >

                        <?php }else {?>
                        <label class="pl-4"><?php echo $result['fine']; ?></label>
                        <?php } ?>
                  </div>
                  <?php if($result['return_status']==0){?>

                    <div class="flexd">    
                        <button class="custom" type="submit" name="return">Return Book</button> 
                    </div>

                <?php } ?> 
              
           </form>
               </fieldset>
              <!--- =====End Add Category==== --->
             

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
   <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>

</body>

</html>