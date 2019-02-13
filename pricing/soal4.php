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
 
    $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
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
        </div>
      </div>
    </div>
     <!-- soal -->
    <div class="col-md-9">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Tes 4 ( Soal Silogisme dan Membaca Diagram )</h4>
        </div>
        <div class="card-body">
          <form action="simpan-soal4.php" id="frmSoal" method='POST' >
           <?php
               
              include '../config/koneksi.php';                    
            
              $query = "SELECT * FROM soal4 order by id ASC";
              $hasil = mysqli_query($connect, $query);
              $nomor = 1;
              while($row = mysqli_fetch_array($hasil)){
              $id         = $row["id"];
              $soal       = $row["soal"];
              $pilihan_a  = $row["pilihan_a"];
              $pilihan_b  = $row["pilihan_b"];
              $pilihan_c  = $row["pilihan_c"];
              $pilihan_d  = $row["pilihan_d"];                     
              $pilihan_e  = $row["pilihan_e"];                     
              $jawaban    = $row["jawaban"];
              $gambar     = $row["gambar"];                      
              ?>

            
            <div class="row">
              <div class="col-md-12 ml-5">
             
                <!-- gambar -->
                <div class="img-responsive">
                  <img src="assets/img-soal/<?= $gambar ?>" width="700px">
                </div>
                <!-- no dan soal -->
                <table>
                  <tr>
                    <td class="align-text-top">
                      <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                      <!-- <input type="hidden" name="jawaban[<?php echo $id; ?>]" value="<?php echo $jawaban; ?>"> -->
                      <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                    </td>
                    <td>
                      <h1 class="lead"><?php echo $soal; ?></h1>
                    </td>
                  </tr>
                </table>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="A" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span>

                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="B" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;<?php echo $pilihan_b; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="C" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;<?php echo $pilihan_c; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="D" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;<?php echo $pilihan_d; ?></span>
                    </label>
                  </div>
                  </tr>
                  <tr>
                  <div class="ml-4">
                    <label>
                      <input type="radio" name="pilihan[<?php echo $id;?>]" value="E" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;<?php echo $pilihan_e; ?></span>
                    </label>
                  </div>
                  </tr>
              </div>
            </div></br>
            <?php 
              $nomor++;
               } 
            ?>
             
              
           <!--  <div class="float-right mr-md-5 mb-3">
              <input type="submit" name="submit" id="submit" class="btn btn-success" value="Simpan"> -->
              <!-- <button type="submit" name="submit" class="btn btn-success "><i class="fa fa-key"></i>&nbsp;Login</button> -->
            <!-- </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>


           

<?php include 'templates/footer.php'; ?>

<!-- Script Wizard -->
    <!-- <script type="text/javascript">
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

    </script> -->

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
                            clearInterval(hitung); 
                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                            var frmSoal = document.getElementById("frmSoal"); 
                            alert('Maaf, Waktu pengerjaan untuk soal tes ke-4 ini telah habis, lanjut ke tes berikutnya.');
                            frmSoal.submit(); 
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