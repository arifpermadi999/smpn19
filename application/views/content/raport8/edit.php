<div class="box box-primary">
	<div class="box-body">
		<form action="<?= site_url('graduated/GraduatedCtrl/raport8') ?>" method="POST" role="form">
			<input type="hidden" name="id_raport" value="<?= $dataRaport8->id_raport ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">No Induk</label>
						<input type="text" class="form-control" placeholder="No Ujian" disabled value="<?= $dataRaport8->no_induk ?>">
					</div>
					<div class="form-group">
						<label for="">Nama Siswa</label>
						<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required value="<?= $dataRaport8->nama_siswa ?>">
					</div>
					<div class="form-group">
						<label for="">Kelas</label>
						<input type="text" class="form-control" name="kelas" placeholder="Kelas" required value="<?= $dataRaport8->kelas ?>">
					</div>
					<div class="form-group">
						<label for="">Walas</label>
						<input type="text" class="form-control" name="walas" placeholder="Walas" required value="<?= $dataRaport8->walas ?>">
					</div>
					<div class="form-group">
						<label for="">Agama (Pengetahuan)</label>
						<input type="number" class="form-control" name="P01" placeholder="Agama" required value="<?= $dataRaport8->P01 ?>">
					</div>
					<div class="form-group">
						<label for="">PPKN</label>
						<input type="number" class="form-control" name="P02" placeholder="PPKN" required value="<?= $dataRaport8->P02 ?>">
					</div>
					<div class="form-group">
						<label for="">BINDO</label>
						<input type="number" class="form-control" name="P03" placeholder="BINDO" required value="<?= $dataRaport8->P03 ?>">
					</div>
					<div class="form-group">
						<label for="">MTK</label>
						<input type="number" class="form-control" name="P04" placeholder="MTK" required value="<?= $dataRaport8->P04 ?>">
					</div>
					<div class="form-group">
						<label for="">IPA</label>
						<input type="number" class="form-control" name="P05" placeholder="IPA" required value="<?= $dataRaport8->P05 ?>">
					</div>
					<div class="form-group">
						<label for="">IPS</label>
						<input type="number" class="form-control" name="P06" placeholder="IPS" required value="<?= $dataRaport8->P06 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Inggris</label>
						<input type="number" class="form-control" name="P07" placeholder="B. Inggris" required value="<?= $dataRaport8->P07 ?>">
					</div>
					<div class="form-group">
						<label for="">SBK</label>
						<input type="number" class="form-control" name="P08" placeholder="SBK" required value="<?= $dataRaport8->P08 ?>">
					</div>
					<div class="form-group">
						<label for="">PJOK</label>
						<input type="number" class="form-control" name="P09" placeholder="PJOK" required value="<?= $dataRaport8->P09 ?>">
					</div>
					<div class="form-group">
						<label for="">Informatika</label>
						<input type="number" class="form-control" name="P10" placeholder="Informatika" required value="<?= $dataRaport8->P10 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Sunda</label>
						<input type="number" class="form-control" name="P11" placeholder="B. Sunda" required value="<?= $dataRaport8->P11 ?>">
					</div>
					<!--<div class="form-group">
						<label for="">Status </label>
						<select class="form-control" name="lulus">
							<?php
								$lulus = [
									['value' => 'no','name' => 'Tidak'],
									['value' => 'yes','name' => 'Ya'],
								]
							?>
							<?php foreach ($lulus as $r => $v): ?>
								<option <?php if($v['value'] == $dataKelulusan->lulus): echo "selected"; endif; ?> value="<?= $v['value'] ?>"><?= $v['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>-->
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Agama (Keterampilan)</label>
						<input type="number" class="form-control" name="K01" placeholder="Agama" required value="<?= $dataRaport8->K01 ?>">
					</div>
					<div class="form-group">
						<label for="">PPKN</label>
						<input type="number" class="form-control" name="K02" placeholder="PPKN" required value="<?= $dataRaport8->K02 ?>">
					</div>
					<div class="form-group">
						<label for="">BINDO</label>
						<input type="number" class="form-control" name="K03" placeholder="BINDO" required value="<?= $dataRaport8->K03 ?>">
					</div>
					<div class="form-group">
						<label for="">MTK</label>
						<input type="number" class="form-control" name="K04" placeholder="MTK" required value="<?= $dataRaport8->K04 ?>">
					</div>
					<div class="form-group">
						<label for="">IPA</label>
						<input type="number" class="form-control" name="K05" placeholder="IPA" required value="<?= $dataRaport8->K05 ?>">
					</div>
					<div class="form-group">
						<label for="">IPS</label>
						<input type="number" class="form-control" name="K06" placeholder="IPS" required value="<?= $dataRaport8->K06 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Inggris</label>
						<input type="number" class="form-control" name="K07" placeholder="B. Inggris" required value="<?= $dataRaport8->K07 ?>">
					</div>
					<div class="form-group">
						<label for="">SBK</label>
						<input type="number" class="form-control" name="K08" placeholder="SBK" required value="<?= $dataRaport8->K08 ?>">
					</div>
					<div class="form-group">
						<label for="">PJOK</label>
						<input type="number" class="form-control" name="K09" placeholder="PJOK" required value="<?= $dataRaport8->K09 ?>">
					</div>
					<div class="form-group">
						<label for="">Informatika</label>
						<input type="number" class="form-control" name="K10" placeholder="Informatika" required value="<?= $dataRaport8->K10 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Sunda</label>
						<input type="number" class="form-control" name="K11" placeholder="B. Sunda" required value="<?= $dataRaport8->K11 ?>">
					</div>
					<div class="form-group">
						<label for="">Agama (PTS)</label>
						<input type="number" class="form-control" name="PTS01" placeholder="Agama" required value="<?= $dataRaport8->PTS01 ?>">
					</div>
					<div class="form-group">
						<label for="">PPKN</label>
						<input type="number" class="form-control" name="PTS02" placeholder="PPKN" required value="<?= $dataRaport8->PTS02 ?>">
					</div>
					<div class="form-group">
						<label for="">BINDO</label>
						<input type="number" class="form-control" name="PTS03" placeholder="BINDO" required value="<?= $dataRaport8->PTS03 ?>">
					</div>
					<div class="form-group">
						<label for="">MTK</label>
						<input type="number" class="form-control" name="PTS04" placeholder="MTK" required value="<?= $dataRaport8->PTS04 ?>">
					</div>
					<div class="form-group">
						<label for="">IPA</label>
						<input type="number" class="form-control" name="PTS05" placeholder="IPA" required value="<?= $dataRaport8->PTS05 ?>">
					</div>
					<div class="form-group">
						<label for="">IPS</label>
						<input type="number" class="form-control" name="PTS06" placeholder="IPS" required value="<?= $dataRaport8->PTS06 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Inggris</label>
						<input type="number" class="form-control" name="PTS07" placeholder="B. Inggris" required value="<?= $dataRaport8->PTS07 ?>">
					</div>
					<div class="form-group">
						<label for="">SBK</label>
						<input type="number" class="form-control" name="PTS08" placeholder="SBK" required value="<?= $dataRaport8->PTS08 ?>">
					</div>
					<div class="form-group">
						<label for="">PJOK</label>
						<input type="number" class="form-control" name="PTS09" placeholder="PJOK" required value="<?= $dataRaport8->PTS09 ?>">
					</div>
					<div class="form-group">
						<label for="">Informatika</label>
						<input type="number" class="form-control" name="PTS10" placeholder="Informatika" required value="<?= $dataRaport8->PTS10 ?>">
					</div>
					<div class="form-group">
						<label for="">B. Sunda</label>
						<input type="number" class="form-control" name="PTS11" placeholder="B. Sunda" required value="<?= $dataRaport8->PTS11 ?>">
					</div>
					<div class="form-group">
						<label for="">sakit</label>
						<input type="number" class="form-control" name="sakit" placeholder="sakit" required value="<?= $dataRaport8->sakit ?>">
					</div>
					<div class="form-group">
						<label for="">ijin</label>
						<input type="number" class="form-control" name="ijin" placeholder="ijin" required value="<?= $dataRaport8->ijin ?>">
					</div>
					<div class="form-group">
						<label for="">alpa</label>
						<input type="number" class="form-control" name="alpa" placeholder="alpa" required value="<?= $dataRaport8->alpa ?>">
					</div>
				</div>
			</div><!-- / Row -->
			<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
		</form>
	</div>
</div>
