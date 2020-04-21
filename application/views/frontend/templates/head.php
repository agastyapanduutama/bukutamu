<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">

    <title>Buku Tamu Pengunjung</title>
    <style>
      .bgna{
        /*background-color: #eb6b34 !important;*/
        background-image: url('<?= base_url('assets/gambar/background.jpg') ?>') !important;
        z-index: -10;
        position: relative;

      
      }
    </style>
  </head>

  <body onload="startTime()">
<div class="bgna" style="color: white" >
<nav class="navbar navbar-expand-lg container " >
   <img src="<?= base_url()?>assets/logo.png" width="50">
          <h5 style="margin-left: 5px;">Buku Tamu Pengunjung</h5>    
          PDDI LIPI
           <div onload="startTime()" style="margin-left: 600px" > 
              <span id="clocktime"></span> 
            
        </div>
</nav>

   <section class="content-search" style="background-color: ; color: white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <strong>
                                <h3>Selamat Datang<br>Di Ruang Baca Umum</h3>     
                                <?php echo $this->session->userdata('kepustakaan'); ?> <br>
                                <?php $sub = $this->session->userdata('sub_lokasi'); 
                                if ($sub==='1') {
                                  echo "Zoologi";
                                }elseif ($sub==='2') {
                                  echo "Botani";
                                }elseif ($sub==='3') {
                                  echo "Bioteknologi";
                                }elseif ($sub==='4') {
                                  echo "Limnologi";
                                }elseif ($sub==='5') {
                                  echo "Biomaterial";
                                }elseif ($sub==='13') {
                                  echo "IPSK";
                                }elseif ($sub==='14') {
                                  echo "Oseanografi";
                                }elseif ($sub==='15') {
                                  echo "PDDI Jakarta";
                                }else{
                                  echo "  ";
                                }
                                 ?>
<br><br>
                        </strong>
                        </center>
                    </div>
                </div>
            </div>
        </section>
</div>
<center>
     <a href="<?= base_url('frontend/keluar_wilayah')?>" class="btn btn-sm btn-warning">Ganti Lokasi</a>
</center>
<br>