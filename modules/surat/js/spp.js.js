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