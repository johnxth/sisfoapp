<?php
// Author: Emanuel Setio Dewo
// 20 July 2006
// www.sisfokampus.net

// *** functions ***

function DaftarDosen($mnux='', $lnk='', $fields='') {
  global $_defmaxrow, $_FKartuUSM;
$lnk = "gos=DsnEdt&md=0&dsnid=$_SESSION[_Login]";  
  echo "<script>window.location = '?mnux=$mnux&$lnk';</script>";
  //echo $lst->TampilkanData();

}
?>
