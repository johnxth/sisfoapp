<?php
// Proses Login
// Author: Emanuel Setio Dewo
// 13 Desember 2005

function gagal() {
   echo $_err = ErrorMsg("Login Gagal", "Kode Login dan Password salah!!!
      <hr size=1 color=black>
      Perhatikan Anda Login sebagai siapa dan pastikan Anda memasukan Kode Login dan password dengan benar.
	  <hr size=1 color=black>
      Untuk informasi lebih lanjut hubungi Administrator.
	  <hr size=1 color=black>
      Silahkan <a href='index.php'>Coba Lagi</a>");
}
function berhasil() {
    include "atribut/header.php";
  global $_ProductName, $_Version;
// Tampilkan welcome
  TampilkanJudul("SISTEM INFORMASI JURUSAN PENDIDIKAN TEKNIK ELEKTRO UNIVERSITAS PENDIDIKAN INDONESIA");
  echo Konfirmasi("Selamat Datang $_SESSION[_Nama]", "Anda Telah Login Sebagai :
    <hr size=5 color=green>
    <b><img src='$_SESSION[_Foto]'></b><br>
    Nama : <b>$_SESSION[_Nama]</b><br>
	ID   : <b>$_SESSION[_Login]</b><br>
	<hr size=5 color=green>
    Session : $_SESSION[_Session]
    <hr size=5 color=green>
    <a href='?slnt=loginprc&slntx=lout'><img src='img/keluar.png'></a>");
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
    $_SESSION['_Session'] = $sid;
    $_SESSION['_ProdiID'] = $_dat['ProdiID'];
    //$_SESSION['KodeID'] = $Institusi;
    //$_SESSION['_KodeID'] = $Institusi;
    $_SESSION['mnux'] = 'login';
    $_REQUEST['lgn'] = 'berhasil';
  }
}
function lout() {
  ResetLogin();
  $_SESSION['mnux'] = 'logout';
}
?>
