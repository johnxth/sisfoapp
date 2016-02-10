<?php
// Author: Emanuel Setio Dewo
// 25 May 2006
// Kenaikan Yesus Kristus ke Surga
// Damai dan sejahtera beserta kita semua

function HeaderSisfoKampus($title='') {
  include "db.mysql.php";
  include "connectdb.php";
  include "xth.lib.php";
  echo "<HTML xmlns=\"http://www.w3.org/1999/xhtml\">
  <HEAD><TITLE>$title</TITLE>
  <META content=\"Eksansilus\" name=\"author\">
  <META content=\"Sisfo JPTE UPI\" name=\"description\">
  <link href=\"index.css\" rel=\"stylesheet\" type=\"text/css\">
  ";
}
?>
