<div class="box box-primary">
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered table-hover" id="tablePertama">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Guru</th>
							<th>Jurusan</th>
							<th>Tahun Masuk</th>
							<th>Jabatan</th>
							<th>Mengajar</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($dataTeachers as $rowsTeachers): ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $rowsTeachers->teacher_name ?></td>
								<td><?= $rowsTeachers->teacher_field ?></td>
								<td><?= $rowsTeachers->year_in ?></td>
								<td><?= $rowsTeachers->status_job ?></td>
								<td><?= $rowsTeachers->job_desc ?></td>
								<td>
									<a href="#editTeacher<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('teachers/TeacherCtrl/index/'.$rowsTeachers->id_teacher) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							<div class="modal fade" id="editTeacher<?= $no ?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Edit Data Guru</h4>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('teachers/TeacherCtrl') ?>" method="POST" role="form">
												<input type="hidden" name="id_teacher" value="<?= $rowsTeachers->id_teacher ?>">
												<div class="form-group">
													<label for="">Nama Guru</label>
													<input type="text" class="form-control" name="teacher_name" placeholder="Nama guru" required value="<?= $rowsTeachers->teacher_name ?>">
												</div>
												<div class="form-group">
													<label for="">Jurusan</label>
													<input type="text" class="form-control" name="teacher_field" placeholder="Jurusan" required value="<?= $rowsTeachers->teacher_field ?>">
												</div>
												<div class="form-group">
													<label for="">Tahun Masuk</label>
													<input type="text" class="form-control" name="year_in" placeholder="ex: 2016" required value="<?= $rowsTeachers->year_in ?>">
												</div>
												<div class="form-group">
													<label for="">Jabatan</label>
													<input type="text" class="form-control" name="status_job" placeholder="ex: guru, walas" required value="<?= $rowsTeachers->status_job ?>">
												</div>
												<div class="form-group">
													<label for="">Mengajar</label>
													<input type="text" class="form-control" name="job_desc" placeholder="ex: B.inggris, Matematika" required value="<?= $rowsTeachers->job_desc ?>">
												</div>
										</div>
										<div class="modal-footer">
											<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						<?php $no++; endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<form action="<?= site_url('teachers/TeacherCtrl') ?>" method="POST" role="form">
					<legend><i class="fa fa-plus"></i> Tambah Data Guru</legend>
					<div class="form-group">
						<label for="">Nama Guru</label>
						<input type="text" class="form-control" name="teacher_name" placeholder="Nama guru" required>
					</div>
					<div class="form-group">
						<label for="">Jurusan</label>
						<input type="text" class="form-control" name="teacher_field" placeholder="Jurusan" required>
					</div>
					<div class="form-group">
						<label for="">Tahun Masuk</label>
						<input type="text" class="form-control" name="year_in" placeholder="ex: 2016" required>
					</div>
					<div class="form-group">
						<label for="">Jabatan</label>
						<input type="text" class="form-control" name="status_job" placeholder="ex: guru, walas" required>
					</div>
					<div class="form-group">
						<label for="">Mengajar</label>
						<input type="text" class="form-control" name="job_desc" placeholder="ex: B.inggris, Matematika" required>
					</div>
					<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
				</form>
			</div>
		</div><!-- / Row -->
	</div>
</div>