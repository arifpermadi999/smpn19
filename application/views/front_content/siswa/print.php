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
		min-height: 10px;
		width: 41%;
	}
	.signature1 {
		float: right;
		min-height: 50px;
		width: 49%;
	}
	table.table {
		border-collapse: collapse;
	}
	table.table tr td {
		padding: 10px;
	}
</style>
<div class="box">
	<img src="<?= base_url('assets/images/links/kopsmpn19.jpg')?>" style=width="800px" height="190px" > 
</div>
<center><h3>SURAT KETERANGAN KELAKUAN BAIK
<br/>Nomor : 421/105 - SMPN.19</h3></center>
<br/>
<br/>
<div style='text-align:justify;'>Yang bertanda tangan di bawah ini :</div>
<br>
<table width="600px">
	<tr><td>Nama</td><td>: ABIDIN, S.Pd</td></tr>
	<tr><td>NIP</td><td>: 197004231999031003</td></tr>
	<tr><td>Jabatan</td><td>: Kepala SMP Negeri 19 Kota Bekasi </td></tr>
</table>
<br/>
<p>Dengan ini menerangkan bahwa :</p>
<table width="800px">
	<tr><td>Nama Siswa</td><td>: <?= $dataSiswa->ks_nama; ?></td></tr>
	<tr><td>Tempat, Tgl Lahir</td><td>: <?= $dataSiswa->ks_tempat_lahir.', '.$dataSiswa->ks_tanggal_lahir; ?></td></tr>
	<tr><td>Nomor Induk Siswa</td><td>: <?= $dataSiswa->ks_nis; ?></td></tr>
	<tr><td>Alamat</td><td>: <?= $dataSiswa->ks_alamat; ?></td></tr>
	<!--<tr><td>NISN</td><td>: <?= $dataSiswa->ks_nisn; ?></td></tr>
	<tr><td>Jenis Kelamin</td><td>: <?= $dataSiswa->ks_jk; ?></td></tr>
	<tr><td>Kelas</td><td>: <?= $dataSiswa->ks_kelas; ?></td></tr>-->
</table>
<br/><br/>
	</div>
	<div style='text-align:justify;'>Bahwa benar nama tersebut di atas adalah peserta didik SMP Negeri 19 Kota Bekasi Tahun Pelajaran 2021/2022 duduk di kelas IX, sesuai hasil pengamatan dan penelitian kami, peserta didik yang bersangkutan selama ini menunjukkan kelakuan baik, tidak melakukan pelanggaran tata tertib dan tidak terlibat penyalahgunaan narkoba.
	<p>
	Demikian surat keterangan ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya.
	</p></div>
<br /><br /><br />
	<div class="signature">
		Ditetapkan di : Kota Bekasi<br />
		Pada Tanggal 15 Juni 2022
	</div>
	<br/><br/>
	<div class="signature1">
		<!--<img src="<?= base_url('assets/images/foto/'.$dataKelulusan->foto) ?>"width="100px" height="120px">-->
		<img src="<?= base_url('assets/images/links/ttd_stempel_kepsek19_22.png') ?>"width="260px" height="140px">
	</div>
<br /><br />
<script type="text/javascript">
	window.print();
</script>