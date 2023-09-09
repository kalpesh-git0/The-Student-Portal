<?php
session_start();
$con=mysqli_connect("localhost","root","","tsp");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['opwd']);
 $useremail=$_SESSION['login'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM teachers where password='$oldpass' && email='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update teachers set password=' $newpassword' where email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Admin | Manage Teachers</title>
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
        
          <h2>Manage Teachers</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= manage student ======= -->
     <section id="table" class="table">
      <div class="container flexd">

        <div class="col-lg-10">
          <!-- ======== table change password==== --->
          <!--p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p-->
              <form name="chngpwd" action="" method="post" onSubmit="return valid();">
              <table align="center">
              <tr height="50">
              <td>Old Password :</td>
              <td><input type="password" name="opwd" id="opwd"></td>
              </tr>
              <tr height="50">
              <td>New Passowrd :</td>
              <td><input type="password" name="npwd" id="npwd"></td>
              </tr>
              <tr height="50">
              <td>Confirm Password :</td>
              <td><input type="password" name="cpwd" id="cpwd"></td>
              </tr>
              <tr>
              <td><a href="dashboard.php">Back to Dashboard</a></td>
              <td><input type="submit" name="Submit" value="Change Passowrd" class="btn btn-primary" /></td>
              </tr>
               </table>
              </form>
          <!--- ====== end change password ====== ---> 
        </div>  
      </div>

    </section>
    <!-- End manage student -->

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
  <script >
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>

</body>

</html>