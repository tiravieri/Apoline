<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Keranjang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style>
		table{
			padding-top: 50%;
		}
	</style>
</head>

	<?php $this->load->view('nav_login'); ?>
<body>
	<div class="container">
		<div class="col-lg-12 ml-auto mr-auto" style="margin-top: 10%">
			<table class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
              <tr class="thead-light">
                    <th>No Pembelian</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
				  	<th>Alamat</th>
				  	<th>Total</th>
				  	<th>Action</th>
              </tr>
			</thead>
				
			<tbody>
			  	<?php foreach($ker as $value) {?>
				<tr class="table-primary">
						<td><?php echo $value['id_beli'];?></td>
						<td><?php echo $value['nama_obat'];?></td>
						<td><?php echo $value['harga']; ?></td>
						<td><?php echo $value['jumlah']; ?></td>
						<td><?php echo $value['alamat']; ?></td>
						<td><?php echo $value['total']; ?></td>
						<td>
						  <button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#hapus<?php echo $value['id_beli']; ?>">Hapus</button>
							<button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#bayar<?php echo $value['id_beli']; ?>">Bayar</button>
						</td>
				</tr>
				
				<div id="bayar<?php echo $value['id_beli']; ?>" class="modal fade" role="dialog">
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Pembayaran</h4>
                                </div>
                                <?php echo form_open("C_admin/update"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nim">ID</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $value['id_beli']; ?>" id="id">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $value['id_beli']; ?>" id="id" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $value['nama_obat']; ?>" id="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon">Harga</label>
                                        <input type="text" name="harga" class="form-control" value="<?php echo $value['harga']; ?>" id="harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="email">Jumlah</label>
                                        <input type="text" name="jumlah" class="form-control" value="<?php echo $value['jumlah']; ?>" id="keterangan" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="jurusan">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $value['alamat']; ?>" id="cara" required>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="jurusan">Total</label>
                                        <input type="text" name="total" class="form-control" value="<?php echo $value['total']; ?>" id="efek" required>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="jurusan">Metode Pembayaran</label>
                                        <input type="text" name="metode" class="form-control" id="penyajian" required>
                                    </div>
									
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
				
				<div id="hapus<?php echo $value['id_beli']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus <?php echo $value['id_beli'];?>?</h4>
                                  <?php echo form_open("C_keranjang/del"); ?>
                                  <input type="hidden" name="idbeli" class="form-control" value="<?php echo $value['id_beli'];?>" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
				
				<?php } ?>
			</tbody>
		</table>
				
		</div>
	</div>
</body>
</html>