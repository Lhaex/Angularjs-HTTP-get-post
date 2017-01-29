<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ass1";

$con = mysqli_connect("localhost","root","","ass1");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$f = $request->f;
$l = $request->l;
$c = $request->c;

$sql = "INSERT INTO user (fn, ln, course)
VALUES ('$f', '$l', '$c')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	


?>
