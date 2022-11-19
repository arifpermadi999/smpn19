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
		width: 55%;
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
<center><h3>SURAT KETERANGAN KELULUSAN</h3></center>
<center>Nomor  : <?= $dataKelulusan->no_surat; ?></center>
<br/>
<p>Yang bertanda tangan di bawah ini, Kepala <?= $dataKelulusan->asal_sekolah; ?> menerangkan bahwa : </p>
<table>
	<tr><td>Nama Siswa</td><td>: <?= $dataKelulusan->nama_siswa; ?></td></tr>
	<tr><td>Tempat, Tgl Lahir</td><td>: <?= $dataKelulusan->tempat_lahir.', '.$dataKelulusan->tanggal_lahir; ?></td></tr>
	<tr><td>Nomor Induk Siswa</td><td>: <?= $dataKelulusan->no_ujian; ?></td></tr>
	<tr><td>Nomor Induk Siswa Nasional<td>: <?= $dataKelulusan->nisn; ?></td></tr>
</table>
<br/>
<div style='text-align:justify;'>Berdasarkan Hasil Rapat Dewan Guru tentang Penentuan Kelulusan pada <?= $dataKelulusan->tanggal_rapat; ?> serta mengacu kepada Permendikbud Nomor 23 Tahun 2016 tentang Standar Penilaian, Nomor 43 Tahun 2019 tentang Penyelenggaraan Ujian yang Diselenggarakan Satuan Pendidikan dan Ujian Nasional, serta Surat Edaran Mendikbud Nomor 1 Tahun 2021 tentang Peniadaan Ujian Nasional dan Kesetaraan Pelaksanaan Ujian Sekolah Masa Darurat Penyebaran Corona Virus Disease (COVID-19), dengan ini siswa tersebut di atas dinyatakan :</div>
<br/><br/>
<div class="boxStatus">
	<?php if ($dataKelulusan->lulus == 'yes'): ?>
		<b>LULUS</b>
	<?php else: ?>
		TIDAK LULUS
	<?php endif ?>
</div>
<br /><br/>
<!--<?php 
	$average = 0;
	$total = $dataKelulusan->bindo + $dataKelulusan->bing + $dataKelulusan->mtk + $dataKelulusan->kejuruan;
	if ($total > 0) {
		$average = $total / 4;
	}
?>
Dengan rata-rata nilai hasil <b>USBN = <?= substr($average,0,5) ?> </b>-->
dari sekolah menengah pertama dengan nilai rata-rata Ujian Sekolah :  <?= $dataKelulusan->rata; ?>
<!-- <div style='text-align:justify;'>Dari Satuan Pendidikan berdasarkan Hasil Rapat Pleno Kelulusan Dewan Guru SMP Negeri 3 Kota Bekasi tanggal 3 Juni 2020 serta telah memenuhi kriteria kelulusan sesuai dengan Surat Keputusan Penentuan Kelulusan.</div> -->
<br /><br />
Demikian Surat Keterangan ini dibuat, untuk dapat di pergunakan sebagaimana mestinya.
<br /><br /><br /><br />
<div class="signature">
    <img src="<?= base_url('assets/images/links/ttd_kelulusan_2022.jpg') ?>"width="300px" height="200px">
    <!--Bekasi, <?= $dataKelulusan->tanggal_surat ?>
	<p>Kepala <?= $dataKelulusan->asal_sekolah ?></p>
	<br/><br/>TTD<br/><br/><br/>
	<u><b>JAMJURI, M.Pd</b></u>
    <br/>
    NIP : 19620511 198703 1 005-->
</div>
<script type="text/javascript">
	window.print();
</script>