<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fonts/font-awesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jual Barang</title>
	</head>
	<body>
		<?php require("navbar.php");?>
				<div class="content">	
					<center>
						<?php foreach($barang as $brg){?>
						<form action="<?php echo base_url();?>index.php/update-barang?id=<?php echo $brg['id_barang']?>" method="post" enctype="multipart/form-data">
							<table class="tbl-jual">
								<font class="header-account" color="black">Data Barang</font>  
								<tr><td><input type="text" name="NPM" style="width: 100%; display: none;" value="<?php echo $brg['NPM']?>"></td></tr>
								<tr><td>Nama Barang</td></tr>
								<tr><td><input type="text" name="nama_barang" style="width: 100%;" value="<?php echo $brg['nama_barang']?>" required></td></tr>
								<tr><td>Kategori</td></tr>
								<tr>
									<td>
										<select style="width: 100%;" name="id_kategori" required>
											<?php foreach($kategori as $kat){?>
											<option value="<?php echo $kat['id_kategori'] ?>"><?php echo $kat['nama_kategori']; ?></option>
											<?php } ?>
										</select>
									</td>
								</tr>
								<tr><td>Harga (Rupiah)</td></tr>
								<tr><td><input type="number" name="harga" style="width: 100%;"  value="<?php echo $brg['harga']?>" required></td></tr>
								<tr><td>Foto Barang</td></tr>
								<tr><td><input type="file" name="foto1"  value="<?php echo $brg['foto_barang1']?>" required></td></tr>
								<tr><td><input type="file" name="foto2"  value="<?php echo $brg['foto_barang2']?>" ></td></tr>
								<tr><td><input type="file" name="foto3"  value="<?php echo $brg['foto_barang3']?>"></td></tr>
								<tr><td><input type="file" name="foto4"  value="<?php echo $brg['foto_barang4']?>"></td></tr>
								<tr><td>Deskripsi</td></tr>
								<tr>
									<td colspan="2">
										<textarea name="deskripsi" cols="70" rows="13"><?php echo $brg['deskripsi']?></textarea>
									</td>
								</tr>
								<tr><td colspan="2"><input type="submit" name="submit" value="Jual"></td></tr>
                                <?php } ?>
							</table>
							</form>
						</center>
				</div>
		<?php require("footer.php");?>
	</body>
</html>