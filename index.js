var looper;
var degrees = 0;
function rotateAnimation(el, speed) {
  var elem = document.getElementById(el);
  elem.style.transform = "rotate(" + degrees + "deg)";
  looper = setTimeout("rotateAnimation('" + el + "'," + speed + ")", speed);
  degrees++;
  if (degrees > 359) {
    degrees = 1;
  }
}

var pre_loader = document.getElementById("loader");
function myfun() {
  pre_loader.style.display = "none";
}
