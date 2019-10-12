<?php
session_start();
include 'assets/includes/dbhg.inc.php';


if(isset($_POST['submit'])) {
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $content = mysqli_real_escape_string($conn,$_POST['content']);

  $date = date('l jS \of F Y h:i:s A');

  $sql = "INSERT into posts (title, content, date) values ('$title', '$content', '$date')";

  if($title == "" || $content == "") {
    echo "Please complete your post!";
    return;
  }

  mysqli_query($conn,$sql);

  header("Location: blog.php?");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/stylesheets/post.css">
</head>
<body>
  <form class="form-group" action="post.php" method="post">
    <input type="text" name="title" placeholder="Enter title of post here"><br>
    <textarea name="content" placeholder="Enter content of post here"></textarea><br>
    <input type="submit" name="submit" value="Post"><br>
  </form>

</body>
</html>
