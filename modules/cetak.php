<style type="text/css">
.pd1 {	
	font-weight: bold;
	font-size: 20px;
}
.italic {
	font-size: 20px;
	font-style: italic;
}
.nip {
	font-size: 20px;
}
.php {
	font-family: "Times New Roman", Times, serif;
	font-size: 20px;
	text-align: justify;
}
</style>
<?php
require_once 'incl/config.php'; 
$cetak_id = mysql_real_escape_string($_POST['cetak_id']);  
$kuer1 = mysql_query("SELECT * FROM antrian WHERE id = '$cetak_id';");
$rom = mysql_fetch_array($kuer1);
$jenis	= $rom[jenis];
$nama	= $rom[instansi];
$alamat	= $rom[alamat];
$kota	= $rom[kota];
$mhs 	= $rom[nama];
$nim 	= $rom[nim];
$ps 	= $rom[ps];
$hape 	= $rom[hape];
$smt	= $rom[smt];
$judul	= $rom[judul];
$dos1 	= $rom[dos1];
$dos2 	= $rom[dos2];
$jur 	= $rom[jurusan];
$lokasi	= $rom[lokasi];
$bulan	= $rom[bulan];
$pada	= $rom[pada];
$alasan	= $rom[alasan];
$dosen	= $rom[dosen];
$matkul	= $rom[matkul];
$whatfor	= $rom[whatfor];
$kodjenis	= $rom[kodjenis];
$ortu		= $rom[ortu];
$jabortu	= $rom[jabortu];
$golortu	= $rom[golortu];
$niportu	= $rom[niportu];
$kerjaortu	= $rom[kerjaortu];
$tmpkrjortu	= $rom[tmpkrjortu];
$today = date("Y");
$sakniki = date("F j, Y");

				if ($jenis == 'A'){
					$mohon1 = 'Permohonan Studi Literatur dan Keperpustakaan';
					$mohon = 'kegiatan studi literatur - keperpustakaan';
					}
				else if ($jenis == 'B'){
					$mohon1 = 'Permohanan Ijin Penelitian dan Kesbang';
					$mohon = 'kegiatan penelitian dan kesbang';
					}
				else if ($jenis == 'C'){
					$mohon1 = 'Permohonan Data';
					$mohon = 'kegiatan penelitian dan permohonan data';
					}
				else if ($jenis == 'D'){
					$mohon1 = 'Permohonan Bahan';
					$mohon = 'kegiatan penelitian dan permohonan bahan';
					}
				else if ($jenis == 'E'){
					$mohon1 = 'Permohonan Benih';
					$mohon = 'kegiatan penelitian dan permohonan benih';
					} 
				else if ($jenis == 'F'){
					$mohon1 = 'Permohanan Peminjaman Glass House';
					$mohon = 'kegiatan penelitian dan peminjaman glass house';
					}
				else if ($jenis == 'G'){
					$mohon1 = 'Permohanan Peminjaman Lahan';
					$mohon = 'kegiatan penelitian dan peminjaman lahan';
					}
				else if ($jenis == 'AB'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang dan Studi Literatur - Keperpustakaan';
					$mohon = 'kegiatan penelitian, kesbang dan studi literatur keperpustakaan';
					}
				else if ($jenis == 'AC'){
					$mohon1 = 'Permohanan Data dan Studi Literatur - Keperpustakaan';
					$mohon = 'kegiatan studi literatur keperpustakaan dan permohonan data';
					}
				else if ($jenis == 'ABC'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Studi Literatur - Keperpustakaan dan';
					$mohon2 = 'Permohonan Data';
					$mohon = 'kegiatan penelitian, kesbang, data dan studi literatur keperpustakaan';
					}
				else if ($jenis == 'ABCD'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Data, Bahan dan';
					$mohon2 = 'Studi Literatur - Keperpustakaan';
					$mohon = 'kegiatan penelitian, kesbang, data, bahan dan studi literatur keperpustakaan';
					}
				else if ($jenis == 'BC'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang dan Permohonan Data';
					$mohon = 'kegiatan penelitian, kesbang dan permohonan data';
					}
				else if ($jenis == 'BF'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang dan Peminjaman Glass House';
					$mohon = 'kegiatan penelitian, kesbang dan permohonan peminjaman glass house';
					}
				else if ($jenis == 'BCD'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Data dan Bahan';
					$mohon = 'kegiatan penelitian, kesbang, data dan benih';
					}
				else if ($jenis == 'BCDE'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Data, Bahan dan Benih';
					$mohon = 'kegiatan penelitian, kesbang, data, bahan dan benih';
					}
				else if ($jenis == 'BCDEF'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Data, Bahan, Benih dan';
					$mohon2 = 'Peminjaman Glass House';
					$mohon = 'kegiatan penelitian, kesbang, data, bahan, benih dan peminjaman glass house';
					}
				else if ($jenis == 'BDEF'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Bahan, Benih dan';
					$mohon2 = 'Peminjaman Glass House';
					$mohon = 'kegiatan penelitian, kesbang, bahan, benih dan peminjaman glass house';
					}
				else if ($jenis == 'ABCDF'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Data, Bahan, ';
					$mohon2 = 'Peminjaman Glass House dan Studi Literatur - Keperpustakaan';
					$mohon = 'kegiatan penelitian, kesbang, bahan, peminjaman glass house dan studi literatur keperpustakaan';
					}
				else if ($jenis == 'ABCDEF'){
					$mohon1 = 'Permohanan Ijin Penelitian, Kesbang, Data, Bahan, Benih, ';
					$mohon2 = 'Peminjaman Glass House dan Studi Literatur - Keperpustakaan';
					$mohon = 'kegiatan penelitian, kesbang, bahan, benih, peminjaman glass house dan studi literatur keperpustakaan';
					}

if ($kodjenis == 'penelitian') {				
				echo <<<EOM
				<table width="653" border="0">
				  <tr>
					<td width="228">&nbsp;</td>
					<td width="7">&nbsp;</td>
					<td width="155">&nbsp;</td>
					<td width="235">&nbsp;</td>
				  </tr>
				  <tr>
					<td colspan="4" style="text-align: center; font-size: xx-large;">Form Surat Pengantar Penelitian</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td colspan="4" style="text-align: center; font-size: x-large;">Instansi Yang Dituju</td>
				  </tr>
				  <tr>
					<td>Nama Instansi</td>
					<td>:</td>
					<td colspan="2">$nama</td>
				  </tr>
				  <tr>
					<td>Alamat</td>
					<td>:</td>
					<td colspan="2">$alamat</td>
				  </tr>
				  <tr>
					<td>Kota</td>
					<td>:</td>
					<td colspan="2">$kota</td>
				  </tr>
				  <tr>
					<td>Perihal</td>
					<td>:</td>
					<td colspan="2">$mohon1 $mohon2</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td colspan="4" style="text-align: center; font-size: x-large;">Pemohon</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>Nama</td>
					<td>:</td>
					<td colspan="2">$mhs</td>
				  </tr>
				  <tr>
					<td>NIM</td>
					<td>:</td>
					<td colspan="2">$nim</td>
				  </tr>
				  <tr>
					<td>Tingkat / Semester</td>
					<td>:</td>
					<td colspan="2">$smt</td>
				  </tr>
				  <tr>
					<td>No. Hanphone</td>
					<td>:</td>
					<td colspan="2">$hape</td>
				  </tr>
				  <tr>
					<td>Jurusan</td>
					<td>:</td>
					<td colspan="2">$jur</td>
				  </tr>
				  <tr>
					<td>Judul</td>
					<td>:</td>
					<td colspan="2">$judul</td>
				  </tr>
				  <tr>
					<td>Dosen Pembimbing I</td>
					<td>:</td>
					<td colspan="2">$dos1</td>
				  </tr>
				  <tr>
					<td>Dosen Pembimbing II</td>
					<td>:</td>
					<td colspan="2">$dos2</td>
				  </tr>
				  <tr>
					<td>Penelitian di </td>
					<td>:</td>
					<td colspan="2">$lokasi</td>
				  </tr>
				  <tr>
					<td>Dilaksanakan pada</td>
					<td>:</td>
					<td colspan="2">$bulan</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td style="text-align: center">Mengetahui, </td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">Malang, ___________________</td>
				  </tr>
				  <tr>
					<td style="text-align: center">Koordinator Administrasi Jurusan</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">Pemohon</td>
				  </tr>
				  <tr>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
				  </tr>
				  <tr>
					<td height="44" style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
				  </tr>
				  <tr>
					<td style="text-align: center">(______________________)</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">(__________________)</td>
				  </tr>
				  <tr>
					<td style="text-align: left">Catatan :</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
					<td style="text-align: center">&nbsp;</td>
				  </tr>
				  <tr>
					<td colspan="4" style="text-align: left">1. Form ini di fotocopy rangkap 2 (dua), 1 lembar untuk jurusan, 1 lembar diserahkan ke loket sub. bagian akademik dan sisanya arsip.</td>
				  </tr>
				  <tr>
					<td colspan="4" style="text-align: left">2. Diserahkan ke loket sub. bagian akademik dengan dilampiri KTM Asli</td>
				  </tr>
				  <tr>
					<td colspan="4" style="text-align: left">3. Selesai kurang lebih 3 (Tiga) hari.</td>
				  </tr>
				</table>
EOM;
				} 
elseif ($kodjenis == 'skmkpns'){
		echo "Tidak perlu dicetak sendiri, silahkan saudara/i ke loket sub.bagian akademik dengan menyerahkan KTM Asli";
}
elseif ($kodjenis == 'susulan'){
		echo <<<EOM
			<table width="682" border="0">
			  <tr>
				<td width="52">Perihal</td>
				<td width="3">:</td>
				<td width="217">Permohonan Ujian Susulan</td>
				<td width="8">&nbsp;</td>
				<td width="368">&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>Kepada</td>
				<td>:</td>
				<td>Yth. Bapak Pembantu Dekan I</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Fakultas Pertanian</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Universitas Brawijaya</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Malang</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td colspan="3">Yang bertanda tangan di bawah ini mahasiswa Fakultas Pertanian Universitas Brawijaya :</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Nama</td>
				<td>:</td>
				<td>$mhs</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>NIM</td>
				<td>:</td>
				<td>$nim</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Program Studi</td>
				<td>:</td>
				<td>$ps</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>No. Handphone</td>
				<td>:</td>
				<td>$hape</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td colspan="3">Mengajukan Ujian Susulan : $pada</td>
			  </tr>
			  <tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Matakuliah</td>
				<td>:</td>
				<td>$matkul</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Dosen</td>
				<td>:</td>
				<td>$dosen</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td colspan="3">Karena pada saat ujian berlangsung saya $alasan</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td colspan="3">Demikian surat permohonan ini saya buat, atas kebijakan bapak saya ucapkan terima kasih.</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>Malang, $sakniki</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>$mhs</td>
			  </tr>
			</table>
EOM;
}
else if ($kodjenis == 'skmknon'){ echo "Anda tidak perlu mencetak, saudara/i tinggal ke loket akademik untuk menyerahkan KTM ASLI"; }
else echo "Untuk Transkrip Sementara langsung diambil aja di loket sub.bagian akademik";
?>