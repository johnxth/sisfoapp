<?php
function UsrSav() {
if (isset($_POST['Simpan'])) {
  //$md = $_REQUEST['md']+0;
  $TabelUser = GetFields('level', 'LevelID', $_REQUEST['LevelID'], 'Nama, TabelUser');
  $Login = $_POST['Login'];
  $Nama = $_POST['Nama'];
  $Password = $_POST['Password'];
  $Level = $_POST['Level'];
  // ---------------------------------------------
  
  //$OldPwd = $_REQUEST['OldPwd'];
  $b = array();
  $b['Telephone'] = '012345678912';
  $b['Handphone'] = '012345678912';
  $b['Email'] = 'someone@invalid.com';
  $b['Alamat'] = 'Jl. Contoh Alamat No.1';
  $b['Kota'] = 'Bandung';
  $b['Propinsi'] = 'Jawa Barat';
  $b['Negarai'] = 'Indonesia';
  //$arrProdiID = array();
  //$arrProdiID = $_POST['ProdiID'];
  //$ProdiID = $arrProdiID;
  //
  $b['ProdiID'] = 'PTE';
  $b['NA'] = 'N';
  $b['cod'] = "E0451";
  
  if ($Level == 'Dosen')		{ $LevelID = '2'; }
  if ($Level == 'Mahasiswa')	{ $LevelID = '4'; }
  
	$_REQUEST['lvl'] = $LevelID;
	$lvl = $_REQUEST['lvl'];
	
    $ada = GetFields($TabelUser['TabelUser'], 'Login', $Login, 'Login, Nama');
    if (empty($ada)) {
      $s = "insert into $TabelUser[TabelUser] (MhswID, NIM, Login, KodeID, LevelID, Nama, Password, Telephone, Handphone, Email, 
        Alamat, Kota, Propinsi, Negara, ProdiID, NA)
        values('$Login', '$Login', '$Login', '$b[cod]', '$lvl', '$Nama', PASSWORD('$Password'), '$b[Telephone]', '$b[Handphone]', '$b[Email]',
        '$b[Alamat]', '$b[Kota]', '$b[Propinsi]', '$b[Negarai]', '$b[ProdiID]', '$b[NA]')";
      _query($s);
    }
    else echo ErrorMsg('Gagal Simpan', "Kode Login: <b>$Login</b> telah dipakai oleh user: <b>$ada[Nama]</b>.<br>
      Gunakan Kode Login yang lain.").'<br>';
selesai ();
	}
}
function selesai () {
echo "<div> Selesai </div>";
}
?>