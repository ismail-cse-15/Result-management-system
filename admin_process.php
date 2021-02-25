<?php
require_once("config.php");
$admin_name=$_POST['admin_name'];
$password=$_POST['password'];
$query="select * from admin where admin_name='$admin_name' and password='$password'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);
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

if($admin_name==$row['admin_name'] and $password==$row['password'])
{

session_start();
$_SESSION['admin_name']=$admin_name;
$_SESSION['password']=$password;
header("Location:admin_p.php?login=success");
}
else {

  header("Location:admin_login.php?attempt=fail");
}
      ?>

          <script
          src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
          </script>
       <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
