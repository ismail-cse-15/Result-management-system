<?php

require_once("config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$password=base64_encode($password);
$query="select * from user where email='$email' and password='$password'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);
$name=$row['user_name'];
$type_of_user=$row['type_of_user'];
$user_id=$row['user_id'];

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <title></title>
   </head>
   <body>
<?php
if($email==$row['email'] and $password==$row['password'])
{

  session_start();
  $_SESSION['type_of_user']=$type_of_user;
  $_SESSION['email']=$email;
  $_SESSION['Password']=$password;
  $_SESSION['user_name']=$name;
  $_SESSION['user_id']=$user_id;



  header("Location:profile.php?enter=success");
}
else {

header("Location:login.php?value=fail");

}
 ?>

     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
