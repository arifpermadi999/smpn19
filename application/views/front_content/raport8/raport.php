<style type="text/css">
	.raport {
		width: 50%;
		min-height: 100px;
		margin-bottom: 20px;
		margin: 0px auto;
	}
	table.table thead tr th,
	table.table tbody td {
		font-size: 16px;
	}
	table.table tr td {
		font-size: 16px;
	}
	input.form-control {
		height:45px;
	}
	.boxPrint {
		width: 100%;
		min-height: 100px;
		position: relative;
	}
	.boxPrint .left {
		float: left;
		width: 40%;
		min-height: 100px;
	}
	.boxPrint .left img {
		width: 100%;
		/*height: 200px;*/
	}
	.boxPrint .right {
		float: left;
		width: 58%;
		margin-left: 2%;
		min-height: 100px;
	}
	.boxPrint .clear {
		clear: both;
	}
</style>
<?php if (isset($post)): ?>
	<div class="raport">
		<a href="#" onclick="window.open('<?= base_url('printraport-kelas8') ?>','name','width=700,height=500')" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak RAPORT</a>
		<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
		<br /><br /><br />
	    <table class="table table-bordered">
	    <tr>
			<td>Nama Peserta Didik</td>
			<td>: <b><?= $dataRaport8->nama_siswa ?></b></td>
		</tr>
		<tr>
			<td>Nomor Ujian</td>
			<td>: <?= $dataRaport8->no_induk ?></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>: <?= $dataRaport8->kelas; ?></td>
		</tr>
		<tr>
			<td>Wali Kelas</td>
			<td>: <?= $dataRaport8->walas; ?></td>
		</tr>
		<table class="table table-bordered">
		<p><center><h4>BERIKUT RAPORT SEMESTER ANDA</h4></center></p>
		<table class="table table-bordered">
		    <tr>
		        <th rowspan="2"><center>No</center></th>
		        <th rowspan="2"><center>MATA PELAJARAN</center></th>
		        <th rowspan="2"><center>KKM</center></th>
		        <th colspan="3"><center>NILAI</center></th>
		    </tr>
		    <tr>
		        <!--<th>PENGETAHUAN</th>
		        <th>KETERAMPILAN</th>-->
		        <th><center>PENILAIAN TENGAH SEMESTER</center></th>
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
		        <!--<td><center><?= number_format ($dataRaport8->P11,2) ?></center></td>
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
		<table class="table table-bordered">
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
		
		
	</div>
<?php else: ?>
	<br />
	<div class="raport">
		<?php if ($this->session->flashdata('noInduk')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Ooppsss</strong> Nomor Ujian yang Anda masukan tidak terdaftar
			</div>
		<?php endif ?>
		<h2>APLIKASI RAPORT PTS KELAS 8</h2>
		<p>Silakan Masukkan Nomor Ujian Anda, Pada Form Yang Disediakan.</p>
		<form method="post" action="<?= base_url('raport-kelas8') ?>">
		    <div class="row">
				<div class="col-sm-8 col-sm-offset-1">
					<div class="form-group">
						<input type="text" name="no_induk" class="form-control" placeholder="Nomor Ujian" required>
					</div>
					</div>
				<!--<div class="col-sm-4">
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password (NISN)" required>
					</div>
					</div>-->
				<div class="col-sm-2">
					<button class="btn btn-primary btn-lg" type="submit" name="submit">Periksa!</button>
				</div>
			</div><!-- / Row -->
		</form>
	</div>
	<br>
    <br />
	<center><iframe width="300" height="200" src="https://www.youtube.com/embed/sif1dtOJZz4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<!-- <br /><b>Mau Dapatkan Pulsa Gratis,.<br/>Cek Video Diatas & Lihat Deskripsinya Ya..</b></center> -->
<?php endif ?>