<?php
// Author: Emanuel Setio Dewo
// 16 Feb 2006

// *** Functions ***

function DaftarMhsw() {
  // setup where-statement

  // Tampilkan
  echo "<script>window.location = '?mnux=modules/me.mhsw.edt&gos=MhswEdt&mhswid=$_SESSION[_Login]';</script>";
}


// *** Parameters ***
$mhswpage = GetSetVar('mhswpage', 1);
$_srcmhswkey = GetSetVar('srcmhswkey');
$_srcmhswval = GetSetVar('srcmhswval');

$prodi = GetSetVar('prodi');
$prid = GetSetVar('prid');
$gos = (empty($_REQUEST['gos']))? 'DaftarMhsw' : $_REQUEST['gos'];

// *** Main ***
$gos();
?>
