<?php

require_once("config.php");

session_start();

if(!isset($_SESSION['email']))
{
  header("Location:login.php");
}
else {
  $name=$_SESSION['user_name'];
  $type_of_user=$_SESSION['type_of_user'];
  $email=$_SESSION['email'];
 $password=$_SESSION['Password'];
 $user_id=$_SESSION['user_id'];

$_SESSION['user_id']=$user_id;
 $_SESSION['password']=$password;
 $_SESSION['email']=$email;
 $_SESSION['type_of_user']=$type_of_user;
 $_SESSION['st_name']=$name;



if($type_of_user=="Teacher")
{
  $query="select * from teacher where teacher_id='$user_id'";
  $send=mysqli_query($connection,$query);
  $row=mysqli_fetch_array($send);
  $designation=$row['designation'];
  $dept=$row['dept'];
  $pp=$row['pp'];
  $teacher_id=$row['teacher_id'];

  $_SESSION['pp']=$pp;
  $_SESSION['teacher_id']=$teacher_id;
  $_SESSION['dept']=$dept;
  $_SESSION['designation']=$designation;

}
else if($type_of_user=="Deparment Head")
{
  $query="select * from teacher where teacher_id='$user_id'";
  $send=mysqli_query($connection,$query);
  $row=mysqli_fetch_array($send);
  $designation=$row['designation'];
  $dept=$row['dept'];
  $pp=$row['pp'];
  $teacher_id=$row['teacher_id'];

$_SESSION['dept']=$dept;
$_SESSION['head_id']=$teacher_id;
  $_SESSION['pp']=$pp;
  $_SESSION['designation']=$designation;
  $_SESSION['user_name']=$name;

}
else if($type_of_user=="Student"){
  $query="select * from students where roll_no='$user_id'";
  $send=mysqli_query($connection,$query);
  $row=mysqli_fetch_array($send);
  $roll_no=$row['roll_no'];
  $dept=$row['dept'];
  $session=$row['session'];
  $semester=$row['semester'];
  $section=$row['section'];
  $pp=$row['pp'];

  $_SESSION['pp']=$pp;
  $_SESSION['semester']=$semester;
  $_SESSION['roll_no']=$roll_no;
  $_SESSION['dept']=$dept;

}
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="profile_style.css"> -->



<style media="screen">
/* Set a style for all buttons */
/* button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
} */



button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
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
.img {
    border-radius: 90%;
    width="100px";
    height="200px"
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

            <li class="active"><a href="profile.php">Profile</a>
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

               <?php
               if(isset($_GET['enter']))
               echo '<div class="alert alert-success alert-dismissible">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>successfully login</strong>
               </div>';
                ?>


                <div class=" div container col-sm-4" >

             <img class="img col-sm-12" src="<?php echo "$pp"; ?>" alt="pp">


                  <?php
                  if($type_of_user=="Teacher")
                  {


                    echo "<br>";
                    echo "$name";
                    echo "<br>";
                    echo "Email Address: $email";
                    echo "<br>";
                    echo "$designation";
                    echo "<br>";
                    echo "Department of $dept";
                    echo "<br>";
                    echo "Rajshahi University of Engineeering and Technology";
                    echo "<br>";
                    echo "<br>";
                    echo '<a class="btn btn-primary" href="teacher_edit_profile.php">Update profile</a>';

                  }
                  else if($type_of_user=="Deparment Head")
                  {


                    echo "<br>";
                    echo "$name";
                    echo "<br>";
                    echo "Email Address: $email";
                    echo "<br>";
                    echo "$designation";
                    echo "<br>";
                    echo "Head of the department of $dept";
                    echo "<br>";
                    echo "Rajshahi University of Engineeering and Technology";
                    echo "<br>";
                    echo "<br>";
                    echo '<a class="btn btn-primary" href="head_edit_profile.php">Update profile</a>';

                  }
                  else if($type_of_user=="Student"){
                    // echo '<img src="$pp" alt="pp">';
                     echo "<br>";
                    echo "Student's name:$name";
                    echo "<br>";
                    echo "Student ID:$roll_no";
                    echo "<br>";
                    echo "Semester:$semester";
                    echo "<br>";
                    echo "Section:$section";
                    echo "<br>";
                    echo "Sesson:$session";
                    echo "<br>";
                    echo "Department of $dept";
                    echo "<br>";
                    echo "Rajshahi University of Engineeering and Technology";
                    echo "<br>";
                    echo '<a class="btn btn-primary" href="student_edit_profile.php">Update profile</a>';

                  }

                  ?>
                  <!-- <br> -->

<a class="btn btn-primary" style="float:right;" href="change_password.php">Change Password</a>

                </div>





                <?php
if ($type_of_user=="Deparment Head") {
   $_SESSION['dept']=$dept;




    echo'<div class="container col-sm-6 div">

     <h2 >  <center> Assign course </center></h2>
        <form  action="assign_course.php" method="post">';
        if(isset($_GET['message']))
        {

            echo ' <div class="alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You enter wrong semester</strong>
              </div>';

            }

            if(isset($_GET['course']))
            {
              echo ' <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Course assignment done successfully</strong>
                </div>';
            }


echo'  <div class="form-group" >
    <label  for="series">For which series</label>
    <input type="number" class="form-control"
    name="series" min="2008" value="" required>
  </div>


  <div class="form-group">
    <label  for="section">For which section</label>
  <input type="text" class="form-control"
  name="section" value="" required>
  <br>
  <p>*Format: A/B/..</p>
  </div>


  <div class="form-group">
    <label  for="section">Semester</label>
  <input type="number" class="form-control"
  name="current_semester" min="1" max="8" value="" required>
  <br>
  <p>*Semester must be running semester</p>

  </div>


    <div class="">
      <button type="submit"
      class="btn btn-success btn-lg" style="float:right;" name="b">Submit</button>
    </div>

  </form>
</div>';






}


elseif ($type_of_user=="Teacher") {
  $_SESSION['dept']=$dept;
  $_SESSION['name']=$name;
  $_SESSION['id']=$teacher_id;
echo '
<div class="container col-sm-8">

</div>
<div class="container div col-sm-4">
<h2 ><center>
  Assign</center>
</h2>
  <a class="btn btn-primary btn-lg" href="assign_ct.php">CT marks</a>

  <a class="btn btn-success btn-lg"
  href="assign_attendance.php">  Lab Attendance</a>
  <br>
    <br>
      <a class="btn btn-warning btn-lg"
      href="assign_labperformance.php">Lab performance</a>

      <a class="btn btn-danger btn-lg"
      href="assign_quize.php">Lab Quize/Viva</a>
      <br>
        <br>
<a class="btn btn-info btn-lg"
href="assign_board_viva.php">Board Viva</a>

<a class="btn btn-primary btn-lg"
href="assign_attendance.php">Class Attendance</a>
<br>
  <br>

<a class="btn btn-success btn-lg"
href="assign_semester_final.php">Semester Final  </a>


</div>
<div class="container div col-sm-4">

<a class="btn btn-primary btn-lg"
href="student.php">  Students</a>

  <a class="btn btn-success btn-lg"
  href="teacher_course.php">Courses you should be taken</a>

</div>';
}
elseif ($type_of_user=="Student") {


  echo '<div class="container col-sm-4">

             <a  class="btn btn-lg btn-primary"
             href="stdunts_result.php">Detail result</a>

  </div>';
$gpa_table_query="SELECT * FROM result_3 WHERE result_3.st_id='$roll_no'";
$send_gpa_table_query=mysqli_query($connection,$gpa_table_query);

echo '
<div class="container col-sm-8">
<h2 class="text-primary"><center>Your result table</center></h2>
<table class="table table-bordered   table-hover table-striped" >
<tr class="success tr">
<th>1st semestr gpa</th>
<th>2nd semestr gpa</th>
 <th>3rd semestr gpa</th>
<th>4th semestr gpa</th>


<th>5th semestr gpa</th>
<th>6th semestr gpa</th>
 <th>7th semestr gpa</th>
<th>8th semestr gpa</th>
<th>Cgpa</th>

</tr >';
while ($row_gpa_table=mysqli_fetch_array($send_gpa_table_query))
{
echo "<tr>
<td>$row_gpa_table[gpa_1]</td>
<td>$row_gpa_table[gpa_2]</td>
<td>$row_gpa_table[gpa_3]</td>
<td>$row_gpa_table[gpa_4]</td>
<td>$row_gpa_table[gpa_5]</td>
<td>$row_gpa_table[gpa_6]</td>
<td>$row_gpa_table[gpa_7]</td>
<td>$row_gpa_table[gpa_8]</td>
<td>$row_gpa_table[cgpa]</td>
</tr>";
}

echo "</table>

</div>";


}




?>







<div class="container col-sm-4">


</div>



  <!-- <div class="modal container" id="id01">
    <center><h1>Update profile</h1></center>

     <form class="modal-content" action="update_profile.php"
      method="post" >
       <div class="form-group">
           <hr>

          <?php $id=$teacher_id; ?>
           <img src="<?php echo "$pp"; ?>" alt="pp">
           <input type="file" name="pp" class="form-control">
         <label for="email">Email</label>
         <input type="email" name="email" class="form-control" value="
         <?php echo "$email"; ?> "> -->
         <!-- <label for="designation">Designation</label>
<select class="form-control" name="designation">
  <option>Professor</option>
  <option>Associate Professor</option>
  <option>Assistant Professor</option>
  <option>Lecturer</option>
</select> -->
<!-- <label for="password">Password</label>
<input type="password" name="password"
class="form-control" value=" <?php echo "$password"; ?> ">
<label for="password">Conferm assword</label>
<input type="password" name="conferm_password"
class="form-control" value="" required>

 <div class="clearfix">
    <button type="button" onclick="document.getElementById('id01').style.display='none'"
    class="cancelbtn">Cancel</button>
    <button type="submit" class="signupbtn">Update</button>
  </div>


       </div>
     </form>
  </div> -->

    <script


    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
