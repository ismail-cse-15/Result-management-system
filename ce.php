<?php
require_once("config.php");
$dept='CE';
$teacher_ce="SELECT * FROM teacher WHERE dept='$dept'";
$send_teacher_ce=mysqli_query($connection,$teacher_ce);

$query_ce1="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='1'
AND department.dept_name='$dept'";
$send_ce1=mysqli_query($connection,$query_ce1);

$query_ce2="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='2'
AND department.dept_name='$dept'";
$send_ce2=mysqli_query($connection,$query_ce2);

$query_ce3="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='3'
AND department.dept_name='$dept'";
$send_ce3=mysqli_query($connection,$query_ce3);

$query_ce4="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='4'
AND department.dept_name='$dept'";
$send_ce4=mysqli_query($connection,$query_ce4);

$query_ce5="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='5'
AND department.dept_name='$dept'";
$send_ce5=mysqli_query($connection,$query_ce5);

$query_ce6="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='6'
AND department.dept_name='$dept'";
$send_ce6=mysqli_query($connection,$query_ce6);


$query_ce7="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='5'
AND department.dept_name='$dept'";
$send_ce7=mysqli_query($connection,$query_ce7);

$query_ce8="SELECT course_id , course_title , credit
FROM courses,department
where  courses.dept_id=department.dept_id
AND courses.semester='6'
AND department.dept_name='$dept'";
$send_ce8=mysqli_query($connection,$query_ce8);
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





<div  class="container div1 col-sm-3">


       <ul class=" list-group">

           <li class="li list-group-item "><center>
                 <a  class=" a btn btn-warning btn-lg "
                 data-toggle="collapse" data-target="#fm">Teacher</a>
           </center></li>



         <h2 ><center>Course</center></h2>


           <li class="li list-group-item"><center>
                 <a  class=" a btn btn-success btn-lg"
                 data-toggle="collapse" data-target="#t31">1st semester</a>
           </center></li>



         <li class="li list-group-item"><center>
           <a class="  a btn btn-danger btn-lg "
           data-toggle="collapse" data-target="#t32">2nd semester</a>
        </center> </li>


       <li class="li list-group-item"><center>
         <a class=" a btn btn-info btn-lg"
         data-toggle="collapse" data-target="#t33">3rd semester</a>
       </center></li>


       <li class="li list-group-item"><center>
         <a class=" a btn btn-warning btn-lg"
         data-toggle="collapse" data-target="#t34">4th semester</a>
       </center></li>


         <li class="li list-group-item"><center>
           <a class="  a btn btn-success btn-lg"
           data-toggle="collapse" data-target="#t35">5th semester</a>
         </center></li>

         <li class="li list-group-item"><center>
           <a class="  a btn btn-danger btn-lg"
           data-toggle="collapse" data-target="#t36">6th semester</a>
         <center></li>


       <li class="li list-group-item"><center>
         <a class="  a btn btn-info btn-lg"
         data-toggle="collapse" data-target="#t37">7th semester</a>
       </center></li>


     <li class="li list-group-item"><center>
       <a class="  a btn btn-warning btn-lg"
       data-toggle="collapse" data-target="#t38">8th semester</a>
    </center> </li>



       </ul>
</div>








         <div id="t31" class="table-responsive collapse" >
           <h2 ><center>Course of 1st semester</center></h2>
         <table class="table table-bordered   table-hover table-striped" >
         <tr class="success tr">
         <th>Course No</th>
         <th>Course title</th>
         <th>Credit</th>
         </tr >
         <?php
         while ($row_ce1=mysqli_fetch_array($send_ce1))
         {
         echo "<tr>
         <td>$row_ce1[course_id]</td>
         <td>$row_ce1[course_title]</td>
         <td>$row_ce1[credit]</td>
         </tr>";
         }
         ?>
         </table>
         </div>




     <div id="t32" class="table-responsive collapse">
             <h2 ><center>Course of 2nd semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr>
     <?php
     while ($row_ce2=mysqli_fetch_array($send_ce2))
     {
     echo "<tr>
     <td>$row_ce2[course_id]</td>
     <td>$row_ce2[course_title]</td>
     <td>$row_ce2[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>


     <div id="t33" class="table-responsive collapse">
             <h2 ><center>Course of 3rd semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr >
     <?php
     while ($row_ce3=mysqli_fetch_array($send_ce3))
     {
     echo "<tr>
     <td>$row_ce3[course_id]</td>
     <td>$row_ce3[course_title]</td>
     <td>$row_ce3[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>

     <div id="t34" class="table-responsive collapse">
             <h2 ><center>Course of 4th semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr >
     <?php
     while ($row_ce4=mysqli_fetch_array($send_ce4))
     {
     echo "<tr>
     <td>$row_ce4[course_id]</td>
     <td>$row_ce4[course_title]</td>
     <td>$row_ce4[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>

     <div id="t35" class="table-responsive collapse">
             <h2 ><center>Course of 5th semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr >
     <?php
     while ($row_ce5=mysqli_fetch_array($send_ce5))
     {
     echo "<tr>
     <td>$row_ce5[course_id]</td>
     <td>$row_ce5[course_title]</td>
     <td>$row_ce5[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>

     <div id="t36" class="table-responsive collapse">
             <h2><center>Course of 6th semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr >
     <?php
     while ($row_ce6=mysqli_fetch_array($send_ce6))
     {
     echo "<tr>
     <td>$row_ce6[course_id]</td>
     <td>$row_ce6[course_title]</td>
     <td>$row_ce6[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>

     <div id="t37" class="table-responsive collapse">
             <h2 ><center>Course of 7th semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr >
     <?php
     while ($row_ce7=mysqli_fetch_array($send_ce7))
     {
     echo "<tr>
     <td>$row_ce7[course_id]</td>
     <td>$row_ce7[course_title]</td>
     <td>$row_ce7[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>


     <div id="t38" class="table-responsive collapse">
             <h2 ><center>Course of 8th semester</center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Course No</th>
     <th>Course title</th>
     <th>Credit</th>
     </tr >
     <?php
     while ($row_ce8=mysqli_fetch_array($send_ce8))
     {
     echo "<tr>
     <td>$row_ce8[course_id]</td>
     <td>$row_ce8[course_title]</td>
     <td>$row_ce8[credit]</td>
     </tr>";
     }
     ?>
     </table>
     </div>








     <div id="fm" class="table-responsive collapse">
             <h2 ><center>Faculty members of <?php echo "$dept" ?></center></h2>
     <table class="table table-bordered   table-hover table-striped">
     <tr class="success tr">
     <th>Teacher name</th>
     <th>Designation</th>

     </tr >
     <?php
     while ($row_teacher_ce=mysqli_fetch_array($send_teacher_ce))
     {
     echo "<tr>
     <td>$row_teacher_ce[teacher_name]</td>
     <td>$row_teacher_ce[designation]</td>
     </tr>";
     }
     ?>
     </table>
     </div>
     <a href="bcme.php"
     class="btn btn-danger btn-lg left" >Previous</a>
     <a href="cfpe.php"
     class="btn btn-success btn-lg right" >Next</a>
     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
