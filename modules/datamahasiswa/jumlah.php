<?php
    echo "<tr align=center class=cna>";
      echo "<td bgcolor='#9BBB59'>Jumlah</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
	  
	  $result5 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang5'");
	  while($row5r=mysql_fetch_array($result5))
	  $jum5 = $row5r['COUNT(TahunID)'];
	  
	  $result4 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang4'");
	  while($row4r=mysql_fetch_array($result4))
	  $jum4 = $row4r['COUNT(TahunID)'];

	  $result3 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang3'");
	  while($row3r=mysql_fetch_array($result3))
	  $jum3 = $row3r['COUNT(TahunID)'];
	  
	  $result2 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang2'");
	  while($row2r=mysql_fetch_array($result2))
	  $jum2 = $row2r['COUNT(TahunID)'];
	  
	  $result1 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang1'");
	  while($row1r=mysql_fetch_array($result1))
	  $jum1 = $row1r['COUNT(TahunID)'];
	  
	  $result0 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang0'");
	  while($row0r=mysql_fetch_array($result0))
	  $jum0 = $row0r['COUNT(TahunID)'];
	  
	  $jumcalon = $jum5+$jum4+$jum3+$jum2+$jum1+$jum0;
	  {
      echo "<td bgcolor='#9BBB59'>$jumcalon</td>";
	  }

	  $result5 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang5' AND Lulus = 'Y'");
	  while($row5r=mysql_fetch_array($result5))
	  $jum5l = $row5r['COUNT(Lulus)'];
	  
	  $result4 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang4' AND Lulus = 'Y'");
	  while($row4r=mysql_fetch_array($result4))
	  $jum4l = $row4r['COUNT(Lulus)'];

	  $result3 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang3' AND Lulus = 'Y'");
	  while($row3r=mysql_fetch_array($result3))
	  $jum3l = $row3r['COUNT(Lulus)'];
	  
	  $result2 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang2' AND Lulus = 'Y'");
	  while($row2r=mysql_fetch_array($result2))
	  $jum2l = $row2r['COUNT(Lulus)'];
	  
	  $result1 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang1' AND Lulus = 'Y'");
	  while($row1r=mysql_fetch_array($result1))
	  $jum1l = $row1r['COUNT(Lulus)'];
	  
	  $result0 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang0' AND Lulus = 'Y'");
	  while($row0r=mysql_fetch_array($result0))
	  $jum0l = $row0r['COUNT(Lulus)'];
	  
	  $jumlulus = $jum5l+$jum4l+$jum3l+$jum2l+$jum1l+$jum0l;

      echo "<td bgcolor='#9BBB59'>$jumlulus</td>";
      echo "<td bgcolor='#9BBB59'>$jumlulus</td>";

	  // Transfer -----------------------------------------------------------------
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
	  
	  $result5 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang5'");
	  while($row5r=mysql_fetch_array($result5))
	  $jum5 = $row5r['COUNT(TahunID)'];
	  
	  $result4 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang4'");
	  while($row4r=mysql_fetch_array($result4))
	  $jum4 = $row4r['COUNT(TahunID)'];
	  
	  $result3 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang3'");
	  while($row3r=mysql_fetch_array($result3))
	  $jum3 = $row3r['COUNT(TahunID)'];
	  
	  $result2 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang2'");
	  while($row2r=mysql_fetch_array($result2))
	  $jum2 = $row2r['COUNT(TahunID)'];
	  
	  $result1 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang1'");
	  while($row1r=mysql_fetch_array($result1))
	  $jum1 = $row1r['COUNT(TahunID)'];
	  
	  $result0 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang0'");
	  while($row0r=mysql_fetch_array($result0))
	  $jum0 = $row0r['COUNT(TahunID)'];
	  
	  $jumall = $jum5+$jum4+$jum3+$jum2+$jum1+$jum0;
	  {
      echo "<td bgcolor='#9BBB59'>$jumall</td>";
	  }
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
      echo "<td bgcolor='#9BBB59'>&nbsp;</td>";
    echo "</tr>";
?>