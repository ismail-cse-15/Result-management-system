<?php

require_once("config.php");
session_start();


$currentt_password=$_POST['currentt_password'];
$new_password=$_POST['new_password'];
$confirm_password=$_POST['confirm_password'];
//echo "$confirm_password";

$user_id=$_SESSION['user_id'];
$email=$_SESSION['email'];
echo "<br>";
echo "$user_id";
if($new_password==$confirm_password)
{
  $new_password=base64_encode($new_password);
$update_query="UPDATE user
set password='$new_password'
WHERE user_id='$user_id' AND email='$email'";
$send_query=mysqli_query($connection,$update_query);

header("Location:profile.php");

}
else if($new_password!=$confirm_password){
    header("Location:change_password.php?change=fail");
}
 ?>
