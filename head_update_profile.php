<?php

require_once("config.php");
session_start();


$email=$_POST['email'];
$designation=$_POST['designation'];
$head_id=$_SESSION['head_id'];


if($_FILES['t_pp']['name'])
  {

    $file=$_FILES['t_pp']['name'];
    $path="student_profile_picture/".$file;
    $tmp=$_FILES['t_pp']['tmp_name'];
    move_uploaded_file($tmp, $path);
  }

  $query1="UPDATE teacher Set
  designation='$designation' ,pp='$path'
  WHERE teacher_id='$head_id' ";
$send1=mysqli_query($connection,$query1);


$query2="UPDATE user
set email='$email'
WHERE user_id='$head_id'";
$send2=mysqli_query($connection,$query2);


$query3="UPDATE head
set designation='$designation'
WHERE head_id='$head_id'";
$send2=mysqli_query($connection,$query3);

header('Location:profile.php');








?>
