<?php


require_once("config.php");
session_start();

if (isset($_POST['submit'])) {
  $dept=$_SESSION['dept'];
  $series=$_POST['series'];
  $course_id=$_POST['course_id'];
  $section=$_POST['section'];
  $ct_no=$_POST['ct_no'];

$_SESSION['course_id']=$course_id;
$_SESSION['ct_no']=$ct_no;



//
// $str=(string)$series;
//
// $t_name=$course_id.$str.'CT';
// echo "$t_name";
// $one="ct_1";
// $two="ct_2";
// $three="ct_3";
// $four="ct_4";
// $five="avg";
// $primary="st_id";
//
// $query='CREATE TABLE  IF not EXISTS "$t_name"("$primary" int(5) , "$one" float(5,5),
//   "$two" float(5,5), "$three" float(5,5) ,"$four" float(5,5) ,
//   "$five" float(5,5),primary key("$primary"))';
//
//   $send=mysqli_query($connection,$query);

}
else {
  $ct_no=$_SESSION['ct_no'];
  $course_id=$_SESSION['course_id'];



}



    // if($send)
    // {
    //   echo " table created";
    // }




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
  <h2 class="text-primary">  <center > <strong>For CT
  </strong></center></h2>
<form class="" action="action_assign_ct1.php" method="post">
  <center>
  <div class="form-group">
    <label for="st_id">Student Id</label>
    <input type="number" class="form-control"
    name="st_id" value="" required>

    </div>
    <div class="form-group">
      <label for="marks">Marks</label>
      <input type="number" class="form-control"
      name="marks" min="0" max="20"
      placeholder="Mark in range 0 to 20"
      step="any" value="" required>

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
