<?php
$servername= "localhost";
$username = "root";
$password = "";
$db = "ctmarks";
$con = mysqli_connect($servername,$username,$password,$db);
if($conn->connect_error)

    echo "connection failed:<br>" ;
else echo"connected<br>";
$login_user = $_GET['username'];
$login_pass = $_GET['password'];
$insert = "insert into userlogin
(username,password)
VALUES
('$login_user','$login_pass');
";
if($con->query($insert))
echo "data inserted";
else
echo "not inserted<br>".($con->error);
?>