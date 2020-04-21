 <form action="<?= base_url('backend/report_filter')?>" method="POST">
	<div class="row">
	 	<div class="col-md-6">
	 		<div class="form-group">
			 	<label class="form-label">Tanggal</label>
			 	<div class="col-md-7">
				    <input type="" value="<?=isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : ''?>" id="datepicker1" class=" form-control" data-date-format="yyyy-mm-dd" name="tgl_awal" autocomplete="off">
				    S/D
				    <input type="" value="<?=isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : ''?>" id="datepicker" class=" form-control" data-date-format="yyyy-mm-dd" name="tgl_akhir" onchange="this.form.submit()" autocomplete="off">
			    </div>
			</div>	
	  	</div>
 	<div class="col-md-6">
		
		<div class="form-group">
	  		<label class="form-label">Berdasarkan Wilayah</label>
	  		<div class="col-md-7">
	  			<select name="wilayah" class="form-control">
  					<option value="all">Pilih Semua</option>
	  				<?php foreach ($lokasi as $row): ?>
	  					<option value="<?= $row->id_lokasi?>" <?php if ($row->id_lokasi==$_POST['wilayah']){echo "selected";}?>><?= $row->kepustakaan?></option>
	  				<?php endforeach ?>
	  			</select>
	  		</div>
	 	</div>

	 	<div class="form-group">
	 		<label class="form-label">Jenis</label>
	 		<div class="col-md-7">
	 			<select name="jenis" class="form-control" onchange="showDiv(this)">
	 				<option value="all">Pilih Semua</option>
	 				<option value="individu" <?php if ($_POST['jenis']==='individu') {
	 					echo "selected";
	 				} ?>>Individu</option>
	 				<option value="rombongan" <?php if ($_POST['jenis']==='rombongan') {
	 					echo "selected";
	 				} ?>>Rombongan</option>
	 			</select>
	 		</div>
	 	</div>


        <div id="individu" class="hidden_hehe">
        	<br>
        	<p style="color: red">Khusus individu</p>
            <div class="form-group">
                <label class="form-label">Berdasarkan Profesi</label>
                <div class="col-md-7">
                    <select class="form-control" name="profesi">
                        <option value="all">Pilih Semua</option>
                        <option value="Pegawai Negeri">Pegawai Negeri</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Peneliti">Peneliti</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Guru">Guru</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Jenis Kelamin</label> 
                <div class="col-md-7">
                    <select class="form-control" name="jk">
                        <option value="all">Pilih Semua</option>
                        <option value="1">Laki-laki</option>
                        <option value="0">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>

	 </div>
  </div>
<br><br>
<div class="row">
	<div class="col-md-2">
		   <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Filter</button>
	</div>
</form>

	<div class="col-md-2">
		<form>
			<!-- <button class="btn btn-sm btn-primary"><i class="fa fa-print"></i> cetak Frekuensi</button> -->
		</form>	
	</div>
		<div class="col-md-2">
			<form action="<?= base_url('report/cetak_laporan_detail_data')?>" method="POST" target="_blank">
				<input type="hidden" name="jenis" value="<?= $_POST['jenis']; ?>">
				<input type="hidden" name="wilayah" value="<?= $_POST['wilayah']; ?>">
				<input type="hidden" name="tgl_awal" value="<?= $_POST['tgl_awal']; ?>">
				<input type="hidden" name="tgl_akhir" value="<?= $_POST['tgl_akhir']; ?>">
				<input type="hidden" name="profesi" value="<?= $_POST['profesi']; ?>">
				<input type="hidden" name="jk" value="<?= $_POST['jk']; ?>">
				<button class="btn btn-sm btn-primary"><i class="fa fa-file-pdf-o"></i> cetak Detail Data</button>
			</form>			
		</div>
		
		<div class="float-right">
			<form action="<?= base_url('excel/download')?>" method="POST" target="_blank">
				<input type="hidden" name="jenis" value="<?= $_POST['jenis']; ?>">
				<input type="hidden" name="wilayah" value="<?= $_POST['wilayah']; ?>">
				<input type="hidden" name="tgl_awal" value="<?= $_POST['tgl_awal']; ?>">
				<input type="hidden" name="tgl_akhir" value="<?= $_POST['tgl_akhir']; ?>">
				<input type="hidden" name="profesi" value="<?= $_POST['profesi']; ?>">
				<input type="hidden" name="jk" value="<?= $_POST['jk']; ?>">
				<button class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export ke Excel</a>
			</form>		
		</div>
</div>

<hr>
<center>
		Berdasarkan :
		<?= $_POST['jenis']; ?><br>
		wilayah :
		<?php if ($_POST['wilayah']==='1') {
			echo "Kepustakaan Kawasan Bandung";
		}elseif ($_POST['wilayah']==='2') {
			echo "Kepustakaan Kawasan Jakarta";
		}elseif ($_POST['wilayah']==='3') {
			echo "Kepustakaan Kawasan Cibinong";
		}elseif ($_POST['wilayah']==='4') {
			echo "Kepustakaan Kawasan Bogor";
		}elseif ($_POST['wilayah']==='5') {
			echo "Kepustakaan Kawasan Serpong";
		} ?>
		<br>
		Dari tanggal
		<?= $_POST['tgl_awal']; ?> 
		s/d
		<?= $_POST['tgl_akhir']; ?><br>
		Pekerjaan :
	 	<?php echo $_POST['profesi']; ?><br>
	 	Jenis Kelamin :
	 	<?php  
	 	if ($_POST['jk']==='0') {
			echo "Perempuan";
		}elseif ($_POST['jk']==='1') {
			echo "Laki - Laki";
		}else{
			echo "Semua";
		}
	 	?> 	

</center>

<table class="table table-bordered" id="example">
</table>


<p>
	<?php
	if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
      }
	?>
</p>
<hr>
	
	  <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
               	<thead>
					<tr>
						<th>No</th>
						<th style="width:50px">Tanggal Kunjungan</th>
						<th  style="width:250px">Lokasi Perpustakaan</th>
						<th style="width:250px">No Pengunjung</th>
						<th style="width:250px">Asal Instansi</th>
						<th style="width:250px">Nama</th>
						<th  style="width:250px">Jenis Kelamin</th>
						<th> Pekerjaan</th>
						<th  style="width:250px">Penddikan</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1; foreach ($filter as $list ) { ?>
				<tr>
				<td><?= $no++ ?></td>
				<td><?= $list->tanggal_kunjungan?></td>
				<td>
					<?php if ($list->wilayah==='1') {
						echo "Kepustakaan Kawasan Bandung";
					}elseif ($list->wilayah==='2') {
						echo "Kepustakaan Kawasan Jakarta";
					}elseif ($list->wilayah==='3') {
						echo "Kepustakaan Kawasan Cibinong";
					}elseif ($list->wilayah==='4') {
						echo "Kepustakaan Kawasan Bogor";
					}elseif ($list->wilayah==='5') {
						echo "Kepustakaan Kawasan Serpong";
					} ?>
					
					<?php if ($list->sub_lokasi==='1') {
						echo "- Zoologi";
					}elseif ($list->sub_lokasi==='2') {
						echo "- Bootani";
					}elseif ($list->sub_lokasi==='3') {
						echo "- Bioteknologi";
					}elseif ($list->sub_lokasi==='4') {
						echo "- Limnologi";
					}elseif ($list->sub_lokasi==='5') {
						echo "- Biomaterial";
					}elseif ($list->sub_lokasi==='13') {
						echo "- IPSK";
					}elseif ($list->sub_lokasi==='14') {
						echo "- Oseanografi";
					}elseif ($list->sub_lokasi==='15') {
						echo "- PDDI Jakarta";
					}  ?></td>
				</td>
				<td>
				<?= $list->no_kunjungan?>
					<?php if ($list->no_kunjungan===''): ?>
						(Belum diset)
					<?php endif ?>
				</td>
				<td>
				<?php

				if ($_POST['jenis']=='rombongan') {
					echo $list->nama_instansi;
				}elseif ($_POST['jenis']=='individu') {
					echo $list->instansi;	
				}else{
					echo $list->instansi;
					// echo $list->nama_instansi;
				} 
				
				?>
					
				</td>
				<td>
					<?php if (($_POST['jenis'])==='rombongan') {
						echo $list->nama_ketua;
					}else{
						echo $list->nama_pengunjung;	
					} ?>
				</td>
				<td>

					<?php 
						if (($_POST['jenis'])==='individu') {
							if ($list->jenis_kelamin==='0') {
								echo "Perempuan";
							}elseif ($list->jenis_kelamin==='1') {
								echo "Laki - Laki";
							}
						}elseif (($_POST['jenis'])==='rombongan') {
							if ($list->pria) {
								echo $list->pria ." Laki- Laki";
							}
								echo "<br>";
							if ($list->wanita) {
								echo $list->wanita ." Perempuan";
						}elseif ((($_POST['jenis'])=='all' && (($_POST['jenis'])!='individu' ))) {
							echo'hello world';
						}
					}
					if (($_POST['jenis'])=='all') {
							if ($list->jenis_kelamin==='0') {
								echo "Perempuan";
							}elseif ($list->jenis_kelamin==='1') {
								echo "Laki - Laki";
							}
							elseif ((($_POST['jenis'])==='all')) {
								if ($list->pria) {
								echo $list->pria ." Laki- Laki";
								}
									echo "<br>";
								if ($list->wanita) {
									echo $list->wanita ." Perempuan";
								}
							}
					}
							

					 ?>
				</td>



				<?php if ($_POST['jenis']!='rombongan'){ ?>
				<td><?= $list->pekerjaan?></td>
				<td><?= $list->pendidikan_terakhir?></td>
				<?php }else{ ?>
				<td>
					<?php 
						if ($list->pns!=NULL) {
							echo $list->pns." PNS<br>";
						};
						if ($list->swasta!=NULL) {
							echo $list->swasta." Pegawai Swasta<br>";
						};
						if ($list->peneliti!=NULL) {
							echo $list->peneliti." Peneliti<br>";
						};
						if ($list->guru!=NULL) {
							echo $list->guru." Guru<br>";
						};
						if ($list->dosen!=NULL) {
							echo $list->dosen." Dosen<br>";
						};
						if ($list->pensiunan!=NULL) {
							echo $list->pensiunan." Pensiunan<br>";
						};
						if ($list->tni!=NULL) {
							echo $list->tni." TNI<br>";
						};
						if ($list->wiraswasta!=NULL) {
							echo $list->wiraswasta." Wiraswasta<br>";
						};
						if ($list->pelajar!=NULL) {
							echo $list->pelajar." Pelajar<br>";
						};
						if ($list->mahasiswa!=NULL) {
							echo $list->mahasiswa." Mahasiswa<br>";
						};
						if ($list->lainnya!=NULL) {
							echo $list->lainnya." Lainnya<br>";
						};
					 ?>
				</td>
				<td>
					<?php 

					 if ($list->sd!=NULL) {
					 	echo $list->sd." SD<br>";
					 };
					 if ($list->smp!=NULL) {
					 	echo $list->smp." SMP<br>";
					 };
					 if ($list->sma!=NULL) {
					 	echo $list->sma." SMA<br>";
					 };
					 if ($list->d1!=NULL) {
					 	echo $list->d1." D1<br>";
					 };
					 if ($list->d2!=NULL) {
					 	echo $list->d2." D2<br>";
					 };
					 if ($list->d3!=NULL) {
					 	echo $list->d3." D3<br>";
					 };
					 if ($list->s1!=NULL) {
					 	echo $list->s1." S1<br>";
					 };
					 if ($list->s2!=NULL) {
					 	echo $list->s2." S2<br>";
					 };
					 if ($list->s3!=NULL) {
					 	echo $list->s3." S3<br>";
					 };

					 ?>
				</td>
				<?php } ?>

			</tr>
		<?php } ?>
				</tbody>
				</table>
            </div>
      </div>





<script type="text/javascript">


	var individu = document.getElementById("individu");
    individu.classList.remove("hidden_hehe")

    function showDiv(element)
        {
            // console.log(divId.value);
            var individu = document.getElementById("individu");
            var rombongan = document.getElementById("rombongan");

            if(element.value == 'individu'){
                individu.classList.remove("hidden_hehe")
            //     rombongan.classList.add("hidden_hehe")

            // }else if(element.value == 'rombongan') {
            //     rombongan.classList.remove("hidden_hehe")
            //     individu.classList.add("hidden_hehe")

            }else{
                individu.classList.add("hidden_hehe")
                rombongan.classList.add("hidden_hehe")
            }
        }

</script>


<style type="text/css">
    .hidden_hehe {
        display: none;
    }
</style>
