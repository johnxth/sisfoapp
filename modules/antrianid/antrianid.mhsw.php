<?php
// Author: Eksansilus
// 12 Maret 2014

// *** Functions ***
function DaftarAntriMhsw1() {

  include_once "class/xthlister.class.php";
  $AntrianIDPage = GetSetVar('AntrianIDPage');
  $arrKey = array('NIM'=>'nim', 'Nama'=>'nama', 'Semua'=>'');
  // filter
  $whr = array();

  // Satukan filter
  $_whr = implode(' and ', $whr);
  $_whr = (empty($_whr))? '' : "where $_whr";
  // Tampilkan daftar
  $lst = new xthlister;
  $lst->page = $_SESSION['AntrianIDPage']+0;
  $lst->pageactive = "=PAGE=";
  $lst->pages = "=PAGE=";

    $lst->tables = "antrimhswid a
    left outer join program prg on a.ProgramID=prg.ProgramID
    left outer join prodi prd on a.ProdiID=prd.ProdiID
    left outer join statusmhsw sm on a.StatusMhswID=sm.StatusMhswID
    $_whr
    order by a.MhswID";
  $lst->fields = "a.MhswID, a.Nama, a.LevelID, a.KodeID, a.Password, a.ProgramID, a.ProdiID, a.Foto";
  $lst->headerfmt = "<p><table class=box cellspacing=1 cellpadding=4>
    <tr><th class=ttl>#</th>
    <th class=ttl>No Mhsw</th>
    <th class=ttl>Nama Mhsw</th>
    <th class=ttl>Program</th>
    <th class=ttl>Prodi</th>
    <th class=ttl>Konfirmasi</th>
    </tr>";
  $lst->footerfmt = "</table></p>";
  $lst->detailfmt = "<tr><td>=NOMER=</td>
    <td bgcolor='#9BBB59' class=cna=Keluar=>=MhswID=</td>
    <td bgcolor='#8DB3E2' class=cna=Keluar=>=Nama=</td>
    <td bgcolor='#E5B8B7' class=cna=Keluar=>=ProgramID=</td>
    <td bgcolor='#B2A1C7' class=cna=Keluar=>=ProdiID=</td>
    <td bgcolor='#BFBFBF' class=cna=Keluar=>
	
		<form action='?' method='post'>
		<input type=hidden name='mnux' value='modules/antrianid/antrianid.mhsw'>
		  <input type=hidden name='gos' value='UsrSav'>
		
		<input type='hidden' name='Login' value='=MhswID='>
		<input type='hidden' name='Nama' value='=Nama='>
		<input type='hidden' name='Password' value='=Password='>
		<input type='hidden' name='lvlid' value='=LevelID='>
		<input type='hidden' name='kid' value='=KodeID='>
		
		<input type='submit' class='btn light' value='Simpan' name='Salin'>
		</form>
		
	</td>
    </tr>";
  echo $lst->TampilkanData();
  echo "Halaman : ". $lst->TampilkanHalaman();
}

function UsrSav() {
 
  $b = array();
  //$b['lvlid'] = '4';
  $b['Login'] = $_REQUEST['Login'];
  $b['Nama'] = $_REQUEST['Nama'];
  $b['Password'] = $_REQUEST['Password'];
  $b['KodeID'] = $_REQUEST['kid'];
  $b['LevelID'] = $_REQUEST['lvlid'];
  
  $b['Telephone'] = '0123456789012';
  $b['Handphone'] = '0123456789012';
  $b['Email'] = 'nobody@invalid.com';
  $b['Alamat'] = 'Jl. Contoh Alamat No.1';
  $b['Kota'] = 'Bandung';
  $b['Propinsi'] = 'Jawa Barat';
  $b['Negara'] = 'Indonesia';
  $b['ProdiID'] = 'PTE';
  $b['NA'] = 'N';
  
  $TabelUser = GetFields('level', 'LevelID', $b['LevelID'], 'Nama, TabelUser');

     $ada = GetFields($TabelUser['TabelUser'], 'Login', $b['Login'], 'Login, Nama');
    if (empty($ada)) {
      $s = "insert into $TabelUser[TabelUser] (MhswID, NIM, Login, KodeID, LevelID, Nama, Password, Telephone, Handphone, Email, 
        Alamat, Kota, Propinsi, Negara, ProdiID, NA)
        values('$b[Login]', '$b[Login]', '$b[Login]', '$b[KodeID]', '$b[LevelID]', '$b[Nama]', PASSWORD('$b[Password]'), '$b[Telephone]', '$b[Handphone]', '$b[Email]',
        '$b[Alamat]', '$b[Kota]', '$b[Propinsi]', '$b[Negara]', '$b[ProdiID]', '$b[NA]')";
      _query($s);
    }
    else echo ErrorMsg('Gagal Simpan', "Kode Login: <b>$Login</b> telah dipakai oleh user: <b>$ada[Nama]</b>.<br>
      Gunakan Kode Login yang lain.").'<br>';


  echo "<script>window.location = '?mnux=modules/antrianid/antrianid.mhsw&gos=dltUsrCek&LevelID=$b[LevelID]&Lgn=$b[Login]';</script>";
}
function dltUsrCek(){
	$Login = $_REQUEST['Lgn'];
	$Akses = GetaField('level', 'LevelID', $_REQUEST['LevelID'], 'Nama');
	echo Konfirmasi("Delete Daftar", "Delete Dari Daftar Antrian Mahasiswa? : <br />
									NIM : <b>$Login</b><br />
									Akses : <b>$Akses</b><br /><br />
									<input type=button name='hapus' value='Delete User' onClick=\"location='?mnux=modules/antrianid/antrianid.mhsw&gos=dltUsr&Lgn=$Login'\">");
}
function dltUsr(){
	$s = "delete from antrimhswid where Login = '$_REQUEST[Lgn]'";
	$r = _query($s);
	DaftarAntriMhsw1();
}

// *** Parameters Plus **
$_arrUsr = array('karyawan', 'dosen', 'mhsw');
$KodeID = GetSetVar('KodeID');
$LevelID = GetSetVar('LevelID');

// *** Parameters ***
$mhswid = GetSetVar('mhswid');
$AntrianIDPage = GetSetVar('AntrianIDPage');
$crmhswkey = GetSetVar('crmhswkey');
$crmhswval = GetSetVar('crmhswval');

if (isset($_REQUEST['crmhswkey'])) {
  $AntrianIDPage = 1;
  $_SESSION['AntrianIDPage'] = $AntrianIDPage;
}
 $gos = (empty($_REQUEST['gos']))? 'DaftarAntriMhsw1' : $_REQUEST['gos'];

// *** Main ***
TampilkanJudul("<div class='page-header'><h1>Daftar Antrian <small>Administrasi Akademik JPTE</small></h1></div>");
if ($_SESSION['_LevelID'] == '4') {
  $crmhswkey = "NIM";
  $crmhswval = $_SESSION['_Login'];
  $_SESSION['crmhswval'] = $crmhswval;
  $_SESSION['mhswid'] = $crmhswval;
}

else {
  $gos('modules/antrianid/antrianid.mhsw');
 }
?>
