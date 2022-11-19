<style type="text/css">
	.box {
		width: 100%;
		min-height: 100px;
		position: relative;
	}
	.box .left {
		float: left;
		width: 20%;
		min-height: 100px;
	}
	.box .left img {
		width: 120px;
		height: 140px;
	}
	.box .right {
		float: left;
		width: 80%;
		min-height: 100px;
		text-align: center;
		text-transform: uppercase;
	}
	.box .right span { font-size: 12px;}
	.box .right p { text-transform: none; }
	.box .clearfix { clear: both;}
	.boxStatus {
		width: 95%;
		border:2px solid black;
		padding: 10px;
		text-align: center;
		font-size: 25px;
	}
	.signature {
		float: right;
		min-height: 50px;
		width: 50%;
	}
	table.table {
		border-collapse: collapse;
	}
	table.table tr td {
		padding: 10px;
	}
</style>
<div class="box">
    <img src="<?= base_url('assets/images/links/kopsmpn19.jpg')?>" style=width="800px" height="180px" >
</div>
<center><h2>SURAT KETERANGAN <br/>HASIL UJIAN SATUAN PENDIDIKAN <br>TAHUN AJARAN <?= $dataKelulusan->tahun; ?></h2></center>
<center><h3>NOMOR : <?= $dataKelulusan->no_surat; ?></h3></center>
<br/>
Yang bertanda tangan di bawah ini, Kepala <?= $dataKelulusan->asal_sekolah; ?> menerangkan bahwa : <br/><br/>
<table>
	<tr><td>Nama Siswa</td><td>: <?= $dataKelulusan->nama_siswa; ?></td></tr>
	<tr><td>Tempat, Tgl Lahir</td><td>: <?= $dataKelulusan->tempat_lahir.', '.$dataKelulusan->tanggal_lahir; ?></td></tr>
	<tr><td>Nomor Induk Siswa</td><td>: <?= $dataKelulusan->no_ujian; ?></td></tr>
	<tr><td>Nomor Induk Siswa Nasional<td>: <?= $dataKelulusan->nisn; ?></td></tr>
	<tr><td>Asal Sekolah</td><td>: <?= $dataKelulusan->asal_sekolah; ?></td></tr>
</table>
<br/>
<div style='text-align:justify;'>Telah menyelesaikan penilaian Ujian Sekolah di SMP Negeri 19 Kota Bekasi, mengacu kepada Permendikbud Nomor 16 Tahun 2016 tentang Standar Penilaian, Nomor 43 Tahun 2019 tentang Penyelenggaraan Ujian yang Diselenggarakan Satuan Pendidikan dan Ujian Nasional, serta Surat Edaran Mendikbud Nomor 4 Tahun 2020 tentang Pelaksanaan Kebijakan Pendidikan dalam Masa Darurat Penyebaran Corona Virus Disease (COVID-19), dengan hasil nilai sebagai berikut:</div>
<br/>
<!--<div class="boxStatus">
	<?php if ($dataKelulusan->lulus == 'yes'): ?>
		<b>LULUS</b>
	<?php else: ?>
		TIDAK LULUS
	<?php endif ?>
</div>
<br /><br/
<?php 
	$average = 0;
	$total = $dataKelulusan->bindo + $dataKelulusan->bing + $dataKelulusan->mtk + $dataKelulusan->kejuruan;
	if ($total > 0) {
		$average = $total / 4;
	}
?>
Dengan rata-rata nilai hasil <b>USBN = <?= substr($average,0,5) ?> </b>-->

<table border="1" width="800px">
	<tr>
		<th rowspan="1"><center><font color="black">No</font></center></th>
		<th rowspan="1"><center><font color="black">Mata Pelajaran <br/>(Kurikulum 2013)</font></center></th>
		<th rowspan="1"><center><font color="black">Nilai Ujian Sekolah</font></center></th>
	</tr>
	<tr>
		<th colspan="3"><p align="left">Kelompok A (Umum)</p></th>
	</tr>
	<tr>
		<td><center>1</center></td>
		<td><p align="left">Pendidikan Agama dan Budi Pekerti</p></td>
		<td><center><?= $dataKelulusan->n01 ?></center></td>
	</tr>
	<tr>
		<td><center>2</center></td>
		<td><p align="left">Pendidikan Pancasila dan Kewarganegaraan</p></td>
		<td><center><?= $dataKelulusan->n02 ?></center></td>
	</tr>
	<tr>
		<td><center>3</center></td>
		<td><p align="left">Bahasa Indonesia</p></td>
		<td><center><?= $dataKelulusan->n03 ?></center></td>
	</tr>
	<tr>
		<td><center>4</center></td>
		<td><p align="left">Matematika</p></td>
		<td><center><?= $dataKelulusan->n04 ?></center></td>
	</tr>
	<tr>
		<td><center>5</center></td>
		<td><p align="left">Ilmu Pengetahuan Alam</p></td>
		<td><center><?= $dataKelulusan->n05 ?></center></td>
	</tr>
	<tr>
		<td><center>6</center></td>
		<td><p align="left">Ilmu Pengetahuan Sosial</p></td>
		<td><center><?= $dataKelulusan->n06 ?></center></td>
	</tr>
	<tr>
		<td><center>7</center></td>
		<td><p align="left">Bahasa Inggris</p></td>
		<td><center><?= $dataKelulusan->n07 ?></center></td>
	</tr>
	<tr>
		<th colspan="3"><p align="left">Kelompok B (Umum)</p></th>
	</tr>
	<tr>
		<td><center>8</center></td>
		<td><p align="left">Seni Budaya (SBK)</p></td>
		<td><center><?= $dataKelulusan->n08 ?></center></td>
	</tr>
	<tr>
		<td><center>9</center></td>
		<td><p align="left">Pendidikan Jasmani, Olahraga dan Kesehatan</p></td>
		<td><center><?= $dataKelulusan->n09 ?></center></td>
	</tr>
	<tr>
		<td><center>10</center></td>
		<td><p align="left">Prakarya</p></td>
		<td><center><?= $dataKelulusan->n10 ?></center></td>
	</tr>
	<tr>
		<td><center>11</center></td>
		<td><p align="left">Bahasa Sunda</p></td>
		<td><center><?= $dataKelulusan->n11 ?></center></td>
	</tr>
		   
	<tr>
		<th colspan="2"><center>Rata-rata</center></th>
		<td><center><?= number_format ($dataKelulusan->rata,2) ?></center></td>
	</tr>
		        
</table>

<br />
Demikian surat keterangan ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.
<br /><br />
<!--<img src="<?= base_url('assets/images/fotosiswa/'.$dataKelulusan->foto) ?>"width="130px" height="150px">-->
<div class="signature">
    <img src="<?= base_url('assets/images/links/ttd_kelulusan_2021.jpg') ?>"width="280px" height="180px">
    <!--Bekasi, <?= $dataKelulusan->tanggal_surat ?>
	<p>Kepala <?= $dataKelulusan->asal_sekolah ?></p>
	<br/><br/>TTD<br/><br/><br/>
    <u><b>JAMJURI, M.Pd</b></u>
    <br/>
    NIP : 19620511 198703 1 005-->
</div><br />
<!-- <div class="signature2">   
	<img src="<?= base_url('assets/images/links/ttd_kepsek_49.jpg') ?>"width="200px" height="150px">
</div>-->
<script type="text/javascript">
	window.print();
</script>