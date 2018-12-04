<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jual Barang</title>
	</head>
	<body>
		<?php require("navbar.php");?>
		<center>
			<form>
				<table>
					<font class="header-account" color="black">Data Barang</font>
					<tr><td>NPM Penjual</td></tr>
					<tr><td><input type="text" name="NPM" style="width: 100%;"></td></tr>
					<tr><td>Nama Barang</td></tr>
					<tr><td><input type="text" name="nama_barang" style="width: 100%;"></td></tr>
					<tr><td>Kategori</td></tr>
					<tr>
						<td>
							<select style="width: 100%;">
								<?php foreach($kategori as $kat){?>
								<option value="<?php echo $kat['id_kategori'] ?>"><?php echo $kat['nama_kategori']; ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr><td>Harga (Rupiah)</td></tr>
					<tr><td><input type="number" name="harga" style="width: 100%;"></td></tr>
					<tr><td>Deskripsi</td></tr>
					<tr>
						<td colspan="2">
							<textarea cols="70" rows="13"></textarea>
						</td>
					</tr>
					<tr><td colspan="2"><input type="submit" name="submit" value="Jual"></td></tr>
				</table>
			</form>
		</center>
		<?php require("footer.php");?>
	</body>
</html>