<div class="box box-primary">
	<div class="box-body">
		<form action="<?= base_url('C_home/linkujian_action') ?>" method="POST" role="form">
			<input type="hidden" name="id_linkujian" value="<?= $dataLinkujian->id_linkujian ?>">
			<div class="row">
				<div class="col-lg-9">
					<input type="hidden" name="kelas" value="<?= $kelas ?>">
					<div class="form-group">
						<label>Mapel *</label>
						<input type="text" class="form-control" name="mapel" placeholder="Mapel" required value="<?= $dataLinkujian->mapel ?>">
					</div>
					<div class="form-group">
						<label>Tanggal *</label>
						<input type="text" class="form-control" name="tanggal" placeholder="tanggal" required value="<?= $dataLinkujian->tanggal ?>">
					</div>
					<div class="form-group">
						<label>Waktu *</label>
						<input type="text" class="form-control" name="waktu" placeholder="Waktu" required value="<?= $dataLinkujian->waktu ?>">
					</div>

					<div class="form-group">
						<label>Link *</label>
						<input type="text" class="form-control" name="link" placeholder="Link" required value="<?= $dataLinkujian->link ?>">
					</div>
					
				</div>
			</div><!-- / Row -->
			<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
		</form>
		</div>
</div>
