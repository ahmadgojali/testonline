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


 // if (isset($_POST['submit'])) {
    
    // var_dump($_POST);

    $kd_soal = $_POST["id"];
    $pilihan = $_POST["pilihan"];

    $query = ("SELECT * from soal2");

	$hasil = mysqli_query($connect, $query);       
	$cek   = mysqli_num_rows($hasil);
      
	$jml_soal = $cek;
	$score    = 0;
	$benar    = 0;
	$salah    = 0;
	$kosong   = 0;
    
    for ($i = 0; $i < $jml_soal; $i++){
        //id nomor soal
        $nomor = $kd_soal[$i];
        
        //jika user tidak memilih jawaban
        if (empty($pilihan[$nomor])){
            $kosong++;

        }else{
            //jawaban dari user
            $jawaban = $pilihan[$nomor];
            
            //cocokan jawaban user dengan jawaban di database
            $query = ("SELECT * from soal2 where id ='$nomor'and jawaban ='$jawaban'");
            $hasil = mysqli_query($connect, $query);
            
            $cek = mysqli_num_rows($hasil);
            
            if($cek){

                //jika jawaban cocok (benar)
                $benar++;

            }else{

                //jika salah
                $salah++;
            }
            
        } 
       
        $score = round(100/$jml_soal * $benar);
        $nilai = $score;
    }

var_dump('nilai', $nilai);
var_dump('benar', $benar);
var_dump('salah', $salah);
var_dump('jumlah', $jml_soal);
var_dump('tidak dijawab', $kosong);

   //  if(isset($_SESSION['user'])){
	  //   $session = $_SESSION['user'];
	  //   $query   = mysqli_query($connect, "SELECT * FROM jawaban_tes2 WHERE id_user ='$session'") or die (mysql_error());
	  //   $data    = mysqli_fetch_array($query);
  		
  	// 	if ($data['id_user'] == $session){
  	// 		$query = ("UPDATE jawaban_tes2 SET nilai='".$nilai."' WHERE id_user='".$session."'");
  	// 		$hasil = mysqli_query($connect, $query);

  			

  	// 		// header("location:mulaisoal3.php");
  	// 		// var_dump($hasil);
  	// 	}

  	// 	else {
  	// 		$query = ("INSERT INTO jawaban_tes2 (id_user, nilai) VALUES ($session, $nilai)");
  	// 		$hasil = mysqli_query($connect, $query);


  	// 		// header("location:mulaisoal3.php");
  	// 		// var_dump($hasil);
  	// 	}
  	// }

  ?>



<!-- <?php include 'templates/header.php'; ?>

<?php include 'templates/navbar.php'; ?>

<div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Hasil Ujian</h1>
  <p class="lead">Selamat Datang <b><?= $data['nama'] ?></b> di Sistem Recruitment Online</p>
</div>

<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-8">
    <div class="card text-center">
      <div class="card-header lead">
       Hasil Tes 1
      </div>
      <div class="card-body text-lg-left">
       <div class="row">
          <div class="col-md-4">
           
         </div>
         <div class="col-md-2 lead">
           <div class="row">Jumlah soal</div>
           <div class="row">Benar</div>
           <div class="row">Salah</div>
           <div class="row">Tidak di jawab</div>
           <div class="row">Nilai</div>
         </div>
         <div class="col-md-1 lead">
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
         </div>
         <div class="col-md-5 lead">
          <div class="row"><?= $jml_soal ?></div>
           <div class="row"><?= $benar ?></div>
           <div class="row"><?= $salah ?></div>
           <div class="row"><?= $kosong ?></div>
           <div class="row"><?= $nilai ?></div>
         </div>
       </div>
      </div>
      <div class="card-footer text-muted">
       <a href="mulaisoal1.php" class="btn btn-primary">Selesai</a>
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


 <?php include 'templates/footer.php'; ?> -->

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

</body>
</html>