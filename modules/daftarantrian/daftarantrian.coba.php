<?php
// Author: Emanuel Setio Dewo
// 12 April 2006

// *** Functions ***
function DaftarAntri() {
  include_once "class/xthlister.class.php";
  $DaftarAntrianPage = GetSetVar('DaftarAntrianPage');
  $arrKey = array('NIM'=>'nim', 'Nama'=>'nama', 'Semua'=>'');
  // filter
  $whr = array();

  // Satukan filter
  $_whr = implode(' and ', $whr);
  $_whr = (empty($_whr))? '' : "where $_whr";
  // Tampilkan daftar
  $lst = new xthlister;
  $lst->page = $_SESSION['DaftarAntrianPage']+0;
  $lst->pageactive = "=PAGE=";
  $lst->pages = "=PAGE=";

  $lst->tables = "antrian a $_whr order by a.lastmodified";
  $lst->fields = "a.nim, a.nama, a.jenis, a.judul, a.kodjenis";
  $lst->headerfmt = "<p><table class=box cellspacing=1 cellpadding=4  width='100%'>
    <tr>
	<th class=ttl>#</th>
    <th class=ttl>NIM</th>
    <th class=ttl>Nama Mahasiswa</th>
    <th class=ttl>Jenis  Surat</th>
    <th class=ttl>Judul Surat</th>
    <th class=ttl>Kode Jenis</th>
    <th class=ttl>Print</th>
    </tr>";
  $lst->footerfmt = "</table></p>";
  
  $lst->detailfmt = "<tr>
	<td>=NOMER=</td>
    <td bgcolor='#9BBB59' class=cna=Keluar=>=nim=</td>
    <td bgcolor='#8DB3E2' class=cna=Keluar=>=nama=</td>
    <td bgcolor='#E5B8B7' class=cna=Keluar=>=jenis=</td>
    <td bgcolor='#B2A1C7' class=cna=Keluar=>=judul=</td>
    <td bgcolor='#FABF8F' class=cna=Keluar=>=kodjenis=</td>
    <td bgcolor='#BFBFBF' class=cna=Keluar=>
		<form action='modules/cetak.php' method='post' target='_parent'>
		<input type='hidden' name='cetak_id' value='nim'>
		<input type='submit' value='Print'>
		</form>
	</td>
    </tr>";
  echo $lst->TampilkanData();
  echo "Halaman : ". $lst->TampilkanHalaman();
}


// *** Parameters ***
$mhswid = GetSetVar('mhswid');
$DaftarAntrianPage = GetSetVar('DaftarAntrianPage');
$crmhswkey = GetSetVar('crmhswkey');
$crmhswval = GetSetVar('crmhswval');
if (isset($_REQUEST['crmhswkey'])) {
  $DaftarAntrianPage = 1;
  $_SESSION['DaftarAntrianPage'] = $DaftarAntrianPage;
}
 $gos = (empty($_REQUEST['gos']))? 'DaftarAntri' : $_REQUEST['gos'];


// *** Main ***
TampilkanJudul("<div class='page-header'><h1>Daftar Antrian <small>Administrasi Akademik JPTE</small></h1></div>");
if ($_SESSION['_LevelID'] == 4) {
  $crmhswkey = "NIM";
  $crmhswval = $_SESSION['_Login'];
  $_SESSION['crmhswval'] = $crmhswval;
  $_SESSION['mhswid'] = $crmhswval;
}

else {
  $gos('modules/daftarantrian/daftarantrian.coba');
 }
?>
