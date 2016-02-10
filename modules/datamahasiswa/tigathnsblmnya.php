<?php
    echo "<tr align=center class=cna>";
      echo "<td bgcolor='#9BBB59'>TS-3 ($kurang3)</td>";
      echo "<td bgcolor='#8DB3E2'>&nbsp;</td>";
	  
	  $result3 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang3'");
	  while($row3r=mysql_fetch_array($result3))
	{
      echo "<td bgcolor='#DDD9C3'>"  . $row3r['COUNT(TahunID)'] .  "</td>";
	  }

	  $result3 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang3' AND Lulus = 'Y'");
	  while($row3r=mysql_fetch_array($result3))
	{
      echo "<td bgcolor='#8DB3E2'>"  . $row3r['COUNT(Lulus)'] .  "</td>";
	  }

	  $result3 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang3' AND Lulus = 'Y'");
	  while($row3r=mysql_fetch_array($result3))
	{
      echo "<td bgcolor='#E5B8B7'>"  . $row3r['COUNT(Lulus)'] .  "</td>";
	  }
	  
      echo "<td bgcolor='#E5B8B7'>&nbsp;</td>";
	  
	  $result3 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang3'");
	  while($row3r=mysql_fetch_array($result3))
	{
      echo "<td bgcolor='#D6E3BC'>" . $row3r['COUNT(TahunID)'] . "</td>";
	  }
      echo "<td bgcolor='#D6E3BC'>&nbsp;</td>";

	  $result3 = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang3'");
	  while($row3r=mysql_fetch_array($result3))
	  {
      echo "<td bgcolor='#B2A1C7'>" . $row3r['COUNT(TahunLulus)'] . "</td>";
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