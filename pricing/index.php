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
  <p class="lead">Selamat Datang <b><?= $data['nama'] ?></b> di Sistem Recruitment Online</p>
</div>
<!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h3 class="">Selamat Datang, <?= $data['nama'] ?></h3>
  <p class="lead"> </p>
</div> -->

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

  <div class="col-8">
    <div class="card text-center">
      <div class="card-header lead">
       Data Diri Peserta Tes
      </div>
      <div class="card-body text-lg-left">
       <div class="row">
          <div class="col-md-4">
           
         </div>
         <div class="col-md-2 lead">
           <div class="row">Nama</div>
           <div class="row">Umur</div>
           <div class="row">Tangal Tes</div>
         </div>
         <div class="col-md-1 lead">
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
         </div>
         <div class="col-md-5 lead">
          <div class="row"><?= $data['nama'] ?></div>
           <div class="row"><?= $data['umur'] ?></div>
           <div class="row"><?= $data['tanggal_tes'] ?></div>
         </div>
       </div>
      </div>
      <div class="card-footer text-muted">
       <a href="mulaisoal1.php" class="btn btn-primary">Mulai</a>
      </div>
    </div>
  </div>



  <div class="col-md-2">
     
  </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>



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