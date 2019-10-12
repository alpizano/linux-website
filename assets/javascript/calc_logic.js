var numbers = []; //initialize empty array for numbers i.e. 1,2,3 etc..
//var operators = []; //intializes empty array for operators i.e. +,-,/,*
// variable to store answer
var upperLimit = numbers.length;

function clicks(clicked_id) {

if(clicked_id === "num0") {
  numbers.push(0);
  update();
}


if(clicked_id === "num1") {
numbers.push(1);

update();
}

if(clicked_id === "num2") {
numbers.push(2);

update();
}

if(clicked_id === "num3") {
numbers.push(3);
update();
}


if(clicked_id === "num4") {
numbers.push(4);
update();
}

if(clicked_id === "num5") {
numbers.push(5);
update();
}

if(clicked_id === "num6") {
numbers.push(6);
update();
}

if(clicked_id === "num7") {
numbers.push(7);
update();
}

if(clicked_id === "num8") {
numbers.push(8);
update();
}

if(clicked_id === "num9") {
numbers.push(9);
update();
  }


if(clicked_id === "del") {
    numbers.pop();
    update();
  }

  if(clicked_id === "add") {
    numbers.push('+');
    update();
  }

  if(clicked_id === "sub") {
    numbers.push('-');
    update();
  }

  if(clicked_id === "mul") {
    numbers.push('*');
    update();
  }

  if(clicked_id === "div") {
    numbers.push('/');
    update();
  }

  if(clicked_id === "clr") {
  document.getElementById('output').innerHTML = "0";
    var lenNums = numbers.length;

    while(lenNums > 0) {
      numbers.pop();
      lenNums--;
    }
  }

  if(clicked_id === "eqs")  {
      document.getElementById('output').innerHTML = "";
      //answer = eval(numbers.join(""));
      document.getElementById('output').innerHTML = eval(numbers.join(""));
  }
}



function update() {
  for(var i=0; i<numbers.length; i++) {
  document.getElementById('output').innerHTML = numbers.join("");
    }
}



/*
function eqs() {
    document.getElementById('output').innerHTML = "";
var len = numbers.length;

for(var k=0; k<len; k++) {
    document.getElementById('output').innerHTML += numbers.pop();
  }
}
*/
