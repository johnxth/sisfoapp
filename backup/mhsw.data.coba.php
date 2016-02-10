<?php
$today = date("Y"); // Tahun Sekarang

echo "<table class=box cellspacing=1 cellpadding=1 align=center'>";
$kurang5 = $today-5; // 5 tahun sebelumnya
$kurang4 = $today-4;
$kurang3 = $today-3;
$kurang2 = $today-2;
$kurang1 = $today-1;
$kurang0 = $today-0;

$result = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang5'");
while($row=mysql_fetch_array($result))
{

echo "<tr>";
echo "<td bgcolor='#9BBB59' align='center' width= 20% >" . $row['COUNT(TahunID)'] . "</td>"; // Menampilkan Jumlah Mahasiswa 5 tahun sebelumnya
echo "</tr>";

}
echo "</table>"; 
?>  