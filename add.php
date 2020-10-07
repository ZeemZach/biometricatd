<html>
<head>
</head>
<body>
<?php
/*$id = $_GET['id'];*/
$name = $_GET['name'];
$date = date('Y-m-d');
$time = date('H:i:s');
echo $date;
echo $time;
$conn = new mysqli("localhost","id10760561_biometricatd","00123456","id10760561_biometric_attendance"); // Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
$sql = "INSERT INTO todays_att(fg_id) VALUES ('$name');";
if ($conn->query($sql) === TRUE) {

   echo "Attendence recorded";

}
else {

  echo "Error:" . $sql . "<br>" . $conn->error;

}


$conn->close();

?>
</body></html>
