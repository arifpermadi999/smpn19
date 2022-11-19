<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<a href="https://docs.google.com/spreadsheets/d/1h4OvINShrZx882pFPn8DkbyBF23w_01J/edit?usp=sharing&ouid=100915396340375853838&rtpof=true&sd=true" target='blank' data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> Format Import</a>
		<a href="#excel" data-toggle="modal" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Import Data</a>
		<a href="<?= base_url('C_home/deleteAlltryout') ?>" onclick="return confirm('Apa anda yakin ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>NIS</th>
					<th>No Peserta</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Walas</th>
					<th>semester</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataTryout as $row): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row->no_induk ?></td>
						<td><?= $row->no_peserta ?></td>
						<td><?= $row->nama_siswa ?></td>
						<td><?= $row->kelas ?></td>
						<td><?= $row->walas ?></td>
						<td><?= $row->semester ?></td>
						<td>
							<!-- <a href="<?= base_url('C_home/edit_tryout/'.$row->id_tryout) ?>"><i class="fa fa-edit"></i></a> -->
							<a href="<?= base_url('graduated/GraduatedCtrl/tryout/'.$row->id_tryout) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
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
				<form action="<?= base_url('graduated/GraduatedCtrl/tryout') ?>" method="POST" role="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="">No Induk</label>
								<input type="text" class="form-control" name="no_induk" placeholder="No Induk" required>
							</div>
							<div class="form-group">
								<label for="">No Peserta</label>
								<input type="text" class="form-control" name="no_peserta" placeholder="No Peserta" required>
							</div>
							<div class="form-group">
								<label for="">Nama Siswa</label>
								<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required>
							</div>
							<div class="form-group">
								<label for="">Kelas</label>
								<input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
							</div>
							<div class="form-group">
								<label for="">Walas</label>
								<input type="text" class="form-control" name="walas" placeholder="Walas" required>
							</div>
							
						</div>
					</div><!-- / Row -->
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
				<h4 class="modal-title"><i class="fa fa-upload"></i> Import Data Tryout</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<legend>Keterangan</legend>
						<ol>
							<li>Upload data dengan extensi file .xls/.xlsx</li>
							<li>Format penulisan sesuai dengan contoh yang telah diberikan oleh pihak pengelola</li>
							<li>Jika ada No Induk yang sama, maka data sebelumnya akan di update</li>
							<li>Jika salah satu kolom dikosongkan, maka data tersebut dinyatakan tidak valid (tidak ditambahkan ke database)</li>
						</ol>
					</div>
					<div class="col-sm-6">
						<form action="<?= base_url('C_home/import_tryout') ?>" method="POST" enctype="multipart/form-data">
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