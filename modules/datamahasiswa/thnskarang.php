<?php
    echo "<tr align=center class=cna>";
      echo "<td bgcolor='#9BBB59'>TS ($kurang0)</td>";
      echo "<td bgcolor='#8DB3E2'>&nbsp;</td>";
	  
	  $result0 = mysql_query("SELECT COUNT(TahunID) FROM calonmhsw WHERE TahunID = '$kurang0'");
	  while($row0r=mysql_fetch_array($result0))
	{
      echo "<td bgcolor='#DDD9C3'>"  . $row0r['COUNT(TahunID)'] .  "</td>";
	  }

	  $result0 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang0' AND Lulus = 'Y'");
	  while($row0r=mysql_fetch_array($result0))
	{
      echo "<td bgcolor='#8DB3E2'>"  . $row0r['COUNT(Lulus)'] .  "</td>";
	  }

	  $result0 = mysql_query("SELECT COUNT(Lulus) FROM calonmhsw WHERE TahunID = '$kurang0' AND Lulus = 'Y'");
	  while($row0r=mysql_fetch_array($result0))
	{
      echo "<td bgcolor='#E5B8B7'>"  . $row0r['COUNT(Lulus)'] .  "</td>";
	  }
	  
      echo "<td bgcolor='#E5B8B7'>&nbsp;</td>";
	  
	  $result0 = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang0'");
	  while($row0r=mysql_fetch_array($result0))
	{
      echo "<td bgcolor='#D6E3BC'>" . $row0r['COUNT(TahunID)'] . "</td>";
	  }
      echo "<td bgcolor='#D6E3BC'>&nbsp;</td>";
	  
	  $result0 = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0'");
	  while($row0r=mysql_fetch_array($result0))
	  {
      echo "<td bgcolor='#B2A1C7'>" . $row0r['COUNT(TahunLulus)'] . "</td>";
	  }
      echo "<td bgcolor='#B2A1C7'>&nbsp;</td>";
      echo "<td bgcolor='#FABF8F'>&nbsp;</td>";
      echo "<td bgcolor='#FABF8F'>&nbsp;</td>";
      echo "<td bgcolor='#FABF8F'>&nbsp;</td>";
	  // select count less than, range, and greater than this year
	  // <2.75
	  
	  // $varx = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0'");
	  // while($resx=mysql_fetch_array($varx))
	  // $hitungx = $resx['COUNT(TahunLulus)'];  
	  
	  // $vary = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0' AND IPK < 2.75");
	  // while($resy=mysql_fetch_array($vary))
	  // $hitungy = $resy['COUNT(TahunLulus)'];
		
	  // ori $persen=($hitungy/$hitungx)*100;
	  $persen= 'in progress';
	  {
      echo "<td bgcolor='#BFBFBF'>$persen</td>";
	  // ori echo "<td bgcolor='#BFBFBF'>$persen%</td>";
	  }

	  // 2.75 sampai dengan 3.50
	  
	  // $varx = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0'");
	  // while($resx=mysql_fetch_array($varx))
	  // $hitungx = $resx['COUNT(TahunLulus)'];
	  
	  // $vary = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0' AND IPK BETWEEN 2.75 AND 3.50");
	  // while($resy=mysql_fetch_array($vary))
	  // $hitungy = $resy['COUNT(TahunLulus)'];

	  // ori $persen=($hitungy/$hitungx)*100;
	  $persen='in progress';
	  {
      echo "<td bgcolor='#BFBFBF'>$persen</td>";
	  // ori echo "<td bgcolor='#BFBFBF'>$persen%</td>";
	  }  

	  // >3.50
	  
	  // $varx = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0'");
	  // while($resx=mysql_fetch_array($varx))
	  // $hitungx = $resx['COUNT(TahunLulus)'];
	  
	  // $vary = mysql_query("SELECT COUNT(TahunLulus) FROM mhsw WHERE TahunLulus = '$kurang0' AND IPK > 3.50");
	  // while($resy=mysql_fetch_array($vary))
	  // $hitungy = $resy['COUNT(TahunLulus)'];

	  // ori $persen=($hitungy/$hitungx)*100;
	  $persen='in prograss';

	  {
      echo "<td bgcolor='#BFBFBF'>$persen</td>";
	  // ori echo "<td bgcolor='#BFBFBF'>$persen%</td>";
	  }
    echo "</tr>";
?>