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
<title>Cetak Surat Keterangan Sehat</title>
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
    <style type="text/css">

    .border { 
        border-color: black;
        border-style: double;

        border-bottom-width: 2px; 

    }

    </style>

    <div class="border"></div>
	<br>
	<center><span style="font-size: 20px"><h2><b>SURAT KETERANGAN SEHAT</b></span></p></h2>
    <center><span style="font-size: 20px"><b>Kode Surat Sehat : <?= $nama->kode_suratsehat ?></b></span></p>
	<center><span style="font-size: 20px"><b>Nama : <?= $nama->nama_suratsehat ?></b></span></p>
	<center><span style="font-size: 20px"><b>Jenis Kelamin : <?= $nama->jeniskelamin_suratsehat ?></b></span></p>
	<center><span style="font-size: 20px"><b>Alamat : <?= $nama->alamat_suratsehat ?></b></span></p>
	<center><span style="font-size: 20px"><b>Tempat Lahir : <?= $nama->tempatlahir_suratsehat ?></b></span></p>
	<center><span style="font-size: 20px"><b>Tanggal Lahir : <?= $nama->tanggallahir_suratsehat ?></b></span></p>
	<center><span style="font-size: 20px"><b>Keperluan : <?= $nama->keperluan ?></b></span></p>
	<br>
	<table border="1" class="tabel1">
		<tbody>
		<tr>
			<td>Berat Badan</td>
			<td>:</td>
			<td>
			<?= $nama->berat_badan ?>			
			</td>

		</tr>
		<tr>
			<td>Tinggi Badan</td>
			<td>:</td>
			<td>
			<?= $nama->tinggi_badan ?>			
			</td>
		</tr>
		<tr>
			<td>Tensi Darah</td>
			<td>:</td>
			<td>
			<?= $nama->tensi_darah ?>			
			</td>
		</tr>
		<tr>
			<td>Suhu</td>
			<td>:</td>
			<td>
			<?= $nama->suhu ?>
			</td>
		</tr>
		<tr>
			<td>Nadi</td>
			<td>:</td>
			<td>
			<?= $nama->nadi ?>
			</td>
		</tr>
		<tr>
			<td>Saturasi</td>
			<td>:</td>
			<td>
			<?= $nama->saturasi ?>
			</td>
		</tr>
		<tr>
			<td>Tes Buta Warna</td>
			<td>:</td>
			<td>
			<?= $nama->tes_butawarna ?>
			</td>
		</tr>
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
		<?=$nama->nama_dokter?>
        <br>
	</font>
		
	</div>
	<div style="clear:both"></div>
</div>


</body>

</html>