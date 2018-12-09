<!DOCTYPE html>
<html>
<body>
	<nav>
		<div class="navbar-left">
			<a href="<?php echo base_url();?>index.php/home">Beranda</a>
			<div class="dropdown">
		    	<button class="dropbtn"><span>Kategori
		      		<i class="fa fa-caret-down"></i></span>
		    	</button>
		    	<div class="dropdown-content">
		    		<?php foreach($kategori as $kat){ ?>
			      	<a href="<?php echo base_url()?>index.php/kategori?id=<?php echo $kat['id_kategori'];?>"><?php echo $kat['nama_kategori']; ?></a>
			      	<?php } ?>
		    	</div>
		  	</div>
		  	<a href="<?php echo base_url();?>index.php/contact">Contact</a>
		  	<a href="#">
		  	<div class="search">
		  		<form method="get" action="<?php echo base_url();?>index.php/search">
		  			<input type="search" name="search" placeholder="Search Something"><input type="submit" class="search" value="&#xf002;"/>
		  		</form>
		  	</div>
		  	</a>
			<div class="navbar-right">
					<?php if($this->session->userdata('status')){ ?>
					<div class="dropdown">
						<button class="dropbtn"><span><?php echo $this->session->userdata('name'); ?>
		      				<i class="fa fa-caret-down"></i></span>
		    			</button>
		    			<div class="dropdown-content">
		    				<a href="<?php echo base_url();?>index.php/user-show">Profile</a>
		    				<a href="<?php echo base_url();?>index.php/user-logout">Logout</a>
		    			</div>
					</div>
					<?php }else{ ?>
					<a href="#" id="signin">Sign in</a>
					<?php } ?>
			</div>
		</div>
	</nav>
	<div id="modal" class="modal-signin">
		<div class="modal-signin-content">
			<span class="close">x</span>
			<center>
				<form method="post" action="<?php echo base_url();?>index.php/user-signin">
					<table class="tbl-signin">
						<tr><td><h1>Sign in</h1></td></tr>
						<tr><td><input type="text" name="username" placeholder="Username / Email / NPM" required></td></tr>
						<tr><td><input type="Password" name="password" placeholder="Kata Sandi" required></td></tr>
						<tr><td width="100%"><input type="submit" name="submit" value="Sign In"></td></tr>
						<tr><td><span class="gagal">Username atau Password salah</span></td></tr>
						<tr><td style="font-size: 13px; color:rgba(158, 158, 158, 1);">Belum punya akun POM? <span id="daftar">daftar</span></td></tr>
					</table>
				</form>
				<form method="post" action="<?php echo base_url();?>index.php/user-signup">
					<table class="tbl-signup">
						<tr><td><h1>Sign Up</h1></td></tr>
						<tr><td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required></td></tr>
						<tr><td><input type="text" name="npm" placeholder="NPM" pattern = "(?=.*\d).{12}" title="Harus berjumlah 12 angka" required></td></tr>
						<tr><td><input type="text" name="username" placeholder="Username" pattern = "^[^-\s]{5,}$" title="Harus berjumlah 5 karakter atau lebih"required></td></tr>
						<tr><td><input type="email" name="email" placeholder="E-Mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Harus berupa email. Contoh : emailkamu@unpad.ac.id" required></td></tr>
						<tr><td><input type="Password" name="password" placeholder="Kata Sandi" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung setidaknya satu angka, satu huruf besar, satu huruf kecil, dan setidaknya harus 8 karakter atau lebih" required></td></tr>
						<tr><td><input type="text" name="nohp" placeholder="No Telp." pattern = "(?=.*\d).{10,}" title="Nomor HP harus berjumlah setidaknya 10 angka" required></td></tr>
						<tr><td width="100%"><input type="submit" name="submit" value="Sign Up"></td></tr>
						<tr><td style="font-size: 13px; color:rgba(158, 158, 158, 1);">Sudah punya akun POM? <span id="masuk">sign in</span></td></tr>
					</table>
				</form>
			</center>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url();?>js/modalSignIn.js"></script>
	<br><br><br>
</body>
</html>
