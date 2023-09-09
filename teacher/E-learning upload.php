<?php

session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}  

include '../config/control.php'; 

$c=new control();
$results=$c->fetchsubjects();

$id=$_REQUEST['id'];

if (isset($_POST['submit'])) {
  $subject=$_POST['subject'];
  $category=$_POST['category'];
  $title=$_POST['title'];
  $name=$_POST['name'];
  
  if ($id=='E-classes') {
    $attachment=$_POST['src'];

  }else{
    move_uploaded_file($_FILES["attachment"]["tmp_name"],"../uploads/".$_FILES["attachment"]["name"]);
  $attachment=$_FILES["attachment"]["name"];

  }
  
  $c=new control();
  $r=$c->e_upload($subject,$category,$title,$attachment,$name);

   if($r)
      echo "<script>alert('Data Uploaded');</script>";
    else
     echo "<script>alert('404 Error Occured!!!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-learning upload - TSP</title>
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

  <!-- Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../style2.css">


</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("header.php"); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.php">Home</a></li>
          <li>E-learning</li>
        </ol>
        <h2>Upload</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <section id="upload" class="upload">
      <div class="container">

        <div class="col-lg-7 ">

           <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group "> 
                    <select class="form-control" name="subject">
                      <option>Select Subject</option>
                      <?php foreach ($results as $value) { ?>
                      <option value="<?php echo $value['SubjectCode']; ?>"><?php echo $value['subject'];?></option>
                      <?php } ?>

                    </select>
                </div>
                <div class="form-group "> 
                    <input class="form-control" type="text" name="category" value="<?php echo $id;?>" readonly>                
                </div>
                          
             <div class="form-group">
                <input class="form-control" type="text" name="title" placeholder="Title">
             </div>

             <div class="form-group">
              <?php if ($id=="E-classes") {?>
                <textarea class="form-control"  name="src" placeholder="enter here the link copied from youtube or google drive or any other location with iframe tag"></textarea>
              <?php } else{ ?>
                <input class="form-control-file" type="file" name="attachment">
              <?php } ?>  
             </div>

              <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Uploader Name">
             </div>
             
             <button class="btn btn-primary" name="submit">Upload</button> 


           </form>
        </div>

      </div>

    </section><!-- End upload Section -->

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
  <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>

</body>

</html>