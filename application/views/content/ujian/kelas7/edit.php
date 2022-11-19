<div class="box box-primary">
	<div class="box-body">
		<form action="<?= site_url('graduated/GraduatedCtrl/ujian') ?>" method="POST" role="form">
			<input type="hidden" name="id_ujian" value="<?= $dataUjian->id_ujian ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Nama Siswa</label>
						<input type="text" class="form-control" placeholder="Nama Siswa" required value="<?= $dataUjian->ks_nama ?>">
					</div>
					<div class="form-group">
						<label for="">NIS</label>
						<input type="text" class="form-control" placeholder="NIS" disabled value="<?= $dataUjian->ks_nis ?>">
					</div>
					<div class="form-group">
						<label for="">Password <sup>Boleh dikosongkan</sup></label>
						<input type="password" class="form-control" name="ks_password" placeholder="Password">
					</div>
					
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">NISN</label>
						<input type="text" class="form-control" placeholder="NISN" required value="<?= $dataUjian->ks_nisn ?>">
					</div>
					<div class="form-group">
						<label for="">Kelas</label>
						<input type="text" class="form-control" placeholder="Kelas" required value="<?= $dataUjian->ks_kelas ?>">
					</div>
					<div class="form-group">
						<label for="">Walas</label>
						<input type="text" class="form-control" placeholder="Walas" required value="<?= $dataUjian->ks_walas ?>">
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
		</form>
		</div>
</div>
