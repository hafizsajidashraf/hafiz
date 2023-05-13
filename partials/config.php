<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "allahyar_academy";

    $connection = mysqli_connect($servername, $username, $password, $database);
    if (!$connection) {
        echo "<div class= alert alert-danger>Database not connected</div>";
    }

    ob_start();

    session_start();
    
?>