<?php
require_once 'incl/header.php';
require_once 'incl/config.php';
?>  
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>            
    
    <script type='text/javascript' src='js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>    
    
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>

    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>        
    <script type='text/javascript' src='js/plugins/ckeditor/ckeditor.js'></script>    
    
    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
	

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
			<form class="form" target="form-iframe"  id="form" method="post" action="insertsp.php">
			<div class="data-fluid">
				<div class="row-form info">
					<div class="span10">
						Studi Literatur - Keperpustakaan: <p>
						Permohonan Ijin Penelitian dan Kesbang: <p>
						Permohonan Data : <p>
						Permohonan Bahan : <p>
						Permohonan Benih : <p>
						Peminjaman Glass House : <p>
						Peminjaman Lahan  : 
					</div>
					<div class="span2">                            
						<input type="checkbox" name="formDoor[]" value="A"/>	<p>
						<input type="checkbox" name="formDoor[]" value="B"/>	<p>
						<input type="checkbox" name="formDoor[]" value="C"/>	<p>
						<input type="checkbox" name="formDoor[]" value="D"/> 	<p>
						<input type="checkbox" name="formDoor[]" value="E"/>	<p>
						<input type="checkbox" name="formDoor[]" value="F"/>	<p>
						<input type="checkbox" name="formDoor[]" value="G"/>		
					</div>
					<span class="bottom">Catatan : beri tanda (v) yang anda butuhkan </span>
				</div> 					
				<div class="row-form success">
					<div class="span2">
					NIM : <p>
					Nama : <p>
					Handphone : <p>
					Semester :
					</div>
				<?php
				echo <<<EOM
					<div class="span10">
						<input type="text" id="nim" name=nim value="$v_nim"/> <p>					
						<input type="text" id="mhs" name=mhs value="$v_mhs"/> <p>
						<input type="text" id="hape" name=hape value="$v_hp"/> <p>
						<input type="text" id="smt" name=smt value="$v_smt"/>
						<span class="bottom">Contoh Penulisan : 9 (Sembilan)</span>
					</div>
				</div>
				<div class="row-form">
					<div class="span2">Jurusan:</div>
					<div class="span10">                            
EOM;
?>
					<select id="jurusan" name=jurusan size=1>
						<?php
							$qry1 = mysql_query("SELECT * FROM  gedung WHERE `kode` = 'jur'", $conn) or die ("query goblok");
								while ($row = mysql_fetch_array ($qry1))
									{
										$di = $row['namagd'];
										echo "<option value=\"$di\" ";
										if ($jurusan == $di) {print ' selected'; }
										echo ">$di</option>";
									}
							mysql_close ();	
						?>
					</select>

				<?php
				echo <<<EOM
					</div>
				</div>
				<div class="row-form error">
					<div class="span2">
					Instansi : <p>
					Alamat : <p>
					Kota : 
					</div>
					<div class="span10">
						<input type="text" id="instansi" name="instansi" value="$v_nama"/> <p>					
						<input type="text" id="alamat" name="alamat" value="$v_alamat"/> <p>
						<input type="text" id="kota" name="kota" value="$v_kota"/> 						
					</div>
				</div>   
				<div class="block">
					<div class="head green">                                
						<h2>Judul Penelitian:</h2>
					</div>
					<div class="data-fluid editor">
						<textarea id="wysiwyg" name=judul style="height: 170px;">				
						</textarea>
					</div>
				</div>   
				<div class="row-form error">
					<div class="span2">
					Penelitian di: <p>
					Pelaksanaan: 					 
					</div>
					<div class="span10">
						<input id="lokasi" type="text" name="lokasi" value="$v_lokasi"/> <p>					
						<input id="bulan" type="text" name="bulan" value="$v_bulan"/> 										
					</div>
				</div>  
EOM;
?>
				<div class="row-form">
					<div class="span2">Pembimping 1:</div>
					<div class="span10">
					<select id="dos1" name=dos1 size=1>
						<?php
							$qry1 = mysql_query("SELECT * FROM  db_dosen ORDER BY  nama ASC", $conn) or die ("query goblok");
								while ($row = mysql_fetch_array ($qry1))
									{
										$di = $row['gelar'];
										echo "<option value=\"$di\" ";
										if ($dos1 == $di) {print ' selected'; }
										echo ">$di</option>";
									}
							mysql_close ();	
						?>
					</select>
					</div>
				</div>
				<div class="row-form">
					<div class="span2">Pembimping 2:</div>
					<div class="span10">
					<select name=dos2 id="dos2" size=1>
						<?php
							$qry1 = mysql_query("SELECT * FROM  db_dosen ORDER BY  nama ASC", $conn) or die ("query goblok");
								while ($row = mysql_fetch_array ($qry1))
									{
										$di = $row['gelar'];
										echo "<option value=\"$di\" ";
										if ($dos2 == $di) {print ' selected'; }
										echo ">$di</option>";
									}
							mysql_close ();	
						?>
					</select>
					</div>
				</div>   
				<div class="toolbar bottom tar">
					<div class="btn-group">
						<input style="margin-right: 5px;" type="button" id="Save" value="Save" />
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
				<table cellpadding="0" cellspacing="0" width="100%" class="table images lcnp">
					<div id='jqxgrid'></div>
				</table>                                                 
			</div>
		</div>
	</div>  
</div>
</div>    
</div>    
</div>
<link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
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

</body>
</html>
           