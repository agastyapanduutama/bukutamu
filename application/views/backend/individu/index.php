			<div class="box-body row" >
              <!-- Date -->
              <div class="form-group">
                <label>Cari berdasarkan tanggal:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <div class="col-md-2">
              	  <form action="<?= base_url('administrator/individu/pencarian/seluruh_kawasan')?>" method="POST">
                  <input type="text" name="tgl_awal" class="form-control form-control-sm pull-right" autocomplete="off" id="datepicker1">
                  <input type="text" name="tgl_akhir" class="form-control form-control-sm pull-right" autocomplete="off" id="datepicker">
                  </div>
                   <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Filter</button>
				 </form>
				 <div class="pull-right">
	               <div class="col-md-2">
                   	<a href="<?= base_url('administrator/individu/cetak/seluruh_kawasan')?>" target="_blank" rel="nofollow" class="btn btn-sm btn-primary">Cetak PDF</a>
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
<hr>
	
	
<div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="list_individu" class="table table-bordered table-striped">
           	<thead>
				<tr>
					<th>No</th>
					<th style="width: 50px"> Waktu Kunjungan</th>
					<th style="width: 250px">No Pengunjung</th>
					<th style="width: 250px">Nama</th>
					<th style="width: 250px">Jenis Kelamin</th>
					<th style="width: 250px">Pendidikan</th>
					<th style="width: 250px">Pekerjaan</th>
					<th>Alamat</th>
					<th style="width: 250px">Lokasi Perpustakaan</th>
					<th style="width: 250px">Jenis Layanan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php $no=1; foreach ($individu as $list ) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $list->tanggal_kunjungan?></td>
				<td>
				<?= $list->no_kunjungan?>
				<?php if ($list->no_kunjungan===''): ?>
					(Belum diset)
				<?php endif ?>

				</td>
				<td><?= $list->nama_pengunjung?></td>
				<td>
					<?php if ($list->jenis_kelamin==='0') {
						echo "Perempuan";
					}elseif ($list->jenis_kelamin==='1') {
						echo "Laki - Laki";
					} ?>
				</td>
				<td><?= $list->pendidikan_terakhir?></td>
				<td><?= $list->pekerjaan?></td>
				<td><?= $list->alamat?></td>
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
						echo "Zoologi";
					}elseif ($list->sub_lokasi==='2') {
						echo "Bootani";
					}elseif ($list->sub_lokasi==='3') {
						echo "Bioteknologi";
					}elseif ($list->sub_lokasi==='4') {
						echo "Limnologi";
					}elseif ($list->sub_lokasi==='5') {
						echo "Biomaterial";
					}elseif ($list->sub_lokasi==='13') {
						echo "IPSK";
					}elseif ($list->sub_lokasi==='14') {
						echo "Oseanografi";
					}elseif ($list->sub_lokasi==='15') {
						echo "PDDI Jakarta";
					} ?>
				</td>
				<td><?= $list->jenis_layanan?></td>
				<td>
					<a href="<?= base_url('backend/hapus_individu/'.$list->id_individu)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>
		<?php } ?>
		
	</tbody>
</table>




            </div>
            <!-- /.box-body -->
          </div>


