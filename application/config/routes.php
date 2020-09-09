<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['administrator/dashboard'] = 'backend/dashboard';
$route['administrator/pengaturan/'] = 'backend/pengaturan/';
$route['administrator/pengaturan_akun/'] = 'backend/pengaturan_sandi/';
$route['administrator/individu/hapus'] = 'backend/hapus_individu';

// Individu
// Berdasarkan wilayah
$route['administrator/individu/seluruh_kawasan'] = 'backend/list_individu';
$route['administrator/individu/kawasan_bandung'] = 'backend/kawasan/1';
$route['administrator/individu/kawasan_jakarta'] = 'backend/kawasan/2';
$route['administrator/individu/kawasan_jakarta_ipsk'] = 'backend/sub_kawasan/13';
$route['administrator/individu/kawasan_jakarta_oseanografi'] = 'backend/sub_kawasan/14';
$route['administrator/individu/kawasan_jakarta_pddi_jakarta'] = 'backend/sub_kawasan/15';
$route['administrator/individu/kawasan_cibinong'] = 'backend/kawasan/3';
$route['administrator/individu/kawasan_cibinong_zoologi'] = 'backend/sub_kawasan/1';
$route['administrator/individu/kawasan_cibinong_botani'] = 'backend/sub_kawasan/2';
$route['administrator/individu/kawasan_cibinong_bioteknologi'] = 'backend/sub_kawasan/3';
$route['administrator/individu/kawasan_cibinong_limnologi'] = 'backend/sub_kawasan/4';
$route['administrator/individu/kawasan_cibinong_biomaterial'] = 'backend/sub_kawasan/5';
$route['administrator/individu/kawasan_bogor'] = 'backend/kawasan/4';
$route['administrator/individu/kawasan_serpong'] = 'backend/kawasan/5';

// Pencarian data
$route['administrator/individu/pencarian/seluruh_kawasan'] = 'backend/cari_kawasan_seluruh';
$route['administrator/individu/pencarian/kawasan_bandung'] = 'backend/cari_kawasan/1';
$route['administrator/individu/pencarian/kawasan_jakarta'] = 'backend/cari_kawasan/2';
$route['administrator/individu/pencarian/kawasan_jakarta_ipsk'] = 'backend/cari_sub_kawasan/13';
$route['administrator/individu/pencarian/kawasan_jakarta_oseanografi'] = 'backend/cari_sub_kawasan/14';
$route['administrator/individu/pencarian/kawasan_jakarta_pddi_jakarta'] = 'backend/cari_sub_kawasan/15';
$route['administrator/individu/pencarian/kawasan_cibinong'] = 'backend/cari_kawasan/3';
$route['administrator/individu/pencarian/kawasan_cibinong_zoologi'] = 'backend/cari_sub_kawasan/1';
$route['administrator/individu/pencarian/kawasan_cibinong_botani'] = 'backend/cari_sub_kawasan/2';
$route['administrator/individu/pencarian/kawasan_cibinong_bioteknologi'] = 'backend/cari_sub_kawasan/3';
$route['administrator/individu/pencarian/kawasan_cibinong_limnologi'] = 'backend/cari_sub_kawasan/4';
$route['administrator/individu/pencarian/kawasan_cibinong_biomaterial'] = 'backend/cari_sub_kawasan/5';
$route['administrator/individu/pencarian/kawasan_bogor'] = 'backend/cari_kawasan/4';
$route['administrator/individu/pencarian/kawasan_serpong'] = 'backend/cari_kawasan/5';


// Cetak data
$route['administrator/individu/cetak/seluruh_kawasan'] = 'report/individu';
$route['administrator/individu/cetak/kawasan_bandung'] = 'report/cetak_kawasan/1';
$route['administrator/individu/cetak/kawasan_jakarta'] = 'report/cetak_kawasan/2';
$route['administrator/individu/cetak/kawasan_jakarta_ipsk'] = 'report/cetak_sub_kawasan/13';
$route['administrator/individu/cetak/kawasan_jakarta_oseanografi'] = 'report/cetak_sub_kawasan/14';
$route['administrator/individu/cetak/kawasan_jakarta_pddi_jakarta'] = 'report/cetak_sub_kawasan/15';
$route['administrator/individu/cetak/kawasan_cibinong'] = 'report/cetak_kawasan/3';
$route['administrator/individu/cetak/kawasan_cibinong_zoologi'] = 'report/cetak_sub_kawasan/1';
$route['administrator/individu/cetak/kawasan_cibinong_botani'] = 'report/cetak_sub_kawasan/2';
$route['administrator/individu/cetak/kawasan_cibinong_bioteknologi'] = 'report/cetak_sub_kawasan/3';
$route['administrator/individu/cetak/kawasan_cibinong_limnologi'] = 'report/cetak_sub_kawasan/4';
$route['administrator/individu/cetak/kawasan_cibinong_biomaterial'] = 'report/cetak_sub_kawasan/5';
$route['administrator/individu/cetak/kawasan_bogor'] = 'report/cetak_kawasan/4';
$route['administrator/individu/cetak/kawasan_serpong'] = 'report/cetak_kawasan/5';


// Cetak data filter
$route['administrator/individu/pencarian/cetak/seluruh_kawasan'] = 'report/cetak_cari_kawasan_seluruh';
$route['administrator/individu/pencarian/cetak/kawasan_bandung'] = 'report/cetak_cari_kawasan/1';
$route['administrator/individu/pencarian/cetak/kawasan_jakarta'] = 'report/cetak_cari_kawasan/2';
$route['administrator/individu/pencarian/cetak/kawasan_jakarta_ipsk'] = 'report/cetak_sub_cari_kawasan/13';
$route['administrator/individu/pencarian/cetak/kawasan_jakarta_oseanografi'] = 'report/cetak_sub_cari_kawasan/14';
$route['administrator/individu/pencarian/cetak/kawasan_jakarta_pddi_jakarta'] = 'report/cetak_sub_cari_kawasan/15';
$route['administrator/individu/pencarian/cetak/kawasan_cibinong'] ='report/cetak_cari_kawasan/3';
$route['administrator/individu/pencarian/cetak/kawasan_cibinong_zoologi'] = 'report/cetak_sub_cari_kawasan/1';
$route['administrator/individu/pencarian/cetak/kawasan_cibinong_botani'] = 'report/cetak_sub_cari_kawasan/2';
$route['administrator/individu/pencarian/cetak/kawasan_cibinong_bioteknologi'] = 'report/cetak_sub_cari_kawasan/3';
$route['administrator/individu/pencarian/cetak/kawasan_cibinong_limnologi'] = 'report/cetak_sub_cari_kawasan/4';
$route['administrator/individu/pencarian/cetak/kawasan_cibinong_biomaterial'] ='report/cetak_sub_cari_kawasan/5';
$route['administrator/individu/pencarian/cetak/kawasan_bogor'] = 'report/cetak_cari_kawasan/4';
$route['administrator/individu/pencarian/cetak/kawasan_serpong'] = 'report/cetak_cari_kawasan/5';




// Rombongan
// Berdasarkan wilayah
$route['administrator/rombongan/hapus'] = 'backend/hapus_individu';
$route['administrator/rombongan/seluruh_kawasan'] 				= 'backend/list_rombongan';
$route['administrator/rombongan/kawasan_bandung'] 				= 'backend/kawasan_rombongan/1';
$route['administrator/rombongan/kawasan_jakarta'] 				= 'backend/kawasan_rombongan/2';
$route['administrator/rombongan/kawasan_jakarta_ipsk'] 			= 'backend/sub_kawasan_rombongan/13';
$route['administrator/rombongan/kawasan_jakarta_oseanografi'] 	= 'backend/sub_kawasan_rombongan/14';
$route['administrator/rombongan/kawasan_jakarta_pddi_jakarta']  = 'backend/sub_kawasan_rombongan/15';
$route['administrator/rombongan/kawasan_cibinong']				= 'backend/kawasan_rombongan/3';
$route['administrator/rombongan/kawasan_cibinong_zoologi'] 		= 'backend/sub_kawasan_rombongan/1';
$route['administrator/rombongan/kawasan_cibinong_botani'] 		= 'backend/sub_kawasan_rombongan/2';
$route['administrator/rombongan/kawasan_cibinong_bioteknologi'] = 'backend/sub_kawasan_rombongan/3';
$route['administrator/rombongan/kawasan_cibinong_limnologi'] 	= 'backend/sub_kawasan_rombongan/4';
$route['administrator/rombongan/kawasan_cibinong_biomaterial']  = 'backend/sub_kawasan_rombongan/5';
$route['administrator/rombongan/kawasan_bogor'] 				= 'backend/kawasan_rombongan/4';
$route['administrator/rombongan/kawasan_serpong'] 				= 'backend/kawasan_rombongan/5';


// Pencarian data rombongan
$route['administrator/rombongan/pencarian/seluruh_kawasan'] 			  = 'backend/cari_kawasan_rombongan_seluruh';
$route['administrator/rombongan/pencarian/kawasan_bandung'] 			  = 'backend/cari_kawasan_rombongan/1';
$route['administrator/rombongan/pencarian/kawasan_jakarta'] 			  = 'backend/cari_kawasan_rombongan/2';
$route['administrator/rombongan/pencarian/kawasan_jakarta_ipsk'] 		  = 'backend/cari_sub_kawasan_rombongan/13';
$route['administrator/rombongan/pencarian/kawasan_jakarta_oseanografi']   = 'backend/cari_sub_kawasan_rombongan/14';
$route['administrator/rombongan/pencarian/kawasan_pddi_jakarta']  		  = 'backend/cari_sub_kawasan_rombongan/15';
$route['administrator/rombongan/pencarian/kawasan_cibinong'] 			  = 'backend/cari_kawasan_rombongan/3';
$route['administrator/rombongan/pencarian/kawasan_cibinong_zoologi'] 	  = 'backend/cari_sub_kawasan_rombongan/1';
$route['administrator/rombongan/pencarian/kawasan_cibinong_botani'] 	  = 'backend/cari_sub_kawasan_rombongan/2';
$route['administrator/rombongan/pencarian/kawasan_cibinong_bioteknologi'] = 'backend/cari_sub_kawasan_rombongan/3';
$route['administrator/rombongan/pencarian/kawasan_cibinong_limnologi'] 	  = 'backend/cari_sub_kawasan_rombongan/4';
$route['administrator/rombongan/pencarian/kawasan_cibinong_biomaterial']  = 'backend/cari_sub_kawasan_rombongan/5';
$route['administrator/rombongan/pencarian/kawasan_bogor']   			  = 'backend/cari_kawasan_rombongan/4';
$route['administrator/rombongan/pencarian/kawasan_serpong'] 			  = 'backend/cari_kawasan_rombongan/5';


// Cetak data rombongan
$route['administrator/rombongan/cetak/seluruh_kawasan'] 				= 'report/rombongan';
$route['administrator/rombongan/cetak/kawasan_bandung'] 				= 'report/cetak_kawasan_rombongan/1';
$route['administrator/rombongan/cetak/kawasan_jakarta'] 				= 'report/cetak_kawasan_rombongan/2';
$route['administrator/rombongan/cetak/kawasan_jakarta_ipsk'] 			= 'report/cetak_sub_kawasan_rombongan/13';
$route['administrator/rombongan/cetak/kawasan_jakarta_oseanografi']		= 'report/cetak_sub_kawasan_rombongan/14';
$route['administrator/rombongan/cetak/kawasan_jakarta_pddi_jakarta']	= 'report/cetak_sub_kawasan_rombongan/15';
$route['administrator/rombongan/cetak/kawasan_cibinong'] 				= 'report/cetak_kawasan_rombongan/3';
$route['administrator/rombongan/cetak/kawasan_cibinong_zoologi']		= 'report/cetak_sub_kawasan_rombongan/1';
$route['administrator/rombongan/cetak/kawasan_cibinong_botani'] 		= 'report/cetak_sub_kawasan_rombongan/2';
$route['administrator/rombongan/cetak/kawasan_cibinong_bioteknologi'] 	= 'report/cetak_sub_kawasan_rombongan/3';
$route['administrator/rombongan/cetak/kawasan_cibinong_limnologi'] 		= 'report/cetak_sub_kawasan_rombongan/4';
$route['administrator/rombongan/cetak/kawasan_cibinong_biomaterial'] 	= 'report/cetak_sub_kawasan_rombongan/5';
$route['administrator/rombongan/cetak/kawasan_serpong'] 				= 'report/cetak_kawasan_rombongan/4';
$route['administrator/rombongan/cetak/kawasan_bogor'] 					= 'report/cetak_kawasan_rombongan/5';


// Cetak pencarian data rombongan
$route['administrator/rombongan/pencarian/cetak/seluruh_kawasan'] 				= 'report/cetak_cari_kawasan_rombongan_seluruh';
$route['administrator/rombongan/pencarian/cetak/kawasan_bandung'] 				= 'report/cetak_cari_kawasan_rombongan/1';
$route['administrator/rombongan/pencarian/cetak/kawasan_jakarta'] 				= 'report/cetak_cari_kawasan_rombongan/2';
$route['administrator/rombongan/pencarian/cetak/kawasan_jakarta_ipsk'] 			= 'report/cetak_sub_cari_kawasan_rombongan/13';
$route['administrator/rombongan/pencarian/cetak/kawasan_jakarta_oseanografi'] 	= 'report/cetak_sub_cari_kawasan_rombongan/14';
$route['administrator/rombongan/pencarian/cetak/kawasan_jakarta_pddi_jakarta'] 	= 'report/cetak_sub_cari_kawasan_rombongan/15';
$route['administrator/rombongan/pencarian/cetak/kawasan_cibinong'] 				= 'report/cetak_cari_kawasan_rombongan/3';
$route['administrator/rombongan/pencarian/cetak/kawasan_cibinong_zoologi']  	= 'report/cetak_sub_cari_kawasan_rombongan/1';
$route['administrator/rombongan/pencarian/cetak/kawasan_cibinong_botani'] 		= 'report/cetak_sub_cari_kawasan_rombongan/2';
$route['administrator/rombongan/pencarian/cetak/kawasan_cibinong_bioteknologi'] = 'report/cetak_sub_cari_kawasan_rombongan/3';
$route['administrator/rombongan/pencarian/cetak/kawasan_cibinong_limnologi'] 	= 'report/cetak_sub_cari_kawasan_rombongan/4';
$route['administrator/rombongan/pencarian/cetak/kawasan_cibinong_biomaterial']  = 'report/cetak_sub_cari_kawasan_rombongan/5';
$route['administrator/rombongan/pencarian/cetak/kawasan_bogor']					= 'report/cetak_cari_kawasan_rombongan/4';
$route['administrator/rombongan/pencarian/cetak/kawasan_serpong'] 				= 'report/cetak_cari_kawasan_rombongan/5';


$route['administrator/laporan'] = 'backend/laporan';
$route['administrator/keluar'] = 'backend/keluar';