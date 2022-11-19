<div class="box box-primary">
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered table-hover" id="tablePertama">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Kateogri</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($dataCatImages as $rowsCatImage): ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $rowsCatImage->category_name ?></td>
								<td>
									<a href="#editCat<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('cat_image/CatImageCtrl/index/'.$rowsCatImage->id_cat) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							<div class="modal fade" id="editCat<?= $no ?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Edit Data Kategori</h4>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('cat_image/CatImageCtrl') ?>" method="POST" role="form">
												<input type="hidden" name="id_cat" value="<?= $rowsCatImage->id_cat ?>">
												<div class="form-group">
													<label for="">Nama Kategori</label>
													<input type="text" class="form-control" name="category_name" placeholder="Nama kategori" required value="<?= $rowsCatImage->category_name ?>">
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
				<form action="<?= site_url('cat_image/CatImageCtrl') ?>" method="POST" role="form">
					<legend><i class="fa fa-plus"></i> Tambah Data Kategori</legend>
					<div class="form-group">
						<label for="">Nama Kategori</label>
						<input type="text" class="form-control" name="category_name" placeholder="Nama kategori" required>
					</div>
					<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
				</form>
			</div>
		</div><!-- / Row -->
	</div>
</div>