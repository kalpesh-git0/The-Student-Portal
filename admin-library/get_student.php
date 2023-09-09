
<?php 
  require_once '../config/control.php';
  if(!empty($_POST["studentid"])) {
    $c=new control();
    $studentid=$_POST['studentid'];
    $res1=$c->getstudent($studentid);
    $count=mysqli_num_rows($res1);

    if($count) {
      foreach ($res1 as $res) {
        if($res['Status']==0)
        {
          echo "<span style='color:red'> Student ID Blocked </span>"."<br />";
          echo "<b>Student Name - </b>" .$res['FullName'];
          echo "<script>$('#submit').prop('disabled',true);</script>";
          echo "<span style='color:red'> <br/>Please Contact Administration </span>"."<br />";

        } else { 
            echo htmlentities($res['FullName']);
           echo "<script>$('#submit').prop('disabled',false);</script>";
        }
      }
    }else{
        
        echo "<span style='color:red'> Invaid Student Id. Please Enter Valid Student id .</span>";
       echo "<script>$('#submit').prop('disabled',true);</script>";
      }            
     
    
  }
?>
