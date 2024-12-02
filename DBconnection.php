<html>
<body>
<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="devipriya";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 die("connection failed".mysqli_connect_error());
}
else
{
  echo "connection Successfull";
}
?>
</body>
</html>