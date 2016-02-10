<?php require_once('../Connections/db_sisfojpte.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO mhsw (MhswID, LoginID, NIM, Login, LevelID, Password, KDPIN, PMBID, PMBFormJualID, PSSBID, NIRM, BuktiSetoran, TahunID, KodeID, BIPOTID, Autodebet, Nama, Foto, StatusAwalID, StatusMhswID, ProgramID, ProdiID, PenasehatAkademik, Kelamin, WargaNegara, Kebangsaan, TempatLahir, TanggalLahir, Agama, StatusSipil, Alamat, Kota, RT, RW, KodePos, Propinsi, Negara, Telepon, Telephone, Handphone, Email, AlamatAsal, KotaAsal, RTAsal, RWAsal, KodePosAsal, PropinsiAsal, NegaraAsal, TeleponAsal, AnakKe, JumlahSaudara, NamaAyah, AgamaAyah, PendidikanAyah, PekerjaanAyah, HidupAyah, NamaIbu, AgamaIbu, PendidikanIbu, PekerjaanIbu, HidupIbu, AlamatOrtu, KotaOrtu, RTOrtu, RWOrtu, KodePosOrtu, PropinsiOrtu, NegaraOrtu, TeleponOrtu, HandphoneOrtu, EmailOrtu, AsalSekolah, AsalSekolah1, JenisSekolahID, AlamatSekolah, KotaSekolah, JurusanSekolah, NilaiSekolah, TahunLulus, IjazahSekolah, AsalPT, MhswIDAsalPT, ProdiAsalPT, LulusAsalPT, TglLulusAsalPT, IPKAsalPT, Pilihan1, Pilihan2, Pilihan3, BatasStudi, Harga, SudahBayar, NA, TanggalUjian, LulusUjian, RuangID, NomerUjian, NilaiUjian, GradeNilai, TanggalLulus, Syarat, SyaratLengkap, BuktiSetoranMhsw, TanggalSetoranMhsw, TotalBiayaMhsw, TotalSetoranMhsw, Dispensasi, DispensasiID, JudulDispensasi, CatatanDispensasi, NamaBank, NomerRekening, IPK, TotalSKS, TotalSKSPindah, WisudaID, TAID, Predikat, SKPenyetaraan, TglSKPenyetaraan, SKMasuk, TglSKMasuk, SKKeluar, TglSKKeluar, TahunKeluar, CatatanKeluar, NoIdentitas, NoFakultas, NoProdi, NoIjazah, TglIjazah, TotalSKS_, LoginBuat, TanggalBuat, LoginEdit, TanggalEdit) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['MhswID'], "text"),
                       GetSQLValueString($_POST['LoginID'], "text"),
                       GetSQLValueString($_POST['NIM'], "text"),
                       GetSQLValueString($_POST['Login'], "text"),
                       GetSQLValueString($_POST['LevelID'], "int"),
                       GetSQLValueString($_POST['Password'], "text"),
                       GetSQLValueString($_POST['KDPIN'], "text"),
                       GetSQLValueString($_POST['PMBID'], "text"),
                       GetSQLValueString($_POST['PMBFormJualID'], "text"),
                       GetSQLValueString($_POST['PSSBID'], "text"),
                       GetSQLValueString($_POST['NIRM'], "text"),
                       GetSQLValueString($_POST['BuktiSetoran'], "text"),
                       GetSQLValueString($_POST['TahunID'], "text"),
                       GetSQLValueString($_POST['KodeID'], "text"),
                       GetSQLValueString($_POST['BIPOTID'], "int"),
                       GetSQLValueString($_POST['Autodebet'], "text"),
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['Foto'], "text"),
                       GetSQLValueString($_POST['StatusAwalID'], "text"),
                       GetSQLValueString($_POST['StatusMhswID'], "text"),
                       GetSQLValueString($_POST['ProgramID'], "text"),
                       GetSQLValueString($_POST['ProdiID'], "text"),
                       GetSQLValueString($_POST['PenasehatAkademik'], "text"),
                       GetSQLValueString($_POST['Kelamin'], "text"),
                       GetSQLValueString($_POST['WargaNegara'], "text"),
                       GetSQLValueString($_POST['Kebangsaan'], "text"),
                       GetSQLValueString($_POST['TempatLahir'], "text"),
                       GetSQLValueString($_POST['TanggalLahir'], "date"),
                       GetSQLValueString($_POST['Agama'], "text"),
                       GetSQLValueString($_POST['StatusSipil'], "text"),
                       GetSQLValueString($_POST['Alamat'], "text"),
                       GetSQLValueString($_POST['Kota'], "text"),
                       GetSQLValueString($_POST['RT'], "text"),
                       GetSQLValueString($_POST['RW'], "text"),
                       GetSQLValueString($_POST['KodePos'], "text"),
                       GetSQLValueString($_POST['Propinsi'], "text"),
                       GetSQLValueString($_POST['Negara'], "text"),
                       GetSQLValueString($_POST['Telepon'], "text"),
                       GetSQLValueString($_POST['Telephone'], "text"),
                       GetSQLValueString($_POST['Handphone'], "text"),
                       GetSQLValueString($_POST['Email'], "text"),
                       GetSQLValueString($_POST['AlamatAsal'], "text"),
                       GetSQLValueString($_POST['KotaAsal'], "text"),
                       GetSQLValueString($_POST['RTAsal'], "text"),
                       GetSQLValueString($_POST['RWAsal'], "text"),
                       GetSQLValueString($_POST['KodePosAsal'], "text"),
                       GetSQLValueString($_POST['PropinsiAsal'], "text"),
                       GetSQLValueString($_POST['NegaraAsal'], "text"),
                       GetSQLValueString($_POST['TeleponAsal'], "text"),
                       GetSQLValueString($_POST['AnakKe'], "int"),
                       GetSQLValueString($_POST['JumlahSaudara'], "int"),
                       GetSQLValueString($_POST['NamaAyah'], "text"),
                       GetSQLValueString($_POST['AgamaAyah'], "text"),
                       GetSQLValueString($_POST['PendidikanAyah'], "text"),
                       GetSQLValueString($_POST['PekerjaanAyah'], "text"),
                       GetSQLValueString($_POST['HidupAyah'], "text"),
                       GetSQLValueString($_POST['NamaIbu'], "text"),
                       GetSQLValueString($_POST['AgamaIbu'], "text"),
                       GetSQLValueString($_POST['PendidikanIbu'], "text"),
                       GetSQLValueString($_POST['PekerjaanIbu'], "text"),
                       GetSQLValueString($_POST['HidupIbu'], "text"),
                       GetSQLValueString($_POST['AlamatOrtu'], "text"),
                       GetSQLValueString($_POST['KotaOrtu'], "text"),
                       GetSQLValueString($_POST['RTOrtu'], "text"),
                       GetSQLValueString($_POST['RWOrtu'], "text"),
                       GetSQLValueString($_POST['KodePosOrtu'], "text"),
                       GetSQLValueString($_POST['PropinsiOrtu'], "text"),
                       GetSQLValueString($_POST['NegaraOrtu'], "text"),
                       GetSQLValueString($_POST['TeleponOrtu'], "text"),
                       GetSQLValueString($_POST['HandphoneOrtu'], "text"),
                       GetSQLValueString($_POST['EmailOrtu'], "text"),
                       GetSQLValueString($_POST['AsalSekolah'], "text"),
                       GetSQLValueString($_POST['AsalSekolah1'], "text"),
                       GetSQLValueString($_POST['JenisSekolahID'], "text"),
                       GetSQLValueString($_POST['AlamatSekolah'], "text"),
                       GetSQLValueString($_POST['KotaSekolah'], "text"),
                       GetSQLValueString($_POST['JurusanSekolah'], "text"),
                       GetSQLValueString($_POST['NilaiSekolah'], "text"),
                       GetSQLValueString($_POST['TahunLulus'], "text"),
                       GetSQLValueString($_POST['IjazahSekolah'], "text"),
                       GetSQLValueString($_POST['AsalPT'], "text"),
                       GetSQLValueString($_POST['MhswIDAsalPT'], "text"),
                       GetSQLValueString($_POST['ProdiAsalPT'], "text"),
                       GetSQLValueString($_POST['LulusAsalPT'], "text"),
                       GetSQLValueString($_POST['TglLulusAsalPT'], "date"),
                       GetSQLValueString($_POST['IPKAsalPT'], "double"),
                       GetSQLValueString($_POST['Pilihan1'], "text"),
                       GetSQLValueString($_POST['Pilihan2'], "text"),
                       GetSQLValueString($_POST['Pilihan3'], "text"),
                       GetSQLValueString($_POST['BatasStudi'], "text"),
                       GetSQLValueString($_POST['Harga'], "double"),
                       GetSQLValueString($_POST['SudahBayar'], "text"),
                       GetSQLValueString($_POST['NA'], "text"),
                       GetSQLValueString($_POST['TanggalUjian'], "date"),
                       GetSQLValueString($_POST['LulusUjian'], "text"),
                       GetSQLValueString($_POST['RuangID'], "text"),
                       GetSQLValueString($_POST['NomerUjian'], "int"),
                       GetSQLValueString($_POST['NilaiUjian'], "int"),
                       GetSQLValueString($_POST['GradeNilai'], "text"),
                       GetSQLValueString($_POST['TanggalLulus'], "date"),
                       GetSQLValueString($_POST['Syarat'], "text"),
                       GetSQLValueString($_POST['SyaratLengkap'], "text"),
                       GetSQLValueString($_POST['BuktiSetoranMhsw'], "text"),
                       GetSQLValueString($_POST['TanggalSetoranMhsw'], "date"),
                       GetSQLValueString($_POST['TotalBiayaMhsw'], "int"),
                       GetSQLValueString($_POST['TotalSetoranMhsw'], "int"),
                       GetSQLValueString($_POST['Dispensasi'], "text"),
                       GetSQLValueString($_POST['DispensasiID'], "text"),
                       GetSQLValueString($_POST['JudulDispensasi'], "text"),
                       GetSQLValueString($_POST['CatatanDispensasi'], "text"),
                       GetSQLValueString($_POST['NamaBank'], "text"),
                       GetSQLValueString($_POST['NomerRekening'], "text"),
                       GetSQLValueString($_POST['IPK'], "double"),
                       GetSQLValueString($_POST['TotalSKS'], "int"),
                       GetSQLValueString($_POST['TotalSKSPindah'], "text"),
                       GetSQLValueString($_POST['WisudaID'], "int"),
                       GetSQLValueString($_POST['TAID'], "int"),
                       GetSQLValueString($_POST['Predikat'], "text"),
                       GetSQLValueString($_POST['SKPenyetaraan'], "text"),
                       GetSQLValueString($_POST['TglSKPenyetaraan'], "date"),
                       GetSQLValueString($_POST['SKMasuk'], "text"),
                       GetSQLValueString($_POST['TglSKMasuk'], "date"),
                       GetSQLValueString($_POST['SKKeluar'], "text"),
                       GetSQLValueString($_POST['TglSKKeluar'], "date"),
                       GetSQLValueString($_POST['TahunKeluar'], "text"),
                       GetSQLValueString($_POST['CatatanKeluar'], "text"),
                       GetSQLValueString($_POST['NoIdentitas'], "int"),
                       GetSQLValueString($_POST['NoFakultas'], "int"),
                       GetSQLValueString($_POST['NoProdi'], "int"),
                       GetSQLValueString($_POST['NoIjazah'], "text"),
                       GetSQLValueString($_POST['TglIjazah'], "date"),
                       GetSQLValueString($_POST['TotalSKS_'], "int"),
                       GetSQLValueString($_POST['LoginBuat'], "text"),
                       GetSQLValueString($_POST['TanggalBuat'], "date"),
                       GetSQLValueString($_POST['LoginEdit'], "text"),
                       GetSQLValueString($_POST['TanggalEdit'], "date"));

  mysql_select_db($database_db_sisfojpte, $db_sisfojpte);
  $Result1 = mysql_query($insertSQL, $db_sisfojpte) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">MhswID:</td>
      <td><input type="text" name="MhswID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">LoginID:</td>
      <td><input type="text" name="LoginID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NIM:</td>
      <td><input type="text" name="NIM" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Login:</td>
      <td><input type="text" name="Login" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">LevelID:</td>
      <td><input type="text" name="LevelID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Password:</td>
      <td><input type="text" name="Password" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KDPIN:</td>
      <td><input type="text" name="KDPIN" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PMBID:</td>
      <td><input type="text" name="PMBID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PMBFormJualID:</td>
      <td><input type="text" name="PMBFormJualID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PSSBID:</td>
      <td><input type="text" name="PSSBID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NIRM:</td>
      <td><input type="text" name="NIRM" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BuktiSetoran:</td>
      <td><input type="text" name="BuktiSetoran" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TahunID:</td>
      <td><input type="text" name="TahunID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KodeID:</td>
      <td><input type="text" name="KodeID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BIPOTID:</td>
      <td><input type="text" name="BIPOTID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Autodebet:</td>
      <td><input type="text" name="Autodebet" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nama:</td>
      <td><input type="text" name="Nama" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Foto:</td>
      <td><input type="text" name="Foto" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">StatusAwalID:</td>
      <td><input type="text" name="StatusAwalID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">StatusMhswID:</td>
      <td><input type="text" name="StatusMhswID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ProgramID:</td>
      <td><input type="text" name="ProgramID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ProdiID:</td>
      <td><input type="text" name="ProdiID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PenasehatAkademik:</td>
      <td><input type="text" name="PenasehatAkademik" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Kelamin:</td>
      <td><input type="text" name="Kelamin" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WargaNegara:</td>
      <td><input type="text" name="WargaNegara" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Kebangsaan:</td>
      <td><input type="text" name="Kebangsaan" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TempatLahir:</td>
      <td><input type="text" name="TempatLahir" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TanggalLahir:</td>
      <td><input type="text" name="TanggalLahir" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Agama:</td>
      <td><input type="text" name="Agama" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">StatusSipil:</td>
      <td><input type="text" name="StatusSipil" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Alamat:</td>
      <td><input type="text" name="Alamat" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Kota:</td>
      <td><input type="text" name="Kota" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RT:</td>
      <td><input type="text" name="RT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RW:</td>
      <td><input type="text" name="RW" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KodePos:</td>
      <td><input type="text" name="KodePos" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Propinsi:</td>
      <td><input type="text" name="Propinsi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Negara:</td>
      <td><input type="text" name="Negara" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telepon:</td>
      <td><input type="text" name="Telepon" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telephone:</td>
      <td><input type="text" name="Telephone" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Handphone:</td>
      <td><input type="text" name="Handphone" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email:</td>
      <td><input type="text" name="Email" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AlamatAsal:</td>
      <td><input type="text" name="AlamatAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KotaAsal:</td>
      <td><input type="text" name="KotaAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RTAsal:</td>
      <td><input type="text" name="RTAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RWAsal:</td>
      <td><input type="text" name="RWAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KodePosAsal:</td>
      <td><input type="text" name="KodePosAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PropinsiAsal:</td>
      <td><input type="text" name="PropinsiAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NegaraAsal:</td>
      <td><input type="text" name="NegaraAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TeleponAsal:</td>
      <td><input type="text" name="TeleponAsal" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AnakKe:</td>
      <td><input type="text" name="AnakKe" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">JumlahSaudara:</td>
      <td><input type="text" name="JumlahSaudara" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NamaAyah:</td>
      <td><input type="text" name="NamaAyah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AgamaAyah:</td>
      <td><input type="text" name="AgamaAyah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PendidikanAyah:</td>
      <td><input type="text" name="PendidikanAyah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PekerjaanAyah:</td>
      <td><input type="text" name="PekerjaanAyah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HidupAyah:</td>
      <td><input type="text" name="HidupAyah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NamaIbu:</td>
      <td><input type="text" name="NamaIbu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AgamaIbu:</td>
      <td><input type="text" name="AgamaIbu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PendidikanIbu:</td>
      <td><input type="text" name="PendidikanIbu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PekerjaanIbu:</td>
      <td><input type="text" name="PekerjaanIbu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HidupIbu:</td>
      <td><input type="text" name="HidupIbu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AlamatOrtu:</td>
      <td><input type="text" name="AlamatOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KotaOrtu:</td>
      <td><input type="text" name="KotaOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RTOrtu:</td>
      <td><input type="text" name="RTOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RWOrtu:</td>
      <td><input type="text" name="RWOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KodePosOrtu:</td>
      <td><input type="text" name="KodePosOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PropinsiOrtu:</td>
      <td><input type="text" name="PropinsiOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NegaraOrtu:</td>
      <td><input type="text" name="NegaraOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TeleponOrtu:</td>
      <td><input type="text" name="TeleponOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HandphoneOrtu:</td>
      <td><input type="text" name="HandphoneOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">EmailOrtu:</td>
      <td><input type="text" name="EmailOrtu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AsalSekolah:</td>
      <td><input type="text" name="AsalSekolah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AsalSekolah1:</td>
      <td><input type="text" name="AsalSekolah1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">JenisSekolahID:</td>
      <td><input type="text" name="JenisSekolahID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AlamatSekolah:</td>
      <td><input type="text" name="AlamatSekolah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">KotaSekolah:</td>
      <td><input type="text" name="KotaSekolah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">JurusanSekolah:</td>
      <td><input type="text" name="JurusanSekolah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NilaiSekolah:</td>
      <td><input type="text" name="NilaiSekolah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TahunLulus:</td>
      <td><input type="text" name="TahunLulus" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IjazahSekolah:</td>
      <td><input type="text" name="IjazahSekolah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">AsalPT:</td>
      <td><input type="text" name="AsalPT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">MhswIDAsalPT:</td>
      <td><input type="text" name="MhswIDAsalPT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ProdiAsalPT:</td>
      <td><input type="text" name="ProdiAsalPT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">LulusAsalPT:</td>
      <td><input type="text" name="LulusAsalPT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TglLulusAsalPT:</td>
      <td><input type="text" name="TglLulusAsalPT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IPKAsalPT:</td>
      <td><input type="text" name="IPKAsalPT" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pilihan1:</td>
      <td><input type="text" name="Pilihan1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pilihan2:</td>
      <td><input type="text" name="Pilihan2" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pilihan3:</td>
      <td><input type="text" name="Pilihan3" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BatasStudi:</td>
      <td><input type="text" name="BatasStudi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Harga:</td>
      <td><input type="text" name="Harga" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">SudahBayar:</td>
      <td><input type="text" name="SudahBayar" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NA:</td>
      <td><input type="text" name="NA" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TanggalUjian:</td>
      <td><input type="text" name="TanggalUjian" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">LulusUjian:</td>
      <td><input type="text" name="LulusUjian" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RuangID:</td>
      <td><input type="text" name="RuangID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NomerUjian:</td>
      <td><input type="text" name="NomerUjian" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NilaiUjian:</td>
      <td><input type="text" name="NilaiUjian" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">GradeNilai:</td>
      <td><input type="text" name="GradeNilai" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TanggalLulus:</td>
      <td><input type="text" name="TanggalLulus" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Syarat:</td>
      <td><input type="text" name="Syarat" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">SyaratLengkap:</td>
      <td><input type="text" name="SyaratLengkap" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BuktiSetoranMhsw:</td>
      <td><input type="text" name="BuktiSetoranMhsw" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TanggalSetoranMhsw:</td>
      <td><input type="text" name="TanggalSetoranMhsw" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TotalBiayaMhsw:</td>
      <td><input type="text" name="TotalBiayaMhsw" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TotalSetoranMhsw:</td>
      <td><input type="text" name="TotalSetoranMhsw" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Dispensasi:</td>
      <td><input type="text" name="Dispensasi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">DispensasiID:</td>
      <td><input type="text" name="DispensasiID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">JudulDispensasi:</td>
      <td><input type="text" name="JudulDispensasi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CatatanDispensasi:</td>
      <td><input type="text" name="CatatanDispensasi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NamaBank:</td>
      <td><input type="text" name="NamaBank" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NomerRekening:</td>
      <td><input type="text" name="NomerRekening" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IPK:</td>
      <td><input type="text" name="IPK" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TotalSKS:</td>
      <td><input type="text" name="TotalSKS" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TotalSKSPindah:</td>
      <td><input type="text" name="TotalSKSPindah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">WisudaID:</td>
      <td><input type="text" name="WisudaID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TAID:</td>
      <td><input type="text" name="TAID" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Predikat:</td>
      <td><input type="text" name="Predikat" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">SKPenyetaraan:</td>
      <td><input type="text" name="SKPenyetaraan" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TglSKPenyetaraan:</td>
      <td><input type="text" name="TglSKPenyetaraan" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">SKMasuk:</td>
      <td><input type="text" name="SKMasuk" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TglSKMasuk:</td>
      <td><input type="text" name="TglSKMasuk" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">SKKeluar:</td>
      <td><input type="text" name="SKKeluar" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TglSKKeluar:</td>
      <td><input type="text" name="TglSKKeluar" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TahunKeluar:</td>
      <td><input type="text" name="TahunKeluar" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CatatanKeluar:</td>
      <td><input type="text" name="CatatanKeluar" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NoIdentitas:</td>
      <td><input type="text" name="NoIdentitas" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NoFakultas:</td>
      <td><input type="text" name="NoFakultas" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NoProdi:</td>
      <td><input type="text" name="NoProdi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NoIjazah:</td>
      <td><input type="text" name="NoIjazah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TglIjazah:</td>
      <td><input type="text" name="TglIjazah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TotalSKS_:</td>
      <td><input type="text" name="TotalSKS_" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">LoginBuat:</td>
      <td><input type="text" name="LoginBuat" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TanggalBuat:</td>
      <td><input type="text" name="TanggalBuat" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">LoginEdit:</td>
      <td><input type="text" name="LoginEdit" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TanggalEdit:</td>
      <td><input type="text" name="TanggalEdit" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>