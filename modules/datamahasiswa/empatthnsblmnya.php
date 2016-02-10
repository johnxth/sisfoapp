<?php
    echo "<tr  align=center class=cna>";
      echo "<td bgcolor='#9BBB59'>TS-4 ($kurang4)</td>";
	  
	  $resultdy4 = "SELECT * FROM dayatampung WHERE Tahun = '$kurang4'";
	  $dy4r = mysql_query($resultdy4);
	  
	  $tampil4 = $dy4r['Jumlah'];
	{	  
     echo "<td bgcolor='#8DB3E2'>$tampil4</td>";
	 }
	  
	  $result4 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang4'");
	  while($row4r=mysql_fetch_array($result4))
	{
      echo "<td bgcolor='#DDD9C3'>"  . $row4r['COUNT(TahunID)'] .  "</td>";
	  }

	  $result4 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang4' AND Lulus = 'Y'");
	  while($row4r=mysql_fetch_array($result4))
	{
      echo "<td bgcolor='#8DB3E2'>"  . $row4r['COUNT(Lulus)'] .  "</td>";
	  }

	  $result4 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang4' AND Lulus = 'Y'");
	  while($row4r=mysql_fetch_array($result4))
	{
      echo "<td bgcolor='#E5B8B7'>"  . $row4r['COUNT(Lulus)'] .  "</td>";
	  }
	  
      echo "<td bgcolor='#E5B8B7'>&nbsp;</td>";
	  
	  $result4 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang4'");
	  while($row4r=mysql_fetch_array($result4))
	{
      echo "<td bgcolor='#D6E3BC'>" . $row4r['COUNT(TahunID)'] . "</td>";
	  }
      echo "<td bgcolor='#D6E3BC'>&nbsp;</td>";

	  $result4 = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang4'");
	  while($row4r=mysql_fetch_array($result4))
	  {
      echo "<td bgcolor='#B2A1C7'>" . $row4r['COUNT(TahunLulus)'] . "</td>";
	  }
      echo "<td bgcolor='#B2A1C7'>&nbsp;</td>";
      echo "<td bgcolor='#FABF8F'>&nbsp;</td>";
      echo "<td bgcolor='#FABF8F'>&nbsp;</td>";
      echo "<td bgcolor='#FABF8F'>&nbsp;</td>";
      echo "<td bgcolor='#BFBFBF'>&nbsp;</td>";
      echo "<td bgcolor='#BFBFBF'>&nbsp;</td>";
      echo "<td bgcolor='#BFBFBF'>&nbsp;</td>";
    echo "</tr>";
?>