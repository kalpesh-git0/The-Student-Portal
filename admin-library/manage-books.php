<?php
include  '../config/control.php';

$c=new control();
$result1=$c->fetchbooks();

$Sno=0;

if (isset($_REQUEST['del'])) {
    $id=$_REQUEST['del'];
    $c=new control();
    $del=$c->deletebook($id);
    if ($del) {
    echo "<script>alert('Book Deleted successfully 😊');</script>";
    header("location:manage-books.php");
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

  <title>TSP | Admin | Manage Books</title>
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
        
          <h2>Manage Books</h2>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Manage Books Section ======= -->
    <section id="table" class="table">
      <div class="container">

        <div class="col-lg-12 entries ">
          <input type="text" id="myInput" onkeyup="myFunctions()" placeholder="Search for names.."> 
          <!--- ====== table data ====== --->
          <form action="" method="post">
            <table class="table table-striped table-bordered" id="myTable">
              <thead>
                <th>S.No</th>
                <th>ISBN No.</th>
                <th>Category</th>                
                <th>Book Name</th>
                <th>Qty</th>
                <th>Author</th>
                <th>Price</th>
                <th>Image</th>
                <th>Regdate</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php foreach($result1 as $r1){ ?>
                <tr>
                <td><label><?php echo ++$Sno; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['ISBN_no']; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['catid']; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['bookname']; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['Qty']; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['author']; ?></label></td>
                <td><label class="col-form-label"><?php echo $r1['price']; ?></label></td>
                <td><img src="../uploads/bookimg/<?php echo $r1['image']; ?>" class="bkimg" /></td>
                <td><label class="col-form-label"><?php echo $r1['regdate']; ?></label></td>          
                <td><a href="edit-book.php?id=<?php echo $r1['id']; ?>" class=" pr-1"><i class="fa fa-edit"></i></a>
                    <a href="?del=<?php echo $r1['id']; ?>" class=" pl-1 "><i class="fa fa-trash"></i></a>
                </td>              
              </tr>
             <?php } ?>
              </tbody>
            </table>
               
          </form> 
          <!--- ====== end table data ====== ---> 
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


</body>

</html>