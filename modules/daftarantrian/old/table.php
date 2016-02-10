<?php
echo "<table cellpadding='0' cellspacing='0' width='100%' class='table'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th width='10%'>No</th>";
		echo "<th width='25%'>Nama</th>";
            echo "<th width='25%'>NIM</th>";
            echo "<th width='15%'>Permohonan</th>";
            echo "<th width='15%'>Keterangan</th>";
		echo "<th width='25%'>Cetak</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";			
		$result = mysql_query("SELECT * FROM antrian WHERE Printed = 'N' order by lastmodified"); 	
		while($row = mysql_fetch_array($result));
		{
	  echo "<tr>";
		echo "<td>$row[id]</td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['nim'] . "</td>";
		echo "<td>" . $row['kodjenis'] . "</td>";
		echo "<td>" . $row['ket'] . "</td>";
		echo "<td>";
		  echo "<form action='cetak.php' method='post' target='_parent'>";
			echo "<input type='hidden' name='cetak_id' value='$row[id]' />";
			echo "<input type='submit' value='Print' />";
		  echo "</form>";
		echo "</td>";
	  echo "</tr>";
		}
    echo "</tbody>";
echo "</table>";
?>