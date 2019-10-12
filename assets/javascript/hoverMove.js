var socIcons = document.getElementsByClassName('socIcon');

for(var i =0; i<socIcons.length; i++) {
  socIcons[i].addEventListener("mouseover", hoverUp);
  socIcons[i].addEventListener("mouseout", hoverDown);
}

function hoverUp() {
  this.style.top = '-5px';
}


function hoverDown() {
  this.style.top = '0px';
}
