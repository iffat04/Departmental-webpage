<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:.$conn->connect_error");
}
    $sql="CREATE TABLE MyStudentsjunior(id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30)NOT NULL,
    email VARCHAR(50),
    fathername VARCHAR(30),
    studentphnno int(20),
    parentsphnno int(20),
    ctmarks1 int(3))";
    
    if($conn->query($sql)===TRUE){
        echo "Table MyStudents created successfully";
    }
    else{
        echo "error creating table:".$conn->error;
    }
    $conn->close();
    ?>