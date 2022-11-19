<style type="text/css">
	.kelulusan {
		width: 60%;
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
	<div class="kelulusan">
		<a href="#" onclick="window.open('<?= base_url('printtryout') ?>','name','width=700,height=500')" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak NILAI</a>
		<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
		<br /><br /><br />
	    <table class="table table-bordered">
	    <tr>
			<td>Nama Peserta Didik</td>
			<td>: <b><?= $dataTryout->nama_siswa ?></b></td>
		</tr>
		<!--<tr>
			<td>NIS</td>
			<td>: <?= $dataTryout->no_induk ?></td>
		</tr>-->
		<tr>
			<td>Nomor Peserta</td>
			<td>: <?= $dataTryout->no_peserta ?></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>: <?= $dataTryout->kelas; ?></td>
		</tr>
		<tr>
			<td>Wali Kelas</td>
			<td>: <?= $dataTryout->walas; ?></td>
		</tr>
		<table class="table table-bordered">
		<p><center><h4>BERIKUT NILAI TRYOUT ANDA</h4></center></p>
		<table class="table table-bordered">
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
<?php else: ?>
	<br />
	<div class="kelulusan">
		<?php if ($this->session->flashdata('noInduk')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Ooppsss</strong> Password yang Anda masukan tidak terdaftar
			</div>
		<?php endif ?>
		<h2>APLIKASI CEK NILAI TRYOUT</h2>
		<p>Silakan Masukkan Password Anda, Pada Form Yang Disediakan.</p>
		<form method="post" action="<?= base_url('tryout') ?>">
		    <div class="row">
				<div class="col-sm-8 col-sm-offset-1">
					<div class="form-group">
						<input type="number" name="no_induk" class="form-control" placeholder="Password" required>
					</div>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-lg" type="submit" name="submit">LOGIN</button>
				</div>
			</div><!-- / Row -->
		</form>
	</div>
	<br>
	<br />
	<center><iframe width="300" height="200" src="https://www.youtube.com/embed/sif1dtOJZz4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<!-- <br /><b>Mau Dapatkan Pulsa Gratis,.<br/>Cek Video Diatas & Lihat Deskripsinya Ya..</b></center> -->
	<br /><br />
<?php endif ?>