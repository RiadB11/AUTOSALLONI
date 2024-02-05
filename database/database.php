<?php
    $servername = "localhost:8111"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "autosalloni";

    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // nese rastsisht deshton nalet programi ta qet errorin
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
