<?php


require_once("config.php");
$series=$_POST['series'];
$first_roll=$_POST['first_roll'];
$last_roll=$_POST['last_roll'];
$dept=$_POST['dept'];

echo "$series ' ' $first_roll '  ' $last_roll ' ' $dept";


$query1="SELECT batch.current_semester
FROM batch WHERE batch.batch_no='$series'";
$send1=mysqli_query($connection,$query1);
$row1=mysqli_fetch_array($send1);
$semester=$row1['current_semester'];
echo "' ' $semester";

if($dept=='CSE')
{


  if($semester==1)
  {


//c programming
$query2="SELECT semester_final_marks_3.st_id,
 (cse_1101.avg+attendance_marks_3.CSE_1101+semester_final_marks_3.CSE_1101)
 AS total
 FROM semester_final_marks_3,
 cse_1101,
 attendance_marks_3
 WHERE semester_final_marks_3.st_id=cse_1101.st_id AND
 semester_final_marks_3.st_id=attendance_marks_3.st_id AND
 cse_1101.st_id=attendance_marks_3.st_id AND
 semester_final_marks_3.st_id  BETWEEN  $first_roll AND $last_roll";
  $send2=mysqli_query($connection,$query2);
 echo "<br>";
 while($row2=mysqli_fetch_array($send2))
 {

   $st_id=$row2['st_id'];
   $total=$row2['total'];
   $gpa=0;
   if($total<40)
   {
     $gpa=0;
   }
   elseif ($total>=40 && $total<45) {
     $gpa=2.00;
   }
   elseif ($total>=45 && $total<50) {
     $gpa=2.25;
   }
   elseif ($total>=50 && $total<55) {
     $gpa=2.50;
   }
   elseif ($total>=55 && $total<60) {
     $gpa=2.75;
   }
   elseif ($total>=60 && $total<65) {
     $gpa=3.00;
   }
   elseif ($total>=65 && $total<70) {
     $gpa=3.25;
   }
   elseif ($total>=70 && $total<75) {
     $gpa=3.50;
   }
   elseif ($total>=75 && $total<80) {
     $gpa=3.75;
   }
   elseif ($total>=80 ) {
     $gpa=4.00;
   }

   echo "$st_id ' ' $total ' ' $gpa";
 echo "<br>";
 $gpa_query_2="UPDATE grade_point_3
 set CSE_1101='$gpa' WHERE grade_point_3.st_id='$st_id' ";
 $send_gpa_2=mysqli_query($connection,$gpa_query_2);
}







// bacis Electrical
$query3="SELECT semester_final_marks_3.st_id,
 (eee_1151_3.avg+attendance_marks_3.EEE_1151+semester_final_marks_3.EEE_1151)
 AS total
 FROM semester_final_marks_3,
 eee_1151_3,
 attendance_marks_3
 WHERE semester_final_marks_3.st_id=eee_1151_3.st_id AND
 semester_final_marks_3.st_id=attendance_marks_3.st_id AND
 eee_1151_3.st_id=attendance_marks_3.st_id AND
 semester_final_marks_3.st_id  BETWEEN  $first_roll  AND $last_roll";
  $send3=mysqli_query($connection,$query3);
 echo "<br>";
  while($row3=mysqli_fetch_array($send3))
  {

    $st_id=$row3['st_id'];
    $total=$row3['total'];
    $gpa=0;
    if($total<40)
    {
      $gpa=0;
    }
    elseif ($total>=40 && $total<45) {
      $gpa=2.00;
    }
    elseif ($total>=45 && $total<50) {
      $gpa=2.25;
    }
    elseif ($total>=50 && $total<55) {
      $gpa=2.50;
    }
    elseif ($total>=55 && $total<60) {
      $gpa=2.75;
    }
    elseif ($total>=60 && $total<65) {
      $gpa=3.00;
    }
    elseif ($total>=65 && $total<70) {
      $gpa=3.25;
    }
    elseif ($total>=70 && $total<75) {
      $gpa=3.50;
    }
    elseif ($total>=75 && $total<80) {
      $gpa=3.75;
    }
    elseif ($total>=80 ) {
      $gpa=4.00;
    }

    echo "$st_id ' ' $total ' ' $gpa";
 echo "<br>";
 $gpa_query_3="UPDATE grade_point_3
 set EEE_1151='$gpa' WHERE grade_point_3.st_id='$st_id' ";
 $send_gpa_3=mysqli_query($connection,$gpa_query_3);

}




// math of 1st semestr
$query4="SELECT semester_final_marks_3.st_id,
  (math_1113_3.avg+attendance_marks_3.Math_1113+semester_final_marks_3.Math_1113)
  AS total
  FROM semester_final_marks_3,
  math_1113_3,
  attendance_marks_3
  WHERE semester_final_marks_3.st_id=math_1113_3.st_id AND
  semester_final_marks_3.st_id=attendance_marks_3.st_id AND
  math_1113_3.st_id=attendance_marks_3.st_id AND
  semester_final_marks_3.st_id  BETWEEN  $first_roll  AND $last_roll";
   $send4=mysqli_query($connection,$query4);
  echo "<br>";
   while($row4=mysqli_fetch_array($send4))
   {

     $st_id=$row4['st_id'];
     $total=$row4['total'];
     $gpa=0;
     if($total<40)
     {
       $gpa=0;
     }
     elseif ($total>=40 && $total<45) {
       $gpa=2.00;
     }
     elseif ($total>=45 && $total<50) {
       $gpa=2.25;
     }
     elseif ($total>=50 && $total<55) {
       $gpa=2.50;
     }
     elseif ($total>=55 && $total<60) {
       $gpa=2.75;
     }
     elseif ($total>=60 && $total<65) {
       $gpa=3.00;
     }
     elseif ($total>=65 && $total<70) {
       $gpa=3.25;
     }
     elseif ($total>=70 && $total<75) {
       $gpa=3.50;
     }
     elseif ($total>=75 && $total<80) {
       $gpa=3.75;
     }
     elseif ($total>=80 ) {
       $gpa=4.00;
     }

     echo "$st_id ' ' $total ' ' $gpa";
  echo "<br>";
  $gpa_query_4="UPDATE grade_point_3
  set Math_1113='$gpa' WHERE grade_point_3.st_id='$st_id' ";
  $send_gpa_4=mysqli_query($connection,$gpa_query_4);

}




   // english of 1st semestr
$query5="SELECT semester_final_marks_3.st_id,
     (hum_1113_3.avg+attendance_marks_3.Hum_1113+semester_final_marks_3.Hum_1113)
     AS total
     FROM semester_final_marks_3,
     hum_1113_3,
     attendance_marks_3
     WHERE semester_final_marks_3.st_id=hum_1113_3.st_id AND
     semester_final_marks_3.st_id=attendance_marks_3.st_id AND
     hum_1113_3.st_id=attendance_marks_3.st_id AND
     semester_final_marks_3.st_id  BETWEEN  $first_roll  AND $last_roll";
      $send5=mysqli_query($connection,$query5);
     echo "<br>";
      while($row5=mysqli_fetch_array($send5))
      {

        $st_id=$row5['st_id'];
        $total=$row5['total'];
        $gpa=0;
        if($total<40)
        {
          $gpa=0;
        }
        elseif ($total>=40 && $total<45) {
          $gpa=2.00;
        }
        elseif ($total>=45 && $total<50) {
          $gpa=2.25;
        }
        elseif ($total>=50 && $total<55) {
          $gpa=2.50;
        }
        elseif ($total>=55 && $total<60) {
          $gpa=2.75;
        }
        elseif ($total>=60 && $total<65) {
          $gpa=3.00;
        }
        elseif ($total>=65 && $total<70) {
          $gpa=3.25;
        }
        elseif ($total>=70 && $total<75) {
          $gpa=3.50;
        }
        elseif ($total>=75 && $total<80) {
          $gpa=3.75;
        }
        elseif ($total>=80 ) {
          $gpa=4.00;
        }

        echo "$st_id ' ' $total ' ' $gpa";
     echo "<br>";
     $gpa_query_5="UPDATE grade_point_3
     set Hum_1113='$gpa' WHERE grade_point_3.st_id='$st_id' ";
     $send_gpa_5=mysqli_query($connection,$gpa_query_5);

}








      // chemistry of 1st semestr
$query6="SELECT semester_final_marks_3.st_id,
        (chem_1113_3.avg+attendance_marks_3.Chem_1113+semester_final_marks_3.Chem_1113)
        AS total
        FROM semester_final_marks_3,
        chem_1113_3,
        attendance_marks_3
        WHERE semester_final_marks_3.st_id=chem_1113_3.st_id AND
        semester_final_marks_3.st_id=attendance_marks_3.st_id AND
        chem_1113_3.st_id=attendance_marks_3.st_id AND
        semester_final_marks_3.st_id  BETWEEN  $first_roll  AND $last_roll";
         $send6=mysqli_query($connection,$query6);
        echo "<br>";
         while($row6=mysqli_fetch_array($send6))
         {

           $st_id=$row6['st_id'];
           $total=$row6['total'];
           $gpa=0;
           if($total<40)
           {
             $gpa=0;
           }
           elseif ($total>=40 && $total<45) {
             $gpa=2.00;
           }
           elseif ($total>=45 && $total<50) {
             $gpa=2.25;
           }
           elseif ($total>=50 && $total<55) {
             $gpa=2.50;
           }
           elseif ($total>=55 && $total<60) {
             $gpa=2.75;
           }
           elseif ($total>=60 && $total<65) {
             $gpa=3.00;
           }
           elseif ($total>=65 && $total<70) {
             $gpa=3.25;
           }
           elseif ($total>=70 && $total<75) {
             $gpa=3.50;
           }
           elseif ($total>=75 && $total<80) {
             $gpa=3.75;
           }
           elseif ($total>=80 ) {
             $gpa=4.00;
           }

           echo "$st_id ' ' $total ' ' $gpa";
        echo "<br>";
        $gpa_query_6="UPDATE grade_point_3
        set 	Chem_1113='$gpa' WHERE grade_point_3.st_id='$st_id' ";
        $send_gpa_6=mysqli_query($connection,$gpa_query_6);

}



    //c programming lab
$query7="      SELECT labperformance_marks_3.st_id,
         (labperformance_marks_3.CSE_1102+
          attendance_marks_3.CSE_1102+
          board_viva_marks_3.CSE_1102+
          lab_quize_marks_3.CSE_1102)
         AS total
         FROM
         labperformance_marks_3,
         lab_quize_marks_3,
         attendance_marks_3,
         board_viva_marks_3
         WHERE
         labperformance_marks_3.st_id=attendance_marks_3.st_id AND
         labperformance_marks_3.st_id=lab_quize_marks_3.st_id AND
         labperformance_marks_3.st_id=board_viva_marks_3.st_id AND

         lab_quize_marks_3.st_id=attendance_marks_3.st_id AND
         lab_quize_marks_3.st_id=board_viva_marks_3.st_id AND

         board_viva_marks_3.st_id=attendance_marks_3.st_id AND

         labperformance_marks_3.st_id  BETWEEN  $first_roll AND $last_roll";
          $send7=mysqli_query($connection,$query7);
         echo "<br>";
          while($row7=mysqli_fetch_array($send7))
          {

        $st_id=$row7['st_id'];
            $total=$row7['total'];
            $gpa=0;
            if($total<40)
            {
              $gpa=0;
            }
            elseif ($total>=40 && $total<45) {
              $gpa=2.00;
            }
            elseif ($total>=45 && $total<50) {
              $gpa=2.25;
            }
            elseif ($total>=50 && $total<55) {
              $gpa=2.50;
            }
            elseif ($total>=55 && $total<60) {
              $gpa=2.75;
            }
            elseif ($total>=60 && $total<65) {
              $gpa=3.00;
            }
            elseif ($total>=65 && $total<70) {
              $gpa=3.25;
            }
            elseif ($total>=70 && $total<75) {
              $gpa=3.50;
            }
            elseif ($total>=75 && $total<80) {
              $gpa=3.75;
            }
            elseif ($total>=80 ) {
              $gpa=4.00;
            }

            echo "$st_id ' ' $total ' ' $gpa";
         echo "<br>";
         $gpa_query_7="UPDATE grade_point_3
         set 	CSE_1102='$gpa' WHERE grade_point_3.st_id='$st_id' ";
         $send_gpa_7=mysqli_query($connection,$gpa_query_7);

}







// fundamental course
$query8="SELECT labperformance_marks_3.st_id,
          (labperformance_marks_3.CSE_1100+
           attendance_marks_3.CSE_1100+
           lab_quize_marks_3.CSE_1100+
           board_viva_marks_3.CSE_1100)
          AS total
          FROM
          labperformance_marks_3,
          lab_quize_marks_3,
          attendance_marks_3,
          board_viva_marks_3
          WHERE
          labperformance_marks_3.st_id=attendance_marks_3.st_id AND
          labperformance_marks_3.st_id=lab_quize_marks_3.st_id AND
          labperformance_marks_3.st_id=board_viva_marks_3.st_id AND

          lab_quize_marks_3.st_id=attendance_marks_3.st_id AND
          lab_quize_marks_3.st_id=board_viva_marks_3.st_id AND

          board_viva_marks_3.st_id=attendance_marks_3.st_id AND

          labperformance_marks_3.st_id  BETWEEN  $first_roll AND $last_roll";
           $send8=mysqli_query($connection,$query8);
          echo "<br>";
           while($row8=mysqli_fetch_array($send8))
           {

             $st_id=$row8['st_id'];
             $total=$row8['total'];
             $gpa=0;
             if($total<40)
             {
               $gpa=0;
             }
             elseif ($total>=40 && $total<45) {
               $gpa=2.00;
             }
             elseif ($total>=45 && $total<50) {
               $gpa=2.25;
             }
             elseif ($total>=50 && $total<55) {
               $gpa=2.50;
             }
             elseif ($total>=55 && $total<60) {
               $gpa=2.75;
             }
             elseif ($total>=60 && $total<65) {
               $gpa=3.00;
             }
             elseif ($total>=65 && $total<70) {
               $gpa=3.25;
             }
             elseif ($total>=70 && $total<75) {
               $gpa=3.50;
             }
             elseif ($total>=75 && $total<80) {
               $gpa=3.75;
             }
             elseif ($total>=80 ) {
               $gpa=4.00;
             }

             echo "$st_id ' ' $total ' ' $gpa";
          echo "<br>";
          $gpa_query_8="UPDATE grade_point_3
          set 	CSE_1100='$gpa' WHERE grade_point_3.st_id='$st_id' ";
          $send_gpa_8=mysqli_query($connection,$gpa_query_8);

}





           // electrical lab
$query9="SELECT labperformance_marks_3.st_id,
                     (labperformance_marks_3.EEE_1152+
                      attendance_marks_3.EEE_1152+
                      lab_quize_marks_3.EEE_1152+
                      board_viva_marks_3.EEE_1152)
                     AS total
                     FROM
                     labperformance_marks_3,
                     lab_quize_marks_3,
                     attendance_marks_3,
                     board_viva_marks_3
                     WHERE
                     labperformance_marks_3.st_id=attendance_marks_3.st_id AND
                     labperformance_marks_3.st_id=lab_quize_marks_3.st_id AND
                     labperformance_marks_3.st_id=board_viva_marks_3.st_id AND

                     lab_quize_marks_3.st_id=attendance_marks_3.st_id AND
                     lab_quize_marks_3.st_id=board_viva_marks_3.st_id AND

                     board_viva_marks_3.st_id=attendance_marks_3.st_id AND

                     labperformance_marks_3.st_id
                     BETWEEN  $first_roll AND $last_roll";
                      $send9=mysqli_query($connection,$query9);
                     echo "<br>";
                      while($row9=mysqli_fetch_array($send9))
                      {

                        $st_id=$row9['st_id'];
                        $total=$row9['total'];
                        $gpa=0;
                        if($total<40)
                        {
                          $gpa=0;
                        }
                        elseif ($total>=40 && $total<45) {
                          $gpa=2.00;
                        }
                        elseif ($total>=45 && $total<50) {
                          $gpa=2.25;
                        }
                        elseif ($total>=50 && $total<55) {
                          $gpa=2.50;
                        }
                        elseif ($total>=55 && $total<60) {
                          $gpa=2.75;
                        }
                        elseif ($total>=60 && $total<65) {
                          $gpa=3.00;
                        }
                        elseif ($total>=65 && $total<70) {
                          $gpa=3.25;
                        }
                        elseif ($total>=70 && $total<75) {
                          $gpa=3.50;
                        }
                        elseif ($total>=75 && $total<80) {
                          $gpa=3.75;
                        }
                        elseif ($total>=80 ) {
                          $gpa=4.00;
                        }

                        echo "$st_id ' ' $total ' ' $gpa";
                     echo "<br>";
                     $gpa_query_9="UPDATE grade_point_3
                     set 	EEE_1152='$gpa' WHERE grade_point_3.st_id='$st_id' ";
                     $send_gpa_9=mysqli_query($connection,$gpa_query_9);

}





    // english langugage lab
$query10="SELECT labperformance_marks_3.st_id,
          (labperformance_marks_3.Hum_1114+
          attendance_marks_3.Hum_1114+
    lab_quize_marks_3.Hum_1114+
    board_viva_marks_3.Hum_1114)
          AS total
      FROM
    labperformance_marks_3,
            lab_quize_marks_3,
  attendance_marks_3,
 board_viva_marks_3
 WHERE
 labperformance_marks_3.st_id=attendance_marks_3.st_id AND
 labperformance_marks_3.st_id=lab_quize_marks_3.st_id AND
 labperformance_marks_3.st_id=board_viva_marks_3.st_id AND

 lab_quize_marks_3.st_id=attendance_marks_3.st_id AND
 lab_quize_marks_3.st_id=board_viva_marks_3.st_id AND

 board_viva_marks_3.st_id=attendance_marks_3.st_id AND

 labperformance_marks_3.st_id
 BETWEEN  $first_roll AND $last_roll";
 $send10=mysqli_query($connection,$query10);
  echo "<br>";
 while($row10=mysqli_fetch_array($send10))
    {

 $st_id=$row10['st_id'];
 $total=$row10['total'];
          $gpa=0;
      if($total<40)
          {
        $gpa=0;
    }
  elseif ($total>=40 && $total<45) {
        $gpa=2.00;
  }
                elseif ($total>=45 && $total<50) {
      $gpa=2.25;
      }
    elseif ($total>=50 && $total<55) {
          $gpa=2.50;
      }
        elseif ($total>=55 && $total<60) {
              $gpa=2.75;
            }
        elseif ($total>=60 && $total<65) {
    $gpa=3.00;
          }
        elseif ($total>=65 && $total<70) {
      $gpa=3.25;
        }
    elseif ($total>=70 && $total<75) {
                  $gpa=3.50;
            }
    elseif ($total>=75 && $total<80) {
  $gpa=3.75;
        }
 elseif ($total>=80 ) {
    $gpa=4.00;
    }
    echo "$st_id ' ' $total ' ' $gpa";
  echo "<br>";
 $gpa_query_10="UPDATE grade_point_3
  set 	Hum_1114='$gpa' WHERE grade_point_3.st_id='$st_id' ";
  $send_gpa_10=mysqli_query($connection,$gpa_query_10);
}






                    // chemistry lab
$query11="SELECT labperformance_marks_3.st_id,
                          (labperformance_marks_3.Chem_1114+
                          attendance_marks_3.Chem_1114+
                    lab_quize_marks_3.Chem_1114+
                    board_viva_marks_3.Chem_1114)
                          AS total
                      FROM
                    labperformance_marks_3,
                            lab_quize_marks_3,
                    attendance_marks_3,
                    board_viva_marks_3
                    WHERE
                    labperformance_marks_3.st_id=attendance_marks_3.st_id AND
                    labperformance_marks_3.st_id=lab_quize_marks_3.st_id AND
                    labperformance_marks_3.st_id=board_viva_marks_3.st_id AND

                    lab_quize_marks_3.st_id=attendance_marks_3.st_id AND
                    lab_quize_marks_3.st_id=board_viva_marks_3.st_id AND

                    board_viva_marks_3.st_id=attendance_marks_3.st_id AND

                    labperformance_marks_3.st_id
                    BETWEEN  $first_roll AND $last_roll";
                    $send11=mysqli_query($connection,$query11);
                    echo "<br>";
                    while($row11=mysqli_fetch_array($send11))
                    {

                    $st_id=$row11['st_id'];
                    $total=$row11['total'];
                          $gpa=0;
                      if($total<40)
                          {
                        $gpa=0;
                    }
                    elseif ($total>=40 && $total<45) {
                        $gpa=2.00;
                    }
                                elseif ($total>=45 && $total<50) {
                      $gpa=2.25;
                      }
                    elseif ($total>=50 && $total<55) {
                          $gpa=2.50;
                      }
                        elseif ($total>=55 && $total<60) {
                              $gpa=2.75;
                            }
                        elseif ($total>=60 && $total<65) {
                    $gpa=3.00;
                          }
                        elseif ($total>=65 && $total<70) {
                      $gpa=3.25;
                        }
                    elseif ($total>=70 && $total<75) {
                                  $gpa=3.50;
                            }
                    elseif ($total>=75 && $total<80) {
                    $gpa=3.75;
                        }
                    elseif ($total>=80 ) {
                    $gpa=4.00;
                    }
                    echo "$st_id ' ' $total ' ' $gpa";
                    echo "<br>";
                    $gpa_query_11="UPDATE grade_point_3
                    set 	Chem_1114='$gpa' WHERE grade_point_3.st_id='$st_id' ";
                    $send_gpa_11=mysqli_query($connection,$gpa_query_11);
}



  //gp gpa and  cgpa calculating
 $result_query1="SELECT grade_point_3.st_id,
  grade_point_3.CSE_1100,grade_point_3.CSE_1101,
  grade_point_3.CSE_1102,grade_point_3.EEE_1151,
  grade_point_3.EEE_1152,grade_point_3.Hum_1113,
  grade_point_3.Hum_1114,grade_point_3.Chem_1113,
  grade_point_3.Chem_1114,grade_point_3.Math_1113,
  ((CSE_1100*1.50)+(CSE_1101*3.00)+

  (CSE_1102*1.50)+(EEE_1151*3.00)+(EEE_1152*.75)

  +(Hum_1113*3.00)+(Hum_1114*1.50)+(Chem_1113*3.00)

  +(Chem_1114*0.75))AS point FROM grade_point_3
  WHERE grade_point_3.st_id BETWEEN $first_roll AND $last_roll";
$send_result_query1=mysqli_query($connection,$result_query1);

$i=0;
 $st_id=array();
 $cg=array();
 $cse_1100=array();
  $cse_1101=array();
   $cse_1102=array();
   $eee_1151=array();
  $eee_1152=array();
   $Hum_1113=array();
  $Hum_1114=array();
  $Chem_1113=array();
  $Chem_1114=array();
  $eee_1151=array();
  $Math_1113=array();
  $earn_credit=array();
  $students_no=$last_roll-$first_roll;
  echo "students no : $students_no";
  for ($j=0; $j<=$students_no; $j++) {
  $earn_credit[$j]=0;
}
   echo "<br>";
while ($row_result_query=mysqli_fetch_array($send_result_query1)) {
   $st_id[$i]=$row_result_query['st_id'];
   $cg[$i]=$row_result_query['point'];
   $cse_1100[$i]=$row_result_query['CSE_1100'];
   $cse_1101[$i]=$row_result_query['CSE_1101'];
   $cse_1102[$i]=$row_result_query['CSE_1102'];
   $eee_1151[$i]=$row_result_query['EEE_1151'];
   $eee_1152[$i]=$row_result_query['EEE_1152'];
   $Math_1113[$i]=$row_result_query['Math_1113'];
   $Hum_1113[$i]=$row_result_query['Hum_1113'];
   $Hum_1114[$i]=$row_result_query['Hum_1114'];
   $Chem_1113[$i]=$row_result_query['Chem_1113'];
   $Chem_1114[$i]=$row_result_query['Chem_1114'];

   if($cse_1100[$i]!=0)
   {
     $earn_credit[$i]=$earn_credit[$i]+1.50;
   }
   if ($cse_1101[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+3.00;
   }
   if ($cse_1102[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+1.50;
   }
   if ($eee_1151[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+3.00;
   }
   if ($eee_1152[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+.75;
   }
   if ($Math_1113[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+3.00;
   }
   if ($Chem_1113[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+3.00;
   }
   if ($Chem_1114[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+.75;
   }
   if ($Hum_1113[$i]!=0) {

     $earn_credit[$i]=$earn_credit[$i]+3.00;
   }
   if ($Hum_1114[$i]!=0) {

     $earn_credit[$i]= $earn_credit[$i]+1.50;
   }

    echo "$st_id[$i] ' ' $cg[$i] ' ' $earn_credit[$i]<br>";
   $gpa_query_1="UPDATE result_3
  set gpa_1=($cg[$i]/$earn_credit[$i]),
  cgpa=($cg[$i]/$earn_credit[$i])
  WHERE result_3.st_id='$st_id[$i]'";
  $send_gpa_1=mysqli_query($connection,$gpa_query_1);

   $i=$i+1;
}





 }



}










header("Location:admin_p.php");






 ?>
