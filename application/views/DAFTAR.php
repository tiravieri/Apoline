<?php
  $this->load->view('nav');
?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/daftar.css">


<body>
	<main>
		<!--Bar Menu Atas-->
	<div class="container">
		
	<!--Forum pengisian username dan pass, untuk bisa mengakses ApoLine-->
	
	<div class="forum">
    <div class="row">
      <div class="col-md-5 mx-auto col-sm-5 col-xs-12 textform formdaftar">
        <h3 class="text-center">SIGN UP</h3>
        <form action="<?php echo site_url('C_Akun/add'); ?>" method="POST">
          <div class="form-group">
          <div class="form-group">
            <label for="password">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required/>
          </div>
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email@gmail.com" required />
          </div>
          <div class="form-group">
            <label for="password">Alamat</label>
            <input class="form-control" type="text" name="alamat" placeholder="Alamat" required/>
          </div>
          
          <p>
            Punya Akun? <a href="<?php echo site_url('C_Akun/index') ?>">Login disini.</a>
          </p>

          <p>
            <button type="submit" class="btn btn-success btn-block">DAFTAR</button>
          </p>
          
        </form> 
      </div>
      <div class="col-md-7 mx-auto col-sm-7 col-xs-12 text-center"  >
        <p class="textform-1">ApoLine merupakan salah satu Aplikasi yang bisa mempermudah dan membantu anda dalam pembelian obat.</p>
        <img src="<?php echo base_url();?>gambar/Drug-basket-icon.png" width="200" height="200" alt="">
      </div>
    </div>
  </div>

	 
</div>
</main>
<script src="./js/jquery-1.11.3.min.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>
<?php 
$this->load->view('footer'); ?>