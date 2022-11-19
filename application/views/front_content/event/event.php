<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<legend class="titleHome">Kegiatan Kesiswaan</legend>
			<?php if ($dataEvents): ?>
				<?php foreach ($dataEvents as $rowsInfos => $valueEvents): ?>
					<div class="row">
						<div class="col-md-4">
							<img src="<?= base_url('assets/images/events/'.$valueEvents->event_picture) ?>" class="notSingle">
						</div>
						<div class="col-md-8">
							<a href="<?= site_url('FrontCtrl/kegiatan_kesiswaan/'.$valueEvents->event_slug) ?>"><legend><?= $valueEvents->event_name ?></legend></a>
							<blockquote>
								<small style="font-size:12px;">
									<?= substr(str_replace('<p>','', str_replace('</p>', '', str_replace('<br>', '', $valueEvents->event_content))),0,250) ?>...
								</small>
							</blockquote>
							<p style="font-size:11px"><i class="fa fa-user"></i> <?= $valueEvents->event_author ?> | <i class="fa fa-calendar"></i> <?= $valueEvents->event_date ?></p>
						</div>
					</div><!-- / Row -->
					<br />
					<legend></legend>
				<?php endforeach ?>
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
</div><!-- / MainBlog -->