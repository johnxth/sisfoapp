<?php
// Author: Emanuel Setio Dewo
// 05 March 2006

function CariMhsw($mnux, $lnk='') {
  $crmhswkeyx = GetSetVar('crmhswkeyx');
  $crmhswvalx = GetSetVar('crmhswvalx');
  if ($_SESSION['crmhswkeyx'] == 'Semua')
    $_SESSION['crmhswvalx'] = '';
  
  //DaftarMhsw($mnux, $lnk='');
}

function DaftarMhsw($mnux, $lnk='', $keluar=0) {
  include_once "class/xthlister.class.php";
  $dataMhswPage = GetSetVar('dataMhswPage');
  $arrKey = array('NIM'=>'MhswID');
  // filter
  $whr = array();
  if (!empty($arrKey[$_SESSION['crmhswkeyx']]) && !empty($_SESSION['crmhswvalx']))
    $whr[] = "m." . $arrKey[$_SESSION['crmhswkeyx']] . " like '%" . $_SESSION['crmhswvalx'] . "%' ";

  if ($_SESSION['_LevelID'] > 1) {
    if (empty($_SESSION['_LevelID']))
      die(ErrorMsg("Tidak Dapat Akses", "Anda tidak memiliki hak akses ke data Mahasiswa."));
    $_ProdiID = trim($_SESSION['_ProdiID'], ',');
    $arrProdi = explode(',', $_ProdiID);
    $_prodi = '';
    for ($i = 0; $i<sizeof($arrProdi); $i++) $_prodi .= ",'".$arrProdi[$i]."'";
    $_prodi = trim($_prodi, ',');
    $_prodi = (empty($arrProdi))? '-1' : $_prodi; //implode(', ', $arrProdi);
    if ($_SESSION['LevelID'] == 7) {}
    else $whr[] = "m.ProdiID in ($_prodi)";
  }
  // Satukan filter
  $_whr = implode(' and ', $whr);
  $_whr = (empty($_whr))? '' : "where $_whr";
  // Tampilkan daftar
  $lst = new xthlister;

  $lst->tables = "mhsw m
    left outer join program prg on m.ProgramID=prg.ProgramID
    left outer join prodi prd on m.ProdiID=prd.ProdiID
    left outer join statusmhsw sm on m.StatusMhswID=sm.StatusMhswID
    $_whr
    order by m.MhswID";
  $lst->fields = "m.MhswID,
    prg.Nama as PRG, prd.Nama as PRD, sm.Nama as SM, sm.Keluar";
  $lst->headerfmt = "<p>
  <table class=box cellspacing=1 cellpadding=4>
    <tr bgcolor='#9BBB59'>
      <th rowspan='2' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Tahun Akade-mik</span></strong></th>
      <th rowspan='2' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Daya Tampung</span></strong></th>
      <th colspan='2' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Jumlah Calon<br>Mahasiswa Reguler&nbsp; </span></strong></th>
      <th colspan='2' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Jumlah<br>Mahasiswa Baru</span></strong></th>
      <th colspan='2' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Jumlah<br>Total Mahasiswa</span></strong></th>
      <th colspan='2' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Jumlah Lulusan</span></strong></th>
      <th colspan='3' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>IPK<br>Lulusan Reguler</span></strong></th>
      <th colspan='3' nowrap='true' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Persentase<br>Lulusan Reguler<br>dengan IPK :</span></strong></th>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Ikut Seleksi</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Lulus Seleksi</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Reguler</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Transfer</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Reguler</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Transfer</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Reguler </span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Transfer</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Min</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Rat</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>Mak</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>&lt; 2,75</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>2,75-3,50</span></strong></td>
      <td bgcolor='#9BBB59' class='ttl'><strong><span style='line-height:115%; font-family:'Calibri','sans-serif'; font-size:8.0pt; '>&gt; 3,50</span></strong></td>
    </tr>
    <tr bgcolor='#9BBB59'>
      <td class='cna'>(1)</td>
      <td class='cna'>(2)</td>
      <td class='cna'>(3)</td>
      <td class='cna'>(4)</td>
      <td class='cna'>(5)</td>
      <td class='cna'>(6)</td>
      <td class='cna'>(7)</td>
      <td class='cna'>(8)</td>
      <td class='cna'>(9)</td>
      <td class='cna'>(10)</td>
      <td class='cna'>(11)</td>
      <td class='cna'>(12)</td>
      <td class='cna'>(13)</td>
      <td class='cna'>(14)</td>
      <td class='cna'>(15)</td>
      <td class='cna'>(16)</td>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='cna'>TS-4</td>
      <td bgcolor='#DDD9C3' class='cna'>
	  
	  
	  &nbsp;    </td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#E5B8B7' class='cna'>&nbsp;</td>
      <td bgcolor='#E5B8B7' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='cna'>TS-3</td>
      <td bgcolor='#DDD9C3' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#E5B8B7' class='cna'></td>
      <td bgcolor='#E5B8B7' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='cna'>TS-2</td>
      <td bgcolor='#DDD9C3' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#E5B8B7' class='cna'></td>
      <td bgcolor='#E5B8B7' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='cna'>TS-1</td>
      <td bgcolor='#DDD9C3' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#E5B8B7' class='cna'></td>
      <td bgcolor='#E5B8B7' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='cna'>TS</td>
      <td bgcolor='#DDD9C3' class='cna'><countif></td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#8DB3E2' class='cna'>&nbsp;</td>
      <td bgcolor='#E5B8B7' class='cna'></td>
      <td bgcolor='#E5B8B7' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#D6E3BC' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#B2A1C7' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#FABF8F' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
      <td bgcolor='#BFBFBF' class='cna'>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor='#9BBB59' class='cna'>Jumlah</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'></td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
      <td bgcolor='#9BBB59' class='cna'>&nbsp;</td>
    </tr>";
  $lst->footerfmt = "</table></p>";
  echo $lst->TampilkanData();
  echo "Halaman : ". $lst->TampilkanHalaman();
}
?>
