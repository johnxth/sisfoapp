<?php
// Author : Eksansilus
// 20 Oktober 2012

  session_start();
  include "db.mysql.php";
  include "connectdb.php";
  include "xth.lib.php";
  include "parameter.php";
  include "cekparam.php";
  $mdlid = GetSetVar('mdlid');
?>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<!-- ================ HEAD =============== -->
  <HEAD>
  <?php include "atribut/head.php"; ?>
    <?php
    if (!empty($_REQUEST['slnt'])) {
      include_once $_REQUEST['slnt'].'.php';
      $_REQUEST['slntx']();
    }
    if (isset($_REQUEST['GODONLOT'])) {
      $_meta = "<META HTTP-EQUIV=\"refresh\" content=\"1;
	  URL=http://localhost/fp/comcom$_REQUEST[GODONLOT]?f=$_REQUEST[f]\">";
      echo $_meta;
    }
	?></HEAD>
<!-- ================= BODY =============== -->
<BODY><p><?php
include "date.php";
include "atribut/session.php";
include "bodylink.php";
?></p></BODY></HTML>
