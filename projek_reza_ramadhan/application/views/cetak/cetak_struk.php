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
	<center>
	<div class="margin">
			<h2 align="center">Nota Transaksi Pembayaran</h2>
			<h2 align="center">Data Pasien</h2>
			<br>
			<table class="tabel1">
			<tr>
					<td>Kode Pasien</td>
					<td>:</td>
					<td><?=$row->kodepasien?></td>
				</tr>
				<tr>
					<td>Nama Pasien</td>
					<td>:</td>
					<td><?=$row->nama_pasien?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?=$row->jenis_kelamin?></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td><?=$row->tempat_lahir?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?=indo_date($row->tanggal_lahir)?></td>
				</tr>
			</table>
			<br>
			<h2 align="center">Data Detail Pembayaran</h2>
			<br>
			<table class="tabel1">
			<tr>
				<td>Nama Dokter</td>
				<td>:</td>
				<td><?=$row->nama_dokter?></td>
			</tr>
			<tr>
				<td>Harga Dokter</td>
				<td>:</td>
				<td>Rp. <?=number_format($row->harga_layanan,0,',','.')?></td>
			</tr>
			<tr>
				<td>Jenis Pasien</td>
				<td>:</td>
				<td><?=$row->jenispasien?></td>
			</tr>
			</table>

			<h2 align="center">Pembayaran</h2>
			<br>

			<table class="tabel1">
			<tr>
				<td>Total Tagihan</td>
				<td>:</td>
				<td>Rp. <?=number_format($row->total_tagihan,0,',','.')?></td>
			</tr>
			<tr>
				<td>Uang Bayar</td>
				<td>:</td>
				<td>Rp. <?=number_format($row->uang_bayar,0,',','.')?></td>
			</tr>
			<tr>
				<td>Uang Kembalian</td>
				<td>:</td>
				<td>Rp. <?=number_format($row->uang_kembalian,0,',','.')?></td>
			</tr>
			</table>
</b>
<br>
<br>
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