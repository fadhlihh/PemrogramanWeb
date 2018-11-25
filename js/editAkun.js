var ubah = document.getElementsByClassName('btn-ubah')[0];

ubah.onclick = function() {
	ubah.style.display = "none";
	document.getElementsByClassName('btn-edit')[0].style.display = "inline-block";
	document.getElementsByClassName('btn-edit')[1].style.display = "inline-block";
	document.ubahAkun.username.disabled = "true";
}

document.getElementsByClassName('btn-edit')[1].onclick = function() {
	ubah.style.display = "inline-block";
	document.getElementsByClassName('btn-edit')[0].style.display = "none";
	document.getElementsByClassName('btn-edit')[1].style.display = "none";
}

document.getElementsByClassName('btn-edit')[0].onclick = function() {
	ubah.style.display = "inline-block";
	document.getElementsByClassName('btn-edit')[0].style.display = "none";
	document.getElementsByClassName('btn-edit')[1].style.display = "none";
}