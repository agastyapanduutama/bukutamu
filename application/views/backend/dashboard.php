        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $individu?></h3>

              <p>Jumlah Individu</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?= base_url('backend/list_individu')?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $rombongan?></h3>

              <p>Jumlah Rombongan</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?= base_url('backend/list_rombongan')?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6"><div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Pengunjung berdasarkan  wilayah</h3>
                </div>
                <div class="box-body">
                  
                  <!-- <canvas id="densityChart" width="250" height="250"></canvas> -->
                  <canvas id="densityChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
              <div class="col-md-6"><div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Pengunjung berdasarkan Jenis Kelamin</h3>
                </div>
                <div class="box-body">
                  <canvas id="pieChart1" style="height:250px"></canvas>
                </div>
              </div>
            </div>
          </div>

           <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                  
                  <!-- <canvas id="densityChart" width="250" height="250"></canvas> -->
                  <canvas id="densityChart1"></canvas>
                </div>
              </div>
            </div>


        </section>
        <!-- /.content -->


  
<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- ChartJS -->
<!-- <script src="<?=base_url()?>assets/admin/bower_components/chart.js/Chart.js"></script> -->
<script src="<?=base_url()?>assets/chartjs/Chart.js"></script>

<script>

  var densityCanvas = document.getElementById("densityChart");

  Chart.defaults.global.defaultFontFamily = "arial";
  Chart.defaults.global.defaultFontSize = 16;


  var densityData = {
    label: 'Statistik',
    data: [
                  <?php  
                  $this->db->like('wilayah','1');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>, 
                  <?php  
                  $this->db->like('wilayah','2');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('wilayah','3');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('wilayah','4');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('wilayah','5');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>
                  ]
  };

  var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: {
      labels: ["Kawasan Bandung", "Kawasan Jakarta", "Kawasan Cibinong", "Kawasan Bogor", "Kawasan Serpong"],
      datasets: [densityData]
    }
  });


var densityCanvas = document.getElementById("densityChart1");

  Chart.defaults.global.defaultFontFamily = "arial";
  Chart.defaults.global.defaultFontSize = 16;


  var densityData = {
    label: 'Layanan yang sering digunakan',
    data: [
                  <?php  
                  $this->db->like('jenis_layanan','Layanan Pendampingan Rin');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>, 
                  <?php  
                  $this->db->like('jenis_layanan','Layanan Data Ilmiah - Penelusuran Data ilmiah di RIN');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('jenis_layanan','Layanan Penelusuran Referensi');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('jenis_layanan','Layanan Jurnal Online');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('jenis_layanan','Layanan CO-Working Space');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
                  <?php  
                  $this->db->like('jenis_layanan','Layanan Mini Theatre');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>
                  ]
  };

  var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: {
      labels: ["Layanan Pendampingan Rin", "Layanan Data Ilmiah - Penelusuran Data ilmiah di RIN", "Layanan Penelusuran Referensi", "Layanan Jurnal Online", "Layanan CO-Working Space", "Layanan Mini Theatre  "],
      datasets: [densityData]
    }
  });



  $(function () {

    var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php  
                  $this->db->like('jenis_kelamin','1');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Laki - Laki'
      },
      {
        value    : <?php  
                  $this->db->like('jenis_kelamin','0');
                  $this->db->from('individu');
                  echo $this->db->count_all_results(); 
                  ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Perempuan'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
    
  })
</script>