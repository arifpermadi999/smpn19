<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<?php if ($singleProfile): ?>
				<legend class="text-center"><i class="fa fa-newspaper-o"></i> <?= $singleProfile->profile_name ?></legend>
				<img src="<?= base_url('assets/images/profile/'.$singleProfile->profile_picture) ?>" class="img-thumbnail">
				<br /><br />
				<blockquote style="text-align:justify">
					<small style="text-align:justify">
						<?= str_replace('<p>','', str_replace('</p>', '',$singleProfile->profile_content)) ?>
					</small>
				</blockquote>
				<legend></legend>
				<h6 style="margin-left:20px;">
					<i class="fa fa-user"></i> <?= $singleProfile->profile_author ?> | <i class="fa fa-calendar"></i> <?= $singleProfile->profile_date ?>
				</h6>
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
</div>