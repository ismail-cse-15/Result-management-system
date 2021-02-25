<?php
require_once("config.php");
if(isset($_POST['b1']))
{
  $user_name=$_POST['teacher_name'];
  $designation=$_POST['designation'];
  $dept=$_POST['dept'];
  $email=$_POST['email'];
  $teacher_id=$_POST['teacher_id'];
  $password=$_POST['password'];
  //$password=sha1($_POST['password'])
  $password=base64_encode($_POST['password']);


  $query1="insert into user VALUES
  ('$teacher_id','$user_name','Teacher','$email','$password')";
  $send1=mysqli_query($connection,$query1);




    $query3=" INSERT INTO teacher
    VALUES('$teacher_id','$user_name','$designation','$dept',' ')";
    $send3=mysqli_query($connection,$query3);

    header('Location:teacher_login.php?teacher_registration=done');


}
else if(isset($_POST['b2']))
{

  $user_name=$_POST['st_name'];

  $dept=$_POST['dept'];
  $email=$_POST['email'];
  $password=$_POST['password'];
   //$password=sha1($_POST['password']);
   $password=base64_encode($_POST['password']);

   //$password=md5($_POST['password']);
   $sesson=$_POST['sesson'];
   $roll_no=$_POST['roll_no'];
   $section=$_POST['section'];
   $semester=$_POST['semester'];
$check="select user_id from user where user_id='$roll_no'";
$send=mysqli_query($connection,$check);
$row=mysqli_fetch_array($send);
if($row['user_id']==$roll_no)
{


  header('Location:signup_student.php?exist=sucess;');

}
else {
  //insert to user table
    $query1="insert into user
    VALUES('$roll_no','$user_name','Student','$email','$password')";
    $send1=mysqli_query($connection,$query1);
    //insert to students table
     $query3=" INSERT INTO students
      VALUES('$roll_no','$user_name','$sesson','$dept','$semester','$section',' ')";
      $send3=mysqli_query($connection,$query3);
      if($dept='CSE')
      {
            $query29="INSERT INTO grade_point_3 (st_id) VALUES('$roll_no')";
        $query30="INSERT INTO lab_quize_marks_3 (st_id) VALUES('$roll_no')";
        $query31="INSERT INTO attendance_marks_3 (st_id) VALUES('$roll_no')";
        $query32="INSERT INTO board_viva_marks_3 (st_id) VALUES('$roll_no')";
        $query33="INSERT INTO labperformance_marks_3 (st_id) VALUES('$roll_no')";
         $query34="INSERT INTO semester_final_marks_3 (st_id) VALUES('$roll_no')";
          $query35="INSERT INTO result_3 (st_id) VALUES('$roll_no')";



             $send29=mysqli_query($connection,$query29);
         $send30=mysqli_query($connection,$query30);
          $send31=mysqli_query($connection,$query31);
            $send32=mysqli_query($connection,$query32);
              $send33=mysqli_query($connection,$query33);
                $send34=mysqli_query($connection,$query34);
                  $send35=mysqli_query($connection,$query35);

          //1st semester
          $query36="INSERT INTO cse_1101 (st_id) VALUES('$roll_no')";
          $query37="INSERT INTO chem_1113 (st_id) VALUES('$roll_no')";
          $query38="INSERT INTO hum_1113 (st_id) VALUES('$roll_no')";
          $query39="INSERT INTO math_1113 (st_id) VALUES('$roll_no')";
          $query40="INSERT INTO eee_1151 (st_id) VALUES('$roll_no')";

          $send36=mysqli_query($connection,$query36);
            $send37=mysqli_query($connection,$query37);
              $send38=mysqli_query($connection,$query38);
                $send39=mysqli_query($connection,$query39);
                  $send40=mysqli_query($connection,$query40);


       //second seme
          $query41="INSERT INTO cse_1201_3 (st_id) VALUES('$roll_no')";
          $query42="INSERT INTO cse_1203_3 (st_id) VALUES('$roll_no')";
          $query43="INSERT INTO hum_1213_3 (st_id) VALUES('$roll_no')";
          $query44="INSERT INTO math_1213_3 (st_id) VALUES('$roll_no')";
          $query45="INSERT INTO phy_1213_3 (st_id) VALUES('$roll_no')";


          $send41=mysqli_query($connection,$query41);
            $send42=mysqli_query($connection,$query42);
              $send43=mysqli_query($connection,$query43);
                $send44=mysqli_query($connection,$query44);
                  $send45=mysqli_query($connection,$query45);

          //3rd semester

          $query46="INSERT INTO cse_2101_3 (st_id) VALUES('$roll_no')";
          $query47="INSERT INTO cse_2103_3 (st_id) VALUES('$roll_no')";
          $query48="INSERT INTO hum_2113_3 (st_id) VALUES('$roll_no')";
          $query49="INSERT INTO math_2113_3 (st_id) VALUES('$roll_no')";
          $query50="INSERT INTO eee_2151_3 (st_id) VALUES('$roll_no')";

          $send46=mysqli_query($connection,$query46);
            $send47=mysqli_query($connection,$query47);
              $send48=mysqli_query($connection,$query48);
                $send49=mysqli_query($connection,$query49);
                  $send50=mysqli_query($connection,$query50);



          //4th semester
          $query51="INSERT INTO cse_2201_3 (st_id) VALUES('$roll_no')";
          $query52="INSERT INTO cse_2203_3 (st_id) VALUES('$roll_no')";
          $query53="INSERT INTO cse_2205_3 (st_id) VALUES('$roll_no')";
          $query54="INSERT INTO math_2213_3 (st_id) VALUES('$roll_no')";
          $query55="INSERT INTO eee_2251_3 (st_id) VALUES('$roll_no')";



                    $send51=mysqli_query($connection,$query51);
                      $send52=mysqli_query($connection,$query52);
                        $send53=mysqli_query($connection,$query53);
                          $send54=mysqli_query($connection,$query54);
                            $send55=mysqli_query($connection,$query55);

          //5th semester
          $query56="INSERT INTO cse_3101_3 (st_id) VALUES('$roll_no')";
          $query57="INSERT INTO cse_3103_3 (st_id) VALUES('$roll_no')";
          $query58="INSERT INTO cse_3105_3 (st_id) VALUES('$roll_no')";
          $query59="INSERT INTO cse_3107_3 (st_id) VALUES('$roll_no')";
          $query60="INSERT INTO cse_3109_3 (st_id) VALUES('$roll_no')";


          $send56=mysqli_query($connection,$query56);
            $send57=mysqli_query($connection,$query57);
              $send58=mysqli_query($connection,$query58);
                $send59=mysqli_query($connection,$query59);
                  $send60=mysqli_query($connection,$query60);


          //6th semester
          $query61="INSERT INTO cse_3201_3 (st_id) VALUES('$roll_no')";
          $query62="INSERT INTO cse_3203_3 (st_id) VALUES('$roll_no')";
          $query63="INSERT INTO cse_3205_3 (st_id) VALUES('$roll_no')";
          $query64="INSERT INTO cse_3207_3 (st_id) VALUES('$roll_no')";
          $query65="INSERT INTO cse_3209_3 (st_id) VALUES('$roll_no')";

          $send61=mysqli_query($connection,$query61);
            $send62=mysqli_query($connection,$query62);
              $send63=mysqli_query($connection,$query63);
                $send64=mysqli_query($connection,$query64);
                  $send65=mysqli_query($connection,$query65);

      }


      header('Location:login.php?registation=done');
}

}
elseif (isset($_POST['b3'])) {
  $head_name=$_POST['head_name'];
  $designation=$_POST['designation'];
  $dept=$_POST['dept'];
  $email=$_POST['email'];
  $head_id=$_POST['head_id'];
  $password=$_POST['password'];
//  $password=sha1($_POST['password']);
$password=base64_encode($_POST['password']);


  $query1="insert into user VALUES
  ('$head_id','$head_name','Deparment Head','$email','$password')";
  $send1=mysqli_query($connection,$query1);




    $query3=" INSERT INTO teacher
    VALUES('$head_id','$head_name','$designation','$dept' ,' ')";
    $send3=mysqli_query($connection,$query3);

    $query4=" INSERT INTO head
    VALUES('$head_id','$head_name','$designation','$dept')";
    $send4=mysqli_query($connection,$query4);



          header('Location:head_login.php?head_registration=done');


}




 ?>




 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <title></title>
   </head>
   <body>
<nav class="navbar navbar-inverse">
     <div class="container">
          <ul class="nav nav-pills nav-justified">
            <li ><a href="main.php">Student result management</a>
            </li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
              Login</a></li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
              href="resultmanagement.php"><span class="glyphicon glyphicon-user">
              </span>Sign Up
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



     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
 <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
