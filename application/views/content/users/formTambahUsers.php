<div class="box box-success">
	<div class="box-header">
		<form action="<?php echo site_url('C_home/tambahUser') ?>" method="POST" role="form">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">	
						<label>Username</label>
						<input type="text" id="username" name="username" class="form-control" value="<?php echo set_value('username') ?>" placeholder="Username ...">
						<?php echo '<i class="text-danger">'.form_error('username').'</i>' ?>
					</div>
					<div class="form-group">	
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Password ...">
						<?php echo '<i class="text-danger">'.form_error('password').'</i>' ?>
					</div>
					<div class="form-group">	
						<label>Nama Lengkap</label>
						<input type="text" name="nama_lengkap" class="form-control" value="<?php echo set_value('nama_lengkap'); ?>" placeholder="Nama Lengkap ...">
						<?php echo '<i class="text-danger">'.form_error('nama_lengkap').'</i>' ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">	
						<label>Level</label>
						<select class="form-control" name="level">
							<option disabled>-- Pilih Level User --</option>
							<option value="Admin">Admin</option>
							<option value="Staff">Staff</option>
						</select>
					</div>
					<div class="form-group">	
						<label>Jabatan</label>
						<input type="text" name="jabatan" class="form-control" value="<?php echo set_value('jabatan') ?>" placeholder="Jabatan ...">
						<?php echo '<i class="text-danger">'.form_error('jabatan').'</i>' ?>
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" name="tambahUser" onclick="return confirm('Anda yakin ingin mengubah user ?')" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Tambah User</button>
			<a href="<?php echo site_url('C_home/users') ?>" class="btn btn-danger btn-flat"><i class="fa fa-arrow-left"></i> Kembali</a>
		</form>
	</div><!-- / Box Header -->
</div>