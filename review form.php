<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}  

include("config/control.php");
$c=new control();
$result1=$c->fetchsubjects();
$result2=$c->fetchteachers();

if(isset($_POST['submit'])){
    
    $teacher=$_POST ["tname"];
    $semester=$_POST["sem"];
    $subject=$_POST["subject"];
    $total_lectures=$_POST["total_lecture"];  
    $time_management=$_POST["timein"];  
    $punctuality=$_POST["punc"];  
    $regularity=$_POST["reg"];  
    $student_presence=$_POST["att"];
    $completes_syllabus=$_POST["syll"];  
    $alternate_arrangement=$_POST["alt"];  
    $subject_command=$_POST["comm"];  
    $focus=$_POST["focus"];  
    $self_confidence=$_POST["selfconf"];  
    $communication_skills=$_POST["commskills"];  
    $classroom_discussion=$_POST["ccd"];
    $subject_matter=$_POST["teachingsubmatt"];  
    $link_subject_to_life=$_POST["intinsub"];  
    $reference_to_latest=$_POST["refld"];  
    $teaching=$_POST["teaching"];  
    $useof_teaching_aids=$_POST["useoftaids"];  
    $whiteboard=$_POST["bwwrok"];  
    $innovative_teaching_method=$_POST["innot"];  
    $aswer_key=$_POST["qasol"];  
    $result=$_POST["evalansbooks"];  
    $feedback=$_POST["review"];

   $c=new control();
   $r=$c->review_form($teacher, $semester, $subject, $total_lectures, $time_management, $punctuality, $regularity, $student_presence, $completes_syllabus, $alternate_arrangement, $subject_command, $focus, $self_confidence, $communication_skills, $classroom_discussion, $subject_matter, $link_subject_to_life, $reference_to_latest, $teaching, $useof_teaching_aids, $whiteboard, $innovative_teaching_method, $aswer_key, $result,$feedback);

    if($r)
      echo "<script>alert('Responce Recorded');</script>";
    else
     echo "<script>alert('404 Error Occured!!!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Review Form-TSP</title>
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


  <!--  Main CSS File -->
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
          <li><a href="home.php">Home</a></li>
          <li>Review Platform</li>
        </ol>
        
          <h2>Review Form</h2>
          
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= doubt Section ======= -->
    <section id="review" class="Review">
      <div class="container cls">

        <div class="col-lg-10 entries ">
           
          <!--- ====== review form ====== --->
          <form action="" method="post">
            <table class="table table-borderless ">
               <tr class="form-row" >
                <td class="col-md-4 ">
                    <select class="form-control form-control-lg col-12" name="tname" required>
                      <option>SELECT TEACHER</option>
                       <?php foreach ($result2 as $value) { ?>
                      <option value="<?php echo $value['teacherId']; ?>"><?php echo $value['FullName'];?></option>
                      <?php } ?>
                    </select>
                </td>
                <td class="col-md-4">
                   <select class="form-control form-control-lg col-12" name="sem" required>
                      <option>SELECT SEMESTER</option>
                      <?php for($i=1;$i<=6;$i++){ ?> 
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option> <?php } ?>
                    </select>
                </td>
                <td class="col-md-4" colspan="2">
                  <select class="form-control form-control-lg col-12" name="subject" required>
                      <option> SELECT SUBJECT</option>
                       <?php foreach ($result1 as $value) { ?>
                      <option value="<?php echo $value['SubjectCode']; ?>"><?php echo $value['subject'];?></option>
                      <?php } ?>
                    </select>
                </td>
              </tr>
            </table>
            <table class="table table-striped table-borderless">
              <tr>
                <td><label class="col-sm-10 col-form-label col-form-label-lg" for="lect">Total Lectures Delivered</label></td>
                <td><input required type="number" name="total_lecture" id="lect" class="form-control" max=80 min=0 data-msg="Please enter lectures between 0 to 80"></td>
              </tr>
              <tr>
                <td colspan="2">
                  <p class="text-center red">*Rate between 1 to 10 in the following table.*</p>
                </td>
              </tr>
              <tr>
                <td><label class="col-sm-10 col-form-label col-form-label-lg" for="timein">Time Management</label></td>
                <td><input required type="number" name="timein" id="timein" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="punc">Punctuality in class</label></td>
                  <td><input required type="number" name="punc" id="punc" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="reg">Regularity in taking classes</label></td>
                  <td><input required type="number" name="reg" id="reg" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="att">Student's presence/attendance in the class of teacher who is being evaluated</label></td>
                  <td><input required type="number" name="att" id="att" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="syll">Completes syllabus of the course as per teaching plan</label></td>
                  <td><input required type="number" name="syll" id="syll" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="alt">Makes alternate arrangement of class in his/her absence</label></td>
                  <td><input required type="number" name="alt" id="alt" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="comm">Subject command and communication skills</label></td>
                  <td><input required type="number" name="comm" id="comm" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="focus">Focus on syllabus</label></td>
                  <td><input required type="number" name="focus" id="focus" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="selfconf">Self Confidence</label></td>
                  <td><input required type="number" name="selfconf" id="selfconf" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="commskills">Communication Skills</label></td>
                  <td><input required type="number" name="commskills" id="" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="ccd">Conducting Classroom Discussions</label></td>
                  <td><input required type="number" name="ccd" id="ccd" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="teachingsubmatt">Teaching Subject Matter</label></td>
                  <td><input required type="number" name="teachingsubmatt" id="teachingsubmatt" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="intinsub">Skills of linking subject to life experience and creating interest in the subject</label></td>
                  <td><input required type="number" name="intinsub" id="intinsub" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="refld">Reference to latest developments in the field</label></td>
                  <td><input required type="number" name="refld" id="refld" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="teaching">Teaching</label></td>
                  <td><input required type="number" name="teaching" id="teaching" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="useoftaids">Use of teaching aids (OHP/Blackboard/PPTs)</label></td>
                  <td><input required type="number" name="useoftaids" id="useoftaids" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="bwwork">Blackboard/Whiteboard work in terms of legibility, visibility and structure</label></td>
                  <td><input required type="number" name="bwwrok" id="bwwrok" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="innot">Use of innovative teaching methods</label></td>
                  <td><input required type="number" name="innot" id="innot" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="qasol">Shares answers of class tests or semester tests questions</label></td>
                  <td><input required type="number" name="qasol" id="qasol" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td><label class="col-sm-10 col-form-label col-form-label-lg" for="evalansbooks">Shows the evaluated answer booksof class tests to the students</label></td>
                  <td><input required type="number" name="evalansbooks" id="evalansbooks" class="form-control" max=10 min=0></td>
              </tr>
              <tr>
                  <td colspan="2"><label for="write" class="col-sm-10 col-form-label col-form-label-lg">Write your Review or feedback below (100words) </label></td>
              </tr>
              <tr>
                  <td colspan="2"><textarea name="review" id="textarea" cols="30" rows="5" class="form-control"></textarea></td>
              </tr>
            </table>
            <div class="flexd ">
                <button class="custom" type="submit" name="submit" onclick="return confirm('Are you sure you want to submit?');">Submit</button>
            </div>    
          </form> 
          <!--- ====== end review form ====== ---> 
        </div>  
      </div>

    </section><!-- End review Section -->

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

</body>

</html>