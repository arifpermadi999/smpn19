<div class="mainImage">
	<div class="row">
		<div class="col-md-8">
			<?php foreach ($dataGallery as $rowsGallery => $valueGallery): ?>
				<?php if ($valueGallery->gallery == 'empty'): ?>
				<?php else : ?>
					<legend class="titleHome"><?= $valueGallery->category_name ?></legend>
					<div class="row">
						<?php foreach ($valueGallery->gallery[0] as $rowsDetail => $valueDetail): ?>
							<div class="col-sm-4" style="margin-bottom:10px">
								<a class="fancybox" href="<?= site_url('assets/images/gallery/'.$valueDetail->photos) ?>" data-fancybox-group="gallery" title="<?= $valueDetail->photos ?>"><img src="<?= site_url('assets/images/gallery/'.$valueDetail->photos) ?>" class="gallery"  /></a>
							    <!-- tambahan ket foto -->
								<label style="text-align: center;width: 100%;"><?= $valueDetail->photos_desc ?></label>
							</div>
						<?php endforeach ?>
					</div><!-- / Row -->
				<?php endif ?>
			<?php endforeach ?>
		</div>
		<div class="col-md-4">
			<legend class="titleHome">Kategori Foto</legend>
			<?php foreach ($dataGallery as $rowsGallery => $valueGallery): ?>
				<ul>
					<a href="<?= site_url('FrontCtrl/foto/'.str_replace(' ', '_', $valueGallery->category_name)) ?>"><li><?= $valueGallery->category_name ?></li></a>
				</ul>
			<?php endforeach; ?>
		</div>
	</div><!-- / Row -->
</div>