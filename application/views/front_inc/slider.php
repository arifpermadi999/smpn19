<div class="row">
	<div class="col-md-12">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($dataSlider as $rowsSlider => $valueSlider): ?>
					<?php if ($rowsSlider == 0): ?>
						<div class="item active">
					<?php else : ?>
						<div class="item">
					<?php endif; ?>
						<img src="<?= base_url('assets/images/sliders/'.$valueSlider->slider_image) ?>">
						<div class="container">
							<div class="carousel-caption">
								<h1><?= $valueSlider->slider_desc ?></h1>
							</div>
						</div>
					</div>	
				<?php endforeach ?>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div><!-- / Row -->