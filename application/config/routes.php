<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//front//
$route['default_controller'] = 'FrontCtrl';
$route['/'] = 'FrontCtrl';
$route['Visi-Misi'] = 'FrontCtrl/visi_misi';
$route['Struktur'] = 'FrontCtrl/struktur';
$route['Pendidik'] = 'FrontCtrl/daftar_guru';
$route['TU'] = 'FrontCtrl/daftar_tu';
$route['sarana'] = 'FrontCtrl/sarana';
$route['sambutan'] = 'FrontCtrl/sambutan';
$route['Ekskul'] = 'FrontCtrl/ekskul';
$route['Berita'] = 'FrontCtrl/berita';
$route['berita/(:any)'] = 'FrontCtrl/berita/$1';
$route['Foto'] = 'FrontCtrl/foto';
$route['foto/(:any)'] = 'FrontCtrl/foto/$1';
$route['Video'] = 'FrontCtrl/video';
$route['year_book'] = 'FrontCtrl/year_book';
$route['Media-Ajar'] = 'FrontCtrl/web';
$route['Media-guru'] = 'FrontCtrl/media_ajar';
$route['web-mapel'] = 'FrontCtrl/web';
$route['lms'] = 'FrontCtrl/maya';
$route['lap_bdr'] = 'FrontCtrl/lap_bdr';

//Aplikasi//

$route['ujian-online'] = 'FrontCtrl/ujian_online';
$route['Ujian'] = 'FrontCtrl/ujian';
$route['Ujian/(:any)'] = 'FrontCtrl/ujian/$1';
$route['Kelulusan'] = 'FrontCtrl/kelulusan';
$route['print_kelulusan'] = 'FrontCtrl/printKelulusan';
$route['print_SKHUN'] = 'FrontCtrl/printSKHUN';
$route['printSKL'] = 'FrontCtrl/printSKL';
$route['Siswa'] = 'FrontCtrl/siswa';
$route['print_siswa'] = 'FrontCtrl/printSiswa';
$route['cek_ppdb'] = 'FrontCtrl/cek_ppdb';
$route['print_ppdb'] = 'FrontCtrl/printPpdb';
$route['raport-pas'] = 'FrontCtrl/cek_raportpas';
$route['raport-kelas7'] = 'FrontCtrl/cek_raport';
$route['printraport-kelas7'] = 'FrontCtrl/printRaport';
$route['raport-kelas8'] = 'FrontCtrl/cek_raport8';
$route['printraport-kelas8'] = 'FrontCtrl/printRaport8';
$route['raport-kelas9'] = 'FrontCtrl/cek_raport9';
$route['printraport-kelas9'] = 'FrontCtrl/printRaport9';
$route['raport-pts'] = 'FrontCtrl/raport_pts';
$route['tryout'] = 'FrontCtrl/cek_tryout';
$route['printtryout'] = 'FrontCtrl/printTryout';


$route['leggernilai'] = 'FrontCtrl/cek_legger_nilai';
$route['printleggernilai'] = 'FrontCtrl/printLeggerNilai';
