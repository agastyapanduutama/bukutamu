


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
       
      </span>
    </td>
  </tr>
</table>

<hr class="line-title">

<table border="1">
       
       	<thead>
					<tr>
						<th style="text-align: center; padding:2px;">No</th>
						<th style="text-align: center; padding:2px;">Tanggal Kunjungan</th>
						<th style="text-align: center; padding:2px;">Lokasi Perpustakaan</th>
						<th style="text-align: center; padding:2px;">No Pengunjung</th>
						<th style="text-align: center; padding:2px;">Instansi</th>
						<th style="text-align: center; padding:2px;">Nama</th>
						<th style="text-align: center; padding:2px;">Jenis Kelamin</th>
						<th style="text-align: center; padding:2px;">No Telp</th>
						<th style="text-align: center; padding:2px;">Email</th>
						<th style="text-align: center; padding:2px;">Pekerjaan</th>
						<th style="text-align: center; padding:2px;">Penddikan</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1; foreach ($datana as $list ) { ?>
				<tr>
				<td style="text-align: center;"><?= $no++ ?></td>
				<td style="text-align: center; padding:2px;"><?= $list->tanggal_kunjungan?></td>
				<td style="text-align: center; padding:2px;">
					<?php  ?>

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
				<td style="text-align: center; padding:2px;">
				<?= $list->no_kunjungan?>
					<?php if ($list->no_kunjungan===''): ?>
						(Belum diset)
					<?php endif ?>
				</td>
				<td style="text-align: center; padding:2px;"> 

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
				<td style="text-align: center; padding:2px;">
					<?php if (($_POST['jenis'])==='rombongan') {
						echo $list->nama_ketua;
					}else{
						echo $list->nama_pengunjung;	
					} ?>
				</td>
				<td style="text-align: center; padding:2px;">

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
				<td  style="text-align: center; padding:2px;"><?= $list->email?></td>
				<td  style="text-align: center; padding:2px;"><?= $list->no_telp?></td>
				<?php if ($_POST['jenis']!='rombongan'){ ?>
				<td style="text-align: center; padding:2px;"><?= $list->pekerjaan?></td>
				<td style="text-align: center; padding:2px;"><?= $list->pendidikan_terakhir?></td>
				<?php }else{ ?>
				<td style="text-align: center; padding:2px;">
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
				<td style="text-align: center; padding:2px;">
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

</body>
</html>







