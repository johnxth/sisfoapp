<?php
//
//
//


	global $arrID;
    $w = array();
    $w['Login'] = '';
    $w['Nama'] = '';
    $w['Password'] = '';
	// ------------------------------------
    //$w['LevelID'] = '';
    //$w['Telephone'] = '012345678912';
    //$w['Handphone'] = '012345678912';
    //$w['Email'] = 'someone@invalid.com';
    //$w['Alamat'] = 'Jl. Contoh Alamat No.1';
    //$w['Kota'] = 'Bandung';
    //$w['Propinsi'] = 'Jawa Barat';
    //$w['Negara'] = 'Indonesia';
    //$w['ProdiID'] = 'PTE';
    //$w['NA'] = 'N';
    // $jdl = "Sign Up $TabelUser[Nama]";
	$jdl = "Sign Up";
    //$strlogin = "<input type=text name='Login' value='' size=30 maxlength=20>";
 
  //$na = 'N';
  //$cb_prodi = 'EL';
  //$c1 = 'class=inp1'; $c2 = 'class=ul';
  $w['pilihlevel'] = GetOption2('signup', "concat(LevelID, ' - ', Nama)", 'LevelID', $arrID['Nama'], '', 'Nama');
  
  // tampilkan
  echo "<p><table class=box cellspacing=1 cellpadding=4>
  <form action='modules/UsrSav.php' method='POST'>
  <tr><th class=ttl colspan=2>$jdl</th></tr>
 
  <tr><td>NIM/NIP</td><td><input type=text name='Login' value='$w[Login]' size=30 maxlength=20></td></tr>
  <tr><td>Nama</td><td><input type=text name='Nama' value='$w[Nama]' size=40 maxlength=50></td></tr>
  <tr><td>Password</td><td><input type=password name='Password' value='$w[Password]' size=20 maxlength=10></td></tr>	
  <tr><td class=ul>Level</td><td class=ul><select name='Level'>$w[pilihlevel]</select></td></tr>
  <tr><td>&nbsp;</td><td colspan=2><input class='btn light' type=submit name='Simpan' value='Sign Up'>
  </form></table></p>";
  
  

  
?>