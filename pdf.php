<?php

require_once("config.php");
require("fpdf/fpdf.php");
$pdf= new FPDF();
$pdf->Addpage();

  $pdf->output();
 ?>
