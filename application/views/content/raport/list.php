<div class="box box-primary">
	<div class="box-body">
		<a href="#add" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<a href="#excel" data-toggle="modal" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Import Data</a>
		<a href="<?= site_url('C_home/deleteAllraport') ?>" onclick="return confirm('Apa anda yakin ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Semua</a>
		<br /><br />
		<table class="table table-bordered table-hover" id="tablePertama">
			<thead>
				<tr>
					<th>#</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Walas</th>
					<!--<th>P01</th>
					<th>P02</th>
					<th>P03</th>
					<th>P04</th>
					<th>P05</th>
					<th>P06</th>
					<th>P07</th>
					<th>P08</th>
					<th>P09</th>
					<th>P10</th>
					<th>P11</th>
					<th>K01</th>
					<th>K02</th>
					<th>K03</th>
					<th>K04</th>
					<th>K05</th>
					<th>K06</th>
					<th>K07</th>
					<th>K08</th>
					<th>K09</th>
					<th>K10</th>
					<th>K11</th>
					<th>PTS01</th>
					<th>PTS02</th>
					<th>PTS03</th>
					<th>PTS04</th>
					<th>PTS05</th>
					<th>PTS06</th>
					<th>PTS07</th>
					<th>PTS08</th>
					<th>PTS09</th>
					<th>PTS10</th>
					<th>PTS11</th>
					<th>sakit</th>
					<th>ijin</th>
					<th>alpa</th>-->
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataRaport as $row): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row->no_induk ?></td>
						<td><?= $row->nama_siswa ?></td>
						<td><?= $row->kelas ?></td>
						<td><?= $row->walas ?></td>
						<!--<td><?= number_format ($row->P01,2) ?></td>
						<td><?= number_format ($row->P02,2) ?></td>
						<td><?= number_format ($row->P03,2) ?></td>
						<td><?= number_format ($row->P04,2) ?></td>
						<td><?= number_format ($row->P05,2) ?></td>
						<td><?= number_format ($row->P06,2) ?></td>
						<td><?= number_format ($row->P07,2) ?></td>
						<td><?= number_format ($row->P08,2) ?></td>
						<td><?= number_format ($row->P09,2) ?></td>
						<td><?= number_format ($row->P10,2) ?></td>
						<td><?= number_format ($row->P11,2) ?></td>
						<td><?= number_format ($row->K01,2) ?></td>
						<td><?= number_format ($row->K02,2) ?></td>
						<td><?= number_format ($row->K03,2) ?></td>
						<td><?= number_format ($row->K04,2) ?></td>
						<td><?= number_format ($row->K05,2) ?></td>
						<td><?= number_format ($row->K06,2) ?></td>
						<td><?= number_format ($row->K07,2) ?></td>
						<td><?= number_format ($row->K08,2) ?></td>
						<td><?= number_format ($row->K09,2) ?></td>
						<td><?= number_format ($row->K10,2) ?></td>
						<td><?= number_format ($row->K11,2) ?></td>
						<td><?= number_format ($row->PTS01,2) ?></td>
						<td><?= number_format ($row->PTS02,2) ?></td>
						<td><?= number_format ($row->PTS03,2) ?></td>
						<td><?= number_format ($row->PTS04,2) ?></td>
						<td><?= number_format ($row->PTS05,2) ?></td>
						<td><?= number_format ($row->PTS06,2) ?></td>
						<td><?= number_format ($row->PTS07,2) ?></td>
						<td><?= number_format ($row->PTS08,2) ?></td>
						<td><?= number_format ($row->PTS09,2) ?></td>
						<td><?= number_format ($row->PTS10,2) ?></td>
						<td><?= number_format ($row->PTS11,2) ?></td>
						<td><?= $row->sakit ?></td>
						<td><?= $row->ijin ?></td>
						<td><?= $row->alpa ?></td>-->
						<td>
							<a href="<?= site_url('C_home/edit_raport/'.$row->id_raport) ?>"><i class="fa fa-edit"></i></a>
							<a href="<?= site_url('graduated/GraduatedCtrl/raport/'.$row->id_raport) ?>" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i></a>
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
				<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Raport</h4>
			</div>
			<div class="modal-body">
				<form action="<?= site_url('graduated/GraduatedCtrl/raport') ?>" method="POST" role="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="">No Induk</label>
								<input type="text" class="form-control" name="no_induk" placeholder="No Induk" required>
							</div>
							<div class="form-group">
								<label for="">Nama Siswa</label>
								<input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" required>
							</div>
							<div class="form-group">
								<label for="">Kelas</label>
								<input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
							</div>
							<div class="form-group">
								<label for="">Walas</label>
								<input type="text" class="form-control" name="walas" placeholder="Walas" required>
							</div>
							<div class="form-group">
								<label for="">Agama (Pengetahuan)</label>
								<input type="number" class="form-control" name="P01" placeholder="Agama" required>
							</div>
							<div class="form-group">
								<label for="">PPKN</label>
								<input type="number" class="form-control" name="P02" placeholder="PPKN" required>
							</div>
							<div class="form-group">
								<label for="">BINDO</label>
								<input type="number" class="form-control" name="P03" placeholder="BINDO" required>
							</div>
							<div class="form-group">
								<label for="">MTK</label>
								<input type="number" class="form-control" name="P04" placeholder="MTK" required>
							</div>
							<div class="form-group">
								<label for="">IPA</label>
								<input type="number" class="form-control" name="P05" placeholder="IPA" required>
							</div>
							<div class="form-group">
								<label for="">IPS</label>
								<input type="number" class="form-control" name="P06" placeholder="IPS" required>
							</div>
							<div class="form-group">
								<label for="">B. Inggris</label>
								<input type="number" class="form-control" name="P07" placeholder="B. Inggris" required>
							</div>
							<div class="form-group">
								<label for="">SBK</label>
								<input type="number" class="form-control" name="P08" placeholder="SBK" required>
							</div>
							<div class="form-group">
								<label for="">PJOK</label>
								<input type="number" class="form-control" name="P09" placeholder="PJOK" required>
							</div>
							<div class="form-group">
								<label for="">Informatika</label>
								<input type="number" class="form-control" name="P10" placeholder="Informatika" required>
							</div>
							<div class="form-group">
								<label for="">B. Sunda</label>
								<input type="number" class="form-control" name="P11" placeholder="B. Sunda" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="">Agama (Keterampilan)</label>
								<input type="number" class="form-control" name="K01" placeholder="Agama" required>
							</div>
							<div class="form-group">
								<label for="">PPKN</label>
								<input type="number" class="form-control" name="K02" placeholder="PPKN" required>
							</div>
							<div class="form-group">
								<label for="">BINDO</label>
								<input type="number" class="form-control" name="K03" placeholder="BINDO" required>
							</div>
							<div class="form-group">
								<label for="">MTK</label>
								<input type="number" class="form-control" name="K04" placeholder="MTK" required>
							</div>
							<div class="form-group">
								<label for="">IPA</label>
								<input type="number" class="form-control" name="K05" placeholder="IPA" required>
							</div>
							<div class="form-group">
								<label for="">IPS</label>
								<input type="number" class="form-control" name="K06" placeholder="IPS" required>
							</div>
							<div class="form-group">
								<label for="">B. Inggris</label>
								<input type="number" class="form-control" name="K07" placeholder="B. Inggris" required>
							</div>
							<div class="form-group">
								<label for="">SBK</label>
								<input type="number" class="form-control" name="K08" placeholder="SBK" required>
							</div>
							<div class="form-group">
								<label for="">PJOK</label>
								<input type="number" class="form-control" name="K09" placeholder="PJOK" required>
							</div>
							<div class="form-group">
								<label for="">Informatika</label>
								<input type="number" class="form-control" name="K10" placeholder="Informatika" required>
							</div>
							<div class="form-group">
								<label for="">B. Sunda</label>
								<input type="number" class="form-control" name="K11" placeholder="B. Sunda" required>
							</div>
							<div class="form-group">
								<label for="">Agama (PTS)</label>
								<input type="number" class="form-control" name="PTS01" placeholder="Agama" required>
							</div>
							<div class="form-group">
								<label for="">PPKN</label>
								<input type="number" class="form-control" name="PTS02" placeholder="PPKN" required>
							</div>
							<div class="form-group">
								<label for="">BINDO</label>
								<input type="number" class="form-control" name="PTS03" placeholder="BINDO" required>
							</div>
							<div class="form-group">
								<label for="">MTK</label>
								<input type="number" class="form-control" name="PTS04" placeholder="MTK" required>
							</div>
							<div class="form-group">
								<label for="">IPA</label>
								<input type="number" class="form-control" name="PTS05" placeholder="IPA" required>
							</div>
							<div class="form-group">
								<label for="">IPS</label>
								<input type="number" class="form-control" name="PTS06" placeholder="IPS" required>
							</div>
							<div class="form-group">
								<label for="">B. Inggris</label>
								<input type="number" class="form-control" name="PTS07" placeholder="B. Inggris" required>
							</div>
							<div class="form-group">
								<label for="">SBK</label>
								<input type="number" class="form-control" name="PTS08" placeholder="SBK" required>
							</div>
							<div class="form-group">
								<label for="">PJOK</label>
								<input type="number" class="form-control" name="PTS09" placeholder="PJOK" required>
							</div>
							<div class="form-group">
								<label for="">Informatika</label>
								<input type="number" class="form-control" name="PTS10" placeholder="Informatika" required>
							</div>
							<div class="form-group">
								<label for="">B. Sunda</label>
								<input type="number" class="form-control" name="PTS11" placeholder="B. Sunda" required>
							</div>
							<div class="form-group">
								<label for="">sakit</label>
								<input type="text" class="form-control" name="sakit" placeholder="BING" required>
							</div>
							<div class="form-group">
								<label for="">ijin</label>
								<input type="text" class="form-control" name="ijin" placeholder="ijin" required>
							</div>
							<div class="form-group">
								<label for="">alpa</label>
								<input type="text" class="form-control" name="alpa" placeholder="alpa" required>
							</div>
						</div>
					</div><!-- / Row -->
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return confirm('Are you sure ??')" class="btn btn-primary btn-flat"><i class="fa fa-check-square"></i> Save!</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="excel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-upload"></i> Import Data Raport</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<legend>Keterangan</legend>
						<ol>
							<li>Upload data dengan extensi file .xls/.xlsx</li>
							<li>Format penulisan sesuai dengan contoh yang telah diberikan oleh pihak pengelola</li>
							<li>Jika ada No Induk yang sama, maka data sebelumnya akan di update</li>
							<li>Jika salah satu kolom dikosongkan, maka data tersebut dinyatakan tidak valid (tidak ditambahkan ke database)</li>
						</ol>
					</div>
					<div class="col-sm-6">
						<form action="<?= site_url('C_home/import_raport') ?>" method="POST" enctype="multipart/form-data">
							<input type="file" name="fileExcel" required>
							<br />
							<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-success"><i class="fa fa-upload"></i> Upload File!</button>
						</form>
					</div>
				</div><!-- / Row -->
			</div>
		</div>
	</div>
</div>