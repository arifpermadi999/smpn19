<div class="box box-primary">
	<div class="box-header">
		<a href="#addNewModule" data-toggle="modal" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Module</a>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>Judul</th>
					<th>File</th>
					<th>Deskripsi</th>
					<th>Penulis</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataModules as $rowsModules): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $rowsModules->file_title ?></td>
						<td><a href="<?= site_url('assets/images/modules/'.$rowsModules->file_name) ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> <?= $rowsModules->file_name ?></a></td>
						<td><?= $rowsModules->file_desc ?></td>
						<td><?= $rowsModules->file_author ?></td>
						<td>
							<a href="#editModule<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
							<a href="<?= site_url('modules/ModulesCtrl/index/'.$rowsModules->id_module) ?>" onclick="return confirm('Are you sure ??')"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<div class="modal fade" id="editModule<?= $no ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Modal title</h4>
								</div>
								<div class="modal-body">
									<form action="<?= site_url('modules/ModulesCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
										<input type="hidden" name="id_module" value="<?= $rowsModules->id_module ?>">
										<div class="form-group">
											<label for="">Nama Module</label>
											<input type="text" class="form-control" name="file_title" placeholder="ex: Bhs.indonesia pertemuan pertama" required value="<?= $rowsModules->file_title ?>">
										</div>
										<div class="form-group">
											<label for="">File Module</label>
											<input type="file" name="file_name">
										</div>
										<div class="form-group">
											<label for="">Deskripsi</label>
											<input type="text" class="form-control" name="file_desc" placeholder="Deskripsi" required value="<?= $rowsModules->file_desc ?>">
										</div>
										<div class="form-group">
											<label for="">Penulis</label>
											<input type="text" class="form-control" name="file_author" placeholder="Penulis" required value="<?= $rowsModules->file_author ?>">
										</div>
								</div>
								<div class="modal-footer">
									<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				<?php $no++; endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewModule">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Module</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('modules/ModulesCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Nama Module</label>
						<input type="text" class="form-control" name="file_title" placeholder="ex: Bhs.indonesia pertemuan pertama" required>
					</div>
					<div class="form-group">
						<label for="">File Module</label>
						<input type="file" name="file_name" required>
					</div>
					<div class="form-group">
						<label for="">Deskripsi</label>
						<input type="text" class="form-control" name="file_desc" placeholder="Deskripsi" required>
					</div>
					<div class="form-group">
						<label for="">Penulis</label>
						<input type="text" class="form-control" name="file_author" placeholder="Penulis" required>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>