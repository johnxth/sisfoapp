<?php
function selesai () {
echo "<div> Selesai </div>";
}
function DaftarUsr() {
	$Prog = 'E0451';
	$optdsn = '2';
	$optmhsw = '4';
	
	echo "<p><table class=box cellspacing=1 cellpadding=4>
    <tr><td class=ul>Sign Up</td><td class=ul>
	<input type=hidden name='KodeID' value='$Prog'>
	<input type=hidden name='mnux' value='modules/signup.mhsw.dosen'>
	<td><a href='?mnux=modules/signup.mhsw&gos=UsrEdt&LevelID=$optdsn&md=1'\">Dosen</a></td>
	<td><a href='?mnux=modules/signup.mhsw&gos=UsrEdt&LevelID=$optmhsw&md=1'\">Mahasiswa</a></td>
	</tr></table></p>";

}
function UsrEdt() {
DaftarUsr();
  $md = $_REQUEST['md'] +0;
  $TabelUser = GetFields('level', 'LevelID', $_REQUEST['LevelID'], 'Nama, TabelUser');
  if ($md == 0) {
    $w = GetFields($TabelUser['TabelUser'], 'Login', $_REQUEST['Lgn'], '*');
    $jdl = "Edit User: $TabelUser[Nama]";
    $strlogin = "<input type=hidden name='Login' value='$w[Login]'><b>$w[Login]</b>";
  }
  else {
    $w = array();
    $w['Login'] = '';
    $w['Nama'] = '';
    $w['LevelID'] = $_REQUEST['LevelID'];
    $w['Telephone'] = 'xxxxxxxxxxxx';
    $w['Password'] = '';
    $w['Handphone'] = 'xxxxxxxxxxxx';
    $w['Email'] = '';
    $w['Alamat'] = 'xxx';
    $w['Kota'] = 'xxx';
    $w['Propinsi'] = 'xxx';
    $w['Negara'] = 'xxx';
    $w['ProdiID'] = 'PTE';
    $w['NA'] = 'N';
    $jdl = "Sign Up $TabelUser[Nama]";
    $strlogin = "<input type=text name='Login' value='' size=30 maxlength=20>";
  }
  $na = 'N';
  $snm = session_name(); $sid = session_id();
  //$cb_prodi = GetCheckboxes('prodi', 'ProdiID', "concat(ProdiID, ' - ', Nama) as PRD", 'PRD', $w['ProdiID'], ',');
  $cb_prodi = 'EL';
  $c1 = 'class=inp1'; $c2 = 'class=ul';
  
  // tampilkan
  echo "<p><table class=box cellspacing=1 cellpadding=4>
  <form action='?' method=POST>
  <input type=hidden name='mnux' value='modules/signup.mhsw'>
  <input type=hidden name='gos' value='UsrSav'>
  <input type=hidden name='md' value='$md'>
  <input type=hidden name='LevelID' value='$_REQUEST[LevelID]'>
  <input type=hidden name='OldPwd' value='$w[Password]'>
  <tr><th class=ttl colspan=2>$jdl</th></tr>
  
  <tr><td>NIM/NIP</td><td>$strlogin</td></tr>
  <tr><td>Nama</td><td><input type=text name='Nama' value='$w[Nama]' size=40 maxlength=50></td></tr>
  <tr><td>Password</td><td><input type=password name='Password' value='$w[Password]' size=20 maxlength=10></td></tr>
		<input type=hidden name='Prodi' value='$cb_prodi'>
		<input type=hidden name='Telephone' value='$w[Telephone]'>
		<input type=hidden name='Handphone' value='$w[Handphone]'>
  <tr><td>Email</td><td><input type=text name='Email' value='$w[Email]' size=40 maxlength=50></td></tr>
		<input type=hidden name='Alamat' value='$w[Alamat]'>
		<input type=hidden name='Kota' value='$w[Kota]'>
		<input type=hidden name='Propinsi' value='$w[Propinsi]'>
		<input type=hidden name='Negara' value='$w[Negara]'>
		<input type=hidden name='ProdiID' value='$w[ProdiID]'>
		<input type=hidden name='NA' value='$na'>
  <tr><td colspan=2><input class='btn light' type=submit name='Simpan' value='Sign Up'>
  </form></table></p>";
}
function UsrSav() {
  $md = $_REQUEST['md']+0;
  $TabelUser = GetFields('level', 'LevelID', $_REQUEST['LevelID'], 'Nama, TabelUser');
  $Login = $_REQUEST['Login'];
  $Nama = sqling($_REQUEST['Nama']);
  $Password = $_REQUEST['Password'];
  $OldPwd = $_REQUEST['OldPwd'];
  $Telephone = $_REQUEST['Telephone'];
  $Handphone = $_REQUEST['Handphone'];
  $Email = $_REQUEST['Email'];
  $Alamat = sqling($_REQUEST['Alamat']);
  $Kota = sqling($_REQUEST['Kota']);
  $Propinsi = sqling($_REQUEST['Propinsi']);
  $Negara = sqling($_REQUEST['Negara']);
  $arrProdiID = array();
  $arrProdiID = $_REQUEST['ProdiID'];
  $ProdiID = $arrProdiID;
  $NA = (empty($_REQUEST['NA']))? 'N' : $_REQUEST['NA'];
  if ($md == 0) {
    $pwd = ($OldPwd == $Password)? '' : ", Password=PASSWORD('$Password')";
    $s = "update $TabelUser[TabelUser] set Nama='$Nama', Telephone='$Telephone', Handphone='$Handphone',
      Email='$Email', Alamat='$Alamat', Kota='$Kota', Propinsi='$Propinsi', Negara='$Negara', NA='$NA',
      ProdiID='$ProdiID' $pwd
      where Login='$Login' ";
    $r = _query($s);
    if (!empty($pwd)) echo Konfirmasi('Perubahan Password', 'Telah terjadi perubahan password.').'<br>';
  }
  else {
    $ada = GetFields($TabelUser['TabelUser'], 'Login', $Login, 'Login, Nama');
    if (empty($ada)) {
      $s = "insert into $TabelUser[TabelUser] (MhswID, NIM, Login, KodeID, LevelID, Nama, Password, Telephone, Handphone, Email, 
        Alamat, Kota, Propinsi, Negara, ProdiID, NA)
        values('$Login', '$Login', '$Login', '$_SESSION[KodeID]', '$_REQUEST[LevelID]', '$Nama', PASSWORD('$Password'), '$Telephone', '$Handphone', '$Email',
        '$Alamat', '$Kota', '$Propinsi', '$Negara', '$ProdiID', '$NA')";
      _query($s);
    }
    else echo ErrorMsg('Gagal Simpan', "Kode Login: <b>$Login</b> telah dipakai oleh user: <b>$ada[Nama]</b>.<br>
      Gunakan Kode Login yang lain.").'<br>';
  }
  Selesai();
}

function dltUsrCek(){
	$Login = $_REQUEST['Lgn'];
	$Akses = GetaField('level', 'LevelID', $_REQUEST['LevelID'], 'Nama');
	echo Konfirmasi("Delete User", "Yakin Anda ingin menghapus user : <br />
									Login : <b>$Login</b><br />
									Akses : <b>$Akses</b><br /><br />
									<input type=button name='hapus' value='Delete User' onClick=\"location='?mnux=modules/signup.mhsw&gos=dltUsr&Lgn=$Login'\">");
}

function dltUsr(){
	$s = "delete from karyawan where Login = '$_REQUEST[Lgn]'";
	$r = _query($s);
	Selesai();
}

// *** Parameters ***
$_arrUsr = array('karyawan', 'dosen', 'mahasiswa');
$KodeID = GetSetVar('KodeID');
$gos = (empty($_REQUEST['gos']))? 'DaftarUsr' : $_REQUEST['gos'];
$LevelID = GetSetVar('LevelID');

// *** Main ***
$gos();
?>
