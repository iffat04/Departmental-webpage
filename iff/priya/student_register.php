<?php 

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    $fathername = $_GET["fathername"];
    $studentphnno = $_GET["studentphnno"];
    $parentsphnno = $_GET["parentsphnno"];
    
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:.$conn->connect_error");
}
    $sql="INSERT INTO mystudents(firstname,lastname,email,fathername,studentphnno,parentsphnno)
    VALUES('$firstname','$lastname','$email','$fathername','$studentphnno','$parentsphnno')";
    if($conn->query($sql)===TRUE){
        echo "New record created successfully";
    }
    else{
        echo "error creating record:".$conn->error;
    }
    $conn->close();
    ?>

    <html>

<!--body>
    <form action ="/priya/student_register.php" method = "GET">
    first name:<br>
    <input type="text" name="firstname"value="first name">
    <br>
    last name:<br>
    <input type="text" name="lastname"value="last name">
    <br>
    email:<br>
    <input type="text"name="email"value="email">
    <br>
    fathername:<br>
    <input type="text"name="fathername"value="fathername">
    <br>
    studentphnno:<br>
    <input type="text"name="studentphnno"value="studentphnno">
    <br>
    parentsphnno:<br>
    <type="text"name="parentsphnno"value="parentsphnno">
    <br>
    
    <input type="submit"value="submit">
    </form>
</body-->

</html>