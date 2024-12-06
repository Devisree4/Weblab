<?php

include 'dbconnection.php';

if(isset($_POST['submit']))

{

	$fname=$_POST['Firstname'];

	$lname=$_POST['Lastname'];

	$conno=$_POST['Contactnumber'];

	$Email=$_POST['Email'];

	$uname=$_POST['Username'];

	$paswrd=$_POST['Password'];

	$sql = "INSERT INTO user_registration(Firstname,Lastname,Contactnumber,Email,Username,Password)VALUES ('$fname','$lname','$conno','$email','$uname','$paswrd')";



	if (mysqli_query($conn, $sql)) {

  		echo "New record created successfully";

		} else {

  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}



	mysqli_close($conn);

}

else

{

?>

<html>

	<body>

	<center>

		<form action="" method="post">

		Firstname:

		<input type="textbox" name="Firstname"><br>

		Lastname:

		<input type="textbox" name="Lastname"><br>

		Contact Number:

		<input type="textbox" name="Contactnumber"><br>

		Email:

		<input type="textbox" name="Email"><br>

		Username:

		<input type="textbox" name="Username"><br>

		Password:

		<input type="password" name="Password"><br>

		<input type="submit" name="submit" value="Submit"><br>

	</form>

	</center>

	</body>

</html>

<?php

}

?>