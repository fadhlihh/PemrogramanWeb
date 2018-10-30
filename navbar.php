<!DOCTYPE html>
<html>
<body>
	<nav>
		<div class="navbar-left">
			<a href="home.php">Beranda</a>
			<div class="dropdown">
		    	<button class="dropbtn"><span>Kategori 
		      		<i class="fa fa-caret-down"></i></span>
		    	</button>
		    	<div class="dropdown-content">
			      	<a href="#">Clothing</a>
			     	<a href="#">Electronic</a>
			      	<a href="#">Food</a>
		    	</div>
		  	</div>
		  	<a href="contact.php">Contact</a>
		</div>
		<div class="navbar-right">
			<ul>
				<li id="signin">Sign in</li>
		  		<li><span class="fas fa-search"></span></li>
			</ul>
		</div> 
	</nav>
	<div id="modal" class="modal-signin">
		<div class="modal-signin-content">
			<span class="close">x</span>
			<center>
				<form method="post">
					<table class="tbl-signin">
						<tr><td><h1>Sign in</h1></td></tr>
						<tr><td><input type="text" name="username" placeholder="Username / Email / NPM"></td></tr>
						<tr><td><input type="Password" name="password" placeholder="Kata Sandi"></td></tr>
						<tr><td width="100%"><input type="submit" name="submit" value="Sign In"></td></tr>
						<tr><td style="font-size: 13px; color:rgba(158, 158, 158, 1);">Belum punya akun POM? <span class="daftar">daftar</span></td></tr>
					</table>
				</form>
			</center>
		</div>
	</div>
	<script type="text/javascript" src="js/modalSignIn.js"></script>
	<br>
</body>
</html>