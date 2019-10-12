/* workign code for div2-6
var panels = document.getElementsByClassName('hoverButton');


for(let i=0; i<panels.length; i++) {
panels[i].addEventListener("mouseover", moveIt);
panels[i].addEventListener("mouseleave", dontMoveIt);

}

function moveIt() {
  var blah = this.nextElementSibling;
  blah.style.display = 'block';
}

function dontMoveIt() {
  var blah = this.nextElementSibling;
  blah.style.display = 'none';
} */

let imgs = document.getElementsByClassName('hoverButton');
let bttns = document.getElementsByClassName('button-props');

for(let i=0; i<imgs.length; i++) {
imgs[i].addEventListener("mouseover", moveIt);
bttns[i].addEventListener("mouseover", dontDissa);
bttns[i].addEventListener("mouseleave", dissa);
imgs[i].addEventListener("mouseleave", dontMoveIt);
}


/*
for(let k=0; k<bttns.length; k++) {
  bttns[k].addEventListener("mouseover", stay);
  bttns[k].addEventListener("mouseleave", go);
}*/



function moveIt() {
  //var blah = this.parentElement.nextElementSibling;
  var bttn = this.nextElementSibling;
  //bttn.style.display = 'block';
  bttn.style.visibility = 'visible';
}

function dontMoveIt () {
  //var blah = this.parentElement.nextElementSibling;
  var bttn = this.nextElementSibling;
  //bttn.style.display = 'none';
  bttn.style.visibility = 'hidden';
}

function dontDissa() {
  var img = this.previousElementSibling;
  //this.style.display = 'block';
  this.style.visibility = 'visible'; //make button stay when hovered on img
  img.style.opacity = 0.5;
}


function dissa() {
  var img = this.previousElementSibling;
  //img.style.opacity= 0.5;
}

/*
function stay() {
  var img = this.previousElementSibling;
  //this.style.display = 'block';

  img.style.opacity = 0.5;
}


function go() {
  var img = this.previousElementSibling;
  img.style.opacity= 0.5;
}
*/
