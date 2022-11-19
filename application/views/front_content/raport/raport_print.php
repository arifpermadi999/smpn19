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
		<td>: <b><?= $dataRaport->nama_siswa ?></b></td>
		<td>Nomor Ujian</td>
		<td>: <?= $dataRaport->no_induk ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>: <?= $dataRaport->kelas; ?></td>
		<td>Wali Kelas</td>
		<td>: <?= $dataRaport->walas; ?></td>
	</tr>
	
</table>
<br />
<body>
    <table border="1" width="750px">
            <tr>
		        <th rowspan="2"><center>No</center></th>
		        <th rowspan="2"><center>MATA PELAJARAN</center></th>
		        <th rowspan="2"><center>KKM</center></th>
		        <th colspan="1"><center>NILAI PTS</center></th>
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
		        <!--<td><center><?= number_format ($dataRaport->P01,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K01,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS01,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Pendidikan Pancasila dan Kewarganegaraan</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P02,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K02,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS02,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Bahasa Indonesia</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P03,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K03,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS03,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>4</center></td>
		        <td><p align="left">Matematika</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P04,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K04,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS04,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>5</center></td>
		        <td><p align="left">Ilmu Pengetahuan Alam</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P05,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K05,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS05,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>6</center></td>
		        <td><p align="left">Ilmu Pengetahuan Sosial</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P06,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K06,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS06,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>7</center></td>
		        <td><p align="left">Bahasa Inggris</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P07,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K07,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS07,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <th colspan="6"><p align="left">Kelompok B (Umum)</p></th>
		    </tr>
		    <tr>
		        <td><center>1</center></td>
		        <td><p align="left">Seni Budaya</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P08,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K08,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS08,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Pend. Jasmani, Olahraga dan Kesehatan</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P09,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K09,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS09,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Informatika</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P10,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K10,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS10,2) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>4</center></td>
		        <td><p align="left">Bahasa Sunda</p></td>
		        <td><center>75</center></td>
		        <!--<td><center><?= number_format ($dataRaport->P11,2) ?></center></td>
		        <td><center><?= number_format ($dataRaport->K11,2) ?></center></td>-->
		        <td><center><?= number_format ($dataRaport->PTS11,2) ?></center></td>
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
		        <td><center><?= $dataRaport->sakit ?></center></td>
		        <td><center>Hari</center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Ijin</p></td>
		        <td><center><?= $dataRaport->ijin ?></center></td>
		        <td><center>Hari</center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Tanpa Keterangan</p></td>
		        <td><center><?= $dataRaport->alpa ?></center></td>
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