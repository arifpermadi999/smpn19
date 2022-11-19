<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<a href="<?= base_url('C_home/deleteAllLinkujian/'.$kelas) ?>" onclick="return confirm('Apa anda yakin ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
				<th>#</th>
					<th>Mapel</th>
					<th>Hari & Tanggal</th>
					<th>Waktu</th>
					<th>Link Soal Dari Google Form</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataLinkujian as $row): ?>
					<tr>
					<td><?= $no ?></td>
						<td><?= $row->mapel ?></td>
						<td><?= $row->tanggal ?></td>
						<td><?= $row->waktu ?></td>
						<td><?= $row->link ?></td>
						<td>
							<a href="<?= base_url('C_home/edit_linkujian/'.$row->id_linkujian."/".$kelas) ?>"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('C_home/linkujian_action/'.$row->id_linkujian."/".$kelas) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
				<?php $no++; endforeach ?>
			</tbody>
		</table>

	</div>
</div>

<!-- MODAL -->
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Ujian <?= $kelas ?></h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('C_home/linkujian_action') ?>" method="POST" role="form">
				<div class="row">
					<div class="col-lg-12">
						<input type="hidden" name="kelas" value="<?= $kelas ?>">
						<div class="form-group">
							<label>Mata Pelajaran *</label>
							<input type="text" class="form-control" name="mapel" placeholder="Mapel" required>
						</div>
						<div class="form-group">
							<label>Hari & Tanggal *</label>
							<input type="text" class="form-control" name="tanggal" placeholder="tanggal" required>
						</div>
						<div class="form-group">
							<label>Waktu Ujian *</label>
							<input type="text" class="form-control" name="waktu" placeholder="Waktu" required>
						</div>

						<div class="form-group">
							<label>Link Soal dari Google Form Yang Panjang *</label>
							<input type="text" class="form-control" name="link" placeholder="Link" required>
						</div>
						
					</div>
				</div><!-- / ROW -->
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>
