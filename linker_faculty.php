<html>

<head>
  <title>Untitled</title>
</head>

<body>
<?php
$f_name =$_POST['f_name'];
$f_id =$_POST['f_id'];
$f_course =$_POST['f_course'];
$f_number =$_POST['f_number'];
$f_gmail =$_POST['f_gmail'];
$f_login=$_POST['f_login'];
$f_password =$_POST['f_password'];
$dbconnect=mysqli_connect("localhost","id10760561_biometricatd","00123456","id10760561_biometric_attendance");
if(mysqli_connect_errno($dbconnect)){
    echo "failed o connect";
}
else
/*{
    echo "connection succesful";
}*/ 
mysqli_query($dbconnect,"insert into faculty_register values('$f_name',$f_id,'$f_course','$f_gmail',$f_number,'$f_login','$f_password');");
include('faculty.html');
?>
</body>

</html>