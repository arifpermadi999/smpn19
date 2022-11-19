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
        $("#image").on("change", function()
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
		<a href="#addNewBlog" data-toggle="modal" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Blog</a>
	</div>
	<div class="box-body">
		<div class="row">
			<legend></legend>
			<?php $no =1 ;foreach ($dataBlogs as $rows => $rowsBlog): ?>
				<?php if ($no > 2): ?>
					<?php $no = 1; ?>
					<br /><br /><br />
				<?php endif ?>
				<script>
				    $(function() {
				    	var count = '<?= $rowsBlog->id_blog ?>';
				    	$("#compose-textarea"+count).wysihtml5();
				        $("#image"+count).on("change", function()
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
					<legend><p class="text-center"><?= $rowsBlog->title ?>&nbsp; <a href="#editBlog<?= $rows ?>" data-toggle="modal"><i class="fa fa-edit"></i></a> <a href="<?= site_url('blogs/BlogsCtrl/index/'.$rowsBlog->id_blog) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a></p></legend>
					<div class="imageSlider">
						<img src="<?= base_url('assets/images/blogs/'.$rowsBlog->image) ?>" class="img-thumbnail">
					</div>
					<blockquote>
						<i>
							<small> Konten
								<?php 
										$deskripsi = str_replace("(yt)",'<iframe width="400" height="200" src="https://www.youtube.com/embed/',$rowsBlog->content);
										$deskripsi = str_replace("(/yt)",'"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',$deskripsi);

									 ?>
											<?= $deskripsi ?>
							</small>
						</i>
					</blockquote>
				</div><!-- / -->
				<div class="modal fade" id="editBlog<?= $rows ?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Edit Blog</h4>
							</div>
							<div class="modal-body">
								<form action="<?= site_url('blogs/BlogsCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
									<input type="hidden" name="id_blog" value="<?= $rowsBlog->id_blog ?>">
									<div class="form-group">
										<label>Judul <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" name="title" placeholder="Judul blog" required value="<?= $rowsBlog->title ?>">
									</div>
									<div class="form-group">
										<label>File Gambar</label>
										<input type="file" name="image" id="image<?= $rowsBlog->id_blog ?>">
										<div id="imagePreview<?= $rowsBlog->id_blog ?>" class="imagePreview" style="background:url('<?= base_url("assets/images/sliders/".$rowsBlog->image) ?>');background-size:cover"></div>
									</div>
									<div class="form-group">
										<label for="">Konten</label>
										<textarea required class="form-control" name="content" id="compose-textarea<?= $rowsBlog->id_blog ?>">
											<?= $rowsBlog->content ?>
										</textarea>
										<label>youtube = (yt)kode_youtube(/yt)</label>
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
<div class="modal fade" id="addNewBlog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Blog</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('blogs/BlogsCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul <sup class="text-danger">*</sup></label>
						<input type="text" class="form-control" name="title" placeholder="Judul blog" required>
					</div>
					<div class="form-group">
						<label>File Gambar <sup class="text-danger">*</sup></label>
						<input type="file" name="image" id="image" required>
						<div id="imagePreview"></div>
					</div>
					<div class="form-group">
						<label for="">Konten <sup class="text-danger">*</sup></label>
						<textarea required class="form-control" name="content" id="compose-textarea">
							
						</textarea>
						<label>youtube = (yt)kode_youtube(/yt)</label>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>