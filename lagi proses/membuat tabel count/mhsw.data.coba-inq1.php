<?php
// Author: Emanuel Setio Dewo
// 12 April 2006
include_once "carimhswx.php";

// *** Functions ***
function DaftarMhsw1() {
  DaftarMhsw("mhsw.data");
}


// *** Parameters ***
$mhswid = GetSetVar('mhswid');
$dataMhswPage = GetSetVar('dataMhswPage');
$crmhswkey = GetSetVar('crmhswkey');
$crmhswval = GetSetVar('crmhswval');
if (isset($_REQUEST['crmhswkey'])) {
  $dataMhswPage = 1;
  $_SESSION['dataMhswPage'] = $dataMhswPage;
}

// *** Main ***
TampilkanJudul("Data Mahasiswa");
if ($_SESSION['_LevelID'] == 0) {
  $crmhswkey = "NIM";
  $crmhswval = $_SESSION['_Login'];
  $_SESSION['crmhswval'] = $crmhswval;
  $_SESSION['mhswid'] = $crmhswval;
  echo "<script>window.location = '?mnux=mhsw.data&mhswid=$crmhswval';</script>";
}

?>
