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

<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

<?php include 'templates/navbar.php'; ?>

<div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Matematika Dasar</h1>
  <p class="lead">Selamat Datang di Sistem Recruitment Online PT Arwana Citramulia Tbk </p>
</div>

<div class="row">
  <div class="col-md-2">
     
  </div>

  <?php

    if (isset($_POST['latihan'])) {

      $jwb_benar = 2;

      $jawaban = 0;

      $jawaban = $_POST['jawaban']; 



      if ($jawaban == $jwb_benar) {
        $alert = '<div class="alert alert-success" role="alert">
                    <center>Jawaban anda benar, karena 1 + 1 adalah 2 , anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah .</center>
                  </div>';
         $tombol = '<a href="soal1.php" class="btn btn-success">Mulai</a>';

      } else {
        $alert = '<div class="alert alert-danger" role="alert">
                    <center>Jawaban anda salah, karena 1 + 1 bukan '.$jawaban
                  .' , coba lagi !</center></div>';
      }
      

   }
       
  ?>

  <div class="col-8">
    <?= @$alert; ?>
    <div class="card text-center">
      <div class="card-header lead">
       Petunjuk Pengerjaan Tes 1
      </div>
      <div class="card-body">
        <p class="lead">Test berikut adalah test hitungan. <br> Tugas Anda mudah Anda hanya tinggal mengerjakan soal hitungan tersebut. <br> Anda tidak diperkenankan untuk mengunakan alat bantu hitung. <br> Kerjakan secepat mungkin sebelum waktunya selesai.</p>
      </div>
      <div class="card-footer text-muted">
        <!-- Large modal -->
        <?= @$tombol; ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Latihan</button>

       <!-- <a href="soal1.php" class="btn btn-primary">Mulai</a> -->
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Latihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- soal -->
      <div class="col-md-12">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-center"> Soal Matematika Dasar </h4>
          </div>
          <div class="card-body">
            <form action="" method='POST' > 
              <div class="row">
                <div class="col-md-12">
                  <table>
                    <tr>
                      <td class="align-text-top">
                        <h1 class="lead pl-4">1. </h1>
                      </td>
                      <td>
                        <h1 class="lead pl-3 pr-3">1 + 1 = </h1>
                      </td>
                    </tr>
                  </table>
                  <tr>
                    <div class="form-group pl-md-5 pr-3">
                      <input type="text" name="jawaban" value="" class="form-control"  placeholder="Jawab disini">
                    </div>
                  </tr>
                </div>
              </div>
              <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="latihan" id="submit" class="btn btn-success" value="Submit">
              </div>
            </form>   
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary disabled">Mulai</button> -->
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