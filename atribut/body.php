<?php
    if (file_exists($_SESSION['mnux'].'.php')) {
      // cek apakah berhak mengakses? Harus dicek 1 per 1 karena mungkin 1 modul tersedia bagi banyak level
      $sboleh = "select * from mdl where Script='$_SESSION[mnux]'";
      $rboleh = _query($sboleh); $ktm = -1;
      if (_num_rows($rboleh) > 0) {
        while ($wboleh = _fetch_array($rboleh)) {
          $pos = strpos($wboleh['LevelID'], ".$_SESSION[_LevelID].");
          if ($pos === false) {}
          else $ktm = 1;
        }
        if ($ktm <= 0) {
          echo ErrorMsg("Anda Tidak Berhak",
            "Anda tidak berhak mengakses modul ini.<br />
            Hubungi Sistem Administrator untuk memperoleh informasi lebih lanjut.
            <hr size=1>
            Pilihan: <a href='?mnux=&slnt=loginprc&slntx=lout'>Logout</a>");
        }
        else include_once $_SESSION['mnux'].'.php';
      } else include_once $_SESSION['mnux'].'.php';
      include_once "disconnectdb.php";
    }
    else echo ErrorMsg('Fatal Error', "Modul tidak ditemukan. Hubungi Administrator!!!<hr size=1 color=silver>
    Pilihan: <a href='?mnux=donothing'>Kembali</a>");
?>