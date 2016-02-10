<?php
// Author: Eksansilus
// 11 Maret 2014
function DaftarMhsw($mnux, $lnk='', $keluar=0) {
  echo "<script>window.location = '?mnux=$mnux&mhswid=$_SESSION[_Login]&$lnk';</script>";
}?>