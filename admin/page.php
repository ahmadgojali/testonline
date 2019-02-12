<?php

$page = isset($_GET['page']) ? $_GET['page']: '';


if ($page=="home"){
  if(file_exists ("home.php")){
    include "home.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="jenis_penyakit"){
  if(file_exists ("t-jenispenyakit.php")){
    include "t-jenispenyakit.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="tambah_jenispenyakit"){
  if(file_exists ("form-tambah-jenispenyakit.php")){
    include "form-tambah-jenispenyakit.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="edit_jenispenyakit"){
  if(file_exists ("form-edit-jenispenyakit.php")){
    include "form-edit-jenispenyakit.php";
    }
    else{
      include "404.php";
      }
  }
  
elseif ($page=="penyakit"){
  if(file_exists ("t-penyakit.php")){
    include "t-penyakit.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="detail_penyakit"){
  if(file_exists ("form-detail-penyakit.php")){
    include "form-detail-penyakit.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="gejala_penyakit"){
  if(file_exists ("tambah-gejala-penyakit.php")){
    include "tambah-gejala-penyakit.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="tambah_penyakit"){
  if(file_exists ("form-tambah-penyakit.php")){
    include "form-tambah-penyakit.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="edit_penyakit"){
  if(file_exists ("form-edit-penyakit.php")){
    include "form-edit-penyakit.php";
    }
    else{
      include "404.php";
      }
  }
  
elseif ($page=="gejala"){
  if(file_exists ("t-gejala.php")){
    include "t-gejala.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="tambah_gejala"){
  if(file_exists ("form-tambah-gejala.php")){
    include "form-tambah-gejala.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="edit_gejala"){
  if(file_exists ("form-edit-gejala.php")){
    include "form-edit-gejala.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="basis_pengetahuan"){
  if(file_exists ("t-relasi.php")){
    include "t-relasi.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="hasil_diagnosa"){
  if(file_exists ("t-hasildiagnosa.php")){
    include "t-hasildiagnosa.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="detail_pasien"){
  if(file_exists ("form-detail-pasien.php")){
    include "form-detail-pasien.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="user"){
  if(file_exists ("t-user.php")){
    include "t-user.php";
    }
    else{
       include "404.php";
      }
  }

  elseif ($page=="detail_user"){
  if(file_exists ("form-detail-user.php")){
    include "form-detail-user.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="pakar"){
  if(file_exists ("t-pakar.php")){
    include "t-pakar.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="tambah_pakar"){
  if(file_exists ("form-tambah-pakar.php")){
    include "form-tambah-pakar.php";
    }
    else{
      include "404.php";
      }
  }

  elseif ($page=="detail_pakar"){
  if(file_exists ("form-detail-pakar.php")){
    include "form-detail-pakar.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="profile"){
  if(file_exists ("profile.php")){
    include "profile.php";
    }
    else{
       include "404.php";
      }
  }

elseif ($page=="ubah-pass"){
  if(file_exists ("ubah-pass.php")){
    include "ubah-pass.php";
    }
    else{
       include "404.php";
      }
  }

elseif ($page=="impor-jenis"){
  if(file_exists ("impor-jenis.php")){
    include "impor-jenis.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="impor-gejala"){
  if(file_exists ("impor-gejala.php")){
    include "impor-gejala.php";
    }
    else{
      include "404.php";
      }
  }

elseif ($page=="impor-penyakit"){
  if(file_exists ("impor-penyakit.php")){
    include "impor-penyakit.php";
    }
    else{
      include "404.php";
      }
  }

?>