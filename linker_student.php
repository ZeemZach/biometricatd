<html>

<head>
  <title>Untitled</title>
</head>

<body>
<?php
$s_name =$_POST['s_name'];
$s_roll =$_POST['s_roll'];
$s_course =$_POST['s_course'];
$s_year =$_POST['s_year'];
$fg_id  =$_POST['fg_id'];
$s_number =$_POST['s_number'];
$s_gmail =$_POST['s_gmail'];
$s_login=$_POST['s_login'];
$s_password =$_POST['s_password'];
$dbconnect=mysqli_connect("localhost","id10760561_biometricatd","00123456","id10760561_biometric_attendance");
if(mysqli_connect_errno($dbconnect)){
    echo "failed o connect";
}
/*else
{
    echo "connection succesful";
}   */
mysqli_query($dbconnect,"insert into student_register1 values('$s_name',$s_roll,'$s_course',$s_year,'$fg_id',$s_number,'$s_gmail','$s_login','$s_password');");
include('student.html');
?>
</body>

</html>