<section class="card">
	<header class="card-header">
		<i class="fa fa-users"></i> Data Raport PAS
	</header>
	<div class="card-block">
		<form action="<?= base_url('graduated/GraduatedCtrl/raportpas') ?>" method="POST" role="form">
			<input type="hidden" name="id_raport" value="<?= $dataRaportpas->id_raport ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">NIS</label>
						<input type="text" class="form-control" placeholder="NIS" disabled value="<?= $dataRaportpas->no_induk ?>">
					</div>
					<div class="form-group">
						<label for="">Password <sup>Boleh dikosongkan</sup></label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="">Nama Siswa</label>
						<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required value="<?= $dataRaportpas->nama_siswa ?>">
					</div>
					<div class="form-group">
						<label for="">kelas</label>
						<input type="text" class="form-control" name="kelas" placeholder="kelas" required value="<?= $dataRaportpas->kelas ?>">
					</div>
					<div class="form-group">
						<label for="">walas</label>
						<input type="text" class="form-control" name="walas" placeholder="walas" required value="<?= $dataRaportpas->walas ?>">
					</div>
					<div class="form-group">
						<label for="">no raport</label>
						<input type="" class="form-control" name="no raport" placeholder="no raport" required value="<?= $dataRaportpas->no_raport ?>">
					</div>
					<div class="form-group">
						<label for="">Status </label>
						<select class="form-control" name="status">
							<?php
								$status = [
									['value' => 'no','name' => 'Tidak'],
									['value' => 'yes','name' => 'Ya'],
								]
							?>
							<?php foreach ($status as $r => $v): ?>
								<option <?php if($v['value'] == $dataRaportpas->status): echo "selected"; endif; ?> value="<?= $v['value'] ?>"><?= $v['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
		</form>
	</div>
</section>