<div class="mainImage">
	<div class="row">
		<div class="col-md-8">
			<legend class="titleHome"><?= str_replace('_', ' ', $category_name) ?></legend>
			<?php if ($singleGallery == 'empty'): ?>
				<center><h6>Maaf, tidak ada data foto di kategori ini</h6></center>
			<?php else : ?>
				<div class="row">
					<?php foreach ($singleGallery as $rowsGallery => $valueGallery): ?>
						<div class="col-sm-4" style="margin-bottom:10px">
							<a class="fancybox" href="<?= site_url('assets/images/gallery/'.$valueGallery->photos) ?>" data-fancybox-group="gallery" title="<?= $valueGallery->photos ?>"><img src="<?= site_url('assets/images/gallery/'.$valueGallery->photos) ?>" class="gallery"  /></a>
						</div>
					<?php endforeach ?>
				</div><!-- / Row -->
			<?php endif ?>
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