<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
<?php
if(isset($_POST['submit1']))
{
include('student_register_form.php');
        }
 else if(isset($_POST['submit2']))
 {  
  include('student_login.php');
}
 ?>
</body>
</html>