<div class="mainHome">
	<div class="row">
		<div class="col-md-4">
			<legend class="titleHome">SAMBUTAN</legend>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-md-4">
							<img src="<?= base_url('assets/images/Pak_Abidin.jpeg') ?>" class="img-thumbnail">
						</div>
						<div class="col-md-8">
							<p style="text-align:justify">
								<b>Assalamualaikum Wr.Wb.</b><br /><br />
								Selamat datang di website resmi SMP Negeri 19 Kota Bekasi. Memasuki era teknologi 4.0 peranan teknologi sudah sangat memasuki segala bidang, tidak terkecuali bidang pendidikan.
							</p>
						</div>
					</div><!-- / Row -->
					<p style="text-align:justify"><br/>
						Selama masa pandemi covid-19 peranan teknologi sangat amat dibutuhkan dalam proses pembelajaran. Sistem pembelajaran beralih dari pembelajaran tata muka menjadi pembelajaran online/ jarak jauh. Maka untuk mengikuti perkembangan teknologi tersebut, SMP Negeri 19 Kota Bekasi merasa perlu untuk ikut ambil bagian di dalamnya melalui website ini. <br /><br />
						Saya berharap, selain sebagai sarana informasi dan komunikasi, website ini juga dapat dimanfaatkan secara maksimal sebagai sarana pembelajaran. Para guru dan siswa bisa memanfatkan program e-learning yang kami sediakan di website ini.  Selain e-learning, website ini juga tersedia aplikasi untuk mencetak surat kelulusan, surat keterangan kelakuan baik serta statu PPDB dan berbagai laporan kegiatan.<br /><br />
						Akhir kata, semoga website ini dapat bermanfaat untuk kita semua, utamanya dalam mendukung kemajuan bidang pendidikan, khususnya di SMP Negeri 19 Kota Bekasi.<br /><br />
						Selamat belajar dan selamat berkatifitas!<br /><br />
						Wassalamu'alaikum Wr. Wb
						<br /> <br />
						<b>ABIDIN, S.Pd<br />
						NIP : 197004231999031003 <br />
						Kepala SMPN 19 Kota Bekasi </b>
						<!-- <a href="#modalSambutan" data-toggle="modal">Selengkapnya <i class="fa fa-arrow-right"></i></a> -->
					</p>
				</div>
			</div><!-- / Row -->
			<!-- <legend class="titleHome">Kegiatan Kesiswaan</legend>
			<blockquote>
				<?php foreach ($dataEvents as $rowsEvent => $valueEvent): ?>
					<?php if ($rowsEvent < 2): ?>
						<small><?= $valueEvent->event_name ?></small><br />
					<?php endif ?>
				<?php endforeach ?>
			</blockquote>
			<center><a href="<?= site_url('FrontCtrl/event') ?>">Lihat Semua <i class="fa fa-arrow-right"></i></a></center> -->
		</div>
		<div class="col-md-4">
			<legend class="titleHome">INFORMASI</legend>
			<?php foreach ($dataBlogs as $rowsBlogs => $valueBlogs): ?>
				<?php if ($rowsBlogs < 2): ?>
					<div class="boxNews">
						<a href="<?= base_url('berita/'.$valueBlogs->slug) ?>"><legend><?= $valueBlogs->title ?></legend></a>
						<img src="<?= base_url('assets/images/blogs/'.$valueBlogs->image) ?>" class="news">
						<blockquote>
							<small style="font-size:11px;">
								<?= substr(str_replace('<p>','', str_replace('</p>', '', str_replace('<br>', '', $valueBlogs->content))),0,100) ?>
							</small>
						</blockquote>
						<p style="font-size:11px"><i class="fa fa-user"></i> <?= $valueBlogs->author ?> | <i class="fa fa-calendar"></i> <?= $valueBlogs->created_at ?>| <i class="fa fa-eye"></i> Dibaca : <?= $valueBlogs->jumlah_dibaca + 1 ?></p>
					</div><!--/ Box News -->
				<?php endif ?>
			<?php endforeach ?>
			<center><a href="<?= base_url('berita') ?>">Lihat Semua <i class="fa fa-arrow-right"></i></a></center>
		</div>
		<div class="col-md-4">
			<legend class="titleHome">VIDEO KEGIATAN</legend>
			<?php foreach ($dataVideos as $rowsVideos => $valueVideos): ?>
				<?php if ($rowsVideos < 2): ?>
					<legend style="font-size:16px"><?= $valueVideos->video_title ?></legend>
					<iframe src="<?= $valueVideos->video_link ?>" width="100%" height="200" border="0" allowfullscreen></iframe>
				<?php endif ?>
			<?php endforeach ?>
			<center><a href="<?= base_url('video') ?>">Lihat Semua <i class="fa fa-arrow-right"></i></a></center>
			<!-- <legend class="titleHome">Video Iklan</legend>
			<?php foreach ($advVideo as $rowsAdv => $valueAdv): ?>
				<?php if ($rowsAdv < 1): ?>
					<legend style="font-size:16px"><?= $valueAdv->adv_title ?></legend>
					<iframe src="<?= $valueAdv->adv_video ?>" width="100%" height="200" border="0" allowfullscreen></iframe>
				<?php endif ?>
			<?php endforeach ?> -->
		</div>
	</div><!-- / Row -->
	<br /><br />
	<!-- Gallery -->
	<center><legend class="titleHome">GALERI TERBARU</legend></center>
	<div class="row">
		<?php foreach ($dataGallery as $rowsGallery => $valueGallery): ?>
			<?php if ($rowsGallery < 4): ?>
				<div class="col-md-3">
					<a class="fancybox" href="<?= base_url('assets/images/gallery/'.$valueGallery->photos) ?>" data-fancybox-group="gallery" title="<?= $valueGallery->photos ?>"><img src="<?= site_url('assets/images/gallery/'.$valueGallery->photos) ?>" class="gallery"  /></a>
				    <label style="text-align: center;width: 100%;"><?= $valueGallery->photos_desc ?></label>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div><!-- / Row -->
	<!-- Link -->
	<br /><br />
	<center><legend class="titleHome">SOSMED & LINK WEBSITE TERKAIT</legend></center>
	<div class="row">
	    <div class="col-md-3">
			<a href="https://disdik.bekasikota.go.id/" target="_blank">
				<img src="<?= base_url('assets/images/links/disdik.png') ?>" style="width:100%;height:70px;">
			</a>
		</div>
		<div class="col-md-3">
			<a href="https://sikerja.bekasikota.go.id/auth/login" target="_blank">
				<img src="<?= base_url('assets/images/links/bekasi.png') ?>" style="width:100%;height:70px;">
			</a>
		</div>
		<div class="col-md-3">
			<a href="https://instagram.com/smpn19juara?igshid=YmMyMTA2M2Y=" target="_blank">
				<img src="<?= base_url('assets/images/links/instagram.png') ?>" style="width:100%;height:70px;">
			</a>
		</div>
		<div class="col-md-3">
			<a href="https://www.youtube.com/channel/UCcTVg6Hww8wnxPtC3x7qVYw/videos" target="_blank">
				<img src="<?= base_url('assets/images/links/youtube.png') ?>" style="width:100%;height:60px;">
			</a>
		</div>
	</div><!-- / Row -->
</div><!-- / MainHome -->

<!-- Modal Sambutan -->
<div class="modal fade" id="modalSambutan">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Sambutan Kepala Sekolah</h4>
			</div>
			<div class="modal-body">
				<p style="text-align:justify">
					<b>Assalamualaikum Wr.Wb.</b><br /><br />
					Selamat datang di website SMA Negeri 1 Babelan Kabupaten Bekasi<br />
					Alhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya.<br /><br />
					Website terbaru SMA Negeri 1 Babelan, merupakan pengembangan dari website yang ada. Website ini kami kembangkan, sebagai upaya sekolah untuk membuka jalur-jalur komunikasi, selain memakai alat komunikasi konvensional, sekaligus sebagai tuntutan stake holders pendidikan.<br /><br />
					Website kami adalah salah satu bagaian dari pengembangan program ICT (Information and Communication Technology) yang menyeluruh. Pada era Global kemampuan ICT menjadi salah satu tolak ukur sekolah berkualitas. Menghadapi persaingan global, SMA Negeri 1 Babelan sebagai  Organisasi Pembelajar siap melakukan perubahan-perubahan menuju sekolah yang lebih berkualitas.<br /> <br />
					Website ini akan memberi gambaran sekilas tentang program-program dalam upaya , meningkatkan kualitas pendidikan, kegiatan-kegiatan sekolah, informasi-informasi terkini di SMA Negeri 1 Babelan, dan reportase kegiatan selama kurun waktu tertentu. Informasi ini diharapkan dapat memberikan kemudahan bagi pihak-pihak luar dalam mengakses informasi di SMA Negeri 1 Babelan. Kami menyadari bahwa website ini masih jauh dari sempurna, untuk itu kami sangat menerima saran dan kritik membangun guna menuju kesempurnaan website ini.<br /><br />
					Kami tunggu saran dan kritik anda di email kami humas@smanegeri1babelan.sch.id. Terima kasih, semoga yang sekelumit ini dapat membawa manfaat bagi eratnya hubungan sekolah dengan stakeholders-nya. Amin.
					<br /> <br />
					<b>Drs. H. Abu Darda. M.Pd<br /><br />
					NIP : 19610903 199303 1003<br />
					Kepala SMAN 1 Babelan - Kabupaten Bekasi </b>
				</p>
			</div>
		</div>
	</div>
</div>