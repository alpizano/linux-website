<html>
<head>
<title>MySQL DB Test</title>
<body>
<?php
 
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '!Supernova4k';
$dbName = "test";
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);



$sql = "SELECT * FROM students;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo $resultCheck . "<br>";

if($resultCheck > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo $row['id'] . $row['name'] . $row['age'] . "<br>";
}
}




mysql_close($conn);
?>
</body>
</html>
