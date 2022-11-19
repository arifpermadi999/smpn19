<style type="text/css">
	.kelulusan {
		width: 60%;
		min-height: 100px;
		margin-bottom: 20px;
		margin: 0px auto;
	}
	table.table thead tr th,
	table.table tbody td {
		font-size: 16px;
	}
	table.table tr td {
		font-size: 16px;
	}
	input.form-control {
		height:45px;
	}
	.boxPrint {
		width: 100%;
		min-height: 100px;
		position: relative;
	}
	.boxPrint .left {
		float: left;
		width: 40%;
		min-height: 100px;
	}
	.boxPrint .left img {
		width: 100%;
		/*height: 200px;*/
	}
	.boxPrint .right {
		float: left;
		width: 58%;
		margin-left: 2%;
		min-height: 100px;
	}
	.boxPrint .clear {
		clear: both;
	}
</style>
<?php if (isset($post)): ?>
	<?php  $valuePengetahuan = $dataLeggerNilai[0];
    $valueKeterampilan = $dataLeggerNilai[1]; ?>
	<div class="kelulusan">
		<a href="#" onclick="window.open('<?= base_url('printleggernilai') ?>','name','width=700,height=500')" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Cetak NILAI</a>
		<a href="" style="margin-right:10px;border-radius:0" class="btn btn-warning pull-right"><i class="fa fa-refresh"></i> Ulangi</a>
		<br /><br /><br />
	    <table class="table table-bordered">
    <tr>
        <td>Nama</td>
        <td><?= $valuePengetahuan['nama_siswa'] ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><?= $valuePengetahuan['kelas'] ?></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td><?= $valuePengetahuan['nis'] ?></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td><?= $valuePengetahuan['nisn'] ?></td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td><?= $valuePengetahuan['jenis_kelamin'] ?></td>
    </tr>
    <tr>
        <td>AGAMA</td>
        <td><?= $valuePengetahuan['agama'] ?></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td><?= $valuePengetahuan['alamat'] ?></td>
    </tr>
    <tr>
        <td>NAMA ORANG TUA</td>
        <td><?= $valuePengetahuan['nama_orangtua'] ?></td>
    </tr> 
</table>
<br>

        <p><center><h4>BERIKUT NILAI LEGGER ANDA</h4></center></p>
        <table class="table table-bordered">
            <tr>
                <th rowspan="3"><center>No</center></th>
                <th rowspan="3"><center>Mata Pelajaran</center></th>
                <th colspan="12"><center>Nilai/Semester</center></th>
            </tr>
            <tr>
                <th colspan="2"><center>1<center></th>
                <th colspan="2"><center>2<center></th>
                <th colspan="2"><center>3<center></th>
                <th colspan="2"><center>4<center></th>
                <th colspan="2"><center>5<center></th>
                <th colspan="2"><center>6<center></th>
            </tr>
            <tr>
                
                <td>P</td>
                <td>K</td>
                
                <td>P</td>
                <td>K</td>
                
                <td>P</td>
                <td>K</td>

                <td>P</td>
                <td>K</td>

                <td>P</td>
                <td>K</td>

                <td>P</td>
                <td>K</td>
            </tr>
            <!-- <tr> 
                <th colspan="6"><label align="left">Kelompok A (Umum)</label></td>
            </tr>-->
            <tr>
                <td><center>1</center></td>
                <td><label align="left">Pendidikan Agama dan Budi Pekerti</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a01']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a01']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b01']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b01']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c01']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c01']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d01']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d01']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e01']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e01']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f01']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f01']) ?></center></td>
            </tr>
            <tr>
                <td><center>2</center></td>
                <td><label align="left">Pendidikan Pancasila dan Kewarganegaraan</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a02']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a02']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b02']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b02']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c02']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c02']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d02']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d02']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e02']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e02']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f02']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f02']) ?></center></td>
            </tr>
            <tr>
                <td><center>3</center></td>
                <td><label align="left">Bahasa Indonesia</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a03']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a03']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b03']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b03']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c03']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c03']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d03']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d03']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e03']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e03']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f03']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f03']) ?></center></td>
            </tr>
            <tr>
                <td><center>4</center></td>
                <td><label align="left">Matematika</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a04']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a04']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b04']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b04']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c04']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c04']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d04']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d04']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e04']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e04']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f04']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f04']) ?></center></td>
            </tr>
            <tr>
                <td><center>5</center></td>
                <td><label align="left">Ilmu Pengetahuan Alam</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a05']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a05']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b05']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b05']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c05']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c05']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d05']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d05']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e05']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e05']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f05']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f05']) ?></center></td>
            </tr>
            <tr>
                <td><center>6</center></td>
                <td><label align="left">Ilmu Pengetahuan Sosial</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a06']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a06']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b06']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b06']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c06']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c06']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d06']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d06']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e06']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e06']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f06']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f06']) ?></center></td>
            </tr>
            <tr>
                <td><center>7</center></td>
                <td><label align="left">Bahasa Inggris</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a07']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a07']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b07']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b07']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c07']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c07']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d07']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d07']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e07']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e07']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f07']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f07']) ?></center></td>
            </tr>
            <!-- <tr> 
                <th colspan="6"><label align="left">Kelompok B (Umum)</label></td>
            </tr>-->
            <tr>
                <td><center>8</center></td>
                <td><label align="left">Seni Budaya</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a08']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a08']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b08']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b08']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c08']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c08']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d08']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d08']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e08']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e08']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f08']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f08']) ?></center></td>
            </tr>
            <tr>
                <td><center>9</center></td>
                <td><label align="left">Pendidikan Jasmani, Olahraga dan Kesehatan</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a09']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a09']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b09']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b09']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c09']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c09']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d09']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d09']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e09']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e09']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f09']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f09']) ?></center></td>
            </tr>
            <tr>
                <td><center>10</center></td>
                <td><label align="left">Prakarya/TIK</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a10']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a10']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b10']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b10']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c10']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c10']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d10']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d10']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e10']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e10']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f10']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f10']) ?></center></td>
            </tr>
            <tr>
                <td><center>11</center></td>
                <td><label align="left">Bahasa Sunda</label></td>
                <!-- <td><center>75</center></td> -->
                <td><center><?= number_format ($valuePengetahuan['a11']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['a11']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['b11']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['b11']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['c11']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['c11']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['d11']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['d11']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['e11']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['e11']) ?></center></td>
                <td><center><?= number_format ($valuePengetahuan['f11']) ?></center></td>
                <td><center><?= number_format ($valueKeterampilan['f11']) ?></center></td>
            </tr>

			<tr>
		        <td><center></center></td>
		        <td><p align="left">Jumlah</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($valuePengetahuan['jumlah_a']) ?></center></td>
		        <td><center><?= number_format ($valueKeterampilan['jumlah_a']) ?></center></td>
		        <td><center><?= number_format ($valuePengetahuan['jumlah_b']) ?></center></td>
		        <td><center><?= number_format ($valueKeterampilan['jumlah_b']) ?></center></td>
		        <td><center><?= number_format ($valuePengetahuan['jumlah_c']) ?></center></td>
		        <td><center><?= number_format ($valueKeterampilan['jumlah_c']) ?></center></td>
				<td><center><?= number_format ($valuePengetahuan['jumlah_d']) ?></center></td>
				<td><center><?= number_format ($valueKeterampilan['jumlah_d']) ?></center></td>
				<td><center><?= number_format ($valuePengetahuan['jumlah_e']) ?></center></td>
				<td><center><?= number_format ($valueKeterampilan['jumlah_e']) ?></center></td>
				<td><center><?= number_format ($valuePengetahuan['jumlah_f']) ?></center></td>
				<td><center><?= number_format ($valueKeterampilan['jumlah_f']) ?></center></td>
		   	</tr>
			   <tr>
		        <td><center></center></td>
		        <td><p align="left">Rata-rata</p></td>
		        <!-- <td><center>75</center></td> -->
		        <td><center><?= number_format ($valuePengetahuan['rata_a']) ?></center></td>
		        <td><center><?= number_format ($valueKeterampilan['rata_a']) ?></center></td>
		        <td><center><?= number_format ($valuePengetahuan['rata_b']) ?></center></td>
		        <td><center><?= number_format ($valueKeterampilan['rata_b']) ?></center></td>
		        <td><center><?= number_format ($valuePengetahuan['rata_c']) ?></center></td>
		        <td><center><?= number_format ($valueKeterampilan['rata_c']) ?></center></td>
				<td><center><?= number_format ($valuePengetahuan['rata_d']) ?></center></td>
				<td><center><?= number_format ($valueKeterampilan['rata_d']) ?></center></td>
				<td><center><?= number_format ($valuePengetahuan['rata_e']) ?></center></td>
				<td><center><?= number_format ($valueKeterampilan['rata_e']) ?></center></td>
				<td><center><?= number_format ($valuePengetahuan['rata_f']) ?></center></td>
				<td><center><?= number_format ($valueKeterampilan['rata_f']) ?></center></td>
		   	</tr>
        </table>
	</div>
<?php else: ?>
	<br />
	<div class="kelulusan">
		<?php if ($this->session->flashdata('noInduk')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Ooppsss</strong> Password yang Anda masukan tidak terdaftar
			</div>
		<?php endif ?>
		<h2>APLIKASI CEK LEGGER NILAI</h2>
		<p>Silakan Masukkan Password Anda, Pada Form Yang Disediakan.</p>
		<form method="post" action="<?= base_url('leggernilai') ?>">
		    <div class="row">
				<div class="col-sm-8 col-sm-offset-1">
					<div class="form-group">
						<input type="number" name="no_induk" class="form-control" placeholder="Password" required>
					</div>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-lg" type="submit" name="submit">LOGIN</button>
				</div>
			</div><!-- / Row -->
		</form>
	</div>
	<br>
	<br />
	<center><iframe width="300" height="200" src="https://www.youtube.com/embed/sif1dtOJZz4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<!-- <br /><b>Mau Dapatkan Pulsa Gratis,.<br/>Cek Video Diatas & Lihat Deskripsinya Ya..</b></center> -->
	<br /><br />
<?php endif ?>