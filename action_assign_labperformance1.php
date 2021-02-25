<?php

require_once("config.php");
session_start();


// $query="INSERT INTO labperformance_marks
// VALUES('$course_id','$st_id','$per_marks')";
// $send=mysqli_query($connection,$query);



 //header("Location:action_assign_labperformance.php");











 $course_id=$_SESSION['course_id'];

 $st_id=$_POST['st_id'];
 $per_marks=$_POST['per_marks'];
//for testing
// echo "$course_id";
// echo "<br>";
// echo "$st_id";
// echo "<br>";
// echo "$sm_marks";

$check_query="SELECT $course_id
FROM labperformance_marks_3  WHERE labperformance_marks_3.st_id='$st_id'";
$check_send=mysqli_query($connection,$check_query);
$row=mysqli_fetch_array($check_send);
$value=$row[$course_id];
echo "$value";

if($value==0)
{

  $query="UPDATE labperformance_marks_3
  SET $course_id='$per_marks' WHERE labperformance_marks_3.st_id='$st_id'";
  $send=mysqli_query($connection,$query);
  

  $_SESSION['course_id']=$course_id;


  if($send)
  {

    header("Location:action_assign_labperformance.php?assign=done");
  }

  else {
    header("Location:action_assign_labperformance.php?not_assign=not_done");
  }

 }

 else if ($value!=0) {
 header("Location:action_assign_labperformance.php?already_assign=did");
 }






 ?>
