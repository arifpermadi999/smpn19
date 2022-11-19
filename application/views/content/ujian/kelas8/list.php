<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<a href="https://docs.google.com/spreadsheets/d/1Vm3hL71yzZ9HsmokB16Lj8TGW9Mwc9b0/edit?usp=sharing&ouid=100915396340375853838&rtpof=true&sd=true" target='blank' data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> Format Import</a>
		<a href="#excel" data-toggle="modal" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Import Data</a>
		<a href="<?= base_url('C_home/deleteAllUjian8') ?>" onclick="return confirm('Apa anda yakin ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
				<th>#</th>
					<th>Nama</th>
					<th>NIS</th>
					<th>NISN</th>
					<th>Kelas</th>
					<th>Walas</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataUjian8 as $row): ?>
					<tr>
					<td><?= $no ?></td>
						<td><?= $row->ks_nama ?></td>
						<td><?= $row->ks_nis ?></td>
						<td><?= $row->ks_nisn ?></td>
						<td><?= $row->ks_kelas ?></td>
						<td><?= $row->ks_walas ?></td>
						<td>
							<a href="<?= base_url('C_home/edit_ujian8/'.$row->id_ujian) ?>"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('graduated/GraduatedCtrl/ujian8/'.$row->id_ujian) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
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
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Ujian</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('graduated/GraduatedCtrl/ujian8') ?>" method="POST" role="form">
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
							<label>Password *</label>
							<input type="password" class="form-control" name="ks_password" placeholder="Password" required>
						</div>
						
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>NISN</label>
							<input type="text" class="form-control" name="ks_nisn" placeholder="NISN">
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<input type="text" class="form-control" name="ks_kelas" placeholder="Kelas">
						</div>
						<div class="form-group">
							<label>Walas</label>
							<input type="text" class="form-control" name="ks_walas" placeholder="walas">
						</div>
						
					</div>
				</div><!-- / ROW -->
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="excel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-upload"></i> Import Data Ujian</h4>
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
						<form action="<?= base_url('C_home/import_ujian8') ?>" method="POST" enctype="multipart/form-data">
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