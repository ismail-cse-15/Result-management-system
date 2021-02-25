<?php
require_once("config.php");
session_start();

  // //$dept=$_SESSION['dept'];
  // if(isset($_GET['course'])){
  //   $series=$_SESSION['series'];
  //   $section=$_SESSION['section'];
  //   $semester=$_SESSION['semester'];
  //   $dept=$_SESSION['dept'];
  //
  //
  //
  //   $query="SELECT * FROM batch WHERE batch_no='$series'";
  //   $send=mysqli_query($connection,$query);
  //   $row=mysqli_fetch_array($send);
  //   $current_semester=$row['current_semester'];
  //   if($semester!=$current_semester)
  //   {
  //     header("Location:profile.php?message=wrong");
  //   }
  //   else if($semester==$current_semester)
  //   {
  //     $query1="SELECT courses.course_id
  //      FROM courses,department
  //     WHERE courses.dept_id=department.dept_id AND
  //     department.dept_name='$dept' AND courses.semester='$semester'";
  //     $send1=mysqli_query($connection,$query1);
  //     $query2="SELECT teacher.teacher_name
  //     FROM teacher WHERE dept='$dept'";
  //     $send2=mysqli_query($connection,$query2);
  //
  //   $_SESSION['series']=$series;
  //   $_SESSION['section']=$section;
  //   $_SESSION['semester']=$current_semester;
  //   }
  // }
  // elseif (isset($_POST['b'])) {
  //   $series=$_POST['series'];
  //   $section=$_POST['section'];
  //   $semester=$_POST['current_semester'];
  //   $dept=$_SESSION['dept'];
  //
  //
  //   $query="SELECT * FROM batch WHERE batch_no='$series'";
  //   $send=mysqli_query($connection,$query);
  //   $row=mysqli_fetch_array($send);
  //   $current_semester=$row['current_semester'];
  //   if($semester!=$current_semester)
  //   {
  //     header("Location:profile.php?message=wrong");
  //   }
  //   else if($semester==$current_semester)
  //   {
  //     $query1="SELECT courses.course_id
  //      FROM courses,department
  //     WHERE courses.dept_id=department.dept_id AND
  //     department.dept_name='$dept' AND courses.semester='$semester'";
  //     $send1=mysqli_query($connection,$query1);
  //     $query2="SELECT teacher.teacher_name
  //     FROM teacher WHERE dept='$dept'";
  //     $send2=mysqli_query($connection,$query2);
  //
  //   $_SESSION['series']=$series;
  //   $_SESSION['section']=$section;
  //   $_SESSION['semester']=$current_semester;
  //   }
  // }



  $series=$_POST['series'];
  $section=$_POST['section'];
  $semester=$_POST['current_semester'];
  $dept=$_SESSION['dept'];


  $query="SELECT * FROM batch WHERE batch_no='$series'";
  $send=mysqli_query($connection,$query);
  $row=mysqli_fetch_array($send);
  $current_semester=$row['current_semester'];
  if($semester!=$current_semester)
  {
    header("Location:profile.php?message=wrong");
  }
  else if($semester==$current_semester)
  {
    $query1="SELECT courses.course_id
     FROM courses,department
    WHERE courses.dept_id=department.dept_id AND
    department.dept_name='$dept' AND courses.semester='$semester'";
    $send1=mysqli_query($connection,$query1);
    $query2="SELECT teacher.teacher_name
    FROM teacher WHERE dept='$dept'";
    $send2=mysqli_query($connection,$query2);

  $_SESSION['series']=$series;
  $_SESSION['section']=$section;
  $_SESSION['semester']=$current_semester;
  }





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



        /* border: 1px solid black; */
           border: 1px solid green;
        font-family: sans-serif;
      float: left;
      weidth:720px;
      background-color: lightgrey;

      padding: 30px;
      margin: 25px;

      }

      </style>
</head>
   <body>
     <div class="container-fluid">
       <nav class="navbar navbar-inverse">
            <div class="container">
                 <ul class="nav nav-pills nav-justified">
                   <li ><a href="home.php">Home</a>
                   </li>

               <li><a href="profile.php">Profile</a>
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



<div class="container col-sm-12">



  <?php
  $query5="SELECT * FROM
  teacher ORDER BY teacher.dept,teacher.teacher_id";
  $send5=mysqli_query($connection,$query5);

   ?>

    <center><h3>Teacher table  </h3></center>
   <table class="table table-bordered   table-hover table-striped" >
   <tr class="success tr">
   <th>Teacher id</th>
   <th>Name</th>
    <th>Designation</th>
   <th>Department</th>

   </tr >
   <?php
   while ($row5=mysqli_fetch_array($send5))
   {
   echo "<tr>
   <td>$row5[teacher_id]</td>
   <td>$row5[teacher_name]</td>
   <td>$row5[designation]</td>

   <td>$row5[dept]</td>

   </tr>";
   }
   ?>
   </table>
</div>


<div class="container div col-sm-6">
  <h3>Courses assignment table for <?php echo "$series";  ?>
    series  <?php echo "$semester"; ?> semester</h3>
<?php
$query4="SELECT course_id,teacher_name,series,section,section,dept
 FROM course_assignment
WHERE   course_assignment.series='$series'
AND course_assignment.semester='$current_semester'
ORDER BY course_assignment.section , course_assignment.course_id";
$send4=mysqli_query($connection,$query4);

 ?>
 <table class="table table-bordered   table-hover table-striped" >
 <tr class="success tr">
 <th>Course id</th>
 <th>Teacher name</th>
  <th>Series</th>
 <th>Section</th>
  <th>Department</th>

 </tr >
 <?php
 while ($row4=mysqli_fetch_array($send4))
 {
 echo "<tr>
 <td>$row4[course_id]</td>
 <td>$row4[teacher_name]</td>
 <td>$row4[series]</td>
 <td>$row4[section]</td>
 <td>$row4[dept]</td>

 </tr>";
 }
 ?>
 </table>
</div>

<div class=" div container col-sm-4">
  <h2><center>Fill the form for <?php echo "$section"; ?> section</center>
  </h2>
  <form class="" action="action_assign_course.php" method="post">

    <div class="form-group">
      <label for="course_id">Course id</label>
      <select class="form-control" name="course_id">

      <?php
        $query1="SELECT courses.course_id
         FROM courses,department
        WHERE courses.dept_id=department.dept_id AND
        department.dept_name='$dept' AND courses.semester='$semester'";
        $send1=mysqli_query($connection,$query1);
        while ($row1=mysqli_fetch_array(  $send1))

     {
  echo "<option>$row1[course_id]</option>";

     }


         ?>
      </select>

    </div>


    <div class="form-group">
      <label for="course_id">Teacher Id</label>
      <input type="text" name="teacher_id"
      class="form-control" value=""required>
      <?php
      echo "*Choose teacher id from Teacher table";
       ?>
      <!-- <select class="form-control" name="teacher_name">

      <?php
      $query2="SELECT teacher.teacher_name
      FROM teacher WHERE dept='$dept'";
      $send2=mysqli_query($connection,$query2);

        while ($row2=mysqli_fetch_array($send2))
        {
          echo "<option>$row2[teacher_name]</option>";
        }


         ?>
      </select> -->

    </div>
    <div class="">
      <button type="submit" style="float:right;" name="button"
      class="btn btn-info btn-lg">Submit</button>


      <button type="submit" name="button"
      class="btn btn-danger btn-lg" style="float:left;"><a href="profile.php"></a>
      Cancel</button>
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
