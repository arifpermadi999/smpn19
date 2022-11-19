<div class="box box-success">
	<div class="box-header">
		<form action="<?php echo site_url('C_home/editProfile') ?>" method="POST" role="form">
			<legend><?php echo $this->session->userdata('full_name'); ?>'s Profile</legend>
			<?php if ($this->session->flashdata('alert')): ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="fa fa-check-square"></i> <?php echo $this->session->flashdata('alert'); ?>
				</div>
			<?php endif ?>
			<input type="hidden" name="id_admin" value="<?php echo $this->session->userdata('id_admin'); ?>">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">	
						<label>Username</label>
						<input type="text" id="username" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" readonly>
					</div>
					<div class="form-group">	
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" value="<?php echo $this->session->userdata('password'); ?>">
						<?php echo '<i class="text-danger">'.form_error('password').'</i>'; ?>
					</div>
					<div class="form-group">	
						<label>Nama Lengkap</label>
						<input type="text" name="full_name" class="form-control" value="<?php echo $this->session->userdata('full_name'); ?>">
						<?php echo '<i class="text-danger">'.form_error('full_name').'</i>'; ?>
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" name="editProfile" onclick="return confirm('Anda yakin ingin mengubah profile ?')" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> Edit Profile</button>
			<a href="<?php echo site_url('C_home') ?>" class="btn btn-danger btn-flat"><i class="fa fa-arrow-left"></i> Kembali</a>
		</form>
	</div><!-- / Box Header -->
</div>