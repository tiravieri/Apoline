<!doctype html>
<!-- 1301160464 -->
<html>
<head>
<meta charset="utf-8">
<title>Selamat datang di menu Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<style>
		
		img{
			width: 100%;
			
		}
	</style>
	
	<?php $this->load->view('nav_loginadmin'); ?>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
<h3>Data Obat</h3><br>
          <table class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
              <tr class="thead-dark">
                    <th>Id</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Cara</th>
                    <th>Efek</th>
                    <th>Penyajian</th>
					<th>Indikasi</th>
		  	  	  <th>Image</th>
				  	<th>Action</th>
              </tr>
			</thead>
			  <tbody>
			  	<?php foreach($obat as $value) {?>
				<tr class="table-primary">
						<td><?php echo $value['id_obat'];?></td>
						<td><?php echo $value['nama_obat'];?></td>
						<td><?php echo $value['harga']; ?></td>
						<td><?php echo $value['keterangan']; ?></td>
						<td><?php echo $value['cara']; ?></td>
						<td><?php echo $value['efek']; ?></td>
						<td><?php echo $value['penyajian']; ?></td>
						<td><?php echo $value['indikasi']; ?></td>
				  <td><img src="<?php echo base_url();?>image/<?php echo $value['image']?>"></td>
						<td style="text-align: center;">
						  <button class="btn btn-md btn-block btn-primary" data-toggle="modal" data-target="#edit<?php echo $value['id_obat']; ?>">Edit  </button><br>
						  <button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#hapus<?php echo $value['id_obat']; ?>">Hapus</button>
						</td>
				</tr>
				  
				  <div id="edit<?php echo $value['id_obat']; ?>" class="modal fade" role="dialog">
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Obat</h4>
                                </div>
                                <?php echo form_open("C_admin/update"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nim">ID</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $value['id_obat']; ?>" id="id">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $value['id_obat']; ?>" id="id" required>

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
                                        <label class="control-label" for="email">Keterangan</label>
                                        <input type="text" name="ket" class="form-control" value="<?php echo $value['keterangan']; ?>" id="keterangan" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="jurusan">Cara</label>
                                        <input type="text" name="cara" class="form-control" value="<?php echo $value['cara']; ?>" id="cara" required>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="jurusan">Efek</label>
                                        <input type="text" name="efek" class="form-control" value="<?php echo $value['efek']; ?>" id="efek" required>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="jurusan">Penyajian</label>
                                        <input type="text" name="penyajian" class="form-control" value="<?php echo $value['penyajian']; ?>" id="penyajian" required>
                                    </div>
									<div class="form-group">
                                        <label class="control-label" for="jurusan">Indikasi</label>
                                        <input type="text" name="indikasi" class="form-control" value="<?php echo $value['indikasi']; ?>" id="indikasi" required>
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
				  
				  <div id="hapus<?php echo $value['id_obat']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Anda Ingin Menghapus <?php echo $value['id_obat'];?>?</h4>
                                  <?php echo form_open("C_admin/del"); ?>
                                  <input type="hidden" name="idobat" class="form-control" value="<?php echo $value['id_obat'];?>" required>
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
	
	
</body>
</html>