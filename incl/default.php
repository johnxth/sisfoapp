<div class="page-header">
		<div class="icon">
			<span class="ico-arrow-right"></span>
		</div>
		<h1>Dashboard<small>Review All Progess On Akademik FP.UB</small></h1>
</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="widgets">
				<div class="widget blue value">
					<div class="left">88%</div>
					<div class="right">
						88% Puas<br/>
						12% Perlu <br/>
						Peningkatan
					</div>
					<div class="bottom">
						<a href="#">Static Kepuasan Pelayanan Akademik</a>
					</div>
				</div>
				<div class="widget green icon">
					<div class="left">
						<div class="icon">
							<span class="ico-download"></span>
						</div>
					</div>
					<div class="right">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td>HDD</td><td>4.5 / 250 GB</td>
							</tr>
							<tr>
								<td>MySQL</td><td>1.8 / 10 GB</td>
							</tr>
							<tr>
								<td>Databases</td><td>1 / 5</td> 
							</tr>
							<tr>
								<td>E-mails</td><td>5 / 15</td> 
							</tr>
						</table>
					</div>
					<div class="bottom">
						<a href="#">Server information</a>
					</div>                            
				</div>
				<div class="widget orange chart nmr">
					<div class="left">                                    
						<span class="mChartBar" sparkWidth="90" sparkHeight="90" sparkType="bar" sparkBarColor="#FFFFFF" sparkBarWidth="10">100,80,85,85,80,95,70,70</span>
					</div>
					<div class="right">
						95% Returning<br/>
						5% New<br/>
						00:12:12 Average time on site
					</div>
					<div class="bottom">
						<a href="#">List visits</a>
					</div>                            
				</div>                        
			</div>
		</div>
	</div>
	
	<div class="row-fluid">
		
		<div class="span7">
			
			<div class="block">
				<div class="head">
					<div class="icon"><span class="ico-chart-4"></span></div>
					<h2>Visitor Statistics</h2>
					<ul class="buttons">
						<li><a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
						<li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
					</ul>
				</div>
				<div class="data">
					<div id="main_chart" style="height: 300px;"></div>                                
				</div>       
				<div class="row-fluid">
					<div class="span4">
						<div class="stat">
							<span class="cdblue">2,350</span> PAGE<br/> VIEWS
						</div>
					</div>
					<div class="span4">
						<div class="stat">
							<span class="cblue">1,120</span> UNIQUE<br/> PAGE VIEWS
						</div>                                                                        
					</div>
				</div>
			</div>
		</div>
		<div class="span5">
			<div class="block">
				<div class="head dblue">                                
					<h2>Messages</h2>
					<ul class="buttons">             
						<li><a href="#" onClick="source('messages'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
						<li><a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
						<li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
					</ul>                                
				</div>
				<div class="data dark npr npb">                                
					<div class="messages scroll" style="height: 200px;">
						<?php 
							require_once 'incl/config.php'; 
							$result = mysql_query("SELECT * FROM pesan  ORDER BY timestamp DESC LIMIT 0 , 30", $conn) or die ("query goblok"); 										
							while($row = mysql_fetch_array($result)) : 
						?>
						<div class="<?php echo $row['ket']; ?>" >
							<div class="arrow"></div>
							<div class="text"><?php echo $row['pesannya']; ?></div>
							<div class="date"><?php echo $row['timestamp']; ?></div>
						</div>
						<?php endwhile; ?>                                   
					</div>                                
				</div>    
				<div class="toolbar dark">
					<div class="input-prepend input-append">
						<form method=post>						
						<span class="add-on dblue"><span class="icon-envelope icon-white"></span></span>
						<input type="text" name=pesan />                              
						<button class="btn dblue" type="submit">Send<span class="icon-arrow-next icon-white"></span></button>
						</form>
					</div>                                 
				</div>
			</div>			
		</div>		
	</div>	
</div>
</div>
<?php
	$v_pesan = $_POST['pesan'];
if ($v_pesan != '') {
	$result = mysql_query("SELECT * FROM pesan", $conn);
	$num_rows = mysql_num_rows($result);
	if ($num_rows % 2 == 0) {
		mysql_query("INSERT INTO pesan(pesannya,ket) VALUES ('$v_pesan','item blue');",$conn);
		echo "<script> window.location = 'index.php'; </script>";
	}
	else {
		mysql_query("INSERT INTO pesan(pesannya,ket) VALUES ('$v_pesan','item dblue out');",$conn);
		echo "<script> window.location = 'index.php';</script>";
	}
}
else { echo ''; }

?>