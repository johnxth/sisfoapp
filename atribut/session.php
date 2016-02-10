
<?php
    if (!empty($_SESSION['_Session'])) {
      $NamaLevel = GetaField('level', 'LevelID', $_SESSION['_LevelID'], 'Nama'); // 'level' pd script ini tidak pengaruh
	  include 'bluebar.php';
	   // echo "<div class=NamaLogin><b>$_SESSION[_Nama]</b> ($NamaLevel) » <a href='?mnux=&slnt=loginprc&slntx=lout'>Logout</a></div>";	  
		  if (empty($_REQUEST['BypassMenu'])) 
		  include "menusis.php";  
      if (!empty($_SESSION['mdlid'])) {
        $_strMDLID = GetaField('mdl', "MdlID", $_SESSION['mdlid'], "concat(MdlGrpID, ' » ', Nama)");
        // echo "<div class=MenuDirectory>Menu: $_strMDLID</div>";
      }
	  echo "</div>";
	  include "sidebarlink.php";
	  // include "bodylink.php";
    }
?>