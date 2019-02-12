    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SIPAKMI
        <!-- <small>SIPAKMI</small></br> -->
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Ubah Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Password</h3>
              </div>
                
              <div class="box-body">
                <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label"></label>

                    <div class="col-sm-7">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label"></label>

                    <div class="col-sm-7">
                      <input type="hidden" class="form-control" name="username" value="<?php echo $data['username']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Password Lama</label>

                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" class="form-control" name="pass_lama" placeholder="Password Lama">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Password Baru</label>

                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" class="form-control" name="pass_baru" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Password Baru">
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label" >Ulangi Password</label>

                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" class="form-control" name="pass_conf" placeholder="Ulangi Password">
                    </div>
                    </div>
                  </div>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                  <div class="form-group"></div>
              <!--     <div class="form-group"></div> -->
                    <div class="box-footer">
                      <a class="btn btn-default" href="javascript:history.back()"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a>
                      <button type="submit" name="submit" class="btn btn-info pull-right"><i class="fa  fa-save"></i> &nbsp;Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

      <?php

      if (isset($_POST['submit'])) {

        $username         = $_POST['username'];
        $pass_lama        = $_POST['pass_lama'];
        $pass_baru        = $_POST['pass_baru'];
        $pass_conf        = $_POST['pass_conf'];
        
          $query = "SELECT * FROM tb_admin WHERE username ='$username' AND password='$pass_lama'";
          $sql = mysqli_query($connect, $query);
          $hasil = mysqli_num_rows($sql);
          if(!$hasil >= 1){
            echo "<script language='javascript'>window.alert('Password lama tidak sesuai !, Silahkan ulang kembali.'), window.location = '?page=ubah-pass';</script>";
          }
          // pass baru & confirm tidak boleh kosong 
          elseif (empty($_POST['pass_baru']) || empty($_POST['pass_conf'])) {
            echo "<script language='javascript'>window.alert('Password baru dan Ulangi password tidak boleh kosong !, Silahkan ulang kembali.'), window.location = '?page=ubah-pass';</script>";
          }
          // pass baru & confirm tidak boleh beda 
          elseif (($_POST['pass_baru']) != ($_POST['pass_conf'])) {
            echo "<script language='javascript'>window.alert('Password baru dan Ulangi password tidak sama !, Silahkan ulang kembali.'), window.location = '?page=ubah-pass';</script>";
          }

          else {
            $query = "UPDATE tb_admin SET password='".$pass_baru."' WHERE username='".$username."'";
            $sql = mysqli_query($connect, $query); 

            if($sql){ 
              
              echo "<script language='javascript'>window.alert('Perubahan Selesai, Password berhasil di Ubah.'), window.location = '?page=home';</script>"; 
            }else{
             
              echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=ubah-pass';</script>";
            }
          }
        }
          
        ?>