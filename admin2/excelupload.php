
<?php
  $mysqli =  mysqli_connect("localhost","root", "", "tsp");


require('../../library-excel/php-excel-reader/excel_reader2.php');
require('../../library-excel/SpreadsheetReader.php');


if(isset($_POST['Submit'])){


  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
  if(in_array($_FILES["file"]["type"],$mimes)){


    $uploadFilePath = '../uploads/excel-data/'.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


    $Reader = new SpreadsheetReader($uploadFilePath);


    $totalSheet = count($Reader->sheets());


    echo "You have total ".$totalSheet." sheets".


    $html="<table border='1'>";
    $html.="<tr><th>StudentId</th>
                <th>Enroll_no</th>
                <th>Course</th>
                <th>Semester</th>
                <th>FullName</th>
                <th>EmailId</th>
                <th>MobileNumber</th>
                <th>Password</th>
            </tr>";


    /* For Loop for all sheets */
    for($i=0;$i<$totalSheet;$i++){


      $Reader->ChangeSheet($i);


      foreach ($Reader as $Row)
      {
        $html.="<tr>";
        $studentid = isset($Row[0]) ? $Row[0] : '';
        $Enroll_no = isset($Row[1]) ? $Row[1] : '';
        $Course = isset($Row[2]) ? $Row[2] : '';
        $Semester = isset($Row[3]) ? $Row[3] : '';
        $FullName = isset($Row[4]) ? $Row[4] : '';
        $EmailId = isset($Row[5]) ? $Row[5] : '';
        $MobileNumber = isset($Row[6]) ? $Row[6] : '';
        $Password = isset($Row[7]) ? $Row[7] : '';

        $html.="<td>".$studentid."</td>";
        $html.="<td>".$Enroll_no."</td>";
        $html.="<td>".$Course."</td>";
        $html.="<td>".$Semester."</td>";
        $html.="<td>".$FullName."</td>";
        $html.="<td>".$EmailId."</td>";
        $html.="<td>".$MobileNumber."</td>";
        $html.="<td>".$Password."</td>";

        $html.="</tr>";


        $query = "insert into students(`StudentId`, `Enroll_no`, `Course`, `Semester`, `FullName`, `EmailId`, `MobileNumber`, `Password`) values('".$studentid."','".$Enroll_no."','".$Course."','".$Semester."','".$FullName."','".$EmailId."','".$MobileNumber."','".$Password."')";


        $mysqli->query($query);
       }


    }


    $html.="</table>";
    echo $html;
    echo "<br />Data Inserted in dababase";


  }else { 
    die("<br/>Sorry, File type is not allowed. Only Excel file."); 
  }


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TSP | Admin | Add Student</title>
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
                  <form action="" method="post" enctype="multipart/form-data">

                 <div class="form-group">
                    <label><strong>Student Name<span class="red">*</span></strong></label>
                    <input type="file" name="file" class=""  placeholder="" required>
                  </div>
                  
              <div class="flexd">    
             <button class="custom" type="submit" name="submit">Upload</button> 
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