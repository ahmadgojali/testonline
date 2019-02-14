<?php
//set session untuk username yang logi
session_start();
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

<html>
<head>
<title>Javascript AutoSubmit Form Example</title>
<!-- Include CSS File Here-->
<link rel="stylesheet" href="3.css"/>
<!-- Include JS File Here-->
<!-- <script src="2.js"></script> -->
</head>
<body>
<div class="container">
<div class="main">
   <div class="col-md-3">
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div class="text-center">
              <div id='timer'></div>
            </div>      
          </div>
        </div>
      </div>
    </div>
<form action="success.html" method="post" id="form">
<h2>Javascript AutoSubmit Form Example</h2>
<span>Form will automatically submit in <b id="timer"></b>.</span>
<label>Name :</label>
<input type="text" name="name" id="name" placeholder="Name" />
<label>Email :</label>
<input type="text" name="email" id="email" placeholder="Valid Email" />
<label>Gender :</label>
<input type="radio" name="gender" value="Male" id="male" />
<label>Male</label>
<input type="radio" name="gender" value="Female" id="female" />
<label>Female</label>
<label>Contact No. :</label>
<input type="text" name="contact" id="contact" placeholder="Contact No." />
</form>
</div>
</div>
<!-- Script Timer -->
       <script type="text/javascript">
          $(document).ready(function() {
               /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik;
                * var menit;
                * var jam;
              */
              var detik   = 60;
              var menit   = 60;
              var jam     = 60;
                
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
                             clearTimeout();
                             // clearInterval(); 
                             /** Variable yang digunakan untuk submit secara otomatis di Form */
                             // frmSoal.submit(); 
                             alert('Maaf, Waktu pengerjaan untuk soal subtest kedua ini telah habis, lanjut ke subtest berikutnya.'); 
                             // document.frmSoal.submit();
                            document.getElementById("form").submit();
                             // submitform();
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