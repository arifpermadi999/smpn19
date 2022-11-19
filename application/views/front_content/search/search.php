<div class="mainBlog">
	<legend>Hasil pencarian keywords : <?= $keywords ?></legend>
	<div class="row">
		<div class="col-md-8">
			<?php foreach ($dataSearch as $rowsSearch => $valueSearch): ?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?= base_url('assets/images/blogs/'.$valueSearch->image) ?>" class="notSingle">
					</div>
					<div class="col-md-8">
						<a href="<?= site_url('FrontCtrl/berita/'.$valueSearch->slug) ?>"><legend><?= $valueSearch->title ?></legend></a>
						<blockquote>
							<small style="font-size:12px;">
								<?= substr(str_replace('<p>','', str_replace('</p>', '', str_replace('<br>', '', $valueSearch->content))),0,250) ?>...
							</small>
						</blockquote>
						<p style="font-size:11px"><i class="fa fa-user"></i> <?= $valueSearch->author ?> | <i class="fa fa-calendar"></i> <?= $valueSearch->created_at ?></p>
					</div>
				</div><!-- / Row -->
				<br />
			<?php endforeach ?>
		</div>
		<div class="col-md-4">
			<legend class="titleHome">Berita Lainnya</legend>
			<ul class="blog">
				<?php foreach ($dataBlogs as $rowsBlogs => $valueBlogs): ?>
					<?php if ($rowsBlogs < 10): ?>
						<a href="<?= site_url('FrontCtrl/berita/'.$valueBlogs->slug) ?>"><li><?= $valueBlogs->title ?></li></a>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->