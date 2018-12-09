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
		<div class="account content">
			<table>
				<tr>
					<td>
						<table class="left-account">
						<?php foreach($user as $usr){?>
							<?php if($usr['foto_User'] == 0){ ?>
									<tr><td><div><img src="<?php echo base_url();?>image_account/default-avatar.png" class="user-pic" ></td></tr>
						<?php }
								else{ ?>
									<tr><td><div"><img src="<?php echo base_url().'image_account/'.$usr['foto_User'];?>" class="user-pic" ></td></tr>
						<?php } ?>
								<tr align="center"><td><font class="user-uname"><?php echo $usr['Username']; ?></font></td></tr>
								<tr align="center"><td class="mar-1"><font class="light"><?php echo $usr['fakultas']; ?></font></td></tr>
								<tr align="center"><td class="mar-2"><font class="difcolor"><?php echo $usr['login_Terakhir']; ?></font></td></tr>
								<tr align="center"><td><font class="difcolor"><?php echo $usr['tanggal_Bergabung']; ?></font></td></tr>
							<tr align="center"><td class="mar-2"><a href="<?php echo base_url();?>index.php/user-jual"><button class="btn-user">Jual Barang</button></a></td></tr>
							<tr align="center"><td class="mar-1"><a href="<?php echo base_url();?>index.php/list-barang"><button class="btn-user">List Barang</button></a></td></tr>
							<tr align="center"><td class="mar-1"><a href="<?php echo base_url();?>index.php/user-logout"><button class="btn-user">Log Out</button></a></td></tr>
						</table>
					</td>
					<td>
						<form method="post" name="ubahAkun" action="<?php echo base_url(); ?>index.php/user-update" enctype="multipart/form-data" autocomplete="off">
						<table class="right-account">
							<tr><td><font class="header-account">Informasi Akun</font></td><td class="align-right space-left"><input type="button" name="edit" value="Edit" class="btn-user"  id="btn-ubah"></td></tr>
							<tr><td colspan="2"><hr></td></tr>
							<div id="formEdit">
								<tr><td class="mar-1">Nama Lengkap</td><td class="mar-1"><input type="text" name="nama_lengkap" value="<?php echo $usr['Nama_Lengkap']; ?>" disabled class="inputUbah" required></td></tr>
								<tr><td class="mar-1">Username</td><td class="mar-1"><input type="text" name="username" value="<?php echo $usr['Username']; ?>" disabled class="inputUbah"pattern = "^[^-\s]{5,}$" title="Harus berjumlah 5 karakter atau lebih"required></td></tr>
								<tr><td class="mar-1">Password</td><td class="mar-1"><input type="Password" name="password" value="<?php echo $usr['password']; ?>" disabled class="inputUbah"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung setidaknya satu angka, satu huruf besar, satu huruf kecil, dan setidaknya harus 8 karakter atau lebih" required></td></tr>
								<tr><td class="mar-1">E-mail</td><td class="mar-1"><input type="email" name="email" value="<?php echo $usr['email']; ?>" disabled class="inputUbah" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Harus berupa email. Contoh : emailkamu@unpad.ac.id" required></td></tr>
								<tr><td class="mar-1">No Hp</td><td class="mar-1"><input type="text" name="hp" value="<?php echo $usr['no_hp']; ?>" disabled class="inputUbah" pattern = "(?=.*\d).{10,}" title="Nomor HP harus berjumlah setidaknya 10 angka" required></td></tr>
								<tr><td class="mar-1">Fakultas</td><td class="mar-1"><input type="text" name="fakultas" value="<?php echo $usr['fakultas']; ?>" disabled class="inputUbah"></td></tr>
								<tr><td class="mar-1">Alamat</td><td class="mar-1"><input type="text" name="alamat" value="<?php echo $usr['alamat']; ?>" disabled class="inputUbah"></td></tr>
								<tr><td class="mar-1">Foto Profil</td><td class="mar-1"><input type="file" name="foto_user" disabled class="inputUbah"></td></tr>
							</div>
							<?php } ?>
								<tr><td colspan="2" class="align-right mar-2"><input type="button" name="cancel" value="Kembali" class="btn-user btn-edit"><input type="submit" name="save-edit" value="Simpan" class="back-red btn-save btn-edit"></td></tr>
						</table>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<script type="text/javascript">
			var ubah = document.querySelector('#btn-ubah');

			ubah.onclick = function() {
				ubah.style.display = "none";
				document.getElementsByClassName('btn-edit')[0].style.display = "inline-block";
				document.getElementsByClassName('btn-edit')[1].style.display = "inline-block";
				var i = 0;
				while(i < document.getElementsByClassName('inputUbah').length){
					document.getElementsByClassName('inputUbah')[i].removeAttribute("disabled");
					i++;
				}
			}

			document.getElementsByClassName('btn-edit')[1].onclick = function() {
				ubah.style.display = "inline-block";
				while(i < document.getElementsByClassName('inputUbah').length){
					document.getElementsByClassName('inputUbah')[i].disabled = "true";
					i++;
				}
				document.getElementsByClassName('btn-edit')[0].style.display = "none";
				document.getElementsByClassName('btn-edit')[1].style.display = "none";
			}

			document.getElementsByClassName('btn-edit')[0].onclick = function() {
				var i = 0;
				while(i < document.getElementsByClassName('inputUbah').length){
					document.getElementsByClassName('inputUbah')[i].disabled = "true";
					i++;
				}
				ubah.style.display = "inline-block";
				document.getElementsByClassName('btn-edit')[0].style.display = "none";
				document.getElementsByClassName('btn-edit')[1].style.display = "none";
			}
		</script>
		<?php require("footer.php");?>
	</body>
</html>