<?php
  // Author: Eksansilus
  // Start: 2013-12-04


  
function frm(){

  ResetLogin();
  global $arrID;
  
     echo "<div id='floating_menubar' style='position: fixed; top: 0px; left: 0px; width: 100%; z-index: 500;'>";
	echo "<div class='signup'>";
		include 'modules/signup.mhsw.dosen.php';
	echo "</div>";
	echo "</div>";
  
  $pilihlogin = GetOption2('level', "concat(LevelID, ' - ', Nama)", 'LevelID', $arrID['Nama'], '', 'Nama');
  
 // $insert = '?mnux=login&lgn=frm&lid=1&nme=Admin';
 
 echo "<div id='floating_menubar' style='position: fixed; top: 0px; left: 0px; width: 100%; z-index: 500;'>
 <div style='width: 100%; height: 85px; background: #3b5998;'></div> 
 <div class=Logologin><img src=images/logosisfo.png></div>";
 
 $isifrm = "<table class='tabellogin' width='480' border='0' align='center'>
	<form name='form1' method='post' ACTION='validasi.php'>
	<tr><td width='100'>Login (NIM/NIP)</td>
		<td width='5'>&nbsp;</td>
		<td width='100'>Password</td>
		<td width='5'>&nbsp;</td>
		<td width='100'>Level</td>
		<td width='5'>&nbsp;</td>
		<td width='67'>&nbsp;</td></tr>
	<tr>
		<td><input type=text name='Login' value='' size=17 maxlength=20></td>
		<td>&nbsp;</td>
		<td><input type=password name='Password' value='' size=17 maxlength=20></td>
		<td>&nbsp;</td>
		<td><select name=pilihloginanda>$pilihlogin</select></td>
		<td>&nbsp;</td>
		<td><input type=submit class='btn light' name='Masuk' value='Masuk'></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan='3'>Lupa Password?</td>
	</tr></table>";
  
//  $isifrm = "<table class=bsc cellspacing=0 cellpadding=4>
//  
//  <form name='form1' method='post' ACTION='loginproses.php'>
//
//  <tr>
//  <td class=ul>Login Sebagai :</td>
//  <td class=ul><select name=pilihloginanda>$pilihlogin</select>
//  </td>
//  </tr>
//  
//  <tr><td class=ul>Kode Login</td><td class=ul><input type=text name='Login' value='' size=17 maxlength=20></td></tr>
//  <tr><td class=ul>Password</td><td class=ul><input type=password name='Password' value='' size=17 maxlength=20></td></tr>
//  <tr>
//  <td class=ul></td>
//  <td colspan=3>
//  <input type=submit name='Masuk' value='Masuk'>
//  </td>
//  </tr>
//  </form>
//  </table>";

  echo Konfirmasi2("Form Login SisfoJPTE", $isifrm);
  // echo Konfirmasi("Form Login SisfoJPTE", $isifrm);
}

// *** Parameter ***
$lgn = (!empty($_REQUEST['lgn']))? $_REQUEST['lgn'] : 'frm';
$_SESSION['lgn'] = $lgn;
$lgn();?>