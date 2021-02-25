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
    <!-- <style>
    .nav{
      position: fixed;
      top: 0;
      background-color: black;
    }
    </style> -->
  </head>
  <body >
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
 <div class="container col-sm-4">

 </div>

<div class="container div col-sm-4" >


  <!-- <div class="h text-center">
    <h2 class="">Sign up</h2>
  </div> -->
  <div class="container col-sm-12">
    <img src="image/images.png" alt="signup_logo"
    class="img img-circle"style="width:20%">
  </div>
  <form  action="action.php" method="post">


  <div class="form-group">
   <label for="teacher_name">Name</label>
   <input type="text" class="form-control"
   name="teacher_name" placeholder="Enter your name" value="" required>
 </div>
 <div class="form-group">
   <label for="teacher_id">Id</label>
   <input type="text" class="form-control"
   name="teacher_id" placeholder="Enter your id" value="" required>
 </div>

<div class="form-group">
  <label for="designation">Designation</label>
  <select class="form-control" name="designation">
    <option>Professor</option>
    <option>Associate Professor</option>
    <option>Assistant Professor</option>
    <option>Lecturer</option>

  </select>
</div>

 <div class="form-group">
   <label for="sel1">Department</label>
   <select class="form-control" id="sel1" name="dept">


     <option>Architecture</option>
     <option>BCME</option>
    <option>Chemistry</option>
     <option>CE</option>
     <option>CSE</option>
     <option>CFPE</option>
     <option>ECE</option>
     <option>EEE</option>
     <option>ETE</option>
     <option>GCE</option>
     <option>HUM</option>
     <option>IPE</option>
     <option>Math</option>
     <option>ME</option>
     <option>MSE</option>
     <option>MTE</option>
     <option>Physics</option>
     <option>URP</option>
   </select>
   </div>

  <div class="form-group">
<label for="email">Email</label>
<input type="email" name="email"
class="form-control" placeholder="Enter email" value="" required>
  </div>

  <div class="form-group">
   <label for="password">Password</label>
    <input  type="password"
    class="form-control" name="password" placeholder="Enter password"
    value="" required>
  </div>



       <button type="submit" name="b1"
       class=" btn btn-success btn-lg btn-block"> Sign Up
       </button>

       <div class="alert alert-success form-group">
         <strong>Already a member?</strong>
    <a href="login.php">Login</a>

       </div>
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
