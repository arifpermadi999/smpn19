<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url('assets/images/logo_bekasi.png') ?>"/>
		
		<?php if($dataBlogImage){ ?>
            <meta property="og:type" content="article" />
        	<meta property="og:title" content="<?= $singleBlog->title ?>" />
        	<meta property="og:image" content="<?= base_url('assets/images/blogs/'.$dataBlogImage) ?>" />
        	<meta property="og:description" content="SMPN 19 KOTA BEKASI" />
        	<meta property="og:url" content="<?= base_url(uri_string()); ?>" />
        	<meta property="og:image:type" content="image/jpeg" />
        	<meta property="og:image:width" content="650" />
        	<meta property="og:image:height" content="366" />
        <?php  } ?>
        
		<!-- CSS -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/icon/font-awesome-4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/mycss/frontStyle.css') ?>">
		<!-- Script -->
		<script src="<?php echo base_url('assets') ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Fancy Box -->
		<!-- Add jQuery library -->
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="<?= base_url('assets') ?>/plugins/fancy-box/lib/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="<?= base_url('assets') ?>/plugins/fancy-box/source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/fancy-box/source/jquery.fancybox.css?v=2.1.5" media="screen" />

		<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/fancy-box/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="<?= base_url('assets') ?>/plugins/fancy-box/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

		<!-- Add Thumbnail helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/fancy-box/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
		<script type="text/javascript" src="<?= base_url('assets') ?>/plugins/fancy-box/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		<!-- Add Media helper (this is optional) -->
		<script type="text/javascript" src="<?= base_url('assets') ?>/plugins/fancy-box/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

				/*
				 *  Different effects
				 */

				// Change title type, overlay closing speed
				$(".fancybox-effects-a").fancybox({
					helpers: {
						title : {
							type : 'outside'
						},
						overlay : {
							speedOut : 0
						}
					}
				});

				// Disable opening and closing animations, change title type
				$(".fancybox-effects-b").fancybox({
					openEffect  : 'none',
					closeEffect	: 'none',

					helpers : {
						title : {
							type : 'over'
						}
					}
				});

				// Set custom style, close if clicked, change title type and overlay color
				$(".fancybox-effects-c").fancybox({
					wrapCSS    : 'fancybox-custom',
					closeClick : true,

					openEffect : 'none',

					helpers : {
						title : {
							type : 'inside'
						},
						overlay : {
							css : {
								'background' : 'rgba(238,238,238,0.85)'
							}
						}
					}
				});

				// Remove padding, set opening and closing animations, close if clicked and disable overlay
				$(".fancybox-effects-d").fancybox({
					padding: 0,

					openEffect : 'elastic',
					openSpeed  : 150,

					closeEffect : 'elastic',
					closeSpeed  : 150,

					closeClick : true,

					helpers : {
						overlay : null
					}
				});

				/*
				 *  Button helper. Disable animations, hide close button, change title type and content
				 */

				$('.fancybox-buttons').fancybox({
					openEffect  : 'none',
					closeEffect : 'none',

					prevEffect : 'none',
					nextEffect : 'none',

					closeBtn  : false,

					helpers : {
						title : {
							type : 'inside'
						},
						buttons	: {}
					},

					afterLoad : function() {
						this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				});


				/*
				 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
				 */

				$('.fancybox-thumbs').fancybox({
					prevEffect : 'none',
					nextEffect : 'none',

					closeBtn  : false,
					arrows    : false,
					nextClick : true,

					helpers : {
						thumbs : {
							width  : 50,
							height : 50
						}
					}
				});

				/*
				 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
				*/
				$('.fancybox-media')
					.attr('rel', 'media-gallery')
					.fancybox({
						openEffect : 'none',
						closeEffect : 'none',
						prevEffect : 'none',
						nextEffect : 'none',

						arrows : false,
						helpers : {
							media : {},
							buttons : {}
						}
					});

				/*
				 *  Open manually
				 */

				$("#fancybox-manual-a").click(function() {
					$.fancybox.open('1_b.jpg');
				});

				$("#fancybox-manual-b").click(function() {
					$.fancybox.open({
						href : 'iframe.html',
						type : 'iframe',
						padding : 5
					});
				});

				$("#fancybox-manual-c").click(function() {
					$.fancybox.open([
						{
							href : '1_b.jpg',
							title : 'My title'
						}, {
							href : '2_b.jpg',
							title : '2nd title'
						}, {
							href : '3_b.jpg'
						}
					], {
						helpers : {
							thumbs : {
								width: 75,
								height: 50
							}
						}
					});
				});


			});
		</script>
		<style type="text/css">
			.fancybox-custom .fancybox-skin {
				box-shadow: 0 0 50px #222;
			}
			.gallery-img img {
				width: 100%;
				height: 150px;
				margin-top: 10px;
			}
			@media only screen and (max-width: 900px) {
				.gallery-img img {
					width: 100%;
					height: 250px;
					margin-top: 10px;
				}
			}
			legend.gallery {
				text-align: center;

			}
			
			.titleBig.black{
				text-align: center;
				font-size: 40px;
			}
			.globalBox{
				margin-top: 60px;
				padding-left: 100px;
				padding-right: 100px;
			}
			@media(min-width:1200px ){
			.nav-menu{
				width: 80%;
			}
			.galery-foto{
				padding: 0px 100px;
			}
			.wrap_kesiswaan{
				padding: 20px 100px;
			}
			}
			@media(max-width: 600px){
			.globalBox{
				margin-top: 60px;
				padding-left: 30px;
				padding-right: 30px;
			}
			.kelulusan{
				width:100% !important;
				padding: 10px;
			}
			.raport{
				width:100% !important;
				padding: 10px;
			}
			.ppdb{
				width:100% !important;
				padding: 10px;
			}
		  }
		</style>
	</head>
	<body>

		<div class="globalContainer">
			<div class="row">
				<div class="col-md-11">
					<div style="">
						<div class="mainContainer">
							<div class="mainHeader">
								<?php $this->load->view($header); ?>
							</div><!-- / MainHeader -->
							<div class="mainNavbar">
								<?php $this->load->view($navbar); ?>
							</div><!-- / MainNavbar -->
							<?php if (isset($dataSlider)): ?>
								<div class="mainSlider">
									<?php $this->load->view($slider); ?>
								</div><!-- / MainSlider -->
							<?php endif ?>
							<div class="mainContent">
								<?php $this->load->view($content); ?>
							</div><!-- / MainContent -->
							<div class="mainFooter">
								<?php $this->load->view($footer); ?>
							</div><!-- / MainFooter -->
						</div><!-- Main Container -->
					</div>
				</div><!-- / mainSize -->
			</div><!-- / Row -->
		</div><!-- / Global Container -->
		<!-- Script -->
		<script src="<?php echo base_url('assets') ?>/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		  $(function () {
		    $("#firstTable").dataTable();
		    $("#compose-textarea").wysihtml5();
		  });
		</script>
	</body>
</html>