<?php
// Author: Emanuel Setio Dewo
// 12 April 2006
include_once "modules/mhsw.dataku.carimhsw.php";

// *** Functions ***
function DaftarMhsw1() {
  DaftarMhsw('modules/mhsw.dataku.det', "modules/mhsw.dataku");
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
 $gos = (empty($_REQUEST['gos']))? 'DaftarMhsw1' : $_REQUEST['gos'];


// *** Main ***
if ($_SESSION['_LevelID'] == 4) {
  $crmhswkey = "NIM";
  $crmhswval = $_SESSION['_Login'];
  $_SESSION['crmhswval'] = $crmhswval;
  $_SESSION['mhswid'] = $crmhswval;
  echo "<script>window.location = '?mnux=modules/mhsw.dataku.det&mhswid=$crmhswval';</script>";
}
else {
//  CariMhsw('mhsw.dataku', 'mhsw.dataku');
  $gos('modules/mhsw.dataku');
}
?>
