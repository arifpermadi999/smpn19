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
<?php if (isset($post)): ?>
	<div class="kelulusan">
		<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
		<br /><br /><br />
		<p><center>Biodata Peserta Didik</center></p>
		<table class="table table-bordered">
			<tr><td>Nama Siswa</td><td><?= $dataKelulusan->nama_siswa; ?></td></tr>
			<tr><td>Tempat dan Tanggal Lahir</td><td><?= $dataKelulusan->tempat_lahir.', '.$dataKelulusan->tanggal_lahir; ?></td></tr>
			<tr><td>Nama Orang Tua Siswa</td><td><?= $dataKelulusan->ortu; ?></td></tr>
			<tr><td>Nomor Peserta US</td><td><?= $dataKelulusan->no_us; ?></td></tr>
			<tr><td>Nomor Induk Siswa</td><td><?= $dataKelulusan->no_ujian; ?></td></tr>
			<tr><td>Nomor Induk Siswa Nasional</td><td><?= $dataKelulusan->nisn; ?></td></tr>
			<tr><td>Asal Sekolah</td><td><?= $dataKelulusan->asal_sekolah; ?></td></tr>
		</table>

		<?php if( $dataKelulusan->lulus == 'yes' ) : ?>
			<div class="alert alert-success" role="alert"><center><strong>SELAMAT ANDA DINYATAKAN LULUS</strong></center></div>

			<center>
			<!--<a href="#" onclick="window.open('<?= base_url('print_SKHUN') ?>','name','width=700,height=500')" class="btn btn-success pull-right"><i class="fa fa-print"></i> Cetak SKHUSP</a>-->
            <br/>
            <a href="#" onclick="window.open('<?= base_url('printSKL') ?>','name','width=700,height=500')" class="btn btn-success"><i class="fa fa-print"></i> <b>CETAK SK LULUS</b></a>
		    <br/>
		    <!--<a href="#" onclick="window.open('<?= base_url('print_kelulusan') ?>','name','width=700,height=500')" class="btn btn-primary"><i class="fa fa-print"></i> CETAK SK KELULUSAN</a>-->
            <br/><br/>
            Silakan klik menu Cetak Hasil untuk mencetak surat keterangan lulus. <br/>Surat Keterangan lulus dicetak dikertas ukuran Legal
            </center>
		<!--<p><center>Berikut Nilai Kelulusan Anda</center></p>
		<table class="table table-bordered">
		    <tr>
		        <th rowspan="1"><center>No</center></th>
		        <th rowspan="1"><center>Mata Pelajaran <br/>(Kurikulum 2013)</center></th>
		        <th rowspan="1"><center>Nilai Ujian Akhir</center></th>
		    </tr>
		    <tr>
		        <th colspan="3"><p align="left">Kelompok A (Umum)</p></th>
		    </tr>
		    <tr>
		        <td><center>1</center></td>
		        <td><p align="left">Pendidikan Agama dan Budi Pekerti</p></td>
		        <td><center><?= $dataKelulusan->n01 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>2</center></td>
		        <td><p align="left">Pendidikan Pancasila dan Kewarganegaraan</p></td>
		        <td><center><?= $dataKelulusan->n02 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>3</center></td>
		        <td><p align="left">Bahasa Indonesia</p></td>
		        <td><center><?= $dataKelulusan->n03 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>4</center></td>
		        <td><p align="left">Matematika</p></td>
		        <td><center><?= $dataKelulusan->n04 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>5</center></td>
		        <td><p align="left">Ilmu Pengetahuan Alam</p></td>
		        <td><center><?= $dataKelulusan->n05 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>6</center></td>
		        <td><p align="left">Ilmu Pengetahuan Sosial</p></td>
		        <td><center><?= $dataKelulusan->n06 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>7</center></td>
		        <td><p align="left">Bahasa Inggris</p></td>
		        <td><center><?= $dataKelulusan->n07 ?></center></td>
		   	</tr>
		   	<tr>
		        <th colspan="3"><p align="left">Kelompok B (Umum)</p></th>
		    </tr>
		   	<tr>
		        <td><center>8</center></td>
		        <td><p align="left">Seni Budaya (SBK)</p></td>
		        <td><center><?= $dataKelulusan->n08 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>9</center></td>
		        <td><p align="left">Pendidikan Jasmani, Olahraga dan Kesehatan</p></td>
		        <td><center><?= $dataKelulusan->n09 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>10</center></td>
		        <td><p align="left">Prakarya</p></td>
		        <td><center><?= $dataKelulusan->n10 ?></center></td>
		   	</tr>
		   	<tr>
		        <td><center>11</center></td>
		        <td><p align="left">Bahasa Sunda</p></td>
		        <td><center><?= $dataKelulusan->n11 ?></center></td>
		   	</tr>
		   
		   	<tr>
		        <th colspan="2"><center>Rata-rata</center></th>
		        <td><center><?= number_format ($dataKelulusan->rata,2) ?></center></td>
		    </tr>
		        
		</table>-->

		<?php else : ?>
			<div class="alert alert-danger" role="alert"><center><strong>MAAF !</strong> Anda dinyatakan <strong>TIDAK LULUS</strong>.</center></div>
		<?php endif; ?>
	</div>
	<br/><br/><br/>
<?php else: ?>
	<div class="kelulusan">
		<?php if ($this->session->flashdata('emptyKelulusan')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Oooppss!</strong> NIS dan atau NISN Anda tidak sesuai atau tidak terdaftar.
			</div>
		<?php endif ?>
		<h2>PENGUMUMAN KELULUSAN ONLINE</h2>
		<p>Silakan masukkan username & Password Anda pada form yang disediakan.</p>
		<br/>
		<form method="post" action="<?= base_url('Kelulusan') ?>">
		    <div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="form-group">
						<input type="text" name="no_ujian" class="form-control" placeholder="Username" required>
					</div>
					</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-lg" type="submit" name="submit">LOGIN</button>
				</div>
			</div><!-- / Row -->
		</form>
		<br>

		<br>
		<center>INFO PPDB SMA/SMK JAWA BARAT<br/>
        <iframe width="300" height="200" src="https://www.youtube.com/embed/026U2WIuclQ " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br/>
        SUBSCRIBE PLEASE..</center>

	</div>
	<br /><br />
<?php endif ?>