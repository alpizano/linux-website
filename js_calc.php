<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript Calculator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="assets/css/js_calc.css" type="text/css" rel="stylesheet">
</head>
<body>
  <?php
  include 'assets/includes/nav.inc.php';
  ?>
<article>
  <h1>The JavaScript Calculator</h1>
  <p>
  This is my calculator I designed using JavaScript and CSS grids. I used the CSS grids for a vanilla approach for styling the HTML skeleton instead of using bootstrap. CSS grids is a new technology but amazingly efficient and creating beautiful and modular web layouts, far superior to its predescessor, using floats and divs.<br><br>
  I initially planned to use the Shunting-yard algorithm invented by Edsger Dijkstra to conver the infix inpression to post-fix and then to evaluate, but JavaScript (convienantly) has an evaluate method that will evaluate a string expression so there is no need for postfix conversion. I was a little dissapointed because I had some of my old Java code for an infix to postfix converter that I wanted to implement, but maybe some other time ;)<br><br>
  The caculator is only slightly tedious as each button is essentially a div part of the CSS grid, that needs to be sized and styled. Then, using JavaScripts event listeners, each div must be given a unique ID so that each element can be targeted and a corresponding event listener to be assigned. In this case, we needed to listen to button "clicks", that is when a user clicks on each button, and send that data for the function. The function would then push the corresponding ID of the button "clicked" into an array called numbers. Then, when the equals button is clicked at end of user input, this would trigger the eval() method (see MDN for futher documentation) to evaluate the string inside the array.
</p>
</article>


<aside>
  <div id="calc-canvas">
    <div class="calculator">
      <div class="title">Calculator</div>
      <div id="output">0</div>

  <div id="buttons-grid">
    <div class="button here1">%</div>
    <div class="button here2">&#10003;</div>
    <div class="button here3">x<sup>2</sup></div>
    <div class="button here4">1/x</div>
    <div class="button ce">ce</div>

    <!--<div id="clr" onclick="clicks(this.id)" class="button clr">C</div>-->
    <div id="del" onclick="clicks(this.id)" class="button del">&#9003;</div>

    <div id="plus-minus" onclick="clicks(this.id)" class="button plus-minus">&#177;</div>
    <div id="decimal" onclick="clicks(this.id)" class="button decimal">.</div>

    <div id="num0" onclick="clicks(this.id)" class="button num0">0</div>
    <div id="num1" onclick="clicks(this.id)" class="button num1">1</div>
    <div id="num2" onclick="clicks(this.id)" class="button num2">2</div>
    <div id="num3" onclick="clicks(this.id)" class="button num3">3</div>
    <div id="num4" onclick="clicks(this.id)" class="button num4">4</div>
    <div id="num5" onclick="clicks(this.id)" class="button num5">5</div>
    <div id="num6" onclick="clicks(this.id)" class="button num6">6</div>
    <div id="num7" onclick="clicks(this.id)" class="button num7">7</div>
    <div id="num8" onclick="clicks(this.id)" class="button num8">8</div>
    <div id="num9" onclick="clicks(this.id)" class="button num9">9</div>

    <div id="clr" onclick="clicks(this.id)" class="button clr">C</div>
    <div id="del" onclick="clicks(this.id)" class="button del">&#9003;</div>


    <div id="div" onclick="clicks(this.id)" class="button div">/</div>
    <div id="mul" onclick="clicks(this.id)" class="button mul">*</div>
    <div id="sub" onclick="clicks(this.id)" class="button sub">-</div>
    <div id="add" onclick="clicks(this.id)"class="button add">+</div>

    <div id="eqs" onclick="clicks(this.id)" class="button eqs">=</div>







  </div>

    </div>
    </div>
</aside>


  <script src="assets/javascript/calc_logic.js"></script>
</body>
</html>
