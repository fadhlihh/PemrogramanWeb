// Get the modal
var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("signin");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("close")[0];

var daftar = document.getElementById('daftar');
var masuk = document.getElementById('masuk');
var signin = document.getElementsByClassName('tbl-signin')[0];
var signup = document.getElementsByClassName('tbl-signup')[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    signin.style.display = "block";
	signup.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

daftar.onclick = function(){
	signin.style.display = "none";
	signup.style.display = "block";
}

masuk.onclick = function(){
	signin.style.display = "block";
	signup.style.display = "none";
}