<?php

require_once("config.php");
session_start();
if(!isset($_SESSION['admin_name']))
{
  header("Location:admin_login.php");
}
else {

  $name=$_SESSION['admin_name'];
$i=0;
$query1="SELECT * FROM batch WHERE batch.state='Running'";
  $send1=mysqli_query($connection,$query1);
  $row1=mysqli_fetch_array($send1);
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="profile_style.css">
     <title></title>
   </head>
   <body>
     <nav class="navbar navbar-inverse">
          <div class="container">
               <ul class="nav nav-pills nav-justified">
                 <!-- <li><a href="home.php">Home</a>
                 </li> -->
             <li class="active"><a href="admin_p.php">Profile</a>
             </li>
                 <li ><a href="admin_logout.php"><span class="glyphicon glyphicon-log-out"></span>
                   Logout</a></li>


               </ul>
             </div>
                </nav>

                <?php
                if(isset($_GET['login']) && $i==0){
                  echo '<div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>successfully login</strong>
                  </div>';
                  $i=$i+1;
                }




                 ?>
                 <!-- <div class="container col-sm-6">
                  <?php
                  echo "Admin";
                   echo "<br>";
                  echo "Welcome $name";

                   ?>

                 </div> -->



                 <div  class="container  table-responsive col-sm-6" >
                   <h2 class="text-primary"><center>
                     Running batches</center>
                   </h2>
                 <table class="table table-bordered   table-hover table-striped" >
                 <tr class="success tr">
                 <th>Series</th>
                 <th>Running semester</th>

                 </tr >
                 <?php

                 while ($row1=mysqli_fetch_array($send1))
                 {
                 echo "<tr>
                 <td>$row1[batch_no]</td>
                 <td>$row1[current_semester]</td>

                 </tr>";
                 }
                 ?>
                 </table>
                 </div>

                 <!-- <div class="container col-sm-6 search-container">

                  <form class=""  action="index.html" method="post">
                    <input type="text" class="form-control"
                    name="series" value="" required>
                  </form>
                 </div> -->
                 <div class="container col-sm-6">
                   <h2 class="text-primary"><center>
                     Entry new batch</center>
                <form class="" action="action_batch.php" method="post">

                  <?php
                  if(isset($_GET['assign']))
                  {
                  echo ' <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Entry new batch at batch table</strong>
                    </div>';

                  }

                  if(isset($_GET['exist']))
                  {
                  echo ' <div class="alert alert-warning alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Batch is already exist</strong>
                    </div>';

                  }



                   ?>
                  <div class="form-group">

                   <input type="number" class="form-control"
                   name="series"
                   placeholder="Enter new series no" value="" required>
                 </div>
                 <button type="submit" name="batch"
                 class=" btn btn-primary btn-lg "
                 style="float:right;">Create
                 </button>
                </form>

                 </div>

                 <div class="container col-sm-6">
                   <h2 class="text-primary"><center>
                     Check marks of a batch</center>


                     <form class=""
                     action="action_check_result.php" method="post">


                       <div class="form-group">

                        <input type="number" class="form-control"
                        name="series"
                        placeholder="Enter series"
                        value="" required>
                      </div>
                      <button type="submit" name="batch"
                      class=" btn btn-primary btn-lg "
                      style="float:right;">Check
                      </button>
                     </form>
                 </div>

                 <div class="container col-sm-6">
                   <h2 class="text-primary"><center>
                     Create result</center>


                     <form class=""
                     action="action_create_result.php" method="post">


                       <div class="form-group">
                   <label for="">series</label>
                        <input type="number" class="form-control"
                        name="series"
                        placeholder="Enter series"
                        value="" required>
                      </div>

                      <div class="form-group">
                    <label for="">Department</label>
                    <select class="form-control"name="dept">
<option>Architecture</option>
<option>BCME</option>
<option>CE</option>
<option>CFPE</option>
<option>CSE</option>
<option>ECE</option>
<option>EEE</option>
<option>ETE</option>
<option>GCE</option>
<option>IPE</option>
<option>ME</option>
<option>MSE</option>
<option>MTE</option>
<option>URP</option>
</select>
                     </div>



                     <div class="form-group">
                 <label for="">First roll</label>
                      <input type="number" class="form-control"
                      name="first_roll"
                      placeholder="Enter first roll"
                      value="" required>
                    </div>
                    <div class="form-group">

                <label for="">Last roll</label>
                     <input type="number" class="form-control"
                     name="last_roll"
                     placeholder="Enter last roll"
                     value="" required>
                   </div>


                      <button type="submit" name="batch"
                      class=" btn btn-primary btn-lg "
                      style="float:right;">Create
                      </button>
                     </form>
                 </div>



     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
   <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
