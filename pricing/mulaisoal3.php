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
<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-8">
    <div class="card text-center">
      <div class="card-header lead">
       Petunjuk Pengerjaan Tes 3
      </div>
      <div class="card-body">
         <p class="lead">Test ketiga adalah soal deret angka. <br> Tugas Anda adalah meneruskan deret angka yang ada.  <br> Caranya Anda harus menemukan dulu pola yang terbentuk dari angka - angka sebelumnya. <br> Contoh: 1 2 3 4 5 6 7 8 9 10 11 12 <i><b>11 12</b></i></p>
      </div>
      <div class="card-footer text-muted">
       <a href="soal3.php" class="btn btn-primary">Mulai</a>
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

<div class="row">
      <div class="col-md-12">
         <div class="row">
          <div class="col-md-3">
              <div class="panel panel-default">
                  <div class="panel-body">
                    <legend><center>Jawaban</center></legend> 
                      <div align="left" style="padding-left: 5px; padding-right:1px;">
                   <?php
                   echo "
                        <h4 align='justyfy'>Jawaban Benar</td><td> &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;$benar </h4> </br>
                        <h4 align='justyfy'>Jawaban Salah</td><td> &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;$salah </h4> </br> 
                        <h4 align='justyfy'>Jumlah Soal</td><td> &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;$jml_soal </h4> </br>"   
                      ?>
                      </div>      
                  </div>
              </div>
          </div>

        <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-body">
                    <legend>Nilai Anda</legend> 
                      <?php
                        if ($nilai <= 50 ){
                          echo "<p align='center'><font size='7' color='red'>$nilai</font></p><hr>";  
                        }
                        else {
                          echo "<p align='center'><font size='7' color='blue'>$nilai</font></p><hr>";
                        } 
                      ?>
                <legend>jumlah soal : <?php echo "$jml_soal";  ?></legend>
                <div align="center">
                <a href="index.php" class="btn btn-success"> Selesai</a>
                </div>  
            </div>
          </div>
        </div>
      </div>
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