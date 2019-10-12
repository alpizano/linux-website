<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>The Snake Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="assets/css/snake_game.css" type="text/css" rel="stylesheet">
</head>
<body>

  <?php
  include 'assets/includes/nav.inc.php';
  ?>

<article>
  <h1>The Snake Game</h1>
  <p>Use the arrow keys to get started!<br><br>
  <p>
    This game was made using HTML5 and using JavaScript to program the logic. JavaScript is really an amazingly powerful language that can bring web based games to life without any need for rendering. And with things such as NodeJS, it can drive both the front end and back end of web development.<br><br>
    This game was first brought to life utilizing HTML5's canvas property...
</p>
</article>


<aside>
  <canvas id="gc" width="400" height="400"></canvas>

  <!-- Begin JavaScript -->
  <script>
  window.onload = function() {
  canv = document.getElementById("gc");
  // Graphic Buffer
  ctx = canv.getContext("2d");
  // Keyboard hooks
  document.addEventListener("keydown",keyPush);
  // Call game function 15 times every second (1000ms)
  setInterval(game,1000/15);
  setInterval(drawScore, 1000/15);
  }

  // player positions (x,y)
  px=py=10;
  gs=tc=20;
  // apple position (x,y)
  ax=ay=15;
  xv=yv=0;
  // trail array
  trail = [];
  tail = 5;
  var score = 0;

// Begin function game()
    function game() {

    px = px + xv;
    py = py + yv;

      if(px < 0) {
        px = tc-1;
        }
      if(px > tc-1) {
        px = 0;
        }
      if(py < 0) {
        py = tc -1;
        }
      if(py > tc-1) {
        py = 0;
        }

        // Background canvas color
      ctx.fillStyle = "#181818";
      ctx.fillRect(0,0,canv.width,canv.height);

    /*
        for(var i = 0; i <= 400; i += 20) {
          ctx.moveTo(i,0);
          ctx.lineTo(i,400);

        }

        for(var j = 0; j <= 400; j += 20) {
          ctx.moveTo(0,j);
          ctx.lineTo(400,j);

        }

        ctx.strokeStyle = "gray";
        ctx.stroke();
        */

        // Snake color
      ctx.fillStyle="#fff8db";
      for(var i =0; i < trail.length; i++) {
        ctx.fillRect(trail[i].x*gs, trail[i].y*gs, gs-2,gs-2);
        // If you step on tail
        if(trail[i].x == px && trail[i].y == py) {
        tail = 5;
        }
      }

      trail.push({x:px,y:py});
      while(trail.length > tail) {
      trail.shift();
    }
      // If eat token
      if(ax==px && ay==py) {
        tail++;
        score++;
        ax = Math.floor(Math.random()*tc);
        ay = Math.floor(Math.random()*tc);
      }

      ctx.fillStyle ="#ba8f8e";
      ctx.fillRect(ax*gs,ay*gs,gs-2,gs-2);
    }
    // close function game() bracket

// DrawScore function to display score
function drawScore() {
  ctx.font = ' 15px Arial';
   ctx.textAlign = 'center';
   ctx. textBaseline = 'middle';
   ctx.fillStyle = '#fff8db';  // a color name or by using rgb/rgba/hex values
   ctx.fillText("Score : " + score, 39, 390); // text and position
}

  function keyPush(evt) {
  switch(evt.keyCode) {
        case 37:
        xv = -1; yv=0;
        break;
        case 38:
        xv = 0; yv=-1;
        break;
        case 39:
        xv = 1; yv=0;
        break;
        case 40:
        xv = 0; yv=1;
        break;
    }
  }
  </script>
</aside>


</body>
</html>
