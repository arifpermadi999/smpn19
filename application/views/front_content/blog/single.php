<div class="mainBlog">
	<div class="row">
		<div class="col-md-8">
			<legend class="text-center"><i class="fa fa-newspaper-o"></i> <?= $singleBlog->title ?></legend>
			<img src="<?= base_url('assets/images/blogs/'.$singleBlog->image) ?>" class="img-thumbnail">
			<br /><br />
			<blockquote style="text-align:justify">
				<small style="text-align:justify" class="content">

				<?php 
						$deskripsi = str_replace("(yt)",'<iframe width="100%" height="400" src="https://www.youtube.com/embed/',$singleBlog->content);
						$deskripsi = str_replace("(/yt)",'"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',$deskripsi);
						echo $deskripsi;
					 ?>

				</small>
			</blockquote>
			<legend></legend>
			<h6 style="margin-left:20px;">
			<i class="fa fa-user"></i> <?= $singleBlog->author ?> | <i class="fa fa-calendar"></i> <?= $singleBlog->created_at ?>| <i class="fa fa-eye"></i> Dibaca : <?= $singleBlog->jumlah_dibaca + 1 ?>
			</h6>
		</div>
		<div class="col-md-4">
			<legend class="titleHome">Informasi Lainnya</legend>
			<ul class="blog">
				<?php foreach ($dataBlogs as $rowsBlogs => $valueBlogs): ?>
					<?php if ($rowsBlogs < 10): ?>
						<a href="<?= base_url('berita/'.$valueBlogs->slug) ?>"><li><?= $valueBlogs->title ?></li></a>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div><!-- / Row -->
</div>