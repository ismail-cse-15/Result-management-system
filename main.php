<?php
require_once("config.php");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <script>
     function startTime() {
       var today = new Date();
       var h = today.getHours();
       var m = today.getMinutes();
       var s = today.getSeconds();
       m = checkTime(m);
       s = checkTime(s);
       document.getElementById('txt').innerHTML =
       h + ":" + m + ":" + s;
       var t = setTimeout(startTime,500);
   }
   function checkTime(i) {
       if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
       return i;
   }
     </script>

<style media="screen">
.parallax {

/* background-image: url("img_parallax.jpg"); */

min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}

.li{
  background-color: #00ffff;

    opacity: 0.5;
}
img {
    width: 25%;
    height: 25%;
}
.comment{
  font-family: monospace;
 color: blue;

}
.div{



  /* border: 1px solid black; */
     border: 1px solid green;
  font-family: sans-serif;
float: right;
margin: 10px;
 weidth:720px;
background-color: lightgrey;

padding: 30px;


}

</style>
     <title></title>
   </head>
   <body  onload="startTime()">



  <div class="container-fluid" style="background-color:#33ccff;">
    <div class="container-fluid">
      <div class="col-sm-3">
        <img src="image/ruet-monogram-1545x1850.png" alt="" class="circle">
      </div>
      <div class="col-sm-7">

         <center><i>Heaven's light is Our Guide</i>

          <h4>Rajshahi University of Engineering and Technology</h4>
          </center>

      </div>
      <div class="col-sm-2">

       <p id="demo" style="font-size:large;"></p>
       <p id="txt" style="font-size:large;"></p>
      </div>
    </div>


  </div>












        <!-- <?php
        if(isset($_GET['out']))
        echo '<div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Logout successfully</strong>
        </div>';
        if(isset($_GET['out1']))
        echo '<div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Logout successfully</strong>
        </div>';
         ?> -->
     <div class="col-sm-12">
       <div class="container col-sm-6">
         <div  id="myCarousel" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
             <li data-target="#myCarousel" data-slide-to="1"> </li>
             <li data-target="#myCarousel" data-slide-to="2" > </li>
             <li data-target="#myCarousel" data-slide-to="3" > </li>
            <li data-target="#myCarousel" data-slide-to="4" > </li>

           </ol>
           <div class="carousel-inner">



             <div class="item active">
             <img src="image/building/main_gate.jpg"
             class=" ciecle" alt=""style="width:100%; border-radius:50%">
             <div class="carousel-caption">
               <h1 class="comment">Main gate</h1>
             </div>
             </div>

             <div class="item ">
             <img src="image/building/architecture_building.jpg"
             class="circle" alt=""style="width:100%; border-radius:50%">
             <div class="carousel-caption">
               <h1 class="comment">Architecture Building</h1>
             </div>
               </div>


               <div class="item ">
               <img src="image/building/eee_buliding.jpg"
               class=" ciecle" alt=""style="width:100%; border-radius:50%">
               <div class="carousel-caption">
                 <h1 class="comment">Electrical Building</h1>
               </div>
               </div>

               <div class="item ">
               <img src="image/building/ce_building.jpg"
               class=" ciecle" alt=""style="width:100%; border-radius:50%">
               <div class="carousel-caption">
                 <h1 class="comment">Civil Building</h1>
               </div>
               </div>


               <div class="item ">
               <img src="image/building/chip.jpg" alt=""
               class=" circle" style="width:100%;border-radius:50%">
               <div class="carousel-caption">
                 <h1 class="comment">Computer motherboard</h1>
               </div>
                 </div>




                 </div>

             <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
             </a>


             <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
             </a>

         </div>


       </div>

       <div class=" container div col-sm-5">

           <a class="btn btn-lg btn-primary"
           href="head_login.php">Department Head</a>


           <a  class="btn btn-lg btn-success"
           href="teacher_login.php">Teacher</a>


           <a class="btn btn-lg btn-warning"
           href="login.php">   Student</a>



           <a  class="btn btn-lg btn-danger"
           href="admin_login.php">Admin</a>


     </div>

     </div>





<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();

</script>
     <script
     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
     </script>
  <script src="js/bootstrap.min.js"></script>

   </body>
 </html>
