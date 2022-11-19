<style type="text/css">
	#imagePreview,
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
</style>
<script>
    $(function() {
        $("#info_picture").on("change", function()
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
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered table-hover" id="tablePertama">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Tanggal Dibuat</th>
							<th>Diterbitkan Oleh</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($dataInfos as $rowsInfos): ?>
							<script type="text/javascript">
								$(function(){
									var count = '<?= $no ?>';
									$("#compose"+count).wysihtml5();

									// Image
									$("#info_picture"+count).on("change", function()
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
							<tr>
								<td><?= $no ?></td>
								<td><?= $rowsInfos->info_title ?></td>
								<td><?= $rowsInfos->info_date ?></td>
								<td><?= $rowsInfos->info_author ?></td>
								<td>
									<a href="#editInfo<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
									<a href="#editImage<?= $no ?>" data-toggle="modal"><i class="fa fa-image"></i></a>
									<a href="<?= site_url('infos/InfosCtrl/index/'.$rowsInfos->id_info) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							<!-- Modal Edit Image -->
							<div class="modal fade" id="editImage<?= $no ?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Ubah Gambar</h4>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('infos/InfosCtrl/updateImage') ?>" method="POST" enctype="multipart/form-data">
												<input type="hidden" name="id_info" value="<?= $rowsInfos->id_info ?>">
												<div class="form-group">
													<label>Gambar</label>
													<input type="file" name="info_picture" id="info_picture<?= $no ?>" required>
												</div>
												<div id="imagePreview<?= $no ?>" class="imagePreview" style="background:url('<?= base_url("assets/images/infos/".$rowsInfos->info_picture) ?>');background-size:cover"></div>
										</div>
										<div class="modal-footer">
											<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat btn-block"><i class="fa fa-check-square"></i> Save!</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<!-- Modal Edit Content -->
							<div class="modal fade" id="editInfo<?= $no ?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Edit Data</h4>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('infos/InfosCtrl') ?>" method="POST" role="form">
												<input type="hidden" name="id_info" value="<?= $rowsInfos->id_info ?>">
												<div class="form-group">
													<label for="">Judul Info Kurikulum</label>
													<input type="text" class="form-control" name="info_title" placeholder="Judul Info Kurikulum" required value="<?= $rowsInfos->info_title ?>">
												</div>
												<div class="form-group">
													<label for="">Isi</label>
													<textarea class="form-control" name="info_content" id="compose<?= $no ?>">
														<?= $rowsInfos->info_content ?>
													</textarea>
												</div>
										</div>
										<div class="modal-footer">
											<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						<?php $no++; endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<form action="<?= site_url('infos/InfosCtrl') ?>" method="POST" role="form" enctype="multipart/form-data">
					<legend><i class="fa fa-plus"></i> Tambah Data</legend>
					<div class="form-group">
						<label for="">Judul Info Kurikulum</label>
						<input type="text" class="form-control" name="info_title" placeholder="Judul Info Kurikulum" required>
					</div>
					<div class="form-group">
						<label for="">Isi</label>
						<textarea class="form-control" name="info_content" id="compose-textarea">
							
						</textarea>
					</div>
					<div class="form-group">
						<label for="">Gambar</label>
						<input type="file" required name="info_picture" id="info_picture">
					</div>
					<div id="imagePreview"></div>
					<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
				</form>
			</div>
		</div><!-- / Row -->
	</div>
</div>