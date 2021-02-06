<html>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "password";
        //creat connection
        $conn = mysqli_connect($servername,$username,$password);
        //check connection
        if($conn->connection_error){
            die("connection failed:".$conn->connect_error);
        }
        //creat database
        $sql = "CREAT DATABASE myDB";
        if($conn->query($sql)===TRUE){
            echo "Database created successfully";
        }
        else{
            echo "error creating database:".$conn->error;
        }
        ?>
</html>