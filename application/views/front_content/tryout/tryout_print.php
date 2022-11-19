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
	.box_content {
		width: 96%;
		float: right;
		min-height: 10px;
		position: relative;
	}
	.box_data {
		width: 92%;
		float: right;
		min-height: 50px;
		position: relative;
	}
</style>
<div class="box">
    <img src="<?= base_url('assets/images/links/kopsmpn19.jpg')?>" style=width="800px" height="180px" > 
</div>
<div class="box_content">
	<center><h4>LAPORAN HASIL TRYOUT<br/>
	SEMESTER <?= $dataTryout->semester ?> TAHUN PELAJARAN <?= $dataTryout->tahun ?></h4></center>
</div>
<div class="box_data">
	<table class="table table-bordered" width="650px">
		<tr>
			<td>Nama Peserta Didik</td>
			<td>: <b><?= $dataTryout->nama_siswa ?></b></td>
			<!--<td>Nomor Induk Siswa</td>
			<td>: <?= $dataTryout->no_induk ?></td>-->
		</tr>
		<tr>
			<td>Kelas</td>
			<td>: <?= $dataTryout->kelas; ?></td>
		</tr>
		<tr>
			<td>No Peserta</td>
			<td>: <?= $dataTryout->no_peserta; ?></td>
		</tr>
		
	</table>
</div>
<br/>
<div class="box_data">
<br/>
    <table border="1" width="650px">
			<tr>
		        <th rowspan="2"><center>No</center></th>
		        <th rowspan="2"><center>MATA PELAJARAN</center></th>
		        <th colspan="5"><center>NILAI</center></th>
		    </tr>
		    <tr>
				<th><center>1<center></th>
				<th><center>2<center></th>
				<th><center>3<center></th>
				<th><center>4<center></th>
				<th><center>5<center></th>
		    </tr>
		    <!-- <tr> 
		        <th colspan="6"><p align="left">Kelompok A (Umum)</p></th>
		    </tr>-->
		    <tr>
		        <td><center>1</center></td>
		        <td><p align="left">Pendidikan Agama dan Budi Pekerti</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a01) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b01) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c01) ?></center></td>
				<td><center><?= number_format ($dataTryout->d01) ?></center></td>
				<td><center><?= number_format ($dataTryout->e01) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Pendidikan Pancasila dan Kewarganegaraan</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a02) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b02) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c02) ?></center></td>
				<td><center><?= number_format ($dataTryout->d02) ?></center></td>
				<td><center><?= number_format ($dataTryout->e02) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Bahasa Indonesia</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a03) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b03) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c03) ?></center></td>
				<td><center><?= number_format ($dataTryout->d03) ?></center></td>
				<td><center><?= number_format ($dataTryout->e03) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>4</center></td>
		        <td><p align="left">Matematika</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a04) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b04) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c04) ?></center></td>
				<td><center><?= number_format ($dataTryout->d04) ?></center></td>
				<td><center><?= number_format ($dataTryout->e04) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>5</center></td>
		        <td><p align="left">Ilmu Pengetahuan Alam</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a05) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b05) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c05) ?></center></td>
				<td><center><?= number_format ($dataTryout->d05) ?></center></td>
				<td><center><?= number_format ($dataTryout->e05) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>6</center></td>
		        <td><p align="left">Ilmu Pengetahuan Sosial</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a06) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b06) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c06) ?></center></td>
				<td><center><?= number_format ($dataTryout->d06) ?></center></td>
				<td><center><?= number_format ($dataTryout->e06) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>7</center></td>
		        <td><p align="left">Bahasa Inggris</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a07) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b07) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c07) ?></center></td>
				<td><center><?= number_format ($dataTryout->d07) ?></center></td>
				<td><center><?= number_format ($dataTryout->e07) ?></center></td>
		   	</tr>
		   	<!-- <tr> 
		        <th colspan="6"><p align="left">Kelompok B (Umum)</p></th>
		    </tr>-->
		    <tr>
		        <td><center>8</center></td>
		        <td><p align="left">Seni Budaya</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a08) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b08) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c08) ?></center></td>
				<td><center><?= number_format ($dataTryout->d08) ?></center></td>
				<td><center><?= number_format ($dataTryout->e08) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>9</center></td>
		        <td><p align="left">Pendidikan Jasmani, Olahraga dan Kesehatan</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a09) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b09) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c09) ?></center></td>
				<td><center><?= number_format ($dataTryout->d09) ?></center></td>
				<td><center><?= number_format ($dataTryout->e09) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>10</center></td>
		        <td><p align="left">Prakarya/TIK</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a10) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b10) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c10) ?></center></td>
				<td><center><?= number_format ($dataTryout->d10) ?></center></td>
				<td><center><?= number_format ($dataTryout->e10) ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>11</center></td>
		        <td><p align="left">Bahasa Sunda</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->a11) ?></center></td>
		        <td><center><?= number_format ($dataTryout->b11) ?></center></td>
		        <td><center><?= number_format ($dataTryout->c11) ?></center></td>
				<td><center><?= number_format ($dataTryout->d11) ?></center></td>
				<td><center><?= number_format ($dataTryout->e11) ?></center></td>
		   	</tr>
			<tr>
		        <td><center></center></td>
		        <td><p align="left">Jumlah</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->jumlah_a) ?></center></td>
		        <td><center><?= number_format ($dataTryout->jumlah_b) ?></center></td>
		        <td><center><?= number_format ($dataTryout->jumlah_c) ?></center></td>
				<td><center><?= number_format ($dataTryout->jumlah_d) ?></center></td>
				<td><center><?= number_format ($dataTryout->jumlah_e) ?></center></td>
		   	</tr>
			   <tr>
		        <td><center></center></td>
		        <td><p align="left">Rata-rata</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($dataTryout->rata_a) ?></center></td>
		        <td><center><?= number_format ($dataTryout->rata_b) ?></center></td>
		        <td><center><?= number_format ($dataTryout->rata_c) ?></center></td>
				<td><center><?= number_format ($dataTryout->rata_d) ?></center></td>
				<td><center><?= number_format ($dataTryout->rata_e) ?></center></td>
		   	</tr>
	</table>
</div>
<div class="box_data">
	<div class="signature">
		<!-- <img src="<?= base_url('assets/images/links/ttd_raport_pts_smpn19.jpg')?>" style=width="250px" height="200px" > -->
		<br/><br/><br/>
		Bekasi, <?= $dataTryout->tanggal ?>
		<p>Wali Kelas</p>
		<br/><br/><br/><br/>
		<u><b><?= $dataTryout->walas ?></b></u>
		<br/>
		NIP : <?= $dataTryout->nip ?> 
	</div>
</div>
<script type="text/javascript">
	window.print();
</script>