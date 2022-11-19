<div class="box box-primary">
	<div class="box-body">
		<form action="<?= site_url('graduated/GraduatedCtrl/ppdb') ?>" method="POST" role="form">
			<input type="hidden" name="id_ppdb" value="<?= $dataPpdb->id_ppdb ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">No Pendaftaran</label>
						<input type="text" class="form-control" placeholder="No Daftar" disabled value="<?= $dataPpdb->no_daftar ?>">
					</div>
					<div class="form-group">
						<label for="">Nama Siswa</label>
						<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required value="<?= $dataPpdb->nama_siswa ?>">
					</div>
					<div class="form-group">
						<label for="">Status </label>
						<select class="form-control" name="lulus">
							<?php
								$lulus = [
									['value' => 'no','name' => 'Tidak'],
									['value' => 'yes','name' => 'Ya'],
								]
							?>
							<?php foreach ($lulus as $r => $v): ?>
								<option <?php if($v['value'] == $dataPpdb->lulus): echo "selected"; endif; ?> value="<?= $v['value'] ?>"><?= $v['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Asal Sekolah</label>
						<input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" required value="<?= $dataPpdb->asal_sekolah ?>">
					</div>
					<div class="form-group">
						<label for="">Jalur</label>
						<input type="number" class="form-control" name="nisn" placeholder="NISN" required value="<?= $dataPpdb->nisn ?>">
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
		</form>
	</div>
</div>
