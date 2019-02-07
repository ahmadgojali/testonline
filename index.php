<?php include 'template/header.php'; ?>

  <div class="content-wrapper login-page">
    <div class="container">
      <!-- Content Header (Page header) -->
     <!--  <section class="content-header">
        <h1>
          Tes Online
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section> -->

      <!-- Main content -->
      <section class="content">
        <!-- <div class="row">
            <div class="col-md-5">
              <?php 
              if(isset($_GET['action'])){
                if($_GET['action'] == "gagal"){
                 echo "<div class='alert alert-warning alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      Login gagal, masukkan username dan password anda dengan benar
                      <br />
                  </div>";
               }
              }
              ?>
            </div>
        </div> -->
       
         <div class="row">
           <div class="col">
              <div class="login-box">
                <div class="login-logo">
                  <a href="#"><b>Asesmen</b> Online</a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                  <p class="login-box-msg">Sign in to start your session</p>

                  <form action="login-user.php" method="post" enctype="multipart/form-data">
                    <div class="form-group has-feedback">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                      <div class="col-xs-8">
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox"> Remember Me
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-xs-4">
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>

                  <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                      Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                      Google+</a>
                  </div>
                  <!-- /.social-auth-links -->

                  <a href="#">I forgot my password</a><br>
                  <a href="register.html" class="text-center">Register a new membership</a>

                </div>
                <!-- /.login-box-body -->
              </div>
              <!-- /.login-box -->
           </div>
         </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include 'template/footer.php'; ?>