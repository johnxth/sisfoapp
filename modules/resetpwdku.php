<?php
// Author: Emanuel Setio Dewo
// 17 April 2006
// Selamat Ulang Tahun Ibu

// *** Functions ***
function getAjax(){
  echo <<<EOF
  <script language='JavaScript'>
    <!--
    function carikelajax(data) {
      var data = $('#MhswID').val();
      $.ajax({  
        type: "POST",
        url: "getpass.php?MhswID="+data,
        data: "MhswID="+data,
        success: function(msg){
          $('#PASLM').val(msg);
          }
      });
    }
  -->
  </script>
EOF;
}

function ResetPasswordMahasiswa() {
  getAjax();
  
  echo "<script>
  function CheckPwd(frm) {
    var pjg = frm.PWD1.value.length;

    var hsl = false;
    hsl = pjg == ;
    if (hsl) {
      hsl = frm.PWD1.value == frm.PWD2.value;
      if (!hsl) alert('Password dan Konfirmasi Password tidak sama.');
    }
    return hsl;
  }
  </script>
  
  <p><table class=box cellspacing=1>
  <form action='?' method=GET onSubmit=\"return CheckPwd(this)\">
  <input type=hidden name='mnux' value='modules/resetpwdku'>
  <input type=hidden name='gos' value='ResetPwdMhsw'>
  
  <tr><td class=ul colspan=2><b>$_SESSION[KodeID]</b> - $_SESSION[_ProdiID]</td></tr>

  <input type=hidden id='MhswID' name='MhswID' value='$_SESSION[_Login]' size=12 maxlength=7>
  <tr><td class=inp>Password Lama</td><td class=ul><input type=password name='PWDLM' size=12 maxlength=20></td></tr>
  
  <tr><td class=inp>Password Baru</td><td class=ul><input type=password name='PWD1' size=12 maxlength=20></td></tr>
  <tr><td class=inp>Konfirmasi Password Baru</td><td class=ul><input type=password name='PWD2' size=12 maxlength=20></td></tr>
  <tr><td colspan=2 class=ul><input type=submit name='Simpan' value='Selesai'></td></tr>
  </form></table></p>";
}
function ResetPwdMhsw() {
  $mhsw = GetFields('mhsw', 'MhswID', $_REQUEST['MhswID'], '*');
  if (!empty($mhsw)) {
    if (strpos($_SESSION['_ProdiID'], $mhsw['ProdiID']) === false) {
      echo ErrorMsg("Gagal Reset Password",
        "Anda tidak berhak mengubah mahasiswa dengan NIM <b>$mhsw[MhswID]</b> ini
        karena Anda tidak memiliki wewenang pada Program Studi <b>$mhsw[ProdiID]</b>.");
    }
    else {
      if (!empty($_REQUEST['PWD1'])) {
        if ($_REQUEST['PWD1'] != $_REQUEST['PWD2']) 
          echo ErrorMsg("Gagal Reset Password",
            "Password dengan konfirmasi password tidak sama. Masukkan password baru 2 kali!");
        else {
          $s = "update mhsw set Password=PASSWORD('$_REQUEST[PWD1]'), KDPIN = '$_REQUEST[PWD1]' where MhswID='$mhsw[MhswID]'";
          $r = _query($s);
          echo Konfirmasi("Password telah direset",
            "Password untuk mahasiswa 
            <font size=+2>$mhsw[Nama]</font> ($mhsw[MhswID])</font> telah direset.");
        }
      }
      else echo ErrorMsg("Gagal Reset Password",
        "Anda harus memasukkan password baru. Password baru tidak boleh blank.<br />
        Password Baru harus dimasukkan 2 kali.");
    }
  }
  else echo ErrorMsg("Gagal", "Gagal reset. Mahasiswa tidak ditemukan.");
  TampilkanFormHeaderResetPasswordMahasiswa();
}

// *** Parameters ***
$MhswID = GetSetVar('MhswID');
$gos = (empty($_REQUEST['gos']))? "ResetPasswordMahasiswa" : $_REQUEST['gos'];

// *** Main ***
TampilkanJudul("Ganti Password");
if (!empty($gos)) $gos();
?>
