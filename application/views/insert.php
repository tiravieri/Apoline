<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	 <?php echo form_open("C_admin/add"); ?>
                  
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
                                        <label for="image">Image</label>
            							<input type="file" name="image">
                                    </div>
									
									
                                </div>
								
								
								
                                
                         			<input type="submit" data-dismiss="modal" class="btn btn-danger"  value="close">
                                    <input type="submit" class="btn btn-success" name="logadmin" value="Tambah">
									
                                </div>
                                <?php echo form_close(); ?>
</body>
</html>