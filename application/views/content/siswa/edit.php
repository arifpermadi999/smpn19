<div class="box box-primary">
	<div class="box-body">
		<a href="<?= site_url('C_home/siswa') ?>" class="btn btn-warning pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
		<br /><br />
		
		<form action="<?= site_url('C_home/updateSiswa') ?>" method="POST">
			<input type="hidden" name="id_ks" value="<?= $dataKs->id_ks ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Nama Siswa *</label>
						<input type="text" class="form-control" name="ks_nama" placeholder="Nama Siswa" required value="<?= $dataKs->ks_nama ?>">
					</div>
					<div class="form-group">
						<label>NIS *</label>
						<input readonly type="text" class="form-control" name="ks_nis" placeholder="NIS" required value="<?= $dataKs->ks_nis ?>">
					</div>
					<div class="form-group">
						<label>NISN</label>
						<input type="text" class="form-control" name="ks_nisn" placeholder="NISN" value="<?= $dataKs->ks_nisn ?>">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="ks_kelas" placeholder="Kelas" value="<?= $dataKs->ks_kelas ?>">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<?php
							$jk = ['Laki-laki','Perempuan'];
						?>
						<select class="form-control" name="ks_jk">
							<?php foreach ($jk as $row => $value): ?>
								<option <?php if($value == $dataKs->ks_jk): echo "selected"; endif ?> value="<?= $value ?>"><?= $value ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control" name="ks_tempat_lahir" placeholder="Tempat Lahir" value="<?= $dataKs->ks_tempat_lahir ?>">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="text" class="form-control" name="ks_tanggal_lahir" placeholder="Ex: 09 Juni 1998" value="<?= $dataKs->ks_tanggal_lahir ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="ks_alamat" placeholder="Alamat" value="<?= $dataKs->ks_alamat ?>">
					</div>
				</div>
			</div><!-- / ROW -->
			<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary"><i class="fa fa-check"></i> Simpan!</button>
		</form>
	</div>
</div>