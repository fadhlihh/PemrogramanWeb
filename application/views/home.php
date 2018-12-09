<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fonts/font-awesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Padjadjaran Online Market</title>
	</head>
	<body>
		<div class="jumbotron">
		  <div class="container text-center">
		    <h1>Padjadjaran Online Market</h1>
		    <p>Belanja Online Di Universitas Padjadjaran</p>
		  </div>
		</div>
		<?php require("navbar.php");?>
		<div class="container content">
			<div class="row">
				<?php foreach($barang as $brg){?>
				<div class="col-sm-4">
					<a href="<?php echo base_url();?>index.php/product?id=<?php echo $brg['id_barang']?>">
					<div class="panel panel-primary">
			        <div class="panel-heading"><?php echo $brg['nama_barang'];?></div>
			        <div class="panel-body"><img src="<?php echo base_url().'image_product/'.$brg['foto_barang1'] ?>" style="width: 100%;"></div>
			        <div class="panel-footer">Rp.<?php echo $brg['harga'];?></div>
		      	</div>
					</a>
		    </div>
		    <?php }?>
				<span class="row">
					<span class="col-sm-12"></span>
				</span>
			</div>
		</div>	
		<?php require("footer.php"); ?>
	</body>
</html>
