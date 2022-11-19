<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<?php if ($singleInfo): ?>
				<legend class="text-center"><i class="fa fa-newspaper-o"></i> <?= $singleInfo->info_title ?></legend>
				<img src="<?= base_url('assets/images/infos/'.$singleInfo->info_picture) ?>" class="img-thumbnail">
				<br /><br />
				<blockquote style="text-align:justify">
					<small style="text-align:justify">
						<?= str_replace('<p>','', str_replace('</p>', '',$singleInfo->info_content)) ?>
					</small>
				</blockquote>
				<legend></legend>
				<h6 style="margin-left:20px;">
					<i class="fa fa-user"></i> <?= $singleInfo->info_author ?> | <i class="fa fa-calendar"></i> <?= $singleInfo->info_date ?>
				</h6>
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
</div>