<div class="mainVideo">
	<legend class="titleHome">Data Videos</legend>
	<div class="row">
		<?php foreach ($dataVideo as $rowsVideo => $valueVideo): ?>
			<div class="col-sm-4">
				<legend><?= $valueVideo->video_title ?></legend>
				<iframe src="<?= $valueVideo->video_link ?>" width="100%" height="200" border="0"></iframe>
			</div>
		<?php endforeach ?>
	</div><!-- / Row -->
</div>