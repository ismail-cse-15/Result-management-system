<?php


require_once("config.php");
session_start();

if (isset($_POST['submit1'])) {
  $dept=$_SESSION['dept'];
  $series=$_POST['series'];
  $course_id=$_POST['course_id'];
  $section=$_POST['section'];


$_SESSION['course_id']=$course_id;


}
else {
  // $ct_no=$_SESSION['ct_no'];
  $course_id=$_SESSION['course_id'];
}
 ?>

<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="department.css">

    </head>
    <body>
      <div class="container-fluid">
        <nav class="navbar navbar-inverse">
             <div class="container">
                  <ul class="nav nav-pills nav-justified">
                    <!-- <li class=""><a href="home.php">Home</a>
                    </li> -->

                <li ><a href="profile.php">Profile</a>
                </li>

<li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown"
                                href="signup.php">Department
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                 <li><a href="architecture.php">Architecture</a>
                                 </li>
                                <li><a href="bcme.php">BCME</a></a>
                                 </li>
                                <li><a href="ce.php">CE</a>
                                         </li>

                                <li><a href="cse.php">CSE</a>
                                          </li>
                              <li><a href="cfpe.php">CFPE</a>
                                            </li>
                          <li><a href="ece.php">ECE</a>
                                      </li>
                         <li><a href="eee.php">EEE</a>
                                      </li>
                      <li><a href="ete.php">ETE</a>
                                    </li>
                          <li><a href="gce.php">GCE</a>
                                    </li>
                          <li><a href="ipe.php">IPE</a>
                                      </li>
                          <li><a href="me.php">ME</a>
                                </li>
                                <li><a href="mse.php">MSE</a>
                            </li>
                    <li><a href="mte.php">MTE</a>
                              </li>
                      <li><a href="urp.php">URP</a>
                      </li>


                                </ul>
                </li>

                    <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>
                      Logout</a></li>






                  </ul>
                </div>
                   </nav>
</div>
<div class="container col-sm-3">

</div>
<div class="container col-sm-6">
  <h2 class="text-primary">  <center > <strong>For attendance
  </strong></center></h2>
<form class="" action="action_assign_attendance1.php" method="post">
  <center>
    <?php
    if(isset($_GET['assign']))
    {
    echo ' <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Marks store successfully</strong>
      </div>';

    }

    if(isset($_GET['not_assign']))
    {
    echo ' <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Marks does not successfully</strong>
      </div>';

    }
     ?>
  <div class="form-group">
    <label for="st_id">Student Id</label>
    <input type="number" class="form-control"
    name="st_id" value="" required>

    </div>
    <div class="form-group">
      <label for="at_marks">Marks</label>
      <input type="number" class="form-control"
      name="at_marks" min="0" max="8"
      placeholder="Mark in range 0 to 8" value="" required>

      </div>
    <div class="">
      <button type="submit" class="btn btn-success btn-lg"
    style="float:right;"  name="">Submit</button>
      <a class="btn btn-danger btn-lg " style="float:left;"
      href="profile.php">Cancel</a>
    </div>
  </center>
</form>
</div>

<div class="container col-sm-3">

</div>





      <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
      </script>
   <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
