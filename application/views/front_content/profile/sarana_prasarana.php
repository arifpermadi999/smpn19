<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<legend class="titleHome">Sarana & Prasarana</legend>
			<?php if ($dataProfile): ?>
				<?php foreach ($dataProfile as $rowsProfile => $valueProfile): ?>
					<div class="row">
						<div class="col-md-4">
							<img src="<?= base_url('assets/images/profile/'.$valueProfile->profile_picture) ?>" class="notSingle">
						</div>
						<div class="col-md-8">
							<a href="<?= site_url('FrontCtrl/sarana_prasarana/'.$valueProfile->profile_slug) ?>"><legend><?= $valueProfile->profile_name ?></legend></a>
							<blockquote>
								<small style="font-size:12px;">
									<?= substr(str_replace('<p>','', str_replace('</p>', '', str_replace('<br>', '', $valueProfile->profile_content))),0,250) ?>...
								</small>
							</blockquote>
							<p style="font-size:11px"><i class="fa fa-user"></i> <?= $valueProfile->profile_author ?> | <i class="fa fa-calendar"></i> <?= $valueProfile->profile_date ?></p>
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
			<legend class="titleHome">Sarana & Prasarana Lainnya</legend>
			<ul class="blog">
				<?php foreach ($dataProfileOld as $rowsProfileOld => $valueProfileOld): ?>
					<?php if ($rowsProfileOld < 10): ?>
						<a href="<?= site_url('FrontCtrl/sarana_prasarana/'.$valueProfileOld->profile_slug) ?>"><li><?= $valueProfileOld->profile_name ?></li></a>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->