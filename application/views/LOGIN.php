	<?php 
  $this->load->view('nav'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css">


<body>
	<main>
		<!--Bar Menu Atas-->
	<div class="container">
		
	<!--Forum pengisian username dan pass, untuk bisa mengakses ApoLine-->
	
	<div class="forum">
    <div class="row">
      <div class="col-md-5 mx-auto col-sm-5 col-xs-12 textform formlogin">
        <h3 class="text-center">WELCOME TO APOLINE</h3>
        <?php 
          echo form_open("C_Akun/check"); 
        ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" />
          </div>
          <p>
            Tidak mempunyai Akun? 
            <a href="<?php echo site_url('C_Akun/daftar_view')?> ">Daftar disini.</a>
          </p>
		  <a href="#" data-toggle="modal" data-target="#admin">Admin</a>
          <button type="submit" class="btn btn-success btn-block">MASUK</button>
        </form> 
      </div>
		
		<div id="admin" class="modal fade" role="dialog">
                        
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Login Admin</h4>
                                </div>
                                <?php echo form_open("C_admin/check"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Username</label>
            							<input class="form-control" type="text" name="username" placeholder="Username" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
            							<input class="form-control" type="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                         			<input type="submit" data-dismiss="modal" class="btn btn-danger"  value="close">
                                    <input type="submit" class="btn btn-danger" name="logadmin" value="Login">
									
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
		
      <div class="col-md-7 mx-auto col-sm-7 col-xs-12 text-center"  >
        <p class="textform-1">ApoLine merupakan salah satu Aplikasi yang bisa mempermudah dan membantu anda dalam pembelian obat.</p>
        <img src="<?php echo base_url();?>gambar/Drug-basket-icon.png" width="200" height="200" alt="">
      </div>
    </div>
  </div>	 
</div>
</main>
</body>
<?php 
$this->load->view('footer'); 
if($this->session->flashdata('message') == 'Gagal Login'){
  echo "<script>alert('Username or Password is Incorrect.');</script>";
}
?>