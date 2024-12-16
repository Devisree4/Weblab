<?php
include 'conn.php';

if(isset($_POST['submit']))
{
$id1 = $_POST['id'];
$sql = "SELECT * FROM student_insertion where StudentId='$id1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<br> id:   " . $row["StudentId"]. " <br>Name:  " . $row["Studentame"]. "<br>Course:  " . $row["CourseName"]."<br>Semester: " . $row["Semester"]."<br>Gender:  ".$row["Gender"] ."<br>Hobbies:  ".$row["Hobbies"] ."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
}
?>
<html>
	<body>
	<center>
		<form action="" method="post">
		Student Id:
		<input type="textbox" name="id"><br>
		
		<input type="submit" name="submit" value="Submit"><br>
	</form>
	</center>
	</body>
</html>
<?php
?>