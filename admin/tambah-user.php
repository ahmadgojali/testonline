<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Tambah Data User
        <small>ARNA</small></br>
        <small>Arwana Citramulia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Tambah User</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

      <div class="row">
          <div id ="text_dumet" class="col-md-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah User</h3>
              </div>
                
              <div class="box-body">
                <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
                  <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama Lengkap &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                      </div>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" required  >
                      <!-- <input type="text" class="form-control" id="username" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Username" required> -->
                    </div>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"> &nbsp;Password</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-lock"></i>
                        </div>
                       <input type="text" class="form-control" id="password" name="password" readonly="">
                      </div>
                       <div >
                          <!-- <button id="generate" class="btn btn-default" > &nbsp;&nbsp;Generate Password</button>   -->
                          <!-- <span id="tampil">
                            &nbsp;&nbsp;&nbsp;&nbsp; Your Password : <?= $password; ?>
                          </span> -->
                        </div>
                    </div>
                  </div>
                   
                  <!-- <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required> -->
                      <!-- <input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Password" required> -->
                   <!--  </div>
                    </div>
                  </div> -->
                 
                 <!--  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin &nbsp;*</label>
                  <div class="col-sm-7">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" 
                     class="flat-red"> &nbsp;Laki-laki &nbsp;
                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" 
                     class="flat-red"> &nbsp;Perempuan
                  </div>
                  </div> -->
                 <!--  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                      </div>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Lahir &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tanggal_lahir" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" required>
                    </div>
                  </div>
                   
                  </div> -->
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" autocomplete="off" required>
                      <!-- <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@gmail.com" placeholder="xyz@gmail.com" required> -->
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="umur" class="col-sm-3 control-label">Umur &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur Anda" autocomplete="off" required>
                    </div>
                    </div>
                  </div>
                  <!--  <div class="form-group">
                  <label class="col-sm-3 control-label">Status &nbsp;*</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="status" id="status" style="width: 100%;" required>
                      <option value="">- Pilih -</option>
                      <option value="Administrator">Administrator</option>
                      <option value="Pakar">Pakar</option>
                    </select>
                  </div>
                </div> -->
                <div class="form-group">
                    <label for="no_telp" class="col-sm-3 control-label">No Telepon &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" autocomplete="off" required>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                    <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-graduation-cap"></i>
                      </div>
                      <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir"  autocomplete="off" required>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="foto" class="col-sm-3 control-label">Foto &nbsp;**</label>

                  <div class="col-sm-7">
                    <input type="file" class="form-control" id="foto" name="foto"> -->
			                 <!--  <div style="padding-top:5px">
			                    <input type="checkbox" class="flat-red" name="upload_foto" value="true"> &nbsp;Ceklis jika ingin mengupload foto</br>
			                  </div> -->
                  <!-- </div> -->
			                  <!-- <div>
			                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto</br>
			                  </div> -->
                <!-- </div> -->
                <!-- <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label">Alamat &nbsp;*</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat ..." required></textarea>
                  </div>
                </div> -->
                <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label"></label>
                  <div class="col-sm-7">
                    <p align="left">* &nbsp;&nbsp;Wajib di Isi (Required)</p>
                    <p align="left">** &nbsp;&nbsp;Tidak Wajib di Isi (Optional)</p>
                  </div>
                </div>
             
                    <div class="box-footer">
                      <button type="reset" name="reset" class="btn btn-default"><i class="fa  fa-refresh"></i> &nbsp;Reset</button>
                      <button type="submit" name="submit" class="btn btn-info pull-right" onClick="ValidateForm(this.form)"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>


          </div>
        </section>

		<?php include 'templates/footer.php'; ?>
    

       <?php
        include "../config/koneksi.php";
        if (isset($_POST['submit'])) {

          $validasi       = 0;
          $nama           = ucwords($_POST['nama']);
          $email          = $_POST['email'];
          $username       = ucwords($_POST['username']);
          // $password       = ucwords($_POST['password']);
          $password       = $_POST['password'];
          $umur       	  = ucwords($_POST['umur']);
          $no_telp        = $_POST['no_telp'];
          $pendidikan     = ucwords($_POST['pendidikan']);

          // function randomPassword() {
          //     $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
          //     $pass = array(); //remember to declare $pass as an array
          //     $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
          //     for ($i = 0; $i < 8; $i++) {
          //         $n = rand(0, $alphaLength);
          //         $pass[] = $alphabet[$n];
          //     }
          //     return implode($pass); //turn the array into a string
          // }

          // $password = randomPassword();


	      // Proses simpan data ke Database
	      $query = ("INSERT INTO user (nama, username, password, email, umur, no_telp, pendidikan, validasi) VALUES ('$nama','$username' ,'$password','$email', '$umur', '$no_telp', '$pendidikan', '$validasi')");
	      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	        // Jika Sukses, Lakukan :
	        echo "<script language='javascript'>window.alert('Proses Complete, Data berhasil di simpan.'), window.location = 'data-user.php';</script>"; // Redirect ke halaman index.php
	      }else{
	        // Jika Gagal, Lakukan :
	        echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = 'data-user.php';</script>";
	      }
         

       }
       
  ?>
