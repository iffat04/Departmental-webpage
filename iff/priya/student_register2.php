<?php 

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    $fathername = $_GET["fathername"];
    $studentphnno = $_GET["studentphnno"];
    $parentsphnno = $_GET["parentsphnno"];
    $ctmarks1 = $_GET["ctmarks1"];

$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:.$conn->connect_error");
}
    $sql="INSERT INTO MyStudentsjunior(firstname,lastname,email,fathername,studentphnno,parentsphnno,ctmarks1)
    VALUES('$firstname','$lastname','$email','$fathername','$studentphnno','$parentsphnno','$ctmarks1')";
    if($conn->query($sql)===TRUE){
        echo "New record created successfully";
    }
    else{
        echo "error creating record:".$conn->error;
    }
    $conn->close();
    ?>
?>