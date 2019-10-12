<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student Grade Manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="assets/css/student_marks.css" type="text/css" rel="stylesheet">
</head>
<body>
  <?php
  include 'assets/includes/nav.inc.php';
  ?>
<article>
  <h1>Student Grade Manager</h1>
  <p>
    This students grades manager app was a final project at Purdue for my Object Orientated Programming class, which was taught in Java. Conincidentally enough, I had taken Data Structures this semester previous (yes, I indeed did take Data Structures BEFORE OOP due to advisor error, it was a fun challenge), which was also taught in Java.<br><br>
    This student grade manager application mimicks a database by using a "Student" class to hold student objects, that have various properties such as an ID number (integer), and various exam scores (floats). These variables are stored into each Student object and work in conjuction with another "CourseSection" class, which stores these student objects inside itself as an Array List. The Student and CourseSection class contain methods that will read from a .txt file called "Marks.txt" and parse the data properly such that it will read to the end of the file and read line by line each student and store it into the Array List (with each student holding their corresponding ID and exam scores read from the .txt file).<br><br>
    Furthermore, to make this program "functional", a graphical user interface (GUI) was created utilizing the JavaFX library. The Mode-View-Control (MVC) design protocol was followed strictly, this made the programming fairly logic and simple.<br><br>
    Seen to the right is the Student Grades Manager app in action. It reads the .txt file and pulls the Student ID numbers in an ArrayList which is displayed as a scrollable list. The user and click on the various students and see their corresponding marks/grades. The last column displays the students final grade in the course, calculated via a method in the Student class. Furthermore, the user can Add a student (with data of their own choosing), delete a specific student, clear the output text field, or search for a various ID in the list (if they are feeling lazy). The corresponing ID will be highlighted when the user clicks "search".<br><br>
    The .jar file can be downloaded <a href="http://www.mediafire.com/file/y2b3wuy5uh0af8x/StudentGradeManageApp.zip/file">here</a>. The Marks.txt should be in the same folder as the .jar file when running the program, as it reads this data as input via I/O stream.
</p>
</article>


<aside>
<img class="sgm" src="assets/imgs/sgm.1.gif">
</aside>


</body>
</html>
