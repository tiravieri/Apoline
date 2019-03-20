<!DOCTYPE HTML>

<html>
	<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Elements - Introspect by TEMPLATED</title>
		
	
		
 
		<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

		<!-- Header -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand logo" href="#">Apoline
          <img src="<?php echo base_url();?>gambar/pil.png" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('C_admin/index')?>">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#admin">Tambah Obat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('C_keranjang/index')?>">Transaksi</a>
            </li>
          </ul>
        </div>
      </div>
      <div class ="btn-group">
        <a href="<?php echo site_url('C_Akun/logout') ?>"><button class="btn btn-outline-danger button">Logout</button></a>
      </div>
</nav>
</div>

	<div id="admin" class="modal fade" role="dialog">
                        
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Tambah Data Obat</h4>
                                </div>
                                <?php echo form_open_multipart("C_admin/add"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Nama Obat</label>
            							<input class="form-control" type="text" name="nama"  required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
            							<input class="form-control" type="text" name="harga"  />
                                    </div>
									
									<div class="form-group">
                                        <label for="ket">Ketrangan</label>
            							<input class="form-control" type="text" name="ket"  required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="ket">Cara</label>
            							<input class="form-control" type="text" name="cara"  required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="ket">Efek</label>
            							<input class="form-control" type="text" name="efek"  required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="ket">Penyajian</label>
            							<input class="form-control" type="text" name="penyajian"  required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="ket">Indikasi</label>
            							<input class="form-control" type="text" name="indikasi"  required/>
                                    </div>
									
            							<input type="file" name="image">
                                    
									
									
                                </div>
								
								
								
                                <div class="modal-footer">
                         			<input type="submit" data-dismiss="modal" class="btn btn-danger"  value="close">
                                    <input type="submit" class="btn btn-success" name="logadmin" value="Tambah">
									
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
	
<br>
<br>
<br>
</body>