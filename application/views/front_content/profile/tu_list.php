<div class="mainBlog">
	<div class="row">
		<div class="col-md-12">
			<legend class="titleHome"><center>DAFTAR TATA USAHA</center></legend>
			<?php if ($dataTu): ?>
				<?php foreach ($dataTu as $rowsTu => $valueTu): ?>
					<div class="row">
						<div class="col-md-12">
							<img src="<?= base_url('assets/images/profil/'.$valueTu->kp_photo) ?>" class="img-thumbnail">
						</div>
					</div><!-- / Row -->
				<?php endforeach ?>
			<?php else: ?>
				<center><h6>Tidak ada data tersedia</h6></center>
			<?php endif ?>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->


