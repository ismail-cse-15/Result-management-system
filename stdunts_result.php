<?php


require_once('config.php');
session_start();
$semester=$_SESSION['semester'];
$roll_no=$_SESSION['roll_no'];
$dept=$_SESSION['dept'];

//echo "$semester";


  $query="SELECT * FROM grade_point_3 WHERE st_id='$roll_no'";
  $send=mysqli_query($connection,$query);


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
                   <!-- <li class="active"><a href="home.php">Home</a>
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


<!-- <div class="container col-sm-4">
  <h2 class="text-primary">  <center>Result of theory courses</center></h2>
</div> -->


          <!-- <?php


if ($semester==1) {
  echo '  <table class="table table-bordered   table-hover table-striped" >
    <tr class="success tr">
    <th>CSE-1101</th>
    <th>EEE-1151</th>
     <th>Math-1113</th>
    <th>Hum-1113</th>
     <th>Chem-1113</th>

    </tr >';

echo '</table>';

}
           ?> -->



           <div class="container col-sm-4">

             <h2 class="text-primary"> <center>Result of theory courses</center></h2>
           <?php
           $query1="SELECT * FROM grade_point_3 WHERE st_id='$roll_no'";
           $send1=mysqli_query($connection,$query1);
           if($semester==1)
           {

             echo ' <table class="table table-bordered   table-hover table-striped" >
              <tr class="success tr">
              <th>CSE-1101</th>
              <th>EEE-1151</th>
               <th>Math-1113</th>
              <th>Hum-1113</th>
               <th>Chem-1113</th>

              </tr >';
           }

           while ($row=mysqli_fetch_array($send)) {


             echo "<tr>
             <td>$row[CSE_1101]</td>
             <td>$row[EEE_1151]</td>
             <td>$row[Math_1113]</td>
               <td>$row[Hum_1113]</td>
             <td>$row[Chem_1113]</td>


             </tr>";
           }

            ?>







           </table>
           </div>





<div class="container col-sm-4">

<?php

if ($semester==1) {
  //cse-1101 ct marks
  echo '<h2 class="text-primary"> <center>CSE-1101</center></h2>';
  $query2="SELECT * FROM cse_1101 WHERE st_id='$roll_no'";
  $send2=mysqli_query($connection,$query2);
  echo ' <table class="table table-bordered   table-hover table-striped" >
   <tr class="success tr">
   <th>CT-1</th>
   <th>CT-2</th>
    <th>CT-3</th>
   <th>CT-4</th>
    <th>Average</th>

   </tr >';

   while ($row2=mysqli_fetch_array($send2)) {


     echo "<tr>
     <td>$row2[ct_1]</td>
     <td>$row2[ct_2]</td>
     <td>$row2[ct_3]</td>
       <td>$row2[ct_4]</td>
     <td>$row2[avg]</td>


     </tr>";
   }
   echo '</table>';




 // eee-1151 ct marks table
   echo '<h2 class="text-primary"> <center>EEE-1151</center></h2>';
   $query3="SELECT * FROM  eee_1151 WHERE st_id='$roll_no'";
   $send3=mysqli_query($connection,$query3);
   echo ' <table class="table table-bordered   table-hover table-striped" >
    <tr class="success tr">
    <th>CT-1</th>
    <th>CT-2</th>
     <th>CT-3</th>
    <th>CT-4</th>
     <th>Average</th>

    </tr >';

    while ($row3=mysqli_fetch_array($send3)) {


      echo "<tr>
      <td>$row3[ct_1]</td>
      <td>$row3[ct_2]</td>
      <td>$row3[ct_3]</td>
        <td>$row3[ct_4]</td>
      <td>$row3[avg]</td>


      </tr>";
    }
    echo '</table>';


// math 1113 ct matks
echo '<h2 class="text-primary"> <center>Math-1113</center></h2>';
$query4="SELECT * FROM  math_1113 WHERE st_id='$roll_no'";
$send4=mysqli_query($connection,$query4);

echo ' <table class="table table-bordered   table-hover table-striped" >
 <tr class="success tr">
 <th>CT-1</th>
 <th>CT-2</th>
  <th>CT-3</th>
 <th>CT-4</th>
  <th>Average</th>

 </tr >';


 while ($row4=mysqli_fetch_array($send4)) {


   echo "<tr>
   <td>$row4[ct_1]</td>
   <td>$row4[ct_2]</td>
   <td>$row4[ct_3]</td>
     <td>$row4[ct_4]</td>
   <td>$row4[avg]</td>


   </tr>";
 }
 echo '</table>';


//chem -1113 ct marks

echo '<h2 class="text-primary"> <center>Chem-1113</center></h2>';
$query6="SELECT * FROM  chem_1113 WHERE st_id='$roll_no'";
$send6=mysqli_query($connection,$query6);

echo ' <table class="table table-bordered   table-hover table-striped" >
 <tr class="success tr">
 <th>CT-1</th>
 <th>CT-2</th>
  <th>CT-3</th>
 <th>CT-4</th>
  <th>Average</th>

 </tr >';


 while ($row6=mysqli_fetch_array($send6)) {


   echo "<tr>
   <td>$row6[ct_1]</td>
   <td>$row6[ct_2]</td>
   <td>$row6[ct_3]</td>
     <td>$row6[ct_4]</td>
   <td>$row6[avg]</td>


   </tr>";
 }
 echo '</table>';


 //hum_1113_3 ct marks



 echo '<h2 class="text-primary"> <center>Hum-1113</center></h2>';
 $query5="SELECT * FROM  hum_1113 WHERE st_id='$roll_no'";
 $send5=mysqli_query($connection,$query5);

 echo ' <table class="table table-bordered   table-hover table-striped" >
  <tr class="success tr">
  <th>CT-1</th>
  <th>CT-2</th>
   <th>CT-3</th>
  <th>CT-4</th>
   <th>Average</th>

  </tr >';


  while ($row5=mysqli_fetch_array($send5)) {


    echo "<tr>
    <td>$row5[ct_1]</td>
    <td>$row5[ct_2]</td>
    <td>$row5[ct_3]</td>
      <td>$row5[ct_4]</td>
    <td>$row5[avg]</td>


    </tr>";
  }
  echo '</table>';

}





 ?>





</div>




           <div class="container col-sm-4">

             <h2 class="text-primary"> <center>Result of sessional courses</center></h2>
           <?php
           $query1="SELECT * FROM grade_point_3 WHERE st_id='$roll_no'";
           $send1=mysqli_query($connection,$query1);

           if($semester==1)
           {

             echo '<table class="table table-bordered   table-hover table-striped" >
                          <tr class="success tr">
                          <th>CSE-1100</th>
                            <th>CSE-1102</th>
                          <th>EEE-1152</th>

                          <th>Hum-1114</th>
                           <th>Chem-1114</th>

                          </tr >';



                          while ($row1=mysqli_fetch_array($send1)) {


                            echo "<tr>
                            <td>$row1[CSE_1100]</td>
                            <td>$row1[CSE_1102]</td>
                            <td>$row1[EEE_1152]</td>

                              <td>$row1[Hum_1114]</td>
                            <td>$row1[Chem_1114]</td>


                            </tr>";
                          }

           }
            ?>



      </table>
           </div>
















     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
