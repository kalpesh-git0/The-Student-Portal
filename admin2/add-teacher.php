<?php
include  '../config/control.php';

$c=new control();
$result1=$c->category();


if(isset($_POST['add']))
{
$teachername=$_POST['tname'];
$email=$_POST['mail'];
$mobno=$_POST['mob'];
$pass=$_POST['password'];


$c=new control();

$results=$c->addteacher($teachername,$email,$mobno,$pass);
 if ($results) {
    echo "<script>alert('Teacher added successfully 😊');</script>";
  }else{
    echo "<script>alert('404 Error Occured!!! 😒');</script>";
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Admin | Add Teacher</title>
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
  

<script>  
function matchPassword() {  
  var pw1 = document.getElementById("password");  
  var pw2 = document.getElementById("confirmpassword");  
  if(pw1 === pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    alert("Password matched");  
  }  
}  
</script>


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
        
          <h2>Add Student</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= doubt Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

       <div class=" flexd  ">

              <!--- =====Add Category==== --->
               <fieldset class="col-lg-6 borderx"> 
                  <form action="" method="post">

                 <div class="form-group">
                    <label><strong>Teacher Name<span class="red">*</span></strong></label>
                    <input type="text" name="tname" class="form-control"  placeholder="Enter Student Name" required>
                  </div>
                  <div class="form-group">
                    <label><strong>Mobile No<span class="red">*</span></strong></label>
                    <input type="text" name="mob" class="form-control"  placeholder="Enter Mobile No." required max="10">
                  </div>
                  <div class="form-group">
                    <label><strong>Email Id<span class="red">*</span></strong></label>
                    <input type="email" name="mail" class="form-control"  placeholder="Enter Email Id" required>
                  </div>
                  <div class="form-group">
                    <label><strong>Password<span class="red">*</span></strong></label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter Default Password" required>
                  </div>
                  <div class="form-group">
                    <label><strong>Password<span class="red">*</span></strong></label>
                    <input type="text" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Default Password" onblur="matchPassword()" required>
                  </div>
              <div class="flexd">    
             <button class="custom" name="add">Add Teacher</button> 
              </div>
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