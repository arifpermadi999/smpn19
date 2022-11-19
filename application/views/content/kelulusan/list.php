<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<a href="https://docs.google.com/spreadsheets/d/1SAFoqp0qfKt3qoP-hi13gs37YDjtnJQ9/edit?usp=sharing&ouid=100915396340375853838&rtpof=true&sd=true" target='blank' data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> Format Import</a>
		<a href="#excel" data-toggle="modal" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Import Data</a>
		<a href="<?= base_url('C_home/deleteAllKelulusan') ?>" onclick="return confirm('Apa anda yakin ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>NIS</th>
					<th>NISN</th>
					<th>NAMA</th>
					<th>Tempat, Tgl Lahir</th>
					<th>Orang Tua</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataKelulusan as $row): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row->no_ujian ?></td>
						<td><?= $row->nisn ?></td>
						<td><?= $row->nama_siswa ?></td>
						<td><?= $row->tempat_lahir.', '.$row->tanggal_lahir ?></td>
						<td><?= $row->ortu ?></td>
						<td><?= $row->lulus ?></td>
						<!--<td><?= number_format ($row->rata,2) ?></td>-->
						<td>
							<a href="<?= base_url('C_home/edit_kelulusan/'.$row->id_kelulusan) ?>"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('graduated/GraduatedCtrl/kelulusan/'.$row->id_kelulusan) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
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
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Kelulusan</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('graduated/GraduatedCtrl/kelulusan') ?>" method="POST" role="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="">NIS</label>
								<input type="text" class="form-control" name="no_ujian" placeholder="NIS" required>
							</div>
							<div class="form-group">
								<label for="">NISN</label>
								<input type="text" class="form-control" name="nisn" placeholder="NISN" required>
							</div>
							<div class="form-group">
								<label for="">Nama Siswa</label>
								<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required>
							</div>
							<div class="form-group">
								<label for="">Tempat Lahir</label>
								<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
							</div>
							<div class="form-group">
								<label for="">Tanggal Lahir</label>
								<input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
							</div>
							<div class="form-group">
								<label for="">Orang Tua</label>
								<input type="text" class="form-control" name="ortu" placeholder="Orang Tua" required>
							</div>
							<div class="form-group">
								<label for="">Kelas</label>
								<input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
							</div>
							<div class="form-group">
								<label for="">No Pesrta US</label>
								<input type="text" class="form-control" name="no_us" placeholder="No Pesrta US" required>
							</div>
							
							<!--<div class="col-sm-12">
								<center>
									<div class="form-group">
										<label>Foto *: </label>
										<div class="imgCircle" style="">
										<input title="Upload image!" required type="file" name="foto" class="upload" onchange="preview(this)">
										</div>
									</div>
								</center>
							</div>-->
							
						</div>
						<div class="col-sm-6">
						    <div class="form-group">
								<label for="">ASAL SEKOLAH</label>
								<input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" required>
							</div>
							<div class="form-group">
								<label for="">NO Surat</label>
								<input type="text" class="form-control" name="no_surat" placeholder="NO Surat" required>
							</div>
							<div class="form-group">
								<label for="">Tanggal Rapat</label>
								<input type="text" class="form-control" name="tanggal_rapat" placeholder="Tanggal Rapat" required>
							</div>
							<div class="form-group">
								<label for="">Tanggal Surat</label>
								<input type="text" class="form-control" name="tanggal_surat" placeholder="Tanggal Surat" required>
							</div>
							<div class="form-group">
								<label for="">Tahun Ajaran</label>
								<input type="text" class="form-control" name="tahun" placeholder="Tahun Ajaran" required>
							</div>
							<div class="form-group">
								<label>Password *</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label for="">Status </label>
								<select class="form-control" name="lulus">
									<option value="yes">Ya</option>
									<option value="no">Tidak</option>
								</select>
							</div>
							<!--<div class="form-group">
								<label for="">Agama</label>
								<input type="number" class="form-control" name="n01" placeholder="Agama" required>
							</div>
							<div class="form-group">
								<label for="">PPKN</label>
								<input type="number" class="form-control" name="n02" placeholder="PPKN" required>
							</div>
							<div class="form-group">
								<label for="">BINDO</label>
								<input type="number" class="form-control" name="n03" placeholder="BINDO" required>
							</div>
							<div class="form-group">
								<label for="">MTK</label>
								<input type="number" class="form-control" name="n04" placeholder="MTK" required>
							</div>
							<div class="form-group">
								<label for="">IPA</label>
								<input type="number" class="form-control" name="n05" placeholder="IPA" required>
							</div>
							<div class="form-group">
								<label for="">IPS</label>
								<input type="number" class="form-control" name="n06" placeholder="IPS" required>
							</div>
							<div class="form-group">
								<label for="">B. Inggris</label>
								<input type="number" class="form-control" name="n07" placeholder="B. Inggris" required>
							</div>
							<div class="form-group">
								<label for="">SBK</label>
								<input type="number" class="form-control" name="n08" placeholder="SBK" required>
							</div>
							<div class="form-group">
								<label for="">PJOK</label>
								<input type="number" class="form-control" name="n09" placeholder="PJOK" required>
							</div>
							<div class="form-group">
								<label for="">Prakarya/TIK</label>
								<input type="number" class="form-control" name="n10" placeholder="Prakarya/TIK" required>
							</div>
							<div class="form-group">
								<label for="">B. Sunda</label>
								<input type="number" class="form-control" name="n11" placeholder="B. Sunda" required>
							</div>
							<div class="form-group">
								<label for="">RATA-RATA</label>
								<input type="number" class="form-control" name="rata" placeholder="Rata-Rata" required>
							</div>-->
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
				<h4 class="modal-title"><i class="fa fa-upload"></i> Import Data Kelulusan</h4>
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
						<form action="<?= base_url('C_home/import') ?>" method="POST" enctype="multipart/form-data">
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