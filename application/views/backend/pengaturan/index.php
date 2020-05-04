  <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="<?= base_url()?>assets/logo.png"  alt="User profile picture">

              <h3 class="profile-username text-center"><?= $this->session->userdata('nama_user'); ?></h3>

              <p class="text-muted text-center">
              <?php 
              	if ($this->session->userdata('level')==='1') {
              		echo "Admin";
              		// echo '<a href="#" class="btn btn-primary btn-block"><b>Ganti Password</b></a>';
              	}elseif ($this->session->userdata('level')==='2') {
              		echo "Admin";
              		// echo '<a href="#" class="btn btn-primary btn-block"><b>Ganti Password</b></a>';
              	}elseif ($this->session->userdata('level')==='3') {
              		echo "Super User";
              	}
              ?>
              </p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active">
                  <a href="#user" data-toggle="tab">Pengaturan User</a></li>

              <?php if ($this->session->userdata('level')==='3' || '2'): ?>
                <li><a href="#akun" data-toggle="tab">Daftar User</a></li>  
              <?php endif ?>
              <!-- <li><a href="#akuninfo" data-toggle="tab">Info User</a></li> -->
              <!-- <li><a href="#settings" data-toggle="tab">Ganti Kata Sandi</a></li> -->
              <!-- <li><a href="#log" data-toggle="tab">Log Aktivitas</a></li> -->
            </ul>
            <div class="tab-content">
             <div class="active tab-pane" id="user">
                   <form method="POST" action="<?= base_url('backend/simpan_pengaturan/'.$this->session->userdata('id_user'))?>" class="form-horizontal" >
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama User</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_user" value="<?= $this->session->userdata('nama_user');?>" id="inputName" placeholder="Nama User">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" value="<?= $this->session->userdata('username');?>" id="inputEmail" placeholder="username">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Konfirmasi/Ubah Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" id="inputEmail" placeholder="password">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>   
			
			</div>

            <div class="tab-pane" id="akun">
            	<div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                <a href="<?= base_url('backend/tambah_user')?>" class="btn btn-primary">Tambah User</a>
                <hr>

              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($akun as $row ) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_user?></td>
                    <td><?= $row->username?></td>
                    <td><?= $row->level?></td>
                    <td>
                    <?php if ($row->level==='3'): ?>
                      <button href="" class="btn btn-danger btn-xs" disabled>Tidak dapat menghapus</button>
                    <?php else: ?>
                      <a href="<?= base_url('backend/hapus_user/'.$row->id_user)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                    <?php endif ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
              </table>
            </div>
        </div>
            </div>

            <div class="tab-pane" id="akuninfo">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama User</label>
                    <div class="col-sm-10">
                     <?= $this->session->userdata('nama_user');?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <?= $this->session->userdata('nama_user');?>
                    </div>
                  </div>

            </div>

              
              <div class="tab-pane" id="log">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>kegiatan</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
              </tbody>
              </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->