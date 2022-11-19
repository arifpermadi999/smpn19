<div class="box box-primary">
	<div class="box-header">
		<a href="#addNewGraduated" data-toggle="modal" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Tambah Alumni</a>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>No. Induk</th>
					<th>Nama Lengkap</th>
					<th>Tahun Masuk - Keluar</th>
					<th>Telephone</th>
					<!-- <th>Alamat</th> -->
					<th>Email</th>
					<!-- <th>Tempat Kuliah</th>
					<th>Tempat Kerja</th>
					<th>Jabatan</th>
					<th>Kesan & Pesan</th> -->
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataGraduated as $rowsGraduated): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $rowsGraduated->no_induk ?></td>
						<td><?= $rowsGraduated->full_name ?></td>
						<td><?= $rowsGraduated->year_in ?> - <?= $rowsGraduated->year_out ?></td>
						<td><?= $rowsGraduated->phone ?></td>
						<!-- <td><?= $rowsGraduated->address ?></td> -->
						<td><?= $rowsGraduated->email ?></td>
						<!-- <td><?= $rowsGraduated->collage_place ?></td>
						<td><?= $rowsGraduated->work_place ?></td>
						<td><?= $rowsGraduated->position ?></td>
						<td><?= $rowsGraduated->message ?></td> -->
						<td>
							<a href="#detailGraduated<?= $no ?>" data-toggle="modal"><i class="fa fa-eye"></i></a>
							<a href="#editGraduated<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
							<a href="<?= site_url('graduated/GraduatedCtrl/index/'.$rowsGraduated->id_graduated) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<!-- Modal Detail -->
					<div class="modal fade" id="detailGraduated<?= $no ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Detail Alumni</h4>
								</div>
								<div class="modal-body">
									<ul class="list-group">
										<li class="list-group-item">
											<span class="badge">No. Induk</span>
											<?= $rowsGraduated->no_induk ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Nama Lengkap</span>
											<?= $rowsGraduated->full_name ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Tahun Masuk - Keluar</span>
											<?= $rowsGraduated->year_in ?> -<?= $rowsGraduated->year_out ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Telepon</span>
											<?= $rowsGraduated->phone ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Alamat</span>
											<?= $rowsGraduated->address ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Email</span>
											<?= $rowsGraduated->email ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Tempat Kuliah</span>
											<?= $rowsGraduated->collage_place ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Work Place</span>
											<?= $rowsGraduated->work_place ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Posisi</span>
											<?= $rowsGraduated->position ?>
										</li>
										<li class="list-group-item">
											<span class="badge">Kesan & Pesan</span>
											<?= $rowsGraduated->message ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal Edit -->
					<div class="modal fade" id="editGraduated<?= $no ?>">
						<div class="modal-dialog" style="width:70%">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"><i class="fa fa-user-plus"></i> Edit Data Alumni </h4>
								</div>
								<div class="modal-body">
									<form action="<?= site_url('graduated/GraduatedCtrl') ?>" method="POST" role="form">
										<input type="hidden" name="id_graduated" value="<?= $rowsGraduated->id_graduated ?>">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="">No. Induk</label>
													<input type="text" class="form-control" name="no_induk" placeholder="No. induk" value="<?= $rowsGraduated->no_induk ?>">
												</div>
												<div class="form-group">
													<label for="">Nama Lengkap <sup class="text-danger">*</sup></label>
													<input type="text" class="form-control" name="full_name" placeholder="Nama lengkap" required value="<?= $rowsGraduated->full_name ?>">
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="">Tahun Masuk <sup class="text-danger">*</sup></label>
															<input type="text" class="form-control" name="year_in" placeholder="ex: 2016" required value="<?= $rowsGraduated->year_in ?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="">Tahun Keluar <sup class="text-danger">*</sup></label>
															<input type="text" class="form-control" name="year_out" placeholder="ex: 2016" required value="<?= $rowsGraduated->year_out ?>">
														</div>
													</div>
												</div><!-- / Row -->
												<div class="form-group">
													<label for="">Telepon <sup class="text-danger">*</sup></label>
													<input type="text" class="form-control" name="phone" placeholder="+689..." required value="<?= $rowsGraduated->phone ?>">
												</div>
												<div class="form-group">
													<label for="">Alamat <sup class="text-danger">*</sup></label>
													<input type="text" class="form-control" name="address" placeholder="Alamat" required value="<?= $rowsGraduated->address ?>">
												</div>
												<div class="form-group">
													<label for="">Email <sup class="text-danger">*</sup></label>
													<input type="text" class="form-control" name="email" placeholder="Email" required value="<?= $rowsGraduated->email ?>">
												</div>
												<div class="form-group">
													<label for="">Tempat Kuliah</label>
													<input type="text" class="form-control" name="collage_place" placeholder="ex: univ. Indonesia" value="<?= $rowsGraduated->collage_place ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="">Tempat Kerja</label>
													<input type="text" class="form-control" name="work_place" placeholder="ex: PT.nama perusahaan" value="<?= $rowsGraduated->work_place ?>">
												</div>
												<div class="form-group">
													<label for="">Posisi</label>
													<input type="text" class="form-control" name="position" placeholder="ex: Manager, Engineer" value="<?= $rowsGraduated->position ?>">
												</div>
												<div class="form-group">
													<label for="">Kesan & Pesan</label>
													<textarea class="form-control" name="message" id="compose-textarea">
														<?= $rowsGraduated->message ?>
													</textarea>
												</div>
											</div>
										</div><!-- / Row -->
										<legend><i><sup class="text-danger">* : Harus di isi</sup></i></legend>
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
<div class="modal fade" id="addNewGraduated">
	<div class="modal-dialog" style="width:70%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-user-plus"></i> Tambah Data Alumni </h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('graduated/GraduatedCtrl') ?>" method="POST" role="form">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">No. Induk</label>
								<input type="text" class="form-control" name="no_induk" placeholder="No. induk">
							</div>
							<div class="form-group">
								<label for="">Nama Lengkap <sup class="text-danger">*</sup></label>
								<input type="text" class="form-control" name="full_name" placeholder="Nama lengkap" required>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Tahun Masuk <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" name="year_in" placeholder="ex: 2016" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Tahun Keluar <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" name="year_out" placeholder="ex: 2016" required>
									</div>
								</div>
							</div><!-- / Row -->
							<div class="form-group">
								<label for="">Telepon <sup class="text-danger">*</sup></label>
								<input type="text" class="form-control" name="phone" placeholder="+689..." required>
							</div>
							<div class="form-group">
								<label for="">Alamat <sup class="text-danger">*</sup></label>
								<input type="text" class="form-control" name="address" placeholder="Alamat" required>
							</div>
							<div class="form-group">
								<label for="">Email <sup class="text-danger">*</sup></label>
								<input type="text" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="">Tempat Kuliah</label>
								<input type="text" class="form-control" name="collage_place" placeholder="ex: univ. Indonesia">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Tempat Kerja</label>
								<input type="text" class="form-control" name="work_place" placeholder="ex: PT.nama perusahaan">
							</div>
							<div class="form-group">
								<label for="">Posisi</label>
								<input type="text" class="form-control" name="position" placeholder="ex: Manager, Engineer">
							</div>
							<div class="form-group">
								<label for="">Kesan & Pesan</label>
								<textarea class="form-control" name="message" id="compose-textarea">
									
								</textarea>
							</div>
						</div>
					</div><!-- / Row -->
					<legend><i><sup class="text-danger">* : Harus di isi</sup></i></legend>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>