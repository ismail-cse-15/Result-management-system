<?php


require_once("config.php");
session_start();
$dept=$_SESSION['dept'];
$id=$_SESSION['user_id'];
$name=$_SESSION['name'];
// echo "$id";

$query1="SELECT DISTINCT(course_assignment.course_id),
course_assignment.series,course_assignment.section,
course_assignment.teacher_name ,course_assignment.dept
FROM course_assignment,batch WHERE
course_assignment.teacher_id LIKE
'%$id%' AND batch.state='Running'
 ORDER by course_assignment.series";
$send1=mysqli_query($connection,$query1);


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
<div  class="container  table-responsive " >
  <h2 ><center>
    Course you should be taken</center>
  </h2>
<table class="table table-bordered   table-hover table-striped" >
<tr class="success tr">
<th>Course No</th>
<th>Series</th>
<th>Section</th>
<th>Department</th>
</tr >
<?php
while ($row1=mysqli_fetch_array($send1))
{
echo "<tr>
<td>$row1[course_id]</td>
<td>$row1[series]</td>
<td>$row1[section]</td>
<td>$row1[dept]</td>
</tr>";
}
?>
</table>
</div>
<a href="student.php"
class="btn btn-danger btn-lg left" >Previous</a>
<!-- <a href="teacher_course.php"
class="btn btn-success btn-lg right" >Next</a> -->



     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
