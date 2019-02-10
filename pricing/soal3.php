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
          <h4 class="my-0 font-weight-normal text-center">Subtest 3</h4>
        </div>
        <div class="card-body">
          <form action="hasil_la_mp.php" id="frmSoal" method='POST' > 
            <div style="padding-left: 30px; padding-right:30px;">
              <div class="tab-content">
                <?php
                  // include '../koneksi.php'; 
                  include '../config/koneksi.php';                    
                  // $query = "SELECT * FROM tbsoal limit 5";
                  $query = "SELECT * FROM soal3 order by id ASC";
                  $hasil = mysqli_query($connect, $query);
                  $nomor = 1;
                  while($row = mysqli_fetch_array($hasil)){
                  $id   = $row["id"];
                  $soal      = $row["soal"];
                  // $pilihan_a = $row["A"];
                  // $pilihan_b = $row["B"];
                  // $pilihan_c = $row["C"];
                  // $pilihan_d = $row["D"];                     
                ?>
                      <!-- class="tab-pane" id="<?php echo $nomor; ?>"               -->
                  <div >
                    <div class="col-md-12 ">

                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                          </div>
                          <div class="col-md-4">
                            <h1 class="lead"><?php echo $soal; ?></h1>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <!-- <label for="exampleInputEmail1">Email address</label> -->
                              <input type="text" name="pilihan[<?php echo $id;?>]" value="" class="form-control"  placeholder="Angka 1, Angka 2">
                            </div>
                          </div>
                         <!--  <td>
                            <h1 class="lead"><?php echo $soal; ?></h1>
                          </td> -->
                        </div>
                      
                      <!-- <table>
                        <tr>
                          <td class="align-text-center">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <h1 class="lead"><?php echo $soal; ?></h1>
                          </td>
                          <td>
                            <div class="form-group"> -->
                              <!-- <label for="exampleInputEmail1">Email address</label> -->
                         <!--      <input type="text" name="pilihan[<?php echo $id;?>]" value="" class="form-control"  placeholder="Angka 1, Angka 2">
                            </div>
                          </td> -->
                         <!--  <td>
                            <h1 class="lead"><?php echo $soal; ?></h1>
                          </td> -->
                      <!--   </tr>
                      </table> -->

                       <!--  <tr>
                        <div class="form-group"> -->
                          <!-- <label for="exampleInputEmail1">Email address</label> -->
                          <!-- <input type="text" name="pilihan[<?php echo $id;?>]" value="" class="form-control"  placeholder="Jawab disini">
                        </div>
                        </tr> -->

                        <!-- <tr>
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
                        </tr> -->
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
                             alert('Maaf, Waktu pengerjaan untuk soal subtest ketiga ini telah habis, lanjut ke subtest berikutnya.'), window.location = 'index.php'; 
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