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
              	  <form action="<?= base_url('administrator/rombongan/pencarian/'.$this->uri->segment(4))?>" method="POST">
                  <input type="text" name="tgl_awal" class="form-control form-control-sm pull-right" autocomplete="off" value="<?=isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : ''?>" id="datepicker1">
                  <input type="text" value="<?=isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : ''?>" name="tgl_akhir" class="form-control form-control-sm pull-right" autocomplete="off" id="datepicker">
                  </div>
                   <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Filter</button>
				 </form>
				 <div class="pull-right">
	               <div class="col-md-2">
                   	  <form action="<?= base_url('administrator/rombongan/pencarian/cetak/'.$this->uri->segment(4))?>" method="POST">
				      <input type="hidden" value="<?=isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : ''?>" id="datepicker" name="tgl_awal" autocomplete="off">
				      <input type="hidden" value="<?=isset($_POST['tgl_akhir']) ? $_POST['tgl_akhir'] : ''?>" id="datepicker1" name="tgl_akhir" autocomplete="off">
				      <button type="submit"  target="_blank" rel="nofollow" class="btn btn-sm btn-primary">Cetak PDF</button>
				      </form>
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
              <table id="example1" class="table table-bordered table-striped">
               	<thead>
		<tr>
			<th>No</th>
			<th>Waktu Kunjungan</th>
			<th>No Rombongan</th>
			<th>Ketua Rombongan</th>
			<th>Asal Instansi</th>
			<th>Jumlah Personil</th>
			<th>Lokasi Pustaka</th>
			<th>Jenis Layanan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($rombongan as $list ) { ?>
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
					-
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
					<a href="<?= base_url('backend/hapus_rombongan/'.$list->id_rombongan)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn  btn-danger btn-xs"><i class="fa fa-info-trash"></i> Hapus</a>
				</td>
			</tr>
		<?php } ?>
		
	</tbody>
</table>




            </div>
            <!-- /.box-body -->
          </div>


