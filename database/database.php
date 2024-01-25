<?php
    $servername = "localhost:8111"; // emri i serverit, ti e ki localhost
    $username = "root"; // emri i llogaris n mysql
    $password = ""; // passi, ti ski password ja qon t that
    $dbname = "autosalloni";

    // variabla con e man ni objekt t mysqli, qe pi bjen lidhjen me db me qato t dhana qe ja ke qu n kllapa
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // nese rastsisht deshton nalet programi ta qet errorin
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>