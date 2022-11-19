<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<legend class="titleHome">Informasi Terbaru</legend>
			<?php if ($dataBlogs): ?>
				<?php foreach ($dataBlogs as $rowsBlogs => $valueBlogs): ?>
					<div class="row">
						<div class="col-md-4">
							<img src="<?= base_url('assets/images/blogs/'.$valueBlogs->image) ?>" class="notSingle">
						</div>
						<div class="col-md-8">
							<a href="<?= base_url('berita/'.$valueBlogs->slug) ?>"><legend><?= $valueBlogs->title ?></legend></a>
							<blockquote>
								<small style="font-size:12px;">
									<?= substr(str_replace('<p>','', str_replace('</p>', '', str_replace('<br>', '', $valueBlogs->content))),0,250) ?>...
								</small>
							</blockquote>
							<p style="font-size:11px"><i class="fa fa-user"></i> <?= $valueBlogs->author ?> | <i class="fa fa-calendar"></i> <?= $valueBlogs->created_at ?>| <i class="fa fa-eye"></i> Dibaca : <?= $valueBlogs->jumlah_dibaca + 1 ?></p>
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
			<legend class="titleHome">Informasi Terdahulu</legend>
			<ul class="blog">
				<?php foreach ($dataBlogsOld as $rowsBlogsOld => $valueBlogsOld): ?>
					<?php if ($rowsBlogsOld < 10): ?>
						<a href="<?= base_url('berita/'.$valueBlogsOld->slug) ?>"><li><?= $valueBlogsOld->title ?></li></a>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div><!-- / Row -->
</div><!-- / MainBlog -->