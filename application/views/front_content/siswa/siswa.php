<style type="text/css">
	.kelulusan {
		width: 50%;
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
	input.form-control {
		height:45px;
	}
</style>
<section class="aboutus white-background black" id="about">
    <!--<div class="container">
        <div class="row">
        	<div class="col-sm-12">-->
				<?php if (isset($post)): ?>
					<div class="kelulusan">
						<a href="#" onclick="window.open('<?= site_url("FrontCtrl/printSiswa") ?>','name','width=700,height=500')" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak SKKB</a>
						<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
						<br /><br /><br />
						<br/>
						<p><center>BERIKUT BIODATA PESERTA DIDIK ANDA</center></p>
						<br/>
						<table class="table table-bordered">
							<tr><td>Nomor Induk Siswa</td><td><?= $dataSiswa->ks_nis; ?></td></tr>
							<tr><td>NISN</td><td><?= $dataSiswa->ks_nisn; ?></td></tr>
							<tr><td>Nama Siswa</td><td><?= $dataSiswa->ks_nama; ?></td></tr>
							<!--<tr><td>Jenis Kelamin</td><td><?= $dataSiswa->ks_jk; ?></td></tr>-->
							<tr><td>Kelas</td><td><?= $dataSiswa->ks_kelas; ?></td></tr>
							<tr><td>Tempat, Tgl Lahir</td><td><?= $dataSiswa->ks_tempat_lahir.', '.$dataSiswa->ks_tanggal_lahir; ?></td></tr>
							<tr><td>Alamat</td><td><?= $dataSiswa->ks_alamat; ?></td></tr>
						</table>
						<br/>
						<p><center>Jika ada data yang tidak sesuai, silakan kebagian TU</center></p>
						<p><center>Surat Keterangan dicetak dikertas ukuran Legal</center></p>
						<br/>
					</div>
				<?php else: ?>
					<div class="kelulusan">
						<?php if ($this->session->flashdata('emptySiswa')): ?>
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Oooppss!</strong> NIS tidak terdaftar.
							</div>
						<?php endif ?>
						<h3>SURAT KETERANGAN KELAKUAN BAIK</h3>
						<p>Silakan masukkan NIS Anda pada form yang disediakan.</p>
						<br />
						<form method="post" action="<?= site_url('FrontCtrl/siswa') ?>">
						    <div class="input-group">
						        <input type="text" name="ks_nis" class="form-control" placeholder="Nomor induk siswa" required>
						        <span class="input-group-btn">
						            <button class="btn btn-primary" type="submit" name="submit">Periksa!</button>
						        </span>
						    </div>
						</form>
						<br>
						<br>
						<center>
		    			<b>LIKE & SUBSCRIBE PLEASE</b><br/>
		    			<iframe width="300" height="180" src="https://www.youtube.com/embed/CUCH6kxyIJ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    				</center>
					</div>
					<br />
				<?php endif ?>
			<!--</div>
		</div>
	</div>-->
</section>