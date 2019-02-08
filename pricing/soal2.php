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
    if (isset($_SESSION["mulai2"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai2"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai2"]  = time();
        $telah_berlalu      = 0;
    } 
 
    $temp_waktu = (10*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Online</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="pricing.css">
  <!-- <link rel="stylesheet" href="signin.css"> -->
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 ml-md-4 mr-md-auto font-weight-normal">Arwana Citramulia Tbk</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Beranda</a>
    <a class="p-2 text-dark" href="#">Registrasi</a>
    <a class="p-2 text-dark" href="#">Pengumuman</a>
    <a class="p-2 text-dark" href="#">Q & A</a>
  </nav>
  <div class="mr-md-4">
    <a class="btn btn-outline-primary" href="#">Sign up</a>&nbsp;
    <a class="btn btn-outline-primary" href="logout.php">Logout</a>
  </div>
</div>


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
          <h4 class="my-0 font-weight-normal text-center">Subtest 2</h4>
        </div>
        <div class="card-body">
          <form action="hasil_la_mp.php" id="frmSoal" method='POST' > 
            <div style="padding-left: 30px; padding-right:30px;">
              <div class="tab-content">
                <?php
                  // include '../koneksi.php'; 
                  // include '../config/koneksi.php';                    
                  // $query = "SELECT * FROM tbsoal limit 5";
                  $query = "SELECT * FROM soal2 order by id ASC";
                  $hasil = mysqli_query($connect, $query);
                  $nomor = 1;
                  while($row = mysqli_fetch_array($hasil)){
                  $id   = $row["id"];
                  $soal      = $row["soal"];
                  $pilihan_a = $row["A"];
                  $pilihan_b = $row["B"];
                  $pilihan_c = $row["C"];
                  $pilihan_d = $row["D"];                     
                ?>
                      <!-- class="tab-pane" id="<?php echo $nomor; ?>"               -->
                  <div >
                    <div class="col-md-12 ">
                      <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <h1 class="lead"><?php echo $soal; ?></h1>
                          </td>
                        </tr>
                      </table>

                        <!-- <tr>
                        <div class="form-group"> -->
                          <!-- <label for="exampleInputEmail1">Email address</label> -->
                          <!-- <input type="text" name="pilihan[<?php echo $id;?>]" value="" class="form-control"  placeholder="Jawab disini">
                        </div>
                        </tr> -->

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan[<?php echo $id;?>]" value="A">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan[<?php echo $id;?>]" value="B">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;<?php echo $pilihan_b; ?></span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan[<?php echo $id;?>]" value="C">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;<?php echo $pilihan_c; ?></span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan[<?php echo $id;?>]" value="D">
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;<?php echo $pilihan_d; ?></span>
                          </label>
                        </div>
                        </tr>
                      </table></br>
                    </div>
                  </div>
                   <?php
                   $nomor++;
                   }
                   ?> 

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
            <button type="button" class="btn btn-md btn-primary text-center">Next</button>
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

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2018-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
<!-- container end -->
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="../assets/bower_components/bootstrap/dist/js/jquery.bootstrap.wizard.js"></script>

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
                             alert('Maaf, Waktu pengerjaan untuk soal ini telah habis, lanjut ke subtest berikutnya.'), window.location = 'mulaisoal3.php'; 
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