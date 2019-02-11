<?php
session_start();
include '../config/koneksi.php';
  if(isset($_SESSION['user'])){
    $session = $_SESSION['user'];
    $query   = mysqli_query($connect, "SELECT * FROM user WHERE id ='$session'") or die (mysql_error());
    $data    = mysqli_fetch_array($query);
  }
  
  else{
    header("location:../index.php");
  }

?>

<?php include 'templates/header.php'; ?>

<?php include 'templates/navbar.php'; ?>

<div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Ujian Online</h1>
  <p class="lead">Selamat Datang di Sistem Recruitment Online PT Arwana Citramulia Tbk </p>
</div>

<!-- <div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-md-8">
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-center">Petunjuk Pengerjaan Sub Tes 2</h4>
      </div>
      <div class="card-body">
        <div class="panel-body"> -->
          <!-- isi petunjuk disini      -->
<!--        </div>
        
        <center>
          <a href="soal2.php" class="btn btn-md btn-primary text-center">Mulai</a>
        </center>
      </div>
    </div>
  </div>

  <div class="col-md-2">
     
  </div>
</div>
 -->
<!-- <div class="container"> -->
<!-- collapse soal 1 show yang lain hide -->
<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-md-8">
    <div class="accordion" id="accordionExample">

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0 text-center">
              <button class="btn btn-link collapsed" id="tombol2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Petunjuk Pengerjaan Tes 2 &nbsp; - &nbsp;<u>Klik Disini </u>
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            
          </div>
          <div class="card-footer text-muted text-center">
            <a href="soal2.php" class="btn btn-md btn-primary text-center mb-4 mt-4 align-middle" id="button2">Mulai</a>
          </div>
        </div>
      </div>

      <!-- card -->
    </div>
  </div>

  <div class="col-md-2">
     
  </div>
</div>

<?php include 'templates/footer.php'; ?>

<!-- menampilkan waktu realtime -->
<script>
// Function ini dijalankan ketika Halaman ini dibuka pada browser
$(function(){
  setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
 
//Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
function timestamp() {
  $.ajax({
    url: 'ajax-jam.php',
    success: function(data) {
    $('#timestamp').html(data);
    },
  });
}
</script>

<!-- hide/show button -->
<!-- <script>
   $(document).ready(function() {
  
     $("#tombol2").click(function() {
       // $("#button2").disabled = false;
       $("#button2").show();
     })
  
     $("#tombol_show").click(function() {
       $("#box").show();
     })
  
   });

</script> -->

</body>
</html>