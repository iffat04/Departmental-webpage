<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
    }
    $sql="SELECT id,firstname,lastname,email,fathername,studentphnno,parentsphnno FROM mystudents";
    $result=$conn->query($sql);
    
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            
            echo "id:<br>".$row["firstname"]." NAME:<br>".$row["firstname"]."".$row["lastname"].""."email:<br>".$row["email"]."". "fathername:<br>".$row["fathername"]."studentphnno<br>".$row["studentphnno"].""."parentsphnno<br>".$row["parentsphnno"]."";
          }
    }
  else{
  echo "0 results";
        }
        $conn->close();
?>