<?php
if(isset($_POST['txt1']))
{
$username = $_POST['txt1'];
$password = $_POST['txt2'];
$conn=mysqli_connect("localhost","id10760561_biometricatd","00123456","id10760561_biometric_attendance");
if(mysqli_connect_errno($conn)){
    echo "failed o connect";
}
/*{
    echo "connection succesful";
}
*/

$sql = "SELECT student_register1.NAME,student_register1.ROLL_NO,student_register1.CURRENT_COURSE,student_register1.CURRENT_YEAR,todays_att.day FROM student_register1 INNER JOIN todays_att ON student_register1.fg_id=todays_att.fg_id WHERE todays_att.day >= CAST(CURRENT_DATE() AS DATE) ORDER BY todays_att.day DESC LIMIT 33";
$result = $conn->query($sql);
echo '<!DOCTYPE html>';

echo'<html>';
echo'<head>
    <title>TODAYS_ATTENDANCE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <meta http-equiv="refresh" content="5;url=https://biometricatd.000webhostapp.com/show.php">
-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/inside.css" type="text/css">


</head>';
echo'<body>';
echo '<header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">ATTENDANCE PORTAL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html" target="_self">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" target="_self">AboutUs</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#" target="_self">Faculty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="student.html" target="_self">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" target="_self">ContactUS</a>
                        </li>
                        
                        <li class="nav-item">
        <form align=center method="POST" action="index.html"><input class="nav-link logout" type="submit" name=submit4 value="Log Out" />
        </form>
    </li>
                    </ul>
                </div>
        </div>
        </nav>
    </header>';
echo'<br><br><br>';
if ($result->num_rows > 0) {
   // output data of each row

echo'<div class="container"><div class="table-responsive">';
echo'<table border=1 align=center class="table table-striped table-bordered table-hover">
<th>NAME</th>
<th>ROLL NO</th>
<th>CURRENT COURSE</th>
<th>CURRENT YEAR</th>
<th>DATE</th>';
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td>'.$row["NAME"].'</td>';
echo '<td>'.$row["ROLL_NO"].'</td>';
echo '<td>'.$row["CURRENT_COURSE"].'</td>';
echo '<td>'.$row["CURRENT_YEAR"].'</td>';
echo '<td>'.$row["day"].'</td>';
echo '</tr>';
    }
echo '</table></div></div>';
}
else {
echo '<p align=center>No data for today</p>';
}
echo '<br><br><br>';
echo'<div class="container">
        <form align=center method="POST" action="faculty_login.php">
        <input type="hidden" name="txt1" value='.$username.'>
        <input type="hidden" name="txt2" value='.$password.'>
        <input type="submit" name=submit value="Back"
                class="btn btn-outline-dark" />
        </form>
    </div>';
echo '<br><br>';
echo '<footer class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; zeem.Chaudhary &nbsp; Apurva.Bhosle &nbsp; Jayesh.Ghosh</small>
        </div>
    </footer>';


echo'<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>';
echo'<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>';
echo'<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>';
echo '</body>';
echo '</html>';
}
else{
include('faculty.html');
}
?>