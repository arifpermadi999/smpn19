<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<legend class="titleHome">Info Kurikulum</legend>
			<?php if ($dataInfos): ?>
				<?php foreach ($dataInfos as $rowsInfos => $valueInfos): ?>
					<div class="row">
						<div class="col-md-4">
							<img src="<?= base_url('assets/images/infos/'.$valueInfos->info_picture) ?>" class="notSingle">
						</div>
						<div class="col-md-8">
							<a href="<?= site_url('FrontCtrl/info_kurikulum/'.$valueInfos->info_slug) ?>"><legend><?= $valueInfos->info_title ?></legend></a>
							<blockquote>
								<small style="font-size:12px;">
									<?= substr(str_replace('<p>','', str_replace('</p>', '', str_replace('<br>', '', $valueInfos->info_content))),0,250) ?>...
								</small>
							</blockquote>
							<p style="font-size:11px"><i class="fa fa-user"></i> <?= $valueInfos->info_author ?> | <i class="fa fa-calendar"></i> <?= $valueInfos->info_date ?></p>
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
			<legend class="titleHome">Info Lainnya</legend>
			<ul class="blog">
				<?php foreach ($otherInfos as $otherRows => $otherValues): ?>
					<?php if ($otherRows < 10): ?>
						<a href="<?= site_url('FrontCtrl/info_kurikulum/'.$otherValues->info_slug) ?>"><li><?= $otherValues->info_title ?></li></a>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->