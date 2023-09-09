<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}

  include 'config/control.php';
  $n=$_SESSION['name'];
  $c=new control();
  $result=$c->fetchsubjects();

if(isset($_POST['submit'])) {
  $name=$_POST['name'];
  $subject=$_POST['subject'];
  $topic=$_POST['topic'];
  $question=$_POST['question'];
  move_uploaded_file($_FILES['attachment']['tmp_name'],"uploads/doubts/".$_FILES['attachment']['name']);
  $attachment=$_FILES['attachment']['name'];

  $c=new control();
  $result1=$c->postdoubt($name,$subject,$topic,$question,$attachment);
  if ($result1) {
    echo "<script>alert('uploaded');</script>";
  }else{
    echo "<script>alert(' not uploaded');</script>"; 
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doubt-view - The Student Portal</title>
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

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <li>doubt-post</li>
        </ol>
        <h2>Write down your doubt here and post in on the portal.</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    
   <!---- ===doubt form=== -----> 
    <section id="blog" class="blog">
      <div class="container">

       <div class=" flexd  ">

              <!--- =====Add Category==== --->
               <fieldset class=" borderd"> 
                  <form action="" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                    <label><strong>Name<span class="red">*</span></strong></label>
                    <input type="text" class="form-control" name="name" value="<?php echo $n; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label><strong>Subjects<span class="red">*</span></strong></label>        
                    <select class="form-control" name="subject" required>
                      <option value="">Select-subject</option>                        
                      <?php foreach($result as $r1) { ?>
                      <option value="<?php echo $r1['SubjectCode']; ?>"><?php echo $r1['subject']; ?></option>
                    <?php } ?>
                    </select>  
                  </div>
                  <div class="form-group">
                    <label><strong>Topic<span class="red">*</span></strong></label>
                    <input type="text" class="form-control" name="topic" placeholder="Enter Topic in 60 Characters" required>
                  </div>
                  <div class="form-group">
                    <label><strong>Question<span class="red">*</span></strong></label>
                    <textarea type="text" class="form-control" rows="3" name="question" placeholder="Enter Your Question Here in 250 Characters" required></textarea>
                  </div> 
                  <div class="form-group">
                    <label><strong>Attachment<span class="red">*</span></strong></label>
                    <input type="file" class="pt-1 pl-4" name="attachment">
                    <p><small>To enter additional information attach file here.</small></p>
                  </div>
                 
              <div class="flexd">    
             <button class="custom" type="submit" name="submit">Post Doubt</button> 
              </div>
           </form>
               </fieldset>
              <!--- =====End Add Category==== --->
             

        </div>

      </div>
    </section><!-- End doubt post Section -->

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>

</body>

</html>