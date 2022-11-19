<style type="text/css">
	.box {
		width: 100%;
		min-height: 100px;
		position: relative;
	}
	.box .left {
		float: left;
		width: 200%;
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
		min-height: 60px;
		width: 45%;
	}
</style>
<div class="box">
     <img src="<?= base_url('assets/images/links/kopsmpn19.jpg')?>" style=width="800px" height="180px" > 
</div>
<center><h4>LAPORAN HASIL PENILAIAN TENGAH SEMESTER (PTS)<br/>
SEMESTER GENAP TAHUN PELAJARAN 2021/2022</h4></center>
<table class="table table-bordered" width="700px">
	<tr>
		<td>Nama Peserta Didik</td>
		<td>: <b><?= $dataRaport8->nama_siswa ?></b></td>
		<td>Nomor Ujian</td>
		<td>: <?= $dataRaport8->no_induk ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>: <?= $dataRaport8->kelas; ?></td>
		<td>Wali Kelas</td>
		<td>: <?= $dataRaport8->walas; ?></td>
	</tr>
	
</table>
<br />
<body>
    <table border="1" width="750px">
        <tr>
		        <th rowspan="2"><center>No</center></th>
		        <th rowspan="2"><center>MATA PELAJARAN</center></th>
		        <th rowspan="2"><center>KKM</center></th>
		        <th colspan="3"><center>NILAI PTS</center></th>
		    </tr>
		    <tr>
		        <!--<th>PENGETAHUAN</th>
		        <th>KETERAMPILAN</th>
		        <th>PTS</th>-->
		    </tr>
		    <tr>
		        <th colspan="6"><p align="left">Kelompok A (Umum)</p></th>
		    </tr>
		    <tr>
		        <td><center>1</center></td>
		        <td><p align="left">Pendidikan Agama dan Budi Pekerti</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P01,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K01,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS01,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Pendidikan Pancasila dan Kewarganegaraan</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P02,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K02,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS02,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Bahasa Indonesia</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P03,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K03,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS03,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>4</center></td>
		        <td><p align="left">Matematika</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P04,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K04,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS04,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>5</center></td>
		        <td><p align="left">Ilmu Pengetahuan Alam</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P05,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K05,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS05,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>6</center></td>
		        <td><p align="left">Ilmu Pengetahuan Sosial</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P06,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K06,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS06,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>7</center></td>
		        <td><p align="left">Bahasa Inggris</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P07,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K07,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS07,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <th colspan="6"><p align="left">Kelompok B (Umum)</p></th>
		    </tr>
		    <tr>
		        <td><center>1</center></td>
		        <td><p align="left">Seni Budaya</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P08,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K08,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS08,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Pend. Jasmani, Olahraga dan Kesehatan</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P09,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K09,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS09,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Prakarya</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport8->P10,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K10,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS10,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>4</center></td>
		        <td><p align="left">Bahasa Sunda</p></td>
		        <td><center>75</center></td>
		       <!-- <td><center><?= number_format ($dataRaport8->P11,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport8->K11,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport8->PTS11,2) ?></center></td>
		   	</tr>
		   	<!--<?php 
				$average = 0;
				$total = $dataRaport->agama + $dataRaport->ppkn + $dataRaport->bindo + $dataRaport->mtk + $dataRaport->ipa + $dataRaport->ips + $dataRaport->bing + $dataRaport->seni + $dataRaport->bsun + $dataRaport->pjok + $dataRaport->karya + $dataRaport->tik;
				if ($total > 0) {
				$average = $total / 12;
				}
			?>-->
		   			   			        
		</table>
		<br/>
		<table border="1" width="400px">
		    <tr>
		        <th colspan="4"><center>KETIDAKHADIRAN</center></th>
		    </tr>
		    <tr>
		        <td><center>1</center></td>
		        <td><p align="left">Sakit</p></td>
		        <td><center><?= $dataRaport8->sakit ?></center></td>
		        <td><center>Hari</center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Ijin</p></td>
		        <td><center><?= $dataRaport8->ijin ?></center></td>
		        <td><center>Hari</center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Tanpa Keterangan</p></td>
		        <td><center><?= $dataRaport8->alpa ?></center></td>
		        <td><center>Hari</center></td>
		   	</tr>

		   			        
		</table>
</body>

<br /><br />
<div class="signature">
	<img src="<?= base_url('assets/images/links/ttd_raport_pts_smpn19.jpg')?>" style=width="250px" height="200px" >
	<!--Ditetapkan di : Bekasi<br />
	Pada tanggal : 24 September 2021
	<p>Kepala Sekolah</p>
	<br/><br/>TTD<br/><br/><br/>
	<u><b>JAMJURI, M.Pd</b></u>
    <br/>
    NIP : 19620511 198703 1 005--> 
</div>
<script type="text/javascript">
	window.print();
</script>