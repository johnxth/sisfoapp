<?php
    echo "<tr align=center class=cna>";
      echo "<td bgcolor='#9BBB59'>TS-1 ($kurang1)</td>";
      echo "<td bgcolor='#8DB3E2'>&nbsp;</td>";
	  
	  $result1 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang1'");
	  while($row1r=mysql_fetch_array($result1))
	{
      echo "<td bgcolor='#DDD9C3'>"  . $row1r['COUNT(TahunID)'] .  "</td>";
	  }

	  $result1 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang1' AND Lulus = 'Y'");
	  while($row1r=mysql_fetch_array($result1))
	{
      echo "<td bgcolor='#8DB3E2'>"  . $row1r['COUNT(Lulus)'] .  "</td>";
	  }

	  $result1 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang1' AND Lulus = 'Y'");
	  while($row1r=mysql_fetch_array($result1))
	{
      echo "<td bgcolor='#E5B8B7'>"  . $row1r['COUNT(Lulus)'] .  "</td>";
	  }
	  
      echo "<td bgcolor='#E5B8B7'>&nbsp;</td>";
	  
	  $result1 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang1'");
	  while($row1r=mysql_fetch_array($result1))
	{
      echo "<td bgcolor='#D6E3BC'>" . $row1r['COUNT(TahunID)'] . "</td>";
	  }
      echo "<td bgcolor='#D6E3BC'>&nbsp;</td>";

	  $result1 = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang1'");
	  while($row1r=mysql_fetch_array($result1))
	  {
      echo "<td bgcolor='#B2A1C7'>" . $row1r['COUNT(TahunLulus)'] . "</td>";
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