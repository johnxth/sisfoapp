<?php
 // Author: Eksansilus
  
function Tampilkan() {

  $tampil = "SELECT COUNT(TahunID) AS NumberOfmhsw FROM mhsw WHERE TahunID = '1999'";
  
  $result = mysql_query($tampil);


  echo "<table bgcolor='#9BBB59' width= 10% class=bsc cellspacing=1 cellpadding=1 align=center>";
  echo "<tr>";
  echo "<td class=bsc align=center valign=top width=100>
  
  <td  border=0 > $result </td>";
  
  echo "</tr></table>";
 }
 
// *** Parameter ***
$datamhsw = (!empty($_REQUEST['datamhsw']))? $_REQUEST['datamhsw'] : 'Tampilkan';
$_SESSION['datamhsw'] = $datamhsw;
$datamhsw();
?>