<?php
          include('model.php');

class control{

     function login($username,$password){
          $m=new model();
          $r=$m->login1($username,$password);
          return $r;
     }

     
     function showprofile($id){
          $m=new model();
          $r=$m->showpro1($id);
          return $r;
     }

     function contact($name,$email,$subject,$message){
          $m=new model();
          $r=$m->contactus($name,$email,$subject,$message);
          return $r;
     }

     function e_upload($subject,$category,$title,$attachment,$name){
          $m=new model();
          $r=$m->m_upload($subject,$category,$title,$attachment,$name);
          return $r;
     }

     function fetchnotes($id){
          $m=new model();
          $r=$m->notes($id);
          return $r;
     }

     function fetchallnotes(){
          $m=new model();
          $r=$m->allnotes();
          return $r;
     }

     function fetchallassignments(){
          $m=new model();
          $r=$m->allassignments();
          return $r;
     }
     
     function fetchallprojects(){
          $m=new model();
          $r=$m->allprojects();
          return $r;
     }
     
     function fetchallclasses(){
          $m=new model();
          $r=$m->allclasses();
          return $r;
     }
     
     function delnotes($id){
          $m=new model();
          $r=$m->delnote($id);
          return $r;
     }

     function delassignments($id){
          $m=new model();
          $r=$m->delassignment($id);
          return $r;
     }

     function delprojects($id){
          $m=new model();
          $r=$m->delproject($id);
          return $r;
     }

     function delclasses($id){
          $m=new model();
          $r=$m->delclass($id);
          return $r;
     }

     function fetchassignments($id){
          $m=new model();
          $r=$m->assignments($id);
          return $r;
     }
     function fetchprojects($id){
          $m=new model();
          $r=$m->projects($id);
          return $r;
     }

     function classes($id){
          $m=new model();
          $r=$m->eclasses($id);
          return $r;
     }
      function fetchsubjects(){
          $m=new model();
          $r=$m->showsub();
          return $r;
     }

     function addbook($bookname,$subject,$category,$author,$qty,$isbn,$image,$price){
          $m=new model();
          $r=$m->addbookto($bookname,$subject,$category,$author,$qty,$isbn,$image,$price);
          return $r;
     }

     function fetchbooks(){
          $m=new model();
          $r=$m->books();
          return $r;
     }

     function addcategory($category,$status){
          $m=new model();
          $r=$m->addcat($category,$status);
          return $r;
     }

     function category(){
          $m=new model();
          $r=$m->cat();
          return $r;
     }

     function postdoubt($name,$subject,$topic,$question,$attachment){
          $m=new model();
          $r=$m->postdoubt1($name,$subject,$topic,$question,$attachment);
          return $r;
     }

     function fetchstudents(){
	
          $m=new model();
          $r=$m->fetchstudent();
          return $r;
          
     }

     function fetchcat(){
          $m=new model();
          $r=$m->fetchcategory();
          return $r;
          
     }

     function fetchissuebooks(){
          $m=new model();
          $r=$m->fetchissuebook();
          return $r;
          
     }


     function fetchteachers(){
          $m=new model();
          $r=$m->fetchteacher();
          return $r;
     }

     function updateprofile($id,$name,$mobile){
          $m= new model();
          $r=$m->update($id,$name,$mobile);
          return $r;
     }
     function del_teacher($id){
          $m= new model();
          $r=$m->del_teacher1($id);
          return $r;
     }
     
     function fetchdoubts(){
          $m=new model();
          $r=$m->fetchdoubt();
          return $r;
     }

     function fetchdoubtbyid($id){
          $m=new model();
          $r=$m->fetchdoubtby($id);
          return $r;
     }

     function fetchdoubtbysubject($id){
          $m=new model();
          $r=$m->fetchdoubtbysub($id);
          return $r;
     }

     function postanswer($answer,$file,$id,$name){
          $m=new model();
          $r=$m->postanswerid($answer,$file,$id,$name);
          return $r;
     }

     function fetchanswers($id){
          $m=new model();
          $r=$m->fetchanswersbyid($id);
          return $r;
     }

     function fetchreviews(){
          $m=new model();
          $r=$m->fetchreview();
          return $r;
     }

     function addteacher($teachername,$email,$mobno,$pass){
          $m=new model();
          $r=$m->addteacher1($teachername,$email,$mobno,$pass);
          return $r;
     }

     function addstudent($studentname,$enroll,$email,$mobno,$course,$semester,$password){
          $m=new model();
          $r=$m->addstudent1($studentname,$enroll,$email,$mobno,$course,$semester,$password);
          return $r;
     }

     function showteachers(){
	
          $m=new model();
          $r=$m->showteachers1();
          return $r;
          
     }
     function showteachers1($id){
	
          $m=new model();
          $r=$m->showteachers11($id);
          return $r;
          
     }

     function shownames(){
          $m=new model();
          $r=$m->shownm();
          return $r;
     }
    
     

     function assign_teacher($name,$subject,$sem,$session){
          $m=new model();
          $r=$m->assign_teacher1($name,$subject,$sem,$session);
          return $r;
     }

     function review_form($teacher, $semester, $subject, $total_lectures, $time_management, $punctuality, $regularity, $student_presence, $completes_syllabus, $alternate_arrangement, $subject_command, $focus, $self_confidence, $communication_skills, $classroom_discussion, $subject_matter, $link_subject_to_life, $reference_to_latest, $teaching, $useof_teaching_aids, $whiteboard, $innovative_teaching_method, $aswer_key, $result,$feedback){
          $m=new model();
          $r=$m->review_data($teacher, $semester, $subject, $total_lectures, $time_management, $punctuality, $regularity, $student_presence, $completes_syllabus, $alternate_arrangement, $subject_command, $focus, $self_confidence, $communication_skills, $classroom_discussion, $subject_matter, $link_subject_to_life, $reference_to_latest, $teaching, $useof_teaching_aids, $whiteboard, $innovative_teaching_method, $aswer_key, $result,$feedback);
          return $r;
     }

     function getstudent($studentid){
          $m=new model();
          $r=$m->getstudent1($studentid);
          return $r;
     }

     function getbook($bookid){
          $m=new model();
          $r=$m->getbook1($bookid);
          return $r;
     }

     function deletebook($id){
          $m=new model();
          $r=$m->delbook($id);
          return $r;
     }

      function deletecategory($id){
          $m=new model();
          $r=$m->delcat($id);
          return $r;
     }

     function issuebook($studentid,$bookid){
          $m=new model();
          $r=$m->issuebook1($studentid,$bookid);
          return $r;
     }
     function fetchbooksjoin($catid){
          $m=new model();
          $r=$m->fetchbooksjoinid($catid);
          return $r;        
     }
     function fetchsubjectsbyid($id){
          $m=new model();
          $r=$m->fetchsubjectsid($id);
          return $r;
     }

     function addmadmin($name,$email,$password){
          $m=new model();
          $r=$m->addmad($name,$email,$password);
          return $r;
     }

     function addladmin($name,$email,$password){
          $m=new model();
          $r=$m->addlad($name,$email,$password);
          return $r;
     }

     function fetchmainadmin(){
          $m=new model();
          $r=$m->fetchmad();
          return $r;
     }

     function fetchlibadmin(){
          $m=new model();
          $r=$m->fetchlad();
          return $r;
     }


     function totalbooks(){
          $m=new model();
          $r=$m->totalbookscount();
          return $r;
     }

     function updatebook($id,$bookname,$subject,$qty,$category,$author,$isbn,$image,$price){
          $m=new model();
          $r=$m->updatebook1($id,$bookname,$subject,$qty,$category,$author,$isbn,$image,$price);
          return $r;
     }

     function fetchbooksbyid($id){
          $m=new model();
          $r=$m->fetchbooksby($id);
          return $r;

     }

     function fetchissuedbooks(){
          $m=new model();
          $r=$m->fetchissuedbook();
          return $r;
     }

     function fetchisuuedbookbyid($id){
          $m=new model();
          $r=$m->fetchisuuedbookby($id);
          return $r;
     }

     function updateissuedbook($id,$fine,$rstatus){
          $m=new model();
          $r=$m->updateissuedbookby($id,$fine,$rstatus);
          return $r;
     }


}
     

?>