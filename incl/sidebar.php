<?php

if ($_SESSION['_LevelID'] == '4'){include "incl/sidebar.mhsw.php";}
if ($_SESSION['_LevelID'] == '2'){include "incl/sidebar.dosen.php";}
else {include "incl/sidebarx.php";}

?>