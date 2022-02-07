<html>
<head>
<style type="text/css" media="print">
	/
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 18px}
	th {
		font-family:'Times New Roman', Times, serif;
		color:black;
		font-size: 20px;
		background-color: gray;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
	.tabel1{border: solid 0px #000; border-collapse: collapse; width: 100%;}
    .tiga {font-size: 30px;}
    .dua {font-size: 20px;}
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color: #999;
		padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Cetak Laporan</title>
</head>

<body onload="window.print()">
<table class="tabel1">
     <tr>
            <td width="50" rowspan=""><img src="<?=base_url()?>assets/dist/img/logo_rs.png" width="100" height="100"/></td>

            <td width="830" align="center" class="tiga"><b>PUSKESMAS PEMURUS DALAM</b><br/>
            <a class="dua" style="color:black; text-decoration: none"><i>Alamat : Jalan. Beruntung Jaya, Pemurus Dalam 
            <br/>Kec. Banjarmasin Selatan., Kota Banjarmasin, Kalimantan Selatan 70235</i></a></td>  
	</tr>
	</table>
	<br>
	<center><span style="font-size: 20px"><b>Laporan Data Dokter</b></span></p>
	<center><span style="font-size: 20px"><b><?= $subtitle ?></b></span></p>
	<br>
	<table border="1" class="tabel1">
		<thead>
			<tr>
			
			<th align="center">No</th>
            <th align="center">Kode Dokter</th>
			<th align="center">Nama Dokter</th>
			<th align="center">Spesialis</th>
			<th align="center">Harga Layanan</th>
			<th align="center">Jam Praktek</th>
                                                
			</tr>
		</thead>
		<tbody>
			
        <?php $no = 1;
        foreach($datafilter as $key => $data) { ?>
                                                
												 
                                                 
												 
                                               
                                            <td align="center" height="16">  <?= $no++ ?></td>
											<td align="center" height="16">  <?=$data->kodedokter?></td>
                                                <td align="center" height="16">  <?=$data->nama_dokter?></td>
												
												 <td align="center" height="16">  <?=$data->spesialis?></td>
												 <td align="center" height="16">  <?=$data->harga_layanan?></td>
												 <td align="center" height="16">  <?=$data->jam_praktek?></td>
											
											   
                                            </tr>
                                            
                                  
                                           
                                           
                                            
                                            
                                            
                                           
                                            <?php 
                        } ?>                                  
                                             
		</tbody>
	</table>


</b>
<br>

<div>
	<div font face="Arial"  style="width:250px;float:right">
		<font size="4">Banjarmasin, <?=indo_date(date('Y-m-d')) ?>
		<br/>Mengetahui,
		<br><?=ucfirst($this->fungsi->user_login()->nama_user)?> 
        <br>Puskesmas Pemurus Dalam Banjarmasin
		<br>
		<br>
		<br>
		<br>
		<?=ucfirst($this->fungsi->user_login()->nama_user)?>
        <br>
	</font>
		
	</div>
	<div style="clear:both"></div>
</div>


</body>

</html>