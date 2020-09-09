
    <div class="container">
        <div class="">
            <a href="<?= base_url('frontend/individu')?>" class="btn btn-light">Individu / Perorangan</a>
            <a href="<?= base_url('frontend/rombongan')?>" class="btn btn-light active">Rombongan</a>
        </div>
    </div>        
    <br>

     <?php
    if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
      }
      
        $this->session_wilayah->cek_wilayah();
    ?>

    <form action="<?= base_url('frontend/simpan_rombongan')?>" method="POST">

   <div class="container">        

    <input type="hidden" value="RMBG<?= $x['no_kunjungan']?>" name="no_kunjungan">    

        <input type="hidden" value="<?php echo $kepustakaan; ?>" name="wilayah">   
        <input type="hidden" value="<?php echo $sub_lokasi; ?>" name="sub_lokasi"> 

        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Nama Ketua Rombongan</label>
            <div class="col-md-5">
                <input type="text" class="form-control" required name="nama_ketua" placeholder="Nama Ketua Rombongan">
            </div>
        </div>

         <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Nomor Ketua Rombongan</label>
            <div class="col-md-5">
                <input type="number" class="form-control" required name="nomor_ketua" placeholder="Nomor Ketua Rombongan">
            </div>
        </div>

        <div class="form-group row">
                <label class="col-md-3 control-label"><span style="color: red">* </span>No Handphone/Kontak</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" required name="no_telp" placeholder="No Handphone/Kontak">
                </div>
        </div>


        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Email</label>
            <div class="col-md-5">
                <input type="text" class="form-control" required name="email" placeholder="Email">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Nama Instansi Lembaga</label>
            <div class="col-md-5">
                <input type="text" class="form-control" required name="nama_instansi" placeholder="Nama Instansi Lembaga">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Alamat Instansi Lembaga</label>
            <div class="col-md-5">
                <textarea class="form-control" required name="alamat_instansi" placeholder="Alamat Instansi Lembaga"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Nomor Instansi Lembaga</label>
            <div class="col-md-5">
                <input type="number" class="form-control" required name="nomor_instansi" placeholder="Nomor Instansi Lembaga">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Alamat Email Instansi Lembaga</label>
            <div class="col-md-5">
                <input type="email" class="form-control" required name="email_instansi" placeholder="Alamat Email Instansi Lembaga">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Jumlah Personil Lembaga</label>
            <div class="col-md-5">
                <input type="number" class="form-control" required name="jumlah_personil_instansi" placeholder="Jumlah Personil Lembaga">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 control-label"><span style="color: red">* </span>Jenis Layanan yang digunakan</label>
            <div class="col-md-5">
                <select class="form-control" name="jenis_layanan" required>
                    <option value="">-- Silakan Pilih -- </option>
                    <option value="Layanan Data Ilmiah - Pendampingan RIN">Layanan Data Ilmiah - Pendampingan RIN</option>
                    <option value="Layanan Data Ilmiah - Penelusuran Data ilmiah di RIN">Layanan Data Ilmiah - Penelusuran Data ilmiah di RIN</option>
                    <option value="Layanan Penelusuran Referensi">Layanan Penelusuran Referensi</option>
                    <option value="Layanan Jurnal Online">Layanan Jurnal Online</option>
                    <option value="Layanan CO-Working Space">Layanan CO-Working Space</option>
                    <option value="Layanan Mini Theatre">Layanan Mini Theatre</option>
                </select>
            </div>
        </div>


       <br>
        <div class="form-group row">
            <label class="col-md-3 control-label">Jenis Kelamin</label>
            <div class="col-md-3">Laki - Laki
                <input type="number" class="form-control col-md-5" name="pria" placeholder="">
            </div>
            <div class="col-md-4">Perempuan
                <input type="number" class="form-control col-md-5" name="wanita" placeholder="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">Pekerjaan</div>
            <div class="col-md-2">PNS
              <input type="number" class="form-control col-md-5" name="pns" placeholder="">
            </div>
            <div class="col-md-2">PEGAWAI SWASTA
              <input type="number" class="form-control col-md-5" name="swasta" placeholder="">
            </div>
            <div class="col-md-2">PENELITI
              <input type="number" class="form-control col-md-5" name="peneliti" placeholder="">
            </div>
        </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">GURU
              <input type="number" class="form-control col-md-5" name="guru" placeholder="">
            </div>
            <div class="col-md-2">DOSEN
              <input type="number" class="form-control col-md-5" name="dosen" placeholder="">
            </div>
            <div class="col-md-2">PENSIUNAN
              <input type="number" class="form-control col-md-5" name="pensiunan" placeholder="">
            </div>
        </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">TNI
              <input type="number" class="form-control col-md-5" name="tni" placeholder="">
            </div>
            <div class="col-md-2">WIRASWASTA
              <input type="number" class="form-control col-md-5" name="wiraswasta" placeholder="">
            </div>
            <div class="col-md-2">PELAJAR
              <input type="number" class="form-control col-md-5" name="pelajar" placeholder="">
            </div>
        </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">MAHASISWA
              <input type="number" class="form-control col-md-5" name="mahasiswa" placeholder="">
            </div>
            <div class="col-md-2">LAINNYA
              <input type="number" class="form-control col-md-5" name="lainnya" placeholder="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">PENDIDIKAN TERAKHIR</div>
            <div class="col-md-2">SD
              <input type="number" class="form-control col-md-5" name="sd" placeholder="">
            </div>
            <div class="col-md-2">SMP(SEDERAJAT)
              <input type="number" class="form-control col-md-5" name="smp" placeholder="">
            </div>
            <div class="col-md-2">SMA(SEDERAJAT)
              <input type="number" class="form-control col-md-5" name="sma" placeholder="">
            </div>
        </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">DIPLOMA(D1)
              <input type="number" class="form-control col-md-5" name="d1" placeholder="">
            </div>
            <div class="col-md-2">DIPLOMA(D2)
              <input type="number" class="form-control col-md-5" name="d2" placeholder="">
            </div>
            <div class="col-md-2">DIPLOMA(D3)
              <input type="number" class="form-control col-md-5" name="d3" placeholder="">
            </div>
        </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">SARJANA(S1)
              <input type="number" class="form-control col-md-5" name="s1" placeholder="">
            </div>
            <div class="col-md-2">MAGISTER(S2)
              <input type="number" class="form-control col-md-5" name="s2" placeholder="">
            </div>
            <div class="col-md-2">DOKTOR(S3)
              <input type="number" class="form-control col-md-5" name="s3" placeholder="">
            </div>
        </div>
                <p style="color: red">* Harap isi semua data untuk bisa melanjutkan</p>
                
        <div class="container">
            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-primary">Ulangi</button>
            </div>
        </div>    


        <br><br><br>
</div>
</form>
<script>
//alert(Date());
function startTime()
{   var today=new Date();
var weekday=new Array(7);
var weekday=["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
var monthname=new Array(12);
var monthname=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","Septeber","Oktober","November","Desember"];
var dayname=weekday[today.getDay()];
var day=today.getDate();
var month=monthname[today.getMonth()];
var year=today.getFullYear();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
h=checkTime(h);
m=checkTime(m);
s=checkTime(s);
document.getElementById('clocktime').innerHTML=dayname+", "+day+" "+month+" "+year+", "+h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}
// function checkTime to add a zero in front of numbers < 10
function checkTime(i)
{   if(i<10){i="0"+i;}
return i;
}
</script>
