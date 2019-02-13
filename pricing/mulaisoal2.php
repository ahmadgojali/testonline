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
   /*if($_GET['save'] == '1'){
    $query = "INSERT INTO jawaban_tes1 (id_user";    
    //for($i=1; $i <= $_GET['jml']; $i++){
    for($i=1; $i <= 6; $i++){
      $query .= ",no_".$i;
      $hasil .= ",'".$_GET['no'.$i]."'";
    }
    $query .= " )VALUES ($session $hasil)";
    $hasil = mysqli_query($connect, $query);
  }*/
    for($i = 1; $i <= 21; $i++){
       $jawaban = $_GET['no'.$i];
       $query   = ("INSERT INTO jawaban_tes1 (id_user, id_soal, jawaban) VALUES ($session, $i, '$jawaban')");
       // echo $query;
       $hasil = mysqli_query($connect, $query);
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
<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-8">
    <div class="card text-center">
      <div class="card-header lead">
       Petunjuk Pengerjaan Tes 2
      </div>
      <div class="card-body">
       <p class="lead">Test berikut adalah soal hubungan kata. <br> Tugas anda adalah mencari kata keempat yang hilang. <br> Caranya Anda harus menemukan dulu hubungan kata pertama dan kata kedua. <br> Contoh: Mawar : Merah = Melati : <i><b>Putih</b></i></p>
      </div>
      <div class="card-footer text-muted">
       <a href="soal2.php" class="btn btn-primary">Mulai</a>
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