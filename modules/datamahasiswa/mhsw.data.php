<?php
include 'modules/datamahasiswa/tahunconfig.php';
echo "<table class=box cellspacing=1 cellpadding=1 align=center'>";
	echo "<tbody>";
		include 'modules/datamahasiswa/tablehead.php';
		include 'modules/datamahasiswa/limathnsblmnya.php';
		include 'modules/datamahasiswa/empatthnsblmnya.php';
		include 'modules/datamahasiswa/tigathnsblmnya.php';
		include 'modules/datamahasiswa/duathnsblmnya.php';
		include 'modules/datamahasiswa/satuthnsblmnya.php';
		include 'modules/datamahasiswa/thnskarang.php';
		include 'modules/datamahasiswa/jumlah.php';
	echo"</tbody>";
echo "</table>"; 
?>  