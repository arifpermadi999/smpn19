<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<!-- <a href="#excel" data-toggle="modal" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Import Data</a> -->
		<a href="<?= base_url('C_home/deleteAllSarana') ?>" onclick="return confirm('Apa anda yakin ingin menghapus semua data ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Gambar</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataSarana as $row): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row->kp_nama ?></td>
						<td><img src="<?= base_url('assets/images/profil/'.$row->kp_photo) ?>" style=width:50%;height:250px;></td>
						<td>
							<a href="<?= base_url('C_home/deleteSarana/'.$row->id_sarana) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
				<?php $no++; endforeach ?>
			</tbody>
		</table>

	</div>
</div>

<!-- MODAL -->
<div class="modal fade" id="add">
	<div class="modal-dialog" style="width:60%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('C_home/uploadSarana') ?>" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Nama File</label>
								<input type="text" class="form-control" name="kp_nama" placeholder="Nama File">
							</div>
						</div>
					</div><!-- / ROW -->
					<div class="row"> 
						<div class="col-sm-12">
							<center>
							<div class="form-group">
								<label>Gambar *: </label>
								<div class="imgCircle" style="">
									<input title="Upload image!" required type="file" name="kp_photo" class="upload" onchange="preview(this)">
								</div>
							</div>
							</center>
						</div>
					</div><!-- / ROW -->
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary"><i class="fa fa-check"></i> Simpan!</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	var preview = function(el) {
        if (el.files && el.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(el).parent().css({'background-image': 'url('+e.target.result+')','background-size':'cover','background-position': 'center center'});
            }

            reader.readAsDataURL(el.files[0]);
        }
    }
</script>
<style type="text/css">
	.imgCircle {
		/*border-radius: 50%;*/
		width: 300px;
		height: 200px;
		margin: 0px auto;
		margin-top: 0px;
		background: url('<?= base_url("assets/images/image.png") ?>') no-repeat center center;
	    background-position: center center;
	    background-size: cover;
		border: 2px solid #8A8A8A;
		/*background-color: #8A8A8A;*/
	}
	.imgCircle input.upload {
	    position: absolute;
	    margin: 0;
	    padding: 0;
	    font-size: 20px;
	    cursor: pointer;
	    opacity: 0;
	    filter: alpha(opacity=0);
	    /*border-radius: 50%;*/
	    width: 200px;
	    height: 200px;
	    /*height: 100%;*/
	}
</style>
