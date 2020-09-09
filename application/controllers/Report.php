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

    public function individu()
    {
        $list_individu = $this->model_backend->list_individu();

        $data = array(  'title'     => 'Laporan seluruh data individu',
                        'datana'  => $list_individu );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-seluruh-kawasan.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan', $data);
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

    public function cetak_cari_kawasan($id_wilayah)
    {
        if ($id_wilayah=='1') {
            $a = "Bandung";
        }elseif ($id_wilayah=='2') {
            $a = "Jakarta";
        }elseif ($id_wilayah=='3') {
            $a = "Cibinong";
        }elseif ($id_wilayah=='4') {
            $a = "Serpong";
        }else{
            $a = "Bogor";
        }
        $cari = $this->model_backend->filter_wilayah($id_wilayah);
        $data = array('title'=> 'Laporan Data Individu Kawasan '.$a,
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);
    }

    public function cetak_kawasan($id_wilayah){

        $cetak = $this->model_backend->wilayah($id_wilayah);
        if ($id_wilayah=='1') {
            $a = "Bandung";
        }elseif ($id_wilayah=='2') {
            $a = "Jakarta";
        }elseif ($id_wilayah=='3') {
            $a = "Cibinong";
        }elseif ($id_wilayah=='4') {
            $a = "Serpong";
        }else{
            $a = "Bogor";
        }
        $data = array(  'title'     => 'Laporan data individu kawasan '.$a,
                        'datana'    => $cetak );
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);
    }

    public function cetak_sub_kawasan($id_wilayah){
    
        $cetak = $this->model_backend->sub_wilayah($id_wilayah);

        if ($id_wilayah=='1') {
            $b = "Cibinong - Zoologi";
        }elseif ($id_wilayah=='2') {
            $b = "Cibinong - Botani";
        }elseif ($id_wilayah=='3') {
            $b = "Cibinong - Bioteknologi";
        }elseif ($id_wilayah=='4') {
            $b = "Cibinong - Limnologi";
        }elseif ($id_wilayah=='5') {
            $b = "Cibinong - Biomaterial";
        }elseif ($id_wilayah=='13') {
            $b = "Jakarta - IPSK";
        }elseif ($id_wilayah=='14') {
            $b = "Jakarta - Oseaonografi";
        }else{
            $b = "Jakarta - PDDI Jakarta";
        }

        $data = array(  'title'     => 'Laporan data individu kawasan '.$b,
                        'datana'    => $cetak );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_wilayah', $data);

    }

    
    public function cetak_sub_cari_kawasan($id_wilayah){
    
        $cetak = $this->model_backend->filter_sub_wilayah($id_wilayah);

        if ($id_wilayah=='1') {
            $b = "Cibinong - Zoologi";
        }elseif ($id_wilayah=='2') {
            $b = "Cibinong - Botani";
        }elseif ($id_wilayah=='3') {
            $b = "Cibinong - Bioteknologi";
        }elseif ($id_wilayah=='4') {
            $b = "Cibinong - Limnologi";
        }elseif ($id_wilayah=='5') {
            $b = "Cibinong - Biomaterial";
        }elseif ($id_wilayah=='13') {
            $b = "Jakarta - IPSK";
        }elseif ($id_wilayah=='14') {
            $b = "Jakarta - Oseaonografi";
        }else{
            $b = "Jakarta - PDDI Jakarta";
        }

        $data = array(  'title'     => 'Laporan data individu kawasan '.$b,
                        'datana'    => $cetak );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_individu_hasil', $data);

    }

    
  // Rombongan
    
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

     public function cetak_cari_kawasan_rombongan_seluruh()
    {
        $cari = $this->model_backend->cari_data_rombongan_seluruh();
        $data = array('title'=> 'Laporan Data Rombongan Seluruh Kawasan',
                      'datana' => $cari );
        
        $this->aunt_login->cek_login();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-seluruh-kawasan.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);
    }

    public function cetak_cari_kawasan_rombongan($id_wilayah)
    {
        if ($id_wilayah=='1') {
            $a = "Bandung";
        }elseif ($id_wilayah=='2') {
            $a = "Jakarta";
        }elseif ($id_wilayah=='3') {
            $a = "Cibinong";
        }elseif ($id_wilayah=='4') {
            $a = "Serpong";
        }else{
            $a = "Bogor";
        }
        $cari = $this->model_backend->filter_wilayah_rombongan($id_wilayah);
        $data = array('title'=> 'Laporan Data Rombongan Kawasan '.$a,
                      'datana' => $cari );
        
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-individu-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);
    }

    public function cetak_kawasan_rombongan($id_wilayah){

        $cetak = $this->model_backend->wilayah_rombongan($id_wilayah);
        if ($id_wilayah=='1') {
            $a = "Bandung";
        }elseif ($id_wilayah=='2') {
            $a = "Jakarta";
        }elseif ($id_wilayah=='3') {
            $a = "Cibinong";
        }elseif ($id_wilayah=='4') {
            $a = "Serpong";
        }else{
            $a = "Bogor";
        }
        $data = array(  'title'     => 'Laporan data Rombongan kawasan '.$a,
                        'datana'    => $cetak );
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-Rombongan-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);
    }

    public function cetak_sub_kawasan_rombongan($id_wilayah){
    
        $cetak = $this->model_backend->sub_wilayah_rombongan($id_wilayah);

        if ($id_wilayah=='1') {
            $b = "Cibinong - Zoologi";
        }elseif ($id_wilayah=='2') {
            $b = "Cibinong - Botani";
        }elseif ($id_wilayah=='3') {
            $b = "Cibinong - Bioteknologi";
        }elseif ($id_wilayah=='4') {
            $b = "Cibinong - Limnologi";
        }elseif ($id_wilayah=='5') {
            $b = "Cibinong - Biomaterial";
        }elseif ($id_wilayah=='13') {
            $b = "Jakarta - IPSK";
        }elseif ($id_wilayah=='14') {
            $b = "Jakarta - Oseaonografi";
        }else{
            $b = "Jakarta - PDDI Jakarta";
        }

        $data = array(  'title'     => 'Laporan data Rombongan kawasan '.$b,
                        'datana'    => $cetak );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-Rombongan-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_wilayah', $data);

    }

    
    public function cetak_sub_cari_kawasan_rombongan($id_wilayah){
    
        $cetak = $this->model_backend->filter_sub_wilayah_rombongan($id_wilayah);

        if ($id_wilayah=='1') {
            $b = "Cibinong - Zoologi";
        }elseif ($id_wilayah=='2') {
            $b = "Cibinong - Botani";
        }elseif ($id_wilayah=='3') {
            $b = "Cibinong - Bioteknologi";
        }elseif ($id_wilayah=='4') {
            $b = "Cibinong - Limnologi";
        }elseif ($id_wilayah=='5') {
            $b = "Cibinong - Biomaterial";
        }elseif ($id_wilayah=='13') {
            $b = "Jakarta - IPSK";
        }elseif ($id_wilayah=='14') {
            $b = "Jakarta - Oseaonografi";
        }else{
            $b = "Jakarta - PDDI Jakarta";
        }

        $data = array(  'title'     => 'Laporan data Rombongan kawasan '.$b,
                        'datana'    => $cetak );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-Rombongan-bandung.pdf";
        $this->pdf->load_view('backend/laporan/laporan_rombongan_hasil', $data);

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

        $dompdf->load_html($html);    
        $dompdf->render();
        $pdf = $dompdf->output();
        $file_location = $_SERVER['DOCUMENT_ROOT']."app_folder_name/pdfReports/".$pdf_name.".pdf";
        file_put_contents($file_location,$pdf); 


    }


}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */