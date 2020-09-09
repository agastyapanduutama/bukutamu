 <form action="<?= base_url('backend/report_filter')?>" method="POST">
	<div class="row">
	 	<div class="col-md-6">
	 		<div class="form-group">
			 	<label class="form-label">Tanggal</label>
			 	<div class="col-md-7">
				    <input type="" id="datepicker1" class="form-control" data-date-format="yyyy-mm-dd" name="tgl_awal" autocomplete="off">
				    S/D
				    <input type="" id="datepicker" class="form-control" data-date-format="yyyy-mm-dd" name="tgl_akhir"  autocomplete="off">
			    </div>
			</div>	
	  	</div>
 		
	 	<div class="col-md-6">
		<div class="form-group">
  		<label class="form-label">Berdasarkan Wilayah</label>
	  		<div class="col-md-7">
	  			<select name="wilayah" class="form-control">
  					<option value="all">-- Pilih Semua --</option>
	  				<?php foreach ($lokasi as $row): ?>
	  					<option value="<?= $row->id_lokasi?>"><?= $row->kepustakaan?></option>
	  				<?php endforeach ?>
	  			</select>
	  		</div>
	 	</div>
	 	<div class="form-group">
	 		<label class="form-label">Jenis</label>
	 		<div class="col-md-7">
	 			<select name="jenis" class="form-control" onchange="showDiv(this)">
	 				<option value="all">-- Pilih Semua --</option>
	 				<option value="individu">Individu</option>
	 				<option value="rombongan">Rombongan</option>
	 			</select>
	 		</div>
	 	</div>

        <div id="individu" class="hidden_hehe">
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

         <div id="rombongan" class="hidden_hehe">
           <!-- hello world -->
        </div>
 	
         
	 </div>
  </div>
<br><br>

    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Filter</button>

</form>

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


<script type="text/javascript">
    function showDiv(element)
        {
            // console.log(divId.value);
            var individu = document.getElementById("individu");
            var rombongan = document.getElementById("rombongan");

            if(element.value == 'individu'){
                individu.classList.remove("hidden_hehe")
                rombongan.classList.add("hidden_hehe")

            }else if(element.value == 'rombongan') {
                rombongan.classList.remove("hidden_hehe")
                individu.classList.add("hidden_hehe")

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
