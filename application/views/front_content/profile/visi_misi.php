<div class="mainBlog">
	<div class="row">
		<div class="col-md-12">
			<legend class="titleHome"><center>VISI DAN MISI</center></legend>
			<?php if ($dataVisi): ?>
				<?php foreach ($dataVisi as $rowsVisi => $valueVisi): ?>
					<div class="row">
						<div class="col-md-12">
							<center><img src="<?= base_url('assets/images/profil/'.$valueVisi->kp_photo) ?>" class="img-thumbnail"></center>
						</div>
					</div><!-- / Row -->
				<?php endforeach ?>
			<?php else: ?>
				<center><h6>Tidak ada data tersedia</h6></center>
			<?php endif ?>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->


