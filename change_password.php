<?php
require_once("config.php");

session_start();

$name=$_SESSION['st_name'];
$user_id=$_SESSION['user_id'];
 $password=$_SESSION['password'];
 $password=base64_decode($password);
 $email=$_SESSION['email'];
 $type_of_user=$_SESSION['type_of_user'];


$_SESSION['user_id']= $user_id;
$_SESSION['email']=$email;


// echo "$name";
// echo "<br>";
// echo "$password";









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
               <li class="active"><a href="change_password.php">Update Password</a>
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



<div class="container col-sm-4">

</div>

<div class="container col-sm-4">



  <form class="" action="update_password.php"
   method="post" enctype="multipart/form-data">

    <?php
    if(isset($_GET['change']))
    {
    echo ' <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Password and Confirm password does not match</strong>
      </div>';

    }

  ?>

    <div class="form-group">
     <label for="currentt_password">Old password</label>
     <input type="text" class="form-control"
     name="currentt_password"  value="<?php echo "$password"; ?>" >
   </div>


   <div class="form-group">
    <label for="password">New password</label>
     <input  type="password"
     class="form-control" name="new_password"
     value="" required>
   </div>


   <div class="form-group">
    <label for="password">Confirm new password</label>
     <input  type="password"
     class="form-control" name="confirm_password"
     value="" required>
   </div>




   <button type="submit" style="float:right;"name="update_password"
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
