<?php
    echo "<tr align=center class=cna>";

     echo "<td bgcolor='#9BBB59'>TS-5 ($kurang5)</td>";

	  $resultdy5 = "SELECT * FROM dayatampung WHERE Tahun = '$kurang5'";
	  $dy5r=mysql_query($resultdy5);
	{	  
     echo "<td bgcolor='#8DB3E2'>" . $dy5r['PRINT(Jumlah)'] . "</;</td>";
	 }
	  
	  $result5 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang5'");
	  while($row5r=mysql_fetch_array($result5))
	{
      echo "<td bgcolor='#DDD9C3' align=center class=>" . $row5r['COUNT(TahunID)'] . "</td>";
	  }

	  $result5 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang5' AND Lulus = 'Y'");
	  while($row5r=mysql_fetch_array($result5))
	{
      echo "<td bgcolor='#8DB3E2'>" . $row5r['COUNT(Lulus)'] . "</td>";
	  }
 
	  $result5 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang5' AND Lulus = 'Y'");
	  while($row5r=mysql_fetch_array($result5))
	{
      echo "<td bgcolor='#E5B8B7'>" . $row5r['COUNT(Lulus)'] . "</td>";
	  }
	  
      echo "<td bgcolor='#E5B8B7'>&nbsp;</td>";
	  
	  $result5 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang5'");
	  while($row5r=mysql_fetch_array($result5))
	{
      echo "<td bgcolor='#D6E3BC'>" . $row5r['COUNT(TahunID)'] . "</td>";
	  }
      echo "<td bgcolor='#D6E3BC'>&nbsp;</td>";

	  $result5 = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang5'");
	  while($row5r=mysql_fetch_array($result5))
	  {
      echo "<td bgcolor='#B2A1C7'>" . $row5r['COUNT(TahunLulus)'] . "</td>";
	  }
      echo "<td bgcolor='#B2A1C7'>&nbsp;</td>";
	  
	  // min rat maks ==============================================================================================
	  
	  $vary = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang5' AND IPK = 2.75");
	  while($resy=mysql_fetch_array($vary))
	  {
      echo "<td bgcolor='#FABF8F'>" . $resy['COUNT(TahunLulus)'] . "</td>";
	  }
	  
	  $vary = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang5' AND IPK = 3.25");
	  while($resy=mysql_fetch_array($vary))
	  {
      echo "<td bgcolor='#FABF8F'>" . $resy['COUNT(TahunLulus)'] . "</td>";
	  }
	  
	  $vary = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang5' AND IPK = 4.00");
	  while($resy=mysql_fetch_array($vary))
	  {
      echo "<td bgcolor='#FABF8F'>" . $resy['COUNT(TahunLulus)'] . "</td>";
	  }
	  
	  // select count less than, range, and greater than 5 years ago =================================================

      echo "<td bgcolor='#BFBFBF'>&nbsp;</td>";
      echo "<td bgcolor='#BFBFBF'>&nbsp;</td>";
      echo "<td bgcolor='#BFBFBF'>&nbsp;</td>";
    echo "</tr>";
?>