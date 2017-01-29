
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

$i = 0;
 $results= array();

$sql = "SELECT * FROM user";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
         
        $results[$i]['id'] = $row['ID'];
        $results[$i]['fn'] = $row['fn'];
        $results[$i]['ln'] = $row['ln'];
        $results[$i]['course'] = $row['course'];
        $i++;
    }
}
  
echo json_encode($results);
?>


