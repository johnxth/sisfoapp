<?php
function selesai () {
DaftarUsr();
if ($_REQUEST['lid'] == '2'){ $siapa='Dosen'; $serahkan='dengan cara lapor'; $bahwa='bahwa anda telah membuat ID di sisfo JPTE';}
if ($_REQUEST['lid'] == '4'){ $siapa='Mahasiswa'; $serahkan='dengan cara menyerahkan fotocopy KTM'; $bahwa='sebagai bukti bahwa anda benar benar $siapa Elektro';}

  echo "<p><table class=box cellspacing=1 cellpadding=4 width=350>
  <tr><th class=ttl colspan=2>Berhasil</th></tr>
  <tr><td> Anda telah masuk ke <b>daftar antrian ID</b>, ID anda akan aktif setelah anda mengkonfirmasi nya $serahkan ke bagian Tatausaha $bahwa </td></tr>
  </table></p>";
}

function DaftarUsr() {
	global $arrID;
    $w = array();
    $w['Login'] = '';
    $w['Nama'] = '';
	$w['Password'] = '';
	$w['pilihlevel'] = GetOption2('signup', "concat(LevelID, ' - ', Nama)", 'LevelID', $arrID['Nama'], '', 'Nama');
	$judul = "Belum Punya ID? Buat Disini";
    $cb_prodi = 'EL';
 
  // tampilkan
  echo "<p><table class=box cellspacing=1 cellpadding=4>
  <form action='?' method=POST>
  <input type=hidden name='mnux' value='modules/signup.mhsw.dosen'>
  <input type=hidden name='gos' value='UsrSav'>

  <tr><th class=ttl colspan=2>$judul</th></tr>
  <tr><td>NIM/NIP</td><td><input type=text name='Login' value='' size=30 maxlength=20></td></tr>
  <tr><td>Nama</td><td><input type=text name='Nama' value='$w[Nama]' size=40 maxlength=50></td></tr>
  <tr><td>Password</td><td><input type=password name='Password' value='$w[Password]' size=20 maxlength=10></td></tr>
  <tr><td class=ul>Level</td><td class=ul><select name='LevelID'>$w[pilihlevel]</select></td></tr>
  <tr><td>&nbsp;</td><td colspan=2><input class='btn light' type=submit name='Simpan' value='Sign Up'>
  </form></table></p>";
}
function UsrSav() {
  //$md = $_REQUEST['md']+0;
  if ($_REQUEST['LevelID'] == 'Dosen')		{ $lvlid = '2'; }
  if ($_REQUEST['LevelID'] == 'Mahasiswa')	{ $lvlid = '4'; }
  $_REQUEST['lid'] = $lvlid;
  
  $TabelUser = GetFields('level', 'LevelID', $_REQUEST['lid'], 'Nama, TabelAntrianID');
  $Login = $_REQUEST['Login'];
  $Nama = sqling($_REQUEST['Nama']);
  $Password = $_REQUEST['Password'];

  $b = array();
  $b['Telephone'] = '0123456789012';
  $b['Handphone'] = '0123456789012';
  $b['Email'] = 'nobody@invalid.com';
  $b['Alamat'] = 'Jl. Contoh Alamat No.1';
  $b['Kota'] = 'Bandung';
  $b['Propinsi'] = 'Jawa Barat';
  $b['Negara'] = 'Indonesia';
  $b['ProdiID'] = 'PTE';
  $b['NA'] = 'N';
  
  if ($_REQUEST['lid'] == '2'){

    $ada = GetFields($TabelUser['TabelAntrianID'], 'Login', $Login, 'Login, Nama');
    if (empty($ada)) {
      $s = "insert into $TabelUser[TabelAntrianID] (Login, KodeID, LevelID, Nama, Password, Telephone, Handphone, Email, 
        Alamat, Kota, Propinsi, Negara, ProdiID, NA)
        values('$Login', '$_SESSION[KodeID]', '$_REQUEST[lid]', '$Nama', PASSWORD('$Password'), '$b[Telephone]', '$b[Handphone]', '$b[Email]',
        '$b[Alamat]', '$b[Kota]', '$b[Propinsi]', '$b[Negara]', '$b[ProdiID]', '$b[NA]')";
      _query($s);
	  
	     selesai();
    }
    else echo ErrorMsg('Gagal Simpan', "Kode Login: <b>$Login</b> telah dipakai oleh user: <b>$ada[Nama]</b>.<br>
      Gunakan Kode Login yang lain.").'<br>';
   }

  if ($_REQUEST['lid'] == '4'){

    $ada = GetFields($TabelUser['TabelAntrianID'], 'Login', $Login, 'Login, Nama');
    if (empty($ada)) {
      $s = "insert into $TabelUser[TabelAntrianID] (MhswID, NIM, Login, KodeID, LevelID, Nama, Password, Telephone, Handphone, Email, 
        Alamat, Kota, Propinsi, Negara, ProdiID, NA)
        values('$Login', '$Login', '$Login', '$_SESSION[KodeID]', '$_REQUEST[lid]', '$Nama', PASSWORD('$Password'), '$b[Telephone]', '$b[Handphone]', '$b[Email]',
        '$b[Alamat]', '$b[Kota]', '$b[Propinsi]', '$b[Negara]', '$b[ProdiID]', '$b[NA]')";
      _query($s);
	  
	     selesai();
    }
    else echo ErrorMsg('Gagal Simpan', "Kode Login: <b>$Login</b> telah dipakai oleh user: <b>$ada[Nama]</b>.<br>
      Gunakan Kode Login yang lain.").'<br>';
   }

}

// *** Parameters ***
$_arrUsr = array('karyawan', 'antriandosenid', 'antrianmhswid');
$KodeID = GetSetVar('KodeID');
$gos = (empty($_REQUEST['gos']))? 'DaftarUsr' : $_REQUEST['gos'];
$LevelID = GetSetVar('LevelID');

// *** Main ***
$gos();
?>
