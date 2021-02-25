<?php

require_once("config.php");
session_start();



// $query="INSERT INTO board_viva_marks
// VALUES('$course_id','$st_id','$bv_marks')";
// $send=mysqli_query($connection,$query);
// if($send)
// {
//   echo "sended";
// }
// $_SESSION['course_id']=$course_id;
//
//   header("Location:action_assign_board_viva.php");

$course_id=$_SESSION['course_id'];

$st_id=$_POST['st_id'];
$bv_marks=$_POST['bv_marks'];

//echo "$st_id ' ' $bv_marks ' ' $course_id";


$check_query="SELECT $course_id
FROM board_viva_marks_3  WHERE board_viva_marks_3.st_id='$st_id'";
$check_send=mysqli_query($connection,$check_query);
$row=mysqli_fetch_array($check_send);
$value=$row[$course_id];
  echo "$value";

  if($value==0)
  {

    $query="UPDATE board_viva_marks_3
    SET $course_id='$bv_marks' WHERE board_viva_marks_3.st_id='$st_id'";
    $send=mysqli_query($connection,$query);


    $_SESSION['course_id']=$course_id;


    if($send)
    {

      header("Location:action_assign_board_viva.php?assign=done");
    }

    else {
      header("Location:action_assign_board_viva.php?not_assign=not_done");
    }

   }

   else if ($value!=0) {
   header("Location:action_assign_board_viva.php?already_assign=did");
   }






 ?>
