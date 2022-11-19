<div class="box box-primary">
	<div class="box-header">
		<a href="#addUser" data-toggle="modal" class="btn btn-flat btn-primary"><i class="fa fa-user-plus"></i> Tambah User</a>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-bordered table-hover" id="tablePertama">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Nama Lengkap</th>
							<th>Level</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($dataUsers as $row): ?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row->username ?></td>
							<td><?php echo $row->full_name ?></td>
							<td><?php echo $row->level ?></td>
							<td>
								<a href="#editUser<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
								<a href="<?=site_url('user/UserCtrl/index/'.$row->id_admin) ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						<div class="modal fade" id="editUser<?= $no ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Ubah user</h4>
									</div>
									<div class="modal-body">
										<form action="<?= site_url('user/UserCtrl') ?>" method="POST" role="form">
											<input type="hidden" name="id_admin" value="<?= $row->id_admin ?>">
											<div class="form-group">
												<label for="">Username</label>
												<input type="text" class="form-control" name="username" placeholder="Username" value="<?= $row->username ?>" required>
											</div>
											<div class="form-group">
												<label for="">Password <sup class="text-danger">Boleh dikosongkan</sup></label>
												<input type="password" class="form-control" name="password" placeholder="Password">
											</div>
											<div class="form-group">
												<label for="">Nama Lengkap</label>
												<input type="text" class="form-control" name="full_name" placeholder="Nama lengkap" required value="<?= $row->full_name ?>">
											</div>
											<div class="form-group">
												<label>Level</label>
												<select class="form-control" name="level">
													<?php $level = ['admin','staff'] ?>
													<?php foreach ($level as $rowLevel): ?>
														<?php if ($rowLevel==$row->level): ?>
															<option value="<?= $rowLevel ?>" selected><?= $rowLevel ?></option>
														<?php else : ?>
															<option value="<?= $rowLevel ?>"><?= $rowLevel ?></option>
														<?php endif; ?>
													<?php endforeach ?>
												</select>
											</div>
											<button type="submit" onclick="return confirm('are you sure ?')" class="btn btn-primary btn-block">Save !</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<?php $no++; endforeach ?>
					</tbody>
				</table>
			</div>
		</div><!-- / Row -->
	</div><!-- / box body -->
</div>

<div class="modal fade" id="addUser">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah User</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('user/UserCtrl') ?>" method="POST" role="form">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label for="">Nama Lengkap</label>
						<input type="text" class="form-control" name="full_name" placeholder="Nama lengkap" required>
					</div>
					<div class="form-group">
						<label>Level</label>
						<select class="form-control" name="level">
							<option value="admin">admin</option>
							<option value="staff">staff</option>
						</select>
					</div>
					<button type="submit" onclick="return confirm('are you sure ?')" class="btn btn-primary btn-block">Save !</button>
				</form>
			</div>
		</div>
	</div>
</div>