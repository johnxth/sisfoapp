<?php
// Author: Emanuel Setio Dewo
// 12 April 2006
include_once "modules/common/carimhsw.php";

// *** Functions ***
function DaftarMhsw1() {
  DaftarMhsw('modules/mhsw.inq.det', "modules/mhsw.inq");
}


// *** Parameters ***
$mhswid = GetSetVar('mhswid');
$inqMhswPage = GetSetVar('inqMhswPage');
$crmhswkey = GetSetVar('crmhswkey');
$crmhswval = GetSetVar('crmhswval');
if (isset($_REQUEST['crmhswkey'])) {
  $inqMhswPage = 1;
  $_SESSION['inqMhswPage'] = $inqMhswPage;
}
 $gos = (empty($_REQUEST['gos']))? 'DaftarMhsw1' : $_REQUEST['gos'];


// *** Main ***
TampilkanJudul("<div class='page-header'><h1>Inquiry Mahasiswa <small>Administrasi Akademik JPTE</small></h1></div>");
if ($_SESSION['_LevelID'] == 3) {
  $crmhswkey = "NIM";
  $crmhswval = $_SESSION['_Login'];
  $_SESSION['crmhswval'] = $crmhswval;
  $_SESSION['mhswid'] = $crmhswval;
  echo "<script>window.location = '?mnux=mhsw.inq.det&mhswid=$crmhswval';</script>";
}
else {
  CariMhsw('mhsw.inq', 'mhsw.inq');
  $gos('mhsw.inq');
}
?>
