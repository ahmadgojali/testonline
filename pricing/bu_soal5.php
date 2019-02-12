<!-- soal -->
    <div class="col-md-9">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Tes 5 ( Soal Bahasa Inggris )</h4>
        </div>
        <div class="card-body">
          <form action="hasil_la_mp.php" id="frmSoal" method='POST' > 
            <?php
            
              include '../config/koneksi.php';                    
             
              $query = "SELECT * FROM soal5 order by id ASC";
              $hasil = mysqli_query($connect, $query);
              $nomor = 1;
              while($row = mysqli_fetch_array($hasil)){
              $id         = $row["id"];
              $pernyataan = $row["pernyataan"];
              $soal       = $row["soal"];
              $pilihan_a  = $row["pilihan_a"];  
              $pilihan_b  = $row["pilihan_b"];
              $pilihan_c  = $row["pilihan_c"];
              $pilihan_d  = $row["pilihan_d"];                     
              $pilihan_e  = $row["pilihan_e"];                     
              $jawaban    = $row["jawaban"];                     
            ?>
                     
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