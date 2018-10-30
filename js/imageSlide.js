var images = [
"image_product/sapu1.jpg",
"image_product/sapu2.jpg",
"image_product/sapu3.jpg",
"image_product/sapu4.jpg"
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