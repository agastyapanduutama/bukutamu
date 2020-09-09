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
              <li class="active"><a href="#user" data-toggle="tab">Info User</a></li>
              <li><a href="#akun" data-toggle="tab">Pengaturan Akun</a></li>
              <!-- <li><a href="#settings" data-toggle="tab">Ganti Kata Sandi</a></li> -->
              <!-- <li><a href="#log" data-toggle="tab">Log Aktivitas</a></li> -->
            </ul>
            <div class="tab-content">
             <div class="active tab-pane" id="user">
                       
      <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">

              


            </div>
        </div>
      </div>

            <div class="tab-pane" id="akun">
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
                    <label for="inputEmail" class="col-sm-2 control-label">Ubah Password</label>
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

              <div class="tab-pane" id="settings">
                
                <form action="" class="form-horizontal">
                  <div class="form-group">
                    <label for="pass1" class="col-sm-2 control-label">Kata Sandi Lama</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pass1" placeholder=" Silakan Masukan Kata Sandi Lama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pass2" class="col-sm-2 control-label">Konfirmasi Kata Sandi</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pass2" placeholder=" Silakan Masukan Konfirmasi Kata Sandi">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>

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