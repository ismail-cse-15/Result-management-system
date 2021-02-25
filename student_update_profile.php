<?php

require_once("config.php");
session_start();

$st_name=$_POST['st_name'];
$email=$_POST['email'];
$semester=$_POST['semester'];


if($_FILES['st_pp']['name'])
  {

    $file=$_FILES['st_pp']['name'];
    $path="student_profile_picture/".$file;
    $tmp=$_FILES['st_pp']['tmp_name'];
    move_uploaded_file($tmp, $path);
  }

  $roll_no=$_SESSION['roll_no'];


  $query1="UPDATE students Set
  st_name='$st_name' , semester='$semester' ,pp='$path'
  WHERE roll_no='$roll_no' ";
  $query2="UPDATE user
  set user_name='$st_name',email='$email'
  WHERE user_id='$roll_no'";

  $send1=mysqli_query($connection,$query1);
  $send2=mysqli_query($connection,$query2);

$_SESSION['roll_no']=$roll_no;




header('Location:profile.php');




?>
