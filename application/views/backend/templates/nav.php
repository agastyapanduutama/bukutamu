 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVIGASI</li>

        <li>
          <a href="<?= base_url('administrator/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <?php if ($_SESSION['level']=== '1'): ?>
          
        <li class="treeview">
          <a href="">
            <i class="fa fa-book"></i> <span>Buku Tamu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <ul class="treeview-menu">
             <!-- Bandung -->
              <?php if ($_SESSION['lokasi']==='1'): ?>
                  <li><a href="<?= base_url('administrator/individu/kawasan_bandung')?>"><i class="fa fa-circle-o"></i>Individu</a></li>
                  <li><a href="<?= base_url('administrator/rombongan/kawasan_bandung')?>"><i class="fa fa-circle-o"></i>Rombongan</a></li>
               <?php endif ?> 


               <!-- Jakarta -->
               <?php if ($_SESSION['lokasi']==='2'): ?>
                  <li class="treeview">
                    <a href="<?= base_url('administrator/individu/kawasan_')?>"><i class="fa fa-arrow-circle-right"></i> Individu
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?= base_url('administrator/individu/kawasan_jakarta')?>"><i class="fa fa-circle-o"></i>Seluruh Jakarta</a></li>
                      <li><a href="<?= base_url('administrator/individu/kawasan_jakarta_ipsk')?>"><i class="fa fa-circle-o"></i>IPSK</a></li>
                      <li><a href="<?= base_url('administrator/individu/kawasan_jakarta_oseanografi')?>"><i class="fa fa-circle-o"></i>Oseanografi</a></li>
                      <li><a href="<?= base_url('administrator/individu/kawasan_jakarta_pddi_jakarta')?>"><i class="fa fa-circle-o"></i>PDDI Jakarta</a></li>
                    </ul>
                  </li>


                <li class="treeview">
                  <a href="<?= base_url('administrator/rombongan/kawasan_')?>"><i class="fa fa-arrow-circle-right"></i> Rombongan
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_jakarta"><i class="fa fa-circle-o"></i>Seluruh Jakarta</a></li>
                    <li><a href="<?= base_url('administrator/rombongan/kawasan_jakarta_ipsk')?>"><i class="fa fa-circle-o"></i>IPSK</a></li>
                    <li><a href="<?= base_url('administrator/rombongan/kawasan_jakarta_oseanografi')?>"><i class="fa fa-circle-o"></i>Oseanografi</a></li>
                    <li><a href="<?= base_url('administrator/rombongan/kawasan_jakarta_pddi_jakarta')?>"><i class="fa fa-circle-o"></i>PDDI Jakarta</a></li>
                  </ul>
                </li>
               <?php endif ?>
             


               <!-- Cibinong -->
              <?php if ($_SESSION['lokasi']==='3'): ?>
                 <li class="treeview">
                  <a href="<?= base_url('administrator/individu/kawasan_')?>"><i class="fa fa-arrow-circle-right"></i> Individu
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong')?>"><i class="fa fa-circle-o"></i>Seluruh Cibinong</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_zoologi')?>"><i class="fa fa-circle-o"></i>Zoologi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_botani')?>"><i class="fa fa-circle-o"></i>Botani</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_bioteknologi')?>"><i class="fa fa-circle-o"></i>Bioteknologi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_limnologi')?>"><i class="fa fa-circle-o"></i>Limnologi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_biomaterial')?>"><i class="fa fa-circle-o"></i>Biomaterial</a></li>
                  </ul>
                </li>


                <li class="treeview">
                  <a href="#"><i class="fa fa-arrow-circle-right"></i> Rombongan
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong"><i class="fa fa-circle-o"></i>Seluruh Cibinong</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_zoologi"><i class="fa fa-circle-o"></i>Zoologi</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_botani"><i class="fa fa-circle-o"></i>Botani</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_bioteknologi"><i class="fa fa-circle-o"></i>Bioteknologi</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_limnologi"><i class="fa fa-circle-o"></i>Limnologi</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_biomaterial"><i class="fa fa-circle-o"></i>Biomaterial</a></li>
                  </ul>
                </li>
              <?php endif ?>

              <!-- Bogor -->
              <?php if ($_SESSION['lokasi']==='4'): ?>
                  <li><a href="<?= base_url('administrator/individu/kawasan_bogor')?>"><i class="fa fa-arrow-circle-right"></i>Individu</a></li>
                  <li><a href="<?= base_url('administrator/rombongan/kawasan_bogor')?>"><i class="fa fa-circle-o"></i>Rombongan</a></li>
              <?php endif ?>

              <!-- Serpong -->
              <?php if ($_SESSION['lokasi']==='5'): ?>
                <li><a href="<?= base_url()?>administrator/individu/kawasan_serpong"><i class="fa fa-arrow-circle-right"></i> Individu</a></li>
                <li><a href="<?= base_url()?>administrator/rombongan/kawasan_serpong"><i class="fa fa-arrow-circle-right"></i> Rombongan</a></li>
              <?php endif ?>
              </ul>     
        </li>

         <?php endif ?>
         <?php if ($_SESSION['level']=== '3' || $_SESSION['level']=== '2' ): ?>
           
         
        <li class="treeview">
          <a href="">
            <i class="fa fa-book"></i> <span>Buku Tamu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> Individu
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('administrator/individu/seluruh_kawasan')?>"><i class="fa fa-arrow-circle-right"></i> Seluruh Kawasan </a></li>



                <li><a href="<?= base_url('administrator/individu/kawasan_bandung')?>"><i class="fa fa-arrow-circle-right"></i> Kawasan Bandung</a></li>
                
                <li class="treeview">
                  <a href="<?= base_url('administrator/individu/kawasan_')?>"><i class="fa fa-arrow-circle-right"></i> Kawasan Jakarta
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('administrator/individu/kawasan_jakarta')?>"><i class="fa fa-circle-o"></i>Seluruh Jakarta</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_jakarta_ipsk')?>"><i class="fa fa-circle-o"></i>IPSK</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_jakarta_oseanografi')?>"><i class="fa fa-circle-o"></i>Oseanografi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_jakarta_pddi_jakarta')?>"><i class="fa fa-circle-o"></i>PDDI Jakarta</a></li>
                  </ul>
                </li>


                
                <li class="treeview">
                  <a href="<?= base_url('administrator/individu/kawasan_')?>"><i class="fa fa-arrow-circle-right"></i> Kawasan Cibinong
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong')?>"><i class="fa fa-circle-o"></i>Seluruh Cibinong</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_zoologi')?>"><i class="fa fa-circle-o"></i>Zoologi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_botani')?>"><i class="fa fa-circle-o"></i>Botani</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_bioteknologi')?>"><i class="fa fa-circle-o"></i>Bioteknologi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_limnologi')?>"><i class="fa fa-circle-o"></i>Limnologi</a></li>
                    <li><a href="<?= base_url('administrator/individu/kawasan_cibinong_biomaterial')?>"><i class="fa fa-circle-o"></i>Biomaterial</a></li>
                  </ul>
                </li>

                <li><a href="<?= base_url('administrator/individu/kawasan_serpong')?>"><i class="fa fa-arrow-circle-right"></i> Kawasan Serpong</a></li>
                <li><a href="<?= base_url('administrator/individu/kawasan_bogor')?>"><i class="fa fa-arrow-circle-right"></i> Kawasan Bogor</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-users"></i> Rombongan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url()?>administrator/rombongan/seluruh_kawasan"><i class="fa fa-arrow-circle-right"></i> Seluruh Kawasan</a></li>
                <li><a href="<?= base_url()?>administrator/rombongan/kawasan_bandung"><i class="fa fa-arrow-circle-right"></i> Kawasan Bandung</a></li>
                
                <li class="treeview">
                  <a href="<?= base_url('administrator/rombongan/kawasan_')?>"><i class="fa fa-arrow-circle-right"></i> Kawasan Jakarta
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_jakarta"><i class="fa fa-circle-o"></i>Seluruh Jakarta</a></li>
                    <li><a href="<?= base_url('administrator/rombongan/kawasan_jakarta_ipsk')?>"><i class="fa fa-circle-o"></i>IPSK</a></li>
                    <li><a href="<?= base_url('administrator/rombongan/kawasan_jakarta_oseanografi')?>"><i class="fa fa-circle-o"></i>Oseanografi</a></li>
                    <li><a href="<?= base_url('administrator/rombongan/kawasan_jakarta_pddi_jakarta')?>"><i class="fa fa-circle-o"></i>PDDI Jakarta</a></li>
                  </ul>
                </li>



                <li class="treeview">
                  <a href="#"><i class="fa fa-arrow-circle-right"></i> Kawasan Cibinong
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong"><i class="fa fa-circle-o"></i>Seluruh Cibinong</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_zoologi"><i class="fa fa-circle-o"></i>Zoologi</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_botani"><i class="fa fa-circle-o"></i>Botani</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_bioteknologi"><i class="fa fa-circle-o"></i>Bioteknologi</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_limnologi"><i class="fa fa-circle-o"></i>Limnologi</a></li>
                    <li><a href="<?= base_url()?>administrator/rombongan/kawasan_cibinong_biomaterial"><i class="fa fa-circle-o"></i>Biomaterial</a></li>
                  </ul>
                </li>
                <li><a href="<?= base_url()?>administrator/rombongan/kawasan_serpong"><i class="fa fa-arrow-circle-right"></i> Kawasan Serpong</a></li>
                <li><a href="<?= base_url()?>administrator/rombongan/kawasan_bogor"><i class="fa fa-arrow-circle-right"></i> Kawasan Bogor</a></li>
              </ul>
            </li>
          </ul>

        </li>

        <?php endif ?>

        
        <li>
          <a href="<?= base_url('administrator/laporan')?>">
            <i class="fa fa-file-text-o"></i> <span>Laporan</span>
          </a>
        </li>

        <li>
          <?php 
            $id_user = $this->session->userdata('id_user');
           ?>
          <a href="<?= base_url('backend/pengaturan/'.$id_user)?>">
            <i class="fa fa-gear"></i> <span>Pengaturan</span>
          </a>
        </li>

        <li>
          <a href="<?= base_url('administrator/keluar')?>">
            <i class="fa fa-sign-out"></i> <span>Keluar</span>
          </a>
        </li>
         
      </ul>
      </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">

              