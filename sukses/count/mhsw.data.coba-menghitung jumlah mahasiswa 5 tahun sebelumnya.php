<?php
$today = date("Y"); // Tahun Sekarang
echo "<table bgcolor='#9BBB59' width= 10% class=bsc cellspacing=1 cellpadding=1 align=center'>";
$kurang = $today-5; // 5 tahun sebelumnya 

$result = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '$kurang'");
while($row=mysql_fetch_array($result))
{

echo "<tr>";
echo "<td align='center' width='200'>$kurang</td>"; // Menampilkan Tahun 5 Tahun sebelumnya
echo "</tr>";

echo "<tr>";
echo "<td align='center' width='200'>$today</td>"; // Menampilkan Tahun sekarang
echo "</tr>";

echo "<tr>";
echo "<td align='center' width='200'>" . $row['COUNT(TahunID)'] . "</td>"; // Menampilkan Jumlah Mahasiswa 5 tahun sebelumnya
echo "</tr>";

}
echo "</table>"; 
?>  