<?php
session_start();
include_once 'assets/includes/dbhg.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/blog.css">

</head>

<body>

  <div class="wrapper">

<?php
include 'assets/includes/nav.inc.php';
?>


<article>
<h1 class="center">Blog</h1>

<?php
    require_once("nbbc-1.4.5/nbbc.php");

    // BB code object
    $bbcode = new BBCode;

    $sql = "SELECT * FROM posts ORDER BY id DESC";

    $result = mysqli_query($conn, $sql) or die(mysqli_error());

    $posts = "";

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
  /* whle loop keeps spitting out data */
  while($row = mysqli_fetch_assoc($result)) {
      $id =  $row['id'];
      $title = $row['title'];
      $content = $row['content'];
      $date = $row['date'];

      $admin = "<div class='delete-edit-text'><a href='del_post.php?pid=$id'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id'>Edit</a></div>";

      $output = $bbcode->Parse($content);

      $posts .= "<div class='blog-content'><h2><a href='view_post.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin</div>";
}
    echo $posts;
}

else {
  echo 'No posts to display';
}
  ?>


</article>
  </div>

</body>
</html>
