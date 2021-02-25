<?php
require_once("config.php");

session_start();
// if(isset($_SESSION['password']))
// {
//   header("Location:home.php");
// }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="signup.css">
     <title></title>
   </head>
   <body>
     <nav class="navbar navbar-inverse">

    <div class="container ">
         <ul class="nav nav-pills nav-justified">
           <li><a href="main.php">Student result management</a>
           </li>

           <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
             Login</a></li>

           <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown"
       href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up
   <span class="caret"></span>
           </a>
          <ul class="dropdown-menu">
            <li><a href="signup_head.php">Department Head</a></a>
             </li>
            <li><a href="signup_teacher.php">Teacher</a>
            </li>
           <li><a href="signup_student.php">Student</a></a>
            </li>

          </ul>
           </li>
         </ul>
       </div>
   </nav>

   <div class="container col-sm-4">

   </div>
<div class="container div col-sm-4">

  <div class="container  col-sm-12">
    <img src="image/download.png" alt="login_logo"
    class="img img-circle"style="width:20%">
  </div>
<form class="" action="admin_process.php" method="post">
  <?php
  if(isset($_GET['attempt']))
  {
  echo ' <div class="alert alert-warning alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Incorrect name or password</strong>
    </div>';

  }
   ?>

<div class="form-group">
  <label for="">Name</label>
    <input type="text" name="admin_name" class="form-control" placeholder="Enter your name" value=""required>
</div>
<div class="form-group">
  <label for="">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Enter password" value=""required>
</div>
<button type="submit" name="b3"
class=" btn btn-success btn-lg btn-block">Login
</button>



</form>

</div>

<div class="container col-sm-4">

</div>



     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
 <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
