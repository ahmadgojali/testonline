  <!-- <div class="container"> -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md text-center">
          <img class="mb-2" src="../assets/img/logo.png" alt="" width="30" height="30">
          <h6 class="d-block mb-3 text-muted">Copyright © 2019 PT Arwana Citramulia TBK. All Rights Reserved.</h6>
        </div>
        <!-- <div class="col-6 col-md">
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
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div> -->
    <!--     <div class="col-12 col-md text-center">
          <h5>Contact</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">PT ARWANA CITRAMULIA TBK</a></li>
            <li><a class="text-muted" href="#">SENTRA NIAGA PURI INDAH BLOK T2 NO. 24,</a></li>
            <li><a class="text-muted" href="#">KEMBANGAN SELATAN, JAKARTA 11610</a></li>
            <li><a class="text-muted" href="#">PHONE   : +62-21-58302363</a></li>
            <li><a class="text-muted" href="#">FAX     : +62-21-58302361</a></li>
            <li><a class="text-muted" href="#">EMAIL   :  INVESTOR@ARWANACITRA.COM</a></li>
            </li>
          </ul>
   
        </div> -->
      </div>
    </footer>
  <!-- container end -->
  </div>
</div>

<!-- Scroll to Top Button-->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-lg"></i>
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
 <script src="../assets/dist/jquery-3.3.1.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
<script src="../assets/dist/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="../assets/dist/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/dist/jquery.bootstrap.wizard.js"></script>

<!-- icheck -->
  <script src="../assets/dist/icheck/js/icheck.js?v=1.0.2"></script>
  <script>
    $(document).ready(function(){
      $('.icek').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '20%' // optional
      });
    });
  </script>

  <!-- back-to-top -->
  <script>
  $(document).ready(function(){
   $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      
      $('#back-to-top').tooltip('show');

  });
  </script>
