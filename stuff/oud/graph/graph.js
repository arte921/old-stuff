var h = 400;
var w = 400;



var canvas = document.getElementById("canvas").getContext("2d");
var lastX = 0;
var lastY = -200;
var x = -200;

canvas.beginPath();
canvas.moveTo(0, h/2);
canvas.lineTo(w, h/2);
canvas.stroke();
canvas.beginPath();
canvas.moveTo(w/2, 0);
canvas.lineTo(w/2, h);
canvas.stroke();

while(x < w/2){
	canvas.beginPath();
	canvas.moveTo(lastX, lastY);
	lastX = x + w/2;
	lastY = f(x);
	canvas.lineTo(lastX, lastY);
	canvas.stroke();
	x++;
}

function f(x) {
	y = x * x;
	return -y + h/2;
}
