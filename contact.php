<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="assets/css/contact.css" type="text/css" rel="stylesheet">
</head>
<body>

  <div class="wrapper">

  <?php
  include 'assets/includes/nav.inc.php'
  ?>


<!-- MAIN CONTENT GOES HERE -->
<main>
<h1 class="center">Contact</h1>
<center>
    <form class="form-group" action="contactform.php" method="post">
       <input type="text" name="name" placeholder="Full name"><br>
      <input type="text" name="email" placeholder="Your e-mail"><br>
      <input type="text" name="subject" placeholder="Subject"><br>
     <textarea name = "message" placeholder="Message"></textarea><br>
      <!--<button type="submit" name="submit">SEND MAIL</button>-->
      <input type="submit" name="submit" value="Submit" class="center">
    </form>

</center>
</main>

</div>
</body>
</html>
