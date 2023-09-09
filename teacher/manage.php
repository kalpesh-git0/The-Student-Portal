<?php

session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}  

include '../config/control.php';

$c=new control();

if ($_REQUEST['id']=="Notes") {
    $results=$c->fetchallnotes();
    $_SESSION['type']="Notes";
} elseif ($_REQUEST['id']=="Assignments") {
      $results=$c->fetchallassignments();
      $_SESSION['type']="Assignments";
  }elseif ($_REQUEST['id']=="Projects") {
        $results=$c->fetchallprojects();
        $_SESSION['type']="Projects";
  }elseif ($_REQUEST['id']=="classes") {
        $results=$c->fetchallclasses();
        $_SESSION['type']="Eclasses";

  }else{
    echo "<script>alert('nothing selected');</script>";
  }

$sno=1;

if(isset($_GET['del']))
{
  $id=$_GET['del'];
  $c=new control();

  if ($_SESSION['type']=="Notes") {
        $r=$c->delnotes($id);
        if ($r) {
            header("location:manage.php?id=Notes");
        } else {
            echo "<script>alert(404 error!!!);</script>";
        }
  }elseif ($_SESSION['type']=="Assignments") {
          $r=$c->delassignments($id);
          if ($r) {
            header("location:manage.php?id=Assignments");
        } else {
            echo "<script>alert(404 error!!!);</script>";
        }
  }elseif ($_SESSION['type']=="Projects") {
              $r=$c->delprojects($id);
             if ($r) {
            header("location:manage.php?id=Projects");
        } else {
            echo "<script>alert(404 error!!!);</script>";
        } 
  }elseif ($_SESSION['type']=="Eclasses") {
            $r=$c->delclasses($id);
            if ($r) {
            header("location:manage.php?id=classes");
        } else {
            echo "<script>alert(404 error!!!);</script>";
        }
  }

  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Manage Notes</title>
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
          <li><a href="index.php">Teacher</a></li>
          <li>Notes</li>
        </ol>
        <h2>Manage Notes</h2>

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
              <td class="padding-top-f"><?php echo $value['subjectCode']; ?></td>
              <td class="width-for-notes">
                <?php if ($_SESSION['type']=="Eclasses") { ?>
                      <label class=" col-form-label " for="lect"><a  href="<?php echo $value['attachment']; ?>" target=_blank><?php echo $value['Title']; ?></a></label>
               <?php } else{?>

                 <label class=" col-form-label " for="lect"><a  href="../uploads/<?php echo $value['attachment']; ?>"><?php echo $value['Title']; ?></a></label>
               <?php } ?>
              </td>
              <td >
                 <a href="manage.php?del=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?');"><button class="btn btn-danger">Delete</button></a>
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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!--  Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
