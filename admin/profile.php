<style type="text/css">
.bulat {
  border-radius: 50%;
  /*opacity: 0.5;*/
  border-top: 2px solid #cf2031;
  border-right: 2px solid #0f7dc8;
  border-bottom: 2px solid #2eb31a;
  border-left: 2px solid#eab823; 
  width:120px;
  height:120px;
}
</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SIPAKMI
        <!-- <small>SIPAKMI</small></br> -->
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-info">
            <div class="box-body box-profile"><!-- src="../assets/images/<?php echo @$data['foto'];?>" -->
              <?php
                if (($data['foto']) == NULL) {
                  echo '<img class="profile-user-img img-responsive bulat" src="../assets/images/pakar/kosong.png" alt="User profile picture"></br>';
                  
                }else{
                  echo  "<img class='profile-user-img img-responsive bulat' src='../assets/images/pakar/$data[foto]' alt='User profile picture'></br>";
                  
                }
                ?>
              <h3 class="profile-username text-center"><?php echo $data['nama'];?></h3>
              <p class="text-muted text-center"><?php echo $data['status'];?></p>
              <button data-toggle="modal" data-target="#ModalAdd" class="btn btn-default btn-block"><b>Ganti Foto</b></button><br>
              <!-- <a data-toggle="modal" data-target="#ModalAdd" class="btn btn-info btn-sm" href="#"><i class="fa fa-lg fa-user-plus"></i> Tambah</a>&nbsp; -->
              
              <!-- <img class="profile-user-img img-responsive bulat" src='../assets/images/man.png' alt='User profile picture'></br> -->
              <!-- Modal Popup untuk Tambah--> 
              <div id="ModalAdd" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"> Upload Foto</h4>
                    </div>
                    <div class="modal-body">
                      <form action="upload-foto.php" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                          <label for="foto">Pilih Foto Profile</label>
                          <input type="hidden"  class="form-control" id="id" name="id" value="<?php echo $data['id']?>">
                          <input type="file"  class="form-control" id="foto" name="foto" required>
                        </div>                                 
                    </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name ="tambah" value="Simpan"><i class="ace-icon fa fa-upload"></i> Upload</button> 
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ace-icon fa fa-undo"></i> Batal</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <?php
                  if (($data['jenis_kelamin']) == "Laki-laki") {
                    echo "<i class='fa fa-male'></i><b> &nbsp;</b> <a class='pull-right'>$data[jenis_kelamin]</a>";
                  }else{
                    echo "<i class='fa fa-female'></i><b> &nbsp;</b> <a class='pull-right'>$data[jenis_kelamin]</a>";
                  }
                  ?>
                </li>
               
                <?php $tanggal  = $data['tanggal_lahir'];?>
                    
                <li class="list-group-item">
                  <i class="fa fa-calendar-check-o"></i><b> &nbsp;</b> <a class="pull-right"><?php echo date("l, d F Y ", strtotime($tanggal)) ?></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-map-marker"></i><b> &nbsp;</b> <a class="pull-right"><?php echo $data['tempat_lahir'];?></a>
                </li>
                 <li class="list-group-item">
                  <i class="fa fa-envelope"></i><b> &nbsp;</b> <a class="pull-right"><?php echo $data['email'];?></a>
                </li>
                 <li class="list-group-item">
                  <i class="fa fa-phone"></i><b> &nbsp;</b> <a class="pull-right"><?php echo $data['no_telp'];?></a>
                </li>
              </ul>

              <!-- <button class="btn btn-primary btn-block"><b>Profile</b></button> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
          <div id ="text_dumet" class="col-md-9">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Identitas Diri</h3>
              </div>
                
              <div class="box-body">
                <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
                  <div class="form-group">
                    <label for="id" class="col-sm-3 control-label"></label>
                    <div class="col-sm-7">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $data['nama']?>" required>
                    </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" 
                    <?php if($data['jenis_kelamin']=="Laki-laki"){ echo "checked";} ?> class="flat-red"> &nbsp;Laki-laki &nbsp;
                     <input type="radio" name="jenis_kelamin" value="Perempuan" 
                     <?php if($data['jenis_kelamin']=="Perempuan"){ echo "checked";} ?> class="flat-red"> &nbsp;Perempuan
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                      </div>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir']?>" required>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Lahir</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <?php $tgl = $data['tanggal_lahir'];?>
                      <input type="text" name="tanggal_lahir" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" value="<?php echo date("d-m-Y", strtotime($tgl)) ?>" required>
                    </div>
                  </div>
                   
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" value="<?php echo $data['email']?>" required>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_tlp" class="col-sm-3 control-label">No Telepon</label>
                  <div class="col-sm-7">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?php echo $data['no_telp']?>" required>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat ..." required><?php echo $data['alamat']?></textarea>
                  </div>
                </div>
                 
                    <div class="box-footer">
                      <a class="btn btn-default" href="?page=home"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a>
                      <button type="submit" name="submit" class="btn btn-info pull-right"><i class="fa  fa-save"></i> &nbsp;Simpan</button>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>


          </div>
        </section>

      <?php
      include "../config/koneksi.php";
      if (isset($_POST['submit'])) {

        $id             = $_POST['id'];
        $nama           = ucwords($_POST['nama']);
        $tempat_lahir   = ucwords($_POST['tempat_lahir']);
        $tanggal_lahir  = $_POST['tanggal_lahir'];
        $email          = $_POST['email'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $no_telp        = $_POST['no_telp'];
        $alamat         = ucwords($_POST['alamat']);

         function ubahtanggal($tanggal_lahir){
          $pisah = explode('-', $tanggal_lahir);
          $array = array($pisah[2], $pisah[1], $pisah[0]);
          $satukan = implode('-', $array);
          return $satukan;
        }

        $tgl = ubahtanggal($tanggal_lahir);
        
       $query = "UPDATE tb_admin SET nama='".$nama."', tempat_lahir='".$tempat_lahir."',tanggal_lahir='".$tgl."',email='".$email."', jenis_kelamin='".$jenis_kelamin."', no_telp='".$no_telp."', alamat='".$alamat."' WHERE id='".$id."'";
        $sql = mysqli_query($connect, $query);
        if($sql){ 
          echo "<script language='javascript'>window.alert('Update Complete, Profil berhasil di Perbaharui.'), window.location = '?page=profile' </script>";
        }else{
          
          echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=profile' </script>";
        }
      }
          
        ?>
