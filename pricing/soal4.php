<?php
//set session untuk username yang logi
session_start();
include '../config/koneksi.php';
// if(isset($_SESSION['username'])){
// }
if(isset($_SESSION['user'])){
  $session = $_SESSION['user'];
  $query   = mysqli_query($connect, "SELECT * FROM user WHERE id ='$session'") or die (mysql_error());
  $data    = mysqli_fetch_array($query);
}
else{
  header("location:../index.php");
}

//set session untuk timer soal 
//set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai4"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai4"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai4"]  = time();
        $telah_berlalu      = 0;
    } 
 
    $temp_waktu = (1*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
     
    if ($temp_menit < 60) { 
        /* Apabila $temp_menit yang kurang dari 60 menit */
        $jam    = 0; 
        $menit  = $temp_menit; 
        $detik  = $temp_detik; 
    } else { 
        /* Apabila $temp_menit lebih dari 60 menit */           
        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
        $detik  = $temp_detik;
    }   
?>

<?php include 'templates/header.php'; ?>

<?php include 'templates/navbar.php'; ?>

<!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Psikotes Online</h1>
  <p class="lead">Selamat datang di sistem psikotes online dari Arwana Citramulia Tbk .</p>
</div> -->

<!-- <div class="container"> -->
  <!-- nomor pagination -->
  <!-- <div class="row"> -->
    <!-- col-ke-1 -->
    <!-- <div class="col-md-3">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2" autocomplete="off"> Radio
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3" autocomplete="off"> Radio
        </label>
      </div>
    </div> -->
    <!-- col ke 2 -->
    <!-- <div class="col-md-9">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2" autocomplete="off"> Radio
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3" autocomplete="off"> Radio
        </label>
      </div>
    </div> -->
  <!-- </div> -->
  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto">
    <!-- timer -->
     <div class="col-md-3">
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div align="left" style="padding-left: 5px; padding-right:1px;">
              <div id='timer'></div>
            </div>      
          </div>
          <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
          <!-- <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul> -->
          <!-- <center><button type="button" class="btn btn-md btn-primary text-center">Setuju dan Lanjutkan</button></center> -->
        </div>
      </div>
    </div>
     <!-- soal -->
    <div class="col-md-9">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Tes Arwana Subtest IV</h4>
        </div>
        <div class="card-body">
          <form action="hasil_la_mp.php" id="frmSoal" method='POST' > 
            <div style="padding-left: 30px; padding-right:30px;">
              <div class="tab-content">
                <?php
                  // include '../koneksi.php'; 
                  // include '../config/koneksi.php';                    
                  // $query = "SELECT * FROM tbsoal limit 5";
                  // $query = "SELECT * FROM soal2 order by id ASC";
                  // $hasil = mysqli_query($connect, $query);
                  // $nomor = 1;
                  // while($row = mysqli_fetch_array($hasil)){
                  // $id   = $row["id"];
                  // $soal      = $row["soal"];
                  // $pilihan_a = $row["A"];
                  // $pilihan_b = $row["B"];
                  // $pilihan_c = $row["C"];
                  // $pilihan_d = $row["D"];                     
                ?>
                      <!-- class="tab-pane" id="<?php echo $nomor; ?>"               -->
                  <div >
                    <div class="col-md-12 ">
                      <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">1. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Demosi><</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Mosi</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Turun</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Pindah</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Tidak percaya</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Promosi</span>
                          </label>
                        </div>
                        </tr><br>
                        <!-- 2 -->
                        <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">2. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Gaek><</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Baru</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Renta</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Muda</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Terdahulu</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Tua</span>
                          </label>
                        </div>
                        </tr><br>
                        <!-- 3 -->
                        <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">3. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Tidak hobi membaca atau suka berolahraga.</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Suka berolahraga</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Suka membaca</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Suka berolahraga dan membaca</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Tidak hobi berolahraga</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Tidak suka berolahraga</span>
                          </label>
                        </div>
                        </tr><br>
                        <!-- 4 -->
                        <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">4. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Tidak ada mamalia yang bertelur.<br><br> Semuaikan paus adalah mamalia.</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Tidak ada ikan paus yang bertelur</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Beberapa ikan paus bertelur</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Ikan paus bertelur atau mamalia</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Ikan paus mamalia dan bertelur</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Tidak ada ikan paus termasuk mamalia</span>
                          </label>
                        </div>
                        </tr><br>
                        <!-- 5 -->
                      <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">5. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Ariana diterima kuliah di UI atau IKJ..<br><br> Ternyata Ariana tidak kuliah di UI..</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Ariana ternyata tidak kuliah di IKJ</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Kuliah di UI</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Kuliah di IKJ</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Jika Ariana diterima kuliah di UI maka IKJ tidak dipilih</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Jika Ariana diterima kuliah di IKJ maka UI tidak dipilih</span>
                          </label>
                        </div>
                        </tr><br>
                        <!-- 6 -->
                        <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">6. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan<br><br> <i>Hazdame</i> berarti cat nila <br><br> <i>Luklbim</i> berarti rumah baru <br><br> <i>Bimfriks</i> berarti lampu rumah <br><br> Kata apakah yang berarti “nilabaru”</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Hazbim</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Lukfriks</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Hazbrot</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Lukldame</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Luklhaz</span>
                          </label>
                        </div>
                        </tr><br>

                        <div class="img-responsive">
                          <img src="assets/img-soal/4.1.png" width="500px">
                        </div><br>
                          
                          <!-- 7 -->
                           <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">7. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Diagram 1.1 menunjukkan:</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan7" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Futsal merupakan olahraga favorit</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan7" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Tidak ada yang suka futsal</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan7" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Futsal tidak ada yang memainkan</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan7" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Futsal di benci di lingkungan</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan7" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Futsal adalah olahraga terpopuler kedua</span>
                          </label>
                        </div>
                        </tr><br>

                        <!-- 8 -->
                         <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">8. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Diagram 1.1 menunjukkan:</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan8" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Takraw adalah memiliki populasi terbesar</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan8" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Takraw dan basket memiliki persentase peminat yang sama</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan8" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Tidak ada yang suka takraw</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan8" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Basket memiliki jumlah peminat yang sama dengan sepak bola</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan8" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Basket dan takraw mendominasi olahraga di sini</span>
                          </label>
                        </div>
                        </tr><br>


                        <div class="img-responsive">
                          <img src="assets/img-soal/4.2.png" width="800px">
                        </div><br>

                        <!-- 9 -->

                           <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">9. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead"> Diagram diatas menunjukkan:</h1>
                          </td>
                        </tr>
                      </table>
                            
                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan9" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Tahun 2018 cabai menguasai penjualan</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan9" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Tahun 2018 cabai tidak bisa mengalahkan penjualan kedelai.</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan9" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Tahun 2018 keledai memiliki penjualan paling tinggi.</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan9" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Bawang memimpin penjualan pada tahun 2018.</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan9" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Cabai dan bawang memiliki penjualan tertinggi pada tahun 2018.</span>
                          </label>
                        </div>
                        </tr><br>

                        <!-- 10 -->
                        <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">10. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead"> Diagram diatas menunjukkan:</h1>
                          </td>
                        </tr>
                      </table>
                            
                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan10" value="A" class="icek">
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Setiap tahun cabai selalu memimpin penjualan.</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan10" value="B" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Pada periode 2019 cabai mengalami penurunan tertinggi.</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan10" value="C" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Tahun 2020 bawang memiliki penjualan tertinggi.</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan10" value="D" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Tahun 2019 kedelai memiliki penjualan tertinggi.</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan10" value="E" class="icek">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;Cabai tidak pernah memimpin penjualan setiap tahun.</span>
                          </label>
                        </div>
                        </tr><br>
                        
                        

                       
                      </table></br>
                    </div>
                  </div>
                
                       <!-- <?php var_dump($id) ?>
                       <?php var_dump($soal) ?>
                       <?php var_dump($pilihan_a) ?>
                       <?php var_dump($pilihan_b) ?>
                       <?php var_dump($pilihan_c) ?>
                       <?php var_dump($pilihan_d) ?> -->
                
                <!-- <ul class="pager wizard">
                  <li class="previous"><a href="javascript:;">Previous</a></li>                             
                    <li class="next"><a href="javascript:;">Next</a></li>
                  <li class="finish" onclick="return confirm('Anda yakin dengan jawaban anda ?')">
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
                  </li> 
                </ul> -->
                
                <!-- <button type="button" class="btn btn-md btn-primary text-center">Lanjutkan</button> -->
              </div>
            </div>
          </form>   
          <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
         <!--  <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul> -->
          <div class="float-right mr-md-5 mb-3">
            <!-- <button type="button" class="btn btn-md btn-primary text-center">Next</button> -->
          </div>
          <!-- <center><button type="button" class="btn btn-md btn-primary text-center">Lanjutkan</button></center> -->
        </div>
      </div>
    </div>

    <!-- <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div> -->
    <!-- <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div> -->
  </div>

<?php include 'templates/footer.php'; ?>

<!-- Script Wizard -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#rootwizard').find('.bar').css({width:$percent+'%'});
      }});
      $('#rootwizard .finish').click(function() {
        
        $('#rootwizard').find("a[href*='tab1']").trigger('click');
      });
    });

    </script>

    <!-- Script Timer -->
       <script type="text/javascript">
          $(document).ready(function() {
               /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik;
                * var menit;
                * var jam;
              */
              var detik   = <?= $detik; ?>;
              var menit   = <?= $menit; ?>;
              var jam     = <?= $jam; ?>;
                
               /**
                 * Membuat function hitung() sebagai Penghitungan Waktu
               */
              function hitung() {
                  /** setTimout(hitung, 1000) digunakan untuk 
                      * mengulang atau merefresh halaman selama 1000 (1 detik) 
                  */
                  setTimeout(hitung,1000);
    
                 /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                 if(menit < 5 && jam == 0){
                       var peringatan = 'style="color:red"';
                 };
   
                 /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                 $('#timer').html(
                        '<h4 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h4><hr>'
                  );
    
                  /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                  detik --;
   
                  /** Jika var detik < 0
                      * var detik akan dikembalikan ke 59
                      * Menit akan Berkurang 1
                  */
                  if(detik < 0) {
                      detik = 59;
                      menit --;
   
                      /** Jika menit < 0
                          * Maka menit akan dikembali ke 59
                          * Jam akan Berkurang 1
                      */
                      if(menit < 0) {
                          menit = 59;
                          jam --;
   
                          /** Jika var jam < 0
                              * clearInterval() Memberhentikan Interval dan submit secara otomatis
                          */
                          if(jam < 0) {
                             clearInterval(); 
                             /** Variable yang digunakan untuk submit secara otomatis di Form */
                             var frmSoal = document.getElementById("frmSoal"); 
                             alert('Maaf, Waktu pengerjaan untuk soal subtest ke-4 ini telah habis, lanjut ke subtest berikutnya.'), window.location = 'mulaisoal5.php'; 
                        }
                      } 
                  } 
              }           
              /** Menjalankan Function Hitung Waktu Mundur */
              hitung();
        }); 
        // ]]>
      </script>

</body>
</html>