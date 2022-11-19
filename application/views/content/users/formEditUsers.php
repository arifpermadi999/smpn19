<div class="box box-success">
	<div class="box-header">
		<form action="<?php echo site_url('C_home/doEditUser') ?>" method="POST" role="form">
			<legend><?php echo $dataUsers['nama_lengkap']; ?>'s Profile</legend>
			<?php if ($this->session->flashdata('alert')): ?>
				<div class="alert alert-success">
					<i class="fa fa-check-square"></i> <?php echo $this->session->flashdata('alert'); ?>
				</div>
			<?php endif ?>
			<input type="hidden" name="id_admin" value="<?php echo $dataUsers['id_admin']; ?>">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">	
						<label>Username</label>
						<input type="text" id="username" name="username" class="form-control" value="<?php echo $dataUsers['username']; ?>" >
					</div>
					<div class="form-group">	
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" value="<?php echo $dataUsers['password']; ?>">
					</div>
					<div class="form-group">	
						<label>Nama Lengkap</label>
						<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $dataUsers['nama_lengkap']; ?>">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">	
						<label>Level</label>
						<select class="form-control" name="level">
							<option value="<?php echo $dataUsers['level'] ?>"><?php echo $dataUsers['level'] ?></option>
							<option disabled><legend>----------------------------------------------------------------------</legend></option>
							<option value="Admin">Admin</option>
							<option value="Staff">Staff</option>
						</select>
					</div>
					<div class="form-group">	
						<label>Jabatan</label>
						<input type="text" name="jabatan" class="form-control" value="<?php echo $dataUsers['jabatan']; ?>">
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" name="editUser" onclick="return confirm('Anda yakin ingin mengubah user ?')" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> Edit User</button>
			<a href="<?php echo site_url('C_home/users') ?>" class="btn btn-danger btn-flat"><i class="fa fa-arrow-left"></i> Kembali</a>
		</form>
	</div><!-- / Box Header -->
</div>