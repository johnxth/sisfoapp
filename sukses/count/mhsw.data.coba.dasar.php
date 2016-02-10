<?php
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";

$result = mysql_query("SELECT COUNT(TahunID) FROM mhsw WHERE TahunID = '1999'");
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td align='center' width='200'>" . $row['COUNT(TahunID)'] . "</td>";
echo "</tr>";
}
echo "</table>"; 
?>  