<html lang="en">
<?php //include 'atribut/head.php';?>
<div class="wrapper">
  <div class="body">
<div class="content">
  <div class="page-header">
    <h1>Form <small>Surat Pengantar Penelitian</small></h1>
</div>
<div class="row-fluid">
	<div class="span8"> 
		<div class="block">
			<form class="form" target="form-iframe" id="form" method="post" action="insertsp.php">
			<div class="data-fluid">
				<div class="row-form info">
					<div class="span10">
						Studi Literatur - Keperpustakaan: <p>
						Permohonan Ijin Penelitian dan Kesbang: </p><p>
						Permohonan Data : </p><p>
						Permohonan Bahan : </p><p>
						Permohonan Benih : </p><p>
						Peminjaman Glass House : </p><p>
						Peminjaman Lahan  : 
					</p></div>
					<div class="span2">                            
						<div class="checker"><span class=""><input type="checkbox" name="formDoor[]" value="A" style="opacity: 0;"></span></div>
						
						<p><div class="checker"><span><input type="checkbox" name="formDoor[]" value="B" style="opacity: 0;"></span></div></p>
						<p><div class="checker"><span><input type="checkbox" name="formDoor[]" value="C" style="opacity: 0;"></span></div></p>
						<p><div class="checker"><span><input type="checkbox" name="formDoor[]" value="D" style="opacity: 0;"></span></div></p>
						<p><div class="checker"><span><input type="checkbox" name="formDoor[]" value="E" style="opacity: 0;"></span></div></p>
						<p><div class="checker"><span><input type="checkbox" name="formDoor[]" value="F" style="opacity: 0;"></span></div></p>
						<p><div class="checker"><span><input type="checkbox" name="formDoor[]" value="G" style="opacity: 0;"></span></div></p>
					</div>
					<span class="bottom">Catatan : beri tanda (v) yang anda butuhkan </span>
				</div> 					
				<div class="row-form success">
					<div class="span2">
					NIM : <p>
					Nama : </p><p>
					Handphone : </p><p>
					Semester :
					</p></div>
				<br>
					<div class="span10">
						<input type="text" id="nim" name="nim" value=""> <p>					
						<input type="text" id="mhs" name="mhs" value=""> </p><p>
						<input type="text" id="hape" name="hape" value=""> </p><p>
						<input type="text" id="smt" name="smt" value="">
						<span class="bottom">Contoh Penulisan : 9 (Sembilan)</span>
					</p></div>
				</div>
				<div class="row-form">
					<div class="span2">Jurusan:</div>
					<div class="span10">
					<select id="jurusan" name="jurusan" size="1">
					</select>

				<br>
					</div>
				</div>
				<div class="row-form error">
					<div class="span2">
					Instansi : <p>
					Alamat : </p><p>
					Kota : 
					</p></div>
					<div class="span10">
						<input type="text" id="instansi" name="instansi" value=""> <p>					
						<input type="text" id="alamat" name="alamat" value=""> </p><p>
						<input type="text" id="kota" name="kota" value=""> 						
					</p></div>
				</div>

					<?php include 'modules/surat/spp.coba.judulpenelitian.php';?>
					
				<div class="row-form error">
					<div class="span2">
					Penelitian di: <p>
					Pelaksanaan: 					 
					</p></div>
					<div class="span10">
						<input id="lokasi" type="text" name="lokasi" value=""> <p>					
						<input id="bulan" type="text" name="bulan" value=""> 										
					</p></div>
				</div>
<!-- -----------------------------Dosen Pembimbing---------------------------------- -->
				<div class="row-form">
					<div class="span2">Pembimping 1:</div>
					<div class="span10">
					<select id="dos1" name="dos1" size="1">
						<option value="............................" <br="">
					</select>
					</div>
				</div>
				<div class="row-form">
					<div class="span2">Pembimping 2:</div>
					<div class="span10">
					<select name="dos2" id="dos2" size="1">
						<option value="............................" <br="">
					</select>
					</div>
				</div>
<!-- -----------------------------Dosen Pembimbing---------------------------------- -->
				<div class="toolbar bottom tar">
					<div class="btn-group">
						<input style="margin-right: 5px;" type="button" id="Save" value="Save" role="button" class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" aria-disabled="false">
					</div>
				</div>

			</div>                
			</form>
		</div>
	</div>
	<div class="span4">
	<div id="message"></div>

				<?php include 'modules/surat/spp.coba.caridisini.php';?>				

	</div>  
</div>
</div>    
</div>    
</div>

	<link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css">
	<!-- ========================================================================= -->
    <script type="text/javascript" src="modules/surat/js/spp.js.js"></script>
	<!-- ========================================================================= -->
	<?php include 'modules/surat/spp.coba.otherjs.php';?>
	
           <div class="cleditorPopup cleditorList" style="display: none;">
		   <div style="font-family: Arial;">Arial</div>
		   <div style="font-family: 'Arial Black';">Arial Black</div>
		   <div style="font-family: 'Comic Sans MS';">Comic Sans MS</div>
		   <div style="font-family: 'Courier New';">Courier New</div>
		   <div style="font-family: Narrow;">Narrow</div>
		   <div style="font-family: Garamond;">Garamond</div>
		   <div style="font-family: Georgia;">Georgia</div>
		   <div style="font-family: Impact;">Impact</div>
		   <div style="font-family: 'Sans Serif';">Sans Serif</div>
		   <div style="font-family: serif;">Serif</div>
		   <div style="font-family: Tahoma;">Tahoma</div>
		   <div style="font-family: 'Trebuchet MS';">Trebuchet MS</div>
		   <div style="font-family: Verdana;">Verdana</div>
		   </div>
		   
		   <div class="cleditorPopup cleditorList" style="display: none;">
		   <div><font size="1">1</font></div>
		   <div><font size="2">2</font></div>
		   <div><font size="3">3</font></div>
		   <div><font size="4">4</font></div>
		   <div><font size="5">5</font></div>
		   <div><font size="6">6</font></div>
		   <div><font size="7">7</font></div>
		   </div>
		   
		   <div class="cleditorPopup cleditorList" style="display: none;">
		   <div><p>Paragraph</p></div>
		   <div><h1>Header 1</h1></div>
		   <div><h2>Header 2</h2></div>
		   <div><h3>Header 3</h3></div>
		   <div><h4>Header 4</h4></div>
		   <div><h5>Header 5</h5></div>
		   <div><h6>Header 6</h6></div>
		   </div>
		   
		   <?php include 'modules/surat/spp.coba.unknownscrpt.php';?>

		   <div class="cleditorPopup cleditorPrompt" style="display: none;">Enter URL:
		   <br><input type="text" value="http://" size="35">
		   <br><input type="button" value="Submit">
		   </div>
		   
		   <div class="cleditorPopup cleditorPrompt" style="display: none;">Paste your content here and click submit.
		   <br><textarea cols="40" rows="3"></textarea>
		   <br><input type="button" value="Submit">
		   </div>
		   
		   <div class="jqx-menu-wrapper" style="z-index:20000; border: none; background-color: transparent; padding: 0px; margin: 0px; position: absolute; top: 0; left: 0; display: block; visibility: visible;" id="menuWrappergridmenujqxgrid">
		   <div id="gridmenujqxgrid" style="z-index: 9999999999999; display: none; outline: none; position: absolute; top: 0px; left: 0px; height: 65px; width: 184px;" role="menubar" class="jqx-widget jqx-menu jqx-menu-vertical jqx-widget-content jqx-popup jqx-rc-all">
		   <ul></ul></div>
		   </div>
		   
</html>