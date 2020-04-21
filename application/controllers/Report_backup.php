<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('pdfgenerator');
        $this->load->library('aunt_login');
		$this->load->library('pdf');
        $this->load->model('model_backend');
        $this->aunt_login->cek_login();
	}

    public function cetak_cari_kawasan_seluruh()
    {
        $cari = $this->model_backend->cari_data_seluruh();
        $data = array('title'=> 'Laporan Data Individu Seluruh Kawasan',
                      'datana' => $cari );
        
        $this->aunt_login->cek_login();

        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-seluruh-kawasan.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_bandung()
    {
        $cari = $this->model_backend->cari_data_bandung();
        $data = array('title'=> 'Laporan Data Individu Kawasan Bandung',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_jakarta()
    {
        $cari = $this->model_backend->cari_data_jakarta();
        $data = array('title'=> 'Laporan Data Individu Kawasan Jakarta',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-jakarta.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_bogor()
    {
        $cari = $this->model_backend->cari_data_bogor();
        $data = array('title'=> 'Laporan Data Individu Kawasan Bogor',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bogor.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_cibinong()
    {
        $cari = $this->model_backend->cari_data_cibinong();
        $data = array('title'=> 'Laporan Data Individu Kawasan Cibinong',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_cibinong_zoologi()
    {
        $cari = $this->model_backend->cari_data_zoologi();
        $data = array('title'=> 'Laporan Data Individu Kawasan Cibinong - Zoologi',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-zoologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_cibinong_bootani()
    {
        $cari = $this->model_backend->cari_data_bootani();
        $data = array('title'=> 'Hasil Pencarian Seluruh Data Cibinong - Botani',
                      'datana' => $cari );

        $this->load->view('backend/templates/wrapper', $data, FALSE);
        
        $this->load->library('pdf'); 
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-botani.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);

    }

    public function cetak_cari_kawasan_cibinong_bioteknologi()
    {
        $cari = $this->model_backend->cari_data_bioteknologi();
        $data = array('title'=> 'Laporan Data Individu Kawasan Cibinong - Bioteknologi',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-bioteknologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);


    }

    public function cetak_cari_kawasan_cibinong_limnologi()
    {
        $cari = $this->model_backend->cari_data_limnologi();
        $data = array('title'=> 'Laporan Data Individu Kawasan Cibinong - Limnologi',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-limnologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);

    }


    public function cetak_cari_kawasan_cibinong_biomaterial()
    {
        $cari = $this->model_backend->cari_data_limnologi();
        $data = array('title'=> 'Laporan Data Individu Kawasan Cibinong - Biomaterial',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-biomaterial.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);

    }

    public function cetak_cari_kawasan_serpong()
    {
        $cari = $this->model_backend->cari_data_serpong();
        $data = array('title'=> 'Laporan Data Individu Kawasan Cibinong - Serpong',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-serpong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);

    }

    
    public function cetak_cari_kawasan_rombongan_seluruh()
    {
        $cari = $this->model_backend->cari_data_rombongan_seluruh();
        $data = array('title'=> 'Laporan Data Rombongan Seluruh Kawasan',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-seluruh-kawasan.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_bandung()
    {
        $cari = $this->model_backend->cari_data_rombongan_bandung();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Bandung',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_jakarta()
    {
        $cari = $this->model_backend->cari_data_rombongan_jakarta();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Jakarta',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-jakarta.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_bogor()
    {
        $cari = $this->model_backend->cari_data_rombongan_bogor();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Bogor',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-bogor.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_cibinong()
    {
        $cari = $this->model_backend->cari_data_rombongan_cibinong();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Cibinong',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_cibinong_zoologi()
    {
        $cari = $this->model_backend->cari_data_rombongan_zoologi();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Cibinong - Zoologi',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-zoologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_cibinong_bootani()
    {
        $cari = $this->model_backend->cari_data_rombongan_bootani();
        $data = array('title'=> 'Hasil Pencarian Seluruh Data Cibinong - Botani',
                      'datana' => $cari );

        $this->load->view('backend/templates/wrapper', $data, FALSE);
        
        $this->load->library('pdf'); 
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-botani.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);

    }

    public function cetak_cari_kawasan_rombongan_cibinong_bioteknologi()
    {
        $cari = $this->model_backend->cari_data_rombongan_bioteknologi();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Cibinong - Bioteknologi',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-bioteknologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);


    }

    public function cetak_cari_kawasan_rombongan_cibinong_limnologi()
    {
        $cari = $this->model_backend->cari_data_rombongan_limnologi();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Cibinong - Limnologi',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-limnologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);

    }


    public function cetak_cari_kawasan_rombongan_cibinong_biomaterial()
    {
        $cari = $this->model_backend->cari_data_rombongan_limnologi();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Cibinong - Biomaterial',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-biomaterial.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);

    }

    public function cetak_cari_kawasan_rombongan_serpong()
    {
        $cari = $this->model_backend->cari_data_rombongan_serpong();
        $data = array('title'=> 'Laporan Data Rombongan Kawasan Cibinong - Serpong',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-serpong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);

    }


	public function individu(){
    
        $list_individu = $this->model_backend->list_individu();

        $this->aunt_login->cek_login();

        $data = array(  'title'     => 'Laporan seluruh data individu',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-seluruh-kawasan.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu', $data);

    }


    public function cetak_kawasan_bandung(){
    
        $list_individu = $this->model_backend->lok_bandung();

        $data = array(  'title'     => 'Laporan data individu kawasan bandung',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }


    public function cetak_kawasan_jakarta(){
    
        $list_individu = $this->model_backend->lok_jakarta();

        $data = array(  'title'     => 'Laporan data individu kawasan jakarta',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-jakarta.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_bogor(){
    
        $list_individu = $this->model_backend->lok_bogor();

        $data = array(  'title'     => 'Laporan data individu kawasan bogor',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bogor.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_cibinong(){
    
        $list_individu = $this->model_backend->lok_cibinong();

        $data = array(  'title'     => 'Laporan data individu kawasan cibinong',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_cibinong_zoologi(){
    
        $list_individu = $this->model_backend->lok_cibinong_zoologi();

        $data = array(  'title'     => 'Laporan data individu kawasan cibinong zoologi',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-zoologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_cibinong_bootani(){
    
        $list_individu = $this->model_backend->lok_cibinong_bootani();

        $data = array(  'title'     => 'Laporan data individu kawasan cibinong bootani',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-botani.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_cibinong_bioteknologi(){
    
        $list_individu = $this->model_backend->lok_cibinong_bioteknologi();

        $data = array(  'title'     => 'Laporan data individu kawasan cibinong bioteknologi',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-bioteknologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_cibinong_limnologi(){
    
        $list_individu = $this->model_backend->lok_cibinong_limnologi();

        $data = array(  'title'     => 'Laporan data individu kawasan cibinong limnologi',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-limnologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_cibinong_biomaterial(){
    
        $list_individu = $this->model_backend->lok_cibinong_biomaterial();

        $data = array(  'title'     => 'Laporan data individu kawasan cibinong biomaterial',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-cibinong-biomaterial.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    public function cetak_kawasan_serpong(){
    
        $list_individu = $this->model_backend->lok_serpong();

        $data = array(  'title'     => 'Laporan data individu kawasan serpong',
                        'datana'  => $list_individu );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-serpong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }



    
    public function rombongan()
    {
        $list_rombongan = $this->model_backend->list_rombongan();

        $data = array(  'title'     => 'Laporan seluruh data rombongan',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-seluruh-kawasan.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan', $data);
    }

    
    public function cetak_kawasan_rombongan_bandung(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_bandung();

        $data = array(  'title'     => 'Laporan data rombongan kawasan bandung',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }


    public function cetak_kawasan_rombongan_jakarta(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_jakarta();

        $data = array(  'title'     => 'Laporan data rombongan kawasan jakarta',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-jakarta.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_bogor(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_bogor();

        $data = array(  'title'     => 'Laporan data rombongan kawasan bogor',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-bogor.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_cibinong(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_cibinong();

        $data = array(  'title'     => 'Laporan data rombongan kawasan cibinong',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_cibinong_zoologi(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_cibinong_zoologi();

        $data = array(  'title'     => 'Laporan data rombongan kawasan cibinong zoologi',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-zoologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_cibinong_bootani(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_cibinong_bootani();

        $data = array(  'title'     => 'Laporan data rombongan kawasan cibinong bootani',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-botani.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_cibinong_bioteknologi(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_cibinong_bioteknologi();

        $data = array(  'title'     => 'Laporan data rombongan kawasan cibinong bioteknologi',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-bioteknologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_cibinong_limnologi(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_cibinong_limnologi();

        $data = array(  'title'     => 'Laporan data rombongan kawasan cibinong limnologi',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-limnologi.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_cibinong_biomaterial(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_cibinong_biomaterial();

        $data = array(  'title'     => 'Laporan data rombongan kawasan cibinong biomaterial',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-cibinong-biomaterial.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    public function cetak_kawasan_rombongan_serpong(){
    
        $list_rombongan = $this->model_backend->lok_rombongan_serpong();

        $data = array(  'title'     => 'Laporan data rombongan kawasan serpong',
                        'datana'  => $list_rombongan );

        $this->load->library('pdf');


        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-rombongan-serpong.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }


    public function cetak_laporan_detail_data()
    {
        $cari = $this->model_backend->report_filter();
        $data = array('title'=> 'Laporan Detail Data',
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-detail data.pdf";
        $this->pdf->load_view('backend/laporan/laporan_detail_data', $data);


    }


}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */