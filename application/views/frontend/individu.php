
            <div class="container">
                <div class="">
                    <a href="<?= base_url('frontend/individu')?>" class="btn btn-light active">Individu / Perorangan</a>
                    <a href="<?= base_url('frontend/rombongan')?>" class="btn btn-light">Rombongan</a>
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


            


        <form action="<?= base_url('frontend/simpan_individu')?>" method="POST">
           
        <input type="hidden" value="INDV<?= $x['no_kunjungan']?>" name="no_kunjungan">

             <input type="hidden" value="<?php echo $kepustakaan; ?>" name="wilayah">
             <input type="hidden" value="<?php echo $sub_lokasi; ?>" name="sub_lokasi">

            <div class="container">                
               <div class="form-group row">
                        <label class="col-md-3 control-label"><span style="color: red">* </span>Status Keanggotaan</label>
                        <div class="col-sm-7">
                                    <label class="col-sm-4"><input type="radio" required name="status_keanggotaan" value="1"> Anggota</label>
                                    <label class="col-sm-4"><input type="radio" required name="status_keanggotaan" value="0"> Non/Member Anggota</label>
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label"><span style="color: red">* </span>Nama Pengunjung</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" required name="nama_pengunjung" placeholder="Nama Pengunjung">
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
                    <label class="col-md-3 control-label"><span style="color: red">* </span>Alamat</label>
                    <div class="col-md-5">
                        <textarea class="form-control" placeholder="Alamat Tinggal" required name="alamat"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                        <label class="col-md-3 control-label"><span style="color: red">* </span>Pekerjaan</label>
                        <div class="col-sm-7">
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Pegawai Negeri"> Pegawai Negeri</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Peneliti"> Peneliti</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="TNI/POLRI"> TNI/POLRI</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Pegawai Swasta"> Pegawai Swasta</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Dosen"> Dosen</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Pensiunan"> Pensiunan</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Wiraswasta"> Wiraswasta</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Guru"> Guru</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Pelajar"> Pelajar</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Mahasiswa"> Mahasiswa</label>
                                    <label class="col-sm-4"><input type="radio" required name="pekerjaan" value="Lainnya"> Lainnya</label>
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-3 control-label"><span style="color: red">* </span>Pendidikan Terkahir</label>
                        <div class="col-sm-7">
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="SD"> SD</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="SMP"> SMP</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="SMA"> SMA</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="D1"> D1</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="D2"> D2</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="D3"> D3</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="S1"> S1</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="S2"> S2</label>
                                    <label class="col-sm-4"><input type="radio" required name="pendidikan_terakhir" value="S3"> S3</label>
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label"><span style="color: red">* </span>Jenis Layanan yang digunakan</label>
                    <div class="col-md-5">
                        <select class="form-control" name="jenis_layanan" required>
                            <option value=""> -- Silakan Pilih -- </option>
                            <option value="Layanan Data Ilmiah - Pendampingan RIN">Layanan Data Ilmiah - Pendampingan RIN</option>
                            <option value="Layanan Data Ilmiah - Penelusuran Data ilmiah di RIN">Layanan Data Ilmiah - Penelusuran Data ilmiah di RIN</option>
                            <option value="Layanan Penelusuran Referensi">Layanan Penelusuran Referensi</option>
                            <option value="Layanan Jurnal Online">Layanan Jurnal Online</option>
                            <option value="Layanan CO-Working Space">Layanan CO-Working Space</option>
                            <option value="Layanan Mini Theatre">Layanan Mini Theatre</option>
                        </select>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-md-3 control-label"><span style="color: red">* </span>Instansi</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" required name="instansi" placeholder="Nama Instansi">
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-md-3 control-label"><span style="color: red">* </span>Alamat Instansi</label>
                    <div class="col-md-5">
                        <textarea class="form-control" placeholder="Alamat Instansi" required name="alamat_instansi"></textarea>
                    </div>
                </div>

                <div class="form-group row"> 
                        <label class="col-md-3 control-label"><span style="color: red">* </span>Jenis Kelamin</label>
                        <div class="col-sm-7">
                                    <label class="col-sm-4"><input type="radio" required name="jenis_kelamin" value="1"> Laki - Laki</label>
                                    <label class="col-sm-4"><input type="radio" required name="jenis_kelamin" value="0"> Perempuan</label>
                        </div>
                </div>
                <p style="color: red">* Harap isi semua data untuk bisa melanjutkan</p>
                <div class="container">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-primary">Ulangi</button>
                    </div>
                </div>    
            </div>
        </form>

        <br><br><br>b