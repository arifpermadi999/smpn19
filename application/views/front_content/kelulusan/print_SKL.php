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
		width: 25%;
		border:2px solid black;
		padding: 10px;
		text-align: center;
		font-size: 20px;
	}
	.signature {
		float: right;
		min-height: 10px;
		width: 41%;
	}
	.signature1 {
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
	.box_content {
		width: 94%;
		float: right;
		min-height: 10px;
		position: relative;
	}
	.box_data {
		width: 90%;
		float: right;
		min-height: 10px;
		position: relative;
	}
</style>
<div class="box">
    <img src="<?= base_url('assets/images/links/kopsmpn19.jpg')?>" style=width="800px" height="180px" >
</div>
<center><h3>SURAT KETERANGAN KELULUSAN</br>
Nomor  : <?= $dataKelulusan->no_surat; ?></h3></center>
<br/>
<div class="box_content">
    Yang bertanda tangan di bawah ini, Kepala <?= $dataKelulusan->asal_sekolah; ?> menerangkan bahwa :
</div>
<br/><br/>
<div class="box_data">
    <table width="500px">
    	<tr><td>Nama Siswa</td><td>: <?= $dataKelulusan->nama_siswa; ?></td></tr>
    	<tr><td>Tempat dan Tanggal Lahir</td><td>: <?= $dataKelulusan->tempat_lahir.', '.$dataKelulusan->tanggal_lahir; ?></td></tr>
    	<tr><td>Nama Orang Tua Siswa</td><td>: <?= $dataKelulusan->ortu; ?></td></tr>
    	<tr><td>Nomor Peserta US</td><td>: <?= $dataKelulusan->no_us; ?></td></tr>
    	<tr><td>Nomor Induk Siswa</td><td>: <?= $dataKelulusan->no_ujian; ?></td></tr>
    	<tr><td>Nomor Induk Siswa Nasional</td><td>: <?= $dataKelulusan->nisn; ?></td></tr>
    	<tr><td>Asal Sekolah</td><td>: <?= $dataKelulusan->asal_sekolah; ?></td></tr>
    </table>
</div>
<div class="box_content">
    <br/>
    <!--<div style='text-align:justify;'>Berdasarkan hasil Rapat Dewan Guru tentang Penentuan Kelulusan serta mengacu kepada Peraturan Menteri Pendidikan dan Kebudayaan Riset dan Teknologi  Nomor 5 tahun 2022 tentang Standar Kompetensi Lulusan Pada Pendidikan Anak Usia Dini, Jenjang Pendidikan Dasar, dan Jenjang Pendidikan Menengah,  maka siswa tersebut dinyatakan :</div>-->
    <div style='text-align:justify;'>Berdasarkan Hasil Rapat Dewan Guru tentang Penentuan Kelulusan pada <?= $dataKelulusan->tanggal_rapat; ?> serta mengacu kepada Permendikbud Nomor 23 Tahun 2016 tentang Standar Penilaian, Nomor 43 Tahun 2019 tentang Penyelenggaraan Ujian yang Diselenggarakan Satuan Pendidikan dan Ujian Nasional, serta Surat Edaran Mendikbud Nomor 1 Tahun 2021 tentang Peniadaan Ujian Nasional dan Kesetaraan Pelaksanaan Ujian Sekolah Masa Darurat Penyebaran Corona Virus Disease (COVID-19), dengan ini siswa tersebut di atas dinyatakan :</div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<!--<center>Dinyatakan :</div></center>
	<br/>-->
	<center>
	<div class="boxStatus">
		<?php if ($dataKelulusan->lulus == 'yes'): ?>
			<img src="<?= base_url('assets/images/links/status_kelulusan.jpg') ?>"style=width:170px;height:20px; >
		<?php else: ?>
			TIDAK LULUS
		<?php endif ?>
	</div>
	</center>
<br /><br />
<div class="box_content">
	Demikian surat keterangan ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.
</div>
	<br /><br /><br /><br />
	<div class="signature">
		Ditetapkan di : Kota Bekasi<br />
		Pada Tanggal <?= $dataKelulusan->tanggal_surat; ?>
	</div>
	<br/><br/>
	<div class="signature1">
		<!--<img src="<?= base_url('assets/images/foto/'.$dataKelulusan->foto) ?>"width="100px" height="120px">-->
		<img src="<?= base_url('assets/images/links/ttd_stempel_kepsek19_22.png') ?>"width="260px" height="140px">
	</div>
<br /><br />

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!--Note : Untuk SKL Asli silakan datang kesekolah-->
<script type="text/javascript">
	window.print();
</script>