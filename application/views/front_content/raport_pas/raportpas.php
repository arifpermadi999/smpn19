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
		<!-- <a href="#" onclick="window.open('<?= base_url("FrontCtrl/printRaport") ?>','name','width=700,height=500')" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak Raport</a> -->
		<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
		<br /><br /><br />
	    <table class="table table-bordered">
	    	<tr><td>No Induk</td><td><?= $dataRaportpas->no_induk; ?></td></tr>
	    	<tr><td>Nama Peserta Didik</td><td><?= $dataRaportpas->nama_siswa; ?></td></tr>
	    	<tr><td>Kelas</td><td><?= $dataRaportpas->kelas; ?></td></tr>
			<tr><td>Wali Kelas</td><td><?= $dataRaportpas->walas; ?></td></tr>
		<table class="table table-bordered">

		<?php if( $dataRaportpas->status == 'yes' ) : ?>
			<div class="alert alert-success" role="alert"><center><strong>BERIKUT RAPORT ANDA </strong>.</center></div>

			<a target="_blank" href="<?php echo base_url('assets/images/raport/'.$dataRaportpas->no_raport) ?>" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak RAPORT</a>

			<p>Silakan klik menu Cetak Raport untuk mencetak Raport Anda. 
			<br/>Raport dicetak dikertas ukuran Legal. Printer juga diatur untuk ukuran Legal ya..</p>
		<?php else : ?>
			<div class="alert alert-danger" role="alert"><center><strong>MAAF !</strong> ANDA BELUM BISA MENCETAK RAPORT, <br><strong>SILAKAN BERTANYA KE WALI KELAS TERLEBIH DAHULU</strong>.</center></div>
		<?php endif; ?>
	</div>

<br /><br /><br /><br /><br /><br /><br /><br />
<?php else: ?>
	<br />
	<div class="raport">
		<?php if ($this->session->flashdata('noInduk')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Ooppsss</strong> Nomor Induk dan atau password yang Anda masukan SALAH
			</div>
		<?php endif ?>
		<h2>APLIKASI CETAK RAPORT ONLINE</h2>
		<p>Silakan Masukkan Nomor Induk Siswa, & Password Anda Pada Form Yang Disediakan.</p>
		<form method="post" action="<?= base_url('FrontCtrl/cek_raportpas') ?>">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="form-group">
						<input type="text" name="no_induk" class="form-control" placeholder="NIS" required>
					</div>
					</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password " required>
					</div>
					</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-lg" type="submit" name="submit">Periksa!</button>
				</div>
			</div><!-- / Row -->
		</form>
	</div>
	<br>
	<center>
	<!-- <center><iframe width="300" height="200" src="https://www.youtube.com/embed/aYA7lhyZfh0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
	<!-- <br /><b>Mau Dapatkan Pulsa Gratis,.<br/>Cek Video Diatas & Lihat Deskripsinya Ya..</b></center> -->
	<br /><br /><br />
<?php endif ?>