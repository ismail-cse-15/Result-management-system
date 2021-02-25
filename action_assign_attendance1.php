<?php

require_once("config.php");
session_start();
$course_id=$_SESSION['course_id'];

$st_id=$_POST['st_id'];
$at_marks=$_POST['at_marks'];

//for testing
// echo "$course_id";
// echo "<br>";
// echo "$st_id";
// echo "<br>";
// echo "$at_marks";
// echo "$course_id ' ' $ct_no ' ' $st_id ' ' $marks ' '";
$query="UPDATE attendance_marks_3
SET $course_id='$at_marks' WHERE attendance_marks_3.st_id='$st_id'";
$send=mysqli_query($connection,$query);

$_SESSION['course_id']=$course_id;
if($send)
{

  header("Location:action_assign_attendance.php?assign=done");
}
else {
  header("Location:action_assign_attendance.php?not_assign=not_done");
}




 ?>
