
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">

    <title>Buku Tamu Pengunjung</title>
    <style>
      .bgna{
        /*background-color: #eb6b34 !important;*/
        background-image: url('<?= base_url('assets/gambar/background.jpg') ?>') !important;
        z-index: -10;
        position: relative;

      
      }
    </style>
  </head>

  <body onload="startTime()">
<div class="bgna" style="color: white" >
<nav class="navbar navbar-expand-lg container " >
   <img src="<?= base_url()?>assets/logo.png" width="50">
          <h5 style="margin-left: 5px;">Buku Tamu Pengunjung</h5>    
          PDDI LIPI
           <div onload="startTime()" style="margin-left: 600px" > 
              <span id="clocktime"></span> 
            
        </div>
</nav>

   <section class="content-search" style="background-color: ; color: white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                        <center>
                            <strong>
                                <h3>Penentuan Lokasi<br>Buku Tamu</h3>
                            </strong>
                        <?php  $ip_num = $_SERVER['REMOTE_ADDR']; echo"IP KOMPUTER : $ip_num"; ?>
                        </center>
                        </center>
                    </div>
                </div>
            </div>
        </section>
</div>
<center>               
                    <?php
                        


                          echo validation_errors('<div class="alert alert-success">','</div>');

                          if ($this->session->flashdata('warning')) {
                            echo '<div class="alert alert-warning">';
                            echo $this->session->flashdata('warning');
                            echo '</div>';
                          }

                          if ($this->session->flashdata('success')) {
                            echo '`<div class="alert alert-success">';
                            echo $this->session->flashdata('success');
                            echo '</div>';
                          }

                          echo form_open(base_url('frontend/cek_lokasi'));

                           ?>

                        <div>
                            <select class="form-control" name="kepustakaan" id="kawasan" style="width: 300px; margin-top: 40px" required>
                                <option> -- Silakan Pilih -- </option>
                                <?php foreach ($lokasi as $lok): ?>
                                    <option value="<?= $lok->id_lokasi ?>"><?= $lok->kepustakaan?></option>
                                <?php endforeach ?> 
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <select id="location" style="width: 300px;" class="form-control" name="sub_lokasi"> 
                            </select>
                          
                        </div>
                        <br>
                            <button type="submit" class="btn btn-success btn-md btn-block" style="width: 300px;">Lanjut </button>
                            <!--<a class="login-link" href="#">Lupa password?</a>-->
                           <?php echo form_close();; ?> 
                        </center>
                    </div>

</center>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="<?= base_url()?>assets/bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 <script type="text/javascript">
    jQuery(document).ready(function () {

    $('#wilayah').change(function(){
        var idLoc = $(this).val();
        // swal(idLoc);
        $.get('load-location',{idLoc : idLoc},function(data){
        })
        .done(function(data) {
            $( '#location' ).html(data); 
            // alert( "second success" );
        })
        .fail(function(data) {
            $('#locations-id').hide();
            // alert( "error" );
        });
    });


    if ($('.message').data("messageValue")) {
        alert($('.message').data("messageValue"));
    }

});

     jQuery(document).ready(function () {

    $('#locations-Library').change(function(){
        var idLoc = $(this).val();
        // swal(idLoc);
        $.get('load-selecter-locations',{idLoc : idLoc},function(data){
        })
        .done(function(data) {
            $( '#selecter-locations' ).html(data); 
            // alert( "second success" );
        })
        .fail(function(data) {
            $('#locations-id').hide();
            // alert( "error" );
        });
    });
    if ($('.message').data("messageValue")) {
        alert($('.message').data("messageValue"));
    }
});

    $('#location').css('display','none');
     // ajax kawasan
    $('#kawasan').on('change',function(evt){
        let selectedItem = $(this).val(); 
        let html = '';
        $.ajax({
            type :'POST',
            data : { id_lokasi : selectedItem},
            url  : "<?=base_url('Frontend/ajaxLokasi')?>",
            success : function(result){
                let parsing = JSON.parse(result);
                if( parsing.length > 0 )
                {
                   $('#location').css('display','block');

                    html += "<select ";
                    for( let index = 0;  index < parsing.length; index++)
                    {
                        html  += "<option value='"+ parsing[index]['sub_id'] +"'> " + parsing[index]['name']+ "</option>";
                    }                    
            
                    $('#location').html( html );
                }
                else{
                   $('#location').css('display','none');
                }


            },
            error : function(xhr, status, error){
                alert( "Eror: " + error);  

            }
        })
    })    
</script>

<script>
    function startTime()
{   var today=new Date();
    var weekday=new Array(7);
    var weekday=["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
    var monthname=new Array(12);
    var monthname=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","Septeber","Oktober","November","Desember"];
    var dayname=weekday[today.getDay()];
    var day=today.getDate();
    var month=monthname[today.getMonth()]; 
    var year=today.getFullYear();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    h=checkTime(h);
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('clocktime').innerHTML=dayname+", "+day+"-"+month+"-"+year+", "+h+":"+m+":"+s;
    t=setTimeout(function(){startTime()},500);
}
// function checkTime to add a zero in front of numbers < 10
function checkTime(i)
{   if(i<10){i="0"+i;}
    return i;
}
</script>

  </body>
</html>