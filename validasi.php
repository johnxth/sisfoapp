<?php
// Author : Eksansilus

  
 if (isset($_POST['Masuk'])) { 
 $pilihananda = $_POST['pilihloginanda'];
 
 $_REQUEST['Login'] = $_POST['Login'];
 $_REQUEST['Password'] = $_POST['Password'];
 
 $_REQUEST['nme'] = $pilihananda;
 
  if ($pilihananda == 'Administrator')	{ $Level = '1'; } // atau : if ($_REQUEST['nme'] == 'Administrator')	{ $Level = '1'; }
  if ($pilihananda == 'Dosen')			{ $Level = '2'; }
  if ($pilihananda == 'Tata Usaha')		{ $Level = '3'; }
  if ($pilihananda == 'Mahasiswa')		{ $Level = '4'; }
  if ($pilihananda == 'Laboran')		{ $Level = '5'; }
 
 $_REQUEST['lid'] = $Level;

 echo "<form name='session' method='post' ACTION='index.php' id='storyForm'>
		<center><div class='page-header'><h1>Logining... Please Wait</h1></div></center>
		<input type=hidden name='nme' value='$_REQUEST[nme]'>
		<input type=hidden name='Login' value='$_REQUEST[Login]'>
		<input type=hidden name='Password' value='$_REQUEST[Password]'>
		<input type=hidden name='lid' value='$_REQUEST[lid]'>
		<input type=hidden name='slnt' value='loginprc'>
		<input type=hidden name='slntx' value='cek'>
		<input type=hidden name='mnux' value='donothing'>
		<script type='text/javascript'>document.getElementById('storyForm').submit();</script>";
} ?>