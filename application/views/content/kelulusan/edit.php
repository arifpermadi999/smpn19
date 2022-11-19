<div class="box box-primary">
	<div class="box-body">
		<form action="<?= base_url('graduated/GraduatedCtrl/kelulusan') ?>" method="POST" role="form">
			<input type="hidden" name="id_kelulusan" value="<?= $dataKelulusan->id_kelulusan ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">NIS</label>
						<input type="text" class="form-control" placeholder="NIS" disabled value="<?= $dataKelulusan->no_ujian ?>">
					</div>
					<div class="form-group">
						<label for="">NISN</label>
						<input type="text" class="form-control" name="nisn" placeholder="nisn" required value="<?= $dataKelulusan->nisn ?>">
					</div>
					<div class="form-group">
						<label for="">Nama Siswa</label>
						<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required value="<?= $dataKelulusan->nama_siswa ?>">
					</div>
					<div class="form-group">
						<label for="">Tempat Lahir</label>
						<input type="text" class="form-control" name="tempat_lahir" placeholder="Nama Siswa" required value="<?= $dataKelulusan->tempat_lahir ?>">
					</div>
					<div class="form-group">
						<label for="">Tanggal Lahir</label>
						<input type="text" class="form-control" name="tanggal_lahir" placeholder="Nama Siswa" required value="<?= $dataKelulusan->tanggal_lahir ?>">
					</div>
					<div class="form-group">
						<label for="">Orang Tua</label>
						<input type="text" class="form-control" name="ortu" placeholder="Orang Tua" required value="<?= $dataKelulusan->ortu ?>">
					</div>
					<div class="form-group">
						<label for="">Kelas</label>
						<input type="text" class="form-control" name="kelas" placeholder="Kelas" required value="<?= $dataKelulusan->kelas ?>">
					</div>
					<div class="form-group">
						<label for="">No Peserta US</label>
						<input type="text" class="form-control" name="no_us" placeholder="No Peserta US" required value="<?= $dataKelulusan->no_us ?>">
					</div>
					
					<!--<div class="col-sm-12">
						<center>
							<div class="form-group">
								<label>Foto : </label>
								<div class="imgCircle" style="background:url('<?= base_url('assets/images/fotosiswa/'.$dataKelulusan->foto) ?>');background-size:cover;background-position:center">
									<input title="Upload image!" type="file" name="foto" class="upload" onchange="preview(this)">
								</div>
							</div>
						</center>
					</div>-->
					
				</div>
				<div class="col-sm-6">
				    <div class="form-group">
						<label for="">ASAL SEKOLAH</label>
						<input type="text" class="form-control" name="asal_sekolah" placeholder="ASAL SEKOLAH" required value="<?= $dataKelulusan->asal_sekolah ?>">
					</div>
					<div class="form-group">
						<label for="">NO Surat</label>
						<input type="text" class="form-control" name="no_surat" placeholder="No Surat" required value="<?= $dataKelulusan->no_surat ?>">
					</div>
					<div class="form-group">
						<label for="">Tanggal Rapat</label>
						<input type="text" class="form-control" name="tanggal_rapat" placeholder="Tanggal Rapat" required value="<?= $dataKelulusan->tanggal_rapat ?>">
					</div>
					<div class="form-group">
						<label for="">Tanggal Surat</label>
						<input type="text" class="form-control" name="tanggal_surat" placeholder="tanggal_surat" required value="<?= $dataKelulusan->tanggal_surat ?>">
					</div>
					<div class="form-group">
						<label for="">Tahun Ajaran</label>
						<input type="text" class="form-control" name="tahun" placeholder="tanggal_surat" required value="<?= $dataKelulusan->tahun ?>">
					</div>
					<div class="form-group">
						<label for="">Password </label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="">Status </label>
						<select class="form-control" name="lulus">
							<?php
								$lulus = [
									['value' => 'yes','name' => 'Ya'],
									['value' => 'no','name' => 'Tidak'],
								]
							?>
							<?php foreach ($lulus as $r => $v): ?>
								<option <?php if($v['value'] == $dataKelulusan->lulus): echo "selected"; endif; ?> value="<?= $v['value'] ?>"><?= $v['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<!--<div class="form-group">
						<label for="">Agama</label>
						<input type="number" class="form-control" name="n01" placeholder="Agama" required value="<?= $dataKelulusan->n01 ?>">
					</div>
					<div class="form-group">
						<label for="">PPKN</label>
						<input type="number" class="form-control" name="n02" placeholder="PPKN" required value="<?= $dataKelulusan->n02 ?>">
					</div>
					<div class="form-group">
						<label for="">BINDO</label>
						<input type="number" class="form-control" name="n03" placeholder="BINDO" required value="<?= $dataKelulusan->n03 ?>">
					</div>
					<div class="form-group">
						<label for="">MTK</label>
						<input type="number" class="form-control" name="n04" placeholder="MTK" required value="<?= $dataKelulusan->n04 ?>">
					</div>
					<div class="form-group">
						<label for="">IPA</label>
						<input type="number" class="form-control" name="n05" placeholder="IPA" required value="<?= $dataKelulusan->n05 ?>">
					</div>
					<div class="form-group">
						<label for="">IPS</label>
						<input type="number" class="form-control" name="n06" placeholder="IPS" required value="<?= $dataKelulusan->n06 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Inggris</label>
						<input type="number" class="form-control" name="n07" placeholder="B. Inggris" required value="<?= $dataKelulusan->n07 ?>">
					</div>
					<div class="form-group">
						<label for="">SBK</label>
						<input type="number" class="form-control" name="n08" placeholder="SBK" required value="<?= $dataKelulusan->n08 ?>">
					</div>
					<div class="form-group">
						<label for="">PJOK</label>
						<input type="number" class="form-control" name="n09" placeholder="PJOK" required value="<?= $dataKelulusan->n09 ?>">
					</div>
					<div class="form-group">
						<label for="">Informatika</label>
						<input type="number" class="form-control" name="n10" placeholder="Informatika" required value="<?= $dataKelulusan->n10 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Sunda</label>
						<input type="number" class="form-control" name="n11" placeholder="B. Sunda" required value="<?= $dataKelulusan->n11 ?>">
					</div>
					<div class="form-group">
						<label for="">Rata-Rata</label>
						<input type="number" class="form-control" name="rata" placeholder="Rata-Rata" required value="<?= $dataKelulusan->rata ?>">
					</div>-->

				</div>
			</div><!-- / Row -->
			<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
		</form>
		</div>
</div>
