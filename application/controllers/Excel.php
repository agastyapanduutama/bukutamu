<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_backend');
  }

  public function download()
  {
    $datana = $this->model_backend->report_filter();

    $spreadsheet = new Spreadsheet();
    if ($_POST['jenis']=='individu') {
        $sheet = $spreadsheet->getActiveSheet();
       $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Tanggal Kunjungan');
        $sheet->setCellValue('C1', 'Lokasi Perpustakaan');
        $sheet->setCellValue('D1', 'Sub Wilayah');
        $sheet->setCellValue('E1', 'No Pengunjung ');
        $sheet->setCellValue('F1', 'Instansi');
        $sheet->setCellValue('G1', 'Nama ');
        $sheet->setCellValue('H1', 'Email ');
        $sheet->setCellValue('I1', 'No Telepon ');
        $sheet->setCellValue('J1', 'Jenis Kelamin');
        $sheet->setCellValue('K1', 'Pekerjaan');
        $sheet->setCellValue('L1', 'Pendidikan');

    }elseif ($_POST['jenis']=='rombongan') {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Tanggal Kunjungan');
        $sheet->setCellValue('C1', 'Lokasi Perpustakaan');
        $sheet->setCellValue('D1', 'Sub Wilayah');
        $sheet->setCellValue('E1', 'No Pengunjung ');
        $sheet->setCellValue('F1', 'Instansi');
        $sheet->setCellValue('G1', 'Nama ');
        $sheet->setCellValue('H1', 'Email ');
        $sheet->setCellValue('I1', 'No Telp ');
        $sheet->setCellValue('J1', 'Jenis Kelamin');
        $sheet->setCellValue('J2', 'Pria');
        $sheet->setCellValue('K2', 'Wanita');
        $sheet->setCellValue('L1', 'Pekerjaan');
        $sheet->setCellValue('L2', 'PNS');
        $sheet->setCellValue('M2', 'Swasta');
        $sheet->setCellValue('N2', 'Peneliti');
        $sheet->setCellValue('O2', 'Guru');
        $sheet->setCellValue('P2', 'Dosen');
        $sheet->setCellValue('Q2', 'Pensiunan');
        $sheet->setCellValue('R2', 'TNI');
        $sheet->setCellValue('S2', 'Wiraswasta');
        $sheet->setCellValue('T2', 'Pelajar');
        $sheet->setCellValue('U2', 'Mahasiswa');
        $sheet->setCellValue('V2', 'Lainnya');
        $sheet->setCellValue('W1', 'Pendidikan');
        $sheet->setCellValue('W2', 'SD');
        $sheet->setCellValue('X2', 'SMP');
        $sheet->setCellValue('U2', 'SMA');
        $sheet->setCellValue('Z2', 'D1');
        $sheet->setCellValue('AA2', 'D2');
        $sheet->setCellValue('AB2', 'D3');
        $sheet->setCellValue('AC2', 'S1');
        $sheet->setCellValue('AD2', 'S2');
        $sheet->setCellValue('AE2', 'S3');

    }else{
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Tanggal Kunjungan');
        $sheet->setCellValue('C1', 'Lokasi Perpustakaan');
        $sheet->setCellValue('D1', 'Sub Wilayah');
        $sheet->setCellValue('E1', 'No Pengunjung ');
        $sheet->setCellValue('F1', 'Instansi');
        $sheet->setCellValue('G1', 'Nama ');
        // $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('I1', 'Pekerjaan');
        $sheet->setCellValue('J1', 'Pendidikan');
    }
    

    $i=3; $no=1; foreach($datana as $list) {
  
    if ($list->wilayah==='1') {
        $wilayah = "Kepustakaan Kawasan Bandung";
    }elseif ($list->wilayah==='2') {
        $wilayah = "Kepustakaan Kawasan Jakarta";
    }elseif ($list->wilayah==='3') {
        $wilayah = "Kepustakaan Kawasan Cibinong";
    }elseif ($list->wilayah==='4') {
        $wilayah = "Kepustakaan Kawasan Bogor";
    }elseif ($list->wilayah==='5') {
        $wilayah = "Kepustakaan Kawasan Serpong";
    }

    if ($list->sub_lokasi==='1') {
        $sub_wilayah = "Zoologi";
    }elseif ($list->sub_lokasi==='2') {
        $sub_wilayah = "Bootani";
    }elseif ($list->sub_lokasi==='3') {
        $sub_wilayah = "Bioteknologi";
    }elseif ($list->sub_lokasi==='4') {
        $sub_wilayah = "Limnologi";
    }elseif ($list->sub_lokasi==='5') {
        $sub_wilayah = "Biomaterial";
    }elseif ($list->sub_lokasi==='13') {
        $sub_wilayah = "IPSK";
    }elseif ($list->sub_lokasi==='14') {
        $sub_wilayah = "Oseanografi";
    }elseif ($list->sub_lokasi==='15') {
        $sub_wilayah = "PDDI Jakarta";
    }else{
        $sub_wilayah = "";
    }

    if ($_POST['jenis']=='rombongan') {
            $instan = $list->nama_instansi;
        }elseif ($_POST['jenis']=='individu') {
            $instan = $list->instansi;   
        }else{
            $instan = $list->instansi;
            // echo $list->nama_instansi;
        } 

    if (($_POST['jenis'])==='rombongan') {
        $name = $list->nama_ketua;
    }else{
        $name = $list->nama_pengunjung;    
    }

    if (($_POST['jenis'])==='individu') {
        if ($list->jenis_kelamin==='0') {
            $kelamin = "Perempuan";
        }elseif ($list->jenis_kelamin==='1') {
            $kelamin = "Laki - Laki";
        }
    
    }elseif (($_POST['jenis'])==='rombongan') {
        if ($list->pria) {
            $jk = $list->pria ." Laki- Laki";
        }
            $jk = "";
        if ($list->wanita) {
            $jk = $list->wanita ." Perempuan";
        }
    }

    if (($_POST['jenis'])=='all') {
        if ($list->jenis_kelamin==='0') {
            $kelamin = "Perempuan";
        }elseif ($list->jenis_kelamin==='1') {
            $kelamin = "Laki - Laki";
        }

        elseif ((($_POST['jenis'])==='all')) {
            if ($list->pria) {
                $jk = $list->pria ." Laki- Laki";
            }
            if ($list->wanita) {
                $jk = $list->wanita ." Perempuan";
            }
        }
    }


             if ($_POST['jenis']!='rombongan'){ 
                     $job = $list->pekerjaan ;
                     $education = $list->pendidikan_terakhir ;
             }



    if ($_POST['jenis']=='individu') {
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $no++)
    ->setCellValue('B'.$i, $list->tanggal_kunjungan)
    ->setCellValue('C'.$i, $wilayah )
    ->setCellValue('D'.$i, $sub_wilayah )
    ->setCellValue('E'.$i, $list->no_kunjungan)
    ->setCellValue('F'.$i, $instan)
    ->setCellValue('G'.$i, $name)
    ->setCellValue('H'.$i, $list->email_indi)
    ->setCellValue('I'.$i, $list->no_telp_indi)
    ->setCellValue('J'.$i, $kelamin)
    ->setCellValue('K'.$i, $job)
    ->setCellValue('L'.$i, $education);

    }elseif($_POST['jenis']=='rombongan'){
    $spreadsheet->setActiveSheetIndex(0)
   ->setCellValue('A'.$i, $no++)
    ->setCellValue('B'.$i, $list->tanggal_kunjungan)
    ->setCellValue('C'.$i, $wilayah )
    ->setCellValue('D'.$i, $sub_wilayah )
    ->setCellValue('E'.$i, $list->no_kunjungan)
    ->setCellValue('F'.$i, $instan)
    ->setCellValue('G'.$i, $name)
    ->setCellValue('H'.$i, $list->email)
    ->setCellValue('I'.$i, $list->no_telp)
    ->setCellValue('J'.$i, $list->pria)
    ->setCellValue('K'.$i, $list->wanita)
    ->setCellValue('L'.$i, $list->pns)  
    ->setCellValue('M'.$i, $list->swasta)  
    ->setCellValue('N'.$i, $list->peneliti)  
    ->setCellValue('O'.$i, $list->guru)  
    ->setCellValue('P'.$i, $list->dosen)  
    ->setCellValue('Q'.$i, $list->pensiunan)  
    ->setCellValue('R'.$i, $list->tni)  
    ->setCellValue('S'.$i, $list->wiraswasta)  
    ->setCellValue('T'.$i, $list->pelajar)  
    ->setCellValue('U'.$i, $list->mahasiswa)  
    ->setCellValue('V'.$i, $list->lainnya)  
    ->setCellValue('W'.$i, $list->sd)
    ->setCellValue('X'.$i, $list->smp)
    ->setCellValue('Y'.$i, $list->sma)
    ->setCellValue('Z'.$i, $list->d1)
    ->setCellValue('AA'.$i, $list->d2)
    ->setCellValue('AB'.$i, $list->d3)
    ->setCellValue('AC'.$i, $list->s1)
    ->setCellValue('AD'.$i, $list->s2)
    ->setCellValue('AE'.$i, $list->s3);

    
    }else{
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $no++)
    ->setCellValue('B'.$i, $list->tanggal_kunjungan)
    ->setCellValue('C'.$i, $wilayah )
    ->setCellValue('D'.$i, $sub_wilayah )
    ->setCellValue('E'.$i, $list->no_kunjungan)
    ->setCellValue('F'.$i, $instan)
    ->setCellValue('G'.$i, $name)
    // ->setCellValue('H'.$i, $kelamin)
    ->setCellValue('I'.$i, $job)
    ->setCellValue('J'.$i, $education);
    
    }
    $i++;

    }
        
    $writer = new Xlsx($spreadsheet);
    
    $filename = 'Laporan Pengunjung' . date("d:m:yy");
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }

 
}