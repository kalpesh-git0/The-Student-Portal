<?php
class model{
     public $con="";
          function __construct()
          {
               $this->con=mysqli_connect("localhost","root","","tsp");

          }

          function login1($username,$password){
       
              //to prevent from mysqli injection 
              $username = stripcslashes($username); 
              $password = stripcslashes($password); 
              $username = mysqli_real_escape_string($this->con, $username); 
              $password = mysqli_real_escape_string($this->con, $password); 
           
              $sql = "SELECT * from students where emailid = '$username' and password = '$password'"; 
              $result = mysqli_query($this->con, $sql); 
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
              $count = mysqli_num_rows($result); 
              
              if($count == 1){ 
                    $_SESSION['login']=$row['EmailId']; 
                    $_SESSION['name']=$row['FullName'];
                    $_SESSION['id']=$row['StudentId'];
               
                  header("location:home.php"); 
              } else{ 

              $sql = "SELECT * from admin2 where emailid = '$username' and password = '$password'"; 
              $result = mysqli_query($this->con, $sql); 
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
              $count = mysqli_num_rows($result); 
              
              if($count == 1){ 
                    $_SESSION['login']=$row['EmailId']; 
                    $_SESSION['name']=$row['FullName'];
                    $_SESSION['id']=$row['StudentId'];
               
                  header("location:admin2/"); 
              } else{
               
               $sql = "SELECT * from library_admin where emailid = '$username' and password = '$password'"; 
              $result = mysqli_query($this->con, $sql); 
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
              $count = mysqli_num_rows($result); 
              
              if($count == 1){ 
                    $_SESSION['login']=$row['EmailId']; 
                    $_SESSION['name']=$row['FullName'];
                    $_SESSION['id']=$row['StudentId'];
               
                  header("location:admin-library/"); 
              } else{
               $sql = "SELECT * from teachers where emailid = '$username' and password = '$password'"; 
               $result = mysqli_query($this->con, $sql); 
               $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
               $count = mysqli_num_rows($result); 
              
              if($count == 1){ 
                    $_SESSION['login']=$row['emailId']; 
                    $_SESSION['name']=$row['Fullname'];
                    $_SESSION['subject']=$row['subject'];
               
                  header("location:teacher/"); 
              } else{
                    echo "<script>alert('Login failed. Invalid username or password.');</script>"; 

              }
              }

              }
              }    
                   
          }

          function showpro1($id){
               $r=mysqli_query($this->con,"SELECT * from students where StudentID='$id'");
               return $r;
          }

          function contactus($name,$email,$subject,$message){
               $r=mysqli_query($this->con,"INSERT INTO `contactus`(`Fullname`, `EmailId`, `subject`, `Message`) VALUES ('$name','$email','$subject','$message')");
               return $r;
          }

         function update($id,$name,$mobile){
               $r=mysqli_query($this->con,"UPDATE `students` SET FullName='$name', MobileNumber='$mobile' WHERE StudentId='$id'");
               return  $r;
         }
         function m_upload($subject,$category,$title,$attachment,$name){
               $r=mysqli_query($this->con,"INSERT INTO `e_learning_data`(`subjectCode`, `category`,`Title`, `attachment`, `uploader_name`) VALUES ('$subject','$category','$title','$attachment','$name')");
               return $r;
         }
         function notes($id){
               $r=mysqli_query($this->con,"SELECT * FROM e_learning_data where subjectCode='$id' AND category='Notes'");
               return $r;
         }
         function allnotes(){
               $r=mysqli_query($this->con,"SELECT * FROM `e_learning_data` WHERE category='Notes'");
               return $r;
         }

         function allassignments(){
               $r=mysqli_query($this->con,"SELECT * FROM `e_learning_data` WHERE category='Assignments'");
               return $r;
         }

         function allprojects(){
               $r=mysqli_query($this->con,"SELECT * FROM `e_learning_data` WHERE category='Projects'");
               return $r;
         } 

         function allclasses(){
               $r=mysqli_query($this->con,"SELECT * FROM `e_learning_data` WHERE category='E-classes'");
               return $r;
         }

         function delnote($id){
               $r=mysqli_query($this->con,"DELETE FROM `e_learning_data` WHERE id='$id'");
               return $r;
         }

         function delassignment($id){
               $r=mysqli_query($this->con,"DELETE FROM `e_learning_data` WHERE id='$id'");
               return $r;
         }
         
         function delproject($id){
               $r=mysqli_query($this->con,"DELETE FROM `e_learning_data` WHERE id='$id'");
               return $r;
         }

          function delclass($id){
               $r=mysqli_query($this->con,"DELETE FROM `e_learning_data` WHERE id='$id'");
               return $r;
         }  

          function assignments($id){
               $r=mysqli_query($this->con,"SELECT * FROM e_learning_data where subjectCode='$id' AND category='Assignments'");
               return $r;
         }
          function projects($id){
               $r=mysqli_query($this->con,"SELECT * FROM e_learning_data where subjectCode='$id' AND category='Projects'");
               return $r;
         }
         function eclasses($id){
               $r=mysqli_query($this->con,"SELECT * FROM e_learning_data where subjectCode='$id' AND category='E-classes'");
               return $r;
         }
         function fetchteacher(){
               $r=mysqli_query($this->con,"SELECT * FROM `teachers` WHERE 1");
               return $r;
         }
         
         function fetchcategory(){
            $r=mysqli_query($this->con,"SELECT * FROM `book_catagory` WHERE 1");
            return $r;
            
         }

         function fetchissuebook(){
            $r=mysqli_query($this->con,"SELECT * FROM `issuedbooks` WHERE 1");
            return $r;
            
         }

         function addbookto($bookname,$subject,$category,$author,$qty,$isbn,$image,$price){
               $r=mysqli_query($this->con,"INSERT INTO `books`(`bookname`, `image`, `subject`, `catid`,`author`, `ISBN_no`,`Qty`, `price`) VALUES ('$bookname','$image','$subject','$category','$author','$isbn','$qty','$price')");
               return $r;
         }

         function books(){
               $r=mysqli_query($this->con,"SELECT * FROM `books` WHERE 1");
               return $r;
         }
         
         function addcat($category,$status){
               $r=mysqli_query($this->con,"INSERT INTO `book_catagory`(`category`, `status`) VALUES ('$category','$status')");
               return $r;
         }

         function cat(){
               $r=mysqli_query($this->con,"SELECT * FROM `book_catagory` WHERE 1");
               return $r;
         }

         function fetchdoubt(){
               $r=mysqli_query($this->con,"SELECT * FROM `doubts` WHERE 1");
               return $r;
         }

         function fetchdoubtby($id){
               $r=mysqli_query($this->con,"SELECT * FROM `doubts` WHERE QId='$id'");
               return $r;
         }

         function fetchdoubtbysub($id){

               $r=mysqli_query($this->con,"SELECT * FROM doubts WHERE subject='$id'");
               return $r;
         }

         function postanswerid($answer,$file,$id,$name){
               $r=mysqli_query($this->con,"INSERT INTO `answers`(`QID`, `Answer`, `attachment`, `author`) VALUES ('$id','$answer','$file','$name')");
               return $r;
         }

         function fetchanswersbyid($id){
               $r=mysqli_query($this->con,"SELECT * FROM `answers` WHERE QID='$id'");
               return $r;
         }

         function postdoubt1($name,$subject,$topic,$question,$attachment){
               $r=mysqli_query($this->con,"INSERT INTO `doubts`(`stname`, `subject`, `topic`, `question`, `Quesattach`) VALUES ('$name','$subject','$topic','$question','$attachment')");
               return $r;
         }

         function fetchreview(){
               $r=mysqli_query($this->con,"SELECT * FROM `review_form` WHERE 1");
               return $r;
         }

          function del_std1($id){
               $r=mysqli_query($this->con,"DELETE from registration where id='$id'");
               return $r;
          }
          function del_teacher1($id){
               $r=mysqli_query($this->con,"DELETE from teachers where id='$id'");
               return $r;
          }
          
          function addteacher1($teachername,$email,$mobno,$pass){
                    
               $r=mysqli_query($this->con,"INSERT INTO `teachers`(`Fullname`, `emailId`, `password`, `mobileno`) VALUES ('$teachername','$email','$pass','$mobno')");
               return $r;
          } 

          function addstudent1($studentname,$enroll,$email,$mobno,$course,$semester,$password){
                    
               $r=mysqli_query($this->con,"INSERT INTO `students`(`Enroll_no`, `Course`, `Semester`, `FullName`, `EmailId`, `MobileNumber`, `Password`) VALUES ('$enroll','$course','$semester','$studentname','$email','$mobno','$password')");
               return $r;
          }    

          function fetchstudent(){
               $r=mysqli_query($this->con,"SELECT * FROM `students` WHERE 1");
               return $r;
          }

          function showteachers1(){
               $r=mysqli_query($this->con,"SELECT * from teachers");
               return $r;
          }

          function showteachers11($id){
               $r=mysqli_query($this->con,"SELECT * from teachers where id='$id'");
               return $r;
          }

          function shownm(){
               $r=mysqli_query($this->con,"SELECT `fname`,`mname`,`lname` from `teachers`");
               return $r;
          }
          function showsub(){
               $r=mysqli_query($this->con,"SELECT subject,SubjectCode from subjects");
               return $r;
          }

          function showsess(){
               $r=mysqli_query($this->con,"SELECT * from session where status=1");
               return $r;
          }

          function assign_teacher1($name,$subject,$sem,$session){
               $r=mysqli_query($this->con,"INSERT INTO `assign_teacher`(`tname`,`subject`, `semester`, `session`) VALUES ('$name','$subject','$sem','$session')");
               return $r;
          }

          function review_data($teacher, $semester, $subject, $total_lectures, $time_management, $punctuality, $regularity, $student_presence, $completes_syllabus, $alternate_arrangement, $subject_command, $focus, $self_confidence, $communication_skills, $classroom_discussion, $subject_matter, $link_subject_to_life, $reference_to_latest, $teaching, $useof_teaching_aids, $whiteboard, $innovative_teaching_method, $aswer_key, $result,$feedback){
               
               $r=mysqli_query($this->con,"INSERT INTO `review_form`( `teacher`, `semester`, `subject`, `total_lectures`, `time_management`, `punctuality`, `regularity`, `student_presence`, `completes_syllabus`, `alternate arrangement`, `subject_command`, `focus`, `self_confidence`, `communication_skills`, `classroom_discussion`, `subject_matter`, `link_subject_to_life`, `reference_to_latest`, `teaching`, `useof_teaching_aids`, `whiteboard`, `innovative_teaching_method`, `aswer_key`, `result`, `feedback`) 
               VALUES ('$teacher', '$semester', '$subject', '$total_lectures', '$time_management', '$punctuality', '$regularity', '$student_presence', '$completes_syllabus', '$alternate_arrangement', '$subject_command', '$focus', '$self_confidence', '$communication_skills', '$classroom_discussion', '$subject_matter', '$link_subject_to_life', '$reference_to_latest', '$teaching', '$useof_teaching_aids', '$whiteboard', '$innovative_teaching_method', '$aswer_key', '$result', '$feedback')");

               return $r;
              
          }

          function getstudent1($studentid){
               $r=mysqli_query($this->con,"SELECT FullName,Status FROM `students` WHERE `StudentId`='$studentid'");
               return $r;
               
          }

          function getbook1($bookid){
                $r=mysqli_query($this->con,"SELECT bookname,id FROM `books` WHERE `ISBN_no`='$bookid'");
                return $r;
          }

          function delbook($id){
               $r=mysqli_query($this->con,"DELETE FROM `books` WHERE id='$id'");
               return $r;
          }

          function delcat($id){
               $r=mysqli_query($this->con,"DELETE FROM `book_catagory` WHERE id='$id'");
               return $r;
          }

          function issuebook1($studentid,$bookid){
               $r=mysqli_query($this->con,"INSERT INTO `issuedbooks`(`bookid`, `studentid`) VALUES ('$bookid','$studentid')");
               return $r;
          }

          function fetchbooksjoinid($catid){
                $r=mysqli_query($this->con,"SELECT book_catagory.category,books.catid from book_catagory join books on book_catagory.id=books.catid where book_catagory.id=books.catid");
                return $r;
          }

          function fetchsubjectsid($id){
                $r=mysqli_query($this->con,"SELECT * FROM `subjects` WHERE subject='$id'");
                return $r;
          }

          function addmad($name,$email,$password){
                $r=mysqli_query($this->con,"INSERT INTO `admin2`(`Fullname`, `EmailId`, `password`) VALUES ('$name','$email','$password')");
                return $r;
          }

          function addlad($name,$email,$password){
                $r=mysqli_query($this->con,"INSERT INTO `library_admin`(`fullname`, `emailid`, `password`) VALUES ('$name','$email','$password')");
                return $r;
          }  

          function fetchmad(){
                $r=mysqli_query($this->con,"SELECT * FROM admin2 where 1 ");
                return $r;
          } 

          function fetchlad(){
                $r=mysqli_query($this->con,"SELECT * FROM library_admin where 1 ");
                return $r;
          }        

          function totalbookscount(){
                $r=mysqli_query($this->con,"SELECT SUM(`Qty`) FROM `books` WHERE 1");
                return $r;
          }  

          function updatebook1($id,$bookname,$subject,$qty,$category,$author,$isbn,$image,$price){
                $r=mysqli_query($this->con,"UPDATE `books` SET `bookname`='$bookname',`subject`='$subject',`image`='$image' ,`catid`='$category' ,`author`='$author' ,`ISBN_no`='$isbn' ,`Qty`='$qty' ,`price`='$price' WHERE id='$id' ");
                return $r;
          }   

          function fetchbooksby($id){
                $r=mysqli_query($this->con,"SELECT * FROM `books` WHERE id='$id' ");
                return $r;
          }

          function fetchissuedbook(){
                $r=mysqli_query($this->con,"SELECT students.FullName,books.bookname,books.ISBN_no,issuedbooks.issuedate,issuedbooks.returndate,issuedbooks.id from issuedbooks join students on students.StudentId=issuedbooks.studentid join books on books.ISBN_no=issuedbooks.bookid order by issuedbooks.id desc");
                return $r;
          }

          function fetchisuuedbookby($id){
                $r=mysqli_query($this->con,"SELECT students.FullName,books.bookname,books.ISBN_no,issuedbooks.issuedate,issuedbooks.returndate,issuedbooks.id ,issuedbooks.fine,issuedbooks.return_status from issuedbooks join students on students.StudentId=issuedbooks.studentid join books on books.ISBN_no=issuedbooks.bookid where issuedbooks.id='$id'");
                return $r;
          }

          function updateissuedbookby($id,$fine,$rstatus){
                $r=mysqli_query($this->con,"UPDATE `issuedbooks` SET `return_status`='$rstatus', `fine`='$fine' WHERE id='$id'");
                return $r;
          }
}
     
?>