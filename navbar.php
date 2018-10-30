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
			      	<a href="#">Link 1</a>
			     	<a href="#">Link 2</a>
			      	<a href="#">Link 3</a>
		    	</div>
		  	</div>
		  	<a href="#contact">Contact</a>
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
			<span class="close">&times;</span>
			<center>
				<form method="post">
					<table class="tbl-signin">
						<tr><td><input type="text" name="username" placeholder="Username / Email / NPM"></td></tr>
						<tr><td><input type="Password" name="password" placeholder="Kata Sandi"></td></tr>
						<tr><td width="100%"><input type="submit" name="submit" value="Sign In"></td></tr>
					</table>
				</form>
			</center>
		</div>
	</div>
	<script type="text/javascript" src="js/modalSignIn.js"></script>
	<br>
</body>
</html>