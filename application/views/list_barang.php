<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>List Barang</title>
	</head>
	<body>
		<?php require("navbar.php");?>
		<div class="content">
			<center>
					<table border="0" class="tbl-listbarang">
						<tr><th width="250vw">Nama Barang</th><th width="150vw">Harga</th><th width="150vw">Tanggal Jual</th><th width="400vw">Deskripsi</th><th colspan="2"></th></tr>
						<?php foreach($barang as $brg){?>
						<tr><td><?php echo $brg['nama_barang']; ?></td><td><?php echo $brg['harga']; ?></td><td><?php echo $brg['tanggal_jual']; ?></td><td><?php echo $brg['deskripsi']; ?></td><td width="60vw"><a href="<?php echo base_url();?>index.php/edit-barang?id=<?php echo $brg['id_barang']?>">EDIT</a></td><td width="90vw"><a href="<?php echo base_url();?>index.php/delete-barang?id=<?php echo $brg['id_barang']?>">DELETE</a></td></tr>
						<?php }?>
					</table>
			</center>
		</div>
		<?php require("footer.php");?>
	</body>
</html>