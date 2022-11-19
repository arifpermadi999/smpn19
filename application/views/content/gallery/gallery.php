<style type="text/css">
	#imagePreview {
        width: 100%;
        height: 300px;
        margin-top:10px;    
        margin-right:50px;
        background-position: center center;
        background-size: cover;
        box-shadow : 0px 1px 2px 0px black;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
    .imagePreview {
        width: 100%;
        height: 300px;
        margin-top:10px;    
        margin-right:50px;
        background-position: center center;
        background-size: cover;
        box-shadow : 0px 1px 2px 0px black;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
    .imageSlider {
    	width: 100%;
    	height: 170px;
    }
    .imageSlider img {
    	width: 100%;
    	height: 170px;
    }
</style>
<script>
    $(function() {
        $("#photos").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
            
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                
                reader.onloadend = function(){ // set image data as background of div
                    $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });
    });
</script>
<div class="box box-primary">
	<div class="box-header">
		<a href="#addNewGallery" data-toggle="modal" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Gallery</a>
	</div>
	<div class="box-body">
		<?php $no =1; foreach ($dataGallery as $rowsGallery): ?>
			<?php if ($rowsGallery->gallery == 'empty'): ?>
			<?php else : ?>
				<div class="row">
					<div class="col-md-12">
						<legend class="text-center"><i class="fa fa-image"></i> <?= $rowsGallery->category_name ?></legend>
						<div class="row">
							<?php foreach ($rowsGallery->gallery[0] as $rowsDetail): ?>
								<div class="col-md-3">
									<h3 class="text-right">
										<a href="#editGallery<?= $no ?><?= $rowsDetail->id_gallery ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
										<a href="<?= site_url('gallery/GalleryCtrl/index/'.$rowsDetail->id_gallery) ?>" onclick="return confirm('Are you sure ??')"><i class="fa fa-trash-o"></i></a>
									</h3>
									<div class="imageSlider">
										<img src="<?= base_url('assets/images/gallery/'.$rowsDetail->photos) ?>" class="img-thumbnail">
										<center><label><?= substr($rowsDetail->photos_desc,0,60) ?></label></center><!-- tambahan ket foto -->
									</div>
								</div>
								<script>
								    $(function() {
								    	var count = '<?= $rowsDetail->id_gallery ?>';
								        $("#photos"+count).on("change", function()
								        {
								            var files = !!this.files ? this.files : [];
								            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
								            
								            if (/^image/.test( files[0].type)){ // only image file
								                var reader = new FileReader(); // instance of the FileReader
								                reader.readAsDataURL(files[0]); // read the local file
								                
								                reader.onloadend = function(){ // set image data as background of div
								                    $("#imagePreview"+count).css("background-image", "url("+this.result+")");
								                }
								            }
								        });
								    });
								</script>
								<!-- Modal Edit -->
								<div class="modal fade" id="editGallery<?= $no ?><?= $rowsDetail->id_gallery ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Edit Gallery</h4>
											</div>
											<div class="modal-body">
												<form action="<?= site_url('gallery/GalleryCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
													<input type="hidden" name="id_gallery" value="<?= $rowsDetail->id_gallery ?>">
													<div class="form-group">
														<label for="">Kategori Gambar</label>
														<select class="form-control" name="category_name">
															<?php foreach ($dataCatImages as $rowsCat): ?>
																<?php if ($rowsCat->category_name == $rowsDetail->category_name): ?>
																	<option value="<?= $rowsCat->category_name ?>" selected><?= $rowsCat->category_name ?></option>
																<?php else : ?>
																	<option value="<?= $rowsCat->category_name ?>"><?= $rowsCat->category_name ?></option>
																<?php endif ?>
															<?php endforeach ?>
														</select>
													</div>
													<div class="form-group">
														<label>Gambar</label>
														<input type="file" name="photos" id="photos<?= $rowsDetail->id_gallery ?>">
														<div id="imagePreview<?= $rowsDetail->id_gallery ?>" class="imagePreview" style="background:url('<?= base_url("assets/images/gallery/".$rowsDetail->photos) ?>');background-size:cover"></div>
													</div>
													<!-- tambahan ket foto -->							
													<div class="form-group">
														<label>Deskripsi</label>
														<textarea name="photos_desc" class="form-control"><?= $rowsDetail->photos_desc ?></textarea>
														
													</div>
											</div>
											<div class="modal-footer">
												<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-flat btn-primary"><i class="fa fa-check-square"></i> Save!</button>
											</div>
											</form>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div><!-- / row -->
					</div>
				</div><!-- / Row -->
			<?php endif ?>
		<?php $no++; endforeach ?>
	</div>
</div>

<div class="modal fade" id="addNewGallery">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Gallery</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('gallery/GalleryCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Kategori Gambar</label>
						<select class="form-control" name="category_name">
							<?php foreach ($dataCatImages as $rowsCat): ?>
								<option value="<?= $rowsCat->category_name ?>"><?= $rowsCat->category_name ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="photos" id="photos">
						<div id="imagePreview"></div>
					</div>
					<!-- tambahan ket foto -->
					<div class="form-group">
						<label>Deskripsi</label>
						<input type="text" name="photos_desc" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-flat btn-primary"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>