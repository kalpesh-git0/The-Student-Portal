<?php 
require_once("../config/control.php");
if(!empty($_POST["bookid"])) {
  $bookid=$_POST["bookid"];
     $c=new control();
    $res1=$c->getbook($bookid);
    $count=mysqli_num_rows($res1);
if($count)
{
  foreach ($res1 as $result) {?>
<option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['bookname']);?></option>
<b>Book Name :</b> 
<?php  
echo htmlentities($result['bookname']);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
 else{?>
  
<option class="others"> Invalid ISBN Number</option>
<?php
 echo "<script>$('#submit').prop('disabled',true);</script>";
}
}



?>
