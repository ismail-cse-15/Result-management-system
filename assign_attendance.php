<?php
require_once("config.php");
session_start();



$dept=$_SESSION['dept'];
$id=$_SESSION['id'];
$name=$_SESSION['name'];


$query1="SELECT DISTINCT(course_assignment.course_id),
course_assignment.series,course_assignment.section,
course_assignment.teacher_name ,course_assignment.dept
FROM course_assignment,batch WHERE
course_assignment.teacher_id LIKE
'%$id%' AND batch.state='Running'
 ORDER by course_assignment.series ";
$send1=mysqli_query($connection,$query1);


$_SESSION['dept']=$dept;
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

                   <li ><a href="logout.php">
                     <span class="glyphicon glyphicon-log-out"></span>
                     Logout</a></li>

</ul>
</div>
                  </nav>
</div>

<h2  class="text-primary">  <center > <strong>For attendance</strong></center></h2>
<div  class="container  table-responsive col-sm-6" >
  <h2><center>
    Courses you should be taken</center>
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

<center>
<div class="container col-sm-6 ">

 <h2 >  <center> </center></h2>
    <form  action="action_assign_attendance.php" method="post">



<div class="form-group">
  <label for="series">For which series</label>
  <input type="number" placeholder="Enter series"
  class="form-control" name="series" value="">
<!-- <select class="form-control" name="series">
  <?php
  $query1="SELECT DISTINCT(course_assignment.course_id),
  course_assignment.series,course_assignment.section,
  course_assignment.teacher_name ,course_assignment.dept
  FROM course_assignment,batch WHERE
  course_assignment.teacher_name LIKE
  '%$name%' AND batch.state='Running'
  AND course_assignment.dept='$dept' group by course_assignment.course_id ";
  $send1=mysqli_query($connection,$query1);
  while ($row1=mysqli_fetch_array($send1)){
    echo "<option>$row1[series]</option>";
  }
   ?>
   </select> -->

</div>
    <div class="form-group" >
      <label  for="series">For which course</label>
      <input type="text" class="form-control" placeholder="Enter course id format like CSE_**** " name="course_id" value="">
      <!-- <select class="form-control" name="course_id">
        <?php
        $query1="SELECT DISTINCT(course_assignment.course_id),
        course_assignment.series,course_assignment.section,
        course_assignment.teacher_name ,course_assignment.dept
        FROM course_assignment,batch WHERE
        course_assignment.teacher_name LIKE
        '%$name%' AND batch.state='Running'
        AND course_assignment.dept='$dept' group by course_assignment.course_id ";
        $send1=mysqli_query($connection,$query1);
        while ($row1=mysqli_fetch_array($send1)){
          echo "<option>$row1[course_id]</option>";
        }
         ?>
      </select> -->
    </div>


    <div class="form-group">
      <label  for="section">For which section</label>
      <input type="text" class="form-control"
      placeholder="Format : A/B.."
      name="section" value="" required>
      <!-- <select class="form-control" name="section">
        <option>A
        </option>
        <option>B
        </option>
        <option>C
        </option>
      </select> -->
    </div>


      <div class="">
        <button type="submit" style="float:right;"
        class="btn btn-success btn-lg"
        name="submit1">Submit</button>
        <a class="btn btn-danger btn-lg " style="float:left;"
        href="profile.php">Cancel</a>
      </div>

    </form>
  </div>
  </center>

  <div class="container col-sm-3">

  </div>



     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
