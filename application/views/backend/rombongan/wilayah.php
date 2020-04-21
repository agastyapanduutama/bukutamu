<h5><?= $title ?></h5>

			<div class="box-body row" >
              <!-- Date -->
              <div class="form-group">
                <label>Cari berdasarkan tanggal:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <div class="col-md-2">
              	  <form action="<?= base_url('administrator/rombongan/pencarian/'.$this->uri->segment(3))?>" method="POST">
                  <input type="text" name="tgl_awal" class="form-control form-control-sm pull-right" autocomplete="off" id="datepicker1">
                  <input type="text" name="tgl_akhir" class="form-control form-control-sm pull-right" autocomplete="off" id="datepicker">
                  </div>
                   <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Filter</button>
				 </form>
				 <div class="pull-right">
	               <div class="col-md-2">
                   	<a href="<?= base_url('administrator/rombongan/cetak/'.$this->uri->segment(3))?>" target="_blank" rel="nofollow" class="btn btn-sm btn-primary">Cetak PDF</a>
	                </div>
	            </div>
                </div>
              </div>


<p>
	<?php
	if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
      }
	?>
</p>

<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               	<thead>
		<tr>
			<th>No</th>
			<th>Waktu Kunjungan</th>
			<th>No Rombongan</th>
			<th>Ketua Rombongan</th>
			<th>Asal Instansi</th>
			<th>Jumlah Personil</th>
			<!-- <th>Lokasi Pustaka</th> -->
			<th>Jenis Layanan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($wilayah as $list ) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $list->tanggal_kunjungan?></td>
				<td>
				<?= $list->no_kunjungan?>
				<?php if ($list->no_kunjungan===''): ?>
					(Belum diset)
				<?php endif ?>
				</td>
				<td><?= $list->nama_ketua?></td>
				<td><?= $list->nama_instansi?></td>
				<td><?= $list->jumlah_personil_instansi?></td>
				<!-- <td><?= $list->wilayah?></td> -->
				<td><?= $list->jenis_layanan?></td>
				<td>
					<a href="<?= base_url('backend/hapus_rombongan/'.$list->id_rombongan)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn  btn-danger btn-xs"><i class="fa fa-info-trash"></i> Hapus</a>
				</td>
			</tr>
		<?php } ?>
		
	</tbody>
</table>




            </div>
            <!-- /.box-body -->
          </div>





          