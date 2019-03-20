	<?php
   
  $lokasi_file = $_FILES['foto']['tmp_name'];
  $tipe_file   = $_FILES['foto']['type'];
  $nama_file   = $_FILES['foto']['name'];
  $direktori   = ".assets/images/$nama_file";

  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 

    $koneksi = koneksi_db();
    $sql = "'INSERT INTO member '.'(foto) '.'VALUES ('$nama_file')'";
    $aksi = mysqli_query($koneksi,$sql);
	  
    if (!$aksi) {
      echo "maaf gagal memasukan gambar";
    }else{
      echo "gambar berhasil di upload<br>";

    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
   
   
   
?>