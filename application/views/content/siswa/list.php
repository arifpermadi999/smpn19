<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<a href="https://docs.google.com/spreadsheets/d/113Iv1j3AZ1CVa0bR3bu4j49br1pq-Sc8/edit?usp=sharing&ouid=100915396340375853838&rtpof=true&sd=true" target='blank' data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> Format Import</a>
		<a href="#excel" data-toggle="modal" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Import Data</a>
		<a href="<?= site_url('C_home/deleteAllSiswa') ?>" onclick="return confirm('Apa anda yakin ingin menghapus semua data ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>NIS</th>
					<th>NISN</th>
					<th>JK</th>
					<th>Kelas</th>
					<th>Tempat, Tgl Lahir</th>
					<th>Alamat</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataSiswa as $row): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row->ks_nama ?></td>
						<td><?= $row->ks_nis ?></td>
						<td><?= $row->ks_nisn ?></td>
						<td><?= $row->ks_jk ?></td>
						<td><?= $row->ks_kelas ?></td>
						<td><?= $row->ks_tempat_lahir.', '.$row->ks_tanggal_lahir ?></td>
						<td><?= $row->ks_alamat ?></td>
						<td>
							<a href="<?= site_url('C_home/edit_siswa/'.$row->id_ks) ?>"><i class="fa fa-edit"></i></a>
							<a href="<?= site_url('C_home/deleteSiswa/'.$row->id_ks) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
				<?php $no++; endforeach ?>
			</tbody>
		</table>

	</div>
</div>

<!-- MODAL -->
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('C_home/uploadSiswa') ?>" method="POST">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nama Siswa *</label>
								<input type="text" class="form-control" name="ks_nama" placeholder="Nama Siswa" required>
							</div>
							<div class="form-group">
								<label>NIS *</label>
								<input type="text" class="form-control" name="ks_nis" placeholder="NIS" required>
							</div>
							<div class="form-group">
								<label>NISN</label>
								<input type="text" class="form-control" name="ks_nisn" placeholder="NISN">
							</div>
							<div class="form-group">
								<label>Kelas</label>
								<input type="text" class="form-control" name="ks_kelas" placeholder="Kelas">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select class="form-control" name="ks_jk">
									<option value="Laki-laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" class="form-control" name="ks_tempat_lahir" placeholder="Tempat Lahir">
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" class="form-control" name="ks_tanggal_lahir" placeholder="Ex: 09 Juni 1998">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="ks_alamat" placeholder="Alamat">
							</div>
						</div>
					</div><!-- / ROW -->
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary"><i class="fa fa-check"></i> Simpan!</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	var preview = function(el) {
        if (el.files && el.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(el).parent().css({'background-image': 'url('+e.target.result+')','background-size':'cover','background-position': 'center center'});
            }

            reader.readAsDataURL(el.files[0]);
        }
    }
</script>
<style type="text/css">
	.imgCircle {
		/*border-radius: 50%;*/
		width: 200px;
		height: 200px;
		margin: 0px auto;
		margin-top: 0px;
		background: url('<?= base_url("assets/images/camera.png") ?>') no-repeat center center;
	    background-position: center center;
	    background-size: cover;
		border: 2px solid #8A8A8A;
		/*background-color: #8A8A8A;*/
	}
	.imgCircle input.upload {
	    position: absolute;
	    margin: 0;
	    padding: 0;
	    font-size: 20px;
	    cursor: pointer;
	    opacity: 0;
	    filter: alpha(opacity=0);
	    /*border-radius: 50%;*/
	    width: 200px;
	    height: 200px;
	    /*height: 100%;*/
	}
</style>
<div class="modal fade" id="excel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-upload"></i> Import Data Kepegawaian</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<legend>Keterangan</legend>
						<ol>
							<li>Upload data dengan extensi file .xls/.xlsx</li>
							<li>Format penulisan sesuai dengan contoh yang telah diberikan oleh pihak pengelola</li>
							<li>Jika ada no ujian yang sama, maka data sebelumnya akan di update</li>
							<li>Jika salah satu kolom dikosongkan, maka data tersebut dinyatakan tidak valid (tidak ditambahkan ke database)</li>
						</ol>
					</div>
					<div class="col-sm-6">
						<form action="<?= site_url('C_home/importSiswa') ?>" method="POST" enctype="multipart/form-data">
							<input type="file" name="fileExcel" required>
							<br />
							<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-success"><i class="fa fa-upload"></i> Upload File!</button>
						</form>
					</div>
				</div><!-- / Row -->
			</div>
		</div>
	</div>
</div>