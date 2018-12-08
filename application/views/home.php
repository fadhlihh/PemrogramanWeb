<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome/css/all.css">
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
				<div class="col-sm-4">
					<a href="<?php echo base_url();?>index.php/product">
					<div class="panel panel-primary">
			        <div class="panel-heading">Produk</div>
			        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" style="width:100%" alt="Image"></div>
			        <div class="panel-footer">Buy this</div>
		      	</div>
					</a>
		    </div>
		    <div class="col-sm-4">
					<a href="<?php echo base_url();?>index.php/product">
	      	<div class="panel panel-primary">
	        	<div class="panel-heading">Produk</div>
	        	<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" style="width:100%" alt="Image"></div>
	        	<div class="panel-footer">Buy that</div>
	      	</div>
					</a>
		    </div>
		    <div class="col-sm-4">
		      <div class="panel panel-primary">
						<a href="<?php echo base_url();?>index.php/product">
		        <div class="panel-heading">Produk</div>
		        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" style="width:100%" alt="Image"></div>
		        <div class="panel-footer">Buy please</div>
		      </div>
					</a>
		    </div>
				</div>
				<span class="row">
					<span class="col-sm-12"></span>
				</span>
			</div>
		<?php require("footer.php"); ?>
	</body>
</html>
