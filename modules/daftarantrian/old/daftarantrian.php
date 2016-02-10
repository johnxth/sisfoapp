<?php
// include 'connectdb.php';

echo "<div id='loader' style='display: none;'><img src='img/loader.gif'></div>";
echo "<div class='body'>";
echo "<div class='content'>";
	include 'modules/daftarantrian/headerantrian.php'; // <-----------------------------
    echo "<div class='row-fluid'>";
        echo "<div class='span8'>";
            echo "<div class='block'>";
                echo "<div class='head blue'><h2>Antrian</h2></div>";
                echo "<div class='data-fluid faq'>";
				include 'table.php';  // <---------------------------
                echo "</div>";           
            echo "</div>";
        echo "</div>";
	include 'modules/daftarantrian/kritiksaran.php'; // <-------------------------
    echo "</div>";
echo "</div>";
// <!-- <script language='javascript'>alert('Untuk Kritik Dan Saran Mohon Semua Form Di isi')</script> -->
echo "</div>";
// <!--		</div> -->
echo "<div id='ui-datepicker-div' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>";

$text = $_POST['text'];
$email = $_POST['email'];
$nama = $_POST['nama'];

if ($nama == '' and $email == '' and $text == '') {
	// echo "<script language='javascript'>alert('Untuk Kritik Dan Saran Mohon Semua Form Di isi')</script>";
	}
else {
	mysql_query("INSERT INTO kritik(nama, email, pesannya) VALUES ('$nama','$email', '$text');",$conn);
	echo '<script language="javascript">alert("Saran dan Kritik Anda Kami Terima, Terima Kasih Sudah Berpartisipasi Dalam Memajukan Pelayanan Administrasi Akademik FP.UB")</script>';
}
?>