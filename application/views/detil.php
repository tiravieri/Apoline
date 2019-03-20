<!doctype html>
<!-- 1301160464 -->
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url();?>css/detilproduk.css">
</head>
	
	

<body>
	<div class="container-fluid">
		<div class="col-md-10 mx-auto">
			<div class="row reg">
			<div class="col-md-4 kotak">
				<img src="<?php echo base_url();?>image/<?php echo $obat['image']?>">
			</div>
			
			<div class="col-md-6 kotak1">
				<h2><?php echo $obat['nama_obat']?></h2>
				<p><?php echo $obat['keterangan']?></p>
				<div class="labelharga">Rp. <?php echo $obat['harga'] ?></div>
				
				<a class="btn btn-info " href="" data-toggle="modal" data-target="#tambahkeranjang">Tambah ke Keranjang</a>
			</div>
		</div>
			<div id="tambahkeranjang" class="modal fade" role="dialog">
                        
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                   <center> <h4 class="modal-title">Beli</h4> </center>
                                </div>
                                <?php echo form_open("C_produk/tambah"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Nama Obat</label>
            							<p><?php echo $obat['nama_obat']?></p>
										<input class="form-control" type="hidden" name="namaobat" value="<?php echo $obat['nama_obat']?>"  required/>
                                    </div>
                                   
									<div class="form-group">
                                        <label for="name">Harga</label>
            							<p><?php echo $obat['harga']?></p>
										<input class="form-control" type="hidden" name="harga" value="<?php echo $obat['harga']?>"  required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="name">Jumlah</label>
            							<input class="form-control" type="text" name="jumlah"  required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="name">Tujuan Pengiriman</label>
            							<input class="form-control" type="text" name="alamat" value="<?php echo $member['alamat']?>" required/>
                                    </div>
									
									
                                </div>
								
								
								
                                <div class="modal-footer">
                         			<input type="submit" data-dismiss="modal" class="btn btn-sm btn-danger"  value="close">
                                     <input type="submit" class="btn btn-primary" name="edit" value="Beli">
									
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
		
		</div>
		
		<div class="col-md-10 mx-auto kotak1">
			<table>
				<colgroup><col width="25%">
				<col>
				</colgroup>
				<tbody>
								   <tr class="first odd">
						<th class="label">Cara Pakai</th>
						<td class="data last"><?php echo $obat['cara']?></td>
					</tr>
								   <tr class="even">
						<th class="label">Penyajian</th>
						<td class="data last"><?php echo $obat['penyajian']?></td>
					</tr>
								   <tr class="odd">
						<th class="label">Khasiat</th>
						<td class="data last"><?php echo $obat['indikasi']?></td>
					</tr>
								   <tr class="even">
						<th class="label">Efek Samping</th>
						<td class="data last"><?php echo $obat['efek']?></td>
					</tr>

				</tbody>
			</table>
		</div>
		
		<div class="container">
			<div class="row reg2">
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/paper-bill.png">
					<label>CASH ON DELIVERY</label>	
					<p>The Internet Tend To Repeat</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/clock.png">
					<label>OPENING ALL WEEK</label>	
					<p>8am - 9pm</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/undo-button.png">
					<label>7 DAYS RETURN</label>	
					<p>Making It Look Like Readable</p>
				</div>
				
				<div class="col-md-3 kotak2">
					<img src="<?php echo base_url();?>gambar/phone-contact.png">
					<label>Contact Us</label>	
					<p>Feel Free To Ask</p>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>