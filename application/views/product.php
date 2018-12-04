<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padjadjaran Online Market - Product</title>
</head>
<body>
	<?php require("navbar.php"); ?>
	<div class="content">
		<div class="row">
			<div class="col-sm-3">
				<table>
					<tr align="center"><td><img src="<?php echo base_url();?>image_product/sapu1.jpg" class="gambar-main" height="300px" width="300px"></td></tr>
					<tr align="center">
						<td><img src="<?php echo base_url();?>image_product/sapu1.jpg" id="gambar1" class="gambar-sub" height="71" width="71">
							<img src="<?php echo base_url();?>image_product/sapu2.jpg" id="gambar2" class="gambar-sub" height="71" width="71">
							<img src="<?php echo base_url();?>image_product/sapu3.jpg" id="gambar3" class="gambar-sub" height="71" width="71">
							<img src="<?php echo base_url();?>image_product/sapu4.jpg" id="gambar4" class="gambar-sub" height="71" width="71">
						</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-5 info">
				<h3>Nama Produk</h3>
				<h2>Rp.0</h2>
				<table>
					<tr><td width="100px">Penjual</td><td>:</td></tr>
					<tr><td width="100px">Kontak</td><td>:</td></tr>
				</table>
				<p>Deskripsi barang dan tempat ada disini, tambahan kontak dapat disertakan disini</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var images = [
		"<?php echo base_url();?>image_product/sapu1.jpg",
		"<?php echo base_url();?>image_product/sapu2.jpg",
		"<?php echo base_url();?>image_product/sapu3.jpg",
		"<?php echo base_url();?>image_product/sapu4.jpg"
		];

		var image = document.getElementsByClassName('gambar-main')[0];
		var img1 = document.getElementById('gambar1');
		var img2 = document.getElementById('gambar2');
		var img3 = document.getElementById('gambar3');
		var img4 = document.getElementById('gambar4');

		var imageTemp = images[0];

		img1.onclick = function() {
			image.src = images[0];
			imageTemp = image.src;
		}
		img2.onclick = function() {
			image.src = images[1];
			imageTemp = image.src;
		}
		img3.onclick = function() {
			image.src = images[2];
			imageTemp = image.src;
		}
		img4.onclick = function() {
			image.src = images[3];
			imageTemp = image.src;
		}

		img1.onmouseover = function() {
			image.src = images[0];
		}
		img2.onmouseover = function() {
			image.src = images[1];
		}
		img3.onmouseover = function() {
			image.src = images[2];
		}
		img4.onmouseover = function() {
			image.src = images[3];
		}

		img1.onmouseout = function() {
			image.src = imageTemp;
		}
		img2.onmouseout = function() {
			image.src = imageTemp;
		}
		img3.onmouseout = function() {
			image.src = imageTemp;
		}
		img4.onmouseout = function() {
			image.src = imageTemp;
		}
	</script>
	<?php require("footer.php"); ?>
</body>
</html>