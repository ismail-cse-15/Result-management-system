<?php

require_once("config.php");
session_start();






  $course_id=$_SESSION['course_id'];

  $st_id=$_POST['st_id'];
  $q_marks=$_POST['q_marks'];
 //for testing
 // echo "$course_id";
 // echo "<br>";
 // echo "$st_id";
 // echo "<br>";
 // echo "$q_marks";

 $check_query="SELECT $course_id
 FROM lab_quize_marks_3  WHERE lab_quize_marks_3.st_id='$st_id'";
 $check_send=mysqli_query($connection,$check_query);
 $row=mysqli_fetch_array($check_send);
 $value=$row[$course_id];
 echo "$value";

 if($value==0)
 {

   $query="UPDATE lab_quize_marks_3
   SET $course_id='$q_marks' WHERE lab_quize_marks_3.st_id='$st_id'";
   $send=mysqli_query($connection,$query);


   $_SESSION['course_id']=$course_id;


   if($send)
   {

     header("Location:action_assign_labquize.php?assign=done");
   }

   else {
     header("Location:action_assign_labquize.php?not_assign=not_done");
   }

  }

  else if ($value!=0) {
  header("Location:action_assign_labquize.php?already_assign=did");
  }

 ?>
