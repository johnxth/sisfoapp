<?php
// Author : Eksansilus
// Included from session.php

echo "<div id='floating_menubar' style='position: fixed; top: 0px; left: 0px; width: 100%; z-index: 500;'>
	<div style='width: 100%; height: 50px; background: #3b5998;'></div> 
	<div class=Blank><img src=images/blank.png></div>
	<div class=Blank><img src=images/blank.png></div>
	<div class=Logo><img src=images/logosisfo.png></div>
	<div class=Blank><img src=images/blank.png></div>";
	// echo "<div class=IconLogin><img src='$_SESSION[_Icon]'></div>";

echo "<div class=NamaLogin>

<table class='NamaLogin-tabel' border='0'>
  <tr>
	<!-- <td rowspan='2'>HOME</td> -->
    <td rowspan='2'><img src='$_SESSION[_Icon]'></td>
	<td><b>$_SESSION[_Nama]</b></td>
	<td>&nbsp;</td>
	<td rowspan='2'><input type=button class='btn light' name='Keluar' value='Keluar' onClick=\"location='?mnux=&slnt=loginprc&slntx=lout'\"></td>
  </tr>
  
  <tr>
    <td  valign='top'>($NamaLevel)</td>
  </tr>

</table></div>";
?>