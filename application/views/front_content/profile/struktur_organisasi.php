<div class="mainBlog">
	<div class="row">
		<div class="col-md-12">
			<legend class="titleHome"><center>STRUKTUR ORGANISASI</center></legend>
			<?php if ($dataStruktur): ?>
				<?php foreach ($dataStruktur as $rowsStruktur => $valueStruktur): ?>
					<div class="row">
						<div class="col-md-12">
							<img src="<?= base_url('assets/images/profil/'.$valueStruktur->kp_photo) ?>" class="img-thumbnail">
						</div>
					</div><!-- / Row -->
				<?php endforeach ?>
			<?php else: ?>
				<center><h6>Tidak ada data tersedia</h6></center>
			<?php endif ?>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->


