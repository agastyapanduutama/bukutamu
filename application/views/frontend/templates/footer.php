



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?= base_url()?>assets/bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<script>
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