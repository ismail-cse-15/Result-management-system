<?php

require_once("config.php");
session_start();

  $dept=$_SESSION['dept'];
  $series=$_SESSION['series'];
  $section=$_SESSION['section'];
  $current_semester=$_SESSION['semester'];

  $course_id=$_POST['course_id'];
  $teacher_id=$_POST['teacher_id'];
  $query1="SELECT * FROM teacher WHERE teacher_id='$teacher_id'";
  $send1=mysqli_query($connection,$query1);
  $row=mysqli_fetch_array($send1);
  $teacher_name=$row['teacher_name'];
  $query="insert into 	course_assignment	VALUES
  ('$course_id','  $teacher_id','$teacher_name','$series',
  '$section','$dept','$current_semester')";
  $send=mysqli_query($connection,$query);


  $_SESSION['dept']=$dept;
  $_SESSION['series']=$series;
  $_SESSION['section']=$section;
  $_SESSION['semester']=$current_semester;

  header("Location:profile.php?course=assign");


//echo "$teacher_name";




 ?>



  <!DOCTYPE html>
 <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="department.css">
       <style media="screen">
       .left{
         bottom: 0pt;
         left: 0pt;
         margin:5px;
         position:fixed;
       }
       .right{
         bottom: 0pt;
         right: 0pt;
         margin:5px;
         position:fixed;
       }
       </style>
    </head>
    <body>
      <div class="container-fluid">
        <nav class="navbar navbar-inverse">
             <div class="container">
                  <ul class="nav nav-pills nav-justified">
                    <!-- <li ><a href="home.php">Home</a>
                    </li> -->

                <li ><a href="profile.php">Profile</a>
                </li>

                <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown"
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






      <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
      </script>
   <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
