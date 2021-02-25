<?php
require_once("config.php");
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

    <div class="container">
         <ul class="nav nav-pills nav-justified">
           <li ><a href="main.php">Student result management</a>
           </li>
           <!-- <li ><a href="home.php">Home</a>
           </li> -->
           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
             Login</a></li>

           <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown"
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

                <script
                src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
                </script>
            <script src="js/bootstrap.min.js"></script>

   </body>
 </html>
