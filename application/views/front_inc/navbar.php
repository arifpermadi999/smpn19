<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar" style="background-color:white"></span>
				<span class="icon-bar" style="background-color:white"></span>
				<span class="icon-bar" style="background-color:white"></span>
			</button>
			<!-- <a class="navbar-brand" href="#">Title</a> -->
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class=""><a href="<?= base_url('/') ?>">BERANDA</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFIL <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<!-- <li><a href="<?= base_url('sambutan') ?>">Sambutan</a></li> -->
						<li><a href="<?= base_url('Visi-Misi') ?>">VISI & MISI</a></li>
						<li><a href="<?= base_url('Struktur') ?>">STRUKTUR</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/gurutu-smpn19/" target="_blank">PENDIDIK & KEPENDIDIKAN</a></li>
						<!--<li><a href="<?= base_url('Pendidik') ?>">PENDIDIK</a></li>
						<li><a href="<?= base_url('TU') ?>">KEPENDIDIKAN</a></li>-->
						<li><a href="<?= base_url('sarana') ?>">SAPRAS</a></li>
						<li><a href="<?= base_url('Ekskul') ?>">EKSKUL</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/kegiatansekolah19/" target="_blank">KEGIATAN SEKOLAH</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/mpls-smpn19/" target="_blank">MPLS ONLINE</a></li>
					</ul>
				</li>
				<li><a href="<?= base_url('Berita') ?>">INFORMASI</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">GALERI <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url('Foto') ?>">GALERI FOTO</a></li>
						<li><a href="<?= base_url('Video') ?>">GALERI VIDEO</a></li>
						<li><a href="<?= base_url('year_book') ?>">BUKU TAHUNAN</a></li>
						<li><a href="https://www.youtube.com/channel/UCcTVg6Hww8wnxPtC3x7qVYw/videos" target="_blank">YOUTUBE</a></li>
						<li><a href="https://instagram.com/smpn19juara?igshid=YmMyMTA2M2Y=" target="_blank">INSTAGRAM</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">APLIKASI<b class="caret"></b></a>
					<ul class="dropdown-menu">
					    <li><a href="<?= base_url('raport-pas') ?>">RAPORT PAS</a></li>
					    <li><a href="<?= base_url('raport-pts') ?>">RAPORT PTS</a></li>
						<li><a href="<?= base_url('tryout') ?>">NILAI TRYOUT</a></li>
						<li><a href="<?= base_url('leggernilai') ?>">LEGGER NILAI</a></li>
						<li><a href="<?= base_url('Kelulusan') ?>">KELULUSAN</a></li>
						<li><a href="<?= base_url('Siswa') ?>">SKKB</a></li>
						<li><a href="<?= base_url('cek_ppdb') ?>">PPDB</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">E-LEARNING <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url('web-mapel') ?>">MEDIA AJAR DIGITAL</a></li>
						<li><a href="<?= base_url('ujian-online') ?>">UJIAN ONLINE</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/tryout19" target="_blank">TRY OUT</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/ceksuhutubuh/" target="_blank">SUHU TUBUH</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/daftar-hadir/" target="_blank">DAFTAR HADIR</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/bukudigital/" target="_blank">BUKU DIGITAL</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/zoomdewa19/" target="_blank">DOK ZOOM</a></li>
						<li><a href="https://forms.gle/mFB58rKiU3xhFwzQ7" target="_blank">BERITA ACARA UJIAN</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/daftar-nilai-rata-rata/" target="_blank">DAFTAR NILAI</a></li>
						<li><a href="https://sites.google.com/guru.smp.belajar.id/site-wa-group/" target="_blank">WA GROUP KELAS</a></li>
						<!--<li><a href="<?= base_url('lms') ?>">Kelas Maya</a></li>-->
					</ul>
				</li>
				<li><a href="https://sites.google.com/guru.smp.belajar.id/alumni-dewadewi19/" target="_blank">ALUMNI</a></li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">LAPORAN<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url('FrontCtrl/Lap_Mengajar') ?>">Laporan Mengajar</a></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_Walikelas') ?>">Laporan Walikelas</a></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_Wakasek') ?>">Laporan Wakasek</a></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_Keuangan') ?>">Laporan Keuangan</a></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_BK') ?>">Laporan BK</a></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_Ekskul') ?>">Laporan Ekskul</font></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_Piket') ?>">Laporan Piket</a></li>
						<li><a href="<?= base_url('FrontCtrl/Lap_Perpus') ?>">Laporan Perpus</a></li>
					</ul>
				</li>-->
				<!--<li><a href="<?= base_url('FrontCtrl/ppdb') ?>">PPDB</a></li>-->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>