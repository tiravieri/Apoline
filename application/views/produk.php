<!-- 1301160464 -->
	
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/produk.css">


<body>
	<div class="container-fluid">
		<div class="row reg">
			<div class="col-md-9">
			<div class="row">
			<?php foreach($obat as $value) {?>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 kotak">
				<a href="<?php echo site_url('C_produk/getinfo/'.$value['id_obat'])?>">
					<img src="<?php echo base_url();?>image/<?php echo $value['image']?>">
					<div class="label">
						<div class="label_txt"><?php echo $value['nama_obat']?></div>
						<div class="label_harga">Rp. <?php echo $value['harga']?></div>
					</div>
				</a>
				<a type="button" class="btn btn-info" href="<?php echo site_url('C_produk/getinfo/'.$value['id_obat'])?>">Detail</a>
				
			</div>
			<?php } ?>
		</div>
		</div>
		
		<div class="col-xs-10 col-sm-10 col-md-7 col-lg-2 kotak3">
			<img src="<?php echo base_url();?>gambar/search.png">
			<h3>Tidak Menemukan Obat?</h3>
			<p>Request obat anda disini dan kami akan mengirimkan info kepada anda</p>
			
			<a class="btn btn-info " href="" data-toggle="modal" data-target="#request">Request</a>
		</div>
		</div>
		<div class="row page">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
		<div id="request" class="modal fade" role="dialog">
                        
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                   <center> <h4 class="modal-title">Request</h4> </center>
                                </div>
                                <?php echo form_open("C_produk/reqobat"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Nama Obat</label>
            							<input class="form-control" type="text" name="namaobat"  required/>
                                    </div>
                                   
									
                                </div>
								
								
								
                                <div class="modal-footer">
                         			<input type="submit" data-dismiss="modal" class="btn btn-sm btn-danger"  value="close">
                                     <input type="submit" class="btn btn-primary" name="edit" value="Kirim">
									
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
	</div>

</body>
</html>