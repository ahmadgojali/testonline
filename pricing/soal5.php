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
    if (isset($_SESSION["mulai5"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai5"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai5"]  = time();
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
          <h4 class="my-0 font-weight-normal text-center">Tes Arwana Subtest V</h4>
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
                            <h1 class="lead">Steve  : How do you go to fresh market? <br> Ronnie  : We … the bus to fresh market</h1>
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
                            <input type="radio" name="pilihan1" value="A" class="icek" >
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Ridden</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="B" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Rode</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="C" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Riding</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan1" value="D" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Ride</span>
                          </label>
                        </div>
                        </tr>
                        <br>
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
                            <h1 class="lead">When …  you … a shower?</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="A" class="icek" >
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Do, took</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="B" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Do, taken</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="C" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Do, take</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan2" value="D" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Do, taking</span>
                          </label>
                        </div>
                        </tr>
                        <br>
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
                            <h1 class="lead">Tom and I … … together.</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="A" class="icek" >
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Don’t surf</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="B" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Do surfing</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="C" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Do surfs</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan3" value="D" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Don’t surfing</span>
                          </label>
                        </div>
                        </tr>
                        <br>
                     
                        <tr>
                          <h1 class="lead"><b>Passage A</b></h1>
                        </tr>
                        <tr>
                          <h1 class="lead text-justify"><b>(1) </b> &nbsp;&nbsp;  Objective historians see their role as that of neutral judge, one who must never become an advocate or, worse, propagandist. Their conclusions should display the judicial qualities of balance and evenhandedness. As with the judiciary, these qualities require insulation from political considerations, and avoidance of partisanship or bias. Thus objective historians must purge themselves of external loyalties; their primary allegiance is to objective historical truth and to colleagues who share a commitment to its discovery.</b></h1>
                        </tr>
                        <tr>
                          <h1 class="lead text-justify"><b>(3) </b> &nbsp;&nbsp;  Central to the historian’s profession and scholarship has been the idea of objectivity. The assumptions upon which this ideal rests include a commitment to the reality of the past, a sharp separation between fact and value, and above all, a distinction between history and fiction. </b></h1>
                        </tr>
                         <tr>
                          <h1 class="lead text-justify"><b>(2) </b> &nbsp;&nbsp;   According to this ideal, historical facts are prior to and independent of interpretation: the value of and interpretation should be judged by how well it accounts for the fact that successive generation of historians have ascribed different meanings to past events does not mean, as relatives historians claim, that the events themselves lack fixed or absolute meanings.</b></h1>
                        </tr>

                           <tr>
                          <h1 class="lead"><b>Passage B </b></h1>
                        </tr>
                        <tr>
                          <h1 class="lead text-justify"><b>(1)  </b> &nbsp;&nbsp;  Such arguments are often more faithful to the complexity of historical interpretation – more faithful even to the irreducible plurality of human perspectives – than exits that abjure position – taking altogether. The powerful argument is the highest fruit of the kind of thinking I would call objective, and in it neutrality plays no part. Authentic objectivity bears no resemblance to the television newscaster’s mechanical gesture of allocating the same number of second to both sides of a question, editorially splitting the difference between them, irrespective of their perceived.</b></h1>
                        </tr>
                        <tr>
                          <h1 class="lead text-justify"><b>(2) </b> &nbsp;&nbsp;  The very possibility of historical scholarship as an enterprise distinct from propaganda requires of its practitioners that self-discipline that enables them to do such things as abandon wishful thinking, assimilate bad news, and discard pleasing interpretations that fail elementary tests of evidence and logic. </b></h1>
                        </tr>
                         <tr>
                          <h1 class="lead text-justify"><b>(3) </b> &nbsp;&nbsp;  Yet objectivity, for the historian, should not be confused with neutrality. Objectivity is perfectly compatible with strong political commitment. The objective thinker does not value detachment as an end in itself but only as an indispensable means of achieving deeper understanding. In historical scholarship, the idea of objectivity is most compellingly embodied in the powerful argument – one that reveals by its every twist and turn its very respectful appreciation of the alternative arguments it rejects. Such a text attains power precisely because its author has managed to suspend momentarily his or her own perceptions so as to anticipate and take into account objections and alternative constructions-not those of straw men, but those that truly issue from the rival’s position, understood as sensitively and stated as eloquently as the rival could desire. To mount a telling attack on a position, one must first inhabit it. Those so habituated to their customary intellectual abode that they cannot even explore others can never be persuasive to anyone but fellow habitués.</b></h1>
                        </tr></br>
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
                            <h1 class="lead">The passage A above have been placed in a random order. Put them in correct order.</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="A" class="icek" >
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;1,2,3</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="B" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;2,3,1</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="C" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;3,2,1</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="D" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;2,1,3</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan4" value="E" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;3,1,2</span>
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
                            <h1 class="lead">The passage B above have been placed in a random order. Put them in correct order</h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="A" class="icek" >
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;1,2,3</span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="B" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;2,3,1</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="C" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;3,2,1</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="D" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;2,1,3</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan5" value="E" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;3,1,2</span>
                          </label>
                        </div>
                        </tr><br>
                        <!-- 6 -->
                        <table>
                        <tr>
                          <td class="align-text-top">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>" >
                            <!-- <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1> -->
                            <h1 class="lead">6. &nbsp;&nbsp;</h1>
                          </td>
                          <td>
                            <!-- <h1 class="lead"><?php echo $soal; ?></h1> -->
                            <h1 class="lead">Both passages identify which one of the following as a historical research </h1>
                          </td>
                        </tr>
                      </table>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="A" class="icek" >
                            <!-- <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?php echo $pilihan_a; ?></span> -->
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;The historian’s willingness to answer in detail all possible objections that might be made against his or her interpretation </span>

                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="B" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;The historian’s willingness to employ methodologies favored proponents of competing vies when evaluating evidence.</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="C" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;The historian’s willingness to accord respectful consideration to rival interpretation</span>
                          </label>
                        </div>
                        </tr>

                        <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="D" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;The historian’s willingness to relinquish favored interpretations in light of the discovery of facts inconsistent with them</span>
                          </label>
                        </div>
                        </tr>
                         <tr>
                        <div class="animated-radio-button">
                          <label>
                            <input type="radio" name="pilihan6" value="E" class="icek" >
                            <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;The historian’s willingness to borrow methods of analysis from other disciplines when evaluating evidence.</span>
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
                             alert('Waktu pengerjaan telah habis, Terimakasih atas partisipasi bapak/ibu untuk mengikuti tes ini, Hasil akan diumumkan seminggu setelah pengerjaan tes ini.'), window.location = 'selesai.php'; 
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