<?php


require_once("config.php");
$new_batch=$_POST['series'];
$current_semester=1;
$state='Running';
$find=0;

$check_query="SELECT batch.batch_no FROM batch";
$check_send=mysqli_query($connection,$check_query);

while ($row=mysqli_fetch_array($check_send))
{
if($row['batch_no']==$new_batch)
{
$find=1;
break;
}
}
if($find==0)
{
  $query="INSERT into batch
  values('$new_batch','$current_semester','$state')";
  $send=mysqli_query($connection,$query);
header("Location:admin_p.php?assign=done");
}
elseif ($find==1) {
header("Location:admin_p.php?exist=yes");
}



 ?>
