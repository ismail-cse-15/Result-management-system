<?php


require_once("config.php");
session_start();
$dept=$_SESSION['dept'];


 ?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- <link rel="stylesheet" type="text/css" href="department.css"> -->
      <style media="screen">
        .div{
          background-position: center;
          border: 1px solid green;

        }
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
        .navbar_fixed{
          top: 0;
          position:0pt;
        }
      </style>

   </head>
   <body>

    <!-- <form class="pdf.php"  method="post"> -->
       <div class="container-fluid " id="navbar1">
         <nav class="navbar navbar-inverse">
              <div class="container">
                   <ul class="nav navbar_fixed nav-pills nav-justified">
                     <!-- <li ><a href="home.php">Home</a>
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

  <div class="container  table-responsive">
    <?php
    $query1="SELECT  batch.batch_no,batch.current_semester
    FROM batch
    WHERE batch.state='Running'";
    $send1=mysqli_query($connection,$query1);
    while ($row1=mysqli_fetch_array($send1)){

    echo '<table class="table table-bordered   table-hover table-striped" >
    <tr class="success tr">
    <th>ROll no</th>
    <th>Student name</th>
    <th>Section</th>
    <th>Series</th>

    <th>Department</th>

    </tr >';

    $query2="SELECT students.roll_no,students.st_name,
    students.session,students.section,students.dept
    FROM students,batch
    WHERE students.session=batch.batch_no
    AND batch.state='Running'
    AND students.dept='$dept'
    AND students.session='$row1[batch_no]'";
    $send2=mysqli_query($connection,$query2);
    if($send2){
      echo "<center> <strong>";
      echo "Students of $row1[batch_no] series";
      echo "</strong> </center>";
    }
    while ($row2=mysqli_fetch_array($send2)) {
      echo " <tr>
         <td>$row2[roll_no]
         </td>
         <td>$row2[st_name]
         </td>
         <td>$row2[section]
         </td>
         <td>$row2[session]
         </td>

         <td>$row2[dept]
         </td>
       </tr>";
    }
    echo '</table>';


    }

     ?>

  </div>
     <!-- </form> -->

<br>

 <a href="profile.php"
 class="btn btn-danger btn-lg left" >Previous</a>
 <a href="teacher_course.php"
 class="btn btn-success btn-lg right" >Next</a>







     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
