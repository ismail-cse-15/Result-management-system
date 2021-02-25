<?php

require_once("config.php");
session_start();
$course_id=$_SESSION['course_id'];
$ct_no=$_SESSION['ct_no'];
$st_id=$_POST['st_id'];
$marks=$_POST['marks'];

if($ct_no==1)
{
//   echo "$ct_no";
//     echo "<br>";
// //$query="";


  $query="UPDATE $course_id set ct_1='$marks' WHERE st_id='$st_id'";
  $send=mysqli_query($connection,$query);
  $query1="SELECT * FROM $course_id WHERE st_id='$st_id'";
  $send1=mysqli_query($connection,$query1);
  $row1=mysqli_fetch_array($send1);
  $ct_1_mark=$row1['ct_1'];
  $ct_2_mark=$row1['ct_2'];
  $ct_3_mark=$row1['ct_3'];
  $ct_4_mark=$row1['ct_4'];
  $stud_id=$row1['st_id'];
  // echo "$stud_id";
  //   echo "<br>";
  // echo "$ct_1_mark ";
  // echo "<br>";
  // echo"  $ct_2_mark ";
  //   echo "<br>";
  // echo "$ct_3_mark";
  //   echo "<br>";
  // echo "$ct_4_mark";
  //   echo "<br>";
  $numbers=array($ct_1_mark,$ct_2_mark,$ct_3_mark,$ct_4_mark);
sort($numbers);
$total_marks=$numbers[3]+$numbers[2]+$numbers[1];
$avg=$total_marks/3;
// echo "<br>";
// echo "$total_marks";
// echo "<br>";
// echo "$avg";

$query2="UPDATE $course_id set avg='$avg' WHERE st_id='$st_id'";
$send2=mysqli_query($connection,$query2);

}
else if ($ct_no==2) {
  echo "$ct_no";

  $query="UPDATE $course_id set ct_2='$marks' WHERE st_id='$st_id'";
  $send=mysqli_query($connection,$query);
  $query1="SELECT * FROM $course_id WHERE st_id='$st_id'";
  $send1=mysqli_query($connection,$query1);
  $row1=mysqli_fetch_array($send1);
  $ct_1_mark=$row1['ct_1'];
  $ct_2_mark=$row1['ct_2'];
  $ct_3_mark=$row1['ct_3'];
  $ct_4_mark=$row1['ct_4'];
  $stud_id=$row1['st_id'];
  // echo "$stud_id";
  //   echo "<br>";
  // echo "$ct_1_mark ";
  // echo "<br>";
  // echo"  $ct_2_mark ";
  //   echo "<br>";
  // echo "$ct_3_mark";
  //   echo "<br>";
  // echo "$ct_4_mark";
  //   echo "<br>";
  $numbers=array($ct_1_mark,$ct_2_mark,$ct_3_mark,$ct_4_mark);
sort($numbers);
$total_marks=$numbers[3]+$numbers[2]+$numbers[1];
$avg=$total_marks/3;
// echo "<br>";
// echo "$total_marks";
// echo "<br>";
// echo "$avg";
$query2="UPDATE $course_id set avg='$avg' WHERE st_id='$st_id'";
$send2=mysqli_query($connection,$query2);

}

else if ($ct_no==3) {
  // echo "$ct_no";

  $query="UPDATE $course_id set ct_3='$marks' WHERE st_id='$st_id'";
  $send=mysqli_query($connection,$query);
  $query1="SELECT * FROM $course_id WHERE st_id='$st_id'";
  $send1=mysqli_query($connection,$query1);
  $row1=mysqli_fetch_array($send1);
  $ct_1_mark=$row1['ct_1'];
  $ct_2_mark=$row1['ct_2'];
  $ct_3_mark=$row1['ct_3'];
  $ct_4_mark=$row1['ct_4'];
  $stud_id=$row1['st_id'];
  // echo "$stud_id";
  //   echo "<br>";
  // echo "$ct_1_mark ";
  // echo "<br>";
  // echo"  $ct_2_mark ";
  //   echo "<br>";
  // echo "$ct_3_mark";
  //   echo "<br>";
  // echo "$ct_4_mark";
  //   echo "<br>";
  $numbers=array($ct_1_mark,$ct_2_mark,$ct_3_mark,$ct_4_mark);
sort($numbers);
$total_marks=$numbers[3]+$numbers[2]+$numbers[1];
$avg=$total_marks/3;
// echo "<br>";
// echo "$total_marks";
// echo "<br>";
// echo "$avg";
$query2="UPDATE $course_id set avg='$avg' WHERE st_id='$st_id'";
$send2=mysqli_query($connection,$query2);

}

else if ($ct_no==4) {
  // echo "$ct_no";

  $query="UPDATE $course_id set ct_4='$marks' WHERE st_id='$st_id'";
  $send=mysqli_query($connection,$query);
  $query1="SELECT * FROM $course_id WHERE st_id='$st_id'";
  $send1=mysqli_query($connection,$query1);
  $row1=mysqli_fetch_array($send1);
  $ct_1_mark=$row1['ct_1'];
  $ct_2_mark=$row1['ct_2'];
  $ct_3_mark=$row1['ct_3'];
  $ct_4_mark=$row1['ct_4'];
  $stud_id=$row1['st_id'];
  // echo "$stud_id";
  //   echo "<br>";
  // echo "$ct_1_mark ";
  // echo "<br>";
  // echo"  $ct_2_mark ";
  //   echo "<br>";
  // echo "$ct_3_mark";
  //   echo "<br>";
  // echo "$ct_4_mark";
  //   echo "<br>";
  $numbers=array($ct_1_mark,$ct_2_mark,$ct_3_mark,$ct_4_mark);
sort($numbers);
$total_marks=$numbers[3]+$numbers[2]+$numbers[1];
$avg=$total_marks/3;
// echo "<br>";
// echo "$total_marks";
// echo "<br>";
// echo "$avg";
$query2="UPDATE $course_id set avg='$avg' WHERE st_id='$st_id'";
$send2=mysqli_query($connection,$query2);

}


//echo "$course_id ' ' $ct_no ' ' $st_id ' ' $marks ' '";


$_SESSION['course_id']=$course_id;
$_SESSION['ct_no']=$ct_no;
header("Location:action_assign_ct.php");

 ?>
