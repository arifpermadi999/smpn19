<style type="text/css">
	.ppdb {
		width: 50%;
		min-height: 100px;
		margin-bottom: 20px;
		margin: 0px auto;
	}
	table.table thead tr th,
	table.table tbody td {
		font-size: 18px;
	}
	table.table tr td {
		font-size: 18px;
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
	<div class="ppdb">
	    <a href="#" onclick="window.open('<?= site_url('FrontCtrl/printPpdb') ?>','name','width=700,height=500')" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak Keterangan</a>
		<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
		<br /><br /><br />
		<table class="table table-bordered">
			<tr>
				<td>No Pendaftaran</td>
				<td>: <b><?= $dataPpdb->no_daftar; ?></b></td>
			</tr>
			<tr>
				<td>Nama Peserta Didik</td>
				<td>: <?= $dataPpdb->nama_siswa; ?></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>: <?= $dataPpdb->asal_sekolah; ?></td>
			</tr>
			<tr>
				<td>Jalur Pendaftaran</td>
				<td>: <?= $dataPpdb->nisn; ?></td>
			</tr>
		</table>
		<!--<table class="table table-bordered">
			<thead>
			<tr>
				<th><center>Bahasa Indonesia</center></th>
				<th><center>Bahasa Inggris</center></th>
				<th><center>Matematika</center></th>
				<th><center>Pilihan</center></th>
			</tr>
			<p><center>Berikut Hasil Nilai UNBK Anda</center></p>
			</thead>
			<tbody>
				<td><center><?= $dataKelulusan->bindo; ?></center></td>
				<td><center><?= $dataKelulusan->bing; ?></center></td>
				<td><center><?= $dataKelulusan->mtk; ?></center></td>
				<td><center><?= $dataKelulusan->kejuruan; ?></center></td>
			</tbody>
		</table>-->
		<?php if( $dataPpdb->lulus == 'yes' ) : ?>
			<div style="font-size:25px" class="alert alert-success" role="alert"><center><strong>SELAMAT !</strong> Anda <strong>DITERIMA</strong>.</center></div>
			<center>Silakan Unduh Formulir Daftar Ulang Dibawah ini<br/><br/>
			<p><a href="https://drive.google.com/file/d/1V58MFLjt8wNBz8FO6g7degM0JhfPPsQP/view?usp=sharing"target='blank' class="btn btn-primary">FORMULIR DAFTAR ULANG</a></p>
			<p><a href="https://drive.google.com/file/d/1AX5iP_VjlLgwoH4cfBibVayPfT6_b_d_/view?usp=sharing"target='blank' class="btn btn-primary">Surat Pernyataan Siswa & Orang Tua Baru</a></p>
			</center><br>
			<br>
			<center><b>Setelah Formulir PPDB diisi, selanjutnya Silakan Lakukan Daftar Ulang Secara Online <br/>Melalui Link Berikut :
			</b>
			<br><br>
			<p><a href="https://forms.gle/SWz3qibJrQb5zCAP9" target="_blank" class="btn btn-success">DAFTAR ULANG ONLINE</a></p>
			<br>
			<p>Formulir yang sudah diisi lengkap dengan Tanda Tangan dan materai, di berikan ke panitia PPDB SMPN 19 Kota Bekasi</p></center>
		<?php else : ?>
			<div style="font-size:25px" class="alert alert-danger" role="alert"><center><strong>MAAF !</strong> Anda dinyatakan <strong>TIDAK DITERIMA</strong>.</center></div>
		<?php endif; ?>
	</div>
<?php else: ?>
	<br />
	<div class="ppdb">
		<?php if ($this->session->flashdata('noDaftar')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Ooppsss</strong> Nomor Pendaftaran yang Anda masukan tidak terdaftar
			</div>
		<?php endif ?>
		<h2>Aplikasi Pengumuman PPDB <br/>SMPN 19 Kota Bekasi</h2>
		<p>Silakan Masukan Nomor Pendaftaran Anda pada form yang disediakan.</p>
		<form method="post" action="<?= site_url('FrontCtrl/cek_ppdb') ?>">
		    <div class="input-group">
		        <input type="text" name="no_daftar" class="form-control" placeholder="No Pendaftaran" required>
		        <span class="input-group-btn">
		            <button class="btn btn-primary" type="submit" name="submit">Periksa!</button>
		        </span>
		    </div>
		</form>
	</div>
	<br /><br />
    <center><b>PLAY & SUBSCRIBE CHANNEL SMPN 19 KOTA BEKASI</b><br/>
		<iframe width="300" height="180" src="https://www.youtube.com/embed/sif1dtOJZz4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    <br /><br /><br />
<?php endif ?>