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
    .nav1{
      position: fixed;
      top: 0;
      background-color: black;
    }
    </style> -->
  </head>
  <body>
    <nav class="navbar navbar-inverse">

   <div class="container">
        <ul class="nav nav-pills nav-justified">
          <li><a href="main.php">Student result management</a>
          </li>
          <!-- <li ><a href="home.php">Home</a>
          </li> -->
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
            Login</a></li>

          <li class="dropdown active nav"><a class="dropdown-toggle" data-toggle="dropdown"
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
      <h2>Sign up</h2>
    </div> -->
    <div class="container col-sm-12">
      <img src="image/images.png" alt="signup_logo"
      class="img img-circle"style="width:20%">
    </div>
    <!-- <?php
 if(isset($_GET['exist']))
 {
   echo '  <div class="alert alert-danger alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>This id already exist</strong>
   </div>';
 }
 else {
   echo '<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Login successfully</strong>
</div>';
 }
     ?> -->
      <form  action="action.php" method="post">


      <div class="form-group">
       <label for="st_name">Name</label>
       <input type="text" class="form-control"
       name="st_name" placeholder="Enter user name" value="" required>
     </div>


<div class="form-group">
  <label for="roll_no">Roll no</label>
  <input type="text" class="form-control"
  name="roll_no" placeholder="Enter roll no" value="" required>
</div>

<div class="form-group">
  <label for="sesson">series</label>
  <input type="text" class="form-control"
  name="sesson" placeholder="Enter sesson" value="" required>
</div>


<div class="form-group select">
  <label for="sel1">Department</label>
  <select class="form-control " id="sel1" name="dept">


    <option class="select">Architecture</option>
    <option>BCME</option>
    <option>CE</option>
    <option>CSE</option>
    <option>CFPE</option>
    <option>ECE</option>
    <option>EEE</option>
    <option>ETE</option>
    <option>GCE</option>
    <option>ME</option>
    <option>MSE</option>
    <option>MTE</option>
    <option>IPE</option>
    <option>URP</option>

  </select>
  </div>
<div class="form-group">
  <label for="semester">Semester</label>
  <input type="number" class="form-control"
  name="semester" placeholder="Enter semester no"
  value="" min="1" max="8" required>
</div>

  <div class="form-group">
    <label for="section">Section</label>
    <select class="form-control" name="section">
      <option>A</option>
      <option>B</option>
      <option>C</option>

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



           <button type="submit" name="b2"
           class=" btn btn-success btn-lg btn-block"> Sign Up
           </button>

           <div class="alert alert-success form-group">
             <strong>Already a member?</strong>
        <a href="login.php">Login</a>

           </div>
    </form>

  </div>

    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
 <script src="js/bootstrap.min.js"></script>
  </body>
</html>
