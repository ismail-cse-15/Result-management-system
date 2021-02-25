<?php
require_once("config.php");

session_start();



$password=$_SESSION['password'];
$password=base64_decode($password);
$email=$_SESSION['email'];
$type_of_user=$_SESSION['type_of_user'];

$dept=$_SESSION['dept'];
$teacher_id=$_SESSION['head_id'];
$pp=  $_SESSION['pp'];
  $designation=$_SESSION['designation'];
$name = $_SESSION['user_name'];

$_SESSION['head_id']=$teacher_id;




// echo "$type_of_user";
// echo "<br>";
// echo "$email";
// echo "<br>";
// echo "$password";
// echo "<br>";
// echo "$name";
// echo "<br>";
// echo "$pp";
// echo "<br>";
// echo "$designation";




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
                   <!-- <li ><a href="home.php">Home</a>
                   </li> -->

               <li ><a href="profile.php">Profile</a>
               </li>
               <li class="active"><a href="teacher_edit_profile.php">Update Profile</a>
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


<div class="col-sm-4">

</div>
<div class="container col-sm-4">



  <form class=""
  action="head_update_profile.php" method="post" enctype="multipart/form-data">

    <!-- <div class="form-group">
     <label for="st_name">Name</label>
     <input type="text" class="form-control"
     name="st_name"  value="<?php echo "$name"; ?>" >
   </div> -->
    <div class="form-group">
     <label for="st_name">email</label>
     <input type="email" class="form-control"
     name="email"  value="<?php echo "$email"; ?>" >
   </div>


   <div class="form-group">
    <label for="st_name">Designation</label>
    <input type="text" class="form-control"
    name="designation"  value="<?php echo "$designation"; ?>" >
    <?php
    echo "*Professor/Associate Professor/Assistant Professor/Lecturer"; ?>
  </div>

   <!-- <div class="form-group">
    <label for="password">Password</label>
     <input  type="password"
     class="form-control" name="password"
     value="<?php echo "$password"; ?>" required>
   </div> -->



   <div class="form-group" style="font-size: 1.0em">
     <label for="semester">Profile picture</label>
<input type="file" class="form-control" name="t_pp" value="<?php echo "$pp"; ?>">
<?php
echo "*Pic quality must be low"; ?>
</div>


   <button type="submit" style="Float:right;" name="edit_teacher_profile"
   class=" btn btn-primary btn-lg "> Save Changes
   </button>
  </form>
</div>

<div class="col-sm-4">

</div>









     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
