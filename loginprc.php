<?php
// Proses Login
// Author: Eksansilus
// 21 Oktober 2012

function gagal() {
   echo $_err = ErrorMsg("Login Gagal", "Kode Login dan Password salah!!!
      <hr size=1 color=#3b5998>
      Perhatikan Anda Login sebagai siapa dan pastikan Anda memasukan Kode Login dan password dengan benar.
	  <hr size=1 color=#3b5998>
      Untuk informasi lebih lanjut hubungi Administrator.
	  <hr size=1 color=#3b5998>
      Silahkan <a href='index.php'>Coba Lagi</a>");
}

function berhasil() {
  if ($_SESSION['_LevelID'] == '4') {
  include'modules/mhsw.dataku.php';
  
  }
  if ($_SESSION['_LevelID'] == '2') {
  include'modules/dosen.dataku.php';
  }

  if ($_SESSION['_LevelID'] == '3') {
  include'modules/tu.php';
  }
  else {
global $_ProductName, $_Version;

//  if ($_SESSION['_LevelID'] == '2') {
//  echo "<script>window.location = '?mnux=inq.dosen&gos=DsnDetail&dsnid=0002026105';</script>";
//  }
//    else {
//include "atribut/header.php";
  
// Tampilkan welcome
  echo Konfirmasi("Selamat Datang $_SESSION[_Nama]", "Anda Telah Login Sebagai :
    <hr size=5 color=#3b5998>
	<hr size=5 color=#3b5998>
    <b><img src='$_SESSION[_Foto]'></b><br>
    Nama : <b>$_SESSION[_Nama]</b><br>
	ID   : <b>$_SESSION[_Login]</b><br>
	<hr size=5 color=#3b5998>
<!--    Session : $_SESSION[_Session]   -->
    <hr size=5 color=#3b5998>");}
}

function cek() {
  global $arrID;
  
  $_tbl = GetaField('level', 'LevelID', $_REQUEST['lid'], 'TabelUser');

  $s = "select * from $_tbl where Login='$_REQUEST[Login]' and NA = 'N' and Password=LEFT(PASSWORD('$_REQUEST[Password]'),10) limit 1";
  $r = _query($s);
  $_dat = _fetch_array($r);
  if (empty($_dat)) {
    $_SESSION['mnux'] = 'login';
    $_REQUEST['lgn'] = 'gagal';
  }
  else {
    $sid = session_id();
    // Set Parameter
    $_SESSION['_Login'] = $_REQUEST['Login'];
    $_SESSION['_Nama'] = $_dat['Nama'];
	$_SESSION['_Foto'] = $_dat['Foto'];
	$_SESSION['_Icon'] = $_dat['Icon'];
	$_SESSION['_Login'] = $_dat['Login'];
    $_SESSION['_TabelUser'] = $_tbl;
    $_SESSION['_LevelID'] = $_REQUEST['lid'];
	$_SESSION['_LoginID'] = $_dat['LoginID'];
    $_SESSION['_Session'] = $sid;
    $_SESSION['_ProdiID'] = $_dat['ProdiID'];
//	$_SESSION['_MhswID'] = $_dat['MhswID'];
    //$_SESSION['KodeID'] = $Institusi;
    //$_SESSION['_KodeID'] = $Institusi;
    $_SESSION['mnux'] = 'login';
    $_REQUEST['lgn'] = 'berhasil';
}}
function lout() {
  ResetLogin();
  $_SESSION['mnux'] = 'logout';
}
?>
