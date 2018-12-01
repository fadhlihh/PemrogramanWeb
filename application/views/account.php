<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Account</title>
	</head>
	<body>
		<?php require("navbar.php");?>
		<div class="account">
			<table>
				<tr>
					<td>
						<table class="left-account" width="250px">
							<tr><td><img src="image_account/default-avatar.png" class="user-pic"></td></tr>
							<tr align="center"><td><font class="user-uname"><?php echo $Username?></font></td></tr>
							<tr align="center"><td class="mar-1"><font class="light"><?php echo $fakultas?></font></td></tr>
							<tr align="center"><td class="mar-2"><font class="difcolor"><?php echo $login_terakhir?></font></td></tr>
							<tr align="center"><td><font class="difcolor"><?php echo $tanggal_Bergabung?></font></td></tr>
							<tr align="center"><td class="mar-2"><button class="btn-user">Jual Barang</button></td></tr>
							<tr align="center"><td class="mar-1"><a href="<?php echo base_url();?>index.php/user-logout"><button class="btn-user">Log Out</button></a></td></tr>
						</table>
					</td>
					<td>
						<form method="post" name="ubahAkun">
						<table class="right-account">
							<tr><td><font class="header-account">Informasi Akun</font></td><td class="align-right space-left"><input type="button" name="edit" value="Edit" class="btn-user btn-ubah" ></td></tr>
							<tr><td colspan="2"><hr></td></tr>
								<tr><td class="mar-1"><?php echo $Nama_Lengkap?></td><td class="mar-1"><input type="text" name="nama_lengkap" value="Nama User" disabled></td></tr>
								<tr><td class="mar-1"><?php echo $Username?></td><td class="mar-1"><input type="text" name="username" value="Username" disabled></td></tr>
								<tr><td class="mar-1"><?php echo $Username?></td><td class="mar-1"><input type="Password" name="password" disabled></td></tr>
								<tr><td class="mar-1"><?php echo $email?></td><td class="mar-1"><input type="email" name="email" value="user@mail.com" disabled></td></tr>
								<tr><td class="mar-1"><?php echo $no_hp?></td><td class="mar-1"><input type="text" name="hp" value="123" disabled></td></tr>
								<tr><td class="mar-1"><?php echo $fakultas?></td><td class="mar-1"><input type="text" name="fakultas" value="Fakultas User" disabled></td></tr>
								<tr><td class="mar-1"><?php echo $alamat?></td><td class="mar-1"><input type="text" name="alamat" value="Alamat User" disabled></td></tr>
								<tr><td colspan="2" class="align-right mar-2"><input type="button" name="cancel" value="Kembali" class="btn-user btn-edit"><input type="submit" name="save-edit" value="Simpan" class="back-red btn-save btn-edit"></td></tr>
						</table>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<script type="text/javascript" src="js/editAkun.js"></script>
		<?php require("footer.php");?>
	</body>
</html>