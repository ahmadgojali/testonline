    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Pakar
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Tambah Pakar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
          <div id ="text_dumet" class="col-md-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Pakar</h3>
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
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
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
                      <input type="text" class="form-control" id="username" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Username" required>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Password" required>
                    </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin &nbsp;*</label>
                  <div class="col-sm-7">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" 
                     class="flat-red"> &nbsp;Laki-laki &nbsp;
                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" 
                     class="flat-red"> &nbsp;Perempuan
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                      </div>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Lahir &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tanggal_lahir" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" required>
                    </div>
                  </div>
                   
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@gmail.com" placeholder="xyz@gmail.com" required>
                    </div>
                    </div>
                  </div>
                   <div class="form-group">
                  <label class="col-sm-3 control-label">Status &nbsp;*</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="status" id="status" style="width: 100%;" required>
                      <option value="">- Pilih -</option>
                      <option value="Administrator">Administrator</option>
                      <option value="Pakar">Pakar</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="no_tlp" class="col-sm-3 control-label">No Telepon &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="tel" class="form-control" id="no_telp" name="no_telp" pattern="^\d{12}$" title="Hanya 12 karakter numerik" placeholder="Nomor Telepon" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="foto" class="col-sm-3 control-label">Foto &nbsp;**</label>

                  <div class="col-sm-7">
                    <input type="file" class="form-control" id="foto" name="foto">
                 <!--  <div style="padding-top:5px">
                    <input type="checkbox" class="flat-red" name="upload_foto" value="true"> &nbsp;Ceklis jika ingin mengupload foto</br>
                  </div> -->
                  </div>
                  <!-- <div>
                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto</br>
                  </div> -->
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label">Alamat &nbsp;*</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat ..." required></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label"></label>
                  <div class="col-sm-7">
                    <p align="left">* &nbsp;&nbsp;Wajib di Isi (Required)</p>
                    <p align="left">** &nbsp;&nbsp;Tidak Wajib di Isi (Optional)</p>
                  </div>
                </div>
             
                    <div class="box-footer">
                      <button type="reset" name="reset" class="btn btn-default"><i class="fa  fa-refresh"></i> &nbsp;Batal</button>
                      <button type="submit" name="submit" class="btn btn-info pull-right" onClick="ValidateForm(this.form)"><i class="fa  fa-save"></i> &nbsp;Simpan</button>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>


          </div>
        </section>

        <script LANGUAGE="JavaScript">
          function ValidateForm(form){
          ErrorText= "";
          if ( ( form.jenis_kelamin[0].checked == false ) && ( form.jenis_kelamin[1].checked == false ) ) 
          {
          alert ( "Pilih jenis kelamin terlebih dahulu Laki-laki atau Perempuan" ); 
          return false;
          }
          if (ErrorText= "") { form.submit() }
          }
        </script>

        <?php
        include "../config/koneksi.php";
        if (isset($_POST['submit'])) {

          $nama           = ucwords($_POST['nama']);
          $tempat_lahir   = ucwords($_POST['tempat_lahir']);
          $tanggal_lahir  = $_POST['tanggal_lahir'];
          $email          = $_POST['email'];
          $jenis_kelamin  = $_POST['jenis_kelamin'];
          $no_telp        = $_POST['no_telp'];
          $username       = ucwords($_POST['username']);
          $password       = ucwords($_POST['password']);
          $status         = $_POST['status'];
          $alamat         = ucwords($_POST['alamat']);
          $foto           = $_FILES['foto']['name'];

          function ubahtanggal($tanggal_lahir){
            $pisah = explode('-', $tanggal_lahir);
            $array = array($pisah[2], $pisah[1], $pisah[0]);
            $satukan = implode('-', $array);
            return $satukan;
          }

          $tgl = ubahtanggal($tanggal_lahir);

        // Cek apakah user ingin mengubah fotonya atau tidak
        if(!empty($foto)){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
          // Ambil data foto yang dipilih dari form
          // $foto = $_FILES['foto']['name'];
          $tmp  = $_FILES['foto']['tmp_name'];
          
          // Set path folder tempat menyimpan fotonya
          $path = "../assets/images/pakar/".$foto;

          // Proses upload
          if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            
            $query = ("INSERT INTO tb_admin (nama, tempat_lahir, username, password, tanggal_lahir, jenis_kelamin, status, foto, email, alamat, no_telp, tanggal ) 
                      VALUES ('$nama','$tempat_lahir','$username','$password','$tgl','$jenis_kelamin','$status','$foto','$email','$alamat','$no_telp', now())");
            $input = mysqli_query($connect, $query);

            if($input){ // Cek jika proses simpan ke database sukses atau tidak
              // Jika Sukses, Lakukan :
             echo "<script language='javascript'>window.alert('Proses Complete, Data berhasil di simpan.'), window.location = '?page=pakar';</script>";
            
            }else{
              // Jika Gagal, Lakukan :
             echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=tambah_pakar';</script>";
            }

          }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "<script language='javascript'>window.alert('Maaf, Foto gagal untuk diupload.'), window.location = '?page=tambah_pakar';</script>";
          }

        }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
          // Proses ubah data ke Database
           $query = ("INSERT INTO tb_admin (nama, tempat_lahir, username, password, tanggal_lahir, jenis_kelamin, status, email, alamat, no_telp, tanggal ) 
                      VALUES ('$nama','$tempat_lahir','$username','$password','$tgl','$jenis_kelamin','$status','$email','$alamat','$no_telp', now())");
            $input = mysqli_query($connect, $query);

          if($input){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo "<script language='javascript'>window.alert('Proses Complete, Data berhasil di simpan.'), window.location = '?page=pakar';</script>";
          }else{
            // Jika Gagal, Lakukan :
            echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=tambah_pakar';</script>";
          }
        }
      }
       
  ?>

   