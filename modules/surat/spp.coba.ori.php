<html lang="en"><head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Administrasi Sub Bagian Akademik Fakultas Pertanian Universitas Brawijaya</title>
    <link rel="icon" type="image/ico" href="favicon.ico">
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 7]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->   
  
    <script type="text/javascript" src="js/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-migrate-1.1.1.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/globalize.js"></script>
    <script type="text/javascript" src="js/plugins/other/excanvas.js"></script>
    
    <script type="text/javascript" src="js/plugins/other/jquery.mousewheel.min.js"></script>
        
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>            
    
    <script type="text/javascript" src="js/plugins/cookies/jquery.cookies.2.2.0.min.js"></script>    
    
    <script type="text/javascript" src="js/plugins/uniform/jquery.uniform.min.js"></script>

    <script type="text/javascript" src="js/plugins/cleditor/jquery.cleditor.js"></script>        
    <script type="text/javascript" src="js/plugins/ckeditor/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>    
    
    <script type="text/javascript" src="js/plugins/shbrush/XRegExp.js"></script>
    <script type="text/javascript" src="js/plugins/shbrush/shCore.js"></script>
    <script type="text/javascript" src="js/plugins/shbrush/shBrushXml.js"></script>
    <script type="text/javascript" src="js/plugins/shbrush/shBrushJScript.js"></script>
    <script type="text/javascript" src="js/plugins/shbrush/shBrushCss.js"></script>    
    
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/charts.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
	

</head>
<body>
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
						<div class="checker"><span class=""><input type="checkbox" name="formDoor[]" value="A" style="opacity: 0;"></span></div>	<p>
						<div class="checker"><span><input type="checkbox" name="formDoor[]" value="B" style="opacity: 0;"></span></div>	</p><p>
						<div class="checker"><span><input type="checkbox" name="formDoor[]" value="C" style="opacity: 0;"></span></div>	</p><p>
						<div class="checker"><span><input type="checkbox" name="formDoor[]" value="D" style="opacity: 0;"></span></div> 	</p><p>
						<div class="checker"><span><input type="checkbox" name="formDoor[]" value="E" style="opacity: 0;"></span></div>	</p><p>
						<div class="checker"><span><input type="checkbox" name="formDoor[]" value="F" style="opacity: 0;"></span></div>	</p><p>
						<div class="checker"><span><input type="checkbox" name="formDoor[]" value="G" style="opacity: 0;"></span></div>		
					</p></div>
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
<b>Notice</b>:  Undefined variable: v_nim in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>78</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_mhs in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>79</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_hp in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>80</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_smt in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>86</b><br>
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
					<div class="span10">                            					<select id="jurusan" name="jurusan" size="1">
						<option value="Hama dan Penyakit Tanaman" <br="">
Notice:  Undefined variable: jurusan in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 96
&gt;Hama dan Penyakit Tanaman</option><option value="Budidaya Pertanian" <br="">
Notice:  Undefined variable: jurusan in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 96
&gt;Budidaya Pertanian</option><option value="Sosial Ekonomi" <br="">
Notice:  Undefined variable: jurusan in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 96
&gt;Sosial Ekonomi</option><option value="Tanah" <br="">
Notice:  Undefined variable: jurusan in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 96
&gt;Tanah</option>					</select>

				<br>
<b>Notice</b>:  Undefined variable: v_nama in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>115</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_alamat in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>116</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_kota in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>134</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_lokasi in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>135</b><br>
<br>
<b>Notice</b>:  Undefined variable: v_bulan in <b>D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php</b> on line <b>137</b><br>
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
				<div class="block">
					<div class="head green">                                
						<h2>Judul Penelitian:</h2>
					</div>
					<div class="data-fluid editor">
						<div class="cleditorMain" style="width: 100%; height: 300px;"><div class="cleditorToolbar" style="height: 53px;"><div class="cleditorGroup"><div class="cleditorButton" title="Bold" style="background-color: transparent;"></div><div class="cleditorButton" title="Italic" style="background-color: transparent; background-position: -24px 50%;"></div><div class="cleditorButton" title="Underline" style="background-color: transparent; background-position: -48px 50%;"></div><div class="cleditorButton" title="Strikethrough" style="background-color: transparent; background-position: -72px 50%;"></div><div class="cleditorButton" title="Subscript" style="background-color: transparent; background-position: -96px 50%;"></div><div class="cleditorButton" title="Superscript" style="background-color: transparent; background-position: -120px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Font" style="background-color: transparent; background-position: -144px 50%;"></div><div class="cleditorButton" title="Font Size" style="background-color: transparent; background-position: -168px 50%;"></div><div class="cleditorButton" title="Style" style="background-position: -192px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Font Color" style="background-position: -216px 50%;"></div><div class="cleditorButton" title="Text Highlight Color" style="background-position: -240px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Remove Formatting" disabled="disabled" style="background-position: -264px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Bullets" style="background-position: -288px 50%;"></div><div class="cleditorButton" title="Numbering" style="background-position: -312px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Outdent" style="background-position: -336px 50%;"></div><div class="cleditorButton" title="Indent" style="background-position: -360px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Align Text Left" style="background-position: -384px 50%;"></div><div class="cleditorButton" title="Center" style="background-position: -408px 50%;"></div><div class="cleditorButton" title="Align Text Right" style="background-position: -432px 50%;"></div><div class="cleditorButton" title="Justify" style="background-position: -456px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Undo" style="background-position: -480px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Redo" disabled="disabled" style="background-position: -504px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Insert Horizontal Rule" style="background-position: -528px 50%;"></div><div class="cleditorButton" title="Insert Image" style="background-position: -552px 50%;"></div><div class="cleditorButton" title="Insert Hyperlink" style="background-position: -576px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Remove Hyperlink" disabled="disabled" style="background-position: -600px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Cut" disabled="disabled" style="background-position: -624px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Copy" disabled="disabled" style="background-position: -648px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Paste" disabled="disabled" style="background-position: -672px 50%;"></div><div class="cleditorButton" title="Paste as Text" style="background-position: -696px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Print" style="background-color: transparent; background-position: -720px 50%;"></div><div class="cleditorButton" title="Show Source" style="background-color: transparent; background-position: -744px 50%;"></div></div></div><textarea id="wysiwyg" name="judul" style="height: 247px; display: none; width: 698px;">				
						</textarea><iframe frameborder="0" src="javascript:true;" style="width: 698px; height: 247px;"></iframe></div>
					</div>
				</div>   
				<div class="row-form error">
					<div class="span2">
					Penelitian di: <p>
					Pelaksanaan: 					 
					</p></div>
					<div class="span10">
						<input id="lokasi" type="text" name="lokasi" value=""> <p>					
						<input id="bulan" type="text" name="bulan" value=""> 										
					</p></div>
				</div>  				<div class="row-form">
					<div class="span2">Pembimping 1:</div>
					<div class="span10">
					<select id="dos1" name="dos1" size="1">
						<option value="............................" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;............................</option><option value="Ir. ABD.CHOLIL" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. ABD.CHOLIL</option><option value="Prof.Dr.Ir. ABDUL LATIEF ABADI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. ABDUL LATIEF ABADI, MS.</option><option value="Dr.Ir. ABDUL MUKRI PRABOWO, M.Agr.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. ABDUL MUKRI PRABOWO, M.Agr.Sc.</option><option value="Dr.Ir. ABDUL WAHIB MUHAIMIN, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. ABDUL WAHIB MUHAIMIN, MS.</option><option value="AFIFUDDIN LATIF ADIREDJO SP., M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;AFIFUDDIN LATIF ADIREDJO SP., M.Sc.</option><option value="Dr.Ir. AGUNG NUGROHO, SU.." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. AGUNG NUGROHO, SU..</option><option value="Dr.Ir. AGUS SURYANTO, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. AGUS SURYANTO, MS.</option><option value="Ir. AGUSTINA SHINTA HARTATI WAHYUNINGTYAS, MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. AGUSTINA SHINTA HARTATI WAHYUNINGTYAS, MP.</option><option value="Ir. AINURRASJID, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. AINURRASJID, MS.</option><option value="Dr.Ir. AMINUDIN AFANDHI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. AMINUDIN AFANDHI, MS.</option><option value="Dr.Ir. ANDY SOEGIANTO, CESA." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. ANDY SOEGIANTO, CESA.</option><option value="ANNA SATYANA KARYAWATI SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;ANNA SATYANA KARYAWATI SP.,MP.</option><option value="Dr. ANTON MUHIBUDDIN, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr. ANTON MUHIBUDDIN, SP.,MP.</option><option value="Prof.Dr.Ir. ARIFFIN, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. ARIFFIN, MS.</option><option value="Ir. ARIFIN NOOR SUGIHARTO, M.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. ARIFIN NOOR SUGIHARTO, M.Sc.,Ph.D.</option><option value="Prof.Dr.Ir. BAMBANG GURITNO" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. BAMBANG GURITNO</option><option value="Ir. BAMBANG SISWANTO, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. BAMBANG SISWANTO, MS.</option><option value="Dr.Ir. BAMBANG TRI RAHARDJO, SU." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. BAMBANG TRI RAHARDJO, SU.</option><option value="BAYU ADI KUSUMA, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;BAYU ADI KUSUMA, SP.</option><option value="Ir. Budi Hariyono, MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. Budi Hariyono, MP.</option><option value="Dr.Ir. BUDI PRASETYA, MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. BUDI PRASETYA, MP.</option><option value="Prof.Dr.Ir. BUDI SETIAWAN, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. BUDI SETIAWAN, MS.</option><option value="BUDI WALUYO, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;BUDI WALUYO, SP.,MP.</option><option value="CAHYO PRAYOGO, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;CAHYO PRAYOGO, SP.,MP.</option><option value="CHRISTANTI AGUSTINA, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;CHRISTANTI AGUSTINA, SP.</option><option value="Ir. CICIK UDAYANA, M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. CICIK UDAYANA, M.Si.</option><option value="CONDRO PUSPO N., SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;CONDRO PUSPO N., SP.</option><option value="Dr.Ir. DAMANHURI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. DAMANHURI, MS.</option><option value="DANNY DWI SAPUTRA, SP., M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;DANNY DWI SAPUTRA, SP., M.Si.</option><option value="DARMAWAN SAPTADI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;DARMAWAN SAPTADI, SP.,MP.</option><option value="Ir. DIDIK HARIYONO, SU." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. DIDIK HARIYONO, SU.</option><option value="Ir. DIDIK SUPRAYOGO,M.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. DIDIK SUPRAYOGO,M.Sc.,Ph.D.</option><option value="DINA NOVIA PRIMININGTYAS, SP.,M.Si" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;DINA NOVIA PRIMININGTYAS, SP.,M.Si</option><option value="Prof.Dr.Ir. DJOKO KOESTIONO, SU." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. DJOKO KOESTIONO, SU.</option><option value="DWI RETNO ANDRIANI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;DWI RETNO ANDRIANI, SP.,MP.</option><option value="Ir. EDI DWI CAHYONO, M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. EDI DWI CAHYONO, M.Sc.</option><option value="Dr. Ir. Edy Suminarti, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr. Ir. Edy Suminarti, MS.</option><option value="Ir. EFFY YUSWITA, M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. EFFY YUSWITA, M.Si.</option><option value="Prof.Ir. EKO HANDAYANTO,M.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. EKO HANDAYANTO,M.Sc.,Ph.D.</option><option value="Prof.Dr.Ir. EKO WIDARYANTO,SU." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. EKO WIDARYANTO,SU.</option><option value="Ir. ELLIS NIHAYATI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. ELLIS NIHAYATI, MS.</option><option value="Ir. ENDANG LISTYARINI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. ENDANG LISTYARINI, MS.</option><option value="EUIS ELIH NURLAELIH, SP.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;EUIS ELIH NURLAELIH, SP.,M.Si.</option><option value="FAHRIYAH, SP.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;FAHRIYAH, SP.,M.Si.</option><option value="FERY ABDUL CHOLIQ, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;FERY ABDUL CHOLIQ, SP.</option><option value="FITRIA DINA RIANA, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;FITRIA DINA RIANA, SP.,MP.</option><option value="Dr.Ir. GATOT MUDJIONO" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. GATOT MUDJIONO</option><option value="HAGUS TARNO, SP.,MP., Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;HAGUS TARNO, SP.,MP., Ph.D.</option><option value="Ir. HAMID HIDAYAT, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. HAMID HIDAYAT, MS.</option><option value="Ir. HERU SANTOSO HADI SUBAGYO,SU." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. HERU SANTOSO HADI SUBAGYO,SU.</option><option value="HERY TOIBA, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;HERY TOIBA, SP.,MP.</option><option value="Ir. HESTI RUKMIATI, Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. HESTI RUKMIATI, Ph.D.</option><option value="HESTI UTAMI N, SP.Grad.Dip.EMD.MEMD" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;HESTI UTAMI N, SP.Grad.Dip.EMD.MEMD</option><option value="Prof.Dr.Ir. HUSNI THAMRIN SEBAYANG, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. HUSNI THAMRIN SEBAYANG, MS.</option><option value="Prof.Dr.Ir. IKA ROCHDJATUN SASTRAHIDAYAT" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. IKA ROCHDJATUN SASTRAHIDAYAT</option><option value="IVA DEWI LESTARININGSIH, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;IVA DEWI LESTARININGSIH, SP.</option><option value="IZMI YULIANAH, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;IZMI YULIANAH, SP.,MP.</option><option value="Prof.Dr.Ir. JODI MOENANDIR ,Dipl.Agr.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. JODI MOENANDIR ,Dipl.Agr.Sc.</option><option value="KARUNIAWAN PUJI WICAKSONO, SP.,MP.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;KARUNIAWAN PUJI WICAKSONO, SP.,MP.,Ph.D.</option><option value="Prof.Dr.Ir. KEPPI SUKESI,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. KEPPI SUKESI,MS.</option><option value="Prof.Dr.Ir. KLIWON HIDAYAT,MS" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. KLIWON HIDAYAT,MS</option><option value="Ir. KOESRIHARTI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. KOESRIHARTI, MS.</option><option value="Prof.Ir. KURNIATUN HAIRIAH, Ph.D. " <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. KURNIATUN HAIRIAH, Ph.D. </option><option value="KURNIAWAN SIGIT WICAKSONO, SP., M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;KURNIAWAN SIGIT WICAKSONO, SP., M.Sc.</option><option value="Prof.Dr.Ir. KUSWANTO,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. KUSWANTO,MP.</option><option value="LENNY SRI NOPRIANI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;LENNY SRI NOPRIANI, SP.,MP.</option><option value="Dr.Ir. LILIEK AGUSTINA, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. LILIEK AGUSTINA, MS.</option><option value="Prof.Ir. LILIEK SULISTYOWATI, Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. LILIEK SULISTYOWATI, Ph.D.</option><option value="Ir. LILIK SETYOBUDI, MS.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. LILIK SETYOBUDI, MS.,Ph.D.</option><option value="Prof.Ir. LITA SOETOPO, MS., Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. LITA SOETOPO, MS., Ph.D.</option><option value="Ir. LUDJI PANTJA ASTUTI,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. LUDJI PANTJA ASTUTI,MS.</option><option value="LUQMAN QURATA AINI, SP.,MP.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;LUQMAN QURATA AINI, SP.,MP.,Ph.D.</option><option value="MANGKU PURNOMO, SP.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;MANGKU PURNOMO, SP.,M.Si.</option><option value="MEDHA BASKARA, SP.,MT." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;MEDHA BASKARA, SP.,MT.</option><option value="Dr.Ir. MINTARTO MARTOSUDIRO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. MINTARTO MARTOSUDIRO,MS.</option><option value="MOCH. AGUS JUNAIDI, SP.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;MOCH. AGUS JUNAIDI, SP.,M.Si.</option><option value="MOCH. SYAMSUL HADI, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;MOCH. SYAMSUL HADI, SP.</option><option value="Dr.Ir. MOCH.DAWAM MAGHFOER, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. MOCH.DAWAM MAGHFOER, MS.</option><option value="Prof.Dr.Ir. MOCH.MUSLICH MUSTADJAB,M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. MOCH.MUSLICH MUSTADJAB,M.Sc.</option><option value="Prof.Dr.Ir. MOCHAMMAD MUNIR, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. MOCHAMMAD MUNIR, MS.</option><option value="Ir. MOCHAMMAD NAWAWI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. MOCHAMMAD NAWAWI, MS.</option><option value="MOCHAMMAD ROVIQ, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;MOCHAMMAD ROVIQ, SP.,MP.</option><option value="Prof.Dr.Ir. MOCHTAR LUTFI RAYES, M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. MOCHTAR LUTFI RAYES, M.Sc.</option><option value="Prof.Dr.Ir. MOHAMAD IKSAN SEMAOEN,M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. MOHAMAD IKSAN SEMAOEN,M.Sc.</option><option value="Dr.Ir. MUDJI SANTOSO, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. MUDJI SANTOSO, MS.</option><option value="Ir. NIDAMULYAWATY MAARTHEN,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. NIDAMULYAWATY MAARTHEN,M.Si.</option><option value="NIKEN KENDARINI, SP.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;NIKEN KENDARINI, SP.,M.Si.</option><option value="NINA DWI LESTARI, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;NINA DWI LESTARI, SP.</option><option value="Ir. NINUK HERLINA, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. NINUK HERLINA, MS.</option><option value="NOER RAHMI ARDIARINI, SP.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;NOER RAHMI ARDIARINI, SP.,M.Si.</option><option value="Prof.Dr.Ir. NUHFIL HANANI AR, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. NUHFIL HANANI AR, MS.</option><option value="NUNUN BARUNAWATI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;NUNUN BARUNAWATI, SP.,MP.</option><option value="NUR AZIZAH, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;NUR AZIZAH, SP.,MP.</option><option value="NUR BALADINA, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;NUR BALADINA, SP.,MP.</option><option value="Prof.Dr.Ir. NUR BASUKI" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. NUR BASUKI</option><option value="Dr.Ir. NUR EDY SUMINARTI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. NUR EDY SUMINARTI, MS.</option><option value="Dr.Ir. NURUL AINI,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. NURUL AINI,MS.</option><option value="RACHMAN HARTONO, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;RACHMAN HARTONO, SP.,MP.</option><option value="Dr.Ir. RATNO DWI SANTOSO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. RATNO DWI SANTOSO,MS.</option><option value="Prof.Ir. RATYA ANINDITA, MS., Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. RATYA ANINDITA, MS., Ph.D.</option><option value="Ir. RESPATIJARTI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. RESPATIJARTI, MS.</option><option value="RESTU RIZKYTA KUSUMA, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;RESTU RIZKYTA KUSUMA, SP.</option><option value="Dr.Ir. RETNO DYAH PUSPITARINI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. RETNO DYAH PUSPITARINI, MS.</option><option value="Ir. RETNO SUNTARI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. RETNO SUNTARI, MS.</option><option value="REZA SAFITRI, S.Sos.,M.Si." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;REZA SAFITRI, S.Sos.,M.Si.</option><option value="RINA RACHMAWATI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;RINA RACHMAWATI, SP.,MP.</option><option value="Dr.Ir. RINI DWIASTUTI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. RINI DWIASTUTI, MS.</option><option value="RIYANTI ISASKAR, SP.,M.Si" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;RIYANTI ISASKAR, SP.,M.Si</option><option value="Dr.Ir. ROEDY SOELISTYONO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. ROEDY SOELISTYONO,MS.</option><option value="ROSIHAN ASMARA, SE.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;ROSIHAN ASMARA, SE.,MP.</option><option value="Ir. ROSILAWATI,M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. ROSILAWATI,M.Sc.</option><option value="Ir. Rr.JULIA WIDYANINGSIH,M.Sc" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. Rr.JULIA WIDYANINGSIH,M.Sc</option><option value="Dr.Ir. SALYO SUTRISNO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SALYO SUTRISNO,MS.</option><option value="SATIVANDI RIZA, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;SATIVANDI RIZA, SP.</option><option value="SETIYO YULI HANDONO, SP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;SETIYO YULI HANDONO, SP.</option><option value="Dr.Ir. SETYONO YUDO TYASMORO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SETYONO YUDO TYASMORO,MS.</option><option value="SILVANA MAULIDAH, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;SILVANA MAULIDAH, SP.,MP.</option><option value="SISCA FAJRIANI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;SISCA FAJRIANI, SP.,MP.</option><option value="Dr. Ir. SITAWATI,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr. Ir. SITAWATI,MS.</option><option value="Prof.Dr.Ir. SITI RASMINAH CHAILANI S." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SITI RASMINAH CHAILANI S.</option><option value="Prof.Dr.Ir. SOEKARTAWI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SOEKARTAWI, MS.</option><option value="Prof.Dr.Ir. SOEMARNO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SOEMARNO,MS.</option><option value="Dr.Ir. SRI KARINDAH, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SRI KARINDAH, MS.</option><option value="Ir. SRI LESTARI PURNAMANINGSIH, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. SRI LESTARI PURNAMANINGSIH, MS.</option><option value="Dr.Ir. SRI RAHAYU UTAMI, M.Sc." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SRI RAHAYU UTAMI, M.Sc.</option><option value="Dr.Ir. SUDARTO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SUDARTO,MS.</option><option value="Prof.Dr.Ir. SUDIARSO, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SUDIARSO, MS.</option><option value="Dr.Ir. SUGENG PRIJONO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SUGENG PRIJONO,MS.</option><option value="Prof.Dr.Ir. SUGIYANTO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SUGIYANTO,MS.</option><option value="Dr.Ir. SUHARTINI,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SUHARTINI,MP.</option><option value="SUJARWO, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;SUJARWO, SP.,MP.</option><option value="Ir. SUKINDAR, MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. SUKINDAR, MP.</option><option value="Prof.Ir. SUMERU ASHARI, M.Agr.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. SUMERU ASHARI, M.Agr.Sc.,Ph.D.</option><option value="Ir. SUNARTO ISMUNANDAR, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. SUNARTO ISMUNANDAR, MS.</option><option value="Ir. SUNARYO, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. SUNARYO, MS.</option><option value="Dr.Ir. SYAFRIAL, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SYAFRIAL, MS.</option><option value="SYAHRUL KURNIAWAN, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;SYAHRUL KURNIAWAN, SP.,MP.</option><option value="Dr.Ir. SYAMSUDDIN DJAUHARI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. SYAMSUDDIN DJAUHARI, MS.</option><option value="Prof.Dr.Ir. SYAMSULBAHRI,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SYAMSULBAHRI,MS.</option><option value="Prof.Dr.Ir. SYEKHFANI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. SYEKHFANI, MS.</option><option value="Prof.Ir. SYUKUR MAKMUR SITOMPUL, Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. SYUKUR MAKMUR SITOMPUL, Ph.D.</option><option value="TATIEK KOERNIAWATI ANDAJANI, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;TATIEK KOERNIAWATI ANDAJANI, SP.,MP.</option><option value="Prof.Dr.Ir. TATIEK WARDIYATI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. TATIEK WARDIYATI, MS.</option><option value="Ir. TITIEK ISLAMI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. TITIEK ISLAMI, MS.</option><option value="Dr.Ir. TITIN SUMARNI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. TITIN SUMARNI, MS.</option><option value="Dr.Ir. TOTO HIMAWAN,SU" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. TOTO HIMAWAN,SU</option><option value="TRI WAHYU NUGROHO, SP.,M.Si" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;TRI WAHYU NUGROHO, SP.,M.Si</option><option value="Prof.Dr.Ir. TUTUNG HADI ASTONO,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. TUTUNG HADI ASTONO,MS.</option><option value="Prof.Ir. WANI HADI UTOMO,Ph.D." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Ir. WANI HADI UTOMO,Ph.D.</option><option value="Ir.WIDIANTO,M.Sc" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir.WIDIANTO,M.Sc</option><option value="WISNU EKO MURDIONO, SP., MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;WISNU EKO MURDIONO, SP., MP.</option><option value="WISYNU ARI GUTAMA, SP., MMA." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;WISYNU ARI GUTAMA, SP., MMA.</option><option value="WIWIN SUMIYA DWI YAMIKA, SP.,MP." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;WIWIN SUMIYA DWI YAMIKA, SP.,MP.</option><option value="Ir. Y.B.SUWASONO HEDDY ,MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Ir. Y.B.SUWASONO HEDDY ,MS.</option><option value="Dr.Ir. YAYUK YULIATI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr.Ir. YAYUK YULIATI, MS.</option><option value="Prof.Dr.Ir. YOGI SUGITO" <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. YOGI SUGITO</option><option value="Dr. Ir. YULIA NURAINI, MS." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Dr. Ir. YULIA NURAINI, MS.</option><option value="Prof.Dr.Ir. ZAENAL KUSUMA, SU." <br="">
Notice:  Undefined variable: dos1 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 150
&gt;Prof.Dr.Ir. ZAENAL KUSUMA, SU.</option>
Warning:  mysql_close(): no MySQL-Link resource supplied in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 153
					</select>
					</div>
				</div>
				<div class="row-form">
					<div class="span2">Pembimping 2:</div>
					<div class="span10">
					<select name="dos2" id="dos2" size="1">
						<option value="............................" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;............................</option><option value="Ir. ABD.CHOLIL" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. ABD.CHOLIL</option><option value="Prof.Dr.Ir. ABDUL LATIEF ABADI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. ABDUL LATIEF ABADI, MS.</option><option value="Dr.Ir. ABDUL MUKRI PRABOWO, M.Agr.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. ABDUL MUKRI PRABOWO, M.Agr.Sc.</option><option value="Dr.Ir. ABDUL WAHIB MUHAIMIN, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. ABDUL WAHIB MUHAIMIN, MS.</option><option value="AFIFUDDIN LATIF ADIREDJO SP., M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;AFIFUDDIN LATIF ADIREDJO SP., M.Sc.</option><option value="Dr.Ir. AGUNG NUGROHO, SU.." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. AGUNG NUGROHO, SU..</option><option value="Dr.Ir. AGUS SURYANTO, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. AGUS SURYANTO, MS.</option><option value="Ir. AGUSTINA SHINTA HARTATI WAHYUNINGTYAS, MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. AGUSTINA SHINTA HARTATI WAHYUNINGTYAS, MP.</option><option value="Ir. AINURRASJID, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. AINURRASJID, MS.</option><option value="Dr.Ir. AMINUDIN AFANDHI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. AMINUDIN AFANDHI, MS.</option><option value="Dr.Ir. ANDY SOEGIANTO, CESA." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. ANDY SOEGIANTO, CESA.</option><option value="ANNA SATYANA KARYAWATI SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;ANNA SATYANA KARYAWATI SP.,MP.</option><option value="Dr. ANTON MUHIBUDDIN, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr. ANTON MUHIBUDDIN, SP.,MP.</option><option value="Prof.Dr.Ir. ARIFFIN, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. ARIFFIN, MS.</option><option value="Ir. ARIFIN NOOR SUGIHARTO, M.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. ARIFIN NOOR SUGIHARTO, M.Sc.,Ph.D.</option><option value="Prof.Dr.Ir. BAMBANG GURITNO" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. BAMBANG GURITNO</option><option value="Ir. BAMBANG SISWANTO, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. BAMBANG SISWANTO, MS.</option><option value="Dr.Ir. BAMBANG TRI RAHARDJO, SU." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. BAMBANG TRI RAHARDJO, SU.</option><option value="BAYU ADI KUSUMA, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;BAYU ADI KUSUMA, SP.</option><option value="Ir. Budi Hariyono, MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. Budi Hariyono, MP.</option><option value="Dr.Ir. BUDI PRASETYA, MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. BUDI PRASETYA, MP.</option><option value="Prof.Dr.Ir. BUDI SETIAWAN, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. BUDI SETIAWAN, MS.</option><option value="BUDI WALUYO, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;BUDI WALUYO, SP.,MP.</option><option value="CAHYO PRAYOGO, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;CAHYO PRAYOGO, SP.,MP.</option><option value="CHRISTANTI AGUSTINA, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;CHRISTANTI AGUSTINA, SP.</option><option value="Ir. CICIK UDAYANA, M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. CICIK UDAYANA, M.Si.</option><option value="CONDRO PUSPO N., SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;CONDRO PUSPO N., SP.</option><option value="Dr.Ir. DAMANHURI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. DAMANHURI, MS.</option><option value="DANNY DWI SAPUTRA, SP., M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;DANNY DWI SAPUTRA, SP., M.Si.</option><option value="DARMAWAN SAPTADI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;DARMAWAN SAPTADI, SP.,MP.</option><option value="Ir. DIDIK HARIYONO, SU." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. DIDIK HARIYONO, SU.</option><option value="Ir. DIDIK SUPRAYOGO,M.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. DIDIK SUPRAYOGO,M.Sc.,Ph.D.</option><option value="DINA NOVIA PRIMININGTYAS, SP.,M.Si" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;DINA NOVIA PRIMININGTYAS, SP.,M.Si</option><option value="Prof.Dr.Ir. DJOKO KOESTIONO, SU." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. DJOKO KOESTIONO, SU.</option><option value="DWI RETNO ANDRIANI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;DWI RETNO ANDRIANI, SP.,MP.</option><option value="Ir. EDI DWI CAHYONO, M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. EDI DWI CAHYONO, M.Sc.</option><option value="Dr. Ir. Edy Suminarti, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr. Ir. Edy Suminarti, MS.</option><option value="Ir. EFFY YUSWITA, M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. EFFY YUSWITA, M.Si.</option><option value="Prof.Ir. EKO HANDAYANTO,M.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. EKO HANDAYANTO,M.Sc.,Ph.D.</option><option value="Prof.Dr.Ir. EKO WIDARYANTO,SU." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. EKO WIDARYANTO,SU.</option><option value="Ir. ELLIS NIHAYATI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. ELLIS NIHAYATI, MS.</option><option value="Ir. ENDANG LISTYARINI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. ENDANG LISTYARINI, MS.</option><option value="EUIS ELIH NURLAELIH, SP.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;EUIS ELIH NURLAELIH, SP.,M.Si.</option><option value="FAHRIYAH, SP.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;FAHRIYAH, SP.,M.Si.</option><option value="FERY ABDUL CHOLIQ, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;FERY ABDUL CHOLIQ, SP.</option><option value="FITRIA DINA RIANA, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;FITRIA DINA RIANA, SP.,MP.</option><option value="Dr.Ir. GATOT MUDJIONO" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. GATOT MUDJIONO</option><option value="HAGUS TARNO, SP.,MP., Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;HAGUS TARNO, SP.,MP., Ph.D.</option><option value="Ir. HAMID HIDAYAT, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. HAMID HIDAYAT, MS.</option><option value="Ir. HERU SANTOSO HADI SUBAGYO,SU." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. HERU SANTOSO HADI SUBAGYO,SU.</option><option value="HERY TOIBA, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;HERY TOIBA, SP.,MP.</option><option value="Ir. HESTI RUKMIATI, Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. HESTI RUKMIATI, Ph.D.</option><option value="HESTI UTAMI N, SP.Grad.Dip.EMD.MEMD" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;HESTI UTAMI N, SP.Grad.Dip.EMD.MEMD</option><option value="Prof.Dr.Ir. HUSNI THAMRIN SEBAYANG, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. HUSNI THAMRIN SEBAYANG, MS.</option><option value="Prof.Dr.Ir. IKA ROCHDJATUN SASTRAHIDAYAT" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. IKA ROCHDJATUN SASTRAHIDAYAT</option><option value="IVA DEWI LESTARININGSIH, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;IVA DEWI LESTARININGSIH, SP.</option><option value="IZMI YULIANAH, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;IZMI YULIANAH, SP.,MP.</option><option value="Prof.Dr.Ir. JODI MOENANDIR ,Dipl.Agr.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. JODI MOENANDIR ,Dipl.Agr.Sc.</option><option value="KARUNIAWAN PUJI WICAKSONO, SP.,MP.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;KARUNIAWAN PUJI WICAKSONO, SP.,MP.,Ph.D.</option><option value="Prof.Dr.Ir. KEPPI SUKESI,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. KEPPI SUKESI,MS.</option><option value="Prof.Dr.Ir. KLIWON HIDAYAT,MS" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. KLIWON HIDAYAT,MS</option><option value="Ir. KOESRIHARTI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. KOESRIHARTI, MS.</option><option value="Prof.Ir. KURNIATUN HAIRIAH, Ph.D. " <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. KURNIATUN HAIRIAH, Ph.D. </option><option value="KURNIAWAN SIGIT WICAKSONO, SP., M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;KURNIAWAN SIGIT WICAKSONO, SP., M.Sc.</option><option value="Prof.Dr.Ir. KUSWANTO,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. KUSWANTO,MP.</option><option value="LENNY SRI NOPRIANI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;LENNY SRI NOPRIANI, SP.,MP.</option><option value="Dr.Ir. LILIEK AGUSTINA, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. LILIEK AGUSTINA, MS.</option><option value="Prof.Ir. LILIEK SULISTYOWATI, Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. LILIEK SULISTYOWATI, Ph.D.</option><option value="Ir. LILIK SETYOBUDI, MS.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. LILIK SETYOBUDI, MS.,Ph.D.</option><option value="Prof.Ir. LITA SOETOPO, MS., Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. LITA SOETOPO, MS., Ph.D.</option><option value="Ir. LUDJI PANTJA ASTUTI,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. LUDJI PANTJA ASTUTI,MS.</option><option value="LUQMAN QURATA AINI, SP.,MP.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;LUQMAN QURATA AINI, SP.,MP.,Ph.D.</option><option value="MANGKU PURNOMO, SP.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;MANGKU PURNOMO, SP.,M.Si.</option><option value="MEDHA BASKARA, SP.,MT." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;MEDHA BASKARA, SP.,MT.</option><option value="Dr.Ir. MINTARTO MARTOSUDIRO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. MINTARTO MARTOSUDIRO,MS.</option><option value="MOCH. AGUS JUNAIDI, SP.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;MOCH. AGUS JUNAIDI, SP.,M.Si.</option><option value="MOCH. SYAMSUL HADI, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;MOCH. SYAMSUL HADI, SP.</option><option value="Dr.Ir. MOCH.DAWAM MAGHFOER, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. MOCH.DAWAM MAGHFOER, MS.</option><option value="Prof.Dr.Ir. MOCH.MUSLICH MUSTADJAB,M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. MOCH.MUSLICH MUSTADJAB,M.Sc.</option><option value="Prof.Dr.Ir. MOCHAMMAD MUNIR, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. MOCHAMMAD MUNIR, MS.</option><option value="Ir. MOCHAMMAD NAWAWI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. MOCHAMMAD NAWAWI, MS.</option><option value="MOCHAMMAD ROVIQ, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;MOCHAMMAD ROVIQ, SP.,MP.</option><option value="Prof.Dr.Ir. MOCHTAR LUTFI RAYES, M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. MOCHTAR LUTFI RAYES, M.Sc.</option><option value="Prof.Dr.Ir. MOHAMAD IKSAN SEMAOEN,M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. MOHAMAD IKSAN SEMAOEN,M.Sc.</option><option value="Dr.Ir. MUDJI SANTOSO, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. MUDJI SANTOSO, MS.</option><option value="Ir. NIDAMULYAWATY MAARTHEN,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. NIDAMULYAWATY MAARTHEN,M.Si.</option><option value="NIKEN KENDARINI, SP.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;NIKEN KENDARINI, SP.,M.Si.</option><option value="NINA DWI LESTARI, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;NINA DWI LESTARI, SP.</option><option value="Ir. NINUK HERLINA, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. NINUK HERLINA, MS.</option><option value="NOER RAHMI ARDIARINI, SP.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;NOER RAHMI ARDIARINI, SP.,M.Si.</option><option value="Prof.Dr.Ir. NUHFIL HANANI AR, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. NUHFIL HANANI AR, MS.</option><option value="NUNUN BARUNAWATI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;NUNUN BARUNAWATI, SP.,MP.</option><option value="NUR AZIZAH, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;NUR AZIZAH, SP.,MP.</option><option value="NUR BALADINA, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;NUR BALADINA, SP.,MP.</option><option value="Prof.Dr.Ir. NUR BASUKI" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. NUR BASUKI</option><option value="Dr.Ir. NUR EDY SUMINARTI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. NUR EDY SUMINARTI, MS.</option><option value="Dr.Ir. NURUL AINI,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. NURUL AINI,MS.</option><option value="RACHMAN HARTONO, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;RACHMAN HARTONO, SP.,MP.</option><option value="Dr.Ir. RATNO DWI SANTOSO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. RATNO DWI SANTOSO,MS.</option><option value="Prof.Ir. RATYA ANINDITA, MS., Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. RATYA ANINDITA, MS., Ph.D.</option><option value="Ir. RESPATIJARTI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. RESPATIJARTI, MS.</option><option value="RESTU RIZKYTA KUSUMA, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;RESTU RIZKYTA KUSUMA, SP.</option><option value="Dr.Ir. RETNO DYAH PUSPITARINI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. RETNO DYAH PUSPITARINI, MS.</option><option value="Ir. RETNO SUNTARI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. RETNO SUNTARI, MS.</option><option value="REZA SAFITRI, S.Sos.,M.Si." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;REZA SAFITRI, S.Sos.,M.Si.</option><option value="RINA RACHMAWATI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;RINA RACHMAWATI, SP.,MP.</option><option value="Dr.Ir. RINI DWIASTUTI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. RINI DWIASTUTI, MS.</option><option value="RIYANTI ISASKAR, SP.,M.Si" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;RIYANTI ISASKAR, SP.,M.Si</option><option value="Dr.Ir. ROEDY SOELISTYONO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. ROEDY SOELISTYONO,MS.</option><option value="ROSIHAN ASMARA, SE.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;ROSIHAN ASMARA, SE.,MP.</option><option value="Ir. ROSILAWATI,M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. ROSILAWATI,M.Sc.</option><option value="Ir. Rr.JULIA WIDYANINGSIH,M.Sc" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. Rr.JULIA WIDYANINGSIH,M.Sc</option><option value="Dr.Ir. SALYO SUTRISNO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SALYO SUTRISNO,MS.</option><option value="SATIVANDI RIZA, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;SATIVANDI RIZA, SP.</option><option value="SETIYO YULI HANDONO, SP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;SETIYO YULI HANDONO, SP.</option><option value="Dr.Ir. SETYONO YUDO TYASMORO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SETYONO YUDO TYASMORO,MS.</option><option value="SILVANA MAULIDAH, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;SILVANA MAULIDAH, SP.,MP.</option><option value="SISCA FAJRIANI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;SISCA FAJRIANI, SP.,MP.</option><option value="Dr. Ir. SITAWATI,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr. Ir. SITAWATI,MS.</option><option value="Prof.Dr.Ir. SITI RASMINAH CHAILANI S." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SITI RASMINAH CHAILANI S.</option><option value="Prof.Dr.Ir. SOEKARTAWI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SOEKARTAWI, MS.</option><option value="Prof.Dr.Ir. SOEMARNO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SOEMARNO,MS.</option><option value="Dr.Ir. SRI KARINDAH, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SRI KARINDAH, MS.</option><option value="Ir. SRI LESTARI PURNAMANINGSIH, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. SRI LESTARI PURNAMANINGSIH, MS.</option><option value="Dr.Ir. SRI RAHAYU UTAMI, M.Sc." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SRI RAHAYU UTAMI, M.Sc.</option><option value="Dr.Ir. SUDARTO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SUDARTO,MS.</option><option value="Prof.Dr.Ir. SUDIARSO, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SUDIARSO, MS.</option><option value="Dr.Ir. SUGENG PRIJONO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SUGENG PRIJONO,MS.</option><option value="Prof.Dr.Ir. SUGIYANTO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SUGIYANTO,MS.</option><option value="Dr.Ir. SUHARTINI,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SUHARTINI,MP.</option><option value="SUJARWO, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;SUJARWO, SP.,MP.</option><option value="Ir. SUKINDAR, MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. SUKINDAR, MP.</option><option value="Prof.Ir. SUMERU ASHARI, M.Agr.Sc.,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. SUMERU ASHARI, M.Agr.Sc.,Ph.D.</option><option value="Ir. SUNARTO ISMUNANDAR, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. SUNARTO ISMUNANDAR, MS.</option><option value="Ir. SUNARYO, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. SUNARYO, MS.</option><option value="Dr.Ir. SYAFRIAL, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SYAFRIAL, MS.</option><option value="SYAHRUL KURNIAWAN, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;SYAHRUL KURNIAWAN, SP.,MP.</option><option value="Dr.Ir. SYAMSUDDIN DJAUHARI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. SYAMSUDDIN DJAUHARI, MS.</option><option value="Prof.Dr.Ir. SYAMSULBAHRI,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SYAMSULBAHRI,MS.</option><option value="Prof.Dr.Ir. SYEKHFANI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. SYEKHFANI, MS.</option><option value="Prof.Ir. SYUKUR MAKMUR SITOMPUL, Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. SYUKUR MAKMUR SITOMPUL, Ph.D.</option><option value="TATIEK KOERNIAWATI ANDAJANI, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;TATIEK KOERNIAWATI ANDAJANI, SP.,MP.</option><option value="Prof.Dr.Ir. TATIEK WARDIYATI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. TATIEK WARDIYATI, MS.</option><option value="Ir. TITIEK ISLAMI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. TITIEK ISLAMI, MS.</option><option value="Dr.Ir. TITIN SUMARNI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. TITIN SUMARNI, MS.</option><option value="Dr.Ir. TOTO HIMAWAN,SU" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. TOTO HIMAWAN,SU</option><option value="TRI WAHYU NUGROHO, SP.,M.Si" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;TRI WAHYU NUGROHO, SP.,M.Si</option><option value="Prof.Dr.Ir. TUTUNG HADI ASTONO,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. TUTUNG HADI ASTONO,MS.</option><option value="Prof.Ir. WANI HADI UTOMO,Ph.D." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Ir. WANI HADI UTOMO,Ph.D.</option><option value="Ir.WIDIANTO,M.Sc" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir.WIDIANTO,M.Sc</option><option value="WISNU EKO MURDIONO, SP., MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;WISNU EKO MURDIONO, SP., MP.</option><option value="WISYNU ARI GUTAMA, SP., MMA." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;WISYNU ARI GUTAMA, SP., MMA.</option><option value="WIWIN SUMIYA DWI YAMIKA, SP.,MP." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;WIWIN SUMIYA DWI YAMIKA, SP.,MP.</option><option value="Ir. Y.B.SUWASONO HEDDY ,MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Ir. Y.B.SUWASONO HEDDY ,MS.</option><option value="Dr.Ir. YAYUK YULIATI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr.Ir. YAYUK YULIATI, MS.</option><option value="Prof.Dr.Ir. YOGI SUGITO" <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. YOGI SUGITO</option><option value="Dr. Ir. YULIA NURAINI, MS." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Dr. Ir. YULIA NURAINI, MS.</option><option value="Prof.Dr.Ir. ZAENAL KUSUMA, SU." <br="">
Notice:  Undefined variable: dos2 in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 168
&gt;Prof.Dr.Ir. ZAENAL KUSUMA, SU.</option>
Warning:  mysql_close(): no MySQL-Link resource supplied in D:\1__SERVER\xampp\htdocs\fp\akad\suratpenelitian.php on line 171
					</select>
					</div>
				</div>   
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
		<div class="block">
			<div class="head green">
				<div class="icon"><span class="ico-picture"></span></div>
				<h2>Sudah Pernah Buat? Cari Disini</h2>
			</div>
			<div class="data-fluid">
				<div id="jqxgrid" role="grid" align="left" class="jqx-grid jqx-reset jqx-rc-all jqx-widget jqx-widget-content" style="width: 100%; height: 400px;"><div style="overflow: hidden; position: absolute; width: 100%; height: 400px; visibility: hidden; display: none;" class="jqx-rc-all"><table cellspacing="0" cellpadding="0" style="z-index: 99999; margin-left: -66px; left: 50%; top: 50%; margin-top: -24px; position: relative; width: 112px; height: 50px; font-family: verdana; font-size: 12px; color: #767676; border-color: #898989; border-width: 1px; border-style: solid; background: #f6f6f6; border-collapse: collapse;" class="jqx-rc-all"><tbody><tr><td><div style="overflow: hidden; width: 32px; height: 32px;" class="jqx-grid-load"></div></td><td><span style="margin-left: 5px;">Loading...</span></td></tr></tbody></table></div><div style="overflow: hidden; -webkit-appearance: none; outline: none; width:100%; height: 100%; align:left; border: 0px; padding: 0px; margin: 0px; left: 0px; top: 0px; valign:top; position: relative;" tabindex="0"><div id="wrapperjqxgrid" style="overflow: hidden; -webkit-appearance: none; border: none; background: transparent; outline: none; width:100%; height: 100%; padding: 0px; margin: 0px; align:left; left: 0px; top: 0px; valign:top; position: relative;" tabindex="1"><div id="toolbarjqxgrid" style="visibility: hidden; left: 0px; top: 0px; position: absolute; height: 0px;" class="jqx-grid-toolbar jqx-widget-header"></div><div id="groupsheader" style="visibility: hidden; left: 0px; top: 0px; position: absolute; width: 336px; height: 34px;" class="jqx-grid-groups-header jqx-widget-header"></div><div id="contentjqxgrid" style="overflow: hidden; -webkit-appearance: none; background-color: transparent; outline: none; border: none; padding: 0px; margin: 0px; left: 0px; top: 0px; position: absolute; width: 336px; height: 401px; background-position: initial initial; background-repeat: initial initial;" class="jqx-reset" tabindex="2"><div style="overflow: hidden; display: block; height: 55px; width: 302px;" class="jqx-widget-header jqx-grid-header"><div id="columntablejqxgrid" style="height: 25px; position: relative; width: 300px; margin-left: 0px;"><div role="columnheader" style="z-index: 499; position: absolute; height: 100%; width: 100px; left: 0px;" class="jqx-grid-column-header jqx-widget-header"><div style="height: 100%; width: 100%;"><div style="padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; text-align: left; margin-left: 4px; margin-right: 2px; margin-bottom: 4px; margin-top: 4px;"><span style="text-overflow: ellipsis; cursor: default;">NIM</span></div><div class="iconscontainer" style="height: 25px; margin-left: -32px; display: block; position: absolute; left: 100%; top: 0%; width: 32px;"><div class="filtericon jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-filterbutton" style="width: 100%; height:100%;"></div></div><div class="sortasc jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-sortascbutton" style="width: 100%; height:100%;"></div></div><div class="sortdesc jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-sortdescbutton" style="width: 100%; height:100%;"></div></div></div><div style="height: 25px; display: none; left: 100%; top: 0%; position: absolute; width: 15px;" class="jqx-widget-header" id="2418-27-16-22-251625"><div class="jqx-grid-column-menubutton" style="width: 100%; height:100%;"></div></div></div></div><div role="columnheader" style="z-index: 498; position: absolute; height: 100%; width: 150px; left: 100px;" class="jqx-grid-column-header jqx-widget-header"><div style="height: 100%; width: 100%;"><div style="padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; text-align: left; margin-left: 4px; margin-right: 2px; margin-bottom: 4px; margin-top: 4px;"><span style="text-overflow: ellipsis; cursor: default;">NAMA</span></div><div class="iconscontainer" style="height: 25px; margin-left: -32px; display: block; position: absolute; left: 100%; top: 0%; width: 32px;"><div class="filtericon jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-filterbutton" style="width: 100%; height:100%;"></div></div><div class="sortasc jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-sortascbutton" style="width: 100%; height:100%;"></div></div><div class="sortdesc jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-sortdescbutton" style="width: 100%; height:100%;"></div></div></div><div style="height: 25px; display: none; left: 100%; top: 0%; position: absolute; width: 15px;" class="jqx-widget-header" id="3017-30-20-17-183127"><div class="jqx-grid-column-menubutton" style="width: 100%; height:100%;"></div></div></div></div><div role="columnheader" style="z-index: 497; position: absolute; height: 100%; width: 50px; left: 250px;" class="jqx-grid-column-header jqx-widget-header"><div style="height: 100%; width: 100%;"><div style="padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; text-align: left; margin-left: 4px; margin-right: 2px; margin-bottom: 4px; margin-top: 4px;"><span style="text-overflow: ellipsis; cursor: default;">Edit</span></div><div class="iconscontainer" style="height: 25px; margin-left: -32px; display: block; position: absolute; left: 100%; top: 0%; width: 32px;"><div class="filtericon jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-filterbutton" style="width: 100%; height:100%;"></div></div><div class="sortasc jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-sortascbutton" style="width: 100%; height:100%;"></div></div><div class="sortdesc jqx-widget-header" style="height: 25px; float: right; display: none; width: 16px;"><div class="jqx-grid-column-sortdescbutton" style="width: 100%; height:100%;"></div></div></div><div style="height: 25px; display: none; left: 100%; top: 0%; position: absolute; width: 15px;" class="jqx-widget-header" id="1821-31-26-19-283121"><div class="jqx-grid-column-menubutton" style="width: 100%; height:100%;"></div></div></div></div></div><div id="filterrow.jqxgrid" class="jqx-grid-cell jqx-grid-cell-pinned jqx-grid-cell-filter-row" style="height: 30px; width: 300px; border-top-width: 1px; border-right-width: 0px; margin-left: 0px;"><div style="position: relative; height: 30px; width: 302px;" id="row00jqxgrid"><div style="overflow: hidden; position: absolute; height: 100%; left: 0px; z-index: 13; width: 100px;" class="jqx-grid-cell jqx-grid-cell-pinned jqx-grid-cell-filter-row"><input autocomplete="off" type="textarea" id="jqxWidget9a9a627b" class="jqx-widget jqx-input jqx-widget-content" style="width: 90px; height: 20px; margin: 4px;"></div><div style="overflow: hidden; position: absolute; height: 100%; left: 100px; z-index: 12; width: 150px;" class="jqx-grid-cell jqx-grid-cell-pinned jqx-grid-cell-filter-row"><input autocomplete="off" type="textarea" id="jqxWidget98b6726b" class="jqx-widget jqx-input jqx-widget-content" style="width: 140px; height: 20px; margin: 4px;"></div><div style="overflow: hidden; position: absolute; height: 100%; left: 250px; z-index: 11; width: 50px;" class="jqx-grid-cell jqx-grid-cell-pinned jqx-grid-cell-filter-row"><input autocomplete="off" type="textarea" id="jqxWidget321fb6a6" class="jqx-widget jqx-input jqx-widget-content" style="width: 40px; height: 20px; margin: 4px;"></div></div></div></div><div style="width: 100%; overflow: hidden; position: absolute;" class="jqx-grid-content jqx-widget-content"><div id="contenttablejqxgrid" style="overflow: hidden; position: relative; opacity: 0.99; width: 336px; margin-left: 0px; top: 0px;" height="100%"><div role="row" style="position: relative; height: 344px;" id="row0jqxgrid"><div role="gridcell" style="left: 0px; z-index: 799; width: 336px; margin-left: 0px;" class="jqx-grid-cell jqx-grid-empty-cell"><span style="white-space: nowrap; float: left; margin-left: 50%; position: relative; left: -60.5px; top: 164px;">No data to display</span></div><div role="gridcell" style="left: 100px; z-index: 798; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell jqx-grid-empty-cell"></div><div role="gridcell" style="left: 250px; z-index: 797; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell jqx-grid-empty-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row1jqxgrid"><div role="gridcell" style="left: 0px; z-index: 796; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 795; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 794; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row2jqxgrid"><div role="gridcell" style="left: 0px; z-index: 793; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 792; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 791; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row3jqxgrid"><div role="gridcell" style="left: 0px; z-index: 790; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 789; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 788; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row4jqxgrid"><div role="gridcell" style="left: 0px; z-index: 787; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 786; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 785; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row5jqxgrid"><div role="gridcell" style="left: 0px; z-index: 784; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 783; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 782; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row6jqxgrid"><div role="gridcell" style="left: 0px; z-index: 781; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 780; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 779; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row7jqxgrid"><div role="gridcell" style="left: 0px; z-index: 778; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 777; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 776; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row8jqxgrid"><div role="gridcell" style="left: 0px; z-index: 775; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 774; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 773; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row9jqxgrid"><div role="gridcell" style="left: 0px; z-index: 772; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 771; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 770; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row10jqxgrid"><div role="gridcell" style="left: 0px; z-index: 769; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 768; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 767; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row11jqxgrid"><div role="gridcell" style="left: 0px; z-index: 766; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 765; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 764; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row12jqxgrid"><div role="gridcell" style="left: 0px; z-index: 763; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 762; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 761; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row13jqxgrid"><div role="gridcell" style="left: 0px; z-index: 760; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 759; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 758; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row14jqxgrid"><div role="gridcell" style="left: 0px; z-index: 757; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 756; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 755; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row15jqxgrid"><div role="gridcell" style="left: 0px; z-index: 754; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 753; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 752; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row16jqxgrid"><div role="gridcell" style="left: 0px; z-index: 751; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 750; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 749; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div><div role="row" style="position: relative; height: 25px;" id="row17jqxgrid"><div role="gridcell" style="left: 0px; z-index: 748; width:100px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 100px; z-index: 747; width:150px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div><div role="gridcell" style="left: 250px; z-index: 746; width:50px;" class="jqx-grid-cell jqx-grid-cleared-cell"></div></div></div></div><div style="z-index: 99999; visibility: hidden; position: absolute;" class="jqx-grid-selectionarea jqx-fill-state-pressed"></div></div><div id="verticalScrollBarjqxgrid" style="left: 317px; top: 0px; position: absolute; visibility: hidden; width: 15px; height: 398px;" class="jqx-scrollbar jqx-widget jqx-widget-content jqx-rc-all"><div id="jqxScrollOuterWrapverticalScrollBarjqxgrid" style="width:100%; height: 100%; align:left; border: 0px; valign:top; position: relative;" class="jqx-reset"><div id="jqxScrollWrapverticalScrollBarjqxgrid" style="width: 17px; height: 100%; left: 0px; top: 0px; position: absolute;" class="jqx-reset jqx-scrollbar-state-normal"><div id="jqxScrollBtnUpverticalScrollBarjqxgrid" style="left: 0px; top: 0px; position: absolute; width: 15px; height: 15px;" class="jqx-scrollbar-button-state-normal jqx-rc-t"><div class="jqx-reset jqx-icon-arrow-up"></div></div><div id="jqxScrollAreaUpverticalScrollBarjqxgrid" style="left: 0px; top: 17px; position: absolute; height: 0px; width: 15px;" class="jqx-reset"></div><div id="jqxScrollThumbverticalScrollBarjqxgrid" style="left: 0px; top: 17px; position: absolute; width: 15px; height: 99px; visibility: inherit;" class="jqx-scrollbar-thumb-state-normal jqx-fill-state-normal jqx-rc-all"></div><div id="jqxScrollAreaDownverticalScrollBarjqxgrid" style="left: 0px; top: 116px; position: absolute; height: 263px; width: 15px;" class="jqx-reset"></div><div id="jqxScrollBtnDownverticalScrollBarjqxgrid" style="left: 0px; top: 381px; position: absolute; width: 15px; height: 15px;" class="jqx-scrollbar-button-state-normal jqx-rc-b"><div class="jqx-reset jqx-icon-arrow-down"></div></div></div></div></div><div id="horizontalScrollBarjqxgrid" style="left: 0px; top: 381px; position: absolute; visibility: hidden; height: 15px; width: 334px;" class="jqx-scrollbar jqx-widget jqx-widget-content jqx-rc-all"><div id="jqxScrollOuterWraphorizontalScrollBarjqxgrid" style="width:100%; height: 100%; align:left; border: 0px; valign:top; position: relative;" class="jqx-reset"><div id="jqxScrollWraphorizontalScrollBarjqxgrid" style="width: 100%; height: 17px; left: 0px; top: 0px; position: absolute;" class="jqx-reset jqx-scrollbar-state-normal"><div id="jqxScrollBtnUphorizontalScrollBarjqxgrid" style="left: 0px; top: 0px; position: absolute; width: 15px; height: 15px;" class="jqx-scrollbar-button-state-normal jqx-rc-l"><div class="jqx-reset jqx-icon-arrow-left"></div></div><div id="jqxScrollAreaUphorizontalScrollBarjqxgrid" style="left: 17px; top: 0px; position: absolute; height: 15px;" class="jqx-reset"></div><div id="jqxScrollThumbhorizontalScrollBarjqxgrid" style="left: 17px; top: 0px; position: absolute; width: 71px; height: 15px; visibility: inherit;" class="jqx-scrollbar-thumb-state-normal-horizontal jqx-fill-state-normal jqx-rc-all"></div><div id="jqxScrollAreaDownhorizontalScrollBarjqxgrid" style="left: 90px; top: 0px; position: absolute; width: 227px; height: 15px;" class="jqx-reset"></div><div id="jqxScrollBtnDownhorizontalScrollBarjqxgrid" style="left: 317px; top: 0px; position: absolute; width: 15px; height: 15px;" class="jqx-scrollbar-button-state-normal jqx-rc-r"><div class="jqx-reset jqx-icon-arrow-right"></div></div></div></div></div><div id="bottomRight" style="left: 0px; top: 0px; border: none; position: absolute; visibility: hidden;" class="jqx-grid-bottomright"></div><div id="statusbarjqxgrid" style="left: 0px; top: 0px; position: absolute; height: 0px;" class="jqx-grid-statusbar jqx-widget-header"></div><div id="pagerjqxgrid" style="z-index: 20; left: 0px; top: 0px; position: absolute; height: 0px;" class="jqx-grid-pager jqx-widget-header"></div></div></div></div><table cellpadding="0" cellspacing="0" width="100%" class="table images lcnp">
					
				</table>                                                 
			</div>
		</div>
	</div>  
</div>
</div>    
</div>    
</div>
<link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css">
	<script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxdata.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxlistbox.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxdropdownlist.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxmenu.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.filter.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.sort.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.selection.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxpanel.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxcheckbox.js"></script>
	<script type="text/javascript" src="scripts/gettheme.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var theme = getDemoTheme();
            // prepare the data
            var source =
				{
					datatype: "json",
					datafields: [
					{ name: 'dot'},	
					{ name: 'jenis'},
					{ name: 'instansi'},	
					{ name: 'alamat'},
					{ name: 'kota'},	
					{ name: 'nama'},
					{ name: 'nim'},	
					{ name: 'smt'},
					{ name: 'hape'},	
					{ name: 'jurusan'},
					{ name: 'judul'},						
					{ name: 'dos1'},	
					{ name: 'dos2'},
					{ name: 'lokasi'},	
					{ name: 'bulan'},
					
					],
					url: 'getdatagrid2.php',
					cache: false
				};		
				
            var dataAdapter = new $.jqx.dataAdapter(source, { async: false, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
            // create jqxgrid.
            var editrow = -1;
			$("#jqxgrid").jqxGrid(
            {
                width: '100%',
                height: '100%',
                source: dataAdapter,
                theme: theme,
				showfilterrow: true,
				filterable: true,
                selectionmode: 'multiplecellsextended',
                columns: [
					{ text: 'NIM', columntype: 'textbox', filtertype: 'textbox', filtercondition: 'starts_with', datafield: 'nim', width: 100 },
					{ text: 'NAMA', columntype: 'textbox', filtertype: 'textbox', filtercondition: 'starts_with', datafield: 'nama', width: 150 },
					{ text: 'Edit', datafield: 'Edit', width: 50, columntype: 'button', cellsrenderer: function () {
						return "Edit";
						}, buttonclick: function (row) {
						 // open the popup window when the user clicks a button.
						editrow = row;	
						var offset = $("#jqxgrid").offset();						 
						 // get the clicked row's data and initialize the input fields.
						 var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);
						 $("#jenis").val(dataRecord.jenis);
						 $("#instansi").val(dataRecord.instansi);
						 $("#alamat").val(dataRecord.alamat);
						 $("#kota").val(dataRecord.kota);
						 $("#mhs").val(dataRecord.nama);
						 $("#nim").val(dataRecord.nim);						 
						 $("#smt").val(dataRecord.smt);
						 $("#hape").val(dataRecord.hape);
						 $("#jurusan").val(dataRecord.jurusan);
						 $("#wysiwyg").val(dataRecord.judul);						 
						 $("#dos1").val(dataRecord.dos1);
						 $("#dos2").val(dataRecord.dos2);
						 $("#lokasi").val(dataRecord.lokasi);
						 $("#bulan").val(dataRecord.bulan);
						 $("#idnya").val(dataRecord.dot);						 
						 // show the popup window.
						 window.location.reload(); 					 
						}
					},	
                ]
            });
			$("#Save").jqxButton({ theme: theme });
            $("#Save").click(function(){
			//Get values of the input fields and store it into the variables.
			var CHEKED = new Array();
			$("input[name='formDoor[]']:checked").each(function(){CHEKED.push($(this).val());});
			var JENIS=$("#jenis").val();
			var INSTANSI=$("#instansi").val();			
			var ALAMAT=$("#alamat").val();	
			var KOTA=$("#kota").val();			
			var MHS=$("#mhs").val();			
			var NIM=$("#nim").val();			
			var SMT=$("#smt").val();	
			var HP=$("#hape").val();
			var JUR=$("#jurusan").val();
			var JUDUL=$("#wysiwyg").val();			
			var DOS1=$("#dos1").val();
			var DOS2=$("#dos2").val();
			var LOKASI=$("#lokasi").val();
			var BULAN=$("#bulan").val();	
			//use the $.post() method to call insert.php file.. this is the ajax request
			$.post('insertsp.php', {jenis: JENIS, instansi: INSTANSI, alamat: ALAMAT, kota: KOTA, mhs: MHS, nim: NIM, smt: SMT, hape: HP, jurusan: JUR, judul: JUDUL, dos1: DOS1, dos2: DOS2, lokasi: LOKASI, bulan: BULAN, formDoor: CHEKED },
			function(data){
			$("#message").html(data);
			$("#message").hide();
			$("#message").fadeIn(1500); //Fade in the data given by the insert.php file
			});
			$("#jqxgrid").jqxGrid('updatebounddata');			
			window.location = 'antrian.php';
			return false;			
			});	
        });
    </script>



           <div class="cleditorPopup cleditorList" style="display: none;"><div style="font-family: Arial;">Arial</div><div style="font-family: 'Arial Black';">Arial Black</div><div style="font-family: 'Comic Sans MS';">Comic Sans MS</div><div style="font-family: 'Courier New';">Courier New</div><div style="font-family: Narrow;">Narrow</div><div style="font-family: Garamond;">Garamond</div><div style="font-family: Georgia;">Georgia</div><div style="font-family: Impact;">Impact</div><div style="font-family: 'Sans Serif';">Sans Serif</div><div style="font-family: serif;">Serif</div><div style="font-family: Tahoma;">Tahoma</div><div style="font-family: 'Trebuchet MS';">Trebuchet MS</div><div style="font-family: Verdana;">Verdana</div></div><div class="cleditorPopup cleditorList" style="display: none;"><div><font size="1">1</font></div><div><font size="2">2</font></div><div><font size="3">3</font></div><div><font size="4">4</font></div><div><font size="5">5</font></div><div><font size="6">6</font></div><div><font size="7">7</font></div></div><div class="cleditorPopup cleditorList" style="display: none;"><div><p>Paragraph</p></div><div><h1>Header 1</h1></div><div><h2>Header 2</h2></div><div><h3>Header 3</h3></div><div><h4>Header 4</h4></div><div><h5>Header 5</h5></div><div><h6>Header 6</h6></div></div><div class="cleditorPopup cleditorColor" style="display: none;"><div style="background-color: rgb(255, 255, 255);"></div><div style="background-color: rgb(255, 204, 204);"></div><div style="background-color: rgb(255, 204, 153);"></div><div style="background-color: rgb(255, 255, 153);"></div><div style="background-color: rgb(255, 255, 204);"></div><div style="background-color: rgb(153, 255, 153);"></div><div style="background-color: rgb(153, 255, 255);"></div><div style="background-color: rgb(204, 255, 255);"></div><div style="background-color: rgb(204, 204, 255);"></div><div style="background-color: rgb(255, 204, 255);"></div><div style="background-color: rgb(204, 204, 204);"></div><div style="background-color: rgb(255, 102, 102);"></div><div style="background-color: rgb(255, 153, 102);"></div><div style="background-color: rgb(255, 255, 102);"></div><div style="background-color: rgb(255, 255, 51);"></div><div style="background-color: rgb(102, 255, 153);"></div><div style="background-color: rgb(51, 255, 255);"></div><div style="background-color: rgb(102, 255, 255);"></div><div style="background-color: rgb(153, 153, 255);"></div><div style="background-color: rgb(255, 153, 255);"></div><div style="background-color: rgb(187, 187, 187);"></div><div style="background-color: rgb(255, 0, 0);"></div><div style="background-color: rgb(255, 153, 0);"></div><div style="background-color: rgb(255, 204, 102);"></div><div style="background-color: rgb(255, 255, 0);"></div><div style="background-color: rgb(51, 255, 51);"></div><div style="background-color: rgb(102, 204, 204);"></div><div style="background-color: rgb(51, 204, 255);"></div><div style="background-color: rgb(102, 102, 204);"></div><div style="background-color: rgb(204, 102, 204);"></div><div style="background-color: rgb(153, 153, 153);"></div><div style="background-color: rgb(204, 0, 0);"></div><div style="background-color: rgb(255, 102, 0);"></div><div style="background-color: rgb(255, 204, 51);"></div><div style="background-color: rgb(255, 204, 0);"></div><div style="background-color: rgb(51, 204, 0);"></div><div style="background-color: rgb(0, 204, 204);"></div><div style="background-color: rgb(51, 102, 255);"></div><div style="background-color: rgb(102, 51, 255);"></div><div style="background-color: rgb(204, 51, 204);"></div><div style="background-color: rgb(102, 102, 102);"></div><div style="background-color: rgb(153, 0, 0);"></div><div style="background-color: rgb(204, 102, 0);"></div><div style="background-color: rgb(204, 153, 51);"></div><div style="background-color: rgb(153, 153, 0);"></div><div style="background-color: rgb(0, 153, 0);"></div><div style="background-color: rgb(51, 153, 153);"></div><div style="background-color: rgb(51, 51, 255);"></div><div style="background-color: rgb(102, 0, 204);"></div><div style="background-color: rgb(153, 51, 153);"></div><div style="background-color: rgb(51, 51, 51);"></div><div style="background-color: rgb(102, 0, 0);"></div><div style="background-color: rgb(153, 51, 0);"></div><div style="background-color: rgb(153, 102, 51);"></div><div style="background-color: rgb(102, 102, 0);"></div><div style="background-color: rgb(0, 102, 0);"></div><div style="background-color: rgb(51, 102, 102);"></div><div style="background-color: rgb(0, 0, 153);"></div><div style="background-color: rgb(51, 51, 153);"></div><div style="background-color: rgb(102, 51, 102);"></div><div style="background-color: rgb(0, 0, 0);"></div><div style="background-color: rgb(51, 0, 0);"></div><div style="background-color: rgb(102, 51, 0);"></div><div style="background-color: rgb(102, 51, 51);"></div><div style="background-color: rgb(51, 51, 0);"></div><div style="background-color: rgb(0, 51, 0);"></div><div style="background-color: rgb(0, 51, 51);"></div><div style="background-color: rgb(0, 0, 102);"></div><div style="background-color: rgb(51, 0, 153);"></div><div style="background-color: rgb(51, 0, 51);"></div></div><div class="cleditorPopup cleditorPrompt" style="display: none;">Enter URL:<br><input type="text" value="http://" size="35"><br><input type="button" value="Submit"></div><div class="cleditorPopup cleditorPrompt" style="display: none;">Paste your content here and click submit.<br><textarea cols="40" rows="3"></textarea><br><input type="button" value="Submit"></div><div class="jqx-menu-wrapper" style="z-index:20000; border: none; background-color: transparent; padding: 0px; margin: 0px; position: absolute; top: 0; left: 0; display: block; visibility: visible;" id="menuWrappergridmenujqxgrid"><div id="gridmenujqxgrid" style="z-index: 9999999999999; display: none; outline: none; position: absolute; top: 0px; left: 0px; height: 65px; width: 184px;" role="menubar" class="jqx-widget jqx-menu jqx-menu-vertical jqx-widget-content jqx-popup jqx-rc-all"><ul></ul></div></div></body><html:embed type="application/x-asc-plugin" id="pluginIdTFPU_2" width="0" height="0"><html:embed type="application/x-asc-plugin" id="pluginIdTFPU_2" width="0" height="0"></html>