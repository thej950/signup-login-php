<?php
    $servername = "mysql"; //container name or if machine replace to hostname 
    $username = "thej";
    $password = "thej123";
    $database = "ssc";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Database connected successfully.";
    }
?>
