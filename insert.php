<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => web
        $conn = mysqli_connect("localhost", "root", "", "web");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile=  $_REQUEST['mobile'];
        $order=  $_REQUEST['order'];
         
        // Performing insert query execution
        // here our table name is dataaweb
        $sql = "INSERT INTO dataaweb VALUES ('$name',
            '$email','$mobile','$order')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Your Request has been Submitted</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>