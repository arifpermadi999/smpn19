<div class="box box-primary">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered table-hover" id="tablePertama">
					<thead>
						<tr>
							<th>#</th>
							<th>Judul</th>
							<th>Link</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($dataVideos as $rowsVideos): ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $rowsVideos->video_title ?></td>
								<td><?= $rowsVideos->video_link ?></td>
								<td>
									<a href="#editVideo<?= $no ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('videos/VideosCtrl/index/'.$rowsVideos->id_video) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							<div class="modal fade" id="editVideo<?= $no ?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Edit Video</h4>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('videos/VideosCtrl') ?>" method="POST" role="form">
												<input type="hidden" name="id_video" value="<?= $rowsVideos->id_video ?>">
												<div class="form-group">
													<label for="">Judul Video</label>
													<input type="text" class="form-control" name="video_title" placeholder="Judul video" required value="<?= $rowsVideos->video_title ?>">
												</div>
												<div class="form-group">
													<label for="">Link Video</label>
													<input type="text" class="form-control" name="video_link" placeholder="Link video" required value="<?= $rowsVideos->video_link ?>">
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
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<form action="<?= site_url('videos/VideosCtrl') ?>" method="POST" role="form">
					<legend><i class="fa fa-plus"></i> Tambah Video</legend>
					<div class="form-group">
						<label for="">Judul Video</label>
						<input type="text" class="form-control" name="video_title" placeholder="Judul video" required >
					</div>
					<div class="form-group">
						<label for="">Link Video</label>
						<input type="text" class="form-control" name="video_link" placeholder="Link video" required >
					</div>
					<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
				</form>
			</div>
		</div><!-- / Row -->
	</div>
</div>