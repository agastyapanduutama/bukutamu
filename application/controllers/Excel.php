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
        $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('I1', 'Pekerjaan');
        $sheet->setCellValue('J1', 'Pendidikan');

    }elseif ($_POST['jenis']=='rombongan') {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Tanggal Kunjungan');
        $sheet->setCellValue('C1', 'Lokasi Perpustakaan');
        $sheet->setCellValue('D1', 'Sub Wilayah');
        $sheet->setCellValue('E1', 'No Pengunjung ');
        $sheet->setCellValue('F1', 'Instansi');
        $sheet->setCellValue('G1', 'Nama ');
        $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('H2', 'Pria');
        $sheet->setCellValue('I2', 'Wanita');
        $sheet->setCellValue('J1', 'Pekerjaan');
        $sheet->setCellValue('J2', 'PNS');
        $sheet->setCellValue('K2', 'Swasta');
        $sheet->setCellValue('L2', 'Peneliti');
        $sheet->setCellValue('M2', 'Guru');
        $sheet->setCellValue('N2', 'Dosen');
        $sheet->setCellValue('O2', 'Pensiunan');
        $sheet->setCellValue('P2', 'TNI');
        $sheet->setCellValue('Q2', 'Wiraswasta');
        $sheet->setCellValue('R2', 'Pelajar');
        $sheet->setCellValue('S2', 'Mahasiswa');
        $sheet->setCellValue('T2', 'Lainnya');
        $sheet->setCellValue('U1', 'Pendidikan');
        $sheet->setCellValue('U2', 'SD');
        $sheet->setCellValue('V2', 'SMP');
        $sheet->setCellValue('W2', 'SMA');
        $sheet->setCellValue('X2', 'D1');
        $sheet->setCellValue('Y2', 'D2');
        $sheet->setCellValue('Z2', 'D3');
        $sheet->setCellValue('AA2', 'S1');
        $sheet->setCellValue('AB2', 'S2');
        $sheet->setCellValue('AC2', 'S3');

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
    ->setCellValue('H'.$i, $kelamin)
    ->setCellValue('I'.$i, $job)
    ->setCellValue('J'.$i, $education);

    }elseif($_POST['jenis']=='rombongan'){
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $no++)
    ->setCellValue('B'.$i, $list->tanggal_kunjungan)
    ->setCellValue('C'.$i, $wilayah )
    ->setCellValue('D'.$i, $sub_wilayah )
    ->setCellValue('E'.$i, $list->no_kunjungan)
    ->setCellValue('F'.$i, $instan)
    ->setCellValue('G'.$i, $name)
    ->setCellValue('H'.$i, $list->pria)
    ->setCellValue('I'.$i, $list->wanita)

    ->setCellValue('J'.$i, $list->pns)  
    ->setCellValue('K'.$i, $list->swasta)  
    ->setCellValue('L'.$i, $list->peneliti)  
    ->setCellValue('M'.$i, $list->guru)  
    ->setCellValue('N'.$i, $list->dosen)  
    ->setCellValue('O'.$i, $list->pensiunan)  
    ->setCellValue('P'.$i, $list->tni)  
    ->setCellValue('Q'.$i, $list->wiraswasta)  
    ->setCellValue('R'.$i, $list->pelajar)  
    ->setCellValue('S'.$i, $list->mahasiswa)  
    ->setCellValue('T'.$i, $list->lainnya)  
    ->setCellValue('U'.$i, $list->sd)
    ->setCellValue('V'.$i, $list->smp)
    ->setCellValue('W'.$i, $list->sma)
    ->setCellValue('X'.$i, $list->d1)
    ->setCellValue('Y'.$i, $list->d2)
    ->setCellValue('Z'.$i, $list->d3)
    ->setCellValue('AA'.$i, $list->s1)
    ->setCellValue('AB'.$i, $list->s2)
    ->setCellValue('AC'.$i, $list->s3);

    
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