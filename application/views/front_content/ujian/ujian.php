<style type="text/css">
	.kelulusan {
		width: 60%;
		min-height: 100px;
		margin-bottom: 20px;
		margin: 0px auto;
	}
	.btn-primary {
		border-radius: 0px;
		background-color: #1672B9 !important;
	}
	h2,p,table tr td, table thead tr th {
		color: black;
		text-align: left;
	}
	table tr td {
		text-align: left;
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
<br/>
<?php if (isset($post)): ?>
	<div class="kelulusan">
		<!-- <a href="<?= base_url('ujian-online') ?>" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a> -->
		<br /><br /><br />
		<p><center><h4>BERIKUT BIODATA PESERTA UJIAN ANDA</h4></center></p>
		<br/>
		<table class="table table-bordered">
			<tr><td>NIS</td><td><?= $dataUjian->ks_nis; ?></td></tr>
			<tr><td>NISN/NO UJIAN</td><td><?= $dataUjian->ks_nisn; ?></td></tr>
			<tr><td>Nama Siswa</td><td><?= $dataUjian->ks_nama; ?></td></tr>
			<tr><td>Kelas</td><td><?= $dataUjian->ks_kelas; ?></td></tr>
			<tr><td>Wali Kelas</td><td><?= $dataUjian->ks_walas; ?></td></tr>
		</table>
		<br/>
		<br/>
		<center>SOAL PENILAIAN SEKOLAH <br/>SILAKAN MASUK KE MENU UJIAN ONLINE DENGAN KLIK SESUAI DENGAN JENJANG PENDIDIKAN ANDA & MATA PELAJARAN YANG DI UJIKAN:</center>
		<br>
		<div>
		<center>
		<table class="table table-bordered">
		    <tr>
		        <th rowspan="1"><center>NO</center></th>
		        <th rowspan="1"><center>HARI & TANGGAL </center></th>
		        <th rowspan="1"><center>WAKTU UJIAN</center></th>
		        <th rowspan="1"><center>AKSES UJIAN</center></th>
		    </tr>
		    <?php foreach($dataLinkUjian as $row => $data): ?>
		    <tr>
		        <td><center><?= $row + 1; ?></center></td>
		        <td><center><?= $data->tanggal; ?></td></center></td>
		        <td><center><?= $data->waktu; ?></center></td>
		        <td><center><a href="<?= $data->link; ?>" target='blank' class="btn btn-success"><?= $data->mapel ?></a></p></center></td>
		   	</tr>
		   <?php endforeach ?>
		   	
		   
		</table>
		</center>
		<br/>
	</div>
	<br/>
	<br/>
<?php else: ?>
	<div class="kelulusan">
		<?php if ($this->session->flashdata('emptyUjian')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Oooppss!</strong> Username & Password Anda tidak sesuai atau tidak terdaftar.</br> Silakan Datang Kesekolah
			</div>
		<?php endif ?>
		<h2>SISTEM UJIAN ONLINE KELAS <?= $kelas ?> </h2>
		<p>Silakan masukkan Username & Password Anda pada form yang disediakan.</p>
		<br/>
		<form method="post" action="<?= base_url('Ujian') ?>">
		    <input type="hidden" value="<?= $kelas ?>" name="kelas">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="form-group">
						<input type="text" name="ks_nis" class="form-control" placeholder="Username" required>
					</div>
					</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="password" name="ks_password" class="form-control" placeholder="password" required>
					</div>
					</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-lg" type="submit" name="submit">MASUK</button>
				</div>
			</div><!-- / Row -->
		</form>
		<br>

		<br>
		<center><b>MUSIK SENDU NAN ASIK</b><br/>
		<iframe width="300" height="200" src="https://www.youtube.com/embed/-G1VTttD830" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
	</div>
	<br /><br />
<?php endif ?>