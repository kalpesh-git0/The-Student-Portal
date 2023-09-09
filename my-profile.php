<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}

include("config/control.php");
 $c=new control();
 $id=$_SESSION['id'];
 $r=$c->showprofile($id);

if (isset($_POST['update'])) {
   $name=$_POST['fullname'];
   $mobile=$_POST['mobileno'];

   $c=new control();
   $rup=$c->updateprofile($id,$name,$mobile);
   if ($rup) {
      echo "<script>
       var al=alert('Profile Updated successfully 😊');
       if(al== true )
          header('location:my-profile.php');
       </script>";
   }else{
      echo "<script>alert('404 error occurred!!! Try again later😒');</script>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons -->
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

  <!-- Main CSS File -->
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
          <li>Account</li>
        </ol>
        
          <h2>My Profile</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= profile Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

         <div class="boxi">
           <form action="" method="post">
              <?php 

              if(1)
              {
              foreach($r as $result)
              { ?>  
              <div class="form-group row">
                <label for="colFormLabel" class="col-lg-5 col-form-label">StudentId:</label>
                <label for="colFormLabel" class="col-lg-6 col-form-label"><?php echo htmlentities($result['StudentId']); $id=$result['StudentId'];  ?></label>
              </div>
              <div class="form-group row">
                <label for="colFormLabel" class="col-lg-5 col-form-label">Reg Date:</label>
                <label for="colFormLabel" class="col-lg-6 col-form-label"><?php echo htmlentities($result['RegDate']);?></label>
              </div>
              <div class="form-group row">
                <?php if($result['UpdationDate']!=""){?>

                <label for="colFormLabel" class="col-lg-5 col-form-label">Last Updation Date:</label>
                <label for="colFormLabel" class="col-lg-6 col-form-label"><?php echo htmlentities($result['UpdationDate']);?></label>
              </div>
              <?php } ?>

              <div class="form-group row">
                <label for="colFormLabel" class="col-lg-5 col-form-label">Profile Status:</label>
                <label for="colFormLabel" class="col-lg-6 col-form-label"><?php if($result['Status']==1){?>
                <span style="color: green">Active</span>
                <?php } else { ?>
                <span style="color: red">Blocked</span>
                <?php }?></label>
              </div>
               <div class="form-group row">
                <label for="colFormLabel" class="col-lg-5 col-form-label">Your Full Name:</label>
                <div class="col-lg-6 col-form-label">
                  <input type="text" class="form-control" name="fullname" value="<?php echo htmlentities($result['FullName']);?>" autocomplete="off" required>
                </div>
              </div> 
              <div class="form-group row">
                <label for="colFormLabel" class="col-lg-5 col-form-label">Mobile No:</label>
                <div class="col-lg-6 col-form-label">
                  <input type="text" class="form-control" name="mobileno" maxlength="10" value="<?php echo htmlentities($result['MobileNumber']);?>" autocomplete="off" required>
                </div>
              </div>
               <div class="form-group row">
                <label for="colFormLabel" class="col-lg-5 col-form-label">Email:</label>
                <div class="col-lg-6 col-form-label">
                  <input type="email" class="form-control" name="email" id="emailid" value="<?php echo htmlentities($result['EmailId']);?>"  autocomplete="off" required readonly>
                </div>
              </div>
              <div class="flexg">
              <button type="submit" name="update" class="custom">Update Now </button></div>

              <?php }} ?>

             
            </form>
         </div>

        </div>

      </div>
    </section><!-- End Profile Section -->

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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>

</body>

</html>