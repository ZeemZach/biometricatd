<?php
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
$username = $_POST['txt1'];
$password = $_POST['txt2'];
$dbconnect=mysqli_connect('localhost','id10760561_biometricatd','00123456');
mysqli_select_db($dbconnect,"id10760561_biometric_attendance");
$sql="select * from faculty_register where LOGIN_ID='$username' and PASSWORD='$password'";
$result=mysqli_query($dbconnect,$sql);
$row =mysqli_fetch_array($result);
$name = $row['NAME'];
$url='http://biometricatd.000webhostapp.com/faculty.html';
if($row["LOGIN_ID"]==$username && $row["PASSWORD"]==$password && $username!="" && $password!="")
{
echo '<!DOCTYPE html>

<html>
<head>
    <title>FACULTY_PORTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/inside.css" type="text/css">


</head>

<body>
    <header>
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
                    </ul>
                </div>
        </div>
        </nav>
    </header>

    <div class="jumbotron">
        <h1 style="color:white;">'.$name.',Welcome to College Attendance Portal!</h1>
        <p>
            <a href="#" class="btn btn-light" role="button">Learn more</a>
        </p>
    </div>

    <div class="container">
        <form align=center method="POST" action="student_detail.php"><input type=hidden name=txt1 value='.$username.'><input  type=hidden name=txt2 value='.$password.'><input type=submit name=submit1
                value="Details of students" class="btn btn-outline-dark" /></form>
    </div>
    <br>
    <div class="container">
        <form align=center method="POST" action="show.php"><input type=hidden name=txt1 value='.$username.'><input  type=hidden name=txt2 value='.$password.'><input type="submit" name=submit2 value="Todays attendance"
                class="btn btn-outline-dark" /></form>
    </div>
    <br>
    <div class="container">
        <form align=center method="POST" action="all_time_atd.php"><input type=hidden name=txt1 value='.$username.'><input  type=hidden name=txt2 value='.$password.'><input type="submit" name="submit3"
                value="Everyday attendance" class="btn btn-outline-dark" /></form>
    </div>
    <br>
    <div class="container">
        <form align=center method="POST" action="index.html"><input type=hidden name=txt1 value='.$username.'><input  type=hidden name=txt2 value='.$password.'><input type="submit" name=submit4 value="sign out"
                class="btn btn-outline-dark" />
        </form>
    </div>

    <br>
    <footer class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; zeem.Chaudhary &nbsp; Apurva.Bhosle &nbsp; Jayesh.Ghosh</small>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>';
}
else
{
include('faculty.html');
}
?>

