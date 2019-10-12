<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projects</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/projects.css">
</head>
<body>


    <?php
    include 'assets/includes/nav.inc.php';
    ?>
<h1 class="center">Projects</h1>
<div class="wrapper">
    <main>
      <div id="grid-projects">

<!-- Project #1 -->

<!-- parent element -->
        <div class="box-1">
<!-- prevoius element sibling -->

          <!-- parent element -->
          <a href="student_marks.php">
            <!-- child node -->
          <img class="hoverButton sgm" src="assets/images/room.png">

        <div class=" button-props">Learn more</div>
        </a>

            <div class="text-info">Student Grade Manager</div>

        </div>

          <div class="box-2">
            <a href="snake_game.php">
            <img class="hoverButton tsg" src="assets/images/code.jpeg">
            <div class="button-props">Learn more</div>
          </a>

            <div class="text-info">The Snake Game</div>
          </div>

            <div class="box-3">
              <a href="js_calc.php"><img class="hoverButton js-calc" src="assets/images/calc.jpg">
                <div class="button-props">Learn more</div>
              </a>

            <div class="text-info">JavaScript Calculator</div>
          </div>

              <div class="box-4">
                <a href=""><img class="hoverButton rf" src="assets/images/rectenna.jpg">
                  <div class="button-props">Learn more</div>
                </a>

              <div class="text-info">RF Rectenna</div>
            </div>

                <div class="box-5">
                  <a href="#">
                  <img class="hoverButton" src="">
                  <div class="button-props">Learn more</div>
                </a>


                <div class="text-info">Coming soon</div>
              </div>

                  <div class="box-6"><img class="hoverButton" src=""><a class="button-text" href="#">
                    <div class="button-props">Learn more</div>
                  </a>
                  <div class="text-info">Coming soon</div>
                </div>
      </div>
    </main>
</div>
<script src="assets/javascript/hoverButton.js"></script>
</body>
</html>
