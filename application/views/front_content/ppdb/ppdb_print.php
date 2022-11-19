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
		width: 100px;
		height: 100px;
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
		width: 45%;
	}
</style>
<div class="box">
    <img src="<?= base_url('assets/images/links/kopsmpn19.jpg')?>" style=width="800px" height="200px" > 
</div>
<center><h2>SURAT KETERANGAN</h2></center>
<p>Berdasarkan hasil Penerimaan Peserta Didik Baru (PPDB) Tahun Pelajaran 2020/2021 tanggal 6 Juli 2020, dengan No Surat .................... </p>
<center>
<table>
	<tr>
		<td>No Pendaftaran</td>
		<td>: <b><?= $dataPpdb->no_daftar; ?></b></td>
	</tr>
	<tr>
		<td>Nama Peserta Didik</td>
		<td>: <?= $dataPpdb->nama_siswa; ?></td>
	</tr>
	<tr>
		<td>Asal Sekolah</td>
		<td>: <?= $dataPpdb->asal_sekolah; ?></td>
	</tr>
	<tr>
		<td>Jalur Pendaftaran</td>
		<td>: <?= $dataPpdb->nisn; ?></td>
	</tr>
</table></center>
<p>Dinyatakan :</p>
<div class="boxStatus">
	<?php if ($dataPpdb->lulus == 'yes'): ?>
		DITERIMA
	<?php else: ?>
		TIDAK DITERIMA
	<?php endif ?>
</div>
<br />
<!--<?php 
	$average = 0;
	$total = $dataKelulusan->bindo + $dataKelulusan->bing + $dataKelulusan->mtk + $dataKelulusan->kejuruan;
	if ($total > 0) {
		$average = $total / 4;
	}
?>
Dengan rata-rata nilai hasil <b>USBN = <?= substr($average,0,5) ?></b><br />-->
Demikian surat keterangan ini dibuat untuk di ketahui.
<br /><br />
<div class="signature">
	<!--<img src="<?= base_url('assets/images/links/#.jpg') ?>"width="320px" height="150px">-->
	Ditetapkan di : Bekasi<br />
	Pada tanggal : 6 Juli 2020
	<p>Kepala Sekolah</p>
	<br/>TTD<br/><br/>
	<u>Samsudin, M.Pd</u>
    <br/>
    NIP : 196206131986031016
</div>
<script type="text/javascript">
	window.print();
</script>