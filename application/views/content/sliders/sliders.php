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
    	height: 340px;
    }
    .imageSlider img {
    	width: 100%;
    	height: 340px;
    }
</style>
<script>
    $(function() {
        $("#slider_image").on("change", function()
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
		<a href="#addNewSlider" data-toggle="modal" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Slider</a>
	</div>
	<div class="box-body">
		<div class="row">
			<legend></legend>
			<?php $no =1 ;foreach ($dataSliders as $rows => $rowsSlider): ?>
				<?php if ($no > 2): ?>
					<?php $no = 1; ?>
					<br /><br /><br />
				<?php endif ?>
				<script>
				    $(function() {
				    	var count = '<?= $rowsSlider->id_slider ?>';
				        $("#slider_image"+count).on("change", function()
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
				<div class="col-md-6">
					<legend><p class="text-center"><?= $rowsSlider->slider_desc ?>&nbsp; <a href="#editSlider<?= $rows ?>" data-toggle="modal"><i class="fa fa-edit"></i></a> <a href="<?= site_url('sliders/SliderCtrl/index/'.$rowsSlider->id_slider) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a></p></legend>
					<div class="imageSlider">
						<img src="<?= base_url('assets/images/sliders/'.$rowsSlider->slider_image) ?>" class="img-thumbnail">
					</div>
				</div><!-- / -->
				<div class="modal fade" id="editSlider<?= $rows ?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Edit Slider</h4>
							</div>
							<div class="modal-body">
								<form action="<?= site_url('sliders/SliderCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
									<input type="hidden" name="id_slider" value="<?= $rowsSlider->id_slider ?>">
									<div class="form-group">
										<label>File Gambar</label>
										<input type="file" name="slider_image" id="slider_image<?= $rowsSlider->id_slider ?>">
										<div id="imagePreview<?= $rowsSlider->id_slider ?>" class="imagePreview" style="background:url('<?= base_url("assets/images/sliders/".$rowsSlider->slider_image) ?>');background-size:cover"></div>
									</div>
									<div class="form-group">
										<label for="">Deskripsi</label>
										<input type="text" class="form-control" name="slider_desc" placeholder="Ex: Acara Seminar Sekolah" required value="<?= $rowsSlider->slider_desc ?>">
									</div>
							</div>
							<div class="modal-footer">
								<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			<?php $no++; endforeach ?>
		</div><!-- / Row -->
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewSlider">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Slider</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('sliders/SliderCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label>File Gambar</label>
						<input type="file" name="slider_image" id="slider_image">
						<div id="imagePreview"></div>
					</div>
					<div class="form-group">
						<label for="">Deskripsi</label>
						<input type="text" class="form-control" name="slider_desc" placeholder="Ex: Acara Seminar Sekolah" required>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>