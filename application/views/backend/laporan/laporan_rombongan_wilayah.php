<!DOCTYPE html>
<html>
<head>
  <title><?= $title?></title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">

</head>
<body>
<table style="width: 100%;">
  <tr>
    <td align="center">
      <span style="line-height: 1.6; font-weight: bold; ">
       <h3><?= $title?></h3>
       
      </span>
    </td>
  </tr>
</table>

<hr class="line-title">

<table border="1">
        <thead>
        <tr>
            <th style="text-align: center; padding:2px;">NO</th>
            <th style="text-align: center; padding:2px;">WAKTU KUNJUNGAN</th>
            <th style="text-align: center; padding:2px;">NO ROMBONGAN</th>
            <th style="text-align: center; padding:2px;">KETUA ROMBONGAN</th>
            <th style="text-align: center; padding:2px;">EMAIL</th>
            <th style="text-align: center; padding:2px;">NO TELP</th>
            <th style="text-align: center; padding:2px;">ASAL INSTANSI</th>
            <th style="text-align: center; padding:2px;">JENIS LAYANAN</th>
        </tr>
        </thead>
        <tbody>
         <?php $no=1; foreach ($datana as $list ) { ?>
			<tr>
				<td style="text-align: center; padding:2px;"><?= $no++ ?></td>
				<td style="text-align: center; padding:2px;"><?= $list->tanggal_kunjungan?></td>
				<td style="text-align: center; padding:2px;">
				<?= $list->no_kunjungan?>
				<?php if ($list->no_kunjungan===''): ?>
					(Belum diset)
				<?php endif ?>

				</td>
				<td style="text-align: center; padding:2px;"><?= $list->nama_ketua?></td>
        <td style="text-align: center; padding:2px;"><?= $list->email?></td>
        <td style="text-align: center; padding:2px;"><?= $list->no_telp?></td>
				
				<td style="text-align: center; padding:2px;"><?= $list->alamat_instansi?></td>
			
				<td style="text-align: center; padding:2px;"><?= $list->jenis_layanan?></td>
			</tr>
		<?php } ?>
        </tbody>
</table>

</body>
</html>







