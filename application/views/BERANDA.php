	<?php
		$this->load->view('nav_login');
	?>
	
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/beranda.css">

	<div class="container-fluid">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active" style="margin-top: 150px;">
    				 <center> <img class="d-block" width="50%" height="475px" src="<?php echo base_url();?>image/biru.png" alt="First slide"> </center> 
        				<div class="carousel-caption d-none d-md-block">
        				<h5>...</h5>
        				<p>...</p>
  						</div>
    			</div>
    		<div class="carousel-item" style="margin-top: 150px;">
      			<center> <img class="d-block " width="50%" height="475px" style="text-align: center;" src="<?php echo base_url(); ?>image/bodrex.jpg" alt="Second slide"> </center> 
    		</div>
    		<div class="carousel-item" style="margin-top: 150px;">
    			<center> <img class="d-block " width="50%" height="475px" style="text-align: center;" src="<?php echo base_url(); ?>image/obh apel.jpg" alt="Third slide"> </center> 
    		</div>
  			</div>
  			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<h3 style="color: gray;font-family: Comic Sans MS;font-size: 25px;">Paling Populer</h3>
			<div class="row reg2">
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>image/vermox.jpg">
					<h4>Obat Cacingan</h4>
					<p>393 Produk</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>image/sangobion.jpg">	
					<h4>Obat Darah</h4>
					<p>269 Produk</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>image/konidin.jpg">
					<h4>Obat Batuk</h4>
					<p>215 Produk</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>image/inza.JPG">
					<h4>Obat Demam</h4>
					<p>198 Produk</p>
				</div>

	<div class="container">
		<br>
		<br>
		<h3 style="color: gray;font-family: Comic Sans MS;font-size: 25px;">Obat Terbaru</h3>
			<div class="row reg2">
				<div class="col-md-4 kotak2">
					<img src="<?php echo base_url();?>image/neozep-forte-mandjur.png">
					<h4>Neozep Forte</h4>
					<p>Obat Flu</p>
				</div>

				<div class="col-md-4 kotak2">
					<img src="<?php echo base_url();?>image/bodrex.jpg">
					<h4>Bodrex</h4>
					<p>Obat Pusing</p>
				</div>

				<div class="col-md-4 kotak2">
					<img src="<?php echo base_url();?>image/neurobion forte.jpg">
					<h4>Neurobion</h4>
					<p>Obat Pegel-pegel</p>
				</div>

				<div class="col-md-4 kotak2">
					<img src="<?php echo base_url();?>image/DIAPET-600x600.jpg">
					<h4>Diapet</h4>
					<p>Obat Sakit Perut</p>
				</div>
				
				<div class="col-md-4 kotak2">
					<img src="<?php echo base_url();?>image/Scottâ€™s Emulsion .jpg">
					<h4>Scott Emulsion</h4>
					<p>Obat Peninggi Badan</p>
				</div>

				<div class="col-md-4 kotak2">
					<img src="<?php echo base_url();?>image/fitkom.jpg">
					<h4>Fitkom</h4>
					<p>Vitamin Anak</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<?php
		$this->load->view('footer');
	?>
