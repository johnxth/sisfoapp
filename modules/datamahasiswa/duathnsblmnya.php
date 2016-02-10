<?php
    echo "<tr align=center class=cna>";
      echo "<td bgcolor='#9BBB59'>TS-2 ($kurang2)</td>";
      echo "<td bgcolor='#8DB3E2'>&nbsp;</td>";
	  
	  $result2 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang2'");
	  while($row2r=mysql_fetch_array($result2))
	{
      echo "<td bgcolor='#DDD9C3'>"  . $row2r['COUNT(TahunID)'] .  "</td>";
	  }

	  $result2 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang2' AND Lulus = 'Y'");
	  while($row2r=mysql_fetch_array($result2))
	{
      echo "<td bgcolor='#8DB3E2'>"  . $row2r['COUNT(Lulus)'] .  "</td>";
	  }

	  $result2 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang2' AND Lulus = 'Y'");
	  while($row2r=mysql_fetch_array($result2))
	{
      echo "<td bgcolor='#E5B8B7'>"  . $row2r['COUNT(Lulus)'] .  "</td>";
	  }
	  
      echo "<td bgcolor='#E5B8B7'>&nbsp;</td>";
	  
	  $result2 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang2'");
	  while($row2r=mysql_fetch_array($result2))
	{
      echo "<td bgcolor='#D6E3BC'>" . $row2r['COUNT(TahunID)'] . "</td>";
	  }
      echo "<td bgcolor='#D6E3BC'>&nbsp;</td>";

	  $result2 = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang2'");
	  while($row2r=mysql_fetch_array($result2))
	  {
      echo "<td bgcolor='#B2A1C7'>" . $row2r['COUNT(TahunLulus)'] . "</td>";
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