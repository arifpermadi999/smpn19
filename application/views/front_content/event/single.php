<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<?php if ($singleEvent): ?>
				<legend class="text-center"><i class="fa fa-newspaper-o"></i> <?= $singleEvent->event_name ?></legend>
				<img src="<?= base_url('assets/images/events/'.$singleEvent->event_picture) ?>" class="img-thumbnail">
				<br /><br />
				<blockquote style="text-align:justify">
					<small style="text-align:justify">
						<?= str_replace('<p>','', str_replace('</p>', '',$singleEvent->event_content)) ?>
					</small>
				</blockquote>
				<legend></legend>
				<h6 style="margin-left:20px;">
					<i class="fa fa-user"></i> <?= $singleEvent->event_author ?> | <i class="fa fa-calendar"></i> <?= $singleEvent->event_date ?>
				</h6>
			<?php else: ?>
				<center><h6>Tidak ada data tersedia</h6></center>
			<?php endif ?>
		</div>
		<div class="col-md-4">
			<legend class="titleHome">Kegiatan Lainnya</legend>
			<ul class="blog">
				<?php foreach ($dataEventsOld as $rowsEventsOld => $valueEventsOld): ?>
					<?php if ($rowsEventsOld < 10): ?>
						<a href="<?= site_url('FrontCtrl/kegiatan_kesiswaan/'.$valueEventsOld->event_slug) ?>"><li><?= $valueEventsOld->event_name ?></li></a>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div><!-- / Row -->
</div>